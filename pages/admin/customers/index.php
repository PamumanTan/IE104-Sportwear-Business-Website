<?php
include '../../../components/CustomerItem/index.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sport</title>
    <link rel="stylesheet" href="manage-customers.css" />
</head>

<body>
    <main class="container">
        <h1>Quản lý khách hàng</h1>

        <!-- Thanh top bar chứa các input -->
        <div class="search-customer">
            <div class="search-customer__card">
                <label for="customer-id"> Mã khách hàng </label>
                <input class="search-customer__input-text" type="text" name="customer-id" id="customer-id" placeholder="Nhập mã sản phẩm" />
            </div>
            <div class="search-customer__card">
                <label for="customer-name"> Tên khách hàng </label>
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
                <label for="#">Số lượt mua</label>
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
                        <th>Mã khách hàng</th>
                        <th class="cell-start">Tên khách hàng</th>
                        <th class="hover cell-start">Tổng thanh toán</th>
                        <th class="hover cell-start">Số lượng mua</th>
                        <th>Hành động</th>
                    </tr>
                </thead>
                <tbody>
                    <?php /** Đợi BE có API */ ?>
                    <?php CustomerItem('#AHGA68', 'Cristiano Ronaldo', '10000000đ', '3') ?>
                    <?php CustomerItem('#AHGA68', 'Cristiano Ronaldo Ronaldo Ronaldo Ronaldo', '10000000đ', '3') ?>
                    <?php CustomerItem('#AHGA68', 'Khánh', '10000000đ', '3') ?>
                </tbody>
            </table>
        </div>

        <div class="customers-footer">
            <div class="pagination">
                <?php /** Đợi BE */ ?>
                <a class="active" href="#">1</a>
                <a href="#">2</a>
                <a href="#">3</a>
            </div>
            <button>Xuất báo cáo</button>
        </div>
    </main>
    <script src="manage-customers.js"></script>
</body>

</html>