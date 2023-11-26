<?php
include '../../components/payment-product-item/index.php';
?>

<!-- Còn thiếu:
    - Tính tổng tiền sau khi get data từng sản phẩm 
    - Submit form to database
-->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thanh toán</title>
    <style>
        body {
            margin: 0;
            overflow-x: hidden;
        }

        .page-content {
            max-width: 1400px;
            margin: 0 auto;
            padding-left: 100px;
        }

        #heading {
            font-weight: bold;
            padding: 40px 0 20px 0;
        }

        .direct-text a {
            text-decoration: none;
            color: black;
        }

        .payment-page-container {
            width: 100vw;
            display: flex;
            flex-direction: row;
            /* margin-left: 100px;
            gap: 240px; */
            justify-content: space-between;
        }

        .payment-form {
            display: flex;
            flex-direction: column;
            /* padding: 30px 5px 0 50px; */
            gap: 16px;
        }

        .payment-form input {
            outline: none;
            border: solid 1px black;
            padding: 12px 10px;
        }

        .container {
            display: flex;
            flex-direction: column;
            margin: 0.75rem 0;
            gap: 30px;
        }

        .cart-container {
            display: flex;
            flex-direction: column;
            padding: 5px 10px;
            gap: 20px;
        }

        .total-container {
            display: flex;
            flex-direction: column;
            padding: 5px 10px;
        }

        .total-container div {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
        }

        #line {
            width: 100%;
            height: 1px;
            background-color: black;
        }

        .order-button {
            width: 100%;
            background-color: black;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            border-radius: 2px;
            cursor: pointer;
            transition: all 0.2s ease;
            padding: 14px 0;
        }

        .order-button:hover {
            opacity: 0.8;
        }

        .pay-button:hover {
            opacity: 0.8;
        }

        .total-container .total-div,

        .total-container .shipping-fee-div {
            margin: 0.5rem 0;
        }

        .total-container .total-pay {
            margin: 0.5rem 0 1rem 0;
        }

        .total-container h2 {
            margin: 0.75rem 0;
        }

        .pay-button {
            padding: 0.5rem 0.75rem;
        }

        .total-pay {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
        }

        .cart-product-list {
            display: flex;
            flex-direction: column;
            gap: 16px;
            overflow-y: scroll;
            max-height: 300px;
        }

        .cart-product-list #line {
            width: 90%;
            margin-left: 10px;
        }

        /* Scrollbar CSS */
        #style-3::-webkit-scrollbar-track {
            -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
            background-color: #f5f5f5;
        }

        #style-3::-webkit-scrollbar {
            width: 6px;
            background-color: #f5f5f5;
        }

        #style-3::-webkit-scrollbar-thumb {
            background-color: #000000;
        }
    </style>
    <link rel="stylesheet" href="../../components/navbar/style.css">
    <link rel="stylesheet" href="../../components/footer/style.css">
    <link rel="stylesheet" href="../../components/cart-product-item/style.css">
    <!-- cart-product-item và payment-product-item dùng chung 1 file css -->
    <script src="./script.js" defer></script>
</head>

<body>
    <?php include_once "../../components/navbar/index.php" ?>
    <div class="page-content">
        <h1 id="heading">Thanh toán</h1>
        <div class="payment-page-container">
            <div class="payment-form">
                <p>Thông tin giao hàng</p>
                <div id='customer-name'>
                    <input type="text" placeholder="Họ" id="first-name">
                    <input type="text" placeholder="Tên" id="last-name">
                </div>
                <input type="text" placeholder="Địa chỉ" id="address">
                <input type="text" placeholder="Ghi chú" id="note">
                <div id="save-info-checkbox">
                    <input type="checkbox" name="save-info" id="save-info">
                    <label for="save-info">Lưu thông tin</label>
                </div>
                <div class="order-button">
                    <p>Đặt hàng</p>
                </div>
            </div>
            <div class="container">
                <div class="cart-container">
                    <h2>Giỏ hàng của bạn</h2>
                    <!-- Chèn link direct đến page danh sách sản phẩm  -->
                    <!-- <div class="direct-text">
                        <p>Sẵn sàng thanh toán ?
                            <a href="#">Tiếp tục mua sắm</a>
                        </p>
                    </div> -->
                    <div class="cart-product-list" id="style-3">
                        <!-- Generate cart-product-item từ cartProductItem components -->
                        <?php
                        PaymentProductItem('https://thejerseyhubshop.com/cdn/shop/products/ScreenShot2023-06-07at2.35.25PM.png?v=1687310379', 'Áo đấu sân nhà mùa giải 2023/2024 bản player Thái Thun của CLB Real', 2500000, 'XL', 1);
                        echo '<div id="line"></div>';
                        PaymentProductItem('https://jerseysempire.com/cdn/shop/files/f1a7595d.webp?v=1692645760&width=533', 'Áo đấu sân nhà mùa giải 2023/2024 bản player Thái Thun của CLB Chelsea', 2500000, 'XL', 1);
                        echo '<div id="line"></div>';
                        PaymentProductItem('https://jerseysempire.com/cdn/shop/files/f1a7595d.webp?v=1692645760&width=533', 'Áo đấu sân nhà mùa giải 2023/2024 bản player Thái Thun của CLB Chelsea', 2500000, 'XL', 1);
                        echo '<div id="line"></div>';
                        PaymentProductItem('https://jerseysempire.com/cdn/shop/files/f1a7595d.webp?v=1692645760&width=533', 'Áo đấu sân nhà mùa giải 2023/2024 bản player Thái Thun của CLB Chelsea', 2500000, 'XL', 1);
                        ?>

                    </div>
                </div>
                <div class="total-container">
                    <h2>Tổng kết đặt hàng</h2>
                    <div class="total-div">
                        <p>Tổng tiền sản phẩm</p>
                        <p id="total"></p>
                    </div>
                    <div class="shipping-fee-div">
                        <p>Phí ship</p>
                        <p id="shipping-fee"></p>
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
    <!-- Chèn footer vào đây -->
    <?php include_once "../../components/footer/index.php" ?>
</body>

</html>