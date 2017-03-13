<?php
  session_start();
  include 'php/db/connect.php';
  include 'php/function.php';
  
      $ip = "";
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
    $ip = $_SERVER['REMOTE_ADDR'];
    }
  
  
  
  if(isset($_POST['submit'])){

    
  
    $fname     = data_secure($_POST['fname']);
    $lname     = data_secure($_POST['lname']);
    $email     = data_secure($_POST['email']);
    $city       = data_secure($_POST['city']);
    $gender     = data_secure($_POST['gender']);
    $address  = data_secure($_POST['address']);
    $contact  = data_secure($_POST['contact']);
    
    $quantity  = data_secure($_POST['quantity1']);
    $total  = data_secure($_POST['total1']);
    $product_name = data_secure($_POST['particular1']);
    $unitprice = data_secure($_POST['unitprice1']);
    

                         
    $fullname = $fname . " " . $lname;
    $methods = "Cash on Delivery";
     $description = "Your order has been received and going on through verification.  Please wait until your order has been verified.  Thank you for buying from us.";
       
              
     $order_no = selectOrderNo("order_id") + 1;


            
                if(!empty($address) && !empty($contact) && !empty($fname)&& !empty($lname)&& !empty($email)&& !empty($gender)&& !empty($city)){
                 if(!is_numeric($contact)){
                echo "<script> alert('Invalid Contact number'); </script>";
              } elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
       echo "<script> alert('Invalid email'); </script>";
      }
              else{
               addNewCustomer($fname,$lname,$email,$gender, $city, $address, $contact);
               $to = $email;
               $tracking_no = orderTracking("order_id");
               
             addUpdate($tracking_no,$email, $description);
             sendOrderTrackingNo($to,$tracking_no);     
                     
        
              // addOrderCustomernew($order_no,$fullname,$address,$product_name,$quantity,$unitprice,$total,$email,$contact,$methods);
               
         for ($count = 1; $count <=5;$count++){
                    
         if (isset($_POST["quantity$count"]) && isset($_POST["total$count"]) && isset($_POST["particular$count"]) && isset($_POST["unitprice$count"])){
               $quantity2  = data_secure($_POST["quantity$count"]);
               $product_no  = data_secure($_POST["product_no$count"]);
               $total2  = data_secure($_POST["total$count"]);
               $product_name2 = data_secure($_POST["particular$count"]);
               $unitprice2= data_secure($_POST["unitprice$count"]);
               addOrderCustomernew($order_no,$fullname,$address,$product_name2,$quantity2,$unitprice2,$total2,$email,$contact,$methods); 
               removeCartItemCheckout($product_no,$ip);
               
          }
          
           }      
        
        echo "<script>alert('Thank you for buyingh from us.  Please see your email for the tracking number.');window.location = 'index.php';</script>";
         
          
                 
          
        
      
    }
         }
           

    
    

  }

?>
<html>
<head>
	<title>Shipping Delivery</title>
	<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
	<!-- <link type="text/css" rel="stylesheet" href="css/mystyle.css"> -->
  <link type="text/css" rel="stylesheet" href="css/forms.css">
  <link type="text/css" rel="stylesheet" href="css/style.css">
   <link rel="icon" href="img/snowflake.png" type="image/png" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
</head>
<body onload="subtotal()">

 <?php include "php/header.php";?>
  
    <?php 
    if (isset($_GET["product_no"])){
        
        $product_no = data_secure($_GET["product_no"]);
    }
    ?>
    
	<div class="container login z-depth-2" style="width: 800px;height: auto;margin-top: 10px;">
    <form action= "#" method="post" class="col s12"> 
      <div class="login-title"> 
        <h5 class="center-align">Order Summary -> Checkout</h5>
      </div>
      
      <div class="row" style="padding-top: 15px;">
        
        
      
       
        <div id="information" style="color:black">
       <table style="width:90%; margin: auto;"> 
       <thead>
      <th width="335px"></th>
       <th>Price</th>
       <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Quantity</th>
       <th>Subtotal</th>
       </thead>
       </table>
       <div style="height: 300px; overflow-y: auto;">
 <table style="width:90%; margin: auto;"> 
       
       <tbody>
     
       <?php
  
        $ip = "";
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
    $ip = $_SERVER['REMOTE_ADDR'];
    }
   
   $code = data_crypt($ip);
       $sql = "SELECT * FROM cart WHERE client_ip='$ip' LIMIT 5";
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
        <p style="margin: 0px;font-size:13px;"> <span style="color: lime;margin:0px">In stock  </span> </p>     
       </td>
       <td ></td>
           <td>&#8369 &nbsp;<input type="text" id="price<?php echo $count?>" name="unitprice<?php echo $count?>" readonly="" value="<?php echo $row["product_price"]?>" style="width: 50px; color:black;"/></td>
       <td >
 
      <td width = ""><input type="text" id="quantity<?php echo $count?>" name="quantity<?php echo $count?>" readonly="" value="<?php echo $row["quantity"]?>" style="width: 50px; color:black;"/></td>
    

             </td>
       <td width = "">&#8369 &nbsp;<input type="text" name="total<?php echo $count?>" id="total<?php echo $count?>" readonly="" value="<?php echo $row["total_price"]?>" style="width: 50px; color:black;"/></td>
         
         </tr>
         
   
   
         <?php 
         
         
        
         $count++; $count2++;
         } 
         
         }else{
            echo "No items found in this cart";
            echo "<script>alert('There are no items in this cart');window.location = 'index.php'</script>";
          ?>
       
          
         <?php }?>
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
    
    
             
      <?php

      

    
      ?>  
        
        
          </div>
       
       <div class="login-title"> 
        <h5 class="center-align" style="border-top: 1px solid gray;margin-bottom:10px;padding-top: 20px;">Shipping Delivery</h5>
      </div>
       
          <div class="row">
          
           <div class="input-field col s6">
                <i class="small mdi-social-person prefix black-text"></i>
                <input id="username" type="text" class="validate" name="fname"  require required maxlength="15" value= "<?php if(isset($_POST['submit'])){ echo $_POST['fname'];}; ?>"  >
                <label for="First Name">First Name</label>
            </div>
             <div class="input-field col s6">
                <i class="small mdi-social-person prefix black-text"></i>
                <input id="username" type="text" class="validate" name="lname"  require required maxlength="15" value= "<?php if(isset($_POST['submit'])){ echo $_POST['lname'];}; ?>" >
                <label for="Last Name">Last Name</label>
            </div>
          
             
          
            <div class="input-field col s6">
                <i class="small mdi-social-person prefix black-text"></i>
                <input id="email" type="text" class="validate" name="email"  require required maxlength="30" value= "<?php if(isset($_POST['submit'])){ echo $_POST['email'];}; ?>">
                <label for="Email">Email</label>
            </div>
                      
           <div class="input-field col s6">
                 <i class="mdi-maps-store-mall-directory prefix black-text" ></i>
                <input id="city" type="text" class="validate" name="city"  require required maxlength="30" value= "<?php if(isset($_POST['submit'])){ echo $_POST['city'];}; ?>">
                <label for="city">City / Municipality</label>
            </div>
           
            <div class="input-field col s12">
                <i class="mdi-maps-store-mall-directory prefix black-text" ></i>
                <input id="address" type="text" class="validate" name="address" require required maxlength="100" value= "<?php if(isset($_POST['submit'])){ echo $_POST['address'];}; ?>">
                <label for="address">Shipping Address</label>
            </div>
             <div class="input-field col s6 center" style="margin-top: 1%;">
                <i style="color: black;">* Gender</i>
                <input type="radio" class="filled-in" id="male" name="gender" value="Male" <?php if(isset($_POST['submit'])){ if ($_POST['gender'] == "Male"){echo "checked";}}; ?>>
                <label for="male">Male</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="radio" class="filled-in" id="female" name="gender" value="Female" <?php if(isset($_POST['submit'])){ if ($_POST['gender'] == "Female"){echo "checked";}}; ?>>
                <label for="female">Female</label>
            </div><br /><br />
             <div class="input-field col s6">
                <i class="small mdi-social-person prefix black-text"></i>
                <input id="contact" type="text" class="validate" name="contact"  require required maxlength="30" value= "<?php if(isset($_POST['submit'])){ echo $_POST['contact'];}; ?>">
                <label for="Contact">Contact</label>
            </div>
        
          <button class="medium btn waves-effect waves-light blue darken-3 right" type="submit" name="submit" style="margin-right: 25px;">
            Submit Order
          <i class="mdi-content-send right"></i>
          </button>
      </div>
      </div>
    </form>
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