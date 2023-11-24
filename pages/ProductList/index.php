<?php
include '../../components/ProductItem/index.php';
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
                    function execQuery($query)
                    {
                        require("../../db/dbConfig.php");

                        $conn = new mysqli($host, $username, $password, $dbname);
                        // Check connection
                        if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                        }

                        $result = $conn->query($query);
                        $conn->close();

                        return $result;
                    }


                    $query = "SELECT id, product_image, product_name, product_price FROM products ";
                    if (isset($_GET['object']) && isset($_GET['type'])) {
                        $query .= " where product_object_id = " . $_GET['object'] . " and product_type_id = " . $_GET['type'];
                    }
                    else if (isset($_GET['type'])) {
                        $query .= " where product_type_id = " . $_GET['type'];
                    } else if (isset($_GET['object'])) {
                        $query .= " where product_object_id = " . $_GET['object'];
                    } else {
                        $query .= " where 1";
                    }
                    
                    $result = execQuery($query);
                    if ($result) {
                        $rows = $result->fetch_all();
                        foreach ($rows as $row) {
                            ProductItem($row[1], $row[2], $row[3]);
                        }
                    } else {
                        echo "<h3>Không tìm thấy sản phẩm</h3>";
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
    include '../../components/Footer/index.php';
    ?>

    <script src="./script.js"></script>
</body>

</html>