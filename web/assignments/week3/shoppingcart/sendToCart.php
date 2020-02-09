<?php
session_start();

$item = $_POST['items'];
$_SESSION['items'] = $item;
$name = $_POST['name'];
$_SESSION['name'] = $name;

$cart = 'cart.php';
header("Location: $cart");

die();
?>