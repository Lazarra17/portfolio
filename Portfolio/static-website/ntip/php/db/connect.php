<?php
	$host = 'localhost';
	$user 	= 'root';
	$pass	= '';
	$db		= 'ntips';
	$conn = mysql_connect($host, $user, $pass);
	mysql_connect($host, $user, $pass);
	
    mysql_select_db($db, $conn) or die ("<script>alert('No database found!  Please import database.');window.location = 'db-import.php'</script>");	


 date_default_timezone_set("Asia/Taipei");



?>