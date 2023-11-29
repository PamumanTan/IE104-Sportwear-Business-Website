<?php 
    if (isset($_POST['phonenumber']) && isset($_POST['password']) && $_POST['phonenumber'] != "" && $_POST['password'] != "") {
        echo "This is login controller";
        echo "Phone number: " . $_POST['phonenumber'];
        echo "Password: " . $_POST['password'];
    } else {
        echo "Not enough creadentials";
    }