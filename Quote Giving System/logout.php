<?php


session_start();


unset($_SESSION["user_mail"]);
unset($_SESSION["user_password"]);
 session_destroy();

// header('location:login.php');



header('location:login.php');



?>