const totalProductPrice = document.querySelector('#total');
const shippingFee = document.querySelector('#shipping-fee');
const totalPay = document.querySelector('#total-pay');
let VND = new Intl.NumberFormat('vi-VN', {
    style: 'currency',
    currency: 'VND',
});

// giá trị này lấy bằng cách tính tổng tiền từng cart-product-item
let totalPrice = parseInt(totalProductPrice.textContent.replace(/,/g, ''));
let fee = 20000;
let total = totalPrice + fee;


// totalProductPrice.textContent = VND.format(totalPrice);
totalProductPrice.textContent = VND.format(totalPrice);
shippingFee.textContent = VND.format(fee);
totalPay.textContent = VND.format(total);

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
                    // remove product from cart in DOM
                    const cartProductItem = event.target.parentElement.parentElement;
                    cartProductItem.remove();
                }
                NotifyAddToCartSuccessfully(res['message']);
            })
    }
})