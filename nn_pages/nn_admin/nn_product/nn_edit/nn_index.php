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
    <div class="main">
        <div class="container">
            <form action="">
                <h2>Sửa sản phẩm</h2>
                <br>
                <input type="hidden" name="action" value="update">
                <div>
                    <label for="productName">Tên sản phẩm : </label>
                    <input class="form-control" type="text" id="productName" name="productName" placeholder="Nhập tên sản phẩm">
                </div>

                <div>
                    <label for="productType-1">Đối tượng : </label>
                    <select name="productType-1" id="productType-1" class="form-control-select">
                        <option value="1">Nam</option>
                        <option value="2">Nữ</option>
                        <option value="3">Trẻ em</option>
                        <option value="unisex">unisex</option>
                    </select>
                </div>

                <div>
                    <label for="productType-2">Loại sản phẩm : </label>
                    <select name="productType-2" id="productType-2" class="form-control-select">
                        <option value="1">Áo</option>
                        <option value="2">Quần</option>
                        <option value="3">Giày</option>
                        <option value="4">Tất</option>
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
                    <h3>Các ảnh sẵn có : </h3>
                    <div id="img-list">
                    </div>
                </div>
                <div>
                    <label for="productImage">Thêm ảnh : </label>
                    <input class="form-control" type="file" id="productImage" name="productImage" multiple="multiple">
                </div>
                <button class="btn-save">
                    Lưu
                </button>
            </form>
        </div>
    </div>
    <script src="./script.js"></script>
</body>

</html>