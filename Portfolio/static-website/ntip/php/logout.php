<?php
session_start();
	include 'db/connect.php';
	include 'function.php';
    
     date_default_timezone_set("Asia/Taipei");        
		$today = date('m-d-Y h:i:sa');
        
   	        	 $todayoryt = $_SESSION["time_in_oryt"];
                 $allactivity = auditSelect("activity",$todayoryt);
                 $activity = "Time logged out: $today";
                 $activity = $allactivity . "+" . $activity;    
                 auditActivity($activity,$todayoryt);
                 
    auditTrailOut();
     

	session_unset();
	session_destroy();
    
    $files = glob('../tmp/*'); // get all file names
foreach($files as $file){ // iterate files
  if(is_file($file))
    unlink($file); // delete file
}

	header("Location: ../login.php");
?>