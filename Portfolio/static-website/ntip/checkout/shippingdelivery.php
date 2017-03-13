<?php
  session_start();
  include '../php/db/connect.php';
  include '../php/function.php';
   $order_no = selectOrderNo("order_id") + 1;
  if(isset($_POST['submit'])){

  
    $fname     = data_secure($_POST['fname']);
    $lname     = data_secure($_POST['lname']);
    $email     = data_secure($_POST['email']);
    $city       = data_secure($_POST['city']);
    $gender     = data_secure($_POST['gender']);
    $address  = data_secure($_POST['address']);
    $contact  = data_secure($_POST['contact']);
    $quantity  = data_secure($_POST['quantity']);
    $total  = data_secure($_POST['total']);
    $product_name = data_secure($_POST['particulars']);
    $unitprice = data_secure($_POST['unitprice']);
    
    $fullname = $fname . " " . $lname;
    $methods = "Cash on Delivery";
     $description = "Your order has been received and going on through verification.  Please wait until your order has been verified.  Thank you for buying from us.";
       
              
    

            

    
    
    if(!empty($address) && !empty($contact) && !empty($fname)&& !empty($lname)&& !empty($email)&& !empty($gender)&& !empty($city)){
      if(!is_numeric($contact)){
        echo "<script> alert('Invalid Contact number'); </script>";
      }else{
        addNewCustomer($fname,$lname,$email,$gender, $city, $address, $contact);
        addOrderCustomer($order_no,$fullname,$address,$product_name,$quantity,$unitprice,$total,$email,$contact,$methods);
          
          
          
          $to = $email;
          $tracking_no = orderTracking("order_id");
         
        addUpdate($tracking_no,$email, $description);
        sendOrderTrackingNo($to,$tracking_no);
          
        
      }
    }
  }

?>
<html>
<head>
	<title>Shipping Delivery</title>
	<link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
	<!-- <link type="text/css" rel="stylesheet" href="css/mystyle.css"> -->
  <link type="text/css" rel="stylesheet" href="../css/forms.css">
  <link type="text/css" rel="stylesheet" href="../css/style.css">
   <link rel="icon" href="img/snowflake.png" type="image/png" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
</head>
<body onload="subtotal()">

 
<div class="navbar-fixed">
    <?php if(loggedin()){
      echo "<nav class='white'>";
      }else{
        echo "<nav class='blue darken-4'>";
        } ?>
      <div class="nav-wrapper">
        <ul style="padding-left: 5px; padding-right: 20px;">
          <li><img src="../img/snowflake-icon.png" style="margin-top: 10px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
          <li><a href="../index.php" >Home</a></li>
          <?php
            if(loggedin2()){
              $username = userData2('username');
              echo "<li class='right'><a style = 'margin-top: 15px; margin-left: 20px;' class='dropdown-button btn blue darken-4' href='#' data-activates='dropdown1'>Settings</a></li>";
                echo "<ul id='dropdown1' class='dropdown-content text-blue' style='margin-top: 50px;'>";
                  echo "<li class='right border:0px'><a href='php/logout.php'>Logout</a></li>";
                echo "</ul>";
                echo "<li class='right blue-text' style='font-weight: bold;'><u>Logged in as ". $username ."</u></li>";
            }elseif(loggedin()){
              $username = userData('username');
              echo "<li class='right'><a style = 'margin-top: 15px; margin-left: 20px;' class='dropdown-button btn blue darken-4' href='#' data-activates='dropdown1'>Settings</a></li>";
                echo "<ul id='dropdown1' class='dropdown-content text-blue' style='margin-top: 50px;'>";
                  echo "<li class='right border:0px'><a href='php/logout.php'>Logout</a></li>";
                echo "</ul>";
                echo "<li class='right blue-text' style='font-weight: bold;'><u>Logged in as ". $username ."</u></li>";
            }else{
             
            }   
          ?>
        </ul>
      </div>
    </nav>
  </div>
  
    <?php 
    if (isset($_GET["product_no"])){
        
        $product_no = data_secure($_GET["product_no"]);
    }
    ?>
    
	<div class="container login z-depth-2" style="width: 800px;height: auto;margin-top: 10px;">
    <form action= "#" method="post" class="col s12"> 
      <div class="login-title"> 
        <h5 class="center-align">Order Summary </h5>
      </div>
      
      <div class="row" style="padding-top: 15px;">
        
          <?php
            $sql = "SELECT * FROM products WHERE product_no='$product_no'";
            $result = mysql_query($sql);
            while ($rows = mysql_fetch_assoc($result)){
    
  
  ?>
        <div id="displayproduct" style="float: left;">
        <img src="../<?php echo $rows["product_picture"]?>"/><h6><?php echo $rows["product_name"]?> / <span style="color: lime;"> In stock</span></h6><h6>&#8369 <?php echo $rows["price"]?>  / <?php echo $rows["unit"]?></h6>
       <input type="hidden" name="particulars" value="<?php echo $rows["product_name"]?>" />
        
        </div>
       
        <div id="information" style="color:black">
       <table style="border: 1px solid black;width:400px"> 
       <thead>
       <th>Price</th>
       <th>Quantity</th>
       <th>Subtotal</th>
       </thead>
       <tbody>
       
       <td ><input type="text" id="price" name="unitprice" readonly="" value="<?php echo $rows['price']?>" style="width: 50px; color:black;"/></td><?php }?>
       <td>
        <input type="text" id="quantity" readonly="" name="quantity"  style="width: 50px;color:black" value="<?php echo $_GET["quantity"];?>"/> </td>
       <td><input type="text" id="total" readonly="" name="total"  style="width: 50px; color:black;"/></td>
             
       </tbody>
       
       </table>
      <div id="summary" style="float: left;">
      <h6>Subtotal:</h6>
      <h6>Shipping Fee: </h6>
      <h6  style="color: red;">VAT Included</h6>
      <h5>Total:</h5>
      </div>
      <div id="summary" style="float: right;margin-right:80px;">
      <h6 id="sSubTotal"></h6>
      <h6 id="shipping"></h6>
      <h6 id="">&nbsp;</h6>
      <h5 id="sTotal"></h5>
      </div>
        </div>
       
      </div>
       
       <div class="login-title"> 
        <h5 class="center-align" style="border-top: 1px solid gray;margin-bottom:10px;padding-top: 20px;">Shipping Delivery</h5>
      </div>
       
          <div class="row">
          
           <div class="input-field col s6">
                <i class="small mdi-social-person prefix black-text"></i>
                <input id="username" type="text" class="validate" name="fname"  require required maxlength="15"  >
                <label for="First Name">First Name</label>
            </div>
             <div class="input-field col s6">
                <i class="small mdi-social-person prefix black-text"></i>
                <input id="username" type="text" class="validate" name="lname"  require required maxlength="15"  >
                <label for="Last Name">Last Name</label>
            </div>
          
             
          
            <div class="input-field col s6">
                <i class="small mdi-social-person prefix black-text"></i>
                <input id="email" type="text" class="validate" name="email"  require required maxlength="30" >
                <label for="Email">Email</label>
            </div>
                        
           <div class="input-field col s6">
                 <i class="mdi-maps-store-mall-directory prefix black-text" ></i>
                <input id="city" type="text" class="validate" name="city"  require required maxlength="30" >
                <label for="city">City / Municipality</label>
            </div>
           
            <div class="input-field col s12">
                <i class="mdi-maps-store-mall-directory prefix black-text" ></i>
                <input id="address" type="text" class="validate" name="address" require required maxlength="50" value="">
                <label for="address">Address</label>
            </div>
             <div class="input-field col s6 center" style="margin-top: 1%;">
                <i style="color: black;">* Gender</i>
                <input type="radio" class="filled-in" id="male" name="gender" value="Male">
                <label for="male">Male</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="radio" class="filled-in" id="female" name="gender" value="female">
                <label for="female">Female</label>
            </div><br /><br />
             <div class="input-field col s6">
                <i class="small mdi-social-person prefix black-text"></i>
                <input id="contact" type="text" class="validate" name="contact"  require required maxlength="30" >
                <label for="Contact">Contact</label>
            </div>
        
          <button class="medium btn waves-effect waves-light blue darken-3 right" type="submit" name="submit" style="margin-right: 25px;">
            Submit 
          <i class="mdi-content-send right"></i>
          </button>
      </div>
    </form>
  </div>

	

    <script>
    function subtotal(){
        document.getElementById("total").value = document.getElementById("price").value * document.getElementById("quantity").value;
        
        document.getElementById("sSubTotal").innerHTML = document.getElementById("total").value;
        document.getElementById("shipping").innerHTML = "0.00";
         document.getElementById("sTotal").innerHTML = document.getElementById("total").value;
    }
    
    </script>



  

	<script type="text/javascript" src="../js/jquery-2.1.1.min.js"></script>
  <script type="text/javascript" src="../js/materialize.min.js"></script>
</body>
</html>