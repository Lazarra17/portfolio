
<head>
	<title>Reports</title>
	<link type="text/css" rel="stylesheet" href="../css/materialize.css"  media="screen,projection"/>
	<!-- <link type="text/css" rel="stylesheet" href="css/mystyle.css"> -->
  <link type="text/css" rel="stylesheet" href="../css/forms.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
  <link type="text/css" rel="stylesheet" href="../css/sidebar.css">
</head>

<div class="row">
    <div class="sidepanel">
      <div class="sidepanel-container" style="overflow: auto;">
        <img src="img/snowflake-icon.png"  style="widht: 45px; height:45px; margin-left:25%; margin-top: 5%; ">
        <hr class="hdr z-depth-2">
        <ul>
          <li class="subtitle" style="color: yellow;"> 
            <?php
            $hide = "false";
            
            
            if (isset($_SESSION["user_id"])){

              $department = userData('department');
           
        
              
                if ($department == "superadmin"){
              echo $department;
              }else{
                echo $department . " Department";
              }
            ?>
          </li>
          <?php
            if($department == "Human Resource"){
          ?>
            <li class="bold sidepanel-icon" >
              <a href="index.php" class="waves-effect waves-cyan">
                <i class="mdi-action-home"></i>
                Home
              </a>
            </li> 
            <li class="bold sidepanel-icon">
              <a href="employee-search.php" class="waves-effect waves-cyan">
               <i class="mdi-action-search"></i>
                Find Records
              </a>
            </li> 
            <li class="bold sidepanel-icon">
              <a href="employee-record.php" class="waves-effect waves-cyan">
                  <i class="mdi-editor-mode-edit"></i>
                Update Records
              </a>
            </li> 
            <li class="bold sidepanel-icon">
              <a href="employee-delete.php" class="waves-effect waves-cyan">
               <i class="mdi-action-delete"></i>
                Delete Records
              </a>
            </li> 
            
            
            <li class="bold sidepanel-icon">
              <a href="add-employee.php" class="waves-effect waves-cyan">
                <i class="mdi-social-person-add"></i>
                Add New Employee
              </a>
            </li> 
             <li class="bold sidepanel-icon">
              <a href="add-admin.php" class="waves-effect waves-cyan">
                <i class="mdi-social-person-add"></i>
                Add New Admin
              </a>
            </li> 
            <li class="bold sidepanel-icon">
              <a href="employee-search-all.php" class="waves-effect waves-cyan">
                <i class="mdi-action-view-listall"></i>
                Find All Records
              </a>
            </li> <br />
            
             <li class="subtitle" style="color: yellow;">Others </li>
        
              <li class="bold sidepanel-icon">
              <a href="request-leave.php" class="waves-effect waves-cyan">
                <i class="mdi-action-leave"></i>
                Leave Requests
              </a>
            </li> 
              <li class="bold sidepanel-icon">
              <a href="excelreader/exread.php" class="waves-effect waves-cyan">
                <i class="mdi-action-list"></i>
                Import Attendance
              </a>
            </li> 
            
              <li class="bold sidepanel-icon">
              <a href="reports.php" class="waves-effect waves-cyan">
               <i class="mdi-action-view-list"></i>
                Reports
              </a>
              </li> 
             <?php   if ($_SESSION["user_id"] == 1){ ?>
               <li class="bold sidepanel-icon">
              <a href="audit_trail.php" class="waves-effect waves-cyan">
                <i class="mdi-action-attendance"></i>
                Audit Trail
              </a>
              </li> 
              
              <li class="bold sidepanel-icon">
              <a href="feedback.php" class="waves-effect waves-cyan">
                <i class="mdi-communication-comment"></i>
                Feedback
              </a>
              </li>
              
                <li class="bold sidepanel-icon">
              <a href="reports_backup.php" class="waves-effect waves-cyan">
                <i class="mdi-action-backup"></i>
                Back Up
              </a>
              </li> 
              
             <li class="bold sidepanel-icon">
              <a href="reports_backup_restore.php" class="waves-effect waves-cyan">
                <i class="mdi-action-restore"></i>
                Restore
              </a>
              </li> 
            
            <?php  }?>
            
            
           
            <?php }
            
          else if($department == "Marketing"){
            ?>
             
            <li class="bold sidepanel-icon">
              <a href="index.php" class="waves-effect waves-cyan">
                <i class="mdi-action-home"></i>
                Home
              </a>
            </li> 
            
             <li class="bold sidepanel-icon">
              <a href="add-product.php" class="waves-effect waves-cyan">
                <i class="mdi-content-add"></i>
                Add Product
              </a>
            </li> 
            
              <li class="bold sidepanel-icon">
              <a href="update-product.php" class="waves-effect waves-cyan">
                <i class="mdi-editor-mode-edit"></i>
                Update Product
              </a>
            </li> 
            
             <li class="bold sidepanel-icon">
              <a href="remove-product.php" class="waves-effect waves-cyan">
                <i class="mdi-action-delete"></i>
                Remove Product
              </a>
            </li> 
            
           <?php /* ?> 
            <li class="bold sidepanel-icon">
              <a href="inventory-product.php" class="waves-effect waves-cyan">
                <i class="mdi-device-storage"></i>
                Inventory
              </a>
            </li> 
            
            <?php */ ?>
            <br />
            
           <li class="subtitle" style="color: yellow;">  Customer Settings</li>
           
                       <li class="bold sidepanel-icon">
              <a href="register.php" class="waves-effect waves-cyan">
                <i class="mdi-social-person-add"></i>
                Add Customer
              </a>
            </li> 
           <li class="bold sidepanel-icon">
              <a href="customer-search.php" class="waves-effect waves-cyan">
                <i class="mdi-action-search"></i>
                Customer Records
              </a>
            </li> 
            <li class="bold sidepanel-icon">
              <a href="customer-update.php" class="waves-effect waves-cyan">
                <i class="mdi-editor-mode-edit"></i>
                Customer Records
              </a>
            </li> 
            <li class="bold sidepanel-icon">
              <a href="customer-delete.php" class="waves-effect waves-cyan">
                <i class="mdi-action-delete"></i>
                Customer Records
              </a>
            </li> 
            
              <li class="bold sidepanel-icon">
              <a href="customer-search-all.php" class="waves-effect waves-cyan">
                <i class="mdi-action-view-listall"></i>
                Find All Records
              </a>
            </li> 
          
           <br />
           <li class="subtitle" style="color: yellow;">  Orders Settings</li>
           <li class="bold sidepanel-icon">
              <a href="order-search.php" class="waves-effect waves-cyan">
                <i class="mdi-action-search"></i>
                Find Order Records
              </a>
            </li>           
            <li class="bold sidepanel-icon">
              <a href="order-delete.php" class="waves-effect waves-cyan">
               <i class="mdi-action-delete"></i>
                Delete Order Records
              </a>
            </li> 
           <li class="bold sidepanel-icon">
              <a href="order-search-all.php" class="waves-effect waves-cyan">
                <i class="mdi-action-view-listall"></i>
                Find All Records
              </a>
            </li>   
            <br />
            <li class="subtitle" style="color: yellow;">  Others </li>
           <li class="bold sidepanel-icon">
              <a href="reports.php" class="waves-effect waves-cyan">
                <i class="mdi-action-view-list"></i>
                Reports
              </a>
            </li> 
             <?php   if ($_SESSION["user_id"] == 2){ ?>       
            <li class="bold sidepanel-icon">
              <a href="audit_trail.php" class="waves-effect waves-cyan">
                <i class="mdi-action-attendance"></i>
                Audit Trail
              </a>
              </li>  
              
                  <li class="bold sidepanel-icon">
              <a href="feedback.php" class="waves-effect waves-cyan">
                <i class="mdi-communication-comment"></i>
                Feedback
              </a>
              </li>   
             
             <li class="bold sidepanel-icon">
              <a href="reports_backup.php" class="waves-effect waves-cyan">
                <i class="mdi-action-backup"></i>
                Back Up
              </a>
              </li> 
              
              <li class="bold sidepanel-icon">
              <a href="reports_backup_restore.php" class="waves-effect waves-cyan">
                <i class="mdi-action-restore"></i>
                Restore
              </a>
              </li>  
              
              
       <?php
       }  }
             else if($department == "Production"){
            ?><br />
            
           <li class="subtitle" style="color: yellow;">  Delivery Settings</li>
            <li class="bold sidepanel-icon">
              <a href="index.php" class="waves-effect waves-cyan">
                <i class="mdi-action-home"></i>
                Home
              </a>
            </li> 
           
           <li class="bold sidepanel-icon">
              <a href="order-search.php" class="waves-effect waves-cyan">
                 <i class="mdi-action-search"></i>
                Delivery Records
              </a>
            </li> 
            <li class="bold sidepanel-icon">
              <a href="order-update.php" class="waves-effect waves-cyan">
                <i class="mdi-editor-mode-edit"></i>
                Delivery Records
              </a>
            </li> 
            <li class="bold sidepanel-icon">
              <a href="order-delete.php" class="waves-effect waves-cyan">
                 <i class="mdi-action-delete"></i>
                Delivery Records
              </a>
            </li> 
            <li class="bold sidepanel-icon">
              <a href="order-search-all.php" class="waves-effect waves-cyan">
                <i class="mdi-action-view-listall"></i>
                Find All Records
              </a>
            </li><br>
            <li class="subtitle" style="color: yellow;">  Others</li>
            <?php   if ($_SESSION["user_id"] == 3 || $_SESSION["user_id"] == 33){ ?>
            <li class="bold sidepanel-icon">
              <a href="receipt.php" class="waves-effect waves-cyan">
                <i class="mdi-action-book"></i>
                Generate Receipt
              </a>
            </li>
            <?php }?>
           
            <li class="bold sidepanel-icon">
              <a href="successful_delivery.php" class="waves-effect waves-cyan">
                <i class="mdi-action-description"></i>
                Successful Deliveries
              </a>
            </li>
              <?php   if ($_SESSION["user_id"] == 3 || $_SESSION["user_id"] == 33){ ?>
            <li class="bold sidepanel-icon">
              <a href="reports.php" class="waves-effect waves-cyan">
                <i class="mdi-action-view-list"></i>
                Reports
              </a>
            </li>
              <?php }?>
             <?php   if ($_SESSION["user_id"] == 3){ ?>
            <li class="bold sidepanel-icon">
              <a href="audit_trail.php" class="waves-effect waves-cyan">
                <i class="mdi-action-attendance"></i>
                Audit Trail
              </a>
              </li> 
                  <li class="bold sidepanel-icon">
              <a href="feedback.php" class="waves-effect waves-cyan">
                <i class="mdi-communication-comment"></i>
                Feedback
              </a>
              </li>
               
              
             <li class="bold sidepanel-icon">
              <a href="reports_backup.php" class="waves-effect waves-cyan">
                <i class="mdi-action-backup"></i>
                Back Up
              </a>
              </li> 
               <li class="bold sidepanel-icon">
              <a href="reports_backup_restore.php" class="waves-effect waves-cyan">
                <i class="mdi-action-restore"></i>
                Restore
              </a>
              </li>  
              
          <?php }}
           else if($department == "superadmin"){
            
            ?>
            <li class="bold sidepanel-icon">
              <a href="admin-delete.php" class="waves-effect waves-cyan">
                <i class="mdi-action-delete"></i>
                Manage Admin
              </a>
            </li> 
            
            <br />
            
           <li class="subtitle" style="color: yellow;">  HR Settings</li>
           <li class="bold sidepanel-icon">
              <a href="index.php" class="waves-effect waves-cyan">
                <i class="mdi-action-home"></i>
                Home
              </a>
            </li> 
           <li class="bold sidepanel-icon">
              <a href="employee-search.php" class="waves-effect waves-cyan">
               <i class="mdi-action-search"></i>
                Find Records
              </a>
            </li> 
            <li class="bold sidepanel-icon">
              <a href="employee-record.php" class="waves-effect waves-cyan">
                 <i class="mdi-editor-mode-edit"></i>
                Update Records
              </a>
            </li> 
            <li class="bold sidepanel-icon">
              <a href="employee-delete.php" class="waves-effect waves-cyan">
                 <i class="mdi-action-delete"></i>
                Delete Records
              </a>
            </li> 
            
            
            
            <li class="bold sidepanel-icon">
              <a href="add-employee.php" class="waves-effect waves-cyan">
                <i class="mdi-social-person-add"></i>
                Add New Employee
              </a>
            </li> 
            <li class="bold sidepanel-icon">
              <a href="employee-search-all.php" class="waves-effect waves-cyan">
                <i class="mdi-action-view-listall"></i>
                Find All Records
              </a>
            </li> <br />
           
           
           
             <li class="subtitle" style="color: yellow;">  Marketing Settings</li>
             <li class="bold sidepanel-icon">
              <a href="customer-search.php" class="waves-effect waves-cyan">
                <i class="mdi-action-search"></i>
                Customer Records
              </a>
            </li> 
            <li class="bold sidepanel-icon">
              <a href="customer-update.php" class="waves-effect waves-cyan">
                <i class="mdi-editor-mode-edit"></i>
                Customer Records
              </a>
            </li> 
            <li class="bold sidepanel-icon">
              <a href="customer-delete.php" class="waves-effect waves-cyan">
                <i class="mdi-action-delete"></i>
                Customer Records
              </a>
            </li> 
            
              <li class="bold sidepanel-icon">
              <a href="customer-search-all.php" class="waves-effect waves-cyan">
                <i class="mdi-action-view-listall"></i>
                Find All Records
              </a>
            </li> 
          
           <br />
           <li class="subtitle" style="color: yellow;">  Orders Settings</li>
           <li class="bold sidepanel-icon">
              <a href="order-search.php" class="waves-effect waves-cyan">
                <i class="mdi-action-search"></i>
                Find Order Records
              </a>
            </li>           
            <li class="bold sidepanel-icon">
              <a href="order-delete.php" class="waves-effect waves-cyan">
               <i class="mdi-action-delete"></i>
                Delete Order Records
              </a>
            </li> 
           <li class="bold sidepanel-icon">
              <a href="order-search-all.php" class="waves-effect waves-cyan">
                <i class="mdi-action-view-listall"></i>
                Find All Records
              </a>
            </li>   
            <br />
           
           
           
           
            
           <li class="subtitle" style="color: yellow;">  Production Settings</li>
           <li class="bold sidepanel-icon">
              <a href="order-search.php" class="waves-effect waves-cyan">
                <i class="mdi-action-search"></i>
                Delivery Records
              </a>
            </li> 
            <li class="bold sidepanel-icon">
              <a href="order-update.php" class="waves-effect waves-cyan">
                <i class="mdi-editor-mode-edit"></i>
                Delivery Records
              </a>
            </li> 
            <li class="bold sidepanel-icon">
              <a href="order-delete.php" class="waves-effect waves-cyan">
                <i class="mdi-action-delete"></i>
                Delivery Records
              </a>
            </li> 
            <li class="bold sidepanel-icon">
              <a href="order-search-all.php" class="waves-effect waves-cyan">
                <i class="mdi-action-view-listall"></i>
                Find All Records
              </a>
            </li><br>
            <li class="subtitle" style="color: yellow;">  Others</li>
            <li class="bold sidepanel-icon">
              <a href="successful_delivery.php" class="waves-effect waves-cyan">
                <i class="mdi-action-view-list"></i>
                Successful Deliveries
              </a>
            </li>
            <li class="bold sidepanel-icon">
              <a href="reports.php" class="waves-effect waves-cyan">
                <i class="mdi-action-view-list"></i>
                Reports
              </a>
            </li>
            <li class="bold sidepanel-icon">
              <a href="audit_trail.php" class="waves-effect waves-cyan">
                <i class="mdi-action-attendance"></i>
                Audit Trail
              </a>
              </li> 
                  <li class="bold sidepanel-icon">
              <a href="feedback.php" class="waves-effect waves-cyan">
                <i class="mdi-communication-comment"></i>
                Feedback
              </a>
              </li>
               <li class="bold sidepanel-icon">
              <li class="bold sidepanel-icon">
              <a href="backup/mysql_backup.php" class="waves-effect waves-cyan">
                <i class="mdi-action-backup"></i>
                Back Up
              </a>
              </li> 
              
              <li class="bold sidepanel-icon">
              <a href="mysql_restore.php" class="waves-effect waves-cyan">
                <i class="mdi-action-restore"></i>
                Restore
              </a>
              </li> 
              
              
              
          <?php }}
          
          
            else if (isset($_SESSION["emp_id_no"])){
                
                
                
                 
              $type = userData4("type");
              $name = userData4("first_name");
              
            if ($type == "employee"){
                         
                echo "Welcome " . $name ;
              }
              
          if($type == "employee"){
            ?><br />
            
           <li class="bold sidepanel-icon">
              <a href="index.php" class="waves-effect waves-cyan">
                <i class="mdi-action-home"></i>
                Home
              </a>
            </li> 
            <li class="bold sidepanel-icon">
              <a href="edit-employee-account.php" class="waves-effect waves-cyan">
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
                    $query = "SELECT DISTINCT order_id FROM `orders` WHERE email = '$email' AND state<> 'delivered'";
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
            <li class="bold sidepanel-icon" style="margin-bottom: -15px;">
            <a href="faqs.php" class="waves-effect waves-cyan">
            <i class="mdi-action-question-answer"></i>
            FAQs
            </a>
</li>   <br>
                                   <li class="subtitle" style="color: yellow;">Others </li>
        
              <li class="bold sidepanel-icon">
              <a href="message.php" class="waves-effect waves-cyan">
                <i class="mdi-action-leave"></i>
                Message
              </a>
            </li> 
              <li class="bold sidepanel-icon">
              <a href="file-leave.php" class="waves-effect waves-cyan">
                <i class="mdi-action-list"></i>
                Request Leave
              </a>
            </li> 
             
            <li class="bold sidepanel-icon">
              <a href="attendance.php" class="waves-effect waves-cyan">
                 <i class="mdi-action-attendance"></i>
                Attendance
              </a>
            </li> 
            
            <li class="bold sidepanel-icon">
              <a href="emp_eval.php" class="waves-effect waves-cyan">
                 <i class="mdi-action-view-list"></i>
                Employee Evaluation
              </a>
            </li> 
            
         <?php }}
     
       
          
          
           ?>
           
           
           
           
           
           
        </ul>
      <div>
    </div>
  </div>

