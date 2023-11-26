<?php
include '../../../components/coupon-item/index.php';
include "../../../components/admin-sidebar/sidebar.php";


// Pagination
$page = $_GET['page'] ?? 1;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sport</title>
    <link rel="stylesheet" href="manage-coupon.css" />
    <link rel="stylesheet" hre f="coupons/manage-coupon.css" />
    <link rel="stylesheet" href="../../../components/admin-sidebar/sidebar.css">
    <link rel="stylesheet" href="coupons/coupon-modal.css">
</head>

<body>
    <?php SideBar_Start(); ?>
    <main class="container">
        <h1>Quản lý khuyến mãi</h1>

        <!-- Thanh top bar chứa các input -->
        <div class="search-customer">
            <div class="search-customer__card">
                <label for="coupon-id"> Mã khuyến mãi </label>
                <input class="search-customer__input-text" type="text" name="coupon-id" id="coupon-id" placeholder="Nhập mã sản phẩm" />
            </div>
            <div class="search-customer__card">
                <label for="coupon-percent"> % khuyến mãi </label>
                <input class="search-customer__input-text" type="text" name="percent-coupon" id="percent-coupon" placeholder="Nhập mã sản phẩm" />
            </div>
            <div class="search-customer__card">
                <label for="coupon-start-date"> Ngày bắt đầu </label>
                <input class="search-customer__input-text" type="text" name="coupon-start-date" id="coupon-start-date" placeholder="Nhập mã sản phẩm" />
            </div>
            <div class="search-customer__card">
                <label for="coupon-end-date"> Ngày kết thúc </label>
                <input class="search-customer__input-text" type="text" name="coupon-end-date" id="coupon-end-date" placeholder="Nhập mã sản phẩm" />
            </div>
            <div class="search-customer__card">
                <label for="coupon-status"> Trạng thái </label>
                <select class="search-customer__select" name="coupon-status" id="coupon-status">
                    <option value="pending">Chưa bắt đầu</option>
                    <option value="started">Đã bắt đầu</option>
                    <option value="ended">Đã kết thúc</option>
                </select>
            </div>
        </div>

        <div class="list-container">
            <table class="customers-table">
                <thead>
                    <tr>
                        <th>
                            <input type="checkbox" name="check-all" />
                        </th>
                        <th>Mã khuyến mãi</th>
                        <th class="">% khuyến mãi</th>
                        <th class="">Loại sản phẩm áp dụng</th>
                        <th class="">Ngày bắt đầu</th>
                        <th class="">Ngày kết thúc</th>
                        <th>Hành động</th>
                    </tr>
                </thead>
                <tbody>
                    <?php /** Đợi BE có API */ ?>
                    <?php CouponItem('KM001', '30%', 'Giày nam', '1/9/2022', '7/9/2022') ?>
                    <?php CouponItem('KM001', '30%', 'Giày nam', '1/9/2022', '7/9/2022') ?>
                    <?php CouponItem('KM001', '30%', 'Giày nam', '1/9/2022', '7/9/2022') ?>
                    <?php CouponItem('KM001', '30%', 'Giày nam', '1/9/2022', '7/9/2022') ?>
                    <?php CouponItem('KM001', '30%', 'Giày nam', '1/9/2022', '7/9/2022') ?>
                    <?php CouponItem('KM001', '30%', 'Giày nam', '1/9/2022', '7/9/2022') ?>
                    <?php CouponItem('KM001', '30%', 'Giày nam', '1/9/2022', '7/9/2022') ?>
                    <?php CouponItem('KM001', '30%', 'Giày nam', '1/9/2022', '7/9/2022') ?>
                    <?php CouponItem('KM001', '30%', 'Giày nam', '1/9/2022', '7/9/2022') ?>
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
            <button id="add-coupon-button"> Thêm khuyến mãi </button>
        </div>
    </main>
    <?php SideBar_End(); ?>
    <?php include "./detail.php"; ?>
    <?php include "./create.php"; ?>
    <script src="coupons/manage-coupon.js"></script>
</body>

</html>