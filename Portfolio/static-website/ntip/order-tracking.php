<?php
  session_start();
  include 'php/db/connect.php';
  include 'php/function.php';

    $track_no = "";
    $emailcheck = "";

   // echo "<script> alert('". $gender ."'); </script>";
?>
<html>
<head>
	<title>Home</title>
	<link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>
	<!-- <link type="text/css" rel="stylesheet" href="css/mystyle.css"> -->
  <link type="text/css" rel="stylesheet" href="css/forms.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
  <link type="text/css" rel="stylesheet" href="css/sidebar.css">
  <link type="text/css" rel="stylesheet" href="css/style.css">
   <link rel="icon" href="img/snowflake.png" type="image/png" />
  
</head>
<body>
  <?php
    include 'php/header.php';
   
     if (isset($_SESSION["emp_id_no"])){
  include 'php/sidebar.php';
  }elseif (isset($_SESSION["customer_id"])){
     include 'php/sidebarcustomer.php';
  }
  ?>
    <div class="col s12" style="<?php if (empty($_SESSION["email"])){echo "margin:auto";}else{echo "margin-left:5%;";}?>">
      <div class="container white z-depth-2" style="margin-top: 2%; height:auto; padding-top: 1%; padding-bottom: 3%;"> 
         <?php if (empty($_SESSION["email"])){
                
              ?>
              <form method="post" action="order-tracking.php"> 
              <div class="row">
         <div class="input-field col s1"  style="width: 200px;">
         <input id="track-no" type="text" class="validate" name="track-no" require required maxlength="30" value="">
          <label for="Tracking">Tracking Number</label>
            </div>
          
           <div class="input-field col s1"  style="width: 200px;">
         <input id="emailcheck" type="text" class="validate" name="emailcheck" require required maxlength="30" value="">
          <label for="email">Email</label>
            </div>
            <input type="submit"  name="search" value="SEARCH" id="submit">
            
            </div>
         <?php 
         }
         if (isset($_POST["submit"])){
         $emailcheck = data_secure($_POST["emailcheck"]);
         $track_no = data_secure($_POST["track-no"]);
         
         
         
         
         }
         ?>
         </form>
        <div class="row">
          <div class="col s12">
           
            <ul class="tabs ">
            
            
              
              <li class="tab col s3"><a href="#HR" class="blue-text active">Order Tracking</a></li> 
              
            </ul>
          </div>
          <div id="HR" class="col s12"><br>
              <table class="hoverable responsive-table bordered">
                <thead>
                  <tr>
                    
                    <th data-field="order_date">Ordered Date</th>
                    <th data-field="order_date">Product Name</th>
                    <th data-field="order_date">Quantity</th>
                    <th data-field="method">Method of Payment</th>
                    <th data-field="status">Status</th>
                    
                  </tr>
                </thead>
                <tbody>
                  <?php
                  if (!empty($_SESSION["email"])){
                    $email = data_secure($_SESSION["email"]);
                     $order_no = $_GET["order_id"];
                    $query = "SELECT * FROM `orders` WHERE email = '$email' AND order_id = '$order_no'";
                    $run   = mysql_query($query);

                    while($row = mysql_fetch_array($run)){ ?>
                      <tr>
                     
                         <td><?php echo $row['order_date']; ?></td>                    
                         <td><?php echo $row['particulars']; ?></td>
                         <td><?php  echo $row['items']; ?></td>
                         <td><?php echo $row['methods']; ?></td>
                         <td><?php echo $row['status']; ?></td>
                        </tr>
                  <?php
                    }}else{
                    if (!empty($_POST["emailcheck"])){
                    $emailcheck = data_secure($_POST["emailcheck"]);
                    $track_no = data_secure($_POST["track-no"]);
                    
                    $query = "SELECT * FROM `orders` WHERE email = '$emailcheck' AND order_id = '$track_no'";
                    $run   = mysql_query($query);

                    while($row = mysql_fetch_array($run)){ $order_no = $row["order_id"]; ?>
                      <tr>
                     
                         <td><?php echo $row['order_date']; ?></td>                    
                         <td><?php echo $row['particulars']; ?></td>
                         <td><?php  echo $row['items']; ?></td>
                         <td><?php echo $row['methods']; ?></td>
                         <td><?php echo $row['status']; ?></td>
                        </tr>  
                        
                  <?php  }
                  
                 } } ?>
                
              </table>
      
      
      <div class="col s12">
            <ul class="tabs ">
              <li class="tab col s3"><a href="#HR" class="blue-text active">Current Status</a></li> 
            </ul>
          </div>
          <div id="HR" class="col s12"><br>
              <table class="hoverable responsive-table bordered">
                
                <tbody>
                  <?php
                    if (!empty($_SESSION["email"])){
                    $email = data_secure($_SESSION["email"]);
                    
                    $query = "SELECT DISTINCT  description,date FROM `updates` WHERE email = '$email' AND order_no='$order_no'";
                    $run   = mysql_query($query);
                    
                    while($row = mysql_fetch_array($run)){ ?>
                      <tr>
                        <td><?php echo $row['date']; ?></td>
                        <td><?php echo $row["description"];?></td>
                        </tr>
                          
                  <?php
                    }}else{
                    if (isset($_POST["search"])){
                    $emailcheck = data_secure($_POST["emailcheck"]);
                    $track_no = data_secure($_POST["track-no"]);
                    
                    $query = "SELECT * FROM `updates` WHERE email = '$emailcheck' AND order_no='$track_no'";
                    $run   = mysql_query($query);

                    while($row = mysql_fetch_array($run)){ ?>
                      <tr>
                     
                        <td><?php echo $row['date']; ?></td>
                        <td><?php echo $row["description"];?></td>
                        </tr>  
                        
                  <?php  }
                 } } ?>
                
              </table>
          </div>
      </div>
      </div>
    </div>
      <?php include "php/footer.php"; ?>
	<script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
  <script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>