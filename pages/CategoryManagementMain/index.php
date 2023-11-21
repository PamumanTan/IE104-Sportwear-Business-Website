<?php
include '../../components/ProductCategoryRow/index.php';
?>

<!DOCTYPE html>		<!--Define the version of HTML-->
<html lang="vi">	<!--Set the language-->
	<head>
		<title>Quản lí hạng mục</title>
		<meta charset="utf-8" >		<!--Set the charset to Unicode-->
		<link rel="icon" type="image/png" href="../../assets/images/logo-removebg-preview.png">
		<link rel="stylesheet" href="../../templates/CategoryManagementMain/style.css">
	</head>

    <body>
        <nav>

        </nav>

        <header>
            <h1>Quản lí hạng mục</h1>
        </header>

        <main>
            <div class="filter">
                <div>
                    <label>Mã loại sản phẩm</label>
                    <input type="text" id="product_type_id">
                </div>
                <div>
                    <label>Tên loại sản phẩm</label>
                    <input type="text" id="product_type_name">
                </div>
                <div>
                    <label>Trạng thái</label>
                    <select>
                        <option value="-- Trạng thái --">-- Trạng thái --</option>
                        <option value="Chưa có sản phẩm">Chưa có sản phẩm</option>
                        <option value="Đã có sản phẩm">Đã có sản phẩm</option>
                    </select>
                </div>
            </div>

            <div>
                <table>
                    <tr class="title">
                        <th><input type="checkbox"></th>
                        <th><label class="title">Mã loại sản phẩm</label></th>
                        <th><label class="title">Tên loại sản phẩm</label></th>
                        <th><label class="title">Số lượng SP</label></th>
                        <th><label class="title">Ngày tạo</label></th>
                        <th><label class="title">Ngày sửa đổi gần nhất</label></th>
                        <th><label class="title">Hành động</label></th>
                    </tr>

                    <?php ProductCategoryRow('LSP001', 'Giày', '300', '01/09/2022', '07/09/2022') ?>
                    <?php ProductCategoryRow('LSP001', 'Giày', '300', '01/09/2022', '07/09/2022') ?>
                    <?php ProductCategoryRow('LSP001', 'Giày', '300', '01/09/2022', '07/09/2022') ?>
                </table>

                <div class="add_category_product">
                    <button>Thêm loại sản phẩm</button>
                </div>
            </div>
        </main>

        <footer>

        </footer>
        
        <script src="../../templates/CategoryManagementMain/script.js"></script>
    </body>
</html>