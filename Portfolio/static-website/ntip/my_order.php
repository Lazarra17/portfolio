<?php
  session_start();
   if ($_SESSION["accesscode"] == "newtaytayiceplantcustomer" || $_SESSION["accesscode"] == "newtaytayiceplantemployee"){
  
  include 'php/db/connect.php';
  include 'php/function.php';
  
  
    $email = data_secure($_SESSION["email"]);
  
  if (isset($_GET["cancelled_order_id"])&& isset($_GET["code"])&& isset($_GET["particulars"])&& isset($_GET["qty"])&& isset($_GET["price"])&& isset($_GET["order_date"])){
    $order_id = $_GET["cancelled_order_id"];
    $order_no = data_crypt($_GET["cancelled_order_id"]);
    $code = $_GET["code"];
    $particulars = $_GET["particulars"];
    $quantity = $_GET["qty"];
    $price = $_GET["price"];
    $order_date = $_GET["order_date"];

    if ($order_no == $code){
        
        cancelledOrder($order_id,$email,$particulars,$quantity,$price,$order_date);
        deleteOrder($order_id);
    }else{
        header("Location:my_order.php?Error");
    }
    
  }



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
              <li class="tab col s3"><a href="#pending" class="blue-text active">On-Going Orders</a></li> 
              <li class="tab col s3"><a href="#delivered" class="blue-text">Delivered Orders</a></li>
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
      
                    <th data-field="email">status</th>
                    <th data-field="view" class="centered">Track Order</th>

                    <th data-field="view" class="centered">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $query = "SELECT * FROM `orders` WHERE email = '$email' AND state <> 'delivered'";                    
                  
                    $run   = mysql_query($query);

                    while($row = mysql_fetch_array($run)){ ?>
                      <tr>
                        <td><?php echo $row['order_id']; ?></td>                   
                      
                        <td><?php echo $row['particulars']; ?></td>
                        <td><?php echo $row['items']; ?></td>
                        <td><?php echo $row['price']; ?></td>
                       
                        <td><?php echo $row['order_date']; ?></td>
                      
                        <td><span style="color: red;"><?php echo $row['status']; ?></span></td>
                        <td style="text-align: center;"><a href="order-tracking.php?order_id=<?php echo $row['order_id']; ?>&adsg9oSS0v.MY"><i class=" small mdi-editor-border-color2"></i></a></td>
                    <?php if ($row["status"] == "Unverified"){?>
                       <td style="text-align: left;"><a href="my_order.php?cancelled_order_id=<?php echo $row['order_id'] . "&code=" . data_crypt($row["order_id"]) . 
                       "&particulars=$row[particulars]&qty=$row[items]&price=$row[price]&order_date=$row[order_date]"; ?>&adsg9oSS0v.MY"><i style="color:FF0033" class=" small mdi-navigation-cancel"></i></a></td>
                      <?php } ?>
                       </tr>
                  <?php
                    }
                  ?>
                
              </table>
          </div>
            <div id="delivered" class="col s12"><br>
              <table class="hoverable responsive-table bordered">
                <thead>
                  <tr>
                    <th data-field="id">Order No:</th>
                    <th data-field="order">Particulars</th>
                    <th data-field="items">Quantity</th>
                    <th data-field="price">Price</th>                  
                    <th data-field="order_date">Date of Order</th>
                    <th data-field="order_date">Shipping Order</th>
                    <th data-field="email">status</th>
                    <th data-field="view" class="centered">Tracking No</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $email = data_secure($_SESSION["email"]);
                  $query = "SELECT * FROM `orders` WHERE email = '$email' AND state = 'delivered'";                    
                    $run   = mysql_query($query);

                    while($row = mysql_fetch_array($run)){ ?>
                      <tr>
                        <td><?php echo $row['order_id']; ?></td>                   
                      
                        <td><?php echo $row['particulars']; ?></td>
                        <td><?php echo $row['items']; ?></td>
                        <td><?php echo $row['price']; ?></td>
                       
                        <td><?php echo $row['order_date']; ?></td>
                      <td><?php echo $row['shipped_date']; ?></td>
                        <td><span style="color: red;"><?php echo $row['status']; ?></span></td>
                        <td><a href="order-tracking.php?order_id=<?php echo $row['order_id']; ?>&adsg9oSS0v.MY"><i class=" small mdi-editor-border-color2"></i></a></td>
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
