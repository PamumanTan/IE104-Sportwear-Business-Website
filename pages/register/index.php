<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/x-icon" href="../../assets/icons/favicon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="This webpage shows register">
    <title>Đăng ký </title>
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="../../resources/css/root.css">
</head>

<body>
    <div class="wrap">
        <div class="form">
            <div class="headForm">
                <h2>Đăng ký</h2>
                <p>Đã có tài khoản? <a href="../login/" class="loginText">Đăng nhập</a></p>
            </div>
            <div class="bodyForm">
                <!-- <div class="firstRow">
                    <div>
                        <label for="lastname">Họ</label>
                        <br>
                        <input type="text" , id="lastname">
                    </div>
                    <div>
                        <label for="firstname">Tên</label>
                        <br>
                        <input type="text" , id="firstname">
                    </div>
                </div> -->
                <div class="secondRow">
                    <label for="username">Tên đăng nhập</label>
                    <br>
                    <input type="text" , id="username">
                </div>
                <div class="thirdRow">
                    <label for="phoneNumber">Số điện thoại</label>
                    <br>
                    <input type="text" , id="phoneNumber">
                </div>
                <div class="fourthRow">
                    <div>
                        <label for="password">Mật khẩu</label>
                        <br>
                        <input type="password" , id="password">
                    </div>
                    <div>
                        <label for="verify">Xác nhận mật khẩu</label>
                        <br>
                        <input type="password" , id="verify">
                    </div>
                </div>
                <p style="margin: 16px 0px">Sử dụng 8 ký tự trở lên kết hợp chữ cái, chữ số và ký hiệu đặc biệt !</p>
                <div class="fifthRow">
                    <input type="checkbox" id="check">
                    <label for="check">Hiển thị mật khẩu</label>
                </div>
            </div>
            <button class="registerButton">Tạo tài khoản</button>
        </div>
        <div class="logo">
            <img src="../../assets/images/logo-removebg-preview.png" alt="Store's logo">
        </div>
        <div id="snackbar"></div>
    </div>

    <script src="../../resources/js/root.js"></script>
    <script src="./script.js"></script>
</body>

</html>