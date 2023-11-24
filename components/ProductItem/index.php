<?php
function ProductItem($img, $name, $price)
{
    echo '
            <div class="show-product">
                <div class="product-img"><img src="' . $img . '" alt="product-img"></div>
                <div class="product-name">' . $name . '</div>
                <div class="product-price">' . $price . ' VNĐ</div>
            </div>
        ';
}
