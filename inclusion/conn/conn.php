<?php 
session_start();

$host = "localhost";
$user = "root";
$pass = "";
$db = "Lazarra17";

$connect = mysqli_connect($host,$user,$pass) or die(mysqli_connect_error());
		   mysqli_select_db($connect,$db) or die("Cannot connect to Database");

date_default_timezone_set("Asia/Taipei");

?>