<?php
ini_set('session.save_path', 'tmp');
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
    // echo "<script> alert('ok'); </script>"; 
    $username = data_secure($_POST['username']);
    $password = data_secure($_POST['password']);
    $pass = hash("sha256",$password);

    
    
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
    $ip = $_SERVER['REMOTE_ADDR'];
    }
    
    
    

    if(is_string($username) && (is_string($password))){
        
       $query = "SELECT * FROM `customer` WHERE `username` = '" . $username . "' AND 
      `password` = '" . $pass . "'";
       $run   = mysql_query($query);
       

       $query2 = "SELECT * FROM `employee` WHERE `username` = '" . $username . "' AND 
      `password` = '" . $pass . "' AND 
      `status` = 'active'";
       $run2   = mysql_query($query2);
       


       $query3 = "SELECT * FROM `users` WHERE `username` = '" . $username . "' AND 
      `password` = '" . $pass . "' AND status ='active'";
       $run3   = mysql_query($query3);


      if(mysql_num_rows($run) == 1){
        $customer_id = mysql_result($run, 0, 'customer_id');
         $email = mysql_result($run, 0, 'email');
        $_SESSION['customer_id'] = $customer_id;
        $_SESSION['code'] = "customer";
        $_SESSION['email'] = $email;
        $_SESSION["accesscode"] = "newtaytayiceplantcustomer";
        sleep(1);
         if (isset($_GET["authentication"])){
             header("Location: my_cart.php"); 
       }else{ header("Location: index.php"); 
     } 
      }

     else if(mysql_num_rows($run2) == 1){
        $emp_id_no = mysql_result($run2, 0, 'emp_id_no');
         $email = mysql_result($run2, 0, 'email');
          $_SESSION['codeemp'] = "employee";
        $_SESSION['emp_id_no'] = $emp_id_no;
        $_SESSION['email'] = $email;
        
        $_SESSION["accesscode"] = "newtaytayiceplantemployee";
         
         
        sleep(1);
        if (isset($_GET["authentication"])){
             header("Location: my_cart.php"); 
       }else{ header("Location: index.php"); 
     } }

      else if(mysql_num_rows($run3) == 1){
        date_default_timezone_set("Asia/Taipei");
		$today = date('m-d-Y h:i:sa');  
        
        $user_id = mysql_result($run3, 0, 'user_code');
        $admin_name = mysql_result($run3, 0, 'admin_name');
        $department = mysql_result($run3, 0, 'department');
        
        audit_trail($admin_name,$department,$ip);


                 date_default_timezone_set("Asia/Taipei");        
        	 	 $today = date('m-d-Y h:i:sa');
                 $activity = "Time logged in: $today"; 
                 auditActivity($activity,$today);
                 $allactivity = auditSelect("activity",$today);
                 $activity = "View.";
                 $activity = $allactivity . "+" . $activity;    
                 auditActivity($activity,$today);
        
        
        // $email = mysql_result($run3, 0, 'email');
        $_SESSION['user_id'] = $user_id;
        $_SESSION['time_in_oryt'] = $today;    
        
        $_SESSION["accesscode"] = "newtaytayiceplant" . $user_id;
        
        //$_SESSION['email'] = $email;
        sleep(1);
         if (isset($_GET["authentication"])){
             header("Location: my_cart.php"); 
       }else{ header("Location: index.php"); 
     }
      }
     else{
        echo "<script> alert('Username or Password is incorrect.'); </script>"; 
      }
      
      
      
      
      
      
 
      
    }
  }

?>
<html>
<head>
	<title>Login</title>
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

          <?php
        include "php/header.php";
          ?>
        </ul>
      </div>
    </nav>
  </div>
	
	<div class="container login z-depth-2">
    <form action= "#" method="post" class="col s12"> 
      <div class="login-title"> 
        <h5 class="center-align">LOGIN 
      </div>
      
      <div class="row" style="padding-top: 15px;">
        <form class="col s12">
          <div class="row">
            <div class="input-field col s12">
                <i class="small mdi-social-person prefix black-text"></i>
                <input id="username" type="text" class="validate" name="username"  require required maxlength="50" value= <?php if(isset($_POST['submit'])){ echo $_POST['username'];}; ?> >
                <label for="username">Username</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
                <i class="small mdi-communication-vpn-key prefix black-text" ></i>
                <input id="password" type="password" class="validate" name="password" require required maxlength="50" value="">
               <label for="password">Password</label>

          </div>

            <div class="input-field col s4" style="margin-left: 40px;">
            <a href="forgot-password.php?forgotpassword=yes">Forgot Password?</a>
            </div>
       
        
          <button class="medium btn waves-effect waves-light blue darken-3 right" type="submit" name="submit" style="margin-right: 25px;">
            Submit 
          <i class="mdi-content-send right"></i>
          </button>
         <span style="font-size: 12px; color:black;"> Not a member?<br /></span><a href="register.php?<?php if (isset($_GET["authentication"]))echo "authentication=true"; ?>"> Click here</a>
      </div>
    </form>
  </div>
  </div>
  <?php include "php/footer.php"; ?>
	<script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
  <script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>
<?php } ?>
