<?php
include 'php/conn.php';
include 'php/functions.php';


if (isset($_POST['submit'])){
    
    
    $fname = data_secure($_POST['fname']);
    $lname = data_secure($_POST['lname']);
    $email = data_secure($_POST['email']);
    $password = data_secure($_POST['password']);
    $cpassword = data_secure($_POST['cpassword']);
    
    $peraddress = data_secure($_POST['peraddress']);
    $shipaddress = data_secure($_POST['shipaddress']);
    $contact = data_secure($_POST['contact']);
    $zipcode = data_secure($_POST['zipcode']);
    $trademark = data_secure($_POST['trademark']);
    
    
   if (ctype_alpha($fname) && ctype_alpha($lname)){
        $error = "Error: Please type your name without number";
   }
   else if (!ctype_digit($contact) && !ctype_digit($zipcode)){
        $error = "Error: Please type numbers in contact and zipcode";
   }
   else if (filter_var($email, FILTER_VALIDATE_EMAIL) === false){
        $error = "Error: Please type the corrent email";
   }
   else if ($password != $cpassword){
        $error = "Error: Password are not matched";
       
   }
   else {
    $finalpass = data_crypt($password);
    
    addMember($fname,$lname,$email,$finalpass,$contact,$peraddress,$shipaddress,$zipcode,$trademark);
    
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
<form action= "signup.php" method="post" class="col s12" >
<div class="row" >

            <div class="input-field col s6 margintop">
                <i class="small mdi-action-search prefix white-text"></i>
               <input id="username" type="text" class="validate" name="search"  require required maxlength="130" value= "<?php if(isset($_POST['submitsearch'])){ echo $_POST['search'];}; ?>" >
                <label for="Search">What are you looking for?</label>
            </div>
            
            <div class="input-field col s2 margintop">
             <button class="medium btn waves-effect waves-light green darken-3" style="display: block;" type="submit" name="submitsearch" >
            Search
          <i class="mdi-action-search right"></i>
          </button>
            </div>
          <div class="category">
            <p>Popular Searches: <a href="#">Sand</a> <a href="#">Gravel</a> <a href="#">Hollow Bloack</a> <a href="#">Transport Express</a></p>
            </div>
            </div>
              
            
            </form>
</div>
</div>
</header>
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
        <a href="about_us.php" >           
        <li class="bold sidepanel-icon">
                      
                      <i class="mdi-social-person"></i>
                        About Us
                     
                    </li></a>
        <a href="mycart.php" > 
        
        <li class="bold sidepanel-icon">
                      
                      <i class="mdi-action-shopping-cart"></i>
                        Cart
                     
                    </li></a>
        <a href="order-tracking.php" >   
        
                   
        <li class="bold sidepanel-icon">
                      
                        <i class="mdi-maps-local-shipping"></i>
                        Order Tracking 
                     
                    </li>  </a>
                    
     <a href="signup.php" >                  
  <li class="bold sidepanel-icon selected" >
                      
                       <i class="mdi-social-person-add"></i>
                        Signup
                     
                    </li>  </a>
                     <a href="login.php" >
        <li class="bold sidepanel-icon">
                     
                     <i class=" mdi-communication-vpn-key"></i>
                       
                        Login
                    
                    </li> 
                      </a>
</ul>
</div>


</div>


<form method="post" action="">
<div class="second-column">
<div class="row">
<h4 class="second-column-title">Signup / Register</h4>
          <p class="error-post"> <?php  if (isset($error)){
                echo $error;
                                
            }?></p>
           
            <div class="input-field col s4 margintop">
                <i class="small mdi-social-person prefix green-text"></i>
                <input id="username" type="text" class="validate" name="fname"  require required maxlength="30" value= "<?php if(isset($_POST['submit'])){ echo $_POST['fname'];}; ?>" >
                <label for="fname">First Name</label>
            </div>
            
             <div class="input-field col s4 margintop">
                <i class="small mdi-social-person prefix green-text"></i>
                <input id="username" type="text" class="validate" name="lname"  require required maxlength="30" value= "<?php if(isset($_POST['submit'])){ echo $_POST['lname'];}; ?>" >
                <label for="fname">Last Name</label>
            </div>
            
             <div class="input-field col s4 margintop">
                <i class="small mdi-communication-email prefix green-text"></i>
                <input id="username" type="text" class="validate" name="email"  require required maxlength="50" value= "<?php if(isset($_POST['submit'])){ echo $_POST['email'];}; ?>" >
                <label for="fname">Email</label>
            </div>
            
           
            <div class="input-field col s4 margintop">
                <i class="small mdi-action-lock-outline prefix green-text"></i>
                <input id="username" type="password" class="validate" name="password"  require required maxlength="40" value= "" />
                <label for="fname">Password</label>
            </div>

            <div class="input-field col s4 margintop">
                <i class="small mdi-action-lock-outline prefix green-text"></i>
                <input id="username" type="password" class="validate" name="cpassword"  require required maxlength="40" value= "" />
                <label for="fname">Confirm Password</label>
            </div>  
            
            <div class="input-field col s4 margintop">
                <i class="small mdi-action-perm-contact-cal prefix green-text"></i>
                <input id="username" type="text" class="validate" name="contact"  require required maxlength="11" value= "<?php if(isset($_POST['submit'])){ echo $_POST['contact'];}; ?>" >
                <label for="fname">Contact Number</label>
            </div> 
                      
            
            
            <div class="input-field col s12 margintop">
                <i class="small mdi-action-home prefix green-text"></i>
                <input id="username" type="text" class="validate" name="peraddress"  require required maxlength="100" value= "<?php if(isset($_POST['submit'])){ echo $_POST['peraddress'];}; ?>" >
                <label for="fname">Permanent Address</label>
            </div>    
            
            
            <div class="input-field col s12 margintop">
                <i class="small mdi-action-home prefix green-text"></i>
                <input id="username" type="text" class="validate" name="shipaddress"  require required maxlength="30" value= "<?php if(isset($_POST['submit'])){ echo $_POST['shipaddress'];}; ?>" >
                <label for="fname">Shipping Address</label>
            </div>
            
            
            
            
            <div class="input-field col s4 margintop">
                <i class="small mdi-communication-contacts prefix green-text"></i>
                <input id="username" type="text" class="validate" name="zipcode"  require required maxlength="4" value= "<?php if(isset($_POST['submit'])){ echo $_POST['zipcode'];}; ?>" >
                <label for="fname">Zip Code</label>
            </div>
            
            <div class="input-field col s4 margintop">
                <i class="small mdi-maps-place prefix green-text"></i>
                <input id="username" type="text" class="validate" name="trademark"  require required maxlength="30" value= "<?php if(isset($_POST['submit'])){ echo $_POST['trademark'];}; ?>" >
                <label for="fname">Trademark / Near at?</label>
            </div>   
            <div class="" style="clear: left;"></div>
            
          
         
                <button class="medium btn waves-effect waves-light green darken-3" style="float: right; margin: 20px;"  type="submit" name="submit" >
                Signup
                <i class="mdi-social-person-add right"></i>
            </button>                          



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
