<?php
?>

<!DOCTYPE html> <!--Define the version of HTML-->
<html lang="vi"> <!--Set the language-->

<head>
    <title>Sản phẩm</title>
    <link rel="icon" type="image/x-icon" href="../../assets/icons/favicon.png">
    <meta name="description" content="This webpage shows the profile of user"> <!--Set the content-->
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
    $sql = "SELECT * FROM users WHERE id = " . $user['user_id'];
    $result = execQuery($sql);
    $row = $result->fetch_assoc();
    ?>
    <div class="page-container">
        <div id="header">
            <h1>Hồ sơ của tôi</h1>
        </div>
        <div class="profile-container">
            <div class="profile-left">
                <div class="avatar">
                    <img src="<?php echo $row['avatar'] ?>" alt="User avatar">
                </div>
                <div class="bio">
                    <h2 id="name"><?php echo $row['username'] ?></h2>
                    <p id="biography"><?php echo $row['firstname'] . ' ' . $row['lastname']; ?></p>
                </div>
                <div class="statistics">
                    <div class="total-paid">
                        <h4><?php
                            $sql = "SELECT SUM(total_money) AS total FROM orders WHERE payed = 1 and user_id = " . $user['user_id'];
                            $totalMoney = execQuery($sql)
                                ->fetch_assoc()['total'];
                            echo $totalMoney;
                            ?></h4>
                        <p>Đã chi</p>
                    </div>
                    <div class="line-y"></div>
                    <div class="purchased">
                        <h4><?php
                            $sql = "SELECT COUNT(*) AS total FROM orders WHERE payed = 1 and user_id = " . $user['user_id'];
                            $totalOrder = execQuery($sql)
                                ->fetch_assoc()['total'];
                            echo $totalOrder;
                            ?></h4>
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
                        <textarea class="text-content" name="address" id="address" cols="70" rows="3" disabled>
                            <?php if ($row['address']) {
                                echo $row['address'];
                            } else {
                                echo 'Chưa cập nhật địa chỉ';
                            } ?>
                        </textarea>
                    </label>

                    <label for="email">
                        <h4>Email</h4>
                        <input class="text-content" type="text" value="<?php
                                                                        if ($row['email'])
                                                                            echo $row['email'];
                                                                        else
                                                                            echo 'Chưa cập nhật email'; ?>" disabled>
                    </label>

                    <label for="phone-number">
                        <h4>Số điện thoại</h4>
                        <input class="text-content" type="text" value="<?php echo $row['phonenumber'] ?>" disabled>
                    </label>
                    <br>
                    <div class="btn">
                        <input id="save" type="submit" value="Lưu">
                        <button type="button" id="edit">Sửa</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- footer -->
    <?php
    include '../../components/footer/index.php';
    ?>
    <script src="./script.js" defer></script>
    <script src="../../components/navbar/script.js"></script>
    <script src="../../resources/js/root.js"></script>
    <script>
        const totalMoney = document.querySelector('.total-paid h4');
        totalMoney.textContent = formatPrice(totalMoney.textContent);
    </script>
</body>

</html>