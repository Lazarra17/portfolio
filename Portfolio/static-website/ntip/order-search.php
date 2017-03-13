<?php
  session_start();
     if (isset($_SESSION["accesscode"])){
     if ($_SESSION["accesscode"] == "newtaytayiceplant2" || $_SESSION["accesscode"] == "newtaytayiceplant3" || $_SESSION["accesscode"] == "newtaytayiceplant22" || $_SESSION["accesscode"] == "newtaytayiceplant33" || $_SESSION["accesscode"] == "newtaytayiceplant333" || $_SESSION["accesscode"] == "newtaytayiceplant4"){  
  include 'php/db/connect.php';
  include 'php/function.php';



   // echo "<script> alert('". $gender ."'); </script>";
?>
<html>
<head>
	<title>Search - Order</title>
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
    <div class="col s12" style="margin-left: 10%;">
      <div class="container white z-depth-2" style="margin-top: 2%; height:auto; width:80%; padding-top: 1%; padding-bottom: 3%;">
        <div class="row">
          <div class="col s12">
            <h4 style="letter-spacing: 2px;">Search Order Record</h4>
          <form method="GET" action="" >
          <div id="HR" class="col s12"><br>
        
            
           <div class="input-field col s4">
                <i class="small mdi-social-person prefix black-text"></i>
                <input id="find" type="text" class="validate" name="find"  require required maxlength="50">
                <label for="find records">* Find Records </label>
            </div>
           
            
              <div class="input-field col s4">
              <button class="medium btn waves-effect waves-light blue darken-3 left" type="submit" name="submit" style="margin-right: 25px;">
            Find
          <i class="mdi-content-send right"></i>
          </button>
            </form>    
            </div>
           
            
            
              <table class="hoverable responsive-table bordered" style="font-size: 15px;">
                <thead>
                  <tr>
                    <th data-field="id">Order No</th>
                    <th data-field="name">Customer Name</th>
                    <th data-field="address">Address</th>
                    <th data-field="order">Order</th>
                    <th data-field="items">Items</th>
                    <th data-field="price">Price</th>
                    <th data-field="contact">Contact</th>
                    <th data-field="order_date">Ordered Date</th>
                    <th data-field="email">Shipped Date</th>
                    <th data-field="email">status</th>
                  </tr>
                </thead>
                <tbody>
                
                
                 <?php 
            if (isset($_GET["submit"])){
                //$searchby = $_GET["searchby"]; 
                $search = data_secure($_GET["find"]);
                
           	 	 $todayoryt = $_SESSION["time_in_oryt"];
                 $allactivity = auditSelect("activity",$todayoryt);
                 $activity = "Searched an order record: $search at" . date("h:i:sa");
                 $activity = $allactivity . "+" . $activity;    
                 auditActivity($activity,$todayoryt);
                
                
                
            $sql = "SELECT * FROM `orders` WHERE customer_name = '$search' OR customer_address='$search' OR particulars='$search' OR items='$search' OR price='$search' 
            OR email='$search' OR order_date='$search' OR status='$search' ";    
                $result = mysql_query($sql);
                while ($row = mysql_fetch_assoc($result)){
                  
    
             ?>
                
          
                      <tr>
                        <td><?php echo $row['order_id']; ?></td>
                        <td><?php echo $row['customer_name']; ?></td>
                        <td><?php echo $row['customer_address']; ?></td>
                        <td><?php echo $row['particulars']; ?></td>
                        <td><?php echo $row['items']; ?></td>
                        <td><?php echo $row['price']; ?></td>
                        <td><?php echo $row['contacts']; ?></td>
                        <td><?php echo $row['order_date']; ?></td>
                        <td><?php echo $row['shipped_date']; ?></td>
                        <td><span style="color: red;"><?php echo $row['status']; ?></span></td>
                      </tr>
                  <?php
                    }
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