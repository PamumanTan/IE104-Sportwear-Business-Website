<?php
include '../../components/Admin_SideBar/Sidebar.php';
include '../../components/ProductRow/index.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../components/Admin_SideBar/Sidebar.css">
    <link rel="stylesheet" href="./index.css">
</head>

<body>
    <?php
    SideBar_Start();
    ?>
    <main class='product-management-content'>
        <div class='product-management-title'>
            <h1>Quản lí sản phẩm</h1>
        </div>

        <div class='product-management-filter'>
            <div class='product-management-filter-option'>
                <label>Mã sản phẩm</label>
                <input type='text' id='product-id' class='product-management-filter-text' placeholder='Nhập mã sản phẩm'>
            </div>
            <div class='product-management-filter-option'>
                <label>Tên sản phẩm</label>
                <input type='text' id='product-name' class='product-management-filter-text' placeholder='Nhập tên sản phẩm'>
            </div>
            <div class='product-management-filter-option'>
                <label>Giá sản phẩm</label>
                <div class='product-management-filter-option-range'>
                    <input type='text' id='product-min-price' class='product-management-filter-text' value='0'>
                    <input type='text' id='product-max-price' class='product-management-filter-text' value='500.000'>
                </div>
            </div>
            <div class='product-management-filter-option'>
                <label>Số lượt mua</label>
                <div class='product-management-filter-option-range'>
                    <input type='text' id='product-min-sale-number' class='product-management-filter-text' value='0'>
                    <input type='text' id='product-max-sale-number' class='product-management-filter-text' value='200'>
                </div>
            </div>
        </div>

        <div>
            <table class='product-management-table'>
                <tr class='product-management-table-row'>
                    <th><input type='checkbox'></th>
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

            <div class='product-management-add-product'>
                <a href="../create/index.php">
                    <button>Thêm sản phẩm</button>
                </a>
            </div>
        </div>
    </main>;

    <?php
    SideBar_End();
    ?>
</body>

</html>