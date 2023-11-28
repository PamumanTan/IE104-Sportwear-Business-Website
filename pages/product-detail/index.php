<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./style.css">
  <link rel="stylesheet" href="../../components/navbar/style.css">
  <link rel="stylesheet" href="../../components/comment/style.css">
  <link rel="stylesheet" href="../../components/footer/style.css">
  <link rel="stylesheet" href="../../components/navbar_logined/style.css">
  <link rel="stylesheet" href="../../assets/icons/themify-icons/themify-icons.css">
  <script src="./script.js" defer></script>
</head>

<body>
  <?php
  include_once "../../controllers/verify_token.php";
  include "../../db/connection.php";
  require("../../helpers/jwt.php");
  $user = checkAuthorization('execQuery', 'Token::Verify');
  if ($user) {
    include_once "../../components/navbar_logined/index.php";
  } else {
    include_once "../../components/navbar/index.php";
  }
  ?>
  <main>
    <?php
    if (isset($_GET['id']) && $_GET['id']) {
      $id = $_GET['id'];
      $query = "SELECT * FROM products WHERE id = $id";
      $result = execQuery($query);
      if ($result) {
        $row = $result->fetch_assoc();
    ?>

        <div class="product-container">
          <div class="product-imgs">
            <img src="<?php echo $row['product_image'] ?>" alt="img1" />
          </div>


          <div class="product-details">
            <h1 id="product-name"><?php echo $row['product_name'] ?></h1>
            <p id="product-price"><?php echo number_format($row['product_price']) ?> VND</p>
            <div id="p-decription">
              <p id="product-decription">
                <?php echo $row['product_description'] ?>
              </p>
            </div>

            <!-- Get product's color and size -->
            <?php $color = $row['product_color'] ?>
            <?php $size = $row['product_size'] ?>

            <p class="label">Màu:</p>
            <div class="product-color-option">
              <label class="radio-button-color" id="<?php echo $color ?>" name="color" style="background-color: <?php echo $color ?>"></label>
            </div>

            <p class="label">Kích thước:</p>
            <div class="product-size-option">
              <label class="radio-button-size">
                <input type="radio" id="size-<?php echo $size ?>" name="size" value="<?php echo $size ?>" />
                <span class="label-text"><?php echo $size ?></span>
              </label>
            </div>

            <p class="label">Số lượng: </p>
            <div class="product-quantity-option">
              <button onclick="handleQuantityButtonClick('-')">-</button>
              <input type="text" id="product-quantity" name="product-quantity" value="1" onchange="handleQuantity()">
              <button onclick="handleQuantityButtonClick('+')">+</button>
            </div>

            <button class="add-to-cart" onclick="handleAddToCartButton();">
              Thêm vào giỏ hàng
            </button>
          </div>
        </div>

        <!-- Query reviews  -->
        <?php
        $query = "select comments.*, users.user_name as user_name 
                  from comments 
                  join users  
                  where comments.user_id = users.id and comments.product_id = $id";
        $result = execQuery($query);
        ?>

        <div class="review-container">
          <div class="review-left">
            <h2>Đánh giá</h2>
            <h3 id="reviews-counter"><?php echo $result->num_rows; ?> đánh giá </h3>
          </div>

          <div class="review-right">
            <select name="comment-select" id="comment-select">
              <option value="All">Tất cả đánh giá</option>
              <option value="Me">Đánh giá của tôi</option>
            </select>

            <div class="review-comments">
              <!-- Query comments  -->
              <?php

              while ($row = $result->fetch_assoc()) {
              ?>

                <div class="cmt-container">

                  <div class="cmt-top">
                    <div class="rating"></div>
                    <p id="date"><?php
                                  $datetime = new DateTime($row['created_at']);
                                  $formattedDate = $datetime->format('d/m/Y');
                                  echo $formattedDate;
                                  ?>
                    </p>
                  </div>

                  <div class="cmt-heading">
                    <h2 id="cmt-title">
                      <?php echo $row['title']; ?>
                    </h2>
                    <p id="cmt-username"><?php echo $row['user_name']; ?></p>
                  </div>

                  <div class="cmt-main">
                    <div class="cmt-content">
                      <p><?php echo $row['content']; ?></p>
                    </div>
                    <div class="upvote">
                      <p>Đánh giá hữu ích? </p>
                      <a href="#" id="yes">Có</a>
                      <p id="vote-yes">(1)</p>
                      <a href="#" id="no">Không</a>
                      <p id="vote-no">(1)</p>
                    </div>
                  </div>

                </div>

              <?php
              }
              ?>
            </div>
          </div>
        </div>

    <?php
      }
    }
    ?>

    <!-- End of product detail page -->
  </main>
  <?php include '../../components/footer/index.php' ?>

  <div class="modal-background"></div>
  <div class="modal">
    <div class="modal-content">
      <h2>Thêm vào giỏ hàng thành công</h2>
      <p>Add to cart successfully.</p>
      <button id="closeModalBtn">Thoát</button>
    </div>
  </div>

  <script src="../../components/navbar/script.js"></script>
  <script src="../../components/comment/script.js" defer></script>
</body>

</html>