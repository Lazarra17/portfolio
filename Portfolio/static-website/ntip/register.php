<?php
  session_start();

  if (isset($_SESSION["accesscode"])){
 if ($_SESSION["accesscode"] == "newtaytayiceplantcustomer" || $_SESSION["accesscode"] == "newtaytayiceplantemployee" 
    || $_SESSION["accesscode"] == "newtaytayiceplant1" || $_SESSION["accesscode"] == "newtaytayiceplant3"
    || $_SESSION["accesscode"] == "newtaytayiceplant11" || $_SESSION["accesscode"] == "newtaytayiceplant33"
    || $_SESSION["accesscode"] == "newtaytayiceplant4"   ){
    header("Location:index.php");
    }
    else if ($_SESSION["accesscode"] == "newtaytayiceplant2" || $_SESSION["accesscode"] == "newtaytayiceplant22"){
        
 
       ?>
 
       
    <?php 
        
        
  include 'php/db/connect.php';
  include 'php/function.php';
   $error = "";
   $erroruser = "";
  if(isset($_POST['submit'])){
   

    $username = data_secure($_POST['username']);
    $fname    = data_secure($_POST['fname']);
    $lname    = data_secure($_POST['lname']);
    $email    = data_secure($_POST['email']);
    $gender   = data_secure($_POST['gender']);
    $pass     = data_crypt($_POST['password']);
    $pass2    = data_crypt($_POST['repassword']);
    $address  = data_secure($_POST['address']);
    $contact  = data_secure($_POST['contact']);
    
    
    
      
        $emailcustomer = emailcheckCustomer($email);
        $emailemployee = emailcheckEmployee($email); 
        $usernamecustomer = usernamecheckCustomer($username); 
        $usernameemployee = usernamecheckEmployee($username); 
        $usernameadmin = usernamecheckAdmin($username); 
  
      

    if(!empty($username) && !empty($pass) && !empty($pass2) && !empty($address) && !empty($contact) && !empty($fname)&& !empty($lname)&& !empty($email)&& !empty($gender)){
      if(strlen($username) < "5"){
        echo "<script> alert('Username must atleast have 5 characters'); </script>";
      }elseif(strlen($pass) < "8"){
        echo "<script> alert('Password must atleast have 8 characters'); </script>";
      }elseif($pass != $pass2){
        echo "<script> alert('Password do not match'); </script>";
      }elseif(!is_numeric($contact)){
        echo "<script> alert('Invalid Contact number'); </script>";
      }
      elseif((preg_match('/\s/',$username) == 1)) {
       echo "<script> alert('Username must not have space'); </script>";
      }
      elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
       echo "<script> alert('Invalid email'); </script>";
      }

        else if ($usernamecustomer != null || $usernameemployee != null || $usernameadmin != null){
        echo "<script> alert('Username already exist'); </script>";
             $erroruser = "- Username aleary exist";
        }
        
       else if ($emailemployee != null || $emailcustomer != null ){
        echo "<script> alert('Email already exist'); </script>";
             $error = "- Email aleary exist";
        }
        
       
        
        
      else{
        addCustomer($username, $fname,$lname,$email,$gender, $pass, $address, $contact);
        if (isset($_GET["authentication"])){
          	echo "<script> alert('You have successfully register. please log in to continue');window.location = 'login.php?authentication=true'; </script>";

        }else{
             	echo "<script> alert('You have successfully register. please log in to continue');window.location = 'login.php'; </script>";
        }
      }
    }
  }


?>
<html>
<head>
	<title>Register</title>
	<link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>
	<!-- <link type="text/css" rel="stylesheet" href="css/mystyle.css"> -->
  <link type="text/css" rel="stylesheet" href="css/forms.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
  <link type="text/css" rel="stylesheet" href="css/sidebar.css">
   <link rel="icon" href="img/snowflake.png" type="image/png" />   
</head>
<body onload="">
<?php include 'php/header.php';
include 'php/sidebar.php';?>

  
	
	<div class="container register z-depth-2" style="height:1200px;margin-left:23%;margin-top: 20px;">
    <form action= "#" method="post" class="col s12">
      <div class="register-title"> 
        <h5 class="center-align">Register - Customer</h5>
      </div>
      <div class="row" style="padding-top: 15px;">
        <form class="col s12">
          <div class="row">
          
           <div class="input-field col s6">
                <i class="small mdi-social-person prefix black-text"></i>
                <input id="username" type="text" class="validate" name="fname"  require required maxlength="30" value= "<?php if(isset($_POST['submit'])){ echo $_POST['fname'];}; ?>" >
                <label for="First Name">First Name</label>
            </div>
             <div class="input-field col s6">
                <i class="small mdi-social-person prefix black-text"></i>
                <input id="username" type="text" class="validate" name="lname"  require required maxlength="30" value= "<?php if(isset($_POST['submit'])){ echo $_POST['lname'];}; ?>" >
                <label for="Last Name">Last Name</label>
            </div>
          
             <div class="input-field col s6">
              <i class="small mdi-social-person prefix black-text"></i>
                <input id="name" type="text" class="validate" name="username" require required maxlength="30" value="<?php if(isset($_POST['submit'])){ echo $_POST['username'];}; ?>">
                <label for="Username">Username <span style="color: red;"><?php if(isset($_POST['submit'])){ echo $erroruser;}; ?></span></label>
            </div>
          
            <div class="input-field col s6">
                <i class="small mdi-social-person prefix black-text"></i>
                <input id="username" type="text" class="validate" name="email"  require required maxlength="30" value= "<?php if(isset($_POST['submit'])){ echo $_POST['email'];}; ?>" >
                <label for="Email">Email <span style="color: red;"><?php if(isset($_POST['submit'])){ echo $error;}; ?></span></label>
            </div>
         
            <div class="input-field col s6">
                <i class="small mdi-communication-vpn-key prefix black-text" ></i>
                <input id="password" type="password" class="validate" name="password" require required maxlength="30" value="">
                <label for="password">Password</label>
            </div>
            
            
            <div class="input-field col s6">
                <input id="repassword" type="password" class="validate" name="repassword" require required maxlength="30" value="">
                <label for="repassword">Re-enter Password</label>
            </div>
            
              <label class="black-text ">* Shipping Address Available</label>
            <select class="browser-default black-text" name="shipaddress" require required>            
              <option value="" disabled selected>Select Position</option>
              <option id="1" value="Taytay Rizal" >Taytay Rizal</option>
              <option id="2" value="Pasig City" >Pasig City</option>
              <option id="3" value="Marikina City">Marikina City</option>
            </select>
            
            
            <div class="input-field col s12">
                <i class="mdi-maps-store-mall-directory prefix black-text" ></i>
                <input id="peraddress" onchange="showmap()"  type="text" class="validate" name="address" require required maxlength="50" value="<?php if(isset($_POST['submit'])){ echo $_POST['address'];}; ?>">
                <label for="address">Complete Address</label>
            </div>
             <div class="input-field col s6 center" style="margin-top: 1%;">
                <i style="color: black;">* Gender</i>
                <input type="radio" class="filled-in" id="male" name="gender" value="Male" <?php if(isset($_POST['submit'])){ if ($_POST['gender'] == "Male"){echo "checked";}}; ?>>
                <label for="male">Male</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="radio" class="filled-in" id="female" name="gender" value="Female" <?php if(isset($_POST['submit'])){ if ($_POST['gender'] == "Female"){echo "checked";}}; ?>>
                <label for="female">Female</label>
            </div><br /><br />
             <div class="input-field col s6">
                <i class="small mdi-social-person prefix black-text"></i>
                <input id="contact" type="text" class="validate" name="contact"  require required maxlength="30" value ="<?php if(isset($_POST['submit'])){ echo $_POST['contact'];}; ?>" >
                <label for="Contact">Contact</label>
            </div>
          </div>
          <button class="medium btn waves-effect waves-light blue darken-3 right" type="submit" name="submit" style="margin-right: 25px;">
            Submit 
          <i class="mdi-content-send right"></i>
          </button>
<p style="color: black;" id="demo"></p>      
    
      </div>
      
    </form>
    <h5 style="color: black ;">Map</h5> <span style="color: black;">(Note: To use the map please input the customers' address)</span>
    <iframe id="map"
  width="760"
  height="450"
  frameborder="0" style="border:0"
  src="" allowfullscreen>
</iframe>
  </div>
  
  
<script>
function showmap(){
    var address = document.getElementById("peraddress").value;
   
    document.getElementById("map").src = "https://www.google.com/maps/embed/v1/place?key=AIzaSyCHaDcDOh4CbOm34e_rOa0w-Ve7kDe7m8s&q="+ address;
    
}

</script>
	<script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
  <script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>
<?php } }
else{

?>


      <script>alert("If you wish to make an account\nPlease Call 09193156802\nor TEXT w/\n(Full name, Address, Gender, Email, Username and Contact)\n\nand we will make an account for you");
       window.location = "index.php";
       
       </script>




<?php }?>