function formatPrices() {
    console.log('format prices');
    const productPrices = document.querySelectorAll('.product-price');
    productPrices.forEach(productPrice => {
        productPrice.textContent = formatPrice(parseInt(productPrice.textContent));
    });
}
formatPrices();


let page = 1;
const productItems = document.querySelectorAll('.show-product');
productItems.forEach((productItem) => {
    productItem.onclick = (event) => {
        var target = event.target;
        if (event.target.classList.contains('show-product') == false) {
            if (event.target.classList.contains('product-img-inner') == true) {
                target = target.parentElement;
            }
            target = target.parentElement;
        }
        const id = target.id.substring(11);
        window.location.href = '/sportswear/pages/product-detail/?id=' + id;
    }
});


const loadMoreProduct = () => {
    const searchParams = new URLSearchParams(window.location.search);
    let objectOfPage = searchParams.get('object');
    let typeOfPage = searchParams.get('type');


    let data = new FormData();
    data.append('object', objectOfPage);
    data.append('type', typeOfPage);
    data.append('page', page);

    const xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (xhttp.readyState == 4 && xhttp.status == 200) {
            if (this.responseText == 'no data') {
                document.querySelector('.show-product-list-more button').style.display = 'none';
            }

            var result = JSON.parse(this.responseText);
            if (result.length < 12) {
                document.querySelector('.show-product-list-more button').style.display = 'none';
            }
            for (let i = 0; i < result.length; i++) {
                let product = document.createElement('div');
                product.id = 'product-id-' + result[i]['id'];
                product.classList.add('show-product');

                let productImg = document.createElement('div');
                productImg.classList.add('product-img');

                let productImgInner = document.createElement('img');
                productImgInner.classList.add('product-img-inner');
                productImgInner.src = result[i]['product_image'];
                productImgInner.alt = 'product-img';
                productImg.appendChild(productImgInner);

                let productName = document.createElement('div');
                productName.classList.add('product-name');
                productName.textContent = result[i]['product_name'];

                let productPrice = document.createElement('div');
                productPrice.classList.add('product-price');
                productPrice.textContent = result[i]['product_price'];
                product.appendChild(productImg);
                product.appendChild(productName);
                product.appendChild(productPrice);
                document.getElementById('show-product-list').appendChild(product);
            }
            formatPrices();
        };
        page++;
    }
    let url = '../../controllers/load-more.php';
    xhttp.open('POST', url, true);
    xhttp.send(data);
}