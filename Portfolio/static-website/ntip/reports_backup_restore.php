<?php
  session_start();
  
if (isset($_SESSION["accesscode"])){  
  if ($_SESSION["accesscode"] == "newtaytayiceplant1" || $_SESSION["accesscode"] == "newtaytayiceplant2" ||$_SESSION["accesscode"] == "newtaytayiceplant3" || $_SESSION["accesscode"] == "newtaytayiceplant4"){
  
  include 'php/db/connect.php';
  include 'php/function.php';
  $error = "";

  //  error_reporting(0);
    set_time_limit(0);


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
            <option value="Employee-all-attendance">All Employee Attendance</option>
            <option value="Customer-list">Customer List</option>
            <option value="Orders-list">Orders List</option>
            <option value="successful-delivery">Successful Deliveries</option>

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
    else if ($reports == "Employee-leave"){
                
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
        
   
     else if ($reports == "all-receipts"){
        $reports = data_crypt($reports);
        header("Location:reports_backup_restore.php?id=$reports");
      

                 
        }    
       
      else if ($reports == "product-list"){
                $reports = data_crypt($reports);
        header("Location:reports_backup_restore.php?id=$reports");
      

        }    
        
}



      
           ?>
 <?php
 
 if (isset($_POST["submitdata"])){
    

    if (!empty($_FILES["filname"]["tmp_name"])){
     $data = explode(".",$_FILES["filname"]["name"]);
     $data2 = explode("-",$_FILES["filname"]["name"]);
     if ($data[1] == "sql" || $data[1] == "SQL"){
        
    

      
       $files = $_FILES["filname"]["name"];
      
$target_dir = "database/";
$target_file = $target_dir . basename($_FILES["filname"]["name"]);

    if (move_uploaded_file($_FILES["filname"]["tmp_name"], $target_file)) {
      $filename =  "database/". basename( $_FILES["filname"]["name"]);}


                $todayoryt = $_SESSION["time_in_oryt"];
                 $allactivity = auditSelect("activity",$todayoryt);
                 $activity = "Restore report $data2[0] at" . date("h:i:sa");
                 $activity = $allactivity . "+" . $activity;    
                 auditActivity($activity,$todayoryt);











$code = $_POST["code"];
if ($code == "Employee List" && $data2[0] == "emplist"){ 
    
$sql = "TRUNCATE TABLE employee";
mysql_query($sql);   
           
$sql = "LOAD DATA INFILE '../../htdocs/ntip/database/$files' INTO TABLE employee FIELDS TERMINATED BY ','";
mysql_query($sql) or die("<script>alert('Error in sql file. Please select the right sql backup');window.location = 'reports_backup_restore.php';</script>");
$error =  "<script>alert('You have successfully restored the database');window.location='reports_backup_restore.php?restored';</script>";
}
else if ($code == "Employee Attendance" && $data2[0] == "empattendance"){ 
    
$sql = "TRUNCATE TABLE attendance";
mysql_query($sql);   
           
$sql = "LOAD DATA INFILE '../../htdocs/ntip/database/$files' INTO TABLE attendance FIELDS TERMINATED BY ','";
mysql_query($sql) or die("<script>alert('Error in sql file. Please select the right sql backup');window.location = 'reports_backup_restore.php';</script>");
$error =  "<script>alert('You have successfully restored the database');window.location='reports_backup_restore.php?restored';</script>";
}

else if ($code == "Employee Leave" && $data2[0] == "empleave"){ 
    
$sql = "TRUNCATE TABLE leave_report";
mysql_query($sql);   
           
$sql = "LOAD DATA INFILE '../../htdocs/ntip/database/$files' INTO TABLE leave_report FIELDS TERMINATED BY ','";
mysql_query($sql) or die("<script>alert('Error in sql file. Please select the right sql backup');window.location = 'reports_backup_restore.php';</script>");
$error =  "<script>alert('You have successfully restored the database');window.location='reports_backup_restore.php?restored';</script>";
}

else if ($code == "Customer List" && $data2[0] == "customerlist"){ 
    
$sql = "TRUNCATE TABLE customer";
mysql_query($sql);   
           
$sql = "LOAD DATA INFILE '../../htdocs/ntip/database/$files' INTO TABLE customer FIELDS TERMINATED BY ','";
mysql_query($sql) or die("<script>alert('Error in sql file. Please select the right sql backup');window.location = 'reports_backup_restore.php';</script>");
$error =  "<script>alert('You have successfully restored the database');window.location='reports_backup_restore.php?restored';</script>";
}

else if ($code == "Orders List" && $data2[0] == "orderlist"){ 
    
$sql = "TRUNCATE TABLE orders";
mysql_query($sql);   
           
$sql = "LOAD DATA INFILE '../../htdocs/ntip/database/$files' INTO TABLE orders FIELDS TERMINATED BY ','";
mysql_query($sql) or die("<script>alert('Error in sql file. Please select the right sql backup');window.location = 'reports_backup_restore.php';</script>");
$error =  "<script>alert('You have successfully restored the database');window.location='reports_backup_restore.php?restored';</script>";
}

else if ($code == "Product List" && $data2[0] == "productlist"){ 
    
$sql = "TRUNCATE TABLE products";
mysql_query($sql);   
           
$sql = "LOAD DATA INFILE '../../htdocs/ntip/database/$files' INTO TABLE products FIELDS TERMINATED BY ','";
mysql_query($sql) or die("<script>alert('Error in sql file. Please select the right sql backup');window.location = 'reports_backup_restore.php';</script>");
$error =  "<script>alert('You have successfully restored the database');window.location='reports_backup_restore.php?restored';</script>";
}

else if ($code == "Receipt" && $data2[0] == "allreceipts"){ 
    
$sql = "TRUNCATE TABLE receipt";
mysql_query($sql);   
           
$sql = "LOAD DATA INFILE '../../htdocs/ntip/database/$files' INTO TABLE receipt FIELDS TERMINATED BY ','";
mysql_query($sql) or die("<script>alert('Error in sql file. Please select the right sql backup');window.location = 'reports_backup_restore.php';</script>");
$error =  "<script>alert('You have successfully restored the database');window.location='reports_backup_restore.php?restored';</script>";
}

else if ($code == "Successfull Deliveries" && $data2[0] == "successfuldelivery"){ 
    
$sql = "TRUNCATE TABLE successful_deliveries";
mysql_query($sql);   
           
$sql = "LOAD DATA INFILE '../../htdocs/ntip/database/$files' INTO TABLE successful_deliveries FIELDS TERMINATED BY ','";
mysql_query($sql) or die("<script>alert('Error in sql file. Please select the right sql backup');window.location = 'reports_backup_restore.php';</script>");
$error =  "<script>alert('You have successfully restored the database');window.location='reports_backup_restore.php?restored';</script>";
}else{
  
  $error =  "<script>alert('Error: Please select the right sql file.  You can download it in the Back Up tab.');window.location='reports_backup_restore.php?restored';</script>";
   
    
}




       

             

}else{
$error = "<script>alert('Error: select sql file only');</script>";
     }     
     
     
}else{
$error = "<script>alert('Error: No file selected');</script>";
}
      
}
 
 
 
 ?>    


           
           
           
          
              <div class="input-field col s4" >
              <button class="medium btn waves-effect waves-light blue darken-3 left" type="submit" name="showrestore" style="margin-top: -10px;">
            
            
          <i class="mdi-content-send right"></i>
          </button>
       
            </form>    
        
        
        </div>
        </div>
        
        
        <?php
        
        //to show the upload field
            if (isset($_GET["id"])){
                 $id = $_GET["id"];
             
                 if ($id == "c02b69ea5e690bdd7d4c152c3ae19c167bfb4505fc7d40d45c432efb7af89fce"){
                    $code = "Employee List";
                  }
                elseif ($id == "dfcba062e4a9b1dc59c1dda55cfb597094b3b773423b053a24e080ac54eb1736"){
                    $code = "Employee Attendance";
                 }
                 
                  elseif ($id == "1b43cdbd9fb984a5208851cf638c34c439d98c12d3fa97d7bd3edb4d50d45eb1"){
                    $code = "Employee Leave";
                 } 
                 
                   elseif ($id == "f93a3e54eb7e6c939059e66d1919ac4c3ba5d0b54661312a68fb1195aac5af18"){
                    $code = "Customer List";
                 } 
                  elseif ($id == "8de0e965142544f6c1a0dab78a6e6ec8393aacd1622933e002d8cd0019dda31b"){
                    $code = "Orders List";
                 } 
                 
                 elseif ($id == "6110d88a24eece3db64fdc88e02854808681c0cfee3fa71788291b2f96e064fe"){
                    $code = "Product List";
                 }                  
                 
                   elseif ($id == "616847e29f8caaf07dd60d41293c54db7d28680029ad5f5cfde7f2fdb36d180c"){
                    $code = "Receipt";
                 } 
                   elseif ($id == "f11c7e41d8e7fc81bdce6ed20b8b6d5c389330297f50f239615a179583e6da29"){
                    $code = "Successfull Deliveries";
                 } 
                 else{
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
              <button class="medium btn waves-effect waves-light blue darken-3 left" type="submit" name="submitdata" style="margin-top: -10px;">
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