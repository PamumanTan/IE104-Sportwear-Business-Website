<?php
include "../../../components/time-navbar/index.php";
// $time is the variable contain t query
$time = $_GET['t'] ?? 'week';
$GLOBALS['$time'] = $time;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sport</title>
    <link rel="stylesheet" href="./style.css" />
    <link rel="stylesheet" href="./report/style.css" />
    <link rel="stylesheet" href="../../../components/admin-sidebar/style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Serif:opsz,wght@8..144,300;8..144,400&family=Roboto:wght@100;300&display=swap" rel="stylesheet">
</head>

<body>
    <?php
    include('../../../components/sale-report-item/index.php');
    include("../../../components/admin-sidebar/index.php");
    $saleReportList = SaleReportItem('2022', '10', '4', '200', 20000000) .
        SaleReportItem('2022', '10', '4', '200', 20000000) .
        SaleReportItem('2022', '10', '4', '200', 20000000) .
        SaleReportItem('2022', '4', '4', '200', 20000000);
    ?>

    <?php SideBar_Start() ?>

    <main class="container">
        <h1>Báo cáo doanh thu</h1>

        <!-- Thanh top bar chứa các input -->
        <?php echo TimeNavBar() ?>

        <div class="list-container">
            <table class="customers-table">
                <thead>
                    <tr>
                        <th>
                            <input type="checkbox" name="check-all" />
                        </th>
                        <th>Năm</th>
                        <th class="cell-center">Tháng</th>
                        <th class="hover cell-center">Ngày</th>
                        <th class="hover cell-center">Số lượng sản phẩm bán được</th>
                        <th>Doanh thu</th>
                        <th>Hành động</th>
                    </tr>
                </thead>
                <tbody>
                    <?php echo $saleReportList ?>
                </tbody>
            </table>
        </div>

        <div class="customers-footer">
            <div class="pagination">
                <a class="active" href="#">1</a>
                <a href="#">2</a>
                <a href="#">3</a>
            </div>
            <button>Xuất báo cáo</button>
        </div>
    </main>

    <?php SideBar_End() ?>
    <?php include "./detail.php" ?>
    <script src="./script.js"></script>
</body>

</html>