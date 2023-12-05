<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                <div class="firstRow">
                    <!-- style="display: grid; flex-direction: column; -->
                    <div>
                        <label for="surname">Họ</label>
                        <br>
                        <input type="text" , id="surname">
                    </div>
                    <div>
                        <label for="name">Tên</label>
                        <br>
                        <input type="text" , id="name">
                    </div>
                </div>
                <div class="secondRow">
                    <label for="phoneNumber">Số điện thoại</label>
                    <br>
                    <input type="text" , id="phoneNumber">
                </div>
                <div class="thirdRow">
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
                <div class="fourthRow">
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