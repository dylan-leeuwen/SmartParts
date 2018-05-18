<?php
include '../../../connect.php';
$adminid = $_GET["id"];
$productnaam = $_POST["productnaam"];
$productdescription = $_POST["productdescription"];
$productprice = $_POST["productprice"];
$productstock = $_POST["productstock"];
$footer = $_POST["footer"];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "INSERT INTO producten (naam, omschrijving , prijs, stock, footer)
VALUES ('$productnaam', '$productdescription', '$productprice', '$productstock', '$footer')";

if ($conn->query($sql) === TRUE) {
   header('Location: index.php?id='. $adminid);
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
