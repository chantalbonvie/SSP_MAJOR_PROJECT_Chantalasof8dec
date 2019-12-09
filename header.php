<?php
require_once("conn.php");
?>

<title>Posting Den</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
  integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">


<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Amatic+SC">
<link href="https://fonts.googleapis.com/css?family=PT+Serif&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Amatic+SC">

<link href="/css/styles.css" rel="stylesheet" type="text/css">

<body >
<!-- the Navbar will have some of the photo behind it -->
<div class="navbar">
  <div class="w3-top w3-collapse-medium-small">
    <div class="w3-xlarge w3-black w3-opacity w3-hover-opacity-off">
      <a href="/index.php" class="w3-bar-item w3-button" id="home">HOME</a>
      <a href="/signup.php" class="w3-bar-item w3-button">Become a Member ~ Sign UP</a>
      <a href="index.php" class="w3-bar-item w3-button">Member ~ Sign In</a>
      <a href="#our_stamps" class="w3-bar-item w3-button">Browse Our Collection</a>
      <a href="#sundayauction" class="w3-bar-item w3-button">Sunday Auction</a>
      <a href="#newsletter" class="w3-bar-item w3-button">Our News</a>
      <a href="#contactinfo" class="w3-bar-item w3-button">Contact Us</a>
      <a href="checkout" class='w3-bar-itme w3-button' id="paypal">Checkout with
      <img src="/images/paypallogo.png" alt="PayPal" id="paypal"><a>
    </div>
  </div>
</div>
<!-- Header with image -->
<header class="bgimg w3-display-container w3-grayscale-min">
<div class="col-12">
  <div class="row">
    <div class="col-6">
      <div id="title">
        <p>The Posting Den</p>
      </div>
    </div>
    <div class="col-6">
      <p class="world">Collecting stamps from around the world</p>
    </div>
  </div>
</div>

</header>
<?php



// change when small screen


