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
   $error = "";
   $erroruser = "";



?>
<html>
<head>
	<title>About</title>
	<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
	<!-- <link type="text/css" rel="stylesheet" href="css/mystyle.css"> -->
  <link type="text/css" rel="stylesheet" href="css/forms.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
   <link rel="icon" href="img/snowflake.png" type="image/png" />
</head>

<body onload="showmap()">
<?php 

include "php/header.php";




?>
  
	<div class="container login z-depth-2" style="width:920;height: auto;margin-top: 20px; margin-bottom:0px">
     
      <div class="login-title"> <br />
     <h5 class="left-align">About Us</h5>
      </div>

  <div style="color: black;">
<p>

April 2004 was an important month for Mr. Eric Felix, as it marked the beginning of the construction of the New Taytay Ice Plant.<br /><br />
The idea of putting up an establishment like this, an ice plantation, came about due to several factors. Before, 
<div style="float: right"><img src="images/ntip-house.jpg" /><span style="font-size: 11;"><br>The executive office is situated adjacent to the plant. <br>
Definitely within walking distant to the plant itself. &copy; NTIP 2011</span></div>
there were no plants that supply ice in town of Taytay - the former nearby plant back then was 
closed for a long time already. Surveys further justified the growing thought by proving that 
there were no bulk retailers of ice.  Moreover, since the Felix family manages a fishing business
 as well, establishing a steady supplier of ice would complement the need of preserving the perishable 
 goods of their business and of others' in the vicinity.<br /><br />
Initially, it operated for 24 hours with only eight employees. To date, it now has 22 employees. <br /><br />
As its soft opening on January 2005 has been flooded with positive acclaim and the demand for its two major products increased almost exponentially, two complete manufacturing systems that utilize brine were added over the next two years to expand the capacity of the plant.

</p>
  </div>
  
    <div class="login-title"> <br />
     <h5 class="left-align">Mission-Vision</h5>
      </div>

  <div style="color: black;">
<p>

As a manufacturing facility, the New Taytay Ice Plant seeks to attend to the need 
of the wholesale and retail industry of perishable goods for quality ice, primarily
 to augment the fishing industry of Rizal, and to provide quality ice to cities and 
 towns near its location. The New Taytay Ice Plant sees itself as a company of cleanliness, 
 promptness and diligence, and always at its customers' service whenever they need.
</p>
  </div>
  
  
     <div class="login-title"> <br />
     <h5 class="left-align">Shipping Places</h5>
      </div>

  <div style="color: black;">
<p>

We deliver ice in Taytay Rizal, Pasig and Marikina only.
</p>

  <div class="login-title"> <br />
     <h5 class="left-align">Location</h5>
      </div>
 <div style="color: black;">
<p>

(Note: To see the map you need to have internet)
</p>
  </div>
    <iframe  id="map"
  width="880"
  height="450"
  frameborder="0" style="border:0"
  src="" allowfullscreen>
</iframe>
    
    
    
      </div>
   </div>
     
  <?php include "php/footer.php"; ?>
<style>
#uls{
  columns: 2;
  -webkit-columns: 2;
  -moz-columns: 2;
}
</style>
    <script>
          
function showmap(){
   
   
    document.getElementById("map").src = "https://www.google.com/maps/embed/v1/place?key=AIzaSyCHaDcDOh4CbOm34e_rOa0w-Ve7kDe7m8s&q="+ "New taytay ice plant philippines";
    
}
    </script>

	<script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
  <script type="text/javascript" src="js/materialize.min.js"></script>
   <script src="themes/3/js-image-slider.js" type="text/javascript"></script>
</body>
</html>
<?php } ?>