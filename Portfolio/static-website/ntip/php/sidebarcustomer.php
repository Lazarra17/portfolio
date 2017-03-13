<div class="row">
    <div class="sidepanel">
      <div class="sidepanel-container">
        <img src="img/snowflake-icon.png"  style="widht: 45px; height:45px; margin-left:25%; margin-top: 5%; ">
        <hr class="hdr z-depth-2">
        <ul>
          <li class="subtitle"> 
            <?php
              $type = userData2("type");
                $username = userData2("username");
              echo "Welcome" . " $username";
            ?>
          </li>
          <?php
            if($type == "Customer"){
          ?>
            <li class="bold sidepanel-icon">
              <a href="index.php" class="waves-effect waves-cyan">
                <i class="mdi-action-home"></i>
                Home
              </a>
            </li> 
         
            <li class="bold sidepanel-icon">
              <a href="edit-customer.php" class="waves-effect waves-cyan">
                <i class="mdi-action-view-list"></i>
                My Account
              </a>
            </li> 
            
         
            <li class="bold sidepanel-icon">
              <a href="my_cart.php" class="waves-effect waves-cyan">
                <i class="mdi-action-shopping-cart"></i>
                My Cart
              </a>
            </li> 
              
              
              
            <li class="bold sidepanel-icon">
              <a href="my_order.php" class="waves-effect waves-cyan">
                <i class="mdi-action-order"></i>
                My Order </a>
            </li> 
             <li class="bold sidepanel-icon">
              <a href="my_cancellation.php" class="waves-effect waves-cyan">
                <i class="mdi-action-return"></i>
                My Cancellation  
              </a> 
            </li> 
                <li class="bold sidepanel-icon" style="margin-bottom: -15px;">
              <a href="my_order.php" class="waves-effect waves-cyan">
                <i class="mdi-action-ordert"></i>
                Order Tracking
              </a>
            </li> 
                     <?php
                    $email = data_secure($_SESSION["email"]);
                    $query = "SELECT DISTINCT order_id  FROM `orders` WHERE email = '$email' AND state <> 'delivered'";
                    $run   = mysql_query($query);

                    while($row = mysql_fetch_array($run)){ ?>
                      
                      <li class="bold sidepanel-icon">
                      <a href="order-tracking.php?order_id=<?php echo $row["order_id"];?>" class="waves-effect waves-cyan">
                      <span style="font-size: 12px;margin-left:25px;color: yellowgreen;"> Order #<?php echo $row["order_id"]?> </span>
                      </a>
                      </li> 
                  <?php
                    }
                  ?>  
             
            
         <?php }
     
       
          
          
           ?>
            </li> 
                <li class="bold sidepanel-icon" style="margin-bottom: -15px;">
              <a href="faqs.php" class="waves-effect waves-cyan">
                <i class="mdi-action-question-answer"></i>
                FAQs
              </a>
            </li> 

        </ul>
     
    </div>
  </div>

</div>