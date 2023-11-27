<?php
function ProductRow($id, $name, $price, $sale_number)
{
    echo '
            <tr class="product-management-table-row">
                <th><input type="checkbox" class="product-row"></th>
                <th><label class="product-row">' . $id . '</label></th>
                <th><label class="product-row">' . $name . '</label></th>
                <th><label class="product-row">' . $price . '</label></th>
                <th><label class="product-row">' . $sale_number . '</label></th>
                <th>
                    <a href="./edit/index.php"><img src="../../../assets/images/detail.svg" alt="detail"></a>
                    <a href="../../../controllers/product-controller.php?product_id=' . $id . ' &action=delete"><img src="../../../assets/images/delete.svg" alt="detail"></a>
                </th>
            </tr>
        ';
}
?>