<?php
  session_start();
  
   if (isset($_SESSION["accesscode"])){
     if ($_SESSION["accesscode"] == "newtaytayiceplant3" || $_SESSION["accesscode"] == "newtaytayiceplant33" || $_SESSION["accesscode"] == "newtaytayiceplant333" || $_SESSION["accesscode"] == "newtaytayiceplant4"){  
  include 'php/db/connect.php';
  include 'php/function.php';



   // echo "<script> alert('". $gender ."'); </script>";
?>
<html>
<head>
	<title>Successful Delivery</title>
	<link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>
	<!-- <link type="text/css" rel="stylesheet" href="css/mystyle.css"> -->
  <link type="text/css" rel="stylesheet" href="css/forms.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
  <link type="text/css" rel="stylesheet" href="css/sidebar.css">
   <link rel="icon" href="img/snowflake.png" type="image/png" />
</head>
<body>
  <?php
    include 'php/header.php';
    include 'php/sidebar.php';
  ?>
    <div class="col s12" style="margin-left: 9%;">
      <div class="container white z-depth-2" style="margin-top: 2%; height:auto; width:78%; padding-top: 1%; padding-bottom: 3%;">
        <div class="row">
          <div class="col s12">
            <h4 style="letter-spacing: 2px;">Successful Deliveries Record</h4>
          <form method="GET" action="" >
          <div id="HR" class="col s12"><br>
        
  
            </form>    
            </div>
           
            
            
              <table class="hoverable responsive-table bordered" style="font-size: 15px;">
                <thead>
                  <tr>
                   
                    <th data-field="name">Customer Name</th>
                    <th data-field="address">Address</th>
                    <th data-field="order">Particulars</th>
                    <th data-field="items">Quantity</th>
                    <th data-field="price">Total Price</th>
                    <th data-field="email">Email</th>
                    <th data-field="order_date">Ordered Date</th>
                    <th data-field="email">Shipped Date</th>
                   
                  </tr>
                </thead>
                <tbody>
                
                
                 <?php 
     
               
                
            $sql = "SELECT * FROM `successful_deliveries`";    
                $result = mysql_query($sql);
                while ($row = mysql_fetch_assoc($result)){
                  
    
             ?>
                
          
                      <tr>
                  
                        <td><?php echo $row['customer_name']; ?></td>
                        <td><?php echo $row['address']; ?></td>
                        <td><?php echo $row['particulars']; ?></td>
                        <td><?php echo $row['quantity']; ?></td>
                        <td><?php echo $row['total_price']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                  
                        <td><?php echo $row['date_order']; ?></td>
                        <td><?php echo $row['date_order']; ?></td>
                   
                      </tr>
                  <?php
                    }
                  
                  ?>
                </tbody>
              </table>
          </div>
          
                </tbody>
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
        echo "<script>alert('Please, login as marketing or production admin!');window.location='index.php'</script>";
        sleep(1);
    }}
    else{
        echo "<script>alert('Please, login as marketing or production admin!');window.location='index.php'</script>";
        sleep(1);
    }
    
?> 