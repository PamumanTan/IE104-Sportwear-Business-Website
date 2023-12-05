<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="This webpage shows the purchased history of user"> 
    <title>Lịch sử mua hàng</title>
    <link rel="icon" type="image/x-icon" href="../../assets/icons/favicon.png">
    <link rel="stylesheet" href="../../components/navbar/style.css">
    <link rel="stylesheet" href="../../components/footer/style.css">
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="../../components/navbar_logined/style.css">
    <link rel="stylesheet" href="../../assets/icons/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="../../resources/css/root.css">
</head>

<body>
    <main class="root-main">
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
            <h1>Lịch sử mua hàng</h1>
            <div class="select-div">
                <select name="recent-time-select" id="recent-time">
                    <option value="all-time">Toàn bộ lịch sử</option>
                    <option value="day">Hôm nay</option>
                    <option value="week">Tuần này</option>
                    <option value="month">Tháng này</option>
                    <option value="3-month">3 tháng gần đây</option>
                    <option value="year">Năm này</option>
                </select>
            </div>
            <div class="table-container">
                <div class="table">
                    <div class="table-header">
                        <div class="header__item" id="narrow">
                            <p>MÃ ĐƠN HÀNG</p>
                        </div>
                        <div class="header__item" id="narrow"><a class="filter__link" href="#">NGÀY ĐẶT HÀNG</a>
                        </div>
                        <div class="header__item" id="narrow">
                            <a class="filter__link filter__link--number" href="#">
                                TỔNG TIỀN
                            </a>
                        </div>
                        <div class="header__item" id="wide">
                            <p>THÔNG TIN NGƯỜI NHẬN</p>
                        </div>
                    </div>
                    <div class="table-content" id="style-3">
                        <!-- Generate data from database -->
                        <?php
                        include "../../helpers/dateFormat.php";
                        $query = "SELECT * FROM orders WHERE user_id = " . $user['user_id'];
                        $result = execQuery($query);
                        if ($result->num_rows > 0) {
                            $row = $result->fetch_assoc();
                            for ($i = 0; $i < $result->num_rows; $i++) {
                        ?>
                                <div class="table-row">
                                    <div class="table-data narrow"><?php echo $row['id'] ?></div>
                                    <div class="table-data narrow"><?php echo convertDateFormat($row['created_at']) ?></div>
                                    <div class="table-data narrow total-money" id="total-money"><?php echo $row['total_money'] ?></div>
                                    <div class="table-data">
                                        <?php
                                        echo $row['shipping_address'];
                                        ?>
                                    </div>
                                </div>
                        <?php
                            }
                        }
                        ?>

                    </div>
                </div>
            </div>
        </div>
        <?php include_once "../../components/footer/index.php" ?>
    </main>
</body>

<script src="../../resources/js/root.js"></script>
<script src="./script.js" defer></script>
<script src="../../components/navbar/script.js"></script>

</html>