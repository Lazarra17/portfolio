<?php
  session_start();
  include '../php/db/connect.php';
  include '../php/function.php';

    if (isset($_GET["product_no"])){
        $product_no = data_secure($_GET["product_no"]);
        
    }
    
    if (isset($_GET["type"])){    
        header("location: product.php?product_no=$product_no&type=customer");
    } 
    
  if(isset($_GET['register-success'])){
    echo "<script> alert('Successfully Register. Please Log in to Continue'); </script>";
  }

  if(isset($_POST['submit'])){
    // echo "<script> alert('ok'); </script>"; 
    $username = data_secure($_POST['username']);
    $password = data_crypt($_POST['password']);

     if(is_string($username) && (is_string($password))){
        
      $query = "SELECT * FROM `customer` WHERE `username` = '" . $username . "' AND 
      `password` = '" . $password . "'";
      $run   = mysql_query($query);
      
      $query2 = "SELECT * FROM `employee` WHERE `username` = '" . $username . "' AND 
      `password` = '" . $password . "'";
       $run2   = mysql_query($query2);
       
       

      if(mysql_num_rows($run) == 1){
        $customer_id = mysql_result($run, 0, 'customer_id');
        $email = mysql_result($run, 0, 'email');
        $_SESSION['customer_id'] = $customer_id;
        $_SESSION['email'] = $email;
        sleep(1);
        header("Location: ../my_cart.php"); 
      }
      
       else if(mysql_num_rows($run2) == 1){
        $emp_id_no = mysql_result($run2, 0, 'emp_id_no');
         $email = mysql_result($run2, 0, 'email');
        $_SESSION['emp_id_no'] = $emp_id_no;
        $_SESSION['email'] = $email;
        sleep(1);
        header("Location: ../my_cart.php"); 
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
	<link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
	<!-- <link type="text/css" rel="stylesheet" href="css/mystyle.css"> -->
  <link type="text/css" rel="stylesheet" href="../css/forms.css">
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
          <li><img src="../img/snowflake-icon.png" style="margin-top: 10px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
          <li><a href="../index.php" >Home</a></li>
          <?php
            if(loggedin2()){ //userdata2 customer userdata users
              $username = userData2('username');
              echo "<li class='right'><a style = 'margin-top: 15px; margin-left: 20px;' class='dropdown-button btn blue darken-4' href='#' data-activates='dropdown1'>Settings</a></li>";
                echo "<ul id='dropdown1' class='dropdown-content text-blue' style='margin-top: 50px;'>";
                  echo "<li class='right border:0px'><a href='../php/logout.php'>Logout</a></li>";
                echo "</ul>";
                echo "<li class='right blue-text' style='font-weight: bold;'><u>Logged in as ". $username ."</u></li>";
            
            }else{
             
            }   
          ?>
        </ul>
      </div>
    </nav>
  </div>
	<?php 
    
    ?>
    
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
                <input id="username" type="text" class="validate" name="username"  require required maxlength="10" value= <?php if(isset($_POST['submit'])){ echo $_POST['username'];}; ?> >
                <label for="username">Username</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
                <i class="small mdi-communication-vpn-key prefix black-text" ></i>
                <input id="password" type="password" class="validate" name="password" require required maxlength="10" value="">
                <label for="password">Password</label>
            </div>
          </div>
          <button class="medium btn waves-effect waves-light blue darken-3 right" type="submit" name="submit" style="margin-right: 25px;">
            Submit 
          <i class="mdi-content-send right"></i>
          </button>
          
      </div>
    </form>
    </form>
  </div>

    <div class="container login z-depth-2">
    <form action= "#" method="post" class="col s12"> 
      <div class="login-title"> 
        <h5 class="center-align">CONTINUE WITHOUT LOGIN </h5>
      </div>
      
      <div class="row" style="padding-top: 15px;">
    
          <a class="medium btn waves-effect waves-light blue darken-3 right" style="margin-right: 25px;" href="../checkout.php">
            Continue 
          <i class="mdi-content-send right"></i>
          </a>
          
      </div>
    </form>
  </div>


	<script type="text/javascript" src="../js/jquery-2.1.1.min.js"></script>
  <script type="text/javascript" src="../js/materialize.min.js"></script>
</body>
</html>