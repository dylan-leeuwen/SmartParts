<?php
session_start();

if(!is_array($_SESSION['producten'])){
	$_SESSION['producten'] = array();
}

include '../connect.php';
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}
$id = $_GET["id"];
$sql = "SELECT product_id FROM producten WHERE product_id='$id'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$id = $row["product_id"];
if (in_array($id, $_SESSION['producten'])) {
}
else {
array_push($_SESSION['producten'], $id);
}
header('location:  ../index.php')

?>
