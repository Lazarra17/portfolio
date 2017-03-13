<?php
  session_start();
  
if (isset($_SESSION["accesscode"])){  
  if ($_SESSION["accesscode"] == "newtaytayiceplant1" || $_SESSION["accesscode"] == "newtaytayiceplant2" || $_SESSION["accesscode"] == "newtaytayiceplant3"
    ||$_SESSION["accesscode"] == "newtaytayiceplant11" || $_SESSION["accesscode"] == "newtaytayiceplant22" || $_SESSION["accesscode"] == "newtaytayiceplant333" || $_SESSION["accesscode"] == "newtaytayiceplant33"
    || $_SESSION["accesscode"] == "newtaytayiceplant4"){
  
  include 'php/db/connect.php';
  include 'php/function.php';




      

?>
<html>
<head>
	<title>Reports</title>
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
    <div class="col s12" style="margin-left: 5%;">
      <div class="container white z-depth-2" style="margin-top: 2%; height:auto;  padding-top: 1%; padding-bottom: 3%;">
        <div class="row">
          <div class="col s12">
            <h4 style="letter-spacing: 2px;">Generate Reports</h4>
          <form method="GET" action="" >
          
            
          
               <select class="browser-default black-text col s8" name="reports" require required> 
                 <option value="" disabled selected>Select Reports</option>
             <?php 
             if ($_SESSION["user_id"] == 1 || $_SESSION["user_id"] == 11){
             ?>
            
              <option value="Employee-list">Employee List</option>
              <option value="Employee-all-attendance">All Employee Attendance</option>
              <option value="Employee-Leave">Employee Leave Report</option>
           
            <?php 
            }
                else if ($_SESSION["user_id"] == 2 || $_SESSION["user_id"] == 22){
            
            ?>
            <option value="Customer-list">All Customers List</option>
            <option value="Orders-list">All Orders List</option>
            <option value="product-list">All Products List</option>
            <option value="Inventory-list">Inventory List</option>
            <?php 
            }
            
             else if ($_SESSION["user_id"] == 3 || $_SESSION["user_id"] == 33){
            
            ?>
            <option value="today-delivery">Today's Delivery</option>
            <option value="all-receipts">All Receipts</option>
            <option value="successful-delivery">Successful Deliveries</option>
            <option value="sales-report-weekly">Sales Report (Specific)</option>
            <option value="sales-report-monthly">Sales Report (Monthly)</option>
            <option value="sales-report-yearly">Sales Report (Yearly)</option>
            
            <?php 
            }
                  
             else if ($_SESSION["user_id"] == 4){
            
            ?>
            
            
            <option value="Employee-list">Employee List</option>
            <option value="Employee-all-attendance">All Employee Attendance</option>
            <option value="Customer-list">Customer List</option>
            <option value="Orders-list">Orders List</option>
            <option value="successful-delivery">Successful Deliveries</option>
            <option value="sales-report-weekly">Sales Report (Weekly)</option>
            <option value="sales-report-monthly">Sales Report (Monthly)</option>
            <option value="sales-report-yearly">Sales Report (Yearly)</option>
            <?php 
            }
            ?>
            
            
            
             </select>
            
      <?php
      
        if (isset($_GET["submit"])){
    $reports = $_GET["reports"];
    if ($reports == "Employee-list"){
        header("Location:fpdf/employee_list.php");
        
        
           	 	 $todayoryt = $_SESSION["time_in_oryt"];
                 $allactivity = auditSelect("activity",$todayoryt);
                 $activity = "Generate employee list report";
                 $activity = $allactivity . "+" . $activity;    
                 auditActivity($activity,$todayoryt);
        
    }else if ($reports == "Employee-all-attendance"){
      header("Location:fpdf/emp_attendance_all.php");
      
           	 	 $todayoryt = $_SESSION["time_in_oryt"];
                 $allactivity = auditSelect("activity",$todayoryt);
                 $activity = "Generate all employee attendance report at " . date("h:i:sa");
                 $activity = $allactivity . "+" . $activity;    
                 auditActivity($activity,$todayoryt);
    
    }
    else if ($reports == "Employee-Leave"){
      header("Location:fpdf/emp_leave.php");
      
           	 	 $todayoryt = $_SESSION["time_in_oryt"];
                 $allactivity = auditSelect("activity",$todayoryt);
                 $activity = "Generate all employee attendance report at " . date("h:i:sa");
                 $activity = $allactivity . "+" . $activity;    
                 auditActivity($activity,$todayoryt);
    
    }
    
        else if ($reports == "Inventory-list"){
      header("Location:fpdf/inventory-list.php");
      
           	 	 $todayoryt = $_SESSION["time_in_oryt"];
                 $allactivity = auditSelect("activity",$todayoryt);
                 $activity = "Generate all employee attendance report at " . date("h:i:sa");
                 $activity = $allactivity . "+" . $activity;    
                 auditActivity($activity,$todayoryt);
    
    }
    
    
 
    else if ($reports == "Customer-list"){
      header("Location:fpdf/customer_list.php");
      
           	 	 $todayoryt = $_SESSION["time_in_oryt"];
                 $allactivity = auditSelect("activity",$todayoryt);
                 $activity = "Generate customer list report at " . date("h:i:sa");
                 $activity = $allactivity . "+" . $activity;    
                 auditActivity($activity,$todayoryt);
    
    }
    
    else if ($reports == "Orders-list"){
      header("Location:fpdf/orders_list.php?reports=all");
      
           	 	 $todayoryt = $_SESSION["time_in_oryt"];
                 $allactivity = auditSelect("activity",$todayoryt);
                 $activity = "Generate orders list report at" . date("h:i:sa");
                 $activity = $allactivity . "+" . $activity;    
                 auditActivity($activity,$todayoryt);
        }
        
        
        
        
     else if ($reports == "today-delivery"){
      header("Location:fpdf/today-delivery.php");
      
           	 	 $todayoryt = $_SESSION["time_in_oryt"];
                 $allactivity = auditSelect("activity",$todayoryt);
                 $activity = "Generate todays delivery list report at " . date("h:i:sa");
                 $activity = $allactivity . "+" . $activity;    
                 auditActivity($activity,$todayoryt);
        }   
        
        
    else if ($reports == "successful-delivery"){
      header("Location:fpdf/successful-delivery.php");
      
           	 	 $todayoryt = $_SESSION["time_in_oryt"];
                 $allactivity = auditSelect("activity",$todayoryt);
                 $activity = "Generate successful delivery list report at " . date("h:i:sa");
                 $activity = $allactivity . "+" . $activity;    
                 auditActivity($activity,$todayoryt);
        }
        
    else if ($reports == "sales-report"){
      header("Location:fpdf/sales_report.php");
      
           	 	 $todayoryt = $_SESSION["time_in_oryt"];
                 $allactivity = auditSelect("activity",$todayoryt);
                 $activity = "Generate sales report at " .  date("h:i:sa");
                 $activity = $allactivity . "+" . $activity;    
                 auditActivity($activity,$todayoryt);
                 
        }    
        
     else if ($reports == "all-receipts"){
      header("Location:fpdf/receipt-all.php");
      
           	 	 $todayoryt = $_SESSION["time_in_oryt"];
                 $allactivity = auditSelect("activity",$todayoryt);
                 $activity = "Generate all receipts report at " . date("h:i:sa");
                 $activity = $allactivity . "+" . $activity;    
                 auditActivity($activity,$todayoryt);
                 
        }    
       else if ($reports == "sales-report-weekly"){
      header("Location:reports-sales.php?weekly");
      

                 
        }      
    
     else if ($reports == "sales-report-monthly"){
      header("Location:reports-sales.php?monthly");
      

        }       
      else if ($reports == "sales-report-yearly"){
      header("Location:reports-sales.php?yearly");
      

        }     
      else if ($reports == "product-list"){
      header("Location:fpdf/product_list.php");
      
           	 	 $todayoryt = $_SESSION["time_in_oryt"];
                 $allactivity = auditSelect("activity",$todayoryt);
                 $activity = "Generate product list report at " . date("h:i:sa");
                 $activity = $allactivity . "+" . $activity;    
                 auditActivity($activity,$todayoryt);
        }    
        
}



      
           ?>



           
           
           
          
              <div class="input-field col s4">
              <button class="medium btn waves-effect waves-light blue darken-3 left" type="submit" name="submit" style="margin-top: -10px;">
            Generate
            
          <i class="mdi-content-send right"></i>
          </button>
       
            </form>    
            
            
            
            </div>
           
               
           <?php    if ($_SESSION["user_id"] == 1){ ?>
               <form method="POST" action="fpdf/emp_attendance.php">
               
          <div class="row" style="clear: both;">
          <div class="col s12" >
          <br /><br />
           <h4 style="letter-spacing: 2px;">Employee Attendance</h4>
        
            <div class="input-field col s8">
                <input id="mname" type="text" class="validate" required=""  name="searchname" maxlength="55">
                <label for="seach">Input Employee ID or Full Name</label> 
            </div>
         
           
           
           
      
    
           
           
           
              <div class="input-field col s4">
              <button class="medium btn waves-effect waves-light blue darken-3 left" type="submit" name="submitname" style="margin-top: -10px;">
            Generate
            
          <i class="mdi-content-send right"></i>
          </button>
           
           </form>
           <?php }?>
           
           
    
           
           
          </div>
          </div>
            
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