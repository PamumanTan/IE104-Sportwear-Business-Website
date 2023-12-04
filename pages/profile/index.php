<?php
?>

<!DOCTYPE html> <!--Define the version of HTML-->
<html lang="vi"> <!--Set the language-->

<head>
    <title>Products</title>
    <meta name="description" content="This webpage shows products list"> <!--Set the content-->
    <meta charset="utf-8"> <!--Set the charset to Unicode-->
    <link rel="stylesheet" href="./style.css">
    <!-- css for navbar -->
    <link rel="stylesheet" href="../../components/navbar/style.css">
    <link rel="stylesheet" href="../../components/navbar_logined/style.css">
    <link rel="stylesheet" href="../../assets/icons/themify-icons/themify-icons.css">
    <!-- css for footer -->
    <link rel="stylesheet" href="../../components/footer/style.css">
    <link rel="stylesheet" href="../../resources/css/root.css">
</head>

<body>
    <!-- Check if user logined or not -->
    <?php
    include "../../controllers/verify_token.php";
    include "../../db/connection.php";
    include "../../helpers/jwt.php";
    $user = checkAuthorization('execQuery', 'Token::Verify');
    if ($user) {
        include_once "../../components/navbar_logined/index.php";
    } else {
        include_once "../../components/navbar/index.php";
    }
    ?>
    <div class="page-container">
        <div id="header">
            <h1>Hồ sơ của tôi</h1>
        </div>
        <div class="profile-container">
            <div class="profile-left">
                <div class="avatar">
                    <img src="https://i.pinimg.com/564x/14/64/29/146429d7896694e3c361e0d3f957cedd.jpg" alt="Avatar">
                </div>
                <div class="bio">
                    <h2 id="name">Lionel Messi</h2>
                    <p id="biography">Greatest of all time - G.O.A.T</p>
                </div>
                <div class="statistics">
                    <div class="total-paid">
                        <h4>100.000 VND</h4>
                        <p>Đã chi</p>
                    </div>
                    <div class="line-y"></div>
                    <div class="purchased">
                        <h4>20</h4>
                        <p>Đơn hàng</p>
                    </div>
                </div>
            </div>
            <div class="line-y"></div>
            <div class="profile-right">
                <div>
                    <h2>Thông tin chi tiết</h2>
                    <div class="line"></div>
                </div>
                <form>
                    <label for="address">
                        <h4>Địa chỉ</h4>
                        <textarea class="text-content" name="address" id="address" cols="70"
                            rows="5">Ký túc xá khu B: Đường Mạc Đĩnh Chi, Khu phố Tân Hòa, Phường Đông Hòa, Thành phố Dĩ An, Tỉnh Bình Dương</textarea>
                    </label>

                    <label for="email">
                        <h4>Email</h4>
                        <input class="text-content" type="text" value="goat@gmail.com">
                    </label>

                    <label for="phone-number">
                        <h4>Số điện thoại</h4>
                        <input class="text-content" type="text" value="1037-0650">
                    </label>
                    <br>
                    <input id="save" type="submit" value="Lưu">
                </form>
                <!-- <button id="save">Lưu</button> -->
            </div>
        </div>
    </div>
    <!-- footer -->
    <?php
    include '../../components/footer/index.php';
    ?>
    <script src="./script.js" defer></script>
    <script src="../../components/navbar/script.js"></script>
</body>

</html>