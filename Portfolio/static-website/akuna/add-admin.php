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
    $department = data_secure($_POST["department"]);
    $userlevel = data_secure($_POST["userlevel"]);
    $email = data_secure($_POST["email"]);
    $password = data_secure($_POST["password"]);
    $repassword = data_secure($_POST["repassword"]);  

    
    
    
    if(strlen($password) < 8){
        $pError = "Password must have atleast 8 characters";
      }
      elseif($password != $repassword){
        $pError = "Password did not match";
     
      }
      
      elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
     
       $error = "Verify your email";
      }
      
   
     
    
    
      /**
       else if ($emailadmin != null || $emailcustomer != null ){
        echo "<script> alert('Email already exist'); </script>";
             $error = "- Email aleary exist";
       }
        */

      else{
        $password = data_encrypt($password);
        addAdmin($fName, $lName,$email, $password,$department,$userlevel);
       
     
          	
   
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
          
             <select class="browser-default black-text border" id="department" onchange="" name="department" require required>
              <option value="" disabled selected>Select Department</option>
              <option value="Human Resources" <?php if(isset($_POST['submit'])){ if ($_POST['department'] == "Human Resources"){echo "selected";}}; ?>>Human Resources</option>
              <option value="Marketing" <?php if(isset($_POST['submit'])){ if ($_POST['department'] == "Marketing"){echo "selected";}}; ?>>Marketing</option>
            </select>
            
            
          
          
          
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
                <i class="small mdi-communication-vpn-key prefix black-text" ></i>
                <input id="password" type="password" class="validate" name="password" require required maxlength="255" value="">
                  <label for="Password">Password <span style="color: red;"><?php if(isset($_POST['submit'])){ echo $pError  ;}; ?></span></label>
            </div>
            
            
            <div class="input-field col s6">
            <i class="small mdi-communication-vpn-key prefix black-text" ></i>
                <input id="repassword" type="password" class="validate" name="repassword" require required maxlength="255" value="">
                <label for="repassword">Re-enter Password <span style="color: red;"><?php if(isset($_POST['submit'])){ echo $pError;}; ?></span></label>
            </div>
            
           <select class="browser-default black-text border" id="userlevel" onchange="" name="userlevel" require required>
              <option value="" disabled selected>Select User Level</option>
              <option value="HRADMIN" <?php if(isset($_POST['submit'])){ if ($_POST['userlevel'] == "HRADMIN"){echo "selected";}}; ?>>Human Resources Admin</option>
              <option value="MDADMIN" <?php if(isset($_POST['submit'])){ if ($_POST['userlevel'] == "MDADMIN"){echo "selected";}}; ?>>Marketing Admin</option>
              <option value="HRSADMIN" <?php if(isset($_POST['submit'])){ if ($_POST['userlevel'] == "HRSADMIN"){echo "selected";}}; ?>>Human Resources Super Admin</option>
              <option value="MDSADMIN" <?php if(isset($_POST['submit'])){ if ($_POST['userlevel'] == "MDSADMIN"){echo "selected";}}; ?>>Marketing Super Admin</option>
            
            </select>
            
            
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
