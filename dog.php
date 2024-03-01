<?php

$hostname = "localhost";
$username = "root";
$password = "";
$database = "users";


$connect = new mysqli("$hostname","$username","$password","$database");

if($connect->connect_error) {
     die("$connect->connect_error".$connect->error);
}

//echo "Connect";
?>

