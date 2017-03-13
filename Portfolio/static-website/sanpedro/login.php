<?php 

include "php/conn.php";
include "php/functions.php";

$message = "";
$style= "";

if (isset($_GET['successfully-registered'])){
    $message = "You have successfully registered. Please Login";
}


if (isset($_POST["submit"])){
    
   echo $email = data_secure($_POST["email"]);
   echo $password = data_crypt($_POST["password"]);

    
    //cheking of email and password then login


    $sql = "SELECT * FROM sphb_sp_members WHERE email = '$email' AND password = '$password'";
    $result = mysql_query($sql);
    $count = mysql_num_rows($result);
    
   
     if ($count == 1){

        $_SESSION["email"] = $email;
        header("Location: index.php?successfully-login");
      
       }else{
      
        $message = "The email and password are not matched." . $password;
        $style = "color:#FF5050;";
       }

    
    
    
}


?>
<html>
<head>
	<title>San Pedro Hollow Block</title>
    <?php include "php/header.php";?>
</head>
<body>


<div class="clearfix">
<div class="headers">
<header class="site-header">

<img class="site-banner" src="imgs/sample.png">
<form action= "#" method="post" >
<div class="row" >

            <div class="input-field col s6 margintop">
                <i class="small mdi-action-search prefix white-text"></i>
               <input id="username" type="text" class="validate" name="search"  require required maxlength="100" value= "<?php if(isset($_POST['submitsearch'])){ echo $_POST['search'];}; ?>" >
                <label for="Search">What are you looking for?</label>
            </div>
            
            <div class="input-field col s2 margintop" >
             <button class="medium btn waves-effect waves-light green darken-3" style="display: block;" type="submit" name="submitsearch" >
            Search
          <i class="mdi-action-search right"></i>
          </button>
          <span class="site-welcome">Welcome <?php if (isset($_SESSION["email"])){ echo userdata($email,"first_name");}?></span>
            </div>
          <div class="category">
            <p>Popular Searches: <a href="#">Sand</a> <a href="#">Gravel</a> <a href="#">Hollow Bloack</a> <a href="#">Transport Express</a>
         
            </p>
            </div>
            </div>
              
            
            </form>
            </header>
</div>
</div>

<div class="container">

<div class="clearfix">
<div class="first-column">


<!-- All Categories -->
<div class="left-pane ">
<ul>
<li class="left-pane-title">All Categories</li>
        
        <a href="#" >
        <li class="bold sidepanel-icon">
                      
                        <img src="imgs/sand.png" width="20px">
                        Sand
                    
                    </li></a>          
        <a href="#" >           
        <li class="bold sidepanel-icon">
                      
                      <img src="imgs/stone.png" width="20px">
                        Gravel
                     
                    </li></a>
        <a href="#" >            
        <li class="bold sidepanel-icon">
                      
                       <img src="imgs/hollow-block.png" width="20px">
                        Hollow Block
                     
                    </li>  </a>
                     <a href="#" >
        <li class="bold sidepanel-icon">
                     
                       <img src="imgs/truck.png" width="20px">
                       
                        Transport Express
                   
                    </li> 
                      </a>
</ul>
</div>

<!-- Navigation -->

<div class="left-pane ">
<ul>

        
        <a href="index.php" >
        <li class="bold sidepanel-icon ">
                      
                        <i class="mdi-action-home"></i>
                        Home
                    
                    </li></a>          
        <a href="#" >           
        <li class="bold sidepanel-icon">
                      
                      <i class="mdi-social-person"></i>
                        About Us
                     
                    </li></a>
        <a href="#" > 
        
        <li class="bold sidepanel-icon">
                      
                      <i class="mdi-action-shopping-cart"></i>
                        Cart
                     
                    </li></a>
        <a href="#" >   
        
                   
        <li class="bold sidepanel-icon">
                      
                        <i class="mdi-maps-local-shipping"></i>
                        Order Tracking 
                     
                    </li>  </a>
                   
     <a href="signup.php">                  
  <li class="bold sidepanel-icon">
                      
                       <i class="mdi-social-person-add"></i>
                        Signup
                     
                    </li>  </a>
                      <a href="#" >
        <li class="bold sidepanel-icon selected" >
                     
                     <i class=" mdi-communication-vpn-key"></i>
                       
                        Login
                    
                    </li> 
                      </a>
</ul>
</div>


</div>


<form method="post" action="#">
<div class="second-column">
<div class="row">
<h4 class="second-column-title">Login / Sign in</h4>

              <p class="error-post" style="<?php echo $style?>"> <?php echo $message;?></p>
            <div class="login-design">
            
            
            
             <div class="input-field col s12 margintop">
                <i class="small mdi-social-person prefix green-text"></i>
                <input id="username" type="text" class="validate" name="email"  require required maxlength="30" value= "<?php if(isset($_POST['submit'])){ echo $_POST['email'];}; ?>" >
                <label for="fname">Email Address</label>
            </div>
            
             <div class="input-field col s12 margintop">
                <i class="small mdi-action-lock-outline prefix green-text"></i>
                <input id="username" type="password" class="validate" name="password"  require required maxlength="30" value= "<?php if(isset($_POST['submit'])){ echo $_POST['password'];}; ?>" >
                <label for="fname">Password</label>
            </div>
            

                <button class="medium btn waves-effect waves-light green darken-3" style="margin: 20px;"  type="submit" name="submit" >
                Login
               
            </button>    
             <a class="forgotpass" href="#">Forgot Password? 
          
            
            
            
            
            
            
            </div>
                                 



</div>
</div>
</form>
</div>

<div class="site-footer clearfix">
<div class="site-col">
<h5 class="site-col-title-customer">Customer Care</h5>
<ul>
<li><a href="#">How to order</a></li> 
<li><a href="#">Payment</a></li>
<li><a href="#">Delivery</a></li>
<li><a href="#">Feed back</a></li>
</ul>
</div>

<div class="site-col">
<h5 class="site-col-title-about">About San Pedro Hollow Block</h5>
<ul>
<li><a href="#">About Us</a></li>
<li><a href="#">Terms and Condition</a></li>
<li><a href="#">Private Policy</a></li>
<li><a href="#">FAQs</a></li>
</ul>
</div>

<div class="site-col">
<h5 class="site-col-title-news">Latest Update and News</h5>
<ul>
<li><a href="#">New Product has arrived.  You can now buy anytime and always in stock.</a></li>
<li><a href="#">The 2-hole Hollow Block is now in stock.</a></li>
<li><a href="#">Successful Lipat Bahay service at Dolores Eastern Samar.</a></li>
</ul>
</div>


</div>

  
</div>
<?php include "php/footer.php";?>

  <script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
  <script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>
