<!DOCTYPE html>
<html lang="en">

<?php
include "../../../components/customer-item/index.php";
include "../../../components/admin-sidebar/index.php";

?>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sport</title>
    <link rel="stylesheet" href="./style.css" />
    <link rel="stylesheet" href="./customer/style.css" />
    <link rel="stylesheet" href="../../../components/admin-sidebar/style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Serif:opsz,wght@8..144,300;8..144,400&family=Roboto:wght@100;300&display=swap" rel="stylesheet">
</head>

<body>
    <?php SideBar_Start() ?>
    <main class="container">
        <h1>Quản lý đơn hàng</h1>

        <!-- Thanh top bar chứa các input -->
        <div class="search-customer">
            <div class="search-customer__card">
                <label for="customer-id"> Mã đơn hàng </label>
                <input class="search-customer__input-text" type="text" name="customer-id" id="customer-id" placeholder="Nhập mã sản phẩm" />
            </div>
            <div class="search-customer__card">
                <label for="customer-name"> Mã khách hàng </label>
                <input class="search-customer__input-text" type="text" name="customer-name" id="customer-name" placeholder="Nhập tên khách hàng" />
            </div>
            <div class="search-customer__card">
                <label for="#">Tổng thanh toán</label>
                <div class="flex-row justify-between">
                    <input type="text" name="payment-start" id="payment-start" class="search-customer__input-number" placeholder="0đ" />
                    <input type="text" name="payment-end" id="payment-end" class="search-customer__input-number" placeholder="500đ" />
                </div>
            </div>
            <div class="search-customer__card">
                <label for="#">ngày mua</label>
                <div class="flex-row justify-between">
                    <input type="text" name="purchase-start" id="purchase-start" class="search-customer__input-number" placeholder="0" />
                    <input type="text" name="purchase-end" id="purchase-end" class="search-customer__input-number" placeholder="100" />
                </div>
            </div>
        </div>

        <div class="list-container">
            <table class="customers-table">
                <thead>
                    <tr>
                        <th>
                            <input type="checkbox" name="check-all" />
                        </th>
                        <th>Mã đơn hàng</th>
                        <th class="cell-start">Mã khách hàng</th>
                        <th class="hover cell-start">Tổng thanh toán</th>
                        <th class="hover cell-start">Ngày mua</th>
                        <th>Hành động</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include "../../../db/connection.php";
                    include "../../../helpers/changePrice.php";
                    include "../../../helpers/dateFormat.php";
                    $query = "SELECT * FROM orders where payed = 1";
                    $result = execQuery($query);
                    for ($i = 0; $i < $result->num_rows; $i++) {
                        while ($row = $result->fetch_assoc()) {

                            echo CustomerItem($row["id"], $row["user_id"], changePrice($row['total_money']), convertDateFormat($row['created_at']));
                        }
                    }
                    ?>
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
    <script src="./script.js"></script>
    <script src="./customer/script.js"></script>
</body>

</html>