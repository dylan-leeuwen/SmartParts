<?php
session_start();
$id = $_GET["id"];
$array = $_SESSION['producten'];
$key=array_search($id,$_SESSION['producten']);
if($key!==false)
unset($_SESSION['producten'][$key]);
$_SESSION['producten'] = array_values($_SESSION['producten']);
header('location:  ../index.php')
?>
