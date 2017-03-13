<?php
  session_start();
  
    if (isset($_SESSION["accesscode"])){
     if (($_SESSION["accesscode"] == "newtaytayiceplantemployee" || $_SESSION["accesscode"] == "newtaytayiceplantcustomer" ) 
            &&($_GET["emp_id_no"] != "" && $_GET["username"] != "")){  
  
 // 
  include 'php/db/connect.php';
  include 'php/function.php';

  $today = gmdate('Y');

  if(isset($_POST['submit'])){
   
    
    $emp_id_no=$_GET["emp_id_no"];
    $username=$_GET["username"];
    $oldpassword   =  data_crypt(data_secure($_POST['oldpassword']));
    $newpassword   =   data_crypt(data_secure($_POST['newpassword']));
    $confirmpassword   = data_crypt(data_secure($_POST['confirmpassword']));     
    
    
    $oldpassDB = empData($emp_id_no,"password");

        if ($oldpassword != $oldpassDB){
            echo "<script>alert('Error: You have entered your wrong old password');</script>";
        }elseif ($newpassword != $confirmpassword){
            echo "<script>alert('Error: New password and confrim password are not matched');</script>";
        }elseif ($oldpassDB == $newpassword){
            echo "<script>alert('Error: Please type a new password!');</script>";
        }
        else{
           
           updatePassword($username,$emp_id_no,$newpassword); 
        }
        
}
  if(isset($_POST['changePasswordCustomer'])){

 $username=$_GET["username"];
 $address = $_GET["name"];
    $oldpassword   =  data_crypt(data_secure($_POST['oldpassword']));
    $newpassword   =   data_crypt(data_secure($_POST['newpassword']));
    $confirmpassword   = data_crypt(data_secure($_POST['confirmpassword']));  
       
    $customer_id = $_SESSION['customer_id'];
    
    $oldpassDB = empDataCustomer($customer_id,"password");

        if ($oldpassword != $oldpassDB){
            echo "<script>alert('Error: You have entered your wrong old password');</script>";
        }elseif ($newpassword != $confirmpassword){
            echo "<script>alert('Error: New password and confrim password are not matched');</script>";
        }elseif ($oldpassDB == $newpassword){
            echo "<script>alert('Error: Please type a new password!');</script>";
        }
        else{
           updatePasswordCustomer($username,$newpassword,$address); 
        }

}
   // echo "<script> alert('". $gender ."'); </script>";
?>
<html>
<head>
	<title>Update - Password</title>
	<link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>
	<!-- <link type="text/css" rel="stylesheet" href="css/mystyle.css"> -->
  <link type="text/css" rel="stylesheet" href="css/forms.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
  <link type="text/css" rel="stylesheet" href="css/sidebar.css">
   <link rel="icon" href="img/snowflake.png" type="image/png" />
</head>
<body>
  <?php
  
    if (loggedin2()){
    include 'php/header.php';
   include 'php/sidebarcustomer.php';
  ?>
    <div class="col s12" style="margin-left: 6%;">
      <div class="container white z-depth-2" style="margin-top: 2%;height:auto; padding-top: 1%; padding-bottom: 3%;">
        <form action ="#" method="post" enctype="multipart/form-data">
        <h4 style="letter-spacing: 2px;">Update Password</h4>
        (Note: All fields with <b>" * "</b> is required)<br><br>
        <div class="row">
          
            <div class="input-field col s12">
               
                <input id="product_id" type="password" class="validate" name="oldpassword"  require required maxlength="25" value="">
                <label for="product_id">* Old Password</label>
            </div>
            
                <div class="input-field col s12">
               
                <input id="product_id" type="password" class="validate" name="newpassword"  require required maxlength="25" value="">
                <label for="product_id">* New Password</label>
            </div>
                <div class="input-field col s12">
                <input id="product_id" type="password" class="validate" name="confirmpassword"  require required maxlength="25" value="">
                <label for="product_id">* Confirm Password:</label>
            </div>
       
          
           
   
            
            <button class="medium btn waves-effect waves-light blue darken-3 right" type="submit" name="changePasswordCustomer" style="margin-right: 25px;clear: both;">
            Update Password 
          <i class="mdi-content-send right"></i>
          </button>
        </form>
            </div>
      </div>
    </div>
    <?php }elseif (loggedin3()){
    
    include 'php/header.php';
   include 'php/sidebar.php';
    ?>
    
      <div class="col s12" style="margin-left: 6%;">
      <div class="container white z-depth-2" style="margin-top: 2%;height:auto; padding-top: 1%; padding-bottom: 3%;">
        <form action ="#" method="post" enctype="multipart/form-data">
        <h4 style="letter-spacing: 2px;">Update Password</h4>
        (Note: All fields with <b>" * "</b> is required)<br><br>
        <div class="row">
          
            <div class="input-field col s12">
               
                <input id="product_id" type="password" class="validate" name="oldpassword"  require required maxlength="25" value="">
                <label for="product_id">* Old Password</label>
            </div>
            
                <div class="input-field col s12">
               
                <input id="product_id" type="password" class="validate" name="newpassword"  require required maxlength="25" value="">
                <label for="product_id">* New Password</label>
            </div>
                <div class="input-field col s12">
                <input id="product_id" type="password" class="validate" name="confirmpassword"  require required maxlength="25" value="">
                <label for="product_id">* Confirm Password:</label>
            </div>
       
          
           
   
            
            <button class="medium btn waves-effect waves-light blue darken-3 right" type="submit" name="submit" style="margin-right: 25px;clear: both;">
            Update Password 
          <i class="mdi-content-send right"></i>
          </button>
        </form>
            </div>
      </div>
    </div>
    
    
    
    
    <?php }?>
	<script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
  <script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>
<?php
 }
 
    else {
        echo "<script>alert('Please, login as member!');window.location='index.php'</script>";
        sleep(1);
    }}
    else{
        echo "<script>alert('Please, login as member!');window.location='index.php'</script>";
        sleep(1);
    }
    
?>  