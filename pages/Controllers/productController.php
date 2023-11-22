<?php
if (isset($_POST['action']) && $_POST['action'] == 'create') {
    createProduct();
}

if (isset($_POST['action']) && $_POST['action'] == 'update') {
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
    
    $con = include('./db/dbConfig.php');

    $query = "INSERT INTO product (product_name, product_price, product_description, product_color, product_size) 
          VALUES ('$productName', '$productPrice', '$productDescription', '$productColor', '$productSize')";

    $result = $con->query($query);

    if ($result) {
        // Get the ID of the last inserted row
        $lastInsertedId = $con->insert_id;
        echo "Product inserted successfully. Product ID: $lastInsertedId";
    } else {
        echo "Error inserting product: " . $con->error;
    }

    $productTypeId1 = $con->query("select id from product_type where product_type_name = $productType1");
    $productTypeId2 = $con->query("select id from product_type where product_type_name = $productType2");
    $con->query("insert into product_product_type (product_id, product_type_id) values ($lastInsertedId, $productTypeId1)");
    $con->query("insert into product_product_type (product_id, product_type_id) values ($lastInsertedId, $productTypeId2)");
    $con->close();
}

function updateProduct()
{
}
