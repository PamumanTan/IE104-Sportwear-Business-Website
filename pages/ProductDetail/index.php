<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="../../components/NavBar/index.css">
    <script src="./script.js" defer></script>
  </head>
  <body>
    <?php include('../../components/NavBar/index.php') ?>
    <main>
      <div class="product-container">
        <div class="product-imgs">
          <img
            src="https://img.freepik.com/free-photo/abstract-luxury-plain-blur-grey-black-gradient-used-as-background-studio-wall-display-your-products_1258-101806.jpg"
            alt="img1"
          />
          <img
            src="https://img.freepik.com/free-photo/abstract-luxury-plain-blur-grey-black-gradient-used-as-background-studio-wall-display-your-products_1258-101806.jpg"
            alt="img2"
          />
          <img
            src="https://img.freepik.com/free-photo/abstract-luxury-plain-blur-grey-black-gradient-used-as-background-studio-wall-display-your-products_1258-101806.jpg"
            alt="img3"
          />
          <img
            src="https://img.freepik.com/free-photo/abstract-luxury-plain-blur-grey-black-gradient-used-as-background-studio-wall-display-your-products_1258-101806.jpg"
            alt="img4"
          />
        </div>

        <div class="product-details">
          <h1 id="product-name">Men's winter jacket</h1>
          <p id="product-price">200.000 VND</p>
          <div id="p-decription">
            <p id="product-decription">
              Revamp your style with the latest designer trends in men’s
              clothing or achieve a perfectly curated wardrobe thanks to our
              line-up of timeless pieces.
            </p>
          </div>

          <p>Màu:</p>
          <div class="product-color-option">
          </div>

          <p>Kích thước:</p>
          <div class="product-size-option">
            <label class="radio-button-size">
              <input type="radio" id="size-s" name="size" value="S" />
              <span class="label-text">S</span>
            </label>

            <label class="radio-button-size">
              <input type="radio" id="size-m" name="size" value="M" />
              <span class="label-text">M</span>
            </label>

            <label class="radio-button-size">
              <input type="radio" id="size-l" name="size" value="L" />
              <span class="label-text">L</span>
            </label>

            <label class="radio-button-size">
              <input type="radio" id="size-xl" name="size" value="XL" />
              <span class="label-text">XL</span>
            </label>
          </div>

          <p>Số lượng: </p>
          <div class="product-quantity-option">
            <button onclick="handleQuantityButtonClick('-')">-</button>
            <input type="text" id="product-quantity" name="product-quantity" value="1" onchange="handleQuantity()">
            <button onclick="handleQuantityButtonClick('+')">+</button>
          </div>

          <button class="add-to-cart" onclick="handleAddToCartButton()">
            Thêm vào giỏ hàng
          </button>
        </div>

      </div>  

    </main>
    <footer></footer>
  </body>
</html>