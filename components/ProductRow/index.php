<?php
    function ProductRow($id, $name, $price, $sale_number) {
        echo '
            <tr>
                <th><input type="checkbox" class="product-type-row"></th>
                <th><label class="product-type-row">'.$id.'</label></th>
                <th><label class="product-type-row">'.$name.'</label></th>
                <th><label class="product-type-row">'.$price.'</label></th>
                <th><label class="product-type-row">'.$sale_number.'</label></th>
                <!--icon-->
            </tr>
        ';
    }
?>