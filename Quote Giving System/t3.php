<?php
session_start();
session_unset();
session_destroy();
echo " ". $_SESSION['password_name']."Null";

?>