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
            <form action="../productController.php" method="POST" value='create'>
                <h2>Thêm sản phẩm</h2>
                <br>
                <input type="hidden" name="action" value="create">
                <div>
                    <label for="productName">Tên sản phẩm : </label>
                    <input class="form-control" type="text" id="productName" name="productName" placeholder="Nhập tên sản phẩm">
                </div>

                <div>
                    <label for="productType-1">Loại sản phẩm 1 : </label>
                    <select name="productType-1" id="productType-1">
                        <option value="men">Nam</option>
                        <option value="women">Nữ</option>
                        <option value="kids">Trẻ em</option>
                        <option value="unisex">unisex</option>
                    </select>
                </div>

                <div>
                    <label for="productType-2">Loại sản phẩm 2 : </label>
                    <select name="productType-2" id="productType-2">
                        <option value="shirt">Áo</option>
                        <option value="pant">Quần</option>
                        <option value="shoes">Giày</option>
                        <option value="socks">Tất</option>
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
                    <input class="form-control" type="file" id="productImage" name="productImage" multiple="multiple">
                </div>
                <button>
                    Lưu
                </button>
            </form>
        </div>
    </div>
    <script src="./script.js"></script>
</body>

</html>