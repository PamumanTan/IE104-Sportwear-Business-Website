<!DOCTYPE html>
<html lang="en">
<?php
include '../components/Admin_SideBar/Sidebar.php';
include '../components/ProductRow/index.php';
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../components/Admin_SideBar/Sidebar.css">
    <link rel="stylesheet" href="./index.css">
</head>

<body>
    <?php
    // SideBar_Start();
    ?>
    <div class="sidebar-container">
        <header>
            <div class="logo">
                <a href="">
                    <img class="sidebar-icon" src="../components/assets/icons/Logo.svg" alt="Logo">
                </a>
            </div>
            <form action="index.php" method="GET">
                <div class="search-box">
                    <div class="search-icon">
                        <img class="sidebar-icon" src="../components/assets/icons/search-normal.svg">
                    </div>
                    <input id="search-box-input" type="text" placeholder="Tìm kiếm" name="keyword">
                </div>
            </form>
            <div class="right">
                <div class="notify">
                    <i class="fa-solid fa-bell"></i>
                </div>
                <div class="admin-button">
                    <i class="fa-regular fa-user"></i>
                </div>
            </div>
        </header>
        <main class="admin-layout">
            <div class="sidebar">
                <a href="" class="sidebar-item" onclick="return false">
                    <div class="sidebar-item-container" id="account">
                        <div class="sidebar-item-icon">
                            <i class="fa-solid fa-user"></i>
                        </div>
                        <p>Tài khoản</p>
                    </div>
                </a>
                <a href="" class="sidebar-item" onclick="return false">
                    <div class="sidebar-item-container" id="orders">
                        <div class="sidebar-item-icon">
                            <i class="fa-solid fa-cart-shopping"></i>
                        </div>
                        <p>Đơn hàng</p>
                    </div>
                </a>
                <a href="" class="sidebar-item" onclick="return false">
                    <div class="sidebar-item-container" id="products">
                        <div class="sidebar-item-icon">
                            <i class="fa-solid fa-bag-shopping"></i>
                        </div>
                        <p>Sản phẩm</p>
                    </div>
                </a>
                <a href="" class="sidebar-item" onclick="return false">
                    <div class="sidebar-item-container" id="customer">
                        <div class="sidebar-item-icon">
                            <i class="fa-solid fa-person"></i>
                        </div>
                        <p>Khách hàng</p>
                    </div>
                </a>
                <a href="" class="sidebar-item" onclick="return false">
                    <div class="sidebar-item-container" id="categories">
                        <div class="sidebar-item-icon">
                            <i class="fa-solid fa-shapes"></i>
                        </div>
                        <p>Hạng mục</p>
                    </div>
                </a>
                <a href="" class="sidebar-item" onclick="return false">
                    <div class="sidebar-item-container" id="discounts">
                        <div class="sidebar-item-icon">
                            <i class="fa-solid fa-piggy-bank"></i>
                        </div>
                        <p>Giảm giá</p>
                    </div>
                </a>
                <a href="" class="sidebar-item" onclick="return false">
                    <div class="sidebar-item-container" id="revenue">
                        <div class="sidebar-item-icon">
                            <i class="fa-solid fa-dollar-sign"></i>
                        </div>
                        <p>Doanh thu</p>
                    </div>
                </a>
            </div>

            <div class="content">
                <main class='product-management-content'>
                    <div class='product-management-title'>
                        <h1>Quản lí sản phẩm</h1>
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
                            <?php
                            $con = include('../db/dbConfig.php');
                            if (isset($_GET['keyword'])) {
                                $keyword = $_GET['keyword'];
                                echo $keyword;
                                $query = "SELECT * FROM products WHERE product_name LIKE '%$keyword%'";
                                $result = $con->query($query);
                                if (!$result) {
                                    echo "Error retrieving products: " . $con->error;
                                    return;
                                }
                                while ($row = $result->fetch_assoc()) {
                                    $productId = $row['id'];
                                    $productName = $row['product_name'];
                                    $productPrice = $row['product_price'];
                                    ProductRow($productId, $productName, $productPrice, 5);
                                }
                            } else {
                                $query = "SELECT * FROM products";
                                $result = $con->query($query);
                                if (!$result) {
                                    echo "Error retrieving products: " . $con->error;
                                    return;
                                }

                                while ($row = $result->fetch_assoc()) {
                                    $productId = $row['id'];
                                    $productName = $row['product_name'];
                                    $productPrice = $row['product_price'];
                                    ProductRow($productId, $productName, $productPrice, 5);
                                }
                            }
                            ?>
                        </table>

                        <div class='product-management-add-product'>
                            <a href="../create/index.php">
                                <button>Thêm sản phẩm</button>
                            </a>
                        </div>
                    </div>
                </main>;
                <?php
                // SideBar_End();
                ?>
            </div>
        </main>
    </div>
    <script src="https://kit.fontawesome.com/34f5218fc0.js" crossorigin="anonymous" defer></script>
</body>

</html>