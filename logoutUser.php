<?php
session_start();
unset($_SESSION['email']);
unset($_SESSION['id']);
unset($_SESSION['name']);
unset($_SESSION['adress']);
unset($_SESSION['phone']);
header("Location:index.php");
?>

