<?php
include "./bill-product-item/index.php"
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giỏ hàng của tôi</title>
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="../../../components/navbar/style.css">
    <link rel="stylesheet" href="../../../components/footer/style.css">
    <link rel="stylesheet" href="../../../components/cart-product-item/style.css">
    <link rel="stylesheet" href="../../../components/navbar_logined/style.css">
    <link rel="stylesheet" href="../../../assets/icons/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="../../../resources/css/root.css">
    <script src="./script.js" defer></script>
</head>

<body>
    <?php
    include_once "../../../controllers/verify_token.php";
    include "../../../db/connection.php";
    require("../../../helpers/jwt.php");
    $user = checkAuthorization('execQuery', 'Token::Verify');
    if ($user) {
        include_once "../../../components/navbar_logined/index.php";
    } else {
        include_once "../../../components/navbar/index.php";
        // redirect to login page
        // header("Location: ../../../pages/login/index.php");
    }
    ?>


    <div class="container">
        <h1 id="heading">Chi tiết đơn hàng</h1>

        <div class="cart-container">
            <div class="direct-text">
                <p>Mã đơn hàng: </p>
                <p>B091823</p>
            </div>
            <div class="cart-product-list" id="style-3">
                <!-- Generate cart-product-item từ billProductItem components -->
                <?php
                BillProductItem('https://product.hstatic.net/200000278317/product/giay-da-bong-nike-phantom-gx-academy-tf-dd9477-300-1_f1d02e8f44c54354a056c0845f5f3e3b_grande.jpg', 'NIKE PHANTOM GX ACADEMY TF - DD9477-300 - XANH LÁ/TRẮNG', '200.000 VND', 'XL', 1);
                BillProductItem('https://product.hstatic.net/200000278317/product/giay-da-bong-nike-phantom-gx-academy-tf-dd9477-300-1_f1d02e8f44c54354a056c0845f5f3e3b_grande.jpg', 'NIKE PHANTOM GX ACADEMY TF - DD9477-300 - XANH LÁ/TRẮNG', '200.000 VND', 'XL', 1);
                BillProductItem('https://product.hstatic.net/200000278317/product/giay-da-bong-nike-phantom-gx-academy-tf-dd9477-300-1_f1d02e8f44c54354a056c0845f5f3e3b_grande.jpg', 'NIKE PHANTOM GX ACADEMY TF - DD9477-300 - XANH LÁ/TRẮNG', '200.000 VND', 'XL', 1);
                BillProductItem('https://product.hstatic.net/200000278317/product/giay-da-bong-nike-phantom-gx-academy-tf-dd9477-300-1_f1d02e8f44c54354a056c0845f5f3e3b_grande.jpg', 'NIKE PHANTOM GX ACADEMY TF - DD9477-300 - XANH LÁ/TRẮNG', '200.000 VND', 'XL', 1);
                ?>
            </div>
        </div>

        <div class="total-container">
            <div class="total-div">
                <p>Tổng tiền sản phẩm</p>
                <p id="total">100.000.000 VND</p>
            </div>
            <div class="shipping-fee-div">
                <p>Phí ship</p>
                <p id="shipping-fee">100.000.000 VND</p>
            </div>
            <div id="line"></div>
            <div class="total-pay">
                <p>Tổng</p>
                <p id="total-pay">100.000.000 VND</p>
            </div>
        </div>
    </div>
    <!-- Chèn footer vào đây -->
    <?php include_once "../../../components/footer/index.php" ?>
    <script src="../../../components/navbar/script.js"></script>
</body>

</html>