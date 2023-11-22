<?php
function ProductItem($img, $name, $price)
{
    echo '
            <div class="show-product">
                <div class="product-img"><img src="' . $img . '" alt="product-img"></div>
                <label class="product-name">' . $name . '</label>
                <label class="product-price">' . $price . ' VNĐ</label>
            </div>
        ';
}
