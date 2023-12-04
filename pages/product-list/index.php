<?php
include './product-item/index.php';
include './show-product-list-filter-option/index.php'
?>

<!DOCTYPE html> <!--Define the version of HTML-->
<html lang="vi"> <!--Set the language-->

<head>
    <title>Products</title>
    <meta name="description" content="This webpage shows products list"> <!--Set the content-->
    <meta charset="utf-8"> <!--Set the charset to Unicode-->
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="./product-item/style.css">
    <link rel="stylesheet" href="../../components/scroll-to-top-button/style.css">
    <!-- css for navbar -->
    <link rel="stylesheet" href="../../components/navbar/style.css">
    <link rel="stylesheet" href="../../components/navbar_logined/style.css">
    <link rel="stylesheet" href="../../assets/icons/themify-icons/themify-icons.css">
    <!-- css for footer -->
    <link rel="stylesheet" href="../../components/footer/style.css">
    <link rel="stylesheet" href="../../resources/css/root.css">
    <script src="../../components/scroll-to-top-button/script.js" defer></script>
    <script src="https://kit.fontawesome.com/34f5218fc0.js" crossorigin="anonymous"></script>
</head>

<body>
    <!-- Check if user logined or not -->
    <?php
    include "../../controllers/verify_token.php";
    include "../../db/connection.php";
    include "../../helpers/jwt.php";
    $user = checkAuthorization('execQuery', 'Token::Verify');
    if ($user) {
        include_once "../../components/navbar_logined/index.php";
    } else {
        include_once "../../components/navbar/index.php";
    }
    ?>
    <?php include "../../components/scroll-to-top-button/index.php" ?>
    <header class="show-product-list-header">
        <?php if (isset($_GET['object']) || isset($_GET['type'])) { ?>
            <div>
                <h1>
                    <?php
                    if (isset($_GET['type'])) {
                        $query = "SELECT type_name FROM product_types where id = " . $_GET['type'];
                        $result = execQuery($query);
                        if ($result) {
                            $row = $result->fetch_row();
                            echo $row[0] . " ";
                        }
                    }
                    if (isset($_GET['object'])) {
                        $query = "SELECT object_name FROM product_objects where id = " . $_GET['object'];
                        $result = execQuery($query);
                        if ($result) {
                            $row = $result->fetch_row();
                            echo $row[0];
                        }
                    }
                    ?>
                </h1>
                <p>Đắm chìm trong thế giới thể thao với những sản phẩm mới nhất tại cửa hàng của chúng tôi!
                    Dòng sản phẩm mới này bao gồm đủ phụ kiện để bạn có thể chuẩn bị cho mọi hoạt động thể thao của mình.
                </p>

            </div>
        <?php } else { ?>
            <div>
                <h1>Sản phẩm mới</h1>
                <p>Đắm chìm trong thế giới thể thao với những sản phẩm mới nhất tại cửa hàng của chúng tôi!
                    Dòng sản phẩm mới này bao gồm đủ phụ kiện để bạn có thể chuẩn bị cho mọi hoạt động thể thao của mình.
                </p>

            </div>
        <?php } ?>
    </header>
    <div class="main-container">
        <main class="show-product-list-content">
            <aside class="show-product-list-filter">
                <label>Bộ lọc</label> <button id="show-product-list-clear-filter">Xoá bộ lọc</button><br>
                <?php
                $categoriesQuery = "SELECT type_name FROM product_types";
                $objectsQuery = "SELECT object_name FROM product_objects";
                $sizesQuery = "SELECT distinct product_size FROM products";
                $categoriesResult = execQuery($categoriesQuery);
                $objectResult = execQuery($objectsQuery);
                $sizesResult = execQuery($sizesQuery);

                // sql result to list of string
                $categories = [];
                $objects = [];
                $sizes = [];
                if ($categoriesResult && $categoriesResult->num_rows > 0) {
                    $rows = $categoriesResult->fetch_all();
                    foreach ($rows as $row) {
                        array_push($categories, $row[0]);
                    }
                }
                if ($objectResult && $objectResult->num_rows > 0) {
                    $rows = $objectResult->fetch_all();
                    foreach ($rows as $row) {
                        array_push($objects, $row[0]);
                    }
                }
                if ($sizesResult && $sizesResult->num_rows > 0) {
                    $rows = $sizesResult->fetch_all();
                    foreach ($rows as $row) {
                        array_push($sizes, $row[0]);
                    }
                }


                ShowProductListFilterOption('Hạng mục', $categories);
                ShowProductListFilterOption('Giới tính', $categories);
                ShowProductListFilterOption('Giới tính', $sizes);
                ShowProductListFilterOption('Giá', ['Dưới 100.000đ', '100.000đ - 200.000đ', '200.000đ - 500.000đ', '500.000đ - 1.000.000đ', '1.000.000đ - 2.000.000đ', '2.000.000đ - 5.000.000đ', 'Trên 5.000.000đ']);
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
                    $query = "SELECT id, product_image, product_name, product_price FROM products ";
                    if (isset($_GET['object']) && isset($_GET['type'])) {
                        $query .= " where product_object_id = " . $_GET['object'] . " and product_type_id = " . $_GET['type'];
                    } else if (isset($_GET['type'])) {
                        $query .= " where product_type_id = " . $_GET['type'];
                    } else if (isset($_GET['object'])) {
                        $query .= " where product_object_id = " . $_GET['object'];
                    } else {
                        $query .= " where 1";
                    }
                    if (isset($_GET['page'])) {
                        $query .= " limit " . $_GET['page'] * 12;
                    } else {
                        $query .= " limit 12";
                    }

                    $result = execQuery($query);
                    if ($result && $result->num_rows > 0) {
                        $rows = $result->fetch_all();
                        foreach ($rows as $row) {
                            ProductItem($row[0], $row[1], $row[2], $row[3]);
                        }
                    ?>
                </div>
                <div class="show-product-list-more" onclick="loadMoreProduct()">
                    <button>Hiển thị thêm sản phẩm</button>
                </div>

            <?php
                    } else {
                        echo "<h3>Không tìm thấy sản phẩm</h3></div>";
                    }
            ?>



            </article>
        </main>
    </div>

    <!-- footer -->
    <?php
    include '../../components/footer/index.php';
    ?>

    <script src="../../resources/js/root.js"></script>
    <script src="./script.js"></script>
    <script src="../../components/navbar/script.js"></script>
</body>

</html>