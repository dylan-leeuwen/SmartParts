<?php

include '../../connect.php';
session_start();
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}
$sql2 = "SELECT * FROM producten WHERE catogorie = 'iphone6s'";
$result2 = $conn->query($sql2);
?>
<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Smart Parts | Iphone 6s</title>
  <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/nav.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
    <?php
		$aantalproducten = 0;
    if(isset($_SESSION['producten'])){
    $stack = $_SESSION['producten'];
     foreach ($stack as $stacks) {
			$aantalproducten++;
      $sql = "SELECT * FROM producten WHERE product_id = $stacks";
      $result = $conn->query($sql);
      $row = $result->fetch_assoc();
      ?>
<?php }} else {?>
<?php }?>
<!--hey-->
<div class="navbar">
	<div class="midden">
	<a href="../../"><img style="display: inline-block;" width="200px" src='../../images/logo.png'>
	<div style="display: inline-block; position: relative; top: 10px; float: right;" class="navicons">
	<a href="#"><span style="font-size:26px; color:#4285f4;" class="lnr lnr-magnifier"></span></a>
	<a href="../../winkelwagen"><span style="font-size:30px; color:#4285f4;" class="lnr lnr-cart"></span></a>
	<a><span style="background-color:#4285f4; padding: 1px 6px 1px 5px; color: white; border-radius: 50%; font-family: roboto; position: relative; left: -17px; top: -17px;"><?php echo $aantalproducten ?></span></a>
	<a href="#"><span style="font-size:30px; color:#4285f4;" class="lnr lnr-menu menuicon"></span></a>
</div>
</div>
<div class="navcont">
<div class="nav">
		<ul>
			<li class="item"><a style="color: white; font-size: 15px;" href="#">Home</a></li>
            <li class="drop">
            <a class="item" href="#">Onderdelen</a>
            <div class="dropdownContain">
					<div class="dropOut">
						<ul>
							<li><a href="../../onderdelen/iphone5">Iphone 5</a></li>
							<li><a href="../../onderdelen/iphone5s">Iphone 5s</a></li>
							<li><a href="../../onderdelen/iphone5c">Iphone 5c</a></li>
							<li><a href="../../onderdelen/iphone6">Iphone 6</a></li>
							<li><a href="../../onderdelen/iphone6plus">Iphone 6 plus</a></li>
							<li><a href="../../onderdelen/iphone6s">Iphone 6s</a></li>
							<li><a href="../../onderdelen/iphone6splus">Iphone 6s plus</a></li>
							<li><a href="../../onderdelen/iphone7">Iphone 7</a></li>
							<li><a href="../../onderdelen/iphone7plus">Iphone 7 plus</a></li>
						</ul>
					</div>
				</div>
			</li>
			<li class="item"><a style="color: white; font-size: 15px;" href="#">Contact</a></li>
		</ul>
</div>
<div class="tips">
	<p><i style="color: #4285f4;" class="fas fa-truck"></i><b style="color: #4285f4;">  Werkdagen voor 17:00 besteld,</b> morgen in huis*</p>
	<p><i style="color: #4285f4;" class="fas fa-cube"></i><b style="color: #4285f4;">   Gratis</b> verzending!</p>
	<p><i style="color: #4285f4;" class="fas fa-star"></i><b style="color: #4285f4;">  Hoge</b> kwaliteit </p>
	<p><i style="color: #4285f4;" class="fas fa-euro-sign"></i><b style="color: #4285f4;">  Laagste</b> Prijzen</p>
</div>
</div>
</div>
<div class='body'>
	<h1 class="headtitle">Iphone 6s Onderdelen</h1>
  <div class='container'>
		<?php while($row = $result2->fetch_assoc()){?>
    <div class='card'>
      <div class='card-content'>
        <div class='top-bar'>
          <span style="font-family: roadway;">&euro;<?php echo $row["prijs"]?></span>
					<?php if ($row["stock"] > 0){ ?>
          <span style=" color:#06CB21;" class='float-right lnr lnr-checkmark-circle'></span>
				<?php } else {?>
					<span style=" color:red;" class='float-right lnr lnr-cross-circle'></span>
				<?php } ?>
        </div>
	        <div class='img'><img src='images/<?php echo $row["product_id"]?>.jpg'></div>
      </div>
      <div class='card-description'>
      <div class='title'><?php echo $row["naam"]?></div>
      <div class='cart'>
      <a href="server/addtocart.php?id=<?php echo $row["product_id"]?>"><span style="color:#4285f4;" class="lnr lnr-cart"></span></a>
      </div>
			</div>
      <div class='card-footer'>
				<?php
				$str = $row["footer"];
				$footer = explode( ',', $str )
				?>
      <div style="font-family: roadway;" class='span'><?php echo $footer[0]?></div>
      <div style="font-family: roadway;" class='span'><?php echo $footer[1]?></div>
      <div style="font-family: roadway;" class='span'><?php echo $footer[2]?></div>
      </div>
    </div>
	<?php } ?>
  </div>
</div>
<div class="footer">
  <div class="contain">
  <div class="col">
    <h1>Onderdelen</h1>
    <ul>
      <li>Iphone 5</li>
      <li>Iphone 5s</li>
      <li>Iphone 5c</li>
      <li>Iphone 6</li>
      <li>Iphone 6 plus</li>
			<li>Iphone 6s</li>
			<li>Iphone 6s plus</li>
			<li>Iphone 7</li>
			<li>Iphone 7 plus</li>
    </ul>
  </div>
  <div class="col">
    <h1>Snelle Links</h1>
    <ul>
      <li>Home</li>
      <li>Winkelwagen</li>
      <li>Review</li>
    </ul>
  </div>
  <div class="col">
    <h1>Account</h1>
    <ul>
      <li>Login</li>
      <li>Register</li>
      <li>Wachtwoord Vergeten</li>
    </ul>
  </div>
  <div class="col">
    <h1>Klantenservice</h1>
    <ul>
      <li>Contact</li>
      <li>Verzending en retour</li>
      <li>Algemene Voorwaarden</li>
      <li>Betalingen</li>
      <li>Veelgestelde vragen</li>
    </ul>
  </div>
  <div class="col social">
    <h1>Social</h1>
    <ul>
      <li><img src="https://svgshare.com/i/5fq.svg" width="32" style="width: 32px;"></li>
      <li><img src="https://svgshare.com/i/5eA.svg" width="32" style="width: 32px;"></li>
      <li><img src="https://svgshare.com/i/5f_.svg" width="32" style="width: 32px;"></li>
    </ul>
  </div>
<div class="clearfix"></div>
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
