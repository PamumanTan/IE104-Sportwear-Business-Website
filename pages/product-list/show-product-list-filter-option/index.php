<?php
    function ShowProductListFilterOption($option, $choiceList) {
        echo '
            <div class="show-product-list-filter-option">
                <label>'.$option.'</label>
                <br>
        ';

        foreach($choiceList as $choice) {
            echo '
                <div>
                    <input type="checkbox">
                    <label>'.$choice.'</label>
                    <br>
                </div>
            ';
        }
        
        echo '</div>';
    }
?>