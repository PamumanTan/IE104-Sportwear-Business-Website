<?php
include './product-category-row/index.php';
include '../../../components/admin-sidebar/index.php';
?>

<!DOCTYPE html> <!--Define the version of HTML-->
<html lang="vi"> <!--Set the language-->

<head>
    <title>Quản lí hạng mục</title>
    <meta charset="utf-8"> <!--Set the charset to Unicode-->
    <link rel="icon" type="image/png" href="../../../assets/images/logo-removebg-preview_50.png">
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="../../../components/admin-sidebar/style.css">
    <link rel="stylesheet" href="./product-category-row/style.css">
</head>

<body>
    <?php SideBar_Start(); ?>

    <main class="category-management-content">
        <div class="category-management-title">
            <h1>Quản lí hạng mục</h1>
        </div>

        <div class="category-management-filter">
            <div class="category-management-filter-option">
                <label>Mã loại sản phẩm</label>
                <input type="text" id="product_type_id" class="category-management-filter-text">
            </div>
            <div class="category-management-filter-option">
                <label>Tên loại sản phẩm</label>
                <input type="text" id="product_type_name" class="category-management-filter-text">
            </div>
            <div class="category-management-filter-option">
                <label>Trạng thái</label>
                <select class="category-management-filter-combobox">
                    <option value="-- Trạng thái --">-- Trạng thái --</option>
                    <option value="Chưa có sản phẩm">Chưa có sản phẩm</option>
                    <option value="Đã có sản phẩm">Đã có sản phẩm</option>
                </select>
            </div>
        </div>

        <div>
            <table class="category-management-table">
                <tr class="category-management-table-row">
                    <th><input type="checkbox"></th>
                    <th><label>Mã loại sản phẩm</label></th>
                    <th><label>Tên loại sản phẩm</label></th>
                    <th><label>Số lượng SP</label></th>
                    <!-- <th><label>Ngày tạo</label></th>
                    <th><label>Ngày sửa đổi gần nhất</label></th> -->
                    <th><label>Hành động</label></th>
                </tr>

                <?php
                include "../../../db/connection.php";
                $sql = "SELECT * FROM product_types";
                $result = execQuery($sql);
                for ($i = 0; $i < $result->num_rows; $i++) {
                    $row = $result->fetch_assoc();
                    // find number of products in this category
                    $sql = "SELECT COUNT(*) AS amount FROM products WHERE product_type_id = " . $row['id'];
                    $amount = execQuery($sql)->fetch_assoc()['amount'];

                    ProductCategoryRow($row['id'], $row['type_name'], $amount);
                }
                ?>
            </table>

            <a href="#" style="text-decoration: none;">
                <div class="category-management-add-category">
                    <button>Thêm loại sản phẩm</button>
                </div>
            </a>
        </div>
    </main>

    <?php SideBar_End(); ?>

    <script src="./script.js"></script>
    <script>
        document.getElementById("category").style.color = "#013cc6";
    </script>
</body>

</html>