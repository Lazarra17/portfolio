<?php
include "../inclusion/conn/conn.php";
include "../inclusion/function.php";

$page = "control-center";



?>


<!Doctype html>
<html>
   <!--Head,Meta and Title tags-->
    <head>
    	<title>Lazarra17 Control Center</title>
    	<?php include "../inclusion/header.php";?>
    </head>
    <body>
        <!--Navigation-->
        <div class="bg-black">
        <?php include "../inclusion/navigation-control.php"; ?>
        <!--Welcome Banner-->
		</div>
        <div class="container" ng-app="myApp" ng-controller="myCtrl">
            <div class="row">
            	<br><br>  
            </div>
        </div>

        <!--Footer Links-->
        <?php 
			include "../inclusion/footer.php";
		?>
        
    </body>
</html>