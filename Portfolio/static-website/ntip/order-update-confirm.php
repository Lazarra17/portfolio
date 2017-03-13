<?php
  session_start();
  
      if (isset($_SESSION["accesscode"])){
     if ($_SESSION["accesscode"] == "newtaytayiceplant3" || $_SESSION["accesscode"] == "newtaytayiceplant33" || $_SESSION["accesscode"] == "newtaytayiceplant333" || $_SESSION["accesscode"] == "newtaytayiceplant4"){  

  
  include 'php/db/connect.php';
  include 'php/function.php';

  $today = gmdate('Y');
  $id = data_secure($_GET['orders_id']);
  $state= $name = $particulars = $quantity = $shipped_date=$address=$complete=$tax=$description="";
  
  
    $or_no = userData8("OR_no");

  if (empty($or_no))
  {
    $or_no = 70000;
  }else{
    $or_no = userData8("OR_no") + 1;
  }

  
  
  if(isset($_POST['delete'])){
    deleteOrder($id);
    echo "<script>window.location ='order-update.php';</script>";
    
    }
  
  if(isset($_POST['submit'])){
    $status   = data_secure($_POST['status']);
    if (isset($_POST['shipped_date'])){
    $shipped_date   = data_secure($_POST['shipped_date']);}
    $description = data_secure($_POST["description"]);
    $email = data_secure($_POST["email"]);
    $name = data_secure($_POST["fname"]);
    $particulars = data_secure($_POST["particulars"]);
    $quantity = data_secure($_POST["quantity"]);
    $price = data_secure($_POST["price"]);
    $order_date = data_secure($_POST["order_date"]);
    $address = data_secure($_POST["address"]);
   
    
    $tax = $price * .12;
    
    if (isset($_POST["state"])){
         $state = data_secure($_POST["state"]);
    }
      if (isset($_POST["complete"])){
    $complete = data_secure($_POST["complete"]);
    }
        if (isset($_POST["description"])){
    $description = data_secure($_POST["description"]);
    }


      if (!ctype_alpha($status)){
        echo "<script> alert('Invalid Status'); </script>";
      }
      elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
       echo "<script> alert('Invalid email'); </script>";
      }
      else{
        echo "<script> alert('You have successfully updated the order'); </script>"; 
       editOrder($id, $shipped_date, $status,$state);
       addUpdate($id,$email,$description);   
       
           	 	 $todayoryt = $_SESSION["time_in_oryt"];
                 $allactivity = auditSelect("activity",$todayoryt);
                 $activity = "Updated a delivery records: Order no: $id; Name: $name ";
                 $activity = $allactivity . "+" . $activity;    
                 auditActivity($activity,$todayoryt);
                    
       
     if ($shipped_date != null && $description == "Thank you for buying with us, We hope that you will buy again with us" && $state == "Delivered" && $complete == "Complete"){
      successfulDelivery($name, $address,$particulars,$quantity,$price,$email,$order_date,$shipped_date);
     // addReceipt($or_no,$name, $address,$particulars,$quantity,$price,$tax);
        
        
        
        
    }else{
        echo "<script>alert('Fill the all to complete the process');</script>";
    }
       
      }
    }
  
    
    
 
  

  // $lname = empDataCustomer($id, 'last_name');
  // echo "<script> alert('". $lname ."'); </script>";



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
    <div class="col s12" style="margin-left: 8%;">
      <div class="container white z-depth-2" style="margin-top: 2%;height:auto; padding-top: 1%; padding-bottom: 3%;">
        <form action ="#" method="post">
        <h4 style="letter-spacing: 2px;">Update Delivery <?php ?></h4>
        (Note: All fields with <b>" * "</b> is required, Date format  <span style="color: red;">(yyyy-mm-dd)</span> for other browser except Chrome)<br><br>
        <div class="row">
          
          
            <div class="input-field col s4">
                <i class="small mdi-social-person prefix black-text"></i>
                <input id="lname" type="text" class="validate" readonly="" name="fname" require required maxlength="15" value="<?php echo empDataOrder($id, 'customer_name'); ?>">
                <label for="fname">* Full Name</label>
            </div>
            <div class="input-field col s4">
              <i class="small mdi-social-person prefix black-text"></i>
                <input readonly id="email" type="text" class="validate" name="email"  require required maxlength="15" style ="color:red" value="<?php echo empDataOrder($id, 'email'); ?>">
                <label for="email">* Email</label>
            </div>
            
                <div class="input-field col s4">
              <i class="small mdi-social-person prefix black-text"></i>
                <input readonly id="email" type="text" class="validate" name="contact"  require required maxlength="15" style ="color:black" value="<?php echo empDataOrder($id, 'contacts'); ?>">
                <label for="email">* Contact No</label>
            </div>

            <div class="input-field col s12">
             <i class="mdi-maps-store-mall-directory prefix black-text" ></i>
                <input readonly id="address" type="text" class="validate" name="address"  require required maxlength="50" value="<?php echo empDataOrder($id, 'customer_address'); ?>">
                <label for="address">* Permanent Address</label>
            </div>
            <div style="color: lime;">
            <?php 
            $query = "SELECT * FROM orders WHERE order_id = '$id'";
            $results = mysql_query($query);
            while ($row = mysql_fetch_array($results)){
            ?>
            <div class="input-field col s5">
                <input readonly id="Order" type="text" class="validate" name="particulars"  require required maxlength="12" value="<?php echo $row['particulars']; ?>">
                <label for="order">* Order</label>
            </div>
            
             <div class="input-field col s3">
                <input readonly id="items" type="text" class="validate" name="quantity"  require required maxlength="12" value="<?php echo $row['items']; ?>">
                <label for="items">* Items</label>
            </div>
             <div class="input-field col s3" >
                <input readonly id="price" type="text" class="validate" name="price"  require required maxlength="12" value="<?php echo $row['price']; ?>">
                <label for="price">* Price</label>
            </div>
           
            <?php } ?>
            </div>
            <div class="input-field col s3" style="clear: both;">
                <span style="font-size: 13px;"> Ordered Date (dd-mm-yyyy)</span><input readonly id="order_date" type="date" class="validate" name="order_date"  require required maxlength="12" value="<?php echo empDataOrder($id, 'order_date'); ?>">
                
            </div> <input type="hidden" value="<?php echo gmdate("Y-m-d");?>" id="today" />
             <?php   if ($_SESSION["user_id"] == 3 || $_SESSION["user_id"] == 33){ ?>
            <div class="input-field col s3" >
                <span style="font-size: 13px;"> Shipping Date (dd-mm-yyyy)</span><input id="shipped_date" onchange="output()" type="date" class="validate" name="shipped_date" min="<?php echo gmdate("Y-m-d");?>" value="<?php echo empDataOrder($id, 'shipped_date'); ?>" />
                
            </div>
            <?php }?>
             <div class="input-field col  <?php   if ($_SESSION["user_id"] == 3 || $_SESSION["user_id"] == 33){echo "s3"; }else{echo "s8";}?>" >
             <select  class="browser-default black-text" name="status" require required>
              <option value=" " disabled selected>Select Status</option>
              <option value="Unverified" <?php  if (userData6("status", $id) == "Unverified")echo "selected"; ?>>Unverified</option>
              <option value="Verified"   <?php  if (userData6("status", $id) == "Verified")echo "selected"; ?>>Verified</option>
              
            </select>
            </div>
            <?php   if ($_SESSION["user_id"] == 3 || $_SESSION["user_id"] == 33){ ?>
            <div class="input-field col s3" >
             <select  class="browser-default black-text" name="state" <?php if (userData6("status", $id) == "Verified") echo "require required";?>>
              <option value="" disabled selected>Select State</option>
              <option value="Delivered" <?php  if (userData6("state", $id) == "Delivered")echo "selected"; ?>>Delivered</option>
              <option value="Now delivering"   <?php  if (userData6("state", $id) == "Now delivering")echo "selected"; ?>>Now delivering</option>
              <option value="Hold"   <?php  if (userData6("state", $id) == "hold")echo "selected"; ?>>Hold</option>
              
            </select>
            </div>
            <?php }?>
    <p style="clear: both; margin-bottom: 40px;"></p>
            <div class="input-field col s10" >
             <select  class="browser-default black-text"  name="description" >
              <option value="" disabled selected >Message to Customer</option>
               <?php   if (empDataOrder($id, 'status') == "Unverified"){ ?>
              <option value="thank you for shopping with us. your order is now verified and going through preparation!" >Thank you for shopping with us. your order is now verified and going through preparation!</option>
               <?php } if (empDataOrder($id, 'status') == "Verified" && empDataOrder($id, 'state') == ""){ ?>
               <option value="Your order has been shipped" >Your order has been shipped</option>
                <?php } if (empDataOrder($id, 'state') != "" && empDataOrder($id, 'status') == "Verified"){?>
               <option value="Thank you for buying with us, We hope that you will buy again with us" >Thank you for buying with us, We hope that you will buy again with us - (Successfully Delivered)</option>
            <?php }?>
            </select>
            </div>
             <?php   if (empDataOrder($id, 'shipped_date') != "0000-00-00"){ ?>
           <div class="input-field col s2 center">
        
                <input type="checkbox" class="filled-in" id="male" <?php if (userData6("state", $id) == "Delivered")echo "checked=''"; ?> name="complete" value="Complete" >
                <label for="male" style="color: black;">Mark as complete </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
               
            </div><?php }?><br /><br />
            
             <p style="clear: both; margin-bottom: 40px;"></p>
            <div class="input-field col s12" style="margin-bottom: 50px;">
           <table class="hoverable responsive-table bordered" style="font-size: 15px;">
                <thead>
                  <tr>
                    
                    <th data-field="date_hired">Date</th>
                    <th data-field="status">Message Sent</th>
                  </tr>
                </thead>
                <tbody>
                
                
                 <?php 
           
                
            $sql = "SELECT * FROM `updates` WHERE order_no = '$id'";    
                $result = mysql_query($sql);
                while ($row = mysql_fetch_assoc($result)){
                  
    
             ?>
                
          
                      <tr>
                        
                        <td><?php echo $row['date']; ?></td>
                        <td><?php echo $row['description']; ?></td>
                      </tr>
                  <?php
                    }
                   
                  ?>
                </tbody>
              </table>  
           </div>
    
    
           
           
        </div>
        <div class="input-field col s12 left">
          <?php  if ($_SESSION["user_id"] == "333"){ ?>
         <button class="medium btn waves-effect waves-light red darken-1 left" type="submit" name="delete" style="margin-right: 25px;">
            DELETE 
          <i class="mdi-action-delete right"></i>
          </button>
       <?php }?>
            <button class="medium btn waves-effect waves-light blue darken-3 right" type="submit" name="submit" style="margin-right: 25px;">
            Update 
          <i class="mdi-content-send right"></i>
          </button>
          
           </div>
          <br />
                                        
        </form>
      </div>
    </div>
    <script>
    
    function output(){
    var day = document.getElementById("shipped_date").value;
    var today = document.getElementById("today").value;
  
      if (day < today){
        document.getElementById("shipped_date").value = today;
         alert('Invalid date');
      }
        if (day > today){
        document.getElementById("shipped_date").value = today;
         alert('Invalid date');
      }
    
    
}
    </script>
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
