<?php
require_once("conn.php");
?>

<!doctype html>
<html lang="en":>
<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">


    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <link href="/styles.css" rel="stylesheet" type="text/css">

    <link href="https://fonts.googleapis.com/css?family=PT+Serif&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Amatic+SC"> 
 <script src="https://kit.fontawesome.com/8751f449d0.js" crossorigin="anonymous"></script>


<title>Posting Den</title>

<!-- Start Style for my header delete after getting scss sheet-->
<style>
.headernavbar {
  text: white;
  left: 0;
  top: 0;
  padding-top: 10px;
  padding-left: 5px;
  width: 100%;
  background-color: #474948;
  font-size: 15px;
}

a{
  color: black;
}


</style>
<!-- End Style for my header delete after getting scss sheet-->


<section class="headernavbar">

  <nav class="navbar navbar-expand-sm bg-light navbar-light">
  <div class="collapse navbar-collapse my-2" id="navbarSupportedContent">
    <ul class="navbar-nav mr-0 mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="http://<?php echo $_SERVER['SERVER_NAME']; ?>">Home </a>
      </li>
      
<?php
if(isset($_SESSION["user_id"]) ): //this line checks if user is logged in
?>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Account</a>

    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="/profile.php">My Profile</a>
  <div class="w3-bar w3-xlarge w3-black w3-opacity w3-hover-opacity-off" id="myNavbar">
    <a href="#" class="w3-bar-item w3-button">HOME</a>
    <a href="#signup" class="w3-bar-item w3-button">Become a Member ~ Sign UP</a>
    <a href="#signin" class="w3-bar-item w3-button">Members ~ Sign In</a>
    <a href="#browse" class="w3-bar-item w3-button">Browse Our Collection</a>
    <a href="#sundayauction" class="w3-bar-item w3-button">Sunday Auction</a>
    <a href="#newsletter" class="w3-bar-item w3-button">Our Newsletter</a>
    <a href="#contactinfo" class="w3-bar-item w3-button">Contact Us</a>
  </div>
</div>


        <a class="dropdown-item" href="#">Browse</a>

      <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="/actions/login.php?action=logout">Logout</a>
    </div>

        </li>

<?php
  else: //if user is not logged in this will hapeen
?>
        <li calss="nav-item">
            <a href="/index.php">Login</a>
        </li>
        <li calss="nav-item">
            <a href="/signup.php">Sign-up</a>
        </li>

<?php
endif;
?>

      </ul>

    </div>
  </nav>
</section>
</head>
</body>

