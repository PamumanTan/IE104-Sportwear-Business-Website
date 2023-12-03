<?php
include '../helpers/jwt.php';
include '../db/connection.php';

// Authorize
if (isset($_SERVER['REQUEST_METHOD']) && in_array($_SERVER['REQUEST_METHOD'], ['POST', 'GET'])) {
    if (!isset($_COOKIE['access_token'])) {
        echo json_encode([
            'message' => 'Unauthenticated',
            'error' => true
        ]);
        return;
    }

    $token = $_COOKIE['access_token'];
    $payload = Token::Verify($token);
    $user_id = $payload['id'];

    if (!$user_id) {
        echo json_encode([
            'message' => 'Unauthenticated',
            'error' => true
        ]);
        return;
    }
} else {
    echo "Wrong request method";
    return;
}

function addProductToCart($user_id) {
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
                    set total_money = total_money + " . $data['quantity'] . " * (select price from products where id = " . $product_id . ") 
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
            'message' => 'Add item to cart successfully',
            'error' => true
        ]);
    } else {
        echo json_encode([
            'message' => 'Add item to cart failed',
            'error' => true
        ]);
    }
}

function removeProductFromCart($user_id) {
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
            'message' => 'Product is not in cart',
            'error' => true
        ]);
        return;
    }
    
    
    $row = $result->fetch_assoc();
    $order_id = $row['order_id'];
    
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
    
    // minus the price of product to total money of order
    $query = "update orders 
            set total_money = total_money - " . $data['quantity'] . " * (select price from products where id = " . $product_id . ") 
            where id = " . $order_id;
    $result = execQuery($query);
    
    echo json_encode([
        'message' => 'Delete item from cart successfully',
        'error' => false
    ]);

}

function getAllDishesInCart($user_id) {
    $query = "select * from order_details join orders 
            where order_details.order_id = orders.id 
            and orders.user_id = " . $user_id . " 
            and orders.payed = 0";
    $result = execQuery($query);
    
    if ($result) {
        $products = [];
        while ($row = $result->fetch_assoc()) {
            $product_id = $row['product_id'];
            $query = "select * from products where id = " . $product_id;
            $product = execQuery($query)->fetch_assoc();
            $product['quantity'] = $row['quantity'];
            array_push($products, $product);
        }
    
        echo json_encode([
            'message' => 'Get cart successfully',
            'error' => false,
            'data' => $products
        ]);
    } else {
        echo json_encode([
            'message' => 'Get cart failed',
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
        getAllDishesInCart($user_id);
    }
} else if ($_SERVER['REQUEST_METHOD'] === 'GET') {
} else {
    echo "Wrong request method";
    return;
}
