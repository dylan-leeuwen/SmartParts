<?php

include '../connect.php';
session_start();
//$stack = $_SESSION['producten'];
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
  <title>SmartParts</title>
    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="nav">
    <div class="midden">
        <a href="../"><img src="../images/logo.png" width="200px"></a>
        <div class="icons">
            <span class="lnr lnr-checkmark-circle"></span>
            <p>Shopping Cart</p>
            <hr>
            <span class="lnr lnr-checkmark-circle"></span>
            <p>Checkout</p>
            <hr style="border: 0.6px solid grey;">
            <span style="color: grey;" class="lnr lnr-cross-circle"></span>
            <p style="color: grey;">Finish</p>
        </div>
    </div>
</div>
<div class="checkout">
<div style="display: inline-block; float: left" class="details">
    <p class="title" style="padding-top: 75px;">UW GEGEVENS</p>
    <form>
        <p style="margin-top: 35px;">Voornaam</p>
        <input type="text"></input>
        <p>Achternaam</p>
        <input type="text"></input>
        <p>Email</p>
        <input type="text"></input>
        <p>Adress</p>
        <input type="text"></input>
        <p>Postcode</p>
        <input type="text"></input>
        <p>Plaats</p>
        <input type="text"></input>
        <p  class="title" style="padding-top: 45px;">BETAAL METODE</p>
        <div class="method">
            <input value="ideal" name="paymentmethode" type="radio">
            <img style="display: inline-block; width: 140px; top: 10px; position: relative" src="../images/ideal.gif">
        </div>
        <div class="method">
            <input value="ideal" name="paymentmethode" type="radio" style="position: relative; top: -18px;">
            <img style="display: inline-block; width: 140px; top: 10px; position: relative" src="../images/paypal.png">
        </div>
</div>
    <div style="display: inline-block" class="bdetails">
        <p class="bp" style="margin-top: 75px; margin-left: 10%">BESTELING DETAILS</p>
        <div style="margin-top: 60px;" class="witvlak">
            <p style="margin-left: 25px; top: 20px; position: relative;"><b><span class="lnr lnr-cart"></span>Winkelmandje</b></p>
						<?php
                        $subprijs= 0;
                        if(isset($_SESSION['producten'])){
                            $stack = $_SESSION['producten'];
                            foreach ($stack as $stacks) {
                                $sql = "SELECT * FROM producten WHERE product_id = $stacks";
                                $result = $conn->query($sql);
                                $row = $result->fetch_assoc();
						$prijs = $row["prijs"];
						$subprijs = $subprijs + $prijs;
						if ($subprijs > 25) {$verzendkosten = 0;} else {$verzendkosten = 2.99;};
						?>
            <div>
                <p style="display: inline-block;margin-left: 25px; font-size: 17px; margin-top: 30px;"><b><?php echo $row["naam"]?></b></p>
                <p style="font-family: Roboto;display: inline-block; font-size: 15px; float: right; right: 20px; position: relative; top: 35px"><b>&euro;<?php echo $row["prijs"]." "?></b><a style="color: red; text-decoration: none;" href="#"><span class="lnr lnr-cross-circle"></span></a></p>
                <p style="margin-left: 25px; font-size: 15px; margin-top: -15px; max-width: 55%;"><?php echo $row["omschrijving"]?></p>
                <hr width="90%;" style=" border: 1px solid #f1f1f1;">
            </div>
						<?php
					}} else {?><p style="margin-top: 50px; padding-bottom: 20px; margin-left: 0px; text-align: center">Uw winkelwagen is leeg</p><?php }
							?>
            <p style="font-family: Roboto;display: inline-block; font-size: 15px; text-align: right; width: 70%; position: relative;"><b>Verzendkosten: &euro;<?php echo $verzendkosten ?></b></p>
            <p style="font-family: Roboto;display: inline-block; font-size: 15px; text-align: right; width: 70%; position: relative;"><b>Sub Totaal: &euro;<?php echo $subprijs + $verzendkosten?></b></p>
        </div>
        <div>
        <input class="pay" style="float: right; position: relative; right: 15%; top: 30px;" type="submit" value="Betaal nu">
        </form>
            <form action="../">
        <input class="cancel" style="float: right; position: relative; right: 15%; margin-right: 30px; top: 30px;" type="submit" value="Annuleer">
        </div>
        </form>
        </div>
    </div>
</div>
</body>
</html>
