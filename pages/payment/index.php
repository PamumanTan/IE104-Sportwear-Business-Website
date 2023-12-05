<?php
include '../../components/payment-product-item/index.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thanh toán</title>
    <link rel="icon" type="image/x-icon" href="../../assets/icons/favicon.png">
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="../../components/navbar/style.css">
    <link rel="stylesheet" href="../../components/footer/style.css">
    <link rel="stylesheet" href="../../components/cart-product-item/style.css">
    <link rel="stylesheet" href="../../components/navbar/style.css">
    <link rel="stylesheet" href="../../components/navbar_logined/style.css">
    <link rel="stylesheet" href="../../assets/icons/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="../../resources/css/root.css">
    <!-- cart-product-item và payment-product-item dùng chung 1 file css -->
    <script src="./script.js" defer></script>
</head>

<body>
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

    <div class="page-content">
        <h1 id="heading">Thanh toán</h1>
        <div class="payment-page-container">
            <form class="payment-form">
                <p>Thông tin giao hàng</p>
                <div id='customer-name'>
                    <input type="text" placeholder="Họ" id="first-name" required>
                    <input type="text" placeholder="Tên" id="last-name" required>
                </div>
                <input type="text" placeholder="Địa chỉ" id="address" required>
                <input type="text" placeholder="Số điện thoại" id="phone-number" required>
                <input type="text" placeholder="Ghi chú" id="note">
                <div id="save-info-checkbox">
                    <input type="checkbox" name="save-info" id="save-info" required>
                    <label for="save-info">Lưu thông tin</label>
                </div>
                <div type="submit" class="order-button" role="button">
                    <p>Đặt hàng</p>
                </div>
            </form>
            <div class="container">
                <div class="cart-container">
                    <h2>Giỏ hàng của bạn</h2>
                    <div class="cart-product-list" id="style-3">
                        <!-- Generate cart-product-item từ cartProductItem components -->
                        <?php
                        $query = 'select product_image, product_name, product_price, product_size, order_details.quantity
                                from products join order_details join orders
                                where order_details.order_id = orders.id and order_details.product_id = products.id
                                and payed = 0 and orders.user_id = ' . $user['user_id'] . ' limit 5';
                        $result = execQuery($query);
                        if ($result && $result->num_rows > 0) {
                            $rows = $result->fetch_all();
                            foreach ($rows as $row) {
                                PaymentProductItem($row[0], $row[1], $row[2], $row[3], $row[4]);
                                echo '<div id="line"></div>';
                            }
                        } else {
                            echo '<p>Không có sản phẩm nào trong giỏ hàng</p>';
                        }
                        
                        ?>

                    </div>
                </div>

                <?php
                $query = "select total_money from orders where user_id = " . $user['user_id'] . " and payed = 0";
                $result = execQuery($query);
                if ($result && $result->num_rows > 0) {
                    $row = $result->fetch_assoc();
                } else {
                    $row = ['total_money' => 0];
                }
                ?>

                <div class="total-container">
                    <h2>Tổng kết đặt hàng</h2>
                    <div class="total-div">
                        <p>Tổng tiền sản phẩm</p>
                        <p id="total"><?php echo $row['total_money'] ?></p>
                    </div>
                    <div class="shipping-fee-div">
                        <p>Phí ship</p>
                        <p id="shipping-fee">0</p>
                    </div>
                    <div id="line"></div>
                    <div class="total-pay">
                        <p>Tổng</p>
                        <p id="total-pay"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include "../../components/notification-modal/index.php"; ?>
    <!-- Chèn footer vào đây -->
    <?php include_once "../../components/footer/index.php" ?>

    <script src="../../resources/js/root.js"></script>
    <script src="../../components/notification-modal/script.js"></script>
    <script src="../../components/navbar/script.js"></script>
</body>

</html>