<?php
include './product-item/index.php';
?>

<!DOCTYPE html> <!--Define the version of HTML-->
<html lang="vi"> <!--Set the language-->

<head>
    <title>Tìm kiếm</title>
    <link rel="icon" type="image/x-icon" href="../../assets/icons/favicon.png">
    <meta name="description" content="This webpage shows searching of web"> <!--Set the content-->
    <meta charset="utf-8"> <!--Set the charset to Unicode-->
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="./product-item/style.css">
    <!-- css for navbar -->
    <link rel="stylesheet" href="../../components/navbar/style.css">
    <link rel="stylesheet" href="../../components/navbar_logined/style.css">
    <link rel="stylesheet" href="../../assets/icons/themify-icons/themify-icons.css">
    <!-- css for footer -->
    <link rel="stylesheet" href="../../components/footer/style.css">
    <link rel="stylesheet" href="../../resources/css/root.css">
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

    <header class="show-product-list-header">
        <?php if (isset($_GET['keyword'])) { ?>
            <div>
                <h1>
                    Tìm kiếm
                </h1>
                <p>Kết quả tìm kiếm cho: "<?php echo $_GET['keyword'] ?>"</p>

            </div>
        <?php } else { ?>
            <div>
                <h1>Tìm kiếm</h1>
                <p>Không có từ khóa</p>
            </div>
        <?php } ?>
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

                <div id="show-product-list">
                    <?php
                    $query = "select id, product_image, product_name, product_price from products where product_name like '%" . $_GET['keyword'] . "%'";
                    $result = execQuery($query);
                    if ($result && $result->num_rows > 0) {
                        $rows = $result->fetch_all();
                        foreach ($rows as $row) {
                            ProductItem($row[0], $row[1], $row[2], $row[3]);
                        }
                    ?>
                </div>
                <div class="show-product-list-more">
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

    <script src="./script.js"></script>
    <script src="../../components/navbar/script.js"></script>
</body>

</html>