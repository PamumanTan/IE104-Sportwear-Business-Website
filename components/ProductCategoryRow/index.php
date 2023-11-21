<?php
    function ProductCategoryRow($id, $name, $amount, $date_created, $date_modified) {
        echo '
            <tr>
                <th><input type="checkbox" class="product_type_row"></th>
                <th><label class="product_type_row">'.$id.'</label></th>
                <th><label class="product_type_row">'.$name.'</label></th>
                <th><label class="product_type_row">'.$amount.'</label></th>
                <th><label class="product_type_row">'.$date_created.'</label></th>
                <th><label class="product_type_row">'.$date_modified.'</label></th>
                <!--icon-->
            </tr>
        ';
    }
?>