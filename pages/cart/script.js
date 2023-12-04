const totalProductPrice = document.querySelector('#total');
const shippingFee = document.querySelector('#shipping-fee');
const totalPay = document.querySelector('#total-pay');
const productPrices = document.querySelectorAll('.product-price');

productPrices.forEach(productPrice => {
    productPrice.textContent = formatPrice(parseInt(productPrice.textContent));
})

// giá trị này lấy bằng cách tính tổng tiền từng cart-product-item
let totalPrice = parseInt(totalProductPrice.textContent);
// shipping-fee
let fee = parseInt(document.querySelector('#shipping-fee').textContent);
let total = totalPrice + fee;




document.querySelector('.pay-button').onclick = () => {
    window.location.href = '../payment/';
}

function removeProductFromCart(product_id) {
    // remove product from cart in database
    const options = {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({
            product_id: product_id
        })
    }

    return fetch('http://localhost/sportswear/controllers/cart.php?action=remove', options)
        .then(response => response.json())
}

const removeButtons = document.querySelectorAll('.cart-product-delete p');
removeButtons.forEach(removeButton => {
    removeButton.onclick = (event) => {
        const product_id = event.target.parentElement.parentElement.getAttribute('product_id');
        removeProductFromCart(product_id)
        .then(res => {
                if (!res['error']) {
                    const cartProductItem = event.target.parentElement.parentElement;
                    cartProductItem.parentNode.removeChild(cartProductItem);
                    if (document.querySelectorAll('.cart-product-item').length == 0) {
                        document.querySelector('.cart-product-list').innerHTML = '<h2>Không có sản phẩm nào trong giỏ hàng</h2>';
                    }
                }
                notify(res['message']);
            })
    }
})

// format price
totalProductPrice.textContent = formatPrice(parseInt(totalProductPrice.textContent));
shippingFee.textContent = formatPrice(parseInt(shippingFee.textContent));
totalPay.textContent = formatPrice(parseInt(totalPay.textContent));