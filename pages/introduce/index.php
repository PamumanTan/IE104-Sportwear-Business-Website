<?php
?>

<!DOCTYPE html> <!--Define the version of HTML-->
<html lang="vi"> <!--Set the language-->

<head>
    <title>Sản phẩm</title>
    <link rel="icon" type="image/x-icon" href="../../assets/icons/favicon.png">
    <meta name="description" content="This webpage shows products list"> <!--Set the content-->
    <meta charset="utf-8"> <!--Set the charset to Unicode-->
    <link rel="stylesheet" href="./style.css">
    <!-- css for navbar -->
    <link rel="stylesheet" href="../../components/navbar/style.css">
    <link rel="stylesheet" href="../../components/navbar_logined/style.css">
    <link rel="stylesheet" href="../../assets/icons/themify-icons/themify-icons.css">
    <!-- css for footer -->
    <link rel="stylesheet" href="../../components/footer/style.css">
    <link rel="stylesheet" href="../../resources/css/root.css">
    <!-- <link href='https://fonts.googleapis.com/css?family=Droid+Sans:700|Droid+Serif' rel='stylesheet' type='text/css'> -->
</head>

<body>
    <!-- Check if user logined or not -->
    <?php
    include "../../controllers/verify_token.php";
    include "../../db/connection.php";
    include "../../helpers/jwt.php";
    $user = checkAuthorization('execQuery', 'Token::Verify');
    if ($user) {
        include_once "../../components/navbar_logined/index.php";
    } else {
        include_once "../../components/navbar/index.php";
    }
    ?>

    <!-- Main content -->
    <div id="banner">
        <div id="bannertext">
            <h1>SPORTWEARS</h1>
            <p>Nhà phân phối chính hãng từ 2023.</p>
        </div>
    </div>
    <div class="page-container">
        <div id="content">
            <h2>About us</h2>
            <p>
                Chào mừng các bạn đến với website chính thức của Sportwears - Cửa hàng phân phối sản phẩm chính hãng
                Nike, adidas, Puma, Desporte, Mizuno, Joma, Grand Sport, Asics, Kamito và X-Munich hàng đầu tại Việt
                Nam. Được ra đời từ 2023, chúng tôi luôn cập nhật những sản phẩm mới nhất với chất lượng và tiêu chuẩn
                từ hãng trong thời gian sớm nhất và liên tục theo thị trường. <b>Sản
                    phẩm tại Sportwears được cam kết chính hãng 100%.</b></p>
            <img src="http://marketingmag.ca/wp-content/uploads/2015/11/sport-chek-banner.jpg" alt="Cửa hàng">
            <p>Sportwears không chỉ là địa điểm bạn có thể tìm thấy những sản phẩm chất lượng từ các thương hiệu nổi
                tiếng, mà còn có mạng lưới cửa hàng đa dạng, phủ sóng rộng khắp các thành phố lớn. Được khách hàng đánh
                giá cao về uy tín và sự đa dạng về mẫu mã, chúng tôi không chỉ là nơi mua sắm, mà là điểm đến tin cậy
                cho những người yêu thể thao.</p>

            <img src="https://media.istockphoto.com/id/1306784188/vi/anh/ch%E1%BB%A7-c%E1%BB%ADa-h%C3%A0ng-%C4%91%E1%BB%93-th%E1%BB%83-thao-v%E1%BB%9Bi-clipboard-ki%E1%BB%83m-tra-h%C3%A0ng-t%E1%BB%93n-kho-qu%E1%BA%A3n-l%C3%BD-c%E1%BB%ADa-h%C3%A0ng-du-l%E1%BB%8Bch-l%C3%A0m-vi%E1%BB%87c.jpg?s=1024x1024&w=is&k=20&c=2ujnrZy_0gA3N9l2UzRhPMGRCtgGhEhi7bnZoPlwd_U=" alt="Cửa hàng">
            <p>Tại Sportwears, chúng tôi tự hào mang đến cho bạn một loạt sản phẩm được lựa chọn kỹ lưỡng từ các thương
                hiệu hàng đầu trong ngành công nghiệp thể thao. Cam kết với chất lượng, tính năng và phong cách đảm bảo
                rằng mọi sản phẩm trong cửa hàng của chúng tôi đều đáp ứng các tiêu chuẩn cao nhất, giúp bạn tập trung
                vào việc vượt qua giới hạn và đạt được thành công.</p>

            <img src="https://file.hstatic.net/200000278317/file/index_blog_review_image_7d98d77ce4a14d01bc9290c498ccd680.png" alt="Cửa hàng">
            <p>Hãy gia nhập cộng đồng Sportwears và khám phá một thế giới nơi đam mê gặp gỡ hiệu suất. Chúng tôi không
                chỉ là một cửa hàng; chúng tôi là đối tác tận tâm trong hành trình hướng tới một lối sống khỏe mạnh,
                hạnh phúc và tích cực. Hãy đến và trải nghiệm sự khác biệt tại Sportwears – nơi hành trình của bạn đến
                đỉnh cao bắt đầu!</p>
        </div>
    </div>
</body>

</html>
</div>

<!-- footer -->
<?php
include '../../components/footer/index.php';
?>

<script src="../../components/navbar/script.js"></script>
<script src="./script.js"></script>
</body>

</html>