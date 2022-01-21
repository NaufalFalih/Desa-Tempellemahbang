<?php
$host     = "localhost";
$user     = "root";
$password = " ";
$database = "db_tempellemahbang";

$hari_ini = date("Y-m-d");

$connect = new mysqli("localhost", "root", "", "db_tempellemahbang");

if (mysqli_connect_errno($connect)) {
   //this for show failed

   echo "Failed to connect to MySQL: " . mysqli_connect_error();

}
?>
