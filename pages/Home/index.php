<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomePage</title>
    <link rel="stylesheet" href="./index.css">
    <link rel="stylesheet" href="../../components/NavBar/index.css">
    <link rel="stylesheet" href="../../components/Footer/index.css">
    <link rel="stylesheet" href="../../asset/icons/themify-icons/themify-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
</head>

<body>
    <?php include_once "../../components/NavBar/index.php" ?>

    <div class="homePage">
        <div class="homePoster">
            <img src="../../asset/images/Image.png" alt="">
        </div>
        <div class="homeCategory">
            <div>
                <p>HẠNG MỤC</p>
            </div>
            <div class="homeListCategory">
                <div>
                    <img src="../../asset/images/Module 2/Item 2.png" alt="">
                    <h4>SẢN PHẨM MỚI</h4>
                </div>
                <div>
                    <img src="../../asset/images/Module 2/Item 3.png" alt="">
                    <h4>NAM</h4>
                </div>
                <div>
                    <img src="../../asset/images/Module 2/Item 4.png" alt="">
                    <h4>NỮ</h4>
                </div>
                <div>
                    <img src="../../asset/images/Module 2/Item 5.png" alt="">
                    <h4>TRẺ EM</h4>
                </div>
                <div>
                    <img src="../../asset/images/Module 2/Item 2.png" alt="">
                    <h4>KHUYẾN MÃI</h4>
                </div>
            </div>
        </div>
        <div class="homeBanner">
            <div class="homeBannerDescribe">
                <p class="mb1 mt2">GIÀY BÓNG ĐÁ THƯỢNG ĐÌNH</p>
                <p class="mb2">Bước vào sân cỏ với đẳng cấp cùng giày bóng đá nam Thượng Đình - sự kết hợp hoàn hảo giữa
                    phong cách và hiệu suất. </p>
                <button class="homeBannerBtn">XEM CHI TIẾT</button>
            </div>
            <div>
                <img src="../../asset/images/Module 3/Image.png" alt="">
            </div>
        </div>
        <div class="homeNewestProduct">
            <div>
                <p>SẢN PHẨM MỚI NHẤT</p>
            </div>
            <div class="homeNewestProductImg">
                <img src="../../asset/images/Module 4/Item 1.png" alt="">
                <img src="../../asset/images/Module 4/Item 2.png" alt="">
                <img src="../../asset/images/Module 4/Item 3.png" alt="">

            </div>
        </div>

        <div class="homeRate">
            <div>
                <p>ĐÁNH GIÁ CỦA KHÁCH HÀNG</p>
            </div>
            <div class="homeRateImg">
                <img src="../../asset/images/Module 5/Customer Review-1.png" alt="">
                <img src="../../asset/images/Module 5/Customer Review.png" alt="">
                <img src="../../asset/images/Module 5/Customer Review-1.png" alt="">
            </div>
        </div>

        <div class="homeMen">
            <div>
                <p>NAM</p>
            </div>
            <div class="homeMenList">
                <div>
                    <img src="../../asset/images/Module 6/Item 1.png" alt="">
                    <h4>GIÀY BÓNG ĐÁ THƯỢNG ĐÌNH</h4>
                </div>
                <div>
                    <img src="../../asset/images/Module 6/Item 2.png" alt="">
                    <h4>GIÀY BÓNG ĐÁ THƯỢNG ĐÌNH</h4>
                </div>
                <div>
                    <img src="../../asset/images/Module 6/Item 3.png" alt="">
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
                    <img src="../../asset/images/Module 6/Item 1.png" alt="">
                    <h4>GIÀY BÓNG ĐÁ THƯỢNG ĐÌNH</h4>
                </div>
                <div>
                    <img src="../../asset/images/Module 6/Item 2.png" alt="">
                    <h4>GIÀY BÓNG ĐÁ THƯỢNG ĐÌNH</h4>
                </div>
                <div>
                    <img src="../../asset/images/Module 6/Item 3.png" alt="">
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
                    <img src="../../asset/images/Module 6/Item 1.png" alt="">
                    <h4>GIÀY BÓNG ĐÁ THƯỢNG ĐÌNH</h4>
                </div>
                <div>
                    <img src="../../asset/images/Module 6/Item 2.png" alt="">
                    <h4>GIÀY BÓNG ĐÁ THƯỢNG ĐÌNH</h4>
                </div>
                <div>
                    <img src="../../asset/images/Module 6/Item 3.png" alt="">
                    <h4>GIÀY BÓNG ĐÁ THƯỢNG ĐÌNH</h4>
                </div>
            </div>
            <div>
                <button class="homeKidsBtn">XEM CHI TIẾT</button>
            </div>
        </div>

    </div>

    <?php include_once "../../components/Footer/index.php" ?>

    <script>
        document.querySelectorAll('.homeBannerBtn').forEach(element => element.onclick = () => {
                window.location.href = '../pages/ProductDetail';
        });

        document.querySelectorAll('.homeMenBtn').forEach(element => element.onclick = () => {
            window.location.href = '../pages/ProductList';
        });

        document.querySelectorAll('.homeWomenBtn').forEach(element => element.onclick = () => {
            window.location.href = '../pages/ProductList';
        });

        document.querySelectorAll('.homeKidsBtn').forEach(element => element.onclick = () => {
            window.location.href = '../pages/ProductList';
        });

    </script>
    <script src="../../components/NavBar/script.js"></script>

</body>

</html>