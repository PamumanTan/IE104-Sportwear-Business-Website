const arr = [
    {
        productName: "ADIDAS COPA PURE 2.1 FG MARINERUSH - LUCID BLUE/FOOTWEAR WHITE/SOLAR RED",
        productPrice: "4,800,000₫",
        imageURL: "../img_test/img2.png"
    },
    {
        productName: "ADIDAS X CRAZYFAST MESSI .1 FG INFINITO - SILVER METALLIC/BLISS BLUE/CORE BLACK",
        productPrice: "4,750,000₫",
        imageURL: "https://product.hstatic.net/1000061481/product/anh_sp_add_web_312312-02-02-01-01-01_9f2a5a6aa4124915b58b3912993fd8e2_medium.jpg",
    },
    {
        productName: "ADIDAS COPA PURE .1 FG CRAZYRUSH - FOOTWEAR WHITE/CORE BLACK/LUCID LEMON",
        productPrice: "4,800,000₫",
        imageURL: "https://product.hstatic.net/1000061481/product/1-01-01-01-01-01-01-02-01-02-02-02-02-02-02-02-01-02-01-02-01-01-01-01_80709bacae8e45ccb5d05996205174b5_medium.jpg",
    },
    {
        productName: "ADIDAS X CRAZYFAST .1 FG CRAZYRUSH - FOOTWEAR WHITE/CORE BLACK/LUCID LEMON",
        productPrice: "4,500,000₫",
        imageURL: "https://product.hstatic.net/1000061481/product/anh_sp_add_web_crazyfast-02-02_964e929c49594305ad59283655a80b28_medium.jpg",
    },
    {
        productName: "ADIDAS X SPEEDPORTAL .1 FG HEATSPAWN - SOLAR GOLD/CORE BLACK/SOLAR ORANGE",
        productPrice: "4,200,000₫",
        imageURL: "https://product.hstatic.net/1000061481/product/gz5109_96baf1fa0ea243f6bc692da59d50db11_medium.jpeg",
    },
    {
        productName: "ADIDAS PREDATOR ACCURACY .1 LOW FG HEATSPAWN - SOLAR ORANGE/CORE BLACK",
        productPrice: "4,300,000₫",
        imageURL: "https://product.hstatic.net/1000061481/product/gw4574_91f3e96919b04970b69a3fd93d42b940_medium.jpeg",
    },
    {
        productName: "ADIDAS X SPEEDPORTAL .1 FG L10NEL M35SI - SOLAR ORANGE/SILVER METALLIC/CORE BLACK LIMITED EDITION",
        productPrice: "3,500,000₫",
        imageURL: "https://product.hstatic.net/1000061481/product/d99021b7be2c_15c91129cd9c4da7a8cc46c81c490ac8_medium.jpeg",
    },
    {
        productName: "ADIDAS X SPEEDPORTAL .1 FG OWN YOUR FOOTBALL - SHOCK PINK/FOOTWEAR WHITE/CORE BLACK",
        productPrice: "3,500,000₫",
        imageURL: "https://product.hstatic.net/1000061481/product/gz5108_e72ccaa94e3d413baeb789899e6081f9_medium.jpeg",
    },
    {
        productName: "NIKE AIR ZOOM MERCURIAL SUPERFLY 9 ACADEMY MG READY - BRIGHT CRIMSON/WHITE/BLACK",
        productPrice: "2,350,000₫",
        imageURL: "https://product.hstatic.net/1000061481/product/2-01-01-01-01-02-02-02-02-02-02-02-02-02-02-02-01-01-01-02-02-02-02-02_2b2cc5d64caa41a7a58da36ed1404f12_medium.jpg",
    },
    {
        productName: "NIKE AIR ZOOM MERCURIAL SUPERFLY 9 ACADEMY MG MBAPPÉ PERSONAL EDITION - BALTIC BLUE/WHITE",
        productPrice: "2,350,000₫",
        imageURL: "https://product.hstatic.net/1000061481/product/ak02-01-01-01-01-02-02-02-02-02-02-02-02-02-02-02-01-01-01-02-02-02-02_15e5ebd91de84cda8bf869059283f8e5_medium.jpg",
    },
]

// const productItems = document.querySelectorAll('.show-product');
// productItems.forEach((productItem, index) => {
//     productItem.querySelector('.product-img img').src = arr[index].imageURL;
//     productItem.querySelector('.product-name').innerHTML = arr[index].productName;
//     productItem.querySelector('.product-price').innerHTML = arr[index].productPrice;
//     productItem.addEventListener('click', () => {
//         window.location.href = '/sportswear/pages/ProductDetail/';
//     });
// });

const productItems = document.querySelectorAll('.show-product');
console.log(productItems);
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