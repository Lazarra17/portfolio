<?php
  session_start();
  
    if ($_SESSION["accesscode"] == "newtaytayiceplantcustomer" || $_SESSION["accesscode"] == "newtaytayiceplantemployee"){
  
  include 'php/db/connect.php';
  include 'php/function.php';



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
   <link rel="icon" href="img/snowflake.png" type="image/png" />
</head>
<body>
  <?php
 
   if (isset($_SESSION["customer_id"])){
    $customer_id_id = data_secure($_SESSION["customer_id"]);
  }
  
    include 'php/header.php';
 if (isset($_SESSION["emp_id_no"])){
  include 'php/sidebar.php';
  }else{
     include 'php/sidebarcustomer.php';
  }
    
  ?>
    <div class="col s12" style="margin-left: 8%;">
      <div class="container white z-depth-2" style="margin-top: 2%; height:auto; padding-top: 1%; padding-bottom: 3%;">
        <div class="row">
          <div class="col s12">
            <ul class="tabs ">
            
              <li class="tab col s3"><a href="#pending" class="blue-text active">Cancelled Orders</a></li> 
             
            </ul>
          </div>
          <div id="pending" class="col s12"><br>
              <table class="hoverable responsive-table bordered">
            (Note: You can cancel your orders as long as it has not yet been verified)
                <thead>
                  <tr>
                    <th data-field="id">Order No:</th>
                    <th data-field="order">Particulars</th>
                    <th data-field="items">Quantity</th>
                    <th data-field="price">Price</th>                  
                    <th data-field="order_date">Date of Order</th>
                    <th data-field="email">Status</th>
                    
                  </tr>
                </thead>
                <tbody>
                  <?php
                  
                  $email = $_SESSION["email"];
                  $query = "SELECT * FROM `orders_cancelled` WHERE email = '$email'";                    
                    $run   = mysql_query($query);

                    while($row = mysql_fetch_array($run)){ ?>
                      <tr>
                        <td><?php echo $row['order_no']; ?></td>                   
                      
                        <td><?php echo $row['particulars']; ?></td>
                        <td><?php echo $row['quantity']; ?></td>
                        <td><?php echo $row['total_price']; ?></td>
                       
                        <td><?php echo $row['ordered_date']; ?></td>
                       
                        <td><span style="color: red;"><?php echo $row['status']; ?></span></td>
                      </tr>
                  <?php
                    }
                  ?>
                
              </table>
          </div>
      </div>
      </div>
    </div>
	<script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
  <script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>


 <?php
 }
 
    else {
        echo "<script>alert('Login first!');window.location='index.php'</script>";
        sleep(1);
    }
    
?>  