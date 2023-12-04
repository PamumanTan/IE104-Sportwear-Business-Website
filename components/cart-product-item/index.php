<?php
function CartProductItem($id, $img, $name, $price, $size, $quantity)
{
    echo '
        <div class="cart-product-container" product_id='.$id.'>
            <div class="cart-product-img">
                <img src="' . $img . '" alt="Hình ảnh sản phẩm">
            </div>
            <div class="cart-product-detail">
                <div class="product-name-div">
                    <h3 class="product-name">' . $name . '</h3>
                </div>
                <p class="product-size">Kích cỡ: ' . $size . '</p>
                <p class="product-quantity">Số lượng: ' . $quantity . '</p>
                <h3 class="product-price">' . $price . ' VND</h3>
            </div>
            <div class="cart-product-delete">
                <p>Loại bỏ</p>
                <div class="under-line"></div>
            </div>
        </div>
    ';
}
?>