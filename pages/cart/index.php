<?php
include "../../components/cart-product-item/index.php"
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="This webpage shows the cart of user"> <!--Set the content-->
    <title>Giỏ hàng của tôi</title>
    <link rel="icon" type="image/x-icon" href="../../assets/icons/favicon.png">
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="../../components/navbar/style.css">
    <link rel="stylesheet" href="../../components/footer/style.css">
    <link rel="stylesheet" href="../../components/cart-product-item/style.css">
    <link rel="stylesheet" href="../../components/navbar_logined/style.css">
    <link rel="stylesheet" href="../../components/notification-modal/style.css">
    <link rel="stylesheet" href="../../assets/icons/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="../../resources/css/root.css">
    <script src="./script.js" defer></script>
</head>

<body>
    <main class='root-main'>
        <?php
        include_once "../../controllers/verify_token.php";
        include "../../db/connection.php";
        require("../../helpers/jwt.php");
        $user = checkAuthorization('execQuery', 'Token::Verify');
        if ($user) {
            include_once "../../components/navbar_logined/index.php";
        } else {
            header("Location: ../../pages/login/index.php");
        }
        ?>
        <div class="content-main">


            <h1 id="heading">Giỏ hàng của bạn</h1>
            <div class="container">
                <div class="cart-container">
                    <!-- Chèn link direct đến page danh sách sản phẩm  -->
                    <div class="direct-text">
                        <p>Sẵn sàng thanh toán?
                            <a href="/sportswear/pages/product-list/">Tiếp tục mua sắm</a>
                        </p>
                    </div>
                    <div class="cart-product-list" id="style-3">
                        <!-- Generate cart-product-item từ cartProductItem components -->
                        <?php
                        $query = 'select products.id as product_id, product_image, product_name, product_price, product_size, order_details.quantity
                        from products join order_details join orders
                        where order_details.order_id = orders.id and order_details.product_id = products.id
                        and payed = 0 and orders.user_id = ' . $user['user_id'] . ' limit 5';
                        $result = execQuery($query);
                        if ($result && $result->num_rows > 0) {
                            $rows = $result->fetch_all();
                            foreach ($rows as $row) {
                                CartProductItem($row[0], $row[1], $row[2], $row[3], $row[4], $row[5]);
                            }
                        } else {
                            echo "<h2>Không có sản phẩm nào trong giỏ hàng</h2>";
                        }
                        ?>
                    </div>
                </div>
                <div class="total-container">
                    <?php
                    $query = "select total_money from orders where user_id = " . $user['user_id'] . " and payed = 0";
                    $result = execQuery($query);
                    if ($result && $result->num_rows > 0) {
                        $row = $result->fetch_assoc();
                    } else {
                        $row = ['total_money' => 0];
                    }
                    ?>
                    <h2>Tổng kết đặt hàng</h2>
                    <div class="total-div">
                        <p>Tổng tiền sản phẩm</p>
                        <p id="total"><?php echo $row['total_money']; ?> </p>
                    </div>
                    <div class="shipping-fee-div">
                        <p>Phí ship</p>
                        <p id="shipping-fee">0</p>
                    </div>
                    <div id="line"></div>
                    <div class="total-pay">
                        <p>Tổng</p>
                        <p id="total-pay"><?php echo $row['total_money'] + 0; ?> </p>
                    </div>
                    <div class="pay-button primary-button-hover">
                        <p>Tiếp tục thanh toán</p>
                    </div>
                </div>
            </div>
        </div>



        <!-- Chèn footer vào đây -->
        <?php include_once "../../components/footer/index.php" ?>
        <?php include '../../components/notification-modal/index.php' ?>
    </main>


    <script src="../../resources/js/root.js"></script>
    <script src="../../components/navbar/script.js"></script>
    <script src="../../components/notification-modal/script.js"></script>
</body>

</html>