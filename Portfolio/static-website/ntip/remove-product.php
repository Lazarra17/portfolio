<?php
  session_start();
  
    if (isset($_SESSION["accesscode"])){
     if ($_SESSION["accesscode"] == "newtaytayiceplant2" || $_SESSION["accesscode"] == "newtaytayiceplant22" || $_SESSION["accesscode"] == "newtaytayiceplant4"){  
        
  include 'php/db/connect.php';
  include 'php/function.php';


    
  if (isset($_GET["delete"])){
                      $product_no = $_GET["delete"];
                       $product_name = $_GET["product_name"];
                       deleteProduct($product_no);
                       
           	 	 $todayoryt = $_SESSION["time_in_oryt"];
                 $allactivity = auditSelect("activity",$todayoryt);
                 $activity = "Deleted a product record: Product no: $product_no, Product Name: $product_name at " . date("h:i:sa");
                 $activity = $allactivity . "+" . $activity;    
                 auditActivity($activity,$todayoryt);
               
    }

   // echo "<script> alert('". $gender ."'); </script>";
?>
<html>
<head>
	<title>Search - Customer</title>
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
    <div class="col s12" style="margin-left: 6%;">
      <div class="container white z-depth-2" style="margin-top: 2%; height:auto; width:70%; padding-top: 1%; padding-bottom: 3%;">
        <div class="row">
          <div class="col s12">
            <h4 style="letter-spacing: 2px;">Delete Product Record</h4>
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
                    <th data-field="id">Product No</th>
                    <th data-field="name">Product Name</th>
                    <th data-field="gender">Product Picture</th>
                    <th data-field="address">Unit</th>
                    <th data-field="contact">Price</th>
                    <th data-field="contact">Action</th>
                    
                  </tr>
                </thead>
                <tbody>
                
                
                 <?php 
            if (isset($_GET["submit"])){
                //$searchby = $_GET["searchby"]; 
                $search = data_secure($_GET["find"]);
                
            $sql = "SELECT * FROM `products` WHERE product_no = '$search' OR product_name = '$search' ";    
                $result = mysql_query($sql);
                
                if (mysql_num_rows($result) >= 1){
                
                while ($row = mysql_fetch_assoc($result)){
                  
    
             ?>
                
          
                      <tr>
                        <td><?php echo $row['product_no']; ?></td>
                        <td><?php echo $row['product_name']; ?></td>
                        <td><img src="<?php echo $row['product_picture'];?>" style="width: 110px;height:70px"></td>
                        <td><?php echo $row['unit']; ?></td>
                        <td><?php echo $row['price']; ?></td>
                        <td><a href="remove-product.php?delete=<?php echo"$row[product_no]" . "&product_name=$row[product_name]";?>" style="color: red;"><?php echo "Delete" ?></td>
                      </tr>
                  <?php
                    }
                    
                  }else
                  {
                    echo "<script>alert('No records found');</script>";
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
        echo "<script>alert('Please, login as marketing admin!');window.location='index.php'</script>";
        sleep(1);
    }}
    else{
        echo "<script>alert('Please, login as marketing admin!');window.location='index.php'</script>";
        sleep(1);
    }
    
?> 