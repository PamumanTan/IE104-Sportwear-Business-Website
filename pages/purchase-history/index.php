<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lịch sử mua hàng</title>
    <link rel="stylesheet" href="../../components/navbar/style.css">
    <link rel="stylesheet" href="../../components/footer/style.css">
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="../../components/navbar_logined/style.css">
    <link rel="stylesheet" href="../../assets/icons/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="../../resources/css/root.css">
    <style>
        :root {
            --base-spacing-unit: 24px;
            --half-spacing-unit: --base-spacing-unit / 2;

            --color-alpha: #1772FF;
            --color-form-highlight: #EEEEEE;
        }

        *,
        *:before,
        *:after {
            box-sizing: border-box;
        }

        body {
            padding: --base-spacing-unit;
            font-family: 'Source Sans Pro', sans-serif;
            margin: 0;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            margin: 0;
        }

        .container {
            max-width: 1000px;
            margin-right: auto;
            margin-left: auto;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .table {
            width: 100%;
            border: 1px solid --color-form-highlight;
        }

        .table-header {
            display: flex;
            width: 100%;
            background: #000;
            padding: (--half-spacing-unit * 1.5) 0;
        }

        .table-row {
            display: flex;
            width: 100%;
            padding: (--half-spacing-unit * 1.5) 0;

        }

        .table-row:nth-of-type(odd) {
            /* background-color: --color-form-highlight; */
            background-color: #ececec;
        }

        .table-data,
        .header__item {
            /* flex: 1 1 20%; */
            /* text-align: center; */
            padding: 10px 5px;
            line-height: 30px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .table-data:last-child {
            text-align: justify;
        }

        .header__item {
            text-transform: uppercase;
            color: white;
        }

        .filter__link {
            color: white;
            text-decoration: none;
            position: relative;
            display: inline-block;
            padding-left: --base-spacing-unit;
            padding-right: --base-spacing-unit;

            &::after {
                content: '';
                position: absolute;
                right: -(--half-spacing-unit * 1.5);
                color: white;
                font-size: --half-spacing-unit;
                top: 50%;
                transform: translateY(-50%);
            }

            &.desc::after {
                content: '(desc)';
            }

            &.asc::after {
                content: '(asc)';
            }

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
            background-color: #2e2e2e;
        }

        .page-container h1 {
            margin: 10px 0;
        }

        .page-container {
            display: flex;
            flex-direction: column;
            max-width: 1400px;
            margin: 0 auto;
            padding: 30px 100px;
            gap: 30px;
        }

        .select-div {
            margin-left: auto;
        }

        .select-div select {
            width: 160px;
            height: 40px;
            padding-left: 10px;
            outline: none;
            border: solid 2px black;
        }

        #wide.header__item {
            flex: 1;
        }

        #narrow.header__item {
            width: 200px;
            flex-shrink: 0;
        }

        .narrow.table-data {
            width: 200px;
            flex-shrink: 0;
        }

        .table-content {
            max-height: 480px;
            overflow-y: scroll;
        }
    </style>
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
                    $query = "SELECT * FROM orders WHERE user_id = " . $user['user_id'];
                    ?>
                    <div class="table-row">
                        <div class="table-data narrow">TS0047</div>
                        <div class="table-data narrow">27/11/2023</div>
                        <div class="table-data narrow" id="total-money">1200000</div>
                        <div class="table-data">
                            Ký túc xá khu B: Đường Mạc Đĩnh Chi, Khu phố Tân Hòa, Phường Đông Hòa,
                            Thành phố Dĩ An, Tỉnh Bình Dương
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <?php include_once "../../components/footer/index.php" ?>
</body>

<script src="../../resources/js/root.js"></script>
<script src="./script.js" defer></script>
<script src="../../components/navbar/script.js"></script>

</html>