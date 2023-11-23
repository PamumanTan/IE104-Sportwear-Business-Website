<?php
include './productItem.php';
?>

<!DOCTYPE html> <!--Define the version of HTML-->
<html lang="vi"> <!--Set the language-->

<head>
    <title>home page</title>
    <meta name="description" content="This webpage shows products list"> <!--Set the content-->
    <meta charset="utf-8"> <!--Set the charset to Unicode-->
    <link rel="stylesheet" href="./index.css">
    <!-- css for navbar -->
    <link rel="stylesheet" href="../components/NavBar/index.css">
    <!-- css for footer -->
    <link rel="stylesheet" href="../components/Footer/index.css">
    <style>
        .search-box {
            display: flex;
            flex-direction: row;
            border: 0.5px solid var(--second);
            padding: 8px 12px;
            align-items: center;
            border-radius: 5px;
            border: 2px solid #ccc;
        }

        .search-box input {
            width: 50vw;
            outline: none;
            padding: 5px 10px;
            border: none;
            margin-left: 5px;
        }

        .search-box-container {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <?php
    include '../components/navbar/index.php';
    ?>

    <header class="show-product-list-header">
        <div>
            <h1>Sản phẩm mới</h1>
            <p>Đắm chìm trong thế giới thể thao với những sản phẩm mới nhất tại cửa hàng của chúng tôi!
                Dòng sản phẩm mới này bao gồm đủ phụ kiện để bạn có thể chuẩn bị cho mọi hoạt động thể thao của mình.</p>

        </div>
    </header>
    <form action="index.php" method="GET">
        <div class="search-box-container">
            <div class="search-box">
                <div class="search-icon">
                    <img class="sidebar-icon" src="../components/assets/icons/search-normal.svg">
                </div>
                <input id="search-box-input" type="text" placeholder="Tìm kiếm" name="keyword">
            </div>
        </div>
    </form>
    <div class="main-container">


        <main class="show-product-list-content">
            <aside class="show-product-list-filter">
                <label>Bộ lọc</label> <button id="show-product-list-clear-filter">Xoá bộ lọc</button><br>

                <div class="show-product-list-filter-option">
                    <label>Hạng mục</label>
                    <br>

                    <div>
                        <input type="checkbox">
                        <label>Giày</label>
                        <br>
                    </div>

                    <div>
                        <input type="checkbox">
                        <label>Áo</label>
                        <br>
                    </div>
                    <div>
                        <input type="checkbox">
                        <label>Quần</label>
                        <br>
                    </div>

                    <div>
                        <input type="checkbox">
                        <label>Tất</label>
                        <br>
                    </div>

                    <div>
                        <input type="checkbox">
                        <label>Mũ</label>
                        <br>
                    </div>
                </div>


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

                <div class="show-product-list">
                    <?php
                    $con = require('../db/dbConfig.php');
                    if (isset($_GET['keyword'])) {
                        $keyword = $_GET['keyword'];
                        $sql = "SELECT * FROM products WHERE product_name LIKE '%$keyword%'";
                        $result = mysqli_query($con, $sql);
                        while ($row = mysqli_fetch_array($result)) {
                            ProductItem($row['product_image'], $row['product_name'], $row['product_price']);
                        }
                    } else {
                        $sql = "SELECT * FROM products";
                        $result = mysqli_query($con, $sql);
                        while ($row = mysqli_fetch_array($result)) {
                            ProductItem($row['product_image'], $row['product_name'], $row['product_price']);
                        }
                    }
                    ?>
                </div>

                <div class="show-product-list-more">
                    <button>Hiển thị thêm sản phẩm</button>
                </div>
            </article>
        </main>
    </div>

    <!-- footer -->
    <?php
    include '../components/footer/index.php';
    ?>

    <script src="../../templates/ShowProductList/script.js"></script>
</body>

</html>