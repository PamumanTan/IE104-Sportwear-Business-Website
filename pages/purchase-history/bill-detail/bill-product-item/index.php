<?php
function BillProductItem($img, $name, $price, $size, $quantity)
{
    echo '
        <div class="cart-product-container">
            <div class="cart-product-img">
                <img src="' . $img . '" alt="Hình ảnh sản phẩm">
            </div>
            <div class="cart-product-detail">
                <div id="product-name-div">
                    <h3 id="product-name">' . $name . '</h3>
                </div>
                <p id="product-size">Kích cỡ: ' . $size . '</p>
                <p id="product-quantity">Số lượng: ' . $quantity . '</p>
                <h3 id="product-price">' . $price . ' VND</h3>
            </div>
            <div class="cart-product-delete">
                <button id="add-review-btn">Đánh giá</button>
            </div>
        </div>
    ';
}
?>