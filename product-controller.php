<?php
if (isset($_POST['action']) && $_POST['action'] == 'create') {
    createProduct();
}
if (isset($_GET['action']) && $_GET['action'] == 'delete') {
    deleteProduct();
}
if (isset($_POST['action']) && $_POST['action'] == 'update') {
    // echo "asjdkasldjaskld";
    updateProduct();
}

function createProduct()
{
    $productName = $_POST['productName'];
    $productType1 = $_POST['productType-1'];
    $productType2 = $_POST['productType-2'];
    $productPrice = $_POST['productPrice'];
    $productDescription = $_POST['productDescription'];
    $productColor = $_POST['productColor'];
    $productSize = $_POST['productSize'];
    $productImage = $_POST['productImage'];

    $con = include('./db/dbConfig.php');

    $query = "INSERT INTO products (product_name, product_price, product_description, product_color, product_size, product_image) 
          VALUES ('$productName', '$productPrice', '$productDescription', '$productColor', '$productSize', '$productImage')";

    $result = $con->query($query);

    if (!$result) {
        echo "Error inserting product: " . $con->error;
        return;
    }
    $lastInsertedId = $con->insert_id;


    $productTypeId1 = $con->query("select id from product_type where product_type_name = '$productType1'");
    $productTypeId1 = ($productTypeId1->fetch_assoc())['id'];
    $productTypeId2 = $con->query("select id from product_type where product_type_name = '$productType2'");
    $productTypeId2 = ($productTypeId2->fetch_assoc())['id'];

    echo $productTypeId1;
    echo $productTypeId2;

    $con->query("insert into product_product_type (product_id, product_type_id) values ($lastInsertedId, $productTypeId1)");
    $con->query("insert into product_product_type (product_id, product_type_id) values ($lastInsertedId, $productTypeId2)");
    $con->close();
    header("Location: ./productManager/index.php");
}
function updateProduct()
{
    $productId = $_GET['product_id'];
    $productName = $_POST['productName'];
    $productType1 = $_POST['productType-1'];
    $productType2 = $_POST['productType-2'];
    $productPrice = $_POST['productPrice'];
    $productDescription = $_POST['productDescription'];
    $productColor = $_POST['productColor'];
    $productSize = $_POST['productSize'];
    $productImage = $_POST['productImage'];

    $con = include('./db/dbConfig.php');

    $query = "UPDATE products SET product_name = '$productName', product_price = '$productPrice', product_description = '$productDescription', product_color = '$productColor', product_size = '$productSize', product_image = '$productImage' WHERE id = $productId";

    $result = $con->query($query);

    if (!$result) {
        echo "Error updating product: " . $con->error;
        return;
    }

    $con->query("delete from product_product_type where product_id = $productId");

    $productTypeId1 = $con->query("select id from product_type where product_type_name = '$productType1'");
    $productTypeId1 = ($productTypeId1->fetch_assoc())['id'];
    $productTypeId2 = $con->query("select id from product_type where product_type_name = '$productType2'");
    $productTypeId2 = ($productTypeId2->fetch_assoc())['id'];

    echo $productTypeId1;
    echo $productTypeId2;

    $con->query("insert into product_product_type (product_id, product_type_id) values ($productId, $productTypeId1)");
    $con->query("insert into product_product_type (product_id, product_type_id) values ($productId, $productTypeId2)");
    $con->close();
    header("Location: ./productManager/index.php");
}

function deleteProduct()
{
    $productId = $_GET['productId'];
    $con = include('./db/dbConfig.php');
    // delete product_product_type first
    $query = "DELETE FROM product_product_type WHERE product_id = $productId";
    $result = $con->query($query);
    if (!$result) {
        echo "Error deleting product: " . $con->error;
        return;
    }
    // delete product
    $query = "DELETE FROM products WHERE id = $productId";
    $result = $con->query($query);
    if (!$result) {
        echo "Error deleting product: " . $con->error;
        return;
    }
    $con->close();
    header("Location: ./productManager/index.php");
}
