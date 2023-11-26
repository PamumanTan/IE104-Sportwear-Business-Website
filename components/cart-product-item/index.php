<?php
function CartProductItem($img, $name, $price, $size, $quantity)
{
    echo '
        <div class="cart-product-container">
            <div class="cart-product-img">
                <img src="' . $img . '" alt="Hình ảnh sản phẩm">
            </div>
            <div class="cart-product-detail">
                <h3 id="product-name">' . $name . '</h3>
                <p id="product-size">Kích cỡ: ' . $size . '</p>
                <p id="product-quantity">Số lượng: ' . $quantity . '</p>
                <h3 id="product-price">' . $price . ' VND</h3>
            </div>
            <div class="cart-product-delete">
                <p>Loại bỏ</p>
                <div class="under-line"></div>
            </div>
        </div>
    ';
}
?>