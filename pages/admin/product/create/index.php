<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add</title>
    <link rel="stylesheet" href="./style.css">

</head>

<body>
    <header>
        <h2>Thêm sản phẩm</h2>
    </header>
    <div class="main">
        <div class="container">
            <form action="../../../../controllers/product-controller.php" method="POST" value='create'>
                <h2>Thêm sản phẩm</h2>
                <br>
                <input type="hidden" name="action" value="create">
                <div>
                    <label for="productName">Tên sản phẩm : </label>
                    <input class="form-control" type="text" id="productName" name="productName" placeholder="Nhập tên sản phẩm">
                </div>

                <div>
                    <label for="productObject">Đối tượng : </label>
                    <select name="productObject" id="productObject">
                        <option value=1>Nam</option>
                        <option value=2>Nữ</option>
                        <option value=3>Trẻ em</option>
                        <option value=4>unisex</option>
                    </select>
                </div>

                <div>
                    <label for="productType">Loại sản phẩm : </label>
                    <select name="productType" id="productType">
                        <option value=1>Áo</option>
                        <option value=2>Quần</option>
                        <option value=3>Giày</option>
                        <option value=4>Tất</option>
                    </select>
                </div>

                <div>
                    <label for="productPrice">Giá : </label>
                    <input class="form-control" type="text" id="productPrice" name="productPrice" placeholder="Nhập giá sản phẩm">
                </div>

                <!-- description -->
                <div>
                    <label for="productDescription">Mô tả : </label>
                    <textarea class="form-control" name="productDescription" id="productDescription" style="height: 100px;" placeholder="Nhập mô tả sản phẩm"></textarea>
                </div>

                <!-- màu -->
                <div>
                    <!-- các màu đã thêm -->
                </div>
                <div>
                    <label for="productColor">Màu : </label>
                    <input type="color" name="color" id="color">
                    <input class="form-control" type="text" id="productColor" name="productColor" placeholder="Các màu đã thêm">
                </div>

                <!-- size -->
                <div>
                    <label for="productSize">Size : </label>
                    <input class="form-control" type="text" id="productSize" name="productSize" placeholder="Nhập size của sản phẩm">
                </div>

                <!-- ảnh -->
                <div>
                    <label for="productImage">Ảnh : </label>
                    <input class="form-control" type="text" id="productImage" name="productImage" placeholder="nhập image link của sản phẩm">
                </div>
                <button style="cursor: pointer;">
                    Lưu
                </button>
            </form>
        </div>
    </div>
    <script src="./script.js"></script>
</body>

</html>