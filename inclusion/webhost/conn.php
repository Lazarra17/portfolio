<?php 
session_start();

$host = "mysql5.000webhost.com";
$user = "a7717830_all";
$pass = "Nicoyah17";
$db = "a7717830_all";

$connect = mysqli_connect($host,$user,$pass) or die(mysqli_connect_error());
		   mysqli_select_db($connect,$db) or die("Cannot connect to Database");

date_default_timezone_set("Asia/Taipei");

?>