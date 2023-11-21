<?php
include '../../components/ProductRow/index.php';
?>

<!DOCTYPE html>		<!--Define the version of HTML-->
<html lang="vi">	<!--Set the language-->
	<head>
		<title>Quản lí sản phẩm</title>
		<meta charset="utf-8" >		<!--Set the charset to Unicode-->
		<link rel="icon" type="image/png" href="../../assets/images/logo-removebg-preview.png">
		<link rel="stylesheet" href="../../templates/ProductManagement/style.css">
	</head>

    <body>
        <nav>

        </nav>

        <header>

        </header>

        <main>
            <h1>Quản lí sản phẩm</h1>

            <div class="filter">
                <div class="filter-option">
                    <label>Mã sản phẩm</label>
                    <input type="text" id="product-id">
                </div>
                <div class="filter-option">
                    <label>Tên sản phẩm</label>
                    <input type="text" id="product-name">
                </div>
                <div class="filter-option">
                    <label>Giá sản phẩm</label>
                    <div class="filter-option-range">
                        <input type="text" id="product-min-price">
                        <input type="text" id="product-max-price">
                    </div>
                </div>
                <div class="filter-option">
                    <label>Số lượt mua</label>
                    <div class="filter-option-range">
                        <input type="text" id="product-min-sale-number">
                        <input type="text" id="product-max-sale-number">
                    </div>
                </div>
            </div>
            
            <div>
                <table class="product-management-table">
                    <tr>
                        <th><input type="checkbox"></th>
                        <th><label class="title">Mã sản phẩm</label></th>
                        <th><label class="title">Tên sản phẩm</label></th>
                        <th><label class="title">Giá sản phẩm</label></th>
                        <th><label class="title">Số lượt mua</label></th>
                        <th><label class="title">Hành động</label></th>
                    </tr>

                    <?php ProductRow('SP001', 'Giày Thượng Đình', '100.000 VNĐ', '200') ?>
                    <?php ProductRow('SP001', 'Giày Thượng Đình', '100.000 VNĐ', '200') ?>
                    <?php ProductRow('SP001', 'Giày Thượng Đình', '100.000 VNĐ', '200') ?>     
                </table>

                <div class="add-product">
                    <button>Thêm sản phẩm</button>
                </div>
            </div>
        </main>
        
        <script src="./script.js"></script>
    </body>
</html>