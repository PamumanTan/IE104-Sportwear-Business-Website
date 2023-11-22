const colorArray = [
    {
        colorName: 'black',
        hex: 'black',
    },
    {
        colorName: 'white',
        hex: 'white',
    },
    {
        colorName: 'beige',
        hex: '#F0DBAF',
    },
    {
        colorName: 'cyan',
        hex: '#78D6C6',
    },
    {
        colorName: 'orange',
        hex: 'orange',
    },

]

const colorOption = document.querySelector('.product-color-option');
const createColorButton = () => {
    for (let color of colorArray) {
        const button = document.createElement('label');
        button.className = 'radio-button-color';
        button.innerHTML = `<input type="radio" id="${color.colorName}" name="color" value="${color.colorName}" />`
        button.style.backgroundColor = color.hex;
        colorOption.appendChild(button);
    }
}
createColorButton();
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
    return VND.format(num * 1000);
}
const handleQuantityButtonClick = (calculaton) => {
    let val = parseInt(quantityDisplay.value);
    let numbers = productPrice.innerHTML.match(/\d+/g);
    let price = numbers[0];
    val = (calculaton === '-') ? val - 1 : val + 1;
    val = (val < 1) ? 1 : val;
    quantityDisplay.value = val;
    price *= val;
    addToCartButton.innerHTML = `Thêm vào giỏ hàng - ${handlePrice(price)} `;
}
const handleQuantity = () => {
    let val = parseInt(quantityDisplay.value);
    let numbers = productPrice.innerHTML.match(/\d+/g);
    let price = numbers[0];
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
reviewCounter.innerHTML = total + ' đánh giá';
for (let i = 5; i > 0; i--) {
    let string = ` <div id="reviews-counter-child"> 
                        <p>${i} sao </p>
                        <div id="line"></div> 
                        <p>(${reviewCounterArray[i - 1]})</p>
                   </div> `;
    reviewLeftDiv.innerHTML += string;
}
