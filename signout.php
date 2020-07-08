<?php
session_start();
setcookie("type", "", time()-3600);
unset($_SESSION['user']);
session_unset();
session_destroy();
$_SESSION = array();
header("Location: login.php");
?>