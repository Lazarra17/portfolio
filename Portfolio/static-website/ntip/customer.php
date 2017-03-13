<?php
  include 'php/db/connect.php';
?>
<html>
<head>
	<title>Home - Customer</title>
	<link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>
	<!-- <link type="text/css" rel="stylesheet" href="css/mystyle.css"> -->
  <link type="text/css" rel="stylesheet" href="css/forms.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
  <link type="text/css" rel="stylesheet" href="css/sidebar.css">
   <link rel="icon" href="img/snowflake.png" type="image/png" />
</head>
<body>
  <?php
    include 'php/sidebarcustomer.php';
  ?>
    <div class="col s12" style="margin-left: 15%; height:auto;">
      <div class="container white" style="margin-top: 2%;height:auto; width: 82%; padding-top: 1%; padding-bottom: 3%;">
       <form>
        <?php include "php/slideshow2.php";?>
        </form>
      </div>
    </div>
    <div style="margin-left: 15%;"> 
     <?php include "php/order.php";?>
     </div>
	<script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
  <script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>