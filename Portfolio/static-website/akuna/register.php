<?php
include "php/conn.php";
include "php/functions.php";



if (isset($_POST["submit"])){
    
    $error = "";
    $zError = "";
    $cError = "";
    $pError = "";
    
    $fName = data_secure($_POST["fName"]);
    $lName = data_secure($_POST["lName"]);
    $email = data_secure($_POST["email"]);
    $password = data_secure($_POST["password"]);
    $repassword = data_secure($_POST["repassword"]);
    $contact = data_secure($_POST["contact"]);
    $sAddress = data_secure($_POST["sAddress"]);
    $pAddress = data_secure($_POST["pAddress"]);  
    $zCode = data_secure($_POST["zCode"]);
    $gender = data_secure($_POST["gender"]);
    
    
    $check = explode("@",$email);
    $checkpass = $check[0];

    
    
    if(strlen($password) < 8){
        $pError = "Password must have atleast 8 characters";
      }
      elseif($password != $repassword){
        $pError = "Password did not match";
     
      }
      
      elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
     
       $error = "Verify your email";
      }
      
      elseif(!is_numeric($contact)){
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
        $password = data_encrypt($password);
        addCustomer($fName, $lName,$gender,$contact,$sAddress,$pAddress, $email, $password, $zCode);
       
     
          	
   
      }
    
   

    }
    





?>

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
<!DOCTYPE html>
<html>
<head>
	<title>San Pedro Hollow Block</title>
    <?php include "php/header.php";?>
</head>
<body>

<div id="container" class="clearfx" >
<header class="header">
<a href="index.php"><img src="images/akuna-logo.gif" /></a>
<div class="form">
<?php if (loggedin()){

    
    ?>
    
    <p class="loggedin">Welcome <?php echo userData($sEmail,'first_name');
    ?><br />&raquo;<a style="color:cornflowerblue" href="php/logout.php">Log out</a></p>
    
    <?php
}else{
    
include "php/login-form.php";

}
?>
</div>
</header>

<div class="register">
<div class="top-menu">
<a href="menu.php">Menu</a>
</div><br />
<form action= "" method="post" class="col s12">
      <div class="register-title"> 
        <h5 class="center-align">Sign Up</h5>
      </div>
      <div class="row" style="padding-top: 15px;">
       
          <div class="row">
          
          
           <div class="input-field col s6">
                <i class="small mdi-social-person prefix black-text"></i>
                <input id="username" type="text" class="validate" name="fName"  require required maxlength="255" value= "<?php if(isset($_POST['submit'])){ echo $_POST['fName'];}; ?>" >
                <label for="First Name">First Name</label>
            </div>
             <div class="input-field col s6">
                <i class="small mdi-social-person prefix black-text"></i>
                <input id="username" type="text" class="validate" name="lName"  require required maxlength="255" value= "<?php if(isset($_POST['submit'])){ echo $_POST['lName'];}; ?>" >
                <label for="Last Name">Last Name</label>
            </div>
          
              <div class="input-field col s6">
                <i class="small mdi-communication-email prefix black-text"></i>
                <input id="Email" type="text" class="validate" name="email"  require required maxlength="255" value= "<?php if(isset($_POST['submit'])){ echo $_POST['email'];}; ?>" >
                <label for="Email">Email <span style="color: red;"><?php if(isset($_POST['submit'])){ echo $error;}; ?></span></label>
            </div>
            
             <div class="input-field col s6">
              <i class="small mdi-action-perm-contact-cal prefix black-text"></i>
                <input id="contact" type="text" class="validate" name="contact" require required maxlength="255" value="<?php if(isset($_POST['submit'])){ echo $_POST['contact'];}; ?>">
                 <label for="Contact">Contact <span style="color: red;"><?php if(isset($_POST['submit'])){ echo $cError;}; ?></span></label>
            </div>
          
            
         
            <div class="input-field col s6">
                <i class="small mdi-communication-vpn-key prefix black-text" ></i>
                <input id="password" type="password" class="validate" name="password" require required maxlength="255" value="">
                  <label for="Password">Password <span style="color: red;"><?php if(isset($_POST['submit'])){ echo $pError  ;}; ?></span></label>
            </div>
            
            
            <div class="input-field col s6">
            <i class="small mdi-communication-vpn-key prefix black-text" ></i>
                <input id="repassword" type="password" class="validate" name="repassword" require required maxlength="255" value="">
                <label for="repassword">Re-enter Password <span style="color: red;"><?php if(isset($_POST['submit'])){ echo $pError;}; ?></span></label>
            </div>
            
              
           
            
            <div class="input-field col s12">
                <i class="mdi-maps-store-mall-directory prefix black-text" ></i>
                <input id="sAddress"  type="text" class="validate" name="sAddress" require required maxlength="255" value="<?php if(isset($_POST['submit'])){ echo $_POST['sAddress'];}; ?>">
                <label for="address">Shipping Address</label>
            </div>
            
             <div class="input-field col s12">
                <i class="mdi-maps-store-mall-directory prefix black-text" ></i>
                <input id="pAddress"  type="text" class="validate" name="pAddress" require required maxlength="255" value="<?php if(isset($_POST['submit'])){ echo $_POST['pAddress'];}; ?>">
                <label for="address">Permanent Address</label>
            </div>
            
            
            
             <div class="input-field col s6 center" style="margin-top: 1%;">
                <i style="color: black;">* Gender</i>
                <input type="radio" class="filled-in" id="male" name="gender" value="Male" <?php if(isset($_POST['submit'])){ if ($_POST['gender'] == "Male"){echo "checked";}}; ?>>
                <label for="male">Male</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="radio" class="filled-in" id="female" name="gender" value="Female" <?php if(isset($_POST['submit'])){ if ($_POST['gender'] == "Female"){echo "checked";}}; ?>>
                <label for="female">Female</label>
            </div><br /><br />
             <div class="input-field col s6">
                <i class="small mdi-communication-location-on prefix black-text"></i>
                <input id="zCode" type="text" class="validate" name="zCode"  require required maxlength="4" value ="<?php if(isset($_POST['submit'])){ echo $_POST['zCode'];}; ?>" >
                <label for="Zip code">Zip code <span style="color: red;"><?php if(isset($_POST['submit'])){ echo $zError;}; ?></span></label>
            </div>
          </div>
          <button class="medium btn waves-effect waves-light blue darken-3 right" type="submit" name="submit" style="margin-right: 25px;">
            Submit 
          <i class="mdi-content-send right"></i>
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
