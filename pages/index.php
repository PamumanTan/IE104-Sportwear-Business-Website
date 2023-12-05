<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="icon" type="image/x-icon" href="../assets/icons/favicon.png">
    <link rel="stylesheet" href="../components/carousel-pro/style.css">
    <link rel="stylesheet" href="../components/marquee/style.css">
    <link rel="stylesheet" href="../components/navbar/style.css">
    <link rel="stylesheet" href="../components/navbar_logined/style.css">
    <link rel="stylesheet" href="../components/footer/style.css">
    <link rel="stylesheet" href="../components/scroll-to-top-button/style.css">
    <link rel="stylesheet" href="./home/style.css">
    <link rel="stylesheet" href="../assets/icons/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="../resources/css/root.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <script src="../components/carousel-pro/script.js" defer></script>
    <script src="../components/scroll-to-top-button/script.js" defer></script>
    <script src="../components/marquee/script.js" defer></script>
    <script src="https://kit.fontawesome.com/34f5218fc0.js" crossorigin="anonymous"></script>
</head>

<body>
    <!-- Check if user logined or not -->
    <?php
    include "../controllers/verify_token.php";
    include "../db/connection.php";
    include "../helpers/jwt.php";
    $user = checkAuthorization('execQuery', 'Token::Verify');
    if ($user) {
        include_once "../components/navbar_logined/index.php";
    } else {
        include_once "../components/navbar/index.php";
    }
    ?>


    <?php include "../components/scroll-to-top-button/index.php" ?>
    
    <div class="homePage">
        <div class="homePoster">
            <?php include "../components/carousel-pro/index.php" ?>
        </div>
            <?php include "../components/marquee/index.php" ?>
        <div class="homeCategory">
            <div>
                <p>HẠNG MỤC</p>
            </div>
            <div class="homeListCategory">
                <div>
                    <img src="https://images.pexels.com/photos/13450843/pexels-photo-13450843.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                        alt="">
                    <h4>SẢN PHẨM MỚI</h4>
                </div>
                <div>
                    <img src="https://images.pexels.com/photos/8556754/pexels-photo-8556754.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                        alt="">
                    <h4>NAM</h4>
                </div>
                <div>
                    <img src="https://images.pexels.com/photos/5300913/pexels-photo-5300913.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                        alt="">
                    <h4>NỮ</h4>
                </div>
                <div>
                    <img src="https://images.pexels.com/photos/5896837/pexels-photo-5896837.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                        alt="">
                    <h4>TRẺ EM</h4>
                </div>
                <div>
                    <img src="https://images.pexels.com/photos/9400764/pexels-photo-9400764.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                        alt="">
                    <h4>KHUYẾN MÃI</h4>
                </div>
            </div>
        </div>
        <div class="homeBanner">
            <div class="homeBannerDescribe">
                <p class="mb1 mt2">GIÀY BÓNG ĐÁ THƯỢNG ĐÌNH</p>
                <p class="mb2">Bước vào sân cỏ với đẳng cấp cùng giày bóng đá nam Thượng Đình - sự kết hợp hoàn hảo giữa
                    phong cách và hiệu suất. </p>
                <div class="homeBannerDescribe-img-container">
                    <img src="https://file.hstatic.net/200000278317/file/kham-pha-nike-blast-pack-loi-chao-nam-moi-den-tu-nha-swoosh-2_4246078fe7014d5ebffd2e25d2dba022.jpg"
                        alt="">

                </div>
                <button class="homeBannerBtn">XEM CHI TIẾT</button>
            </div>
            <div>
                <img src="../assets/images/module-3/image-png" alt="">
            </div>
        </div>
        <div class="homeNewestProduct">
            <div>
                <p>SẢN PHẨM MỚI NHẤT</p>
            </div>
            <div class="homeNewestProductImg">
                <img src="https://i.pinimg.com/564x/3c/a8/e5/3ca8e5a7e8509b84dd31620e22544065.jpg" alt="">
                <img src="https://images.unsplash.com/photo-1616124619460-ff4ed8f4683c?q=80&w=1898&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                    alt="">
                <img src="https://i.pinimg.com/736x/ad/47/9d/ad479d5aaa731d35d8c2e09ee06a073d.jpg" alt="">
            </div>
        </div>

        <div class="homeRate">
            <div>
                <p>ĐÁNH GIÁ CỦA KHÁCH HÀNG</p>
            </div>
            <div class="homeRateImg">
                <img src="../assets/images/module-5/customer-Review-1.png" alt="">
                <img src="../assets/images/module-5/customer-Review.png" alt="">
                <img src="../assets/images/module-5/customer-Review-1.png" alt="">
            </div>
        </div>

        <div class="homeMen">
            <div>
                <p>NAM</p>
            </div>
            <div class="homeMenList">
                <div>
                    <img src="../assets/images/module-6/item-1.png" alt="">
                    <h4>GIÀY BÓNG ĐÁ THƯỢNG ĐÌNH</h4>
                </div>
                <div>
                    <img src="../assets/images/module-6/item-2.png" alt="">
                    <h4>GIÀY BÓNG ĐÁ THƯỢNG ĐÌNH</h4>
                </div>
                <div>
                    <img src="../assets/images/module-6/item-3.png" alt="">
                    <h4>GIÀY BÓNG ĐÁ THƯỢNG ĐÌNH</h4>
                </div>
            </div>
            <div>
                <button class="homeMenBtn">XEM CHI TIẾT</button>
            </div>
        </div>
        <div class="homeWomen">
            <div>
                <p>NỮ</p>
            </div>
            <div class="homeWomenList">
                <div>
                    <img src="../assets/images/module-6/item-1.png" alt="">
                    <h4>GIÀY BÓNG ĐÁ THƯỢNG ĐÌNH</h4>
                </div>
                <div>
                    <img src="../assets/images/module-6/item-2.png" alt="">
                    <h4>GIÀY BÓNG ĐÁ THƯỢNG ĐÌNH</h4>
                </div>
                <div>
                    <img src="../assets/images/module-6/item-3.png" alt="">
                    <h4>GIÀY BÓNG ĐÁ THƯỢNG ĐÌNH</h4>
                </div>
            </div>
            <div>
                <button class="homeWomenBtn">XEM CHI TIẾT</button>
            </div>
        </div>
        <div class="homeKids">
            <div>
                <p>TRẺ EM</p>
            </div>
            <div class="homeKidsList">
                <div>
                    <img src="../assets/images/module-6/item-1.png" alt="">
                    <h4>GIÀY BÓNG ĐÁ THƯỢNG ĐÌNH</h4>
                </div>
                <div>
                    <img src="../assets/images/module-6/item-2.png" alt="">
                    <h4>GIÀY BÓNG ĐÁ THƯỢNG ĐÌNH</h4>
                </div>
                <div>
                    <img src="../assets/images/module-6/item-3.png" alt="">
                    <h4>GIÀY BÓNG ĐÁ THƯỢNG ĐÌNH</h4>
                </div>
            </div>
            <div>
                <button class="homeKidsBtn">XEM CHI TIẾT</button>
            </div>
        </div>

    </div>

    <?php include_once "../components/footer/index.php" ?>

    <script>
        document.querySelectorAll('.homeBannerBtn').forEach(element => element.onclick = () => {
            window.location.href = '../pages/product-detail';
        });

        document.querySelectorAll('.homeMenBtn').forEach(element => element.onclick = () => {
            window.location.href = '../pages/product-detail';
        });

        document.querySelectorAll('.homeWomenBtn').forEach(element => element.onclick = () => {
            window.location.href = '../pages/product-detail';
        });

        document.querySelectorAll('.homeKidsBtn').forEach(element => element.onclick = () => {
            window.location.href = '../pages/product-detail';
        });
    </script>

    <script src="../resources/js/root.js"></script>
    <script src="../components/navbar/script.js"></script>
</body>

</html>