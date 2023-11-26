// JS của payment lấy từ script của cart
const totalProductPrice = document.querySelector('#total');
const shippingFee = document.querySelector('#shipping-fee');
const totalPay = document.querySelector('#total-pay');
let VND = new Intl.NumberFormat('vi-VN', {
    style: 'currency',
    currency: 'VND',
});

// giá trị này lấy bằng cách tính tổng tiền từng cart-product-item
let totalPrice = 200000;
let fee = 20000;
let total = totalPrice + fee;
totalProductPrice.textContent = VND.format(totalPrice);
shippingFee.textContent = VND.format(fee);
totalPay.textContent = VND.format(total);