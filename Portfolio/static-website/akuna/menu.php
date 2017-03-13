<?php
include "php/conn.php";
include "php/functions.php";

if (isset($_SESSION["email"])){
$sEmail = $_SESSION["email"];
}



?>


<!DOCTYPE html>
<html>
<head>
	<title>Akuna Philippines</title>
    <?php include "php/header.php";?>
    <style>
    p.footer-links a{
        color:cornflowerblue;
        text-align:center;
    }
    
    </style>
</head>
<body>
<div id="container" class="clearfx" >

<?php 

if (isset($_POST["submitform"])){
$email = data_secure($_POST["email"]);
$password = data_secure(data_encrypt($_POST["password"]));

if (checkLog($email,$password)){      
}
elseif (checkLogAdmin($email,$password)){    
}else{
   
}





}




?>



<p class="response"><?php if(isset($_GET["registered"])){echo "You have successfully registered";}?></p>
    <header class="header">
       <a href="index.php"><img src="images/akuna-logo.gif" /></a>
   
    
<?php if (loggedin()){

    
    ?>
    
    <p class="loggedin">Welcome <?php echo userData($sEmail,'first_name'); 
    ?><br />&raquo;<a style="color:cornflowerblue" href="php/logout.php">Log out</a></p>
    
    <?php
}elseif (loggedinAdmin()){
    ?>
    
      <p class="loggedin">Welcome <?php echo userDataAdmin($sEmail,'first_name'); 
    ?><br />&raquo;<a style="color:cornflowerblue" href="php/logout.php">Log out</a></p>
    
    <?php
}
else{
    

include "php/login-form.php";

}
?>
   
    </header>
    
    
    
    <div id="first-col">
    <img src="images/product.jpg" />
    <img src="images/akunashop.gif" />
    <h4 class="welcome">Welcome to Akuna Shop!</h4>
    <p class="description">
    In order to make a purchase at the Akuna Shop, you will be required to provide the email 
    address or Akuna registration number of your sponsor/the person who referred you to Akuna. If you do not 
    have this information, we ask that you fill out our Contact Form and we will contact you by the next business day.
    <br /><br />
    If you are a returning online customer, please fill in your login information and proceed to shop.
     If you are new to the Akuna Shop, we ask that you first set up an Akuna Shop account.
    </p>
</div>
<div id="second-col">

<?php include "php/menu.php";?>

<h4 class="sponsor">Don't have a sponsor?</h4>
<p class="description">
If you do not know or have the email address of your sponsor/ the person who referred you to Akuna, please fill in our
 Contact Form and we will contact your by the next business day.
</p>

</div>


</div>
<footer>
<center>
<p class="footer-links"><a href="#">About us </a> |<a href="#"> Terms and conditions</a> | <a href="#">Privacy Policy </a>|<a href="#"> Contact Us</a></p>
<p class="footer-copyright">&copy; <?php echo date('Y');?> Nicoyah17 All Rights Reserved</p>
</center>
</footer>

  <script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
  <script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>
