function showMessage(message) {
    var x = document.getElementById("snackbar");
    x.innerHTML = message;
    x.className = "show";
    setTimeout(function () { x.className = x.className.replace("show", ""); }, 3000);
}

let VND = new Intl.NumberFormat("vi-VN", {
    style: "currency",
    currency: "VND",
});

function formatPrice(price) {
    return VND.format(price);
}


const cartNumber = document.querySelector('.cartImg p');
function getCartNumber() {
    fetch('http://localhost/sportswear/controllers/cart.php?action=number')
        .then(res => res.json())
        .then(data => {
            console.log(data);
            cartNumber.innerText = data['data'];
        })
}