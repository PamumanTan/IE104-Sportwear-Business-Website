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
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="../../components/navbar/style.css">
    <link rel="stylesheet" href="../../components/footer/style.css">
    <link rel="stylesheet" href="../../components/cart-product-item/style.css">
    <link rel="stylesheet" href="../../components/navbar_logined/style.css">
    <link rel="stylesheet" href="../../assets/icons/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="../../resources/css/root.css">
    <!-- cart-product-item và payment-product-item dùng chung 1 file css -->
    <script src="./script.js" defer></script>
</head>

<body>
    <?php include_once "../../components/navbar_logined/index.php"; ?>

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
                <div class="order-button" role="button">
                    <p>Đặt hàng</p>
                </div>
            </div>
            <div class="container">
                <div class="cart-container">
                    <h2>Giỏ hàng của bạn</h2>
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
    <div class="modal-background"></div>
    <div class="modal">
        <div class="modal-content">
            <h2>Đặt hàng thành công</h2>
            <p>Buy successfully.</p>
            <button id="closeModalBtn">Thoát</button>
        </div>
    </div>
    <!-- Chèn footer vào đây -->
    <?php include_once "../../components/footer/index.php" ?>
    <?php
    echo
    '<script>
            //Modal OrderButton
            const openModalButton = document.querySelector(".order-button");
            const closeModalButton = document.getElementById("closeModalBtn");
            const modal = document.querySelector(".modal");
            const modalBackground = document.querySelector(".modal-background");
            openModalButton.addEventListener("click", function () {
                modal.classList.add("active");
                modalBackground.classList.add("active");
            });
            
            closeModalButton.addEventListener("click", function () {
                modal.classList.remove("active");
                modalBackground.classList.remove("active");
            });
            modalBackground.addEventListener("click", function () {
                modal.classList.remove("active");
                modalBackground.classList.remove("active");
            });
        </script>'
    ?>
    <script src="../../components/navbar/script.js"></script>
</body>

</html>