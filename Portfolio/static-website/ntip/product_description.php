<?php
  session_start();
  include 'php/db/connect.php';
  include 'php/function.php';
$type =$product_name= "";


  
    $ip = "";
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
    $ip = $_SERVER['REMOTE_ADDR'];
    }
    

 if (isset($_GET["type"])){    
        $type = data_secure($_GET["type"]);
    }
  if(isset($_GET['register-success'])){
    echo "<script> alert('Successfully Register. Please Log in to Continue'); </script>";
  }


 
 if (isset($_POST["shop"])){
    header("Location: index.php");
 }
 
  $product_no = $_GET["product_no"];
  $summary =  empDataProduct($product_no ,"summary");
  $summary = explode("+",$summary);
  
  
   if (isset($_POST["checkout"])){
    
    
        $prod_no = empDataProduct($product_no ,"product_no");
      $prod_name =  empDataProduct($product_no ,"product_name");
      $prod_picture =  empDataProduct($product_no ,"product_picture");
      $prod_price =  empDataProduct($product_no ,"price");

    
    if (isset($_SESSION["email"])){
        $email = $_SESSION["email"];
    if (checkOrder($prod_no,$ip,$email) == 0){
     
    addToCart($ip,$prod_no,$prod_name,$prod_picture,$prod_price,$email);
  header("Location: my_cart.php");
    }else{
        
   $quantity = checkCart($ip,$prod_no,$email);
   updateCart($ip,$prod_no,$quantity,$email);
    header("Location: my_cart.php");
    }
    
    
    }
   
    else{
        
    if (checkOrder($prod_no,$ip,"guest") == 0){ 
   
   
   addToCart($ip,$prod_no,$prod_name,$prod_picture,$prod_price,"guest");
       header("Location: login.php?authentication=true");
    }else{
        
   $quantity = checkCart($ip,$prod_no,"guest");
   updateCart($ip,$prod_no,$quantity,"guest");
    
 
     header("Location: login.php?authentication=true");
    }        
        
    }
    
    
       
   }
  
 if (isset($_POST["addcart"])){
  
   
      $prod_no = empDataProduct($product_no ,"product_no");
      $prod_name =  empDataProduct($product_no ,"product_name");
      $prod_picture =  empDataProduct($product_no ,"product_picture");
      $prod_price =  empDataProduct($product_no ,"price");

    
    if (isset($_SESSION["email"])){
        $email = $_SESSION["email"];
    if (checkOrder($prod_no,$ip,$email) == 0){
     
    addToCart($ip,$prod_no,$prod_name,$prod_picture,$prod_price,$email);
    }else{
        
   $quantity = checkCart($ip,$prod_no,$email);
   updateCart($ip,$prod_no,$quantity,$email);
  
    }
    }
    else{
         echo "<script>alert('Login is required to use Shopping Cart. ');</script>";
        
        /**
    if (checkOrder($prod_no,$ip,"guest") == 0){ 
   
   addToCart($ip,$prod_no,$prod_name,$prod_picture,$prod_price,"guest");
   
    }else{
        
   $quantity = checkCart($ip,$prod_no,"guest");
   updateCart($ip,$prod_no,$quantity,"guest");
    
 

    }        
      */  
    }
    
    }      
          
          
          
   
 
 
 
?>
<html>
<head>
	<title>Product Description</title>
	<link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>
	<!-- <link type="text/css" rel="stylesheet" href="css/mystyle.css"> -->
  <link type="text/css" rel="stylesheet" href="css/forms.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
  <link type="text/css" rel="stylesheet" href="css/sidebar.css">
  <link type="text/css" rel="stylesheet" href="css/style.css">
   <link rel="icon" href="img/snowflake.png" type="image/png" />
 
 	<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
        <link href="themes/3/js-image-slider.css" rel="stylesheet" type="text/css" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>

  
</head>

<body>
<?php 

include "php/header.php";

     if (isset($_SESSION["emp_id_no"])){
  include 'php/sidebar.php';
  }elseif (isset($_SESSION["customer_id"])){
     include 'php/sidebarcustomer.php';
  }


?>
  
	<div class="container login z-depth-2" style="width:920;height: 510px;margin-top: 40px;<?php   if (isset($_SESSION["email"])){echo "margin-left: 21%";} ?>">
     
      <div class="login-title"> <br />
        <h5 class="left-align"><?php echo empDataProduct($product_no ,"product_name");?> <a href="index.php"><i class="mdi-action-assignment-return left"></i></a></h5>
      </div>
          <div id="sliderFrame" style="float:left;">
        <div id="slider">  
        
            
           
            <img src="<?php echo $prod_no = empDataProduct($product_no ,"sshow1");?>" title="Product" />
            <img src="<?php echo $prod_no = empDataProduct($product_no ,"sshow2");?>" />
            <img src="<?php echo $prod_no = empDataProduct($product_no ,"sshow3");?>"/>
            <img src="<?php echo $prod_no = empDataProduct($product_no ,"sshow4");?>"/>
            
        </div>
        <div style="clear: both;"></div>
        <!--thumbnails-->
  
        <!--clear above float:left elements. It is required if above #slider is styled as float:left. -->
        <div style="clear:both;"></div>
    </div>
    <form action= "#" method="post" class="">
   
   <div class="col s6" style="color:black;">
          
          
        <h6 style="font-weight: bold;text-align: center;">Product Summary</h6>  
        <ul style="margin-left:10px;culumns:2" id="uls">
        
        <?php 
        foreach ($summary as $sum){
            if ($sum == ""){
                
            }else{
            echo " <li style='list-style: circle;margin-left:20px'>$sum</li>";}}
        ?>
       
       
         
        
        </ul>  
     <p style="border-bottom: 1px solid #f1f1f1;width: cover;"></p>   
      <br />
       <h6 style="font-size: 27px;padding: 10px;padding-bottom:30px;">&#8369 <?php echo empDataProduct($product_no,"price")?>.00</h6>
       
         <button class="medium btn waves-effect waves-light green darken-3 left" type="submit" name="addcart" style="padding:0px 20px;">
            ADD TO CART
          <i class="mdi-action-shopping-cart right"></i>
          </button>
   
      
            <button class="medium btn waves-effect waves-light blue darken-3 right" type="submit" name="checkout" style="margin-right: 25px;">
           CHECKOUT
          <i class="mdi-content-send right"></i>
          </button>
          
          
 
          </form>
    
      </div>
      </div>
     

<style>
#uls{
  columns: 2;
  -webkit-columns: 2;
  -moz-columns: 2;
}
</style>
    

	<script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
  <script type="text/javascript" src="js/materialize.min.js"></script>
   <script src="themes/3/js-image-slider.js" type="text/javascript"></script>
</body>
</html>