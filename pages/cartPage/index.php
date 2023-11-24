<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giỏ hàng của tôi</title>
    <style>
        body{
            margin: 0;
            overflow-x: hidden;
        }
        #heading{
            font-weight: bold;
            margin-left: 100px;
            padding-top: 30px;
        }
        .direct-text a{
            text-decoration: none;
            color: black;
        }
        .container{
            display: flex;
            flex-direction: row;
            padding: 0 100px;
        }
        .container div{
            display: flex;
            flex-direction: column;
        }
        .cart-container{
            flex: 0.65;
            padding: 5px 10px 5px 0;
        }
        .total-container{
            flex: 0.35;
            padding: 5px 10px;
        }
        .total-container div:not(:last-child){
            display: flex;
            flex-direction: row;
            justify-content: space-between;
        }
        #line{
            width: 100%;
            height: 1px;
            background-color: black;
        }
        .pay-button{
            width: 100%;
            background-color: black;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            border-radius: 2px;
            cursor: pointer;
            transition: all 0.2s ease;
        }
        .pay-button:hover{
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
    </style>
    <link rel="stylesheet" href="../../components/NavBar/index.css">
    <script src="./cartPage.js" defer></script>
</head>
<body>
    <?php include_once "../../components/NavBar/index.php" ?>
    <h1 id="heading">Giỏ hàng của bạn</h1>
    <div class="container">
        <div class="cart-container">
            <!-- Chèn link direct đến page danh sách sản phẩm  -->
            <div class="direct-text">
                <p>Sẵn sàng thanh toán ?
                <a href="#">Tiếp tục mua sắm</a>
                </p>
            </div>
            <div class="cart-product-list">
                <!-- Generate cart-product-item từ cartProductItem components -->
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
            <div class="pay-button">
                <p>Tiếp tục thanh toán</p>
            </div>
        </div>
    </div>
    <!-- Chèn footer vào đây -->
</body>
</html>