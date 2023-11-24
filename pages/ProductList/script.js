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
        console.log(target);
        const id = target.id.substring(11);
        window.location.href = '/sportswear/pages/ProductDetail/?id=' + id;
    }
});


function showMoreProducts() {
    // Select product list container
    const productList = document.getElementById("show-product-list");
    
    // Number of products added
    let productNum = 6;

    for(let i = 0; i < productNum; i++) {
        // Clone productItem template
        let productItemTemplate = productList.querySelector(".show-product").cloneNode(true);

        // Add product to the list
        productList.appendChild(productItemTemplate);
        
        // Modify the information of the product
        let productItem = productList.querySelector(".show-product:last-child");
        productItem.querySelector(".product-name").textContent = "Woman's Shoes";
        productItem.querySelector(".product-price").textContent = "200.000 VNĐ";
    }
};