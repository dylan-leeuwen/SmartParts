<?php
include '../connect.php';
$conn = new mysqli($servername, $username, $password, $dbname);
$totaltotalrevenue = "0";

// count orders connection
$sql = "SELECT COUNT(*) AS ordercount FROM orders";
$resultcountorders = $conn->query($sql);
$countorders = $resultcountorders->fetch_assoc();
$totalsales = $countorders["ordercount"];
// count users connection
$sql = "SELECT COUNT(*) AS usercount FROM users";
$resultcountorders = $conn->query($sql);
$countuser = $resultcountorders->fetch_assoc();
$totalcostumers = $countuser["usercount"];
?>
