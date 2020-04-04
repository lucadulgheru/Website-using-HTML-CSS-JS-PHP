<?php

session_start();


$product=$_GET["product"];

$productlist = $_COOKIE["user" . $_SESSION['userid']].',';

setcookie("user" . $_SESSION['userid'], $productlist.$product, time() + (86400 * 30), '/');   

echo $product.'\n';


echo 'user cart: '.'\n';

echo $_COOKIE["user" . $_SESSION['userid']];



?>