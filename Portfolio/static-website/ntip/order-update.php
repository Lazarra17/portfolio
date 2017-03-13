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
	<title>Update - Order</title>
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
      <div class="container white z-depth-2" style="margin-top: 2%; height:auto;width:75%; padding-top: 1%; padding-bottom: 3%;">
        <div class="row">
          <div class="col s12">
            <ul class="tabs ">
            <?php   if ($_SESSION["user_id"] == 3 || $_SESSION["user_id"] == 4 || $_SESSION["user_id"] == 333){ ?>
             <li class="tab col s3"><a href="#neworder" class="blue-text active">New Orders</a></li> <?php }?>
              <?php   if ($_SESSION["user_id"] == 3 ||$_SESSION["user_id"] == 4 || $_SESSION["user_id"] == 33){ ?>
              <li class="tab col s3"><a href="#receipt" class="blue-text active">Generate Receipt</a></li> 
              <li class="tab col s3"><a href="#ship" class="blue-text active">Ship Orders</a></li> 
              <li class="tab col s3"><a href="#completeorder" class="blue-text active">Complete Order</a></li> 
              <li class="tab col s3"><a href="#complete" class="blue-text active">Orders Completed</a></li> 
              
              <?php }?>
            </ul>
        
                  
            
             <?php   if ($_SESSION["user_id"] == 3 || $_SESSION["user_id"] == 4 || $_SESSION["user_id"] == 333){ ?>
           <div id="neworder" class="col s12"><br>
              <table class="hoverable responsive-table bordered">
                <thead>
                  <tr>
                    <th data-field="id">Client ID</th>
                    <th data-field="name">Customer Name</th>
                    <th data-field="order">Order</th>
                    <th data-field="items">Items</th>
                    <th data-field="price">Price</th>

                    <th data-field="order_date">Ordered Date</th>
                    <th data-field="email">Shipped Date</th>
                    <th data-field="email">status</th>
                    <th data-field="price" class="centered">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    $query = "SELECT * FROM `orders` WHERE rank='new' OR status = 'Unverified'";
                    $run   = mysql_query($query);

                    while($row = mysql_fetch_array($run)){ ?>
                      <tr>
                        <td><?php echo $row['order_id']; ?></td>
                        <td><?php echo $row['customer_name']; ?></td>                  
                        <td><?php echo $row['particulars']; ?></td>
                        <td><?php echo $row['items']; ?></td>
                        <td><?php echo $row['price']; ?></td>

                        <td><?php echo $row['order_date']; ?></td>
                        <td><?php echo $row['shipped_date']; ?></td>
                        <td><span style="color: red;"><?php echo $row['status']; ?></span></td>
                        <td><a href="order-update-confirm.php?orders_id=<?php echo $row['order_id']; ?>"><i class=" small mdi-editor-border-color"></i></a></td>
                      </tr>
                  <?php
                    }}
                  ?>
                
              </table>
          </div>
                
                  
                    
           <?php   if ($_SESSION["user_id"] == 3 || $_SESSION["user_id"] == 4 || $_SESSION["user_id"] == 33){ ?>
          <div id="ship" class="col s12"><br>
              <table class="hoverable responsive-table bordered">
                <thead>
                  <tr>
                    <th data-field="id">Client ID</th>
                    <th data-field="name">Customer Name</th>
                    <th data-field="order">Order</th>
                    <th data-field="items">Items</th>
                    <th data-field="price">Price</th>

                    <th data-field="order_date">Ordered Date</th>
                    <th data-field="email">Shipped Date</th>
                    <th data-field="email">status</th>
                    <th data-field="price" class="centered">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    $query = "SELECT * FROM `orders` WHERE receipt = 'Created' AND status = 'verified' AND shipped_date IS NULL";
                    $run   = mysql_query($query);

                    while($row = mysql_fetch_array($run)){ ?>
                      <tr>
                        <td><?php echo $row['order_id']; ?></td>
                        <td><?php echo $row['customer_name']; ?></td>                  
                        <td><?php echo $row['particulars']; ?></td>
                        <td><?php echo $row['items']; ?></td>
                        <td><?php echo $row['price']; ?></td>

                        <td><?php echo $row['order_date']; ?></td>
                        <td><?php echo $row['shipped_date']; ?></td>
                        <td><span style="color: red;"><?php echo $row['status']; ?></span></td>
                        <td><a href="order-update-confirm.php?orders_id=<?php echo $row['order_id']; ?>"><i class=" small mdi-editor-border-color"></i></a></td>
                      </tr>
                  <?php
                    }
                  ?>
                
              </table>
          </div>
          
          
           <div id="receipt" class="col s12"><br>
              <table class="hoverable responsive-table bordered">
                <thead>
                  <tr>
                    
                    <th data-field="name">Customer Name</th>
                    <th data-field="order">Order</th>
                    <th data-field="items">Items</th>
                    <th data-field="price">Price</th>
                    <th data-field="order_date">Ordered Date</th>
                    <th data-field="order_date">Receipt</th>
                    <th data-field="email">status</th>
                    <th data-field="price" class="centered">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    $query = "SELECT * FROM `orders` WHERE status ='Verified' AND receipt = 'None'";
                    $run   = mysql_query($query);

                    while($row = mysql_fetch_array($run)){ ?>
                      <tr>
                    
                        <td><?php echo $row['customer_name']; ?></td>                  
                        <td><?php echo $row['particulars']; ?></td>
                        <td><?php echo $row['items']; ?></td>
                        <td><?php echo $row['price']; ?></td>
                      
                        <td><?php echo $row['order_date']; ?></td>
                        <td><?php echo $row['receipt']; ?></td>
                        <td><span style="color: red;"><?php echo $row['status']; ?></span></td>
                        <td>
                                      
                        <a href="receipt.php?orders_id=<?php echo $row['order_id'] . "&name=$row[customer_name]&address=$row[customer_address]"; ?>"><label class="medium btn waves-effect waves-light blue darken-3 left">Generate</a>
                        
                        </td>
                      </tr>
                  <?php
                    }
                  ?>
                
              </table>
          </div>
          
          
          
          <?php ?>
          
           <?php  } if ($_SESSION["user_id"] == 3 ||$_SESSION["user_id"] == 4 ||  $_SESSION["user_id"] == 33){ ?>
     <div id="completeorder" class="col s12"><br>
              <table class="hoverable responsive-table bordered">
                <thead>
                  <tr>
                    <th data-field="id">Client ID</th>
                    <th data-field="name">Customer Name</th>
                    <th data-field="order">Order</th>
                    <th data-field="items">Items</th>
                    <th data-field="price">Price</th>

                    <th data-field="order_date">Ordered Date</th>
                    <th data-field="email">Shipped Date</th>
                    <th data-field="email">status</th>
                    <th data-field="price" class="centered">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    $query = "SELECT * FROM `orders` WHERE state <> 'Delivered' AND shipped_date <> '0000-00-00' AND status='Verified'";
                    $run   = mysql_query($query);

                    while($row = mysql_fetch_array($run)){ ?>
                      <tr>
                        <td><?php echo $row['order_id']; ?></td>
                        <td><?php echo $row['customer_name']; ?></td>                  
                        <td><?php echo $row['particulars']; ?></td>
                        <td><?php echo $row['items']; ?></td>
                        <td><?php echo $row['price']; ?></td>

                        <td><?php echo $row['order_date']; ?></td>
                        <td><?php echo $row['shipped_date']; ?></td>
                        <td><span style="color: red;"><?php echo $row['status']; ?></span></td>
                        <td><a href="order-update-confirm.php?orders_id=<?php echo $row['order_id']; ?>"><i class=" small mdi-editor-border-color"></i></a></td>
                      </tr>
                  <?php
                    }
                  ?>
                
              </table>
          </div>
          <?php }?>
     
      <?php   if ($_SESSION["user_id"] == 3 || $_SESSION["user_id"] == 4 || $_SESSION["user_id"] == 33){ ?>
     <div id="complete" class="col s12"><br>
              <table class="hoverable responsive-table bordered">
                <thead>
                  <tr>
                    <th data-field="id">Client ID</th>
                    <th data-field="name">Customer Name</th>
                    <th data-field="order">Order</th>
                    <th data-field="items">Items</th>
                    <th data-field="price">Price</th>

                    <th data-field="order_date">Ordered Date</th>
                    <th data-field="email">Shipped Date</th>
                    <th data-field="email">status</th>
                    <th data-field="price" class="centered">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    $query = "SELECT * FROM `orders` WHERE state='Delivered'";
                    $run   = mysql_query($query);

                    while($row = mysql_fetch_array($run)){ ?>
                      <tr>
                        <td><?php echo $row['order_id']; ?></td>
                        <td><?php echo $row['customer_name']; ?></td>                  
                        <td><?php echo $row['particulars']; ?></td>
                        <td><?php echo $row['items']; ?></td>
                        <td><?php echo $row['price']; ?></td>

                        <td><?php echo $row['order_date']; ?></td>
                        <td><?php echo $row['shipped_date']; ?></td>
                        <td><span style="color: red;"><?php echo $row['status']; ?></span></td>
                        <td><a href="order-update-confirm.php?orders_id=<?php echo $row['order_id']; ?>"><i class=" small mdi-editor-border-color"></i></a></td>
                      </tr>
                  <?php
                    }
                  ?>
                
              </table>
          </div>
          <?php }?>
          
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
        echo "<script>alert('Please, login as production admin!');window.location='index.php'</script>";
        sleep(1);
    }}
    else{
        echo "<script>alert('Please, login as production admin!');window.location='index.php'</script>";
        sleep(1);
    }
    
?> 