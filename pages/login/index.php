<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login </title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="wrap">
        <form action='../../controllers/login.php' method='post' class="form">
            <div class="headForm">
                <h2>Đăng nhập</h2>
                <p>Chưa có tài khoản? <a href="../register/" class="registerText">Đăng ký</a></p>
            </div>
            <div class="bodyForm">
                <div class="firstRow">
                    <!-- style="display: grid; flex-direction: column; -->
                    <label for="phoneNumber">Số điện thoại</label>
                    <br>
                    <input type="text" , id="phoneNumber" name='phonenumber'>
                </div>
                <div class="secondRow">
                    <label for="password">Mật khẩu</label>
                    <br>
                    <input type="password" , id="password" name='password'>
                </div>
                <div class="thirdRow">
                    <div>
                        <input type="checkbox" id="check">
                        <label for="check">Ghi nhớ đăng nhập</label>
                    </div>
                    <div>
                        <a class="forgetPass" href="">Quên mật khẩu</a>
                    </div>
                </div>
            </div>
            <button class="loginButton">Đăng nhập</button>
        </form>
        <div class="logo-container">
            <div class="logo">
                <img src="../../assets/images/logo-removebg-preview.png" alt="Store's logo">
            </div>
        </div>
    </div>
</body>

</html>