<?php
	/*PHP Functions*/

	$host = 'localhost';
	$user 	= 'root';
	$pass	= '';
	$db		= 'Lazarra17';
	$conn = mysqli_connect($host, $user, $pass, $db);

function data_security($data){
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

function data_crypt($data){
	$data = data_security(crypt($data,"alright"));
	return $data;
}

function addNewAdmin($admin_type,$username,$password){
	global $conn;
	$today = gmdate("Y/m/d");	
	$sql = "INSERT INTO admin (admin_type, username, password, date_created) VALUES ('$admin_type ', '$username', '$password', '$today')";
	if ($run = mysqli_query($conn,$sql)){
	//$message = "New Admin has been successfully created!";	
		
		function message(){
			return "New Admin has been successfully created!";
		}
		
	}else{
		echo $message = "Error ";
	}
}


?>