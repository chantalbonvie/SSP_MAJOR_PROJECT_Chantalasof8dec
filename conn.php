<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if(!isset($_SESSION)) session_start(); //starts a session to pass your session variables


if($_SERVER["SERVER_NAME"] == "dev.denoftechies.online") {
    //production connects to PLESK Databaase
$conn = mysqli_connect("localhost", "posting_den_user", "7_23xcwY", "posting_den");

}else{

    //connects to MAMP
 $conn = mysqli_connect("localhost", "root", "root", "posting_den");

}


if (mysqli_connect_errno($conn) ) {
    echo "failed to connect to MYSQL:" . mysqli_connect_error();
} 

?>