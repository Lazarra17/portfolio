<?php
 ini_set('session.save_path', 'tmp'); 
  session_start();
  include_once 'php/db/connect.php';
  include 'php/function.php';
  
  
    if (isset($_GET["Successfully-Bought"])){
        echo "<script>alert('Thank you for buying from us.  Please check your email for the control number.');window.location = 'index.php';</script>";
        
    }



?>
<html>
<head>
	<title>Home</title>
	<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
	<!-- <link type="text/css" rel="stylesheet" href="css/mystyle.css"> -->
  <link type="text/css" rel="stylesheet" href="css/forms.css">
  <link rel="icon" href="img/snowflake.png" type="image/png" />
   
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
</head>
<body>
<?php include 'php/header.php';?>
  
      
        
  <div style="">
    <?php
     $customer_idd = "";
     $employee_idd="";
     $_SESSION["nodb"] = "nodb";
           
    if (isset($_SESSION["customer_id"])){
        $customer_idd = data_secure($_SESSION["customer_id"]);
    }
        
    if (isset($_SESSION["emp_id_no"])){
        $employee_idd =  data_secure($_SESSION["emp_id_no"]);
    }  
    
    
    
      if(loggedin()){
         if(userData('department') == 'Human Resource'){
          include 'human-resource.php';
        }elseif(userData('department') == 'Marketing'){
          include 'marketing.php';
        }elseif (userData('department') == 'Production'){
          include 'production.php';
        }elseif (userData('department') == 'superadmin'){
          include 'production.php';
        }
      }else if(loggedin3()){
         if (userData4("emp_id_no") == $employee_idd){
         include "employee.php";
         
        // echo "<script>alert('sdfsadfsd');</script>";
        }    
      }
      else if(loggedin2()){
         if (userData2("customer_id") == $customer_idd){
         include "customer.php";
        // echo "<script>alert('sdfsadfsd');</script>";
        } 
      }
      else{
    
       if (userData3("customer_id") == $customer_idd){
         include "customer.php";
        }          
      
         else if($customer_idd == "" || $employee_idd =""){ 
         echo "   <link type='text/css' rel='stylesheet' href='css/js-image-slider.css'>
         <script src='js/js-image-slider.js' type='text/javascript'></script>  ";  
         include "php/slideshow.php";  
         include "php/order.php";
        }   
      }
      
      
      
      
 if (isset($_SESSION["email"])){
    data_secure($_SESSION["email"]);
    
 }                                 
    ?>
  </div>

	<script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
  <script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>