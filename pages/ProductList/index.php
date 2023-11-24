<?php
    include '../../components/ProductItem/index.php';
    include '../../components/ShowProductListFilterOption/index.php';
?>

<!DOCTYPE html> <!--Define the version of HTML-->
<html lang="vi"> <!--Set the language-->
    <head>
        <title>home page</title>
        <meta name="description" content="This webpage shows products list"> <!--Set the content-->
        <meta charset="utf-8"> <!--Set the charset to Unicode-->
        <link rel="stylesheet" href="./index.css">
        <link rel="stylesheet" href="../../components/ProductItem/style.css">
        <!-- css for navbar -->
        <link rel="stylesheet" href="../../components/NavBar/index.css">
        <!-- css for footer -->
        <link rel="stylesheet" href="../../components/Footer/index.css">
    </head>

    <body>
        <?php
            include '../../components/navbar/index.php';
        ?>

        <header class="show-product-list-header">
            <div>
                <h1>Sản phẩm mới</h1>
                <p>Đắm chìm trong thế giới thể thao với những sản phẩm mới nhất tại cửa hàng của chúng tôi!
                    Dòng sản phẩm mới này bao gồm đủ phụ kiện để bạn có thể chuẩn bị cho mọi hoạt động thể thao của mình.</p>

            </div>
        </header>
        
        <div class="main-container">
            <main class="show-product-list-content">
                <aside class="show-product-list-filter">
                    <label>Bộ lọc</label> <button id="show-product-list-clear-filter">Xoá bộ lọc</button><br>

                    <?php
                        $option = "Loại sản phẩm";
                        $choiceList = array("Giày", "Áo", "Quần", "Tất", "Mũ");
                        ShowProductListFilterOption($option, $choiceList);

                        $option = "Đối tượng";
                        $choiceList = array("Nam", "Nữ", "Trẻ em");
                        ShowProductListFilterOption($option, $choiceList);

                        $option = "Khuyến mãi";
                        $choiceList = array("Đang khuyến mãi");
                        ShowProductListFilterOption($option, $choiceList);

                        $option = "Giá";
                        $choiceList = array(
                            "Dưới 200 nghìn VNĐ",
                            "200 nghìn - 500 nghìn VNĐ",
                            "500 nghìn - 1 triệu VNĐ",
                            "1 triệu - 2 triệu VNĐ",
                            "Hơn 2 triệu VNĐ");
                        ShowProductListFilterOption($option, $choiceList);
                    ?>


                    <br>

                </aside>

                <article>
                    <div class="show-product-list-sort">
                        <label>Sắp xếp theo </label>
                        <select>
                            <option value="popular">Phổ biến</option>
                            <option value="newest">Mới nhất</option>
                            <option value="price-ascending">Giá tăng dần</option>
                            <option value="price-decending">Giá giảm dần</option>
                            <option value="sale">Có khuyến mãi</option>
                        </select>
                    </div>
                    <br>

                    <div id="show-product-list">
                        <?php
                            for($i = 0; $i < 6; $i++) {
                                ProductItem('../../assets/images/logo-removebg-preview_50.png', "Men's Winter Jacket", '100.000');
                            }
                        ?>
                    </div>

                    <div class="show-product-list-more">
                        <button id="show-product-list-more-button" onclick="showMoreProducts()">Hiển thị thêm sản phẩm</button>
                    </div>
                </article>
            </main>
        </div>

        <!-- footer -->
        <?php
            include '../../components/Footer/index.php';
        ?>

        <script src="./script.js"></script>
    </body>
</html>