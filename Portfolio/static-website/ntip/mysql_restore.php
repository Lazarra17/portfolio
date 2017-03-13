<?php
  session_start();
  
if (isset($_SESSION["accesscode"])){  
  if ($_SESSION["accesscode"] == "newtaytayiceplant4"){
  
  include 'php/db/connect.php';
  include 'php/function.php';
  $error = "";

  //  error_reporting(0);
    set_time_limit(0);

if (isset($_POST["submit"])){
    

    if (!empty($_FILES["filname"]["tmp_name"])){
     $data= explode(".",$_FILES["filname"]["name"]);
     $data2= explode("-",$_FILES["filname"]["name"]);
     
     if (($data[1] == "sql" || $data[1] == "SQL") && $data2[0] == "DBbackup"){
        
        $target_dir = "database/";
        $target_file = $target_dir . basename($_FILES["filname"]["name"]);
       $file = $_FILES["filname"]["tmp_name"];
        $filecontent = file_get_contents($file);
//         if (move_uploaded_file($_FILES["filname"]["tmp_name"], $target_file)) {
//        $filename =  "database/". basename( $_FILES["filname"]["name"]);
  

                $todayoryt = $_SESSION["time_in_oryt"];
                 $allactivity = auditSelect("activity",$todayoryt);
                 $activity = "Added a new employee record: Employee ID: $emp_id_no, Employee Name: $fname $mname $lname at" . date("h:i:sa");
                 $activity = $allactivity . "+" . $activity;    
                 auditActivity($activity,$todayoryt);


  // Function to restore from a file
  
  
$sqls = "DROP DATABASE ntips";
mysql_query($sqls);


$sql = "CREAT DATABASE ntips";
mysql_query($sql);

    
//ini_set('memory_limit','128M'); // set memory limit here
//$db = mysql_connect ( 'localhost', 'root', '' ) or die('not connected');
//mysql_select_db( 'ntips', $db) or die('Not found');
//$fp = fopen ( 'database/ntip.sql', 'r' );
//$fetchData = fread ( $fp, filesize ( 'database/ntip.sql') );
$sqlInfo = explode ( ";\n", $filecontent); // explode dump sql as a array data

foreach ($sqlInfo AS $sqlData )
{
mysql_query ( $sqlData );
}


$error =  "<script>alert('You have successfully restored the database');window.location='mysql_restore.php';</script>";
header("Location: php/logout.php");       

             

}else{
$error = "<script>alert('Error: select the right sql file.  You can download the sql backup in the Back up Tab');</script>";
     }     
     
     
}else{
$error = "<script>alert('Error: No file selected');</script>";
}
      
}
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
            <h4 style="letter-spacing: 2px;">Restore Database</h4>
          <form method="POST" action="" enctype="multipart/form-data">
          
            
          
               <div class="input-field col s4">
               <input type="file" name="filname" accept=".sql"/><?php echo $error;?>
               </div>


           
           
           
          
              <div class="input-field col s4">
              <button class="medium btn waves-effect waves-light blue darken-3 left" type="submit" name="submit" style="margin-top: -10px;">
            Restore
            
          <i class="mdi-content-send right"></i>
          </button>
       
            </form>    
            
            
            
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
        echo "<script>alert('Please, login as marketing admin!');window.location='index.php'</script>";
        sleep(1);
    }}
    else{
        echo "<script>alert('Please, login as marketing admin!');window.location='index.php'</script>";
        sleep(1);
    }
    
?> 