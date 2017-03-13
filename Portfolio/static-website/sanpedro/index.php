<?php
include 'php/conn.php';
include 'php/functions.php';
if (isset($_SESSION["email"])){
$email = $_SESSION["email"];
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
          <?php if (isset($_SESSION["email"])){ echo " <span class='site-welcome'>Welcome " . userdata($email,"first_name") . "</span>";}?>
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

        
        <a href="#" >
        <li class="bold sidepanel-icon selected">
                      
                        <i class="mdi-action-home"></i>
                        Home <?php ?>
                    
                    </li></a>          
        <a href="#" >           
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
          <li class="bold sidepanel-icon">
                      
                       <i class="mdi-social-person-add"></i>
                        Signup
                     
                    </li>  </a>
           <a href=" <?php if (isset($_SESSION["email"])){ echo "php/logout.php";}else{echo "login.php";}?>" >
        <li class="bold sidepanel-icon">
                     
                     <i class=" mdi-communication-vpn-key"></i>
                       
                         <?php if (isset($_SESSION["email"])){ echo "Logout";}else{echo "Login";}?>
                    
                    </li> 
                      </a>         
                    
                                                                                
</ul>
</div>


</div>


<form method="post" action="#">
<div class="second-column">



<!-- Sand Section -->

<div class="site-menu clearfix">
<h1 class="site-menu-title-top">Top Selections</h1>
<div class="site-top">
<img src="imgs/product/concrete-sand.jpg" />
<h6>Concrete Sand</h6>
<p>&#8369; 240 / m<sup>3</sup> <input type="submit" class="buybtn" value="Order Now" /></p>
</div>

<div class="site-top">
<img src="imgs/product/fine-gravel.jpg" />
<h6>Fine Gravel</h6>
<p>&#8369; 260 / m<sup>3</sup> <input type="submit" class="buybtn" value="Order Now" /></p>
</div>

<div class="site-top">
<img src="imgs/product/classic-block.jpg" />
<h6>Classic Block (390 x 120 x 190)</h6>
<p>&#8369; 12  <input type="submit" class="buybtn" value="Order Now" /></p>
</div>


</div>


<!-- Sand Section -->

<div class="site-menu clearfix">
<h1 class="site-menu-title">Sand</h1>
<div class="site-sand">
<img src="imgs/product/concrete-sand.jpg" />
<h6>Concrete Sand</h6>
<p>&#8369; 240 / m<sup>3</sup> <input type="submit" class="buybtn" value="Order Now" /></p>
</div>

<div class="site-sand">
<img src="imgs/product/clay-sand.jpg" />
<h6>Clay Sand</h6>
<p>&#8369; 220 / m<sup>3</sup> <input type="submit" class="buybtn" value="Order Now" /></p>
</div>




</div>

<!-- Gravel Section -->

<div class="site-menu clearfix">

<h1 class="site-menu-title-gravel">Gravel</h1>
<div class="site-gravel">
<img src="imgs/product/fine-gravel.jpg" />
<h6>Fine Gravel</h6>
<p>&#8369; 260 / m<sup>3</sup> <input type="submit" class="buybtn" value="Order Now" /></p>
</div>

<div class="site-gravel">
<img src="imgs/product/mocha-stone.jpg" />
<h6>Mocha Stone</h6>
<p>&#8369; 300 / m<sup>3</sup> <input type="submit" class="buybtn" value="Order Now" /></p>
</div>

<div class="site-gravel">
<img src="imgs/product/decorative-stone.jpg" />
<h6>Decorative Stone</h6>
<p>&#8369; 320 / m<sup>3</sup> <input type="submit" class="buybtn" value="Order Now" /></p>
</div>


</div>


<!-- Hollow Block Section -->

<div class="site-menu clearfix">

<h1 class="site-menu-title-hblock">Hollow Block</h1>
<div class="site-hblock">
<img src="imgs/product/classic-block.jpg" />
<h6>Classic Block (390 x 120 x 190)</h6>
<p>&#8369; 12  <input type="submit" class="buybtn" value="Order Now" /></p>
</div>

<div class="site-hblock">
<img src="imgs/product/2-hole-block.jpg" />
<h6>Big Stone (390 x 240 x 190)</h6>
<p>&#8369; 18  <input type="submit" class="buybtn" value="Order Now" /></p>
</div>

<div class="site-hblock">
<img src="imgs/product/double-block.jpg" />
<h6>Double Block (390 x 190 x 190)</h6>
<p>&#8369; 18  <input type="submit" class="buybtn" value="Order Now" /></p>
</div>


</div>



<!-- Transport Express Section -->

<div class="site-menu clearfix">

<h1 class="site-menu-title-texpress">Transport Express</h1>
<div class="site-texpress">
<img src="imgs/product/lipat-bahay.jpg" />
<h6>Lipat Bahay Service</h6>
<p>&#8369; 100 <input type="submit" class="buybtn" value="Order Now" /></p>
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
