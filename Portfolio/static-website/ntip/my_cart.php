<?php
  session_start();
  include 'php/db/connect.php';
  include 'php/function.php';
  
if (isset($_SESSION["accesscode"])){
 if ($_SESSION["accesscode"] == "newtaytayiceplant1" || $_SESSION["accesscode"] == "newtaytayiceplant2" || $_SESSION["accesscode"] == "newtaytayiceplant3"
    || $_SESSION["accesscode"] == "newtaytayiceplant11" || $_SESSION["accesscode"] == "newtaytayiceplant22" || $_SESSION["accesscode"] == "newtaytayiceplant33"  
    || $_SESSION["accesscode"] == "newtaytayiceplant4"){
    header("Location:index.php");
    }}
    

  




 if (isset($_SESSION["email"])){
            $email = $_SESSION["email"];

       $sql = "SELECT * FROM cart WHERE email = 'guest' LIMIT 10";
       $count = 1;
       $count2 = 2; 
       $result = mysql_query($sql);
       if (mysql_num_rows($result) == 0){
        echo "<script>alert('There are no items in this cart');window.location = 'index.php'</script>";
        
        }
    }

   $ip = "";
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
    $ip = $_SERVER['REMOTE_ADDR'];
    }
    
    
     if (isset($_POST["shop"])){
    header("Location: index.php");
 }
 
 
  $methods = "Cash on Delivery";
     $description = "Your order has been received and going on through verification.  Please wait until your order has been verified.  Thank you for buying from us.";
       
              
     $order_no = selectOrderNo("order_id") + 1;
 
 
 
 
 
    

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
<body onload="subtotal()">
  <?php
    include 'php/header.php';
 if (isset($_SESSION["emp_id_no"])){
  include 'php/sidebar.php';
  }elseif (isset($_SESSION["customer_id"])){
     include 'php/sidebarcustomer.php';
  }
  ?>
    <div class="col s12" style="margin-left: <?php if(isset($_SESSION["email"])){echo "9%";} else{ echo "5%";} ?>;">
      <div class="container white z-depth-2" style="margin-top: 2%; height:110%; padding-top: 1%; padding-bottom: 1%;">
       <form action= "#" method="post" class="col s12"> 
      <div class="login-title"> 
        <h5 class="center-align">MY CART <?php ?> </h5>
      </div>
      
      <div class="row" style="padding-top: 15px;">
        
        
      
       
        <div id="information" style="color:black">
       <table style="width:90%; margin: auto;"> 
       <thead>
      <th>&nbsp;</th>
       <th width ="140">Price</th>
       <th width ="140">Quantity</th>
       <th width ="140">Subtotal</th>
       </thead>
       </table>
       <div style="height: 300px; overflow-y: auto;">
 <table style="width:90%; margin: auto;"> 
       
       <tbody>
     
       <?php
         $code = data_crypt($ip);
        if (isset($_SESSION["email"])){
            $email = $_SESSION["email"];

           $sql = "SELECT * FROM cart WHERE client_ip='$ip' LIMIT 10";
       $count = 1;
       $count2 = 2; 
       $result = mysql_query($sql);
       if (mysql_num_rows($result) >=1){
       while ($row = mysql_fetch_array($result)){
        $quantity= $row["quantity"];
       ?>
       
      <tr>
       <td>
       
        
        <img src="<?php echo $row["product_picture"]?>" style="width:160px;height:100px;" />
       <input type="hidden" name="particular<?php echo $count?>" id="particular" value="<?php echo $row["product_name"]?>" />
        <input type="hidden" name="product_no<?php echo $count?>" value="<?php echo $row["product_no"]?>"/>
                
        <p style="font-weight: bold;margin:0px;padding:0px;"><?php echo $row["product_name"]?></p>
        <p style="margin: 0px;font-size:13px;"> <span style="color: lime;margin:0px">In stock / </span> <a href="my_cart.php?product_no=<?php echo $row["product_no"] . "&code=$code"?>">Remove Item</a></p>       
       </td>
       <td  width = "70"></td>
           <td>&#8369<input type="text" id="price<?php echo $count?>" name="unitprice<?php echo $count?>" readonly="" value="<?php echo $row["product_price"]?>" style="width: 50px; color:black;"/></td>
       <td >
         
        <select class="browser-default black-text col s8" onchange="subtotal()" id="quantity<?php echo $count?>" name="quantity<?php echo $count?>" require required> 
            
            <?php 
            for ($num = 1; $num <=99; $num++){
                 echo " <option value='$num' >$num</option> ";  
                if ($num == $quantity){$select="selected";
                echo " <option value='$num' $select>$num</option> ";   
                }
                
                }
            ?> 
            </select>
             </td>
       <td>&#8369<input type="text" name="total<?php echo $count?>" id="total<?php echo $count?>" readonly="" style="width: 50px; color:black;"/></td>
         
         </tr>
         
   
   
         <?php $count++; $count2++;
         }}else{
           // echo "No items found in this cart";
           // echo "<script>alert('There are no items in this cart');window.location = 'index.php'</script>";
          ?>
       
          
         <?php }} 
        else{
       echo "<script>alert('Login is required to use Shopping Cart. ');window.location='index.php'</script>";
   /**
      
       $sql = "SELECT * FROM cart WHERE client_ip='$ip' LIMIT 10";
       $count = 1;
       $count2 = 2; 
       $result = mysql_query($sql);
       if (mysql_num_rows($result) >=1){
       while ($row = mysql_fetch_array($result)){
       $quantity= $row["quantity"];
       ?>
       
      <tr>
       <td>
       
        
        <img src="<?php echo $row["product_picture"]?>" style="width:160px;height:100px;" />
        <input type="hidden" name="product_no<?php echo $count?>" value="<?php echo $row["product_no"]?>"/>
       <input type="hidden" name="particular<?php echo $count?>" id="particular" value="<?php echo $row["product_name"]?>" />           
        <p style="font-weight: bold;margin:0px;padding:0px;"><?php echo $row["product_name"]?></p>
        <p style="margin: 0px;font-size:13px;"> <span style="color: lime;margin:0px">In stock / </span><a href="my_cart.php?product_no=<?php echo $row["product_no"] . "&code=$code"?>">Remove Item</a></p>       
       </td>
       <td  width = "70"></td>
           <td>&#8369<input type="text" id="price<?php echo $count?>" name="unitprice<?php echo $count?>" readonly="" value="<?php echo $row["product_price"]?>" style="width: 50px; color:black;"/></td>
       <td >
         
        <select class="browser-default black-text col s8" onchange="subtotal()" id="quantity<?php echo $count?>" name="quantity<?php echo $count?>" require required> 
            
            <?php 
            for ($num = 1; $num <=99; $num++){
                 echo " <option value='$num' >$num</option> ";  
                if ($num == $quantity){$select="selected";
                echo " <option value='$num' $select>$num</option> ";   
                }
                
                }
            ?> 
            </select>
             </td>
       <td>&#8369<input type="text" name="total<?php echo $count?>" id="total<?php echo $count?>" readonly="" style="width: 50px; color:black;"/></td>
         
         </tr>
         
   
   
         <?php $count++; $count2++;
         }}else{
            echo "No items found in this cart";
            echo "<script>alert('There are no items in this cart');window.location = 'index.php'</script>";
          ?>
       
          
         <?php }*/} ?>
       </tbody>
     
       </div>
      
       
       
       </table>
       <input type="hidden" name="alltotal" id="alltotal" value="" />
       
       </div>
    <div style="clear: both;"></div>
      
       <div id="summary" style="float: left; margin-left:25px ">
      <h6 style="color: lime;padding-top:10px"><span style="color: black;">Mode of payment - </span>Cash on Delivery</h6>

      </div>
      
      <div id="summary" style="float: left; margin-left: 12%">
      <h6>Subtotal:</h6>
      <h6>Shipping Fee: </h6>
      <h6 style="color: red;">VAT Included</h6>
      <h5>Total:</h5>
      </div>
      <div id="summary" style="float: right;margin-right:80px;">
    &#8369 <span id="sSubTotals"></span><br />
     <span id="shippings"></span>
       <h6 id="">&nbsp;</h6>
  <span style="font-size: 25px;font-weight: bold;">  &#8369 <span id="sTotals"></span></span>
      </div>
        
      <div style="clear: both;"></div>
    
    
       <div class="input-field col s12 left">
         <button class="medium btn waves-effect waves-light green darken-3 left" type="submit" name="shop" style="margin-right: 25px;">
            Continue Shopping 
          <i class="mdi-action-shopping-cart right"></i>
          </button>
       
            <button class="medium btn waves-effect waves-light blue darken-3 right" type="submit" name="<?php if (isset($_SESSION["email"])){echo"submitorder";}else{echo "submit";}?>" style="margin-right: 25px;">
            <?php if (isset($_SESSION["email"])){echo"SUBMIT ORDER";}else{echo "CHECKOUT";}?> 
          <i class="mdi-content-send right"></i>
          </button>
          
           </div>
       
        
      <?php

      

      if (isset($_GET["product_no"]) && isset($_GET["code"])){
       if ($_GET["product_no"] != null && $_GET["code"] == $code){
       $prod_no = $_GET["product_no"];
       removeCartItem($prod_no,$ip);
       
       
       }else{
       header("Location: my_cart.php"); 
       }
      }
      ?>  
        
        
          </div>

    
    </form>
      </div>
      </div>
    
    <script>
    function subtotal(){
                

        
   var stotal1 =  document.getElementById("total1").value = document.getElementById("price1").value * document.getElementById("quantity1").value;
     var doc1 = document.getElementById("total1");    
     var doc2 = document.getElementById("total2");
     var doc3 = document.getElementById("total3");
     var doc4 = document.getElementById("total4");
     var doc5 = document.getElementById("total5");
      
      if (doc2 != null){
     var stotal2 = document.getElementById("total2").value = document.getElementById("price2").value * document.getElementById("quantity2").value;
      }
      else{
        var stotal2 = 0;
      }
      
       if (doc3 != null){
       
     var stotal3 =    document.getElementById("total3").value = document.getElementById("price3").value * document.getElementById("quantity3").value;
      }else{
        var stotal3 = 0;
      }
      
      
       if (doc4 != null){
     var stotal4  =    document.getElementById("total4").value = document.getElementById("price4").value * document.getElementById("quantity4").value;
      }else{
         var stotal4 = 0;
      }
      
       if (doc5 != null){
    var stotal5  =      document.getElementById("total5").value = document.getElementById("price5").value * document.getElementById("quantity5").value;
      }else{
         var stotal5 = 0;
      }
      
      
      
      

      
      
      
      var alltotal = document.getElementById("sSubTotals").innerHTML = parseInt(document.getElementById("total1").value) + stotal2
                                                        +  stotal3 + stotal4 + stotal5;
             document.getElementById("alltotal").value = alltotal;                                           
        document.getElementById("shippings").innerHTML = "&#8369 0.00";
        document.getElementById("sTotals").innerHTML = parseInt(document.getElementById("total1").value) + stotal2
                                                        +  stotal3 + stotal4 + stotal5;
       
    }
    
    </script>
	<script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
  <script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>
<?php
 if (isset($_POST["submit"])){
    
    
    $quantity = $_POST["quantity1"];
    $subtotal = $_POST["total1"];
    $product_no = $_POST["product_no1"];

    updateCartQuantity($ip,$product_no,$quantity,$subtotal);
    
    
    for ($count = 2; $count <=5;$count++){
             
         if (isset($_POST["quantity$count"]) && isset($_POST["total$count"]) && isset($_POST["product_no$count"])){
               $quantity = $_POST["quantity$count"];
               $subtotal = $_POST["total$count"];
               $product_no = $_POST["product_no$count"];
               updateCartQuantity($ip,$product_no,$quantity,$subtotal); 
          }
          
          
          
    }      
          
          
          
    
   header("Location: login.php?authentication=true");
    
 }
 
 
 
 
 
 
 
 
 
 if (isset($_POST["submitorder"])){

      error_reporting(0);
      
      
      
    if (isset($_SESSION["email"]) && isset($_SESSION["customer_id"])){
       
       
              $fullname = userData2("fname") . " " . userData2("lname");
               $address = userData2("address");
               $email = userData2("email");
               $contact = userData2("contact");
     
               
               $to = $email;
               $tracking_no = orderTracking("order_id");
               
      
       
     for ($count = 1; $count <=5;$count++){
             
               $quantity2  = data_secure($_POST["quantity$count"]);
               $product_no  = data_secure($_POST["product_no$count"]);
               $total2  = data_secure($_POST["total$count"]);
               $product_name2 = data_secure($_POST["particular$count"]);
               $unitprice2= data_secure($_POST["unitprice$count"]);
               
               

               
               if (isset($_POST["quantity$count"]) && isset($_POST["total$count"]) && isset($_POST["particular$count"]) && isset($_POST["unitprice$count"])){
               addOrderCustomernew($order_no,$fullname,$address,$product_name2,$quantity2,$unitprice2,$total2,$email,$contact,$methods); 
               removeCartItemCustomer($product_no,$email);
               
        }
          
               
          
    }     
    
     addUpdate($order_no,$email, $description);
     sendOrderTrackingNo($to,$order_no);   
    	echo "<script>window.location.href = 'index.php?Successfully-Bought'; </script>";
                
                
                
                
    }
    
    else if (isset($_SESSION["email"]) && isset($_SESSION["emp_id_no"])){
        
               $fullname = userData4("first_name") . " " . userData4("last_name");
               $address = userData4("address");
               $email = userData4("email");
               $contact = userData4("contact");
     
               
               $to = $email;
               $tracking_no = orderTracking("order_id");


       
     for ($count = 1; $count <=5;$count++){
             
               $quantity2  = data_secure($_POST["quantity$count"]);
               $product_no  = data_secure($_POST["product_no$count"]);
               $total2  = data_secure($_POST["total$count"]);
               $product_name2 = data_secure($_POST["particular$count"]);
               $unitprice2= data_secure($_POST["unitprice$count"]);
               
               if (isset($_POST["quantity$count"]) && isset($_POST["total$count"]) && isset($_POST["particular$count"]) && isset($_POST["unitprice$count"])){
           
               addOrderCustomernew($order_no,$fullname,$address,$product_name2,$quantity2,$unitprice2,$total2,$email,$contact,$methods); 
               removeCartItemCustomer($product_no,$email);
               
        }

          
          
    } 

            addUpdate($order_no,$email, $description);
            sendOrderTrackingNo($to,$order_no);  
        	echo "<script>window.location.href = 'index.php?Successfully-Bought'; </script>";
        
        
    
    }
 }
 
  
    
?>
