<?php
  session_start();
  
   if (isset($_SESSION["accesscode"])){
     if ($_SESSION["accesscode"] == "newtaytayiceplant3" || $_SESSION["accesscode"] == "newtaytayiceplant33" || $_SESSION["accesscode"] == "newtaytayiceplant333"|| $_SESSION["accesscode"] == "newtaytayiceplant4"){  
  include 'php/db/connect.php';
  include 'php/function.php';

    if (isset($_GET["orders_id"]) && isset($_GET["name"])){
        $order_no = $_GET["orders_id"];
        $name = $_GET["name"];
        $address = $_GET["address"];
        
        
           	 	 $todayoryt = $_SESSION["time_in_oryt"];
                 $allactivity = auditSelect("activity",$todayoryt);
                 $activity = "Generate a receipt of order no: $order_no for $name at " . date("h:i:sa");
                 $activity = $allactivity . "+" . $activity;    
                 auditActivity($activity,$todayoryt);
                 
                 
            addTodaysDelivery($order_no,$name,$address);
            header("Location: fpdf/receipt.php?orders_id=$order_no&name=$name");   
        
        
    }



   // echo "<script> alert('". $gender ."'); </script>";
?>
<html>
<head>
	<title>Generate Receipt</title>
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
      <div class="container white z-depth-2" style="margin-top: 2%; height:auto;width:70%; padding-top: 1%; padding-bottom: 3%;">
        <div class="row">
          <div class="col s12">
            <ul class="tabs ">
             <li class="tab col s3"><a href="#neworder" class="blue-text active">Generate Receipt</a></li> 
             <li class="tab col s3"><a href="#old" class="blue-text active">All</a></li>
              </ul>
          </div>
          <div id="neworder" class="col s12"><br>
              <table class="hoverable responsive-table bordered">
                <thead>
                  <tr>
                    <th data-field="name">Order No:</th>
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
                        <td><?php echo $row['order_id']; ?></td>   
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
          
          
          
           <div id="old" class="col s12"><br>
              <table class="hoverable responsive-table bordered">
                <thead>
                  <tr>
                    <th data-field="name">Order No:</th>
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
                    $query = "SELECT * FROM `orders` WHERE status ='Verified' AND receipt = 'Created'";
                    $run   = mysql_query($query);

                    while($row = mysql_fetch_array($run)){ ?>
                      <tr>
                        <td><?php echo $row['order_id']; ?></td>   
                        <td><?php echo $row['customer_name']; ?></td>                  
                        <td><?php echo $row['particulars']; ?></td>
                        <td><?php echo $row['items']; ?></td>
                        <td><?php echo $row['price']; ?></td>
                      
                        <td><?php echo $row['order_date']; ?></td>
                        <td><span style="color: green;"><?php echo $row['receipt']; ?></span></td>
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