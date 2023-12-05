<?php
function ProductItem($id, $img, $name, $price)
{
    echo '
            <div id="product-id-' . $id . '" class="show-product">
                <div class="product-img"><img class="product-img-inner" src="' . $img . '" alt="product-img"></div>
                <div class="product-name">' . $name . '</div>
                <div class="product-price">' . $price . '</div>
            </div>
        ';
}
