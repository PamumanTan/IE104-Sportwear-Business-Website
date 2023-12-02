<?php


if (isset($_POST['action']) && $_POST['action'] == 'create') {
    createProduct();
}

if (isset($_POST['action']) && $_POST['action'] == 'update') {
    updateProduct();
}

if (isset($_GET['action']) && $_POST['action'] == 'search') {
    $keyword = $_POST['keyword'];
    echo search($keyword);
}

if (isset($_GET['action']) && $_GET['action'] == 'delete') {
    deleteProduct();
}


function createProduct()
{
    $productName = $_POST['productName'];
    $productObject = $_POST['productObject'];
    $productType = $_POST['productType'];
    $productPrice = $_POST['productPrice'];
    $productDescription = $_POST['productDescription'];
    $productColor = $_POST['productColor'];
    $productSize = $_POST['productSize'];
    $productImage = $_POST['productImage'];

    include '../db/connection.php';
    $con = connectDb();
    $query = "INSERT INTO `products`(`product_name`, `product_price`, `product_description`, `product_size`, `product_color`, `product_image`, `product_object_id`, `product_type_id`) VALUES ( '$productName', $productPrice, '$productDescription', '$productSize', '$productColor', '$productImage', $productObject, $productType)";

    $result = $con->query($query);
    if (!$result) {
        echo "Error creating product: " . $con->error;
        return;
    }
    header("Location: ../pages/admin/product/index.php");
    $con->close();
}

function updateProduct()
{
    $productId = $_GET['product_id'];
    $productName = $_POST['productName'];
    $productObject = $_POST['productObject'];
    $productType = $_POST['productType'];
    $productPrice = $_POST['productPrice'];
    $productDescription = $_POST['productDescription'];
    $productColor = $_POST['productColor'];
    $productSize = $_POST['productSize'];
    $productImage = $_POST['productImage'];

    include '../db/connection.php';
    $con = connectDb();

    if ($productImage == null) {
        $query = "SELECT product_image FROM products WHERE id = $productId";
        $result = $con->query($query);
        $productImage = $result->fetch_assoc()['product_image'];
    }
    $query = "UPDATE products SET product_name = '$productName', product_price = $productPrice, product_description = '$productDescription', product_object_id = $productObject, product_type_id = $productType , product_color = '$productColor', product_size = '$productSize', product_image = '$productImage' WHERE id = $productId";

    $result = $con->query($query);

    if (!$result) {
        echo "Error updating product: " . $con->error;
        return;
    }
    $con->close();
    header("Location: ../pages/admin/product/index.php");
}

function search($keyword)
{
    $con = include('./db/dbConfig.php');

    $query = "SELECT * FROM product WHERE product_name LIKE '%$keyword%'";

    $result = $con->query($query);
    $result = $result->fetch_all(MYSQLI_ASSOC);
    $resultJSON = json_encode($result);

    $con->close();

    return $resultJSON;
}

function deleteProduct()
{
    $productId = $_GET['product_id'];

    include '../db/connection.php';
    $con = connectDb();
    $query = "DELETE FROM products WHERE id = $productId";

    $result = $con->query($query);
    if (!$result) {
        echo "Error deleting product: " . $con->error;
        return;
    }
    header("Location: ../pages/admin/product/index.php");
    $con->close();
}
