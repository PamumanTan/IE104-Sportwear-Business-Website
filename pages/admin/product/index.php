<?php
include './product-row/index.php';
include '../../../components/admin-sidebar/index.php';
?>

<!DOCTYPE html> <!--Define the version of HTML-->
<html lang="vi"> <!--Set the language-->

<head>
    <title>Quản lí sản phẩm</title>
    <meta charset="utf-8"> <!--Set the charset to Unicode-->
    <link rel="icon" type="image/png" href="../../../assets/images/logo-removebg-preview.png">
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="../../../components/admin-sidebar/style.css">
    <link rel="stylesheet" href="./product-row/style.css">
</head>

<body>
    <?php SideBar_Start(); ?>

    <main class="product-management-content">
        <div class="product-management-title">
            <h1>Quản lí sản phẩm</h1>
        </div>

        <div class="product-management-filter">
            <div class="product-management-filter-option">
                <label>Mã sản phẩm</label>
                <input type="text" id="product-id" class="product-management-filter-text" placeholder="Mã sản phẩm">
            </div>
            <div class="product-management-filter-option">
                <label>Tên sản phẩm</label>
                <input type="text" id="product-name" class="product-management-filter-text" placeholder="Tên sản phẩm">
            </div>
            <div class="product-management-filter-option">
                <label>Giá sản phẩm</label>
                <div class="product-management-filter-option-range">
                    <input type="text" id="product-min-price" class="product-management-filter-text" value="0">
                    <input type="text" id="product-max-price" class="product-management-filter-text" value="500.000">
                </div>
            </div>
            <div class="product-management-filter-option">
                <label>Số lượt mua</label>
                <div class="product-management-filter-option-range">
                    <input type="text" id="product-min-sale-number" class="product-management-filter-text" value="0">
                    <input type="text" id="product-max-sale-number" class="product-management-filter-text" value="200">
                </div>
            </div>
        </div>

        <div>
            <table class="product-management-table">
                <tr class="product-management-table-row">
                    <th><input type="checkbox"></th>
                    <th><label>Mã sản phẩm</label></th>
                    <th><label>Tên sản phẩm</label></th>
                    <th><label>Giá sản phẩm</label></th>
                    <th><label>Số lượt mua</label></th>
                    <th><label>Hành động</label></th>
                </tr>

                <?php ProductRow('SP001', 'Giày Thượng Đình', '100.000 VNĐ', '200') ?>
                <?php ProductRow('SP001', 'Giày Thượng Đình', '100.000 VNĐ', '200') ?>
                <?php ProductRow('SP001', 'Giày Thượng Đình', '100.000 VNĐ', '200') ?>
            </table>

            <div class="product-management-add-product">
                <a href="./create/index.php">
                    <button>Thêm sản phẩm</button>
                </a>
            </div>
        </div>
    </main>

    <?php SideBar_End(); ?>

    <script src="./script.js"></script>
</body>

</html>