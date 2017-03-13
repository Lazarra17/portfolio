<?php
  session_start();
  
if (isset($_SESSION["accesscode"])){  
  if ($_SESSION["accesscode"] == "newtaytayiceplant1" || $_SESSION["accesscode"] == "newtaytayiceplant2" ||$_SESSION["accesscode"] == "newtaytayiceplant3" || $_SESSION["accesscode"] == "newtaytayiceplant4"){
  
  include 'php/db/connec.php';
  include 'php/function.php';
  $error = "";

  //  error_reporting(0);
    set_time_limit(0);

if (isset($_POST["submit"])){
    

    if (!empty($_FILES["filname"]["tmp_name"])){
     $data= explode(".",$_FILES["filname"]["name"]);
     if ($data[1] == "sql" || $data[1] == "SQL"){
        
        $target_dir = "database/";
        $target_file = $target_dir . basename($_FILES["filname"]["name"]);
       $file = $_FILES["filname"]["name"];
 //       $filecontent = file_get_contents($file);

/**     if (move_uploaded_file($_FILES["filname"]["tmp_name"], $target_file)) {
      $filename =  "database/". basename( $_FILES["filname"]["name"]);
 

                $todayoryt = $_SESSION["time_in_oryt"];
                 $allactivity = auditSelect("activity",$todayoryt);
                 $activity = "Added a new employee record: Employee ID: $emp_id_no, Employee Name: $fname $mname $lname at" . date("h:i:sa");
                 $activity = $allactivity . "+" . $activity;    
                 auditActivity($activity,$todayoryt);


*/








$sql = "LOAD DATA INFILE '$file' INTO TABLE employee FIELDS TERMINATED BY ','";
mysql_query($sql);



$code = $_POST["code"];
if ($code == "Employee List"){ 
//$sql = "TRUNCATE TABLE employee";
//mysql_query($sql);   
           
$sql = "LOAD DATA INFILE '$file' INTO TABLE employee FIELDS TERMINATED BY ','";
mysql_query($sql);
}
else if ($code == "Employee Attendance"){ 
$sql = "LOAD DATA INFILE '$file' INTO TABLE attendance FIELDS TERMINATED BY ','";
mysql_query($sql);
}




//$error =  "<script>alert('You have successfully restored the database');window.location='mysql_restore.php';</script>";
       

             

}else{
$error = "<script>alert('Error: select sql file only');</script>";
     }     
     
     
}else{
$error = "<script>alert('Error: No file selected');</script>";
}
      
}
?>
<html>
<head>
	<title>Backup</title>
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
            <h4 style="letter-spacing: 2px;">Restore Report</h4>
        
        
        
        
          <form method="GET" action="" >
          
            
          
               <select class="browser-default black-text col s8" name="reports" require required> 
                 <option value="" disabled selected>Select Reports</option>
             <?php 
             if ($_SESSION["user_id"] == 1 || $_SESSION["user_id"] == 11){
             ?>
            
              <option value="Employee-list">Employee List</option>
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
        $code = "";
        if (isset($_GET["showrestore"])){
    $reports = data_secure($_GET["reports"]);
    if ($reports == "Employee-list"){
        
        $reports = data_crypt($reports);
        header("Location:reports_backup_restore.php?id=$reports");
        
               
    }else if ($reports == "Employee-all-attendance"){
                
        $reports = data_crypt($reports);
        header("Location:reports_backup_restore.php?id=$reports");
      

    
    }
    else if ($reports == "Customer-list"){
        $reports = data_crypt($reports);
        header("Location:reports_backup_restore.php?id=$reports");
      

    
    }
    
    else if ($reports == "Orders-list"){
        $reports = data_crypt($reports);
        header("Location:reports_backup_restore.php?id=$reports");
      


        }
        
    else if ($reports == "successful-delivery"){
        $reports = data_crypt($reports);
        header("Location:reports_backup_restore.php?id=$reports");
      

        }
        
    else if ($reports == "sales-report"){
        $reports = data_crypt($reports);
        header("Location:reports_backup_restore.php?id=$reports");
      


                 
        }    
        
     else if ($reports == "all-receipts"){
        $reports = data_crypt($reports);
        header("Location:reports_backup_restore.php?id=$reports");
      

                 
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
      

        }    
        
}



      
           ?>



           
           
           
          
              <div class="input-field col s4" >
              <button class="medium btn waves-effect waves-light blue darken-3 left" type="submit" name="showrestore" style="margin-top: -10px;">
            Generate
            
          <i class="mdi-content-send right"></i>
          </button>
       
            </form>    
        
        
        </div>
        </div>
        
        
        <?php
            if (isset($_GET["id"])){
                 $id = $_GET["id"];
             
                 if ($id == "c02b69ea5e690bdd7d4c152c3ae19c167bfb4505fc7d40d45c432efb7af89fce"){
                    $code = "Employee List";
                  }
                elseif ($id == "dfcba062e4a9b1dc59c1dda55cfb597094b3b773423b053a24e080ac54eb1736"){
                    $code = "Employee Attendance";
                 }else{
                    $code = "No report selected";
                                     
                 }                                     
                 
                                     
             if ($code == "No report selected"){
                header("Location: reports_backup_restore.php");
              }else{               
             
                                                      
             
        ?>
        
        
            <div class="col s12" style="margin-top: 50px;">         
            <h4 style="letter-spacing: 2px;">Import File to Restore - <?php echo $code?></h4>  
        
        
            <form method="POST" action="" enctype="multipart/form-data">

               <div class="input-field col s4" style="clear: both;">
            <input type="hidden" name="code" value="<?php echo $code?>" /> <input type="file" name="filname" accept=".sql"/><?php echo $error;?>
               </div>


           
           
           
          
              <div class="input-field col s4">
              <button class="medium btn waves-effect waves-light blue darken-3 left" type="submit" name="submit" style="margin-top: -10px;">
            Restore
            
          <i class="mdi-content-send right"></i>
          </button>
                   
            </form>   
            
            <?php }} ?>
             
            </div>
            
            
            </div>
           
               
         
    
           
           
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
        echo "<script>alert('Please, login as admin!');window.location='index.php'</script>";
        sleep(1);
    }}
    else{
        echo "<script>alert('Please, login as admin!');window.location='index.php'</script>";
        sleep(1);
    }
    
?> 