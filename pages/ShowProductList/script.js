function showMoreProducts() {
    const productList = document.getElementById("show-product-list");
    for(let i = 0; i < 5; i++) {
        let productItem = productList.querySelector(".show-product").cloneNode(true);
        productList.appendChild(productItem);
    }
};