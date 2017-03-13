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


<?php if (isset($_POST["submit"])){
    
    $error = "";
    $zError = "";
    $cError = "";
    $pError = "";
    
    $fName = data_secure($_POST["fName"]);
    $lName = data_secure($_POST["lName"]);
    $contact = data_secure($_POST["contact"]);
    $sAddress = data_secure($_POST["sAddress"]);
    $pAddress = data_secure($_POST["pAddress"]);  
    $zCode = data_secure($_POST["zCode"]);
    $gender = data_secure($_POST["gender"]);
    
    
    if(!is_numeric($contact)){
        $cError = "Invalid contact number";
      }
     
      elseif(!is_numeric($zCode)){
      
     $zError = "Invalid zip code";
      }
     
    
    
      /**
       else if ($emailadmin != null || $emailcustomer != null ){
        echo "<script> alert('Email already exist'); </script>";
             $error = "- Email aleary exist";
       }
        */

      else{
        
        updateAccount($fName,$lName,$gender,$contact,$sAddress,$pAddress,$zCode,$sEmail);
       
     
          	
   
      }
    
   

    }
?>




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
    
    
    
 <div class="register">
<div class="top-menu">
<a href="menu.php">Menu</a>
</div><br />
<form action= "" method="post" class="col s12">
      <div class="register-title"> 
        
        <?php /*?><h5 class="center-align">Sign Up</h5><?php */?>
     
      </div>
      <div class="row" style="padding-top: 15px;">
       
          <div class="row">
          
          
           <div class="input-field col s6">
                <i class="small mdi-social-person prefix black-text"></i>
                <input id="username" type="text" class="validate" name="fName"  require required maxlength="255" value= "<?php echo userData($sEmail,"first_name"); ?>" >
                <label for="First Name">First Name</label>
            </div>
             <div class="input-field col s6">
                <i class="small mdi-social-person prefix black-text"></i>
                <input id="username" type="text" class="validate" name="lName"  require required maxlength="255" value= "<?php echo userData($sEmail,"last_name"); ?>" >
                <label for="Last Name">Last Name</label>
            </div>
          
              <div class="input-field col s6">
                <i class="small mdi-communication-email prefix black-text"></i>
                <input id="Email" type="text" class="validate" name="email" readonly=""  require required maxlength="255" value= "<?php echo userData($sEmail,"email"); ?>" >
                <label for="Email">Email <span style="color: red;"><?php if(isset($_POST['submit'])){ echo $error;}; ?></span></label>
            </div>
            
             <div class="input-field col s6">
              <i class="small mdi-action-perm-contact-cal prefix black-text"></i>
                <input id="contact" type="text" class="validate" name="contact" require required maxlength="255" value="<?php echo userData($sEmail,"contact"); ?>">
                 <label for="Contact">Contact <span style="color: red;"><?php if(isset($_POST['submit'])){ echo $cError;}; ?></span></label>
            </div>
          
            
            <div class="input-field col s12">
                <i class="mdi-maps-store-mall-directory prefix black-text" ></i>
                <input id="sAddress"  type="text" class="validate" name="sAddress" require required maxlength="255" value="<?php echo userData($sEmail,"shipping_address"); ?>">
                <label for="address">Shipping Address</label>
            </div>
            
             <div class="input-field col s12">
                <i class="mdi-maps-store-mall-directory prefix black-text" ></i>
                <input id="pAddress"  type="text" class="validate" name="pAddress" require required maxlength="255" value="<?php echo userData($sEmail,"permanent_address"); ?>">
                <label for="address">Permanent Address</label>
            </div>
            
            
            
             <div class="input-field col s6 center" style="margin-top: 1%;">
                <i style="color: black;">* Gender</i>
                <input type="radio" class="filled-in" id="male" name="gender" value="Male" <?php if(userData($sEmail,"gender") == "Male"){echo "checked";}; ?>>
                <label for="male">Male</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="radio" class="filled-in" id="female" name="gender" value="Female" <?php if(userData($sEmail,"gender") == "Female"){echo "checked";}; ?>>
                <label for="female">Female</label>
            </div><br /><br />
             <div class="input-field col s6">
                <i class="small mdi-communication-location-on prefix black-text"></i>
                <input id="zCode" type="text" class="validate" name="zCode"  require required maxlength="4" value ="<?php echo userData($sEmail,"zip_code"); ?>" >
                <label for="Zip code">Zip code <span style="color: red;"><?php if(isset($_POST['submit'])){ echo $zError;}; ?></span></label>
            </div>
          </div>
          <button class="medium btn waves-effect waves-light blue darken-3 right" type="submit" name="submit" style="margin-right: 25px;">
            Update 
          <i class="mdi-image-edit right"></i>
          </button>
<p style="color: black;" id="demo"></p>      
    
      </div>
      
    </form>


</div>

</div>
<?php include "php/footer.php";?>

  <script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
  <script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>
