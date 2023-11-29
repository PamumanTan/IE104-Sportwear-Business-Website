<?php
?>

<!DOCTYPE html> <!--Define the version of HTML-->
<html lang="vi"> <!--Set the language-->

<head>
    <title>Products</title>
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

    <h1>This is profile page. Need someone doing :(</h1>
    <!-- footer -->
    <?php
    include '../../components/footer/index.php';
    ?>

    <script src="./script.js"></script>
    <script src="../../components/navbar/script.js"></script>
</body>

</html>