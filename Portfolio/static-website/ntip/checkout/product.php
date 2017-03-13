<?php
  session_start();
  include '../php/db/connect.php';
  include '../php/function.php';
$type =$product_name= "";
 $order_no = selectOrderNo("order_id") + 1;
 if (isset($_GET["type"])){    
        $type = data_secure($_GET["type"]);
    }
  if(isset($_GET['register-success'])){
    echo "<script> alert('Successfully Register. Please Log in to Continue'); </script>";
  }

  if (isset($_SESSION["email"])){
    $_SESSION["email"];
    
 }   
?>
<html>
<head>
	<title>Check Out</title>
	<link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
	<!-- <link type="text/css" rel="stylesheet" href="css/mystyle.css"> -->
  <link type="text/css" rel="stylesheet" href="../css/forms.css">
   <link type="text/css" rel="stylesheet" href="../css/style.css">
    <link rel="icon" href="img/snowflake.png" type="image/png" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
</head>
<body>
<div class="navbar-fixed">
    <?php if(loggedin()){
      echo "<nav class='white'>";
      }else{
        echo "<nav class='blue darken-4'>";
        } ?>
      <div class="nav-wrapper">
        <ul style="padding-left: 5px; padding-right: 20px;">
          <li><img src="../img/snowflake-icon.png" style="margin-top: 10px;"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
          <li><a href="../index.php" >Home</a></li>
        
          
          
                                                  
          <?php
         if(loggedin3()){ //userdata2 customer userdata users
              $username = userData4('username');
              echo "<li class='right'><a style = 'margin-top: 15px; margin-left: 20px;' class='dropdown-button btn blue darken-4' href='#' data-activates='dropdown1'>Settings</a></li>";
                echo "<ul id='dropdown1' class='dropdown-content text-blue' style='margin-top: 50px;'>";
                  echo "<li class='right border:0px'><a href='../php/logout.php'>Logout</a></li>";
                echo "</ul>";
                echo "<li class='right blue-text' style='font-weight: bold;'><u>Logged in as ". $username ."</u></li>";
                   echo " <li class='right blue-text'><img src='../img/shipping.png'  style='margin-top: 10px;height:43px;width:70px;'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>";
                echo " <li class='right blue-text'><img src='../img/cod.png'  style='margin-top: 10px;height:43px;width:70px;'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>";

            }
            
            
            else{
             
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
    
    if (isset($_POST["submit"])){
        $total = data_secure($_POST["total"]);
        $methods = data_secure($_POST["methods"]);
        $unitprice = data_secure($_POST["price"]);
        $description = "Your order has been received and going on through verification.  Please wait until your order has been verified.  Thank you for buying from us.";
        
        if (empty($type)){
        $quantity = data_secure($_POST["quantity"]);
        header("location: shippingdelivery.php?product_no=$product_no&quantity=$quantity");
          }else{
            $quantity = data_secure($_POST["quantity"]);
            $sql = "SELECT * FROM customer WHERE email= '".$_SESSION['email']."'";
            $result = mysql_query($sql);
            while ($row = mysql_fetch_array($result)){
               $fullname = $row["fname"] ." ". $row["lname"];
                $address = $row["address"];
                $email = $row["email"];
                $contact =$row["contact"];
                
    }
    
  
    $sqlemp = "SELECT * FROM employee WHERE email= '" . $_SESSION['email']."'";
    $resultemp = mysql_query($sqlemp);
    while ($rowemp = mysql_fetch_array($resultemp)){
       $fullnameemp = $rowemp["first_name"] ." ". $rowemp["last_name"];
        $addressemp = $rowemp["address"];
        $emailemp = $rowemp["email"];
        $contactemp =$rowemp["contact"];
        
    }
    
    
    
    
    
    
    
    $sql2 = "SELECT * FROM `products` WHERE product_no=$product_no";
    $result2 = mysql_query($sql2);
    while ($row2 = mysql_fetch_array($result2)){
     
        $product_name = $row2["product_name"];
        $unit = $row2["unit"];  
      //  $particulars = $row2["unit"];  
    }
     
if (isset($_SESSION["emp_id_no"])){
  addOrderEmployee($order_no,$fullnameemp,$addressemp,$product_name,$quantity,$unitprice,$total,$emailemp,$contactemp,$methods);  

  
    $to = $emailemp;
    $tracking_no = orderTracking("order_id");
    addUpdate($tracking_no,$emailemp, $description);
    sendOrderTrackingNo($to,$tracking_no);
    
}
else
{
   addOrderCustomer($order_no,$fullname,$address,$product_name,$quantity,$unitprice,$total,$email,$contact,$methods); 
   
   
   $to = $email;
   $tracking_no = orderTracking("order_id");
   addUpdate($tracking_no,$email, $description);
       
sendOrderTrackingNo($to,$tracking_no);

         
    
  
    
}
    
    
    }
    
    }
    
    ?>
    
	<div class="container login z-depth-2" style="width: 800px;">
    <form action= "#" method="post" class="col s12"> 
      <div class="login-title"> 
        <h5 class="center-align">ORDERS <?php ?> </h5>
      </div>
      
      <div class="row" style="padding-top: 15px;">
        
          <?php
            $sql = "SELECT * FROM products WHERE product_no='$product_no'";
            $result = mysql_query($sql);
            while ($rows = mysql_fetch_assoc($result)){
         
  
  ?>
        <div id="displayproduct" style="float: left;">
        <img src="../<?php echo $rows["product_picture"]?>"/><h6><?php echo $rows["product_name"]?> / <span style="color: lime;"> In stock</span></h6><h6>&#8369 <?php echo $rows["price"]?>  / <?php echo $rows["unit"]?></h6>
       
        
        </div>
       
        <div id="information" style="color:black">
       <table style="border: 1px solid black;width:400px"> 
       <thead>
       <th>Method of Payment</th>
       <th>Price</th>
       <th>Quantity</th>
       <th>Subtotal</th>
       </thead>
       <tbody>
          <td><input type="text" id="methods" name="methods"  readonly="" style="width: 120px; color:black;" value="Cash on Delivery"/></td> 
       <td ><input type="text" id="price" name="price" readonly="" value="<?php echo $rows['price']?>" style="width: 50px; color:black;"/></td><?php }?>
       <td>
        <input type="text" id="quantity" class="validate" name="quantity" onkeyup="subtotal()" style="width: 50px;"/> </td>
       <td><input type="text" name="total" id="total" readonly="" style="width: 50px; color:black;"/></td>
         
       </tbody>
       
       </table>
      <div id="summary" style="float: left;">
      <h6>Subtotal:</h6>
      <h6>Shipping Fee: </h6>
      <h6 style="color: red;">VAT Included</h6>
      <h5>Total:</h5>
      </div>
      <div id="summary" style="float: right;margin-right:80px;">
      <h6 id="sSubTotal"></h6>
      <h6 id="shipping"></h6>
       <h6 id="">&nbsp;</h6>
      <h5 id="sTotal"></h5>
      </div>
        </div>
        
        <div style="clear: both;"></div>
        <button name="submit" class="medium btn waves-effect waves-light blue darken-3 right" style="margin-right: 25px;" href="shippingdelivery.php?product_no=<?php echo $product_no;?>&quantity=<?php echo $quantity?>">
            <?php if (empty($type)){echo "Continue ";}else {echo "Checkout";}?>
          <i class="mdi-content-send right"></i>
          </button>
        
        
          </div>

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