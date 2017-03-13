<?php
  session_start();
  
if (isset($_SESSION["accesscode"])){  
  if ($_SESSION["accesscode"] == "newtaytayiceplant1" || $_SESSION["accesscode"] == "newtaytayiceplant2" || $_SESSION["accesscode"] == "newtaytayiceplant3"
    ||$_SESSION["accesscode"] == "newtaytayiceplant11" || $_SESSION["accesscode"] == "newtaytayiceplant22" || $_SESSION["accesscode"] == "newtaytayiceplant33"
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
            <h4 style="letter-spacing: 2px;">Backup Reports</h4>
          <form method="GET" action="" >
          
            
          
               <select class="browser-default black-text col s8" name="reports" require required> 
                 <option value="" disabled selected>Select Reports</option>
             <?php 
             if ($_SESSION["user_id"] == 1 || $_SESSION["user_id"] == 11){
             ?>
            
              <option value="Employee-list">Employee List</option>
              <option value="Employee-leave">All Employee Leave</option>
              <option value="Employee-all-attendance">All Employee Attendance</option>
           
            <?php 
            }
                else if ($_SESSION["user_id"] == 2 || $_SESSION["user_id"] == 22){
            
            ?>
            <option value="Customer-list">All Customers List</option>
            <option value="Orders-list">All Orders List</option>
            <option value="product-list">All Products List</option>
            <?php 
            }
            
             else if ($_SESSION["user_id"] == 3 || $_SESSION["user_id"] == 33){
            
            ?>
            <option value="all-receipts">All Receipts</option>
            <option value="successful-delivery">Successful Deliveries</option>

            
            <?php 
            }
                  
             else if ($_SESSION["user_id"] == 4){
            
            ?>
            
            
            <option value="Employee-list">Employee List</option>
            <option value="Employee-leave">All Employee Leave</option>
            <option value="Employee-all-attendance">All Employee Attendance</option>
            <option value="Customer-list">Customer List</option>
            <option value="Orders-list">Orders List</option>
            <option value="successful-delivery">Successful Deliveries</option>
            <option value="all-receipts">All Receipts</option>

            <?php 
            }
            ?>
            
            
            
             </select>
            
      <?php
      
        if (isset($_GET["submit"])){
    $reports = $_GET["reports"];
    if ($reports == "Employee-list"){
        header("Location:backup/reports_backup.php?code=emplist");
        
        
           	 	 $todayoryt = $_SESSION["time_in_oryt"];
                 $allactivity = auditSelect("activity",$todayoryt);
                 $activity = "Generate employee list report backup at " . date("h:i:sa");
                 $activity = $allactivity . "+" . $activity;    
                 auditActivity($activity,$todayoryt);
        
    }else if ($reports == "Employee-all-attendance"){
     header("Location:backup/reports_backup.php?code=employeeattendance");
        
        
           	 	 $todayoryt = $_SESSION["time_in_oryt"];
                 $allactivity = auditSelect("activity",$todayoryt);
                 $activity = "Generate employee attendance report backup at " . date("h:i:sa");
                 $activity = $allactivity . "+" . $activity;    
                 auditActivity($activity,$todayoryt);
    
    }
    else if ($reports == "Employee-leave"){
     header("Location:backup/reports_backup.php?code=empleave");
        
        
           	 	 $todayoryt = $_SESSION["time_in_oryt"];
                 $allactivity = auditSelect("activity",$todayoryt);
                 $activity = "Generate employee leave report backup at " . date("h:i:sa");
                 $activity = $allactivity . "+" . $activity;    
                 auditActivity($activity,$todayoryt);
    
    }
    
    

    else if ($reports == "Customer-list"){
     header("Location:backup/reports_backup.php?code=customerlist");
      
           	 	 $todayoryt = $_SESSION["time_in_oryt"];
                 $allactivity = auditSelect("activity",$todayoryt);
                 $activity = "Generate customer list report at " . date("h:i:sa");
                 $activity = $allactivity . "+" . $activity;    
                 auditActivity($activity,$todayoryt);
    
    }
    
    else if ($reports == "Orders-list"){
     header("Location:backup/reports_backup.php?code=orderlist");
      
           	 	 $todayoryt = $_SESSION["time_in_oryt"];
                 $allactivity = auditSelect("activity",$todayoryt);
                 $activity = "Generate orders list report at" . date("h:i:sa");
                 $activity = $allactivity . "+" . $activity;    
                 auditActivity($activity,$todayoryt);
        }
        
    else if ($reports == "successful-delivery"){
     header("Location:backup/reports_backup.php?code=successfuldelivery");
      
           	 	 $todayoryt = $_SESSION["time_in_oryt"];
                 $allactivity = auditSelect("activity",$todayoryt);
                 $activity = "Generate successful delivery list report at " . date("h:i:sa");
                 $activity = $allactivity . "+" . $activity;    
                 auditActivity($activity,$todayoryt);
        }
        
  
        
     else if ($reports == "all-receipts"){
     header("Location:backup/reports_backup.php?code=allreceipts");
      
           	 	 $todayoryt = $_SESSION["time_in_oryt"];
                 $allactivity = auditSelect("activity",$todayoryt);
                 $activity = "Generate all receipts report at " . date("h:i:sa");
                 $activity = $allactivity . "+" . $activity;    
                 auditActivity($activity,$todayoryt);
                 
        }    
    
      else if ($reports == "product-list"){
     header("Location:backup/reports_backup.php?code=productlist");
      
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