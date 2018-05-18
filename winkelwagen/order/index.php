<?php
include 'myparcel/src/AutoLoader.php';
include '../../connect.php';
session_start();
$stack = $_SESSION['producten'];
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}
$sql2 = "SELECT * FROM producten";
$result2 = $conn->query($sql2);

?>
<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Fuck You Socks</title>
  <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/icon.css">
  <link rel="stylesheet" href="css/hamburger.css">
  <link rel="stylesheet" href="css/cart.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
  <div class="header">
    <div class="navbar">
      <div class="hamburger12">
        <div class="container container-hamburger">
          <div class="hamburger-wrapper">
            <div class="hamburger">
              <span class="hamurger-first"></span>
              <span class="hamurger-second"></span>
              <span class="hamurger-third"></span>
            </div>
            <div class="hamburger-menu">
              <a href="#"><img src="../../images/logo.png" alt="logo" width="200px"></a>
              <ul class="main-links">
                <li class="delay02"><a href="../../">Home</a></li>
                <li class="delay03"><a href="../../about">About</a></li>
                <li class="delay04"><a href="../../contact">Contact</a></li>
              </ul>
              <div class="secondary-links">
                <div class="row">
                  <a href="#">Instagram</a>
                  <a href="#"></a>
                </div>
                <div class="row">
                  <p>&#169; 2018 | Fuck You Socks</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="blank">
        <ul>
          <li><a href="../../">Home</a></li>
          <li><a href="../../about">About</a></li>
          <li><a href="../../contact">Contact</a></li>
        </ul>
      </div>
      <div class="icons">
      <a href="#"><img src="../../images/search.png" alt="search" width="22px"></a>
      <a href="#" class="cart" id="cart"><img src="../../images/shoppingcart.png" alt="shoppingcart" width="25px"></a>
      <a class="number"><?php echo count($stack)?></a>
    </div>
  <div class="logo">
  <a href="#"><img src="../../images/logo.png" alt="logo" width="200px"></a>
  </div>
</div>
</div>
<div class="midden">
	<h1 style="padding-top: 25px;">Shipping information</h1>
	<div class="inputfield" style="padding-bottom: 40px;">
		<form>
			<h1>InvoiceDetails</h1>
			<div class="input">
			<p><b>Email</b></p>
			<input name="email" type="text"></input>
		</div>
		<div class="input" style="text-align: left;">
		<p><b>Gender</b></p>
		<input style=" margin-left: 15%; padding: 0px; width: 20px; top: 0px; display: inline-block;" type="radio" name="gender" value="male" checked> Male
		<input style="padding: 0px; width: 20px; top: 0px; display: inline-block;" type="radio" name="gender" value="female"> Female
	</div>
	<div class="input" style="position: relative; top: 25px;">
	<p><b>First name</b></p>
	<input name="fname" type="text"></input>
</div>
<div class="input" style="position: relative; top: 25px;">
<p><b>Last name</b></p>
<input name="lname" type="text"></input>
</div>
<div class="input" style="position: relative; top: 25px;">
<p><b>Country</b></p>
<input name="country" type="text"></input>
</div>
<div class="input" style="position: relative; top: 25px;">
<p><b>Zipp Code</b></p>
<input name="zipp" type="text"></input>
</div>
<div class="input" style="position: relative; top: 25px;">
<p><b>House Number</b></p>
<input name="hnumber" style="width: 30%; position: relative; left: calc(-20% + 5px)" type="text"></input>
</div>
<div class="input" style="position: relative; top: 25px;">
<p><b>Street</b></p>
<input name="street" type="text"></input>
</div>
<div class="input" style="position: relative; top: 25px;">
<p><b>City</b></p>
<input name="city" type="text"></input>
</div>
		</form>
	</div>
	<div class="inputfield" style="vertical-align: top; padding-bottom: 0px;">
		<?php
		  $subprijs = "0";
		  if(isset($_SESSION['producten'])){
			$stack = $_SESSION['producten'];
			foreach ($stack as $stacks) {
			$sql = "SELECT * FROM producten WHERE product_id = $stacks";
			$result = $conn->query($sql);
			$row = $result->fetch_assoc();?>
			<div class="tabel" style=" width: 80%; margin-left: 10%;">
			<img style="grid-area: productfoto; position: relative; top: 10px;" src="../../images/<?php echo $row["photo"]?>" alt="logo" width="100px">
			<h1 style="grid-area: naam; font-size: 20px;"><?php echo $row["naam"]?></h1>
			<p style="margin-top: -15px;">Aantal 20</p>
			</form>
			<p style="grid-area: prijs; position: relative; top: -10px;">&euro;<?php echo $prijs ?></p>
		</div>
		<?php
		}}
		?>
		<div class="totaleprijsdiv" style="background-color: #eee;border: 1px solid black; text-align: left; width: 100%; position: relative; left: -1px; top: 1px;">
			<div><p style="left: 20px;">Subtotaal</p><p style="float: right; right: 20px;">&euro;<?php echo $subprijs;?></p></div>
			<div><p style="left: 20px;">Verzendkosten</p><p style="float: right; right: 20px;">&euro;2,50</p></div>
			<div><p style="left: 20px;">Totaal</p><p style="float: right; right: 20px;">&euro;<?php echo $subprijs + "2.50";?></p></div>
			<a class="paybutton" href="#">Pay</a>
		</div>
		</div>
	</div>
</div>
<script>
(function(){
$(".hamburger").on("click", function() {
	$(this).parent(".hamburger-wrapper").toggleClass("hamburger-active");
});
}());
(function(){
  $("#cart").on("click", function() {
    $(".shoppingcart").fadeToggle( "fast");
  });
})();
</script>
</body>
</html>
