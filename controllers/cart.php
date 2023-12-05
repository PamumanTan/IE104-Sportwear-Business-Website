<?php
include '../helpers/jwt.php';
include '../db/connection.php';

// Authorize
if (isset($_SERVER['REQUEST_METHOD']) && in_array($_SERVER['REQUEST_METHOD'], ['POST', 'GET'])) {
    if (!isset($_COOKIE['access_token'])) {
        echo json_encode([
            'message' => 'Chưa xác thực',
            'error' => true
        ]);
        return;
    }

    $token = $_COOKIE['access_token'];
    $payload = Token::Verify($token);
    $user_id = $payload['id'];

    if (!$user_id) {
        echo json_encode([
            'message' => 'Chưa xác thực',
            'error' => true
        ]);
        return;
    }
} else {
    echo "Sai phương thức";
    return;
}

function addProductToCart($user_id)
{
    // Get data from request body
    $data = json_decode(file_get_contents('php://input'), true);

    // check if product is already in cart
    $product_id = $data['product_id'];
    $query = "select * from order_details join orders 
            where order_details.order_id = orders.id 
            and orders.user_id = " . $user_id . " 
            and order_details.product_id = " . $product_id . " 
            and orders.payed = 0";
    $result = execQuery($query);

    if ($result) {
        $row = $result->fetch_assoc();

        // if product is already in cart, update quantity
        if ($row) {
            $query = "update order_details 
                    set quantity = quantity + " . $data['quantity'] . " 
                    where order_id = " . $row['order_id'];
            $result = execQuery($query);

            // plus the price of product to total money of order
            $query = "update orders 
                    set total_money = total_money + " . $data['quantity'] . " * (select product_price from products where id = " . $product_id . ") 
                    where id = " . $row['order_id'];
            $result = execQuery($query);
        } else {
            // check if any order is not payed
            $query = "select * from orders 
                    where user_id = " . $user_id . " and payed = 0";
            $result = execQuery($query);

            // if there is no order not payed, create new order
            if (!$result || $result->num_rows == 0) {
                $query = "insert into orders (user_id, total_money) values (" . $user_id . ", 0)";
                $result = execQuery($query);
            }

            // get order id
            $query = "select * from orders 
                    where user_id = " . $user_id . " and payed = 0";
            $result = execQuery($query);
            $row = $result->fetch_assoc();
            if ($row) {
                $order_id = $row['id'];

                // insert new order detail
                $query = "insert into order_details (order_id, product_id, quantity) 
                        values (" . $order_id . ", " . $product_id . ", " . $data['quantity'] . ")";
                $result = execQuery($query);

                // plus the price of product to total money of order
                $query = "update orders 
                        set total_money = total_money + " . $data['quantity'] . " * (select price from products where id = " . $product_id . ") 
                        where id = " . $order_id;
                $result = execQuery($query);
            }
        }

        echo json_encode([
            'message' => 'Thêm sản phẩm vào giỏ hàng thành công',
            'error' => true
        ]);
    } else {
        echo json_encode([
            'message' => 'Thêm sản phẩm vào giỏ hàng thất bại',
            'error' => true
        ]);
    }
}

function removeProductFromCart($user_id)
{
    // Get data from request body
    $data = json_decode(file_get_contents('php://input'), true);


    // 1. get order id
    $product_id = $data['product_id'];
    $query = "select * from order_details join orders 
            where order_details.order_id = orders.id 
            and orders.user_id = " . $user_id . " 
            and order_details.product_id = " . $product_id . " 
            and orders.payed = 0";

    $result = execQuery($query);

    if (!$result || $result->num_rows == 0) {
        echo json_encode([
            'message' => 'Sản phẩm không tồn tại trong giỏ hàng',
            'error' => true
        ]);
        return;
    }


    $row = $result->fetch_assoc();
    $order_id = $row['order_id'];

    // find the order detail and minus the quantity of product to total money of order
    $query = "update orders 
            set total_money = total_money - " . $row['quantity'] . " * (select product_price from products where id = " . $product_id . ") 
            where id = " . $order_id;
    $result = execQuery($query);



    // 2. delete order detail
    $query = "delete from order_details 
            where order_id = " . $order_id . " and product_id = " . $product_id;
    $result = execQuery($query);


    // 3. delete order if no order detail left
    $query = "select * from order_details 
    where order_id = " . $order_id;
    $result = execQuery($query);
    if (!$result || $result->num_rows == 0) {
        $query = "delete from orders where id = " . $order_id;
        $result = execQuery($query);
    }


    echo json_encode([
        'message' => 'Xóa sản phẩm khỏi giỏ hàng thành công',
        'error' => false
    ]);
}

function getAllProductsInCart($user_id)
{
    // Get products from orders join order_details join products
    $query = "select products.id as product_id, product_image, product_name, product_price, product_size, order_details.quantity as order_quantity
            from products join order_details join orders
            where order_details.order_id = orders.id and order_details.product_id = products.id
            and payed = 0 and orders.user_id = " . $user_id;

    $result = execQuery($query);

    if ($result && $result->num_rows > 0) {
        $rows = $result->fetch_assoc();
        echo json_encode([
            'message' => 'Xem giỏ hàng thành công',
            'error' => false,
            'data' => $rows
        ]);
        
    } else if ($result && $result->num_rows == 0) {
        echo json_encode([
            'message' => 'Giỏ hàng trống',
            'error' => true
        ]);
    } else {
        echo json_encode([
            'message' => 'Xem giỏ hàng thất bại',
            'error' => true
        ]);
    }
}

function getCartTotalMoneyOfUser($user_id) {
    $query = "select sum(total_money) as total_money from orders where payed = 0 and user_id = " . $user_id;
    $result = execQuery($query);
    $row = $result->fetch_assoc();
    if ($row) {
        echo json_encode([
            'message' => 'Xem tổng tiền giỏ hàng thành công',
            'error' => false,
            'data' => $row['total_money']
        ]);
    } else {
        echo json_encode([
            'message' => 'Xem tổng tiền giỏ hàng thất bại',
            'error' => true
        ]);
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_GET['action'])) {
    $action = $_GET['action'];
    if ($action === 'add') {
        addProductToCart($user_id);
    } else if ($action === 'remove') {
        removeProductFromCart($user_id);
    }
} else if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['action'])) {
    $action = $_GET['action'];
    if ($action === 'get') {
        getAllProductsInCart($user_id);
    } else if ($action === 'number') {
        // Get cart number (number of product * quantity)
        $query = "select sum(quantity) as cart_number 
                from order_details join orders 
                where order_details.order_id = orders.id 
                and orders.user_id = " . $user_id . " 
                and orders.payed = 0";

        $result = execQuery($query);
        $row = $result->fetch_assoc();
        if ($row) {
            echo json_encode([
                'message' => 'Xem số lượng sản phẩm trong giỏ hàng thành công',
                'error' => false,
                'data' => $row['cart_number']
            ]);
        } else {
            echo json_encode([
                'message' => 'Xem số lượng sản phẩm trong giỏ hàng thất bại',
                'error' => true
            ]);
        }
    } else if ($action === 'total-money') {
        getCartTotalMoneyOfUser($user_id);
    }
} else {
    echo "Sai phương thức";
    return;
}
