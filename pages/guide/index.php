<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hướng dẫn</title>
    <link rel="icon" type="image/x-icon" href="../../assets/icons/favicon.png">
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="../../components/footer/style.css">
    <link rel="stylesheet" href="../../components/navbar/style.css">
    <link rel="stylesheet" href="../../components/navbar_logined/style.css">
    <link rel="stylesheet" href="../../components/navbar/navbar-animation.css">
    <link rel="stylesheet" href="../../assets/icons/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="../../resources/css/root.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
</head>

<body>
    <main class="root-main">
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
        <div class="content-main">
            <div class="guide">
                <div class="guide1">
                    <p class="guideTitle bold">HƯỚNG DẪN</p>
                    <div class="guideSearch">
                        <input type="text" placeholder="Chúng tôi có thể giúp gì cho bạn ?"></input>
                        <div style="width: 40px; display: flex; justify-content: center;">
                            <i class="ti-search"></i>
                        </div>
                    </div>
                </div>
                <div class="guideDetails">
                    <div class="firstDetail">
                        <p class="detailTitle">HỖ TRỢ NHANH CHÓNG</p>
                        <p class="detailPNormal">Câu trả lời cho những câu hỏi thường gặp nhất của chúng tôi chỉ cần một cú nhấp
                            chuột.</p>
                    </div>
                    <div class="line2 mt1">

                    </div>
                    <div class="secondDetail">
                        <div class="row">
                            <div>
                                <p class="detailTitle2">VẬN CHUYỂN & GIAO HÀNG</p>
                                <p class="detailPNormal">Các lựa chọn vận chuyển của Sportswear là gì?</p>
                                <p class="detailPNormal">Làm cách nào để được giao hàng miễn phí cho các đơn hàng của Sportswear?</p>
                            </div>
                            <div>
                                <p class="detailTitle2">HOÀN TRẢ</p>
                                <p class="detailPNormal">Chính sách hoàn trả của Sportswear là gì?</p>
                                <p class="detailPNormal">Làm cách nào để trả lại đơn hàng Nike của tôi?</p>
                                <p class="detailPNormal">Tiền hoàn lại của tôi ở đâu?</p>
                            </div>
                            <div>
                                <p class="detailTitle2">THÀNH VIÊN SPORTSWEAR</p>
                                <p class="detailPNormal">Tư cách thành viên Sportswear là gì?</p>
                                <p class="detailPNormal">Làm cách nào để có được những mẫu giày sneaker mới nhất của Sportswear?
                                </p>
                                <p class="detailPNormal">Làm cách nào để đặt lại mật khẩu Sportswear của tôi?</p>
                            </div>
                        </div>
                        <div class="row">
                            <div>
                                <p class="detailTitle2">ĐƠN HÀNG</p>
                                <p class="detailPNormal">Đơn hàng Sportswear của tôi ở đâu?</p>
                                <p class="detailPNormal">Tôi có thể hủy hoặc thay đổi đơn hàng Sportswear của mình không?</p>
                                <p class="detailPNormal">Làm thế nào để tôi tìm thấy kích thước phù hợp?</p>
                            </div>
                            <div>
                                <p class="detailTitle2">THÔNG TIN CÔNG TY</p>
                                <p class="detailPNormal">Giày Sportswear có được bảo hành không?</p>
                                <p class="detailPNormal">Tôi có thể tái chế giày Sportswear của mình không?</p>
                                <p class="detailPNormal">Sportswear có cung cấp các khoản tài trợ hoặc quyên góp không?</p>
                            </div>
                            <div>
                                <p class="detailTitle2">ƯU ĐÃI SPORTSWEAR</p>
                                <p class="detailPNormal">Sportswear có giảm giá cho sinh viên không?</p>
                                <p class="detailPNormal">Sportswear có giảm giá cho giáo viên không?</p>
                                <p class="detailPNormal">Sportswear có giảm giá quân sự không?</p>
                                <p class="detailPNormal">Sportswear có giảm giá cho người ứng phó đầu tiên và chuyên gia y tế
                                    không?</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="guideContact">
                    <div>
                        <p class="detailTitle">LIÊN HỆ CHÚNG TÔI</p>
                    </div>
                    <div class="line2 mt1"></div>
                    <div class="row mt2">
                        <div class="textCenter">
                            <a href=""><img class="mb1" src="../../assets/images/guide/chat.png" alt=""></a>
                            <p class="detailTitle2">SẢN PHẨM & ĐƠN HÀNG</p>
                            <p class="detailPNormal">Trò chuyện với chúng tôi</p>
                            <p class="detailPNormal">7 am - 11 pm</p>
                            <p class="detailPNormal">Các ngày trong tuần</p>
                        </div>
                        <div class="textCenter">
                            <a href=""><img class="mb1" src="../../assets/images/guide/phone.png" alt=""></a>
                            <p class="detailTitle2">CÁC VẤN ĐỀ CẦN HỖ TRỢ</p>
                            <p class="detailPNormal">19001098</p>
                            <a href="mailto:sportswear@gmail.com.vn" class="detailPNormal">sportswear@gmail.com.vn</a>
                            <p class="detailPNormal">8 am - 11 pm</p>
                            <p class="detailPNormal">Các ngày trong tuần</p>
                        </div>
                        <div class="textCenter">
                            <a href=""><i class="ti-location-pin"></i></a>
                            <p class="detailTitle2 mt1">VỊ TRÍ CỬA HÀNG</p>
                            <a href="" class="detailPNormal">Tìm các cửa hàng gần bạn</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php require('../../components/footer/index.php'); ?>
    </main>

    <script src="../../resources/js/root.js"></script>
    <script src="../../components/navbar/script.js"></script>
    <script src="../../components/navbar_logined/script.js"></script>

    <script>
        const subNavBlurs = document.querySelectorAll('.subnav-blur');
        const body = document.querySelector('body');
        const guide = document.querySelector('.guide');
        // navListEnd.onmouseover = function() {
        //     guide.style.opacity = 0.2;
        // }
        subNavBlurs.forEach(subNavBlur => {
            // subNavBlur.onmouseover = function() {
            //     guide.style.opacity = 0.2;
            // }
            // subNavBlur.onmouseout = function() {
            //     guide.style.opacity = 1;
            // }
        })
    </script>
</body>

</html>