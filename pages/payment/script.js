// JS của payment lấy từ script của cart
const totalProductPrice = document.querySelector("#total");
const shippingFee = document.querySelector("#shipping-fee");
const totalPay = document.querySelector("#total-pay");


// giá trị này lấy bằng cách tính tổng tiền từng cart-product-item
let totalPrice = parseInt(document.querySelector("#total").textContent);
let fee = 0;
let total = totalPrice + fee;
totalProductPrice.textContent = VND.format(totalPrice);
shippingFee.textContent = VND.format(fee);
totalPay.textContent = VND.format(total);

const payButton = document.querySelector(".order-button");

function pay() {
    // get order info 
    const firstname = document.querySelector("#first-name").value;
    const lastname = document.querySelector("#last-name").value;
    const address = document.querySelector("#address").value;
    const phoneNumber = document.querySelector("#phone-number").value;
    const note = document.querySelector("#note").value;

    console.log(firstname, lastname, address, phoneNumber, note);

    return fetch("http://localhost/sportswear/controllers/payment.php", {
        method: "POST",
        headers: {
            "Content-Type": "application/json",
        },
        body: JSON.stringify({
            firstname: firstname,
            lastname: lastname,
            address: address,
            phonenumber: phoneNumber,
            note: note,
        }),
    })
        .then((res) => res.json())
}
    
// order
payButton.onclick = () => {
    pay()
        .then(res => {
            console.log(res);
            notify(res['message']);
            if (!res['error']) {
                clearProductstList();
            }
        })
}

// cart-container
const cartContainer = document.querySelector(".cart-container");
function clearProductstList() {
    cartContainer.innerHTML = "<h2>Giỏ hàng của bạn</h2><p>Không có sản phẩm nào trong giỏ hàng</p>"
}