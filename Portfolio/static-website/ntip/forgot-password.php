<?php
  session_start();

if (isset($_SESSION["accesscode"])){
  

  
 if ($_SESSION["accesscode"] == "newtaytayiceplantcustomer" || $_SESSION["accesscode"] == "newtaytayiceplantemployee" 
    || $_SESSION["accesscode"] == "newtaytayiceplant1" || $_SESSION["accesscode"] == "newtaytayiceplant2" || $_SESSION["accesscode"] == "newtaytayiceplant3"
    || $_SESSION["accesscode"] == "newtaytayiceplant11" || $_SESSION["accesscode"] == "newtaytayiceplant22" || $_SESSION["accesscode"] == "newtaytayiceplant33"  
    || $_SESSION["accesscode"] == "newtaytayiceplant4"   ){
    header("Location:index.php");
    }}
    else{
        
  include 'php/db/connect.php';
  include 'php/function.php';



  if(isset($_POST['submit'])){
        $emailrecover = data_secure($_POST["emailrecover"]);
        
        $emailemployee = emailcheckEmployee($emailrecover); 
        $emailcustomer = emailcheckCustomer($emailrecover);
       
       if ($emailemployee != null){
       $username =  selectUsernameEmp("username",$emailemployee);
       }
       
       if ($emailcustomer != null){
        $username =  selectUsernameCust("username",$emailcustomer);
       }
                  
     if(!filter_var($emailrecover, FILTER_VALIDATE_EMAIL)) {
       echo "<script> alert('Invalid email'); </script>";
      }
            
       else if ($emailcustomer == null && $emailemployee == null){
         echo "<script> alert('You are not a member.  Please Sign Up first.');window.location = 'register.php'; </script>";
      }
      
      else{

          $emailrecover = data_secure($_POST['emailrecover']);
          $code = explode("@",$emailrecover);
          $code = data_crypt($code[0]);
          
            passwordRecover($emailrecover,$code,$username);
            
      }
    
  
  
}

  if(isset($_POST['changePassword'])){
        $emailrecover = $_GET["emailrecover"];
        $password = data_crypt(data_secure($_POST["password"]));
        $passwordconfirm = data_crypt(data_secure($_POST["confirmpassword"]));
            
            if ($password != $passwordconfirm){
              $error = "<script>alert('Your password and confirm password are not match');</script>";                
            }else{
                
                  $emailcustomer = emailcheckCustomer($emailrecover);
                  $emailemployee = emailcheckEmployee($emailrecover); 
                   
                  if ($emailcustomer != null){ 
                     passwordRecoverChangePasswordCustomer($password,$emailcustomer);
                  }
                  else if ($emailemployee != null){
                    
                    passwordRecoverChangePasswordEmployee($password,$emailemployee);
                    
                  }else{
                    $error = "<script>alert('Email not found');</script>";
                  }
             
             
            }
            
  
  
}




?>
<html>
<head>
	<title>Forgot Password</title>
	<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
	<!-- <link type="text/css" rel="stylesheet" href="css/mystyle.css"> -->
  <link type="text/css" rel="stylesheet" href="css/forms.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
   <link rel="icon" href="img/snowflake.png" type="image/png" />
</head>
<body>
<div class="navbar-fixed">
    <?php if(loggedin()){
      echo "<nav class='white'>";
      }else{
        echo "<nav class='blue darken-4'>";
        } ?>
      <div class="nav-wrapper">
        <ul style="padding-left: 5px; padding-right: 20px;">
          <li><img src="img/snowflake-icon.png" style="margin-top: 10px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
          <li><a href="index.php" >Home</a></li>
          <?php
        include "php/header.php";
          ?>
        </ul>
      </div>
    </nav>
  </div>
	
	<div class="container login z-depth-2">

    <?php 
    if (isset($_GET["forgotpassword"])){
     ?>     
    <form action= "#" method="post" class="col s12"> 
      <div class="login-title"> 
        <h5 class="center-align">Password Recovery 
      </div>
 
      <div class="row" style="padding-top: 15px;">
        <form class="col s12">
          <div class="row">
            <div class="input-field col s12">
                <i class="small mdi-social-person prefix black-text"></i>
                <input id="username" type="text" class="validate" name="emailrecover"  require required maxlength="50" value= "">
                <label for="username">Enter Your Email Address</label>
            </div>
          </div>

          <button class="medium btn waves-effect waves-light blue darken-3 right" type="submit" name="submit" style="margin-right: 25px;">
            Submit 
          <i class="mdi-content-send right"></i>
          </button>
          
      </div>    
    </form>
    <?php }elseif ($_GET["emailrecover"] != "" && $_GET["code"] != ""){
       $emailget = data_secure($_GET["emailrecover"]);
       $code = data_secure($_GET["code"]);
       $emailcode = explode("@",$emailget);
       $emailcode = data_crypt($emailcode[0]);
       $emailrecover = $_GET["emailrecover"];
      if ($code == $emailcode){ 
  
        
        
     ?>     
    <form action= "#" method="post" class="col s12"> 
      <div class="login-title"> 
        <h5 class="center-align">Password Recovery <?php //echo  emailcheckCustomer($emailrecover);echo emailcheckEmployee($emailrecover); ?>
      </div>
 
      <div class="row" style="padding-top: 15px;"> 
        <form class="col s12">
          <div class="row">
            <div class="input-field col s12">
                <i class="small mdi-communication-vpn-key prefix black-text" ></i>
                <input id="password" type="password" class="validate" name="password" require required maxlength="50" value="">
               <label for="password">New Password</label>
          </div>
          <?php echo $error; ?>
          <div class="input-field col s12">
                <i class="small mdi-communication-vpn-key prefix black-text" ></i>
                <input id="password" type="password" class="validate" name="confirmpassword" require required maxlength="50" value="">
               <label for="password">Confirm Password</label>

          </div>
          
          
          </div>

          <button class="medium btn waves-effect waves-light blue darken-3 right" type="submit" name="changePassword" style="margin-right: 25px;">
            Reset Password 
          <i class="mdi-content-send right"></i>
          </button>
          
      </div>    
    </form>
    <?php }else{header("Location: login.php");}
    }else{header("Location: login.php");} ?>
  
  
  </div>

	<script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
  <script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>
<?php } ?>
