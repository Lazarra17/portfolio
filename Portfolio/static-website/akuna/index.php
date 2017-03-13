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
   	<link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>
    <meta name="viewport" content="width=device-width"/>
    <link rel="stylesheet" type="text/css" href="css/indexstyle.css" />
    <link rel="icon" href="images/akuna-leaf.png" />
</head>
<body>


    <header class="header">
   

<form action= "" method="post" class="col s12">
<div class="logo">
    <a href="index.php"><img src="images/akuna-logo.gif" /></a>
</div>     
      <div class="row" style="">
       
         
          
          
           <div class="input-field col s6">
                <i class="small mdi-action-search prefix white-text"></i>
                <input id="Find" type="text" class="validate find" name="find"  require required maxlength="255" value= "" >
                <label for="What are you looking for" style="color:white">What are you looking for?</label>
            </div>
           <div class="position"> 
           <button class="medium btn waves-effect waves-light green darken-3 right" type="submit" name="submit" style="margin: 20px 5px 0px 0px;">
            Search 
          <i class="mdi-action-search right"></i>
          </button>
		</div>
<div class="logos">
<img src="images/tracking.png"> <img src="images/lbc.png">
</div>
<p class="popular-search">Popular searched: <a href="#" class="popular">Vitamins</a>| <a href="#" class="popular">Juice</a> | <a href="#" class="popular">Energy bar</a> |<a href="#" class="popular"> Shampoo</a></p>
</div>

</form>
      
    </header>
    

<div id="container"  class="clearfx">    
    
<div class="first-col">
<p class="center"><img src= "images/akunashop.gif"></p>
<ul>

<li class="selected">All Categories</li>
<a href="#"><li>Vitamins</li></a>
<a href="#"><li>Juice</li></a>
<a href="#"><li>Energy</li></a>
<a href="#"><li>Shampoo</li></a>

</ul>


<ul>

<li class="selected">Menu</li>
<a href="#"><li>My Cart</li></a>
<a href="#"><li>Track order</li></a>
<a href="register.php"><li>Register</li></a>
<a href="menu.php"><li>Contact form</li></a>
<a href="menu.php"><li>Login</li></a>

</ul>


</div>
<div class="second-col">

<div class="categories-best clearfx">
<h5>
Best Seller
</h5>
<div class="category-menu">
<img src="e-shop/alveo/alveo_grape_juice.jpg">
<p class="bold">Alveo Grape Juice</p>
<p>&#8369 210.00 <a href="#" class="order">ORDER NOW</a></p>
</div>

<div class="category-menu">
<img src="e-shop/vitamin/mastervit_small_vitamin.jpg">
<p class="bold">Master Vit</p>
<p>&#8369 210.00 <a href="#" class="order">ORDER NOW</a></p>
</div>


<div class="category-menu">
<img src="e-shop/vitamin/akuc_vitamin.jpg">
<p class="bold">Aku C Vitamin</p>
<p>&#8369 210.00 <a href="#" class="order">ORDER NOW</a></p>
</div>


<div class="category-menu">
<img src="e-shop/energy/akuenerg_energy.jpg">
<p class="bold">AkuEnerg</p>
<p>&#8369 210.00 <a href="#" class="order">ORDER NOW</a></p>
</div>


</div>


<div class="categories-juice clearfx">
<h5>
Alveo Juice
</h5>
<div class="category-menu">
<img src="e-shop/alveo/alveo_grape_juice.jpg">
<p class="bold">Alveo Grape Juice</p>
<p>&#8369 210.00 <a href="#" class="order">ORDER NOW</a></p>
</div>

<div class="category-menu">
<img src="e-shop/alveo/alveo_mint_juice.jpg">
<p class="bold">Master Vit</p>
<p>&#8369 210.00 <a href="#" class="order">ORDER NOW</a></p>
</div>



</div>



<div class="categories-vitamins clearfx">
<h5>
Vitamins
</h5>

<div class="category-menu">
<img src="e-shop/vitamin/akuc_vitamin.jpg">
<p class="bold">AkuC</p>
<p>&#8369 210.00 <a href="#" class="order">ORDER NOW</a></p>
</div>

<div class="category-menu">
<img src="e-shop/vitamin/mastervit_small_vitamin.jpg">
<p class="bold">MasterVit</p>
<p>&#8369 210.00 <a href="#" class="order">ORDER NOW</a></p>
</div>


<div class="category-menu">
<img src="e-shop/vitamin/onyx_small_vitamin.jpg">
<p class="bold">OnyxVit Plus</p>
<p>&#8369 210.00 <a href="#" class="order">ORDER NOW</a></p>
</div>


<div class="category-menu">
<img src="e-shop/vitamin/pinky_small_vitamin.jpg">
<p class="bold">PinkyVit</p>
<p>&#8369 210.00 <a href="#" class="order">ORDER NOW</a></p>
</div>

<div class="category-menu">
<img src="e-shop/vitamin/cleanse_vitamin.jpg">
<p class="bold">CleanseVit</p>
<p>&#8369 210.00 <a href="#" class="order">ORDER NOW</a></p>
</div>


</div>


<div class="categories-energy clearfx">
<h5>
Energy
</h5>
<div class="category-menu">
<img src="e-shop/energy/akubar_energy.jpg">
<p class="bold">Akubar Classic</p>
<p>&#8369 210.00 <a href="#" class="order">ORDER NOW</a></p>
</div>

<div class="category-menu">
<img src="e-shop/energy/akubar_protein_energy.jpg">
<p class="bold">Akubar Protein</p>
<p>&#8369 210.00 <a href="#" class="order">ORDER NOW</a></p>
</div>

<div class="category-menu">
<img src="e-shop/energy/akuenerg_energy.jpg">
<p class="bold">AkuEnerg</p>
<p>&#8369 210.00 <a href="#" class="order">ORDER NOW</a></p>
</div>

</div>




</div>


 
</div>

<?php include "php/footer.php";?>


  <script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
  <script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>
