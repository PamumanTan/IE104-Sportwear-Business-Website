<?php
    function ProductRow($id, $name, $price, $sale_number) {
        echo '
            <tr class="product-management-table-row">
                <th><input type="checkbox" class="product-row"></th>
                <th><label class="product-row">'.$id.'</label></th>
                <th><label class="product-row">'.$name.'</label></th>
                <th><label class="product-row">'.$price.'</label></th>
                <th><label class="product-row">'.$sale_number.'</label></th>
                <th><img src="#" alt="detail"></th>
            </tr>
        ';
    }
?>