const sizeButtons = document.querySelectorAll('.radio-button-size input');
const colorButtons = document.querySelectorAll('.radio-button-color input');
const quantityButtons = document.querySelectorAll('.product-quantity-option button');
const quantityDisplay = document.getElementById('product-quantity');
const addToCartButton = document.querySelector('.add-to-cart');
const productPrice = document.querySelector('#product-price');

const handlePrice = (num) => {
    let VND = new Intl.NumberFormat('vi-VN', {
        style: 'currency',
        currency: 'VND',
    });
    return VND.format(num);
}

function convertToInteger(inputString) {
    let numericString = inputString.replace(/[^0-9,]/g, '');
    let integerValue = parseInt(numericString.replace(/,/g, ''), 10);
    return integerValue;
}


const handleQuantityButtonClick = (calculaton) => {
    let val = parseInt(quantityDisplay.value);
    let price = convertToInteger(productPrice.innerHTML);
    val = (calculaton === '-') ? val - 1 : val + 1;
    val = (val < 1) ? 1 : val;
    quantityDisplay.value = val;
    price *= val;
    addToCartButton.innerHTML = `Thêm vào giỏ hàng - ${handlePrice(price)} `;
}


const handleQuantity = () => {
    let val = parseInt(quantityDisplay.value);
    let price = convertToInteger(productPrice.innerHTML);
    price *= val;
    addToCartButton.innerHTML = `Thêm vào giỏ hàng - ${handlePrice(price)} `;
}


sizeButtons.forEach(element => {
    element.addEventListener('click', () => {
        for (let sizeButton of sizeButtons) {
            sizeButton.parentElement.style.borderColor = '#b7b7b7'
        }
        element.parentElement.style.borderColor = 'black';
    })
});

colorButtons.forEach(element => {
    element.addEventListener('click', () => {
        console.log(
            element
        );
        for (let colorButton of colorButtons) {
            colorButton.parentElement.style.borderColor = '#b7b7b7'
        }
        element.parentElement.style.borderColor = 'black';
    })
});

//Generate review counter
const reviewLeftDiv = document.querySelector('.review-left');
const reviewCounter = document.querySelector('#reviews-counter');
const reviewCounterArray = [0, 1, 2, 4, 9];
const total = reviewCounterArray.reduce((ans, number) => {
    return ans + number;
}, 0)

// reviewCounter.innerHTML = total + ' đánh giá';
// for (let i = 5; i > 0; i--) {
//     let string = ` <div id="reviews-counter-child">
//                         <p>${i} sao </p>
//                         <div id="line"></div>
//                         <p>(${reviewCounterArray[i - 1]})</p>
//                    </div> `;
//     reviewLeftDiv.innerHTML += string;
// }


// Add to cart
function handleAddToCartButton() {
    // window.location.href = '../payment/';
}


//Modal OrderButton
const openModalButton = document.querySelector(".add-to-cart");
const closeModalButton = document.getElementById("closeModalBtn");
const modal = document.querySelector(".modal");
const modalBackground = document.querySelector(".modal-background");
openModalButton.addEventListener("click", function () {
    modal.classList.add("active");
    modalBackground.classList.add("active");
});

closeModalButton.addEventListener("click", function () {
    modal.classList.remove("active");
    modalBackground.classList.remove("active");
});
modalBackground.addEventListener("click", function () {
    modal.classList.remove("active");
    modalBackground.classList.remove("active");
});