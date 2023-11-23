<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit </title>
    <link rel="stylesheet" href="./index.css">
</head>

<body>
    <header>
        <h2>Sửa sản phẩm</h2>
    </header>
    <?php
    if (isset($_GET['productId']) && $_GET['action'] == 'edit') {
        $con = include('../db/dbConfig.php');
        $productId = $_GET['productId'];
        $query = "SELECT * FROM products WHERE id = $productId";
        $result = $con->query($query);
        $product = $result->fetch_assoc();
        $productName = $product['product_name'];
        $productPrice = $product['product_price'];
        $productDescription = $product['product_description'];
        $productColor = $product['product_color'];
        $productSize = $product['product_size'];
        $productImage = $product['product_image'];
        $productType1 = $con->query("select product_type_name from product_type where id = (select product_type_id from product_product_type where product_id = $productId limit 1)");
        $productType1 = ($productType1->fetch_assoc())['product_type_name'];
        $productType2 = $con->query("select product_type_name from product_type where id = (select product_type_id from product_product_type where product_id = $productId limit 1, 1)");
        $productType2 = ($productType2->fetch_assoc())['product_type_name'];
        $con->close();
    }
    ?>
    <div class="main">
        <div class="container">
            <form action="../productController.php?product_id=<?php echo $productId ?>" method="post" value="update">
                <h2>Sửa sản phẩm</h2>
                <br>
                <input type="hidden" name="action" value="update">
                <div>
                    <label for="productName">Tên sản phẩm : </label>
                    <input class="form-control" type="text" id="productName" name="productName" value="<?php echo $productName ?>">
                </div>

                <div>
                    <label for="productType-1">Đối tượng : </label>
                    <select name="productType-1" id="productType-1" class="form-control-select" value="<?php echo $productType1 ?>">
                        <option value="men">Nam</option>
                        <option value="women">Nữ</option>
                        <option value="kids">Trẻ em</option>
                        <option value="unisex">unisex</option>
                    </select>
                </div>

                <div>
                    <label for="productType-2">Loại sản phẩm : </label>
                    <select name="productType-2" id="productType-2" class="form-control-select" value="<?php echo $productType2 ?>">
                        <!-- <option value="<?php echo $productType2 ?>"><?php echo $productType2 ?></option> -->
                        <option value="shirt">Áo</option>
                        <option value="pant">Quần</option>
                        <option value="shoes">Giày</option>
                        <option value="socks">Tất</option>
                    </select>
                </div>

                <div>
                    <label for="productPrice">Giá : </label>
                    <input class="form-control" type="text" id="productPrice" name="productPrice" placeholder="Nhập giá sản phẩm" value="<?php echo $productPrice ?>">
                </div>

                <!-- description -->
                <div>
                    <label for="productDescription">Mô tả : </label>
                    <textarea class="form-control" name="productDescription" id="productDescription" style="height: 100px;" value="<?php echo $productDescription ?>"></textarea>
                </div>

                <!-- màu -->
                <div>
                    <!-- các màu đã thêm -->
                </div>
                <div>
                    <label for="productColor">Màu : </label>
                    <input type="color" name="color" id="color">
                    <input class="form-control" type="text" id="productColor" name="productColor" value="<?php echo $productColor ?>">
                </div>

                <!-- size -->
                <div>
                    <label for="productSize">Size : </label>
                    <input class="form-control" type="text" id="productSize" name="productSize" value="<?php echo $productSize ?>">
                </div>

                <!-- ảnh -->
                <!-- <div>
                    <h3>Các ảnh sẵn có : </h3>
                    <div id="img-list">
                    </div>
                </div> -->
                <div>
                    <h3>Ảnh hiện tại : </h3>
                    <div id="img-item">
                        <img src="<?php echo $productImage ?>" alt="">
                    </div>
                </div>
                <div>
                    <label for="productImage">Link ảnh : </label>
                    <input class="form-control" type="text" id="productImage" name="productImage" value="<?php echo $productImage ?>">
                </div>
                <button class="btn-save">
                    Lưu
                </button>
            </form>
        </div>
    </div>
    <script src="./script.js"></script>
    <script>
        let description = document.getElementById('productDescription');
        description.innerHTML = '<?php echo $productDescription ?>';
        let productType1 = document.getElementById('productType-1');
        productType1.value = '<?php echo $productType1 ?>';
        let productType2 = document.getElementById('productType-2');
        productType2.value = '<?php echo $productType2 ?>';
    </script>
</body>

</html>