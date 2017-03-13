<?php
session_start();

  if (isset($_SESSION["accesscode"])){
 if ($_SESSION["accesscode"] == "newtaytayiceplant1" || $_SESSION["accesscode"] == "newtaytayiceplant11" || $_SESSION["accesscode"] == "newtaytayiceplant4"){ 
    include "../php/function.php";
    include '../php/headerforsub.php';
    include "../php/db/connect.php";
  

    $year = "2015-";
set_time_limit(0);
 $no1 = 511;
 $no2 = 508;
  ?>
<!Doctype HTML>
<html>

<head>
<link rel="icon" href="../img/snowflake.png" type="image/png" />
<title>Import Attendance</title>
</head>
<body>
  <?php include '../php/sidebarforsub.php';?>
  
  
        
   <div class="col s12" style="margin-left: 5%;">
      <div class="container white z-depth-2" style="margin-top: 2%; height:auto;  padding-top: 1%; padding-bottom: 3%;">
        <div class="row">
          <div class="col s12"> 
          
          <p>(Recommendation: Maximum of 25 Employees in every excel file)</p>
           <h4 style="letter-spacing: 2px;">Import Attendance</h4>
<form method="post" enctype="multipart/form-data"><p style="margin-top: 0px;"></p>
 <div class="input-field col s4" >
<input type="file" name="file" value="Choose file" />
</div>

 <div class="input-field col s4" >
            <button class="medium btn waves-effect waves-light blue darken-3" onclick="showload()" type="submit" name="submit" style="margin-top: -10px; margin-bottom: 10px;">
            IMPORT
            
          <i class="mdi-content-send right"></i>
          </button>
           
    </div>
    
     <div id="loadings" hidden=""  >
          <object data="../images/loading.gif" width="50"></object>
           <span style="font-size: 12;"> Uploading...
          
          Please do not close the browser</span>
          </div>        <p style="clear: both;"></p>
<?php
// i will tell you get data from excel with php

//first of all you add this files your project.
// And i show my excel file and add  some data

//start now :)




if (isset($_POST["submit"])){
    if (!empty($_FILES["file"]["tmp_name"])){
     $data= explode(".",$_FILES["file"]["name"]);
     if ($data[1] == "XLS" || $data[1] == "xls" || $data[1] == "xlsx" ){
            

    error_reporting(0);
    

       
require("reader.php"); // php excel reader
$file=$_FILES["file"]["name"];
$connection=new Spreadsheet_Excel_Reader(); // our main object
$connection->read($file);
$startrow=4;
$endrow=19;
$col1 = 1;





$sheet = $connection->sheets[0];
 
# Get all rows in the sheet
$rows = $sheet['cells'];
 
# Find total number of rows
$rowCount = count($rows);
 
 $employee = $connection->sheets[0]["cells"][2][1];
 $emp = explode(':',$employee);
  
  $dateconfrim = $connection->sheets[0]["cells"][5][1];
  $dateconfrim = explode(".",$dateconfrim);
  $dateconfrim = gmdate("Y")."-".$dateconfrim[0] ."-" . $dateconfrim[1];
  
    $datemonth = $connection->sheets[0]["cells"][5][1];
    $datemonth = explode(".",$datemonth);
    $datemonth = gmdate("Y")."-".$datemonth[0] ."-" . $datemonth[1];
    
    
  
    $query = "SELECT MONTHNAME(date) as monthname FROM attendance WHERE date='$datemonth'";
    $run = mysql_query($query);
    $ans = mysql_fetch_array($run);
    
  
  
                 $todayoryt = $_SESSION["time_in_oryt"];
                 $allactivity = auditSelect("activity",$todayoryt);
                 $activity = "Imported $ans[monthname] " . gmdate("Y")." employees attendance at " . date("h:i:sa");
                 $activity = $allactivity . "+" . $activity;    
                 auditActivity($activity,$todayoryt);
                 

   if (empDataAttendance("date",$dateconfrim) >= 1){
    echo "<script>alert('Sorry..  The attendance is already uploaded, please update the attendance to complete the process');</script>";
   }else{  
  

  
for ($i=5;$i<=$rowCount;$i++){
    

    include "external.php";
 
 
    
    
    $date = $connection->sheets[0]["cells"][$i][1];
    $date = explode(".",$date);
    $date = gmdate("Y")."-".$date[0] ."-" . $date[1];
    
    
    $week =$connection->sheets[0]["cells"][$i][2];
    $inam =$connection->sheets[0]["cells"][$i][3];
    $outam =$connection->sheets[0]["cells"][$i][4];
    $inpm =$connection->sheets[0]["cells"][$i][5];
    $outpm =$connection->sheets[0]["cells"][$i][6];
    $inotin =$connection->sheets[0]["cells"][$i][7];
    $inotout =$connection->sheets[0]["cells"][$i][8];    
    $date2 = $connection->sheets[0]["cells"][$i][9];
    $date2 = explode(".",$date2);
    $date2 = gmdate("Y")."-".$date2[0] ."-" . $date2[1];
    
    $week2 =$connection->sheets[0]["cells"][$i][10];
    $inam2 =$connection->sheets[0]["cells"][$i][11];
    $outam2 =$connection->sheets[0]["cells"][$i][12];
    $inpm2 =$connection->sheets[0]["cells"][$i][13];
    $outpm2 =$connection->sheets[0]["cells"][$i][14];
    $inotin2 =$connection->sheets[0]["cells"][$i][15];
    $inotout2 =$connection->sheets[0]["cells"][$i][16];
    
    
  
  

    
   
  
 //   
    
  
   
   /**
   
 
    if ($connection->sheets[0]["cells"][20][1] != null) {  
       $i+=7;
       
     $employee = $connection->sheets[0]["cells"][24][1];
     $emp = explode(':',$employee);
   
    }else{
        break;
    }
    



        
    if ($connection->sheets[0]["cells"][42][1] == null){  
       $i+=7; 
    $employee = $connection->sheets[0]["cells"][46][1];
    $emp = explode(':',$employee);
    }else{
        break;
    }
    
*/
  





$sqlname = "SELECT * FROM employee WHERE emp_id_no = '$year$emp[1]'";
$results = mysql_query($sqlname);
$name = mysql_fetch_array($results);
$fullname = $name["first_name"] ." ". $name["last_name"];

$sql = "INSERT INTO attendance (emp_id_no,emp_name,date,week,in_am,out_am,in_pm,out_pm,in_overtime,out_overtime) VALUES
                                ('$year$emp[1]','$fullname','$date','$week','$inam','$outam','$inpm','$outpm','$inotin','$inotout')";
mysql_query($sql);

$sql2 ="INSERT INTO attendance (emp_id_no,emp_name,date,week,in_am,out_am,in_pm,out_pm,in_overtime,out_overtime) VALUES
                                ('$year$emp[1]','$fullname','$date2','$week2','$inam2','$outam2','$inpm2','$outpm2','$inotin2','$inotout2')";
mysql_query($sql2);

}
 echo "<script>alert('Employee attendance has been successfully Inserted');</script>";
}
//echo "<script>alert('success');</script>";
        
        
    

}

        
        
  else{
        echo"<span style='margin-left:12px;'> Select XLS file only </span>";
     }     
     
     
}else{
    echo"no file selected";
}
}
       
 

?>
          
          
          
          
                              
</form>

       
       <p style="border-bottom: 2px solid black;"></p>   
          
           <h4 style="letter-spacing: 2px;">Update Attendance</h4>
<form method="post" enctype="multipart/form-data"><p style="margin-top: 0px;"></p>
 <div class="input-field col s4" >
<input type="file" name="fileupdate" value="Choose file" />
</div>

 <div class="input-field col s4" >
            <button class="medium btn waves-effect waves-light blue darken-3" onclick="showload2()" type="submit" name="update" style="margin-top: -10px; margin-bottom: 10px;">
            IMPORT  
            
          <i class="mdi-content-send right"></i>
          </button>
  
    </div>   
     <div id="loading2" hidden=""  >
          <object data="../images/loading.gif" width="50"></object>
           <span style="font-size: 12;"> Updating...
          
          Please do not close the browser</span>
    
         <p style="clear: both;"></p>
<?php
// i will tell you get data from excel with php

//first of all you add this files your project.
// And i show my excel file and add  some data

//start now :)




if (isset($_POST["update"])){
    if (!empty($_FILES["fileupdate"]["tmp_name"])){
     $data= explode(".",$_FILES["fileupdate"]["name"]);
     if ($data[1] == "XLS" || $data[1] == "xls" || $data[1] == "xlsx" ){
            
error_reporting(0);
    

    
    
    
       
require("reader.php"); // php excel reader
$file=$_FILES["fileupdate"]["name"];
$connection=new Spreadsheet_Excel_Reader(); // our main object
$connection->read($file);
$startrow=4;
$endrow=19;
$col1 = 1;





$sheet = $connection->sheets[0];
 
# Get all rows in the sheet
$rows = $sheet['cells'];
 
# Find total number of rows
$rowCount = count($rows);
 
 $employee = $connection->sheets[0]["cells"][2][1];
 $emp = explode(':',$employee);
  

  $dateconfrim = $connection->sheets[0]["cells"][5][1];
  $dateconfrim = explode(".",$dateconfrim);
  $dateconfrim = gmdate("Y")."-".$dateconfrim[0] ."-" . $dateconfrim[1];
  
    $datemonth = $connection->sheets[0]["cells"][5][1];
    $datemonth = explode(".",$datemonth);
    $datemonth = gmdate("Y")."-".$datemonth[0] ."-" . $datemonth[1];
  
    $query = "SELECT MONTHNAME(date) as monthname FROM attendance WHERE date='$datemonth'";
    $run = mysql_query($query);
    $ans = mysql_fetch_array($run);
    
  
  
                 $todayoryt = $_SESSION["time_in_oryt"];
                 $allactivity = auditSelect("activity",$todayoryt);
                 $activity = "Updated $ans[monthname] " . gmdate("Y")." employees attendance at " . date("h:i:sa");
                 $activity = $allactivity . "+" . $activity;    
                 auditActivity($activity,$todayoryt);
  
  

   if (empDataAttendance("date",$dateconfrim) == 0){
    echo "<script>alert('Sorry..  The attendance attendance is not yet uploaded, please upload the attendance first to complete the process');</script>";
   }else{
  

  
for ($i=5;$i<=$rowCount;$i++){
    

      
  include "external.php";
    
    $date = $connection->sheets[0]["cells"][$i][1];
    $date = explode(".",$date);
    $date = gmdate("Y")."-".$date[0] ."-" . $date[1];
    
    
    $week =$connection->sheets[0]["cells"][$i][2];
    $inam =$connection->sheets[0]["cells"][$i][3];
    $outam =$connection->sheets[0]["cells"][$i][4];
    $inpm =$connection->sheets[0]["cells"][$i][5];
    $outpm =$connection->sheets[0]["cells"][$i][6];
    $inotin =$connection->sheets[0]["cells"][$i][7];
    $inotout =$connection->sheets[0]["cells"][$i][8];
    
    $date2 = $connection->sheets[0]["cells"][$i][9];
    $date2 = explode(".",$date2);
    $date2 = gmdate("Y")."-".$date2[0] ."-" . $date2[1];
    
    $week2 =$connection->sheets[0]["cells"][$i][10];
    $inam2 =$connection->sheets[0]["cells"][$i][11];
    $outam2 =$connection->sheets[0]["cells"][$i][12];
    $inpm2 =$connection->sheets[0]["cells"][$i][13];
    $outpm2 =$connection->sheets[0]["cells"][$i][14];
    $inotin2 =$connection->sheets[0]["cells"][$i][15];
    $inotout2 =$connection->sheets[0]["cells"][$i][16];
    
    
    
    
    
   
  
    

   
   
$sqlname = "SELECT * FROM employee WHERE emp_id_no = '$year$emp[1]'";
$results = mysql_query($sqlname);
$name = mysql_fetch_array($results);
$fullname = $name["first_name"] ." ". $name["last_name"];

$sql = "UPDATE attendance SET date = '$date' ,week = '$week',in_am = '$inam',out_am = '$outam',in_pm = '$inpm',out_pm = '$outpm',in_overtime = '$inotin',out_overtime = '$inotout' WHERE emp_id_no = '$year$emp[1]' AND date='$date'"; 
                              
mysql_query($sql);

$sql2 ="UPDATE attendance SET date = '$date2' ,week = '$week2',in_am = '$inam2',out_am = '$outam2',in_pm = '$inpm2',out_pm = '$outpm2',in_overtime = '$inotin2',out_overtime = '$inotout2' WHERE emp_id_no = '$year$emp[1]' AND date='$date2'"; 
        
mysql_query($sql2);

}
 echo "<script>alert('Employee attendance has been successfully updated');</script>";
}
//echo "<script>alert('success');</script>";

 
        
   



}

        
        
  else{
        echo"<span style='margin-left:12px;'> Select XLS file only </span>";
     }     
     
     
}else{
    echo"no file selected";
}
}
       
 

?>
          
          
          
          
                              
</form>
</div>

</div></div>











<style>
td{
    width:60px;
}
</style>
<script>
function showload(){
document.getElementById("loadings").hidden= false;
}

function showload2(){
document.getElementById("loading2").hidden= false;
}
</script>
	<script type="text/javascript" src="../js/jquery-2.1.1.min.js"></script>
  <script type="text/javascript" src="../js/materialize.min.js"></script>
</body>
</html>
  <?php
 }
 }
    else {
        echo "<script>alert('Login as admin HR!');window.location='index.php'</script>";
        sleep(1);
    }
    
?>  