const colorPicker = document.getElementById('color');
const colorInput = document.getElementById('productColor');

colorPicker.addEventListener('change', (event) => {
    if (colorInput.value == '' || colorInput.value == null)
        colorInput.value = event.target.value;
    else {
        colorInput.value += ',';
        colorInput.value += event.target.value;
    }
});

const allImg = [
    '../img_test/img1.webp',
    '../img_test/img2.png',
    '../img_test/img3.png',
]

const imgList = document.getElementById('img-list');
for (let i = 0; i < allImg.length; ++i) {
    const imgItem = document.createElement('div');
    imgItem.classList.add('img-item');
    imgItem.innerHTML = `
        <img src="${allImg[i]}" alt="product image">
    `;
    imgList.appendChild(imgItem);
    // add button xóa class = "btn-delete-img"
    const btnDelete = document.createElement('button');
    btnDelete.classList.add('btn-delete-img');
    btnDelete.innerHTML = 'Xóa';
    imgItem.appendChild(btnDelete);
    // img.addEventListener('click', (event) => {
    //     const imgSrc = event.target.src;
    //     const imgInput = document.getElementById('productImg');
    //     imgInput.value = imgSrc;
    // });
}