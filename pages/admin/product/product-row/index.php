<?php
require "../../../helpers/changePrice.php";
function ProductRow($id, $name, $price, $sale_number)
{
    $price = changePrice($price);
    echo "
            <tr class='product-management-table-row'>
                <th><input type='checkbox' class='product-row'></th>
                <th><label class='product-row'>$id</label></th>
                <th><label class='product-row'>$name</label></th>
                <th><label class='product-row'>$price</label></th>
                <th><label class='product-row'>$sale_number</label></th>
                <th>
                    <a href='./edit/index.php?product_id=$id&action=edit'>
                        <img src='../../../assets/images/detail.svg' alt='detail'>
                    </a>
                    <a href='../../../controllers/product-controller.php?product_id=$id&action=delete' class='delete-btn'>
                        <img src='../../../assets/images/delete.svg' alt='detail'>
                    </a>
                </th>
            </tr>
        ";
}
