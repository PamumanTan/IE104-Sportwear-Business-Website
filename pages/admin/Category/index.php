<?php
    include '../../../components/ProductCategoryRow/index.php';
    include '../../../components/Admin_SideBar/Sidebar.php';
?>

<!DOCTYPE html>		<!--Define the version of HTML-->
<html lang="vi">	<!--Set the language-->
	<head>
		<title>Quản lí hạng mục</title>
		<meta charset="utf-8" >		<!--Set the charset to Unicode-->
		<link rel="icon" type="image/png" href="../../../assets/images/logo-removebg-preview_50.png">
		<link rel="stylesheet" href="./style.css">
        <link rel="stylesheet" href="../../../components/Admin_SideBar/Sidebar.css">
        <link rel="stylesheet" href="../../../components/ProductCategoryRow/style.css">
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
                        <th><label>Ngày tạo</label></th>
                        <th><label>Ngày sửa đổi gần nhất</label></th>
                        <th><label>Hành động</label></th>
                    </tr>

                    <?php ProductCategoryRow('LSP001', 'Giày', '300', '01/09/2022', '07/09/2022') ?>
                    <?php ProductCategoryRow('LSP001', 'Giày', '300', '01/09/2022', '07/09/2022') ?>
                    <?php ProductCategoryRow('LSP001', 'Giày', '300', '01/09/2022', '07/09/2022') ?>
                </table>

                <div class="category-management-add-category">
                    <button>Thêm loại sản phẩm</button>
                </div>
            </div>
        </main>

        <?php SideBar_End(); ?>
        
        <script src="./script.js"></script>
    </body>
</html>