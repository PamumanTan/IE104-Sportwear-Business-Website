<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit </title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <header>
        <h2>Sửa sản phẩm</h2>
    </header>
    <?php
    if (isset($_GET['product_id']) && $_GET['action'] == 'edit') {
        include '../../../../db/connection.php';
        $con = connectDb();
        $productId = $_GET['product_id'];
        $query = "SELECT * FROM products WHERE id = $productId";
        $result = $con->query($query);
        $product = $result->fetch_assoc();
        $productName = $product['product_name'];
        $productPrice = $product['product_price'];
        $productDescription = $product['product_description'];
        $productColor = $product['product_color'];
        $productSize = $product['product_size'];
        $productImage = $product['product_image'];
        $productObjectId = $product['product_object_id'];
        $productTypeId = $product['product_type_id'];

        $productObject = $con->query("select object_name from product_objects where id = $productObjectId");
        $productObject = ($productObject->fetch_assoc())['object_name'];

        $productType = $con->query("select type_name from product_types where id = $productTypeId");
        $productType = ($productType->fetch_assoc())['type_name'];

        $con->close();
    }
    ?>
    <div class="main">
        <div class="container">
            <form action="../../../../controllers/product-controller.php?product_id=<?php echo $productId ?>" method="post">
                <h2>Sửa sản phẩm</h2>
                <br>
                <input type="hidden" name="action" value="update">
                <div>
                    <label for="productName">Tên sản phẩm : </label>
                    <input class="form-control" type="text" id="productName" name="productName" value="<?php echo $productName ?>">
                </div>

                <div>
                    <label for="productObject">Đối tượng : </label>
                    <select name="productObject" id="productObject" class="form-control-select">
                        <option value=1>Nam</option>
                        <option value=2>Nữ</option>
                        <option value=3>Trẻ em</option>
                        <option value=4>unisex</option>
                    </select>
                </div>

                <div>
                    <label for="productType">Loại sản phẩm : </label>
                    <select name="productType" id="productType" class="form-control-select">
                        <option value=1>Áo</option>
                        <option value=2>Quần</option>
                        <option value=3>Giày</option>
                        <option value=4>Tất</option>
                    </select>
                </div>

                <div>
                    <label for="productPrice">Giá : </label>
                    <input class="form-control" type="text" id="productPrice" name="productPrice" value="<?php echo $productPrice ?>">
                </div>

                <!-- description -->
                <div>
                    <label for="productDescription">Mô tả : </label>
                    <textarea class="form-control" name="productDescription" id="productDescription" style="height: 100px;">
                    </textarea>
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
                <div>
                    <h3>ảnh hiện tại : </h3>
                    <div id="img-list">
                        <div class="img-item">
                            <img src="<?php echo $productImage ?>" alt="product image">
                        </div>
                    </div>
                </div>
                <div>
                    <label for="productImage">Đổi ảnh : </label>
                    <input class="form-control" type="text" id="productImage" name="productImage" placeholder="nhập imagelink mới của sản phẩm">
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
        let producObject = document.getElementById('productObject');
        producObject.value = '<?php echo $productObjectId ?>';
        let productType = document.getElementById('productType');
        productType.value = '<?php echo $productTypeId ?>';
    </script>
</body>

</html>