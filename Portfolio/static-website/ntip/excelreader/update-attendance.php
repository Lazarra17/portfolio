<?php
session_start();
    include "../php/function.php";
    include '../php/headerforsub.php';
  
  ?>
<html>
<body>
<head>
<title>Import Attendance</title>
</head>
  <?php include '../php/sidebarforsub.php';?>
  
  
        
   <div class="col s12" style="margin-left: 5%;">
      <div class="container white z-depth-2" style="margin-top: 2%; height:auto;  padding-top: 1%; padding-bottom: 3%;">
        <div class="row">
          <div class="col s12"> 
           <h4 style="letter-spacing: 2px;">Import Attendance</h4>
<form method="post" enctype="multipart/form-data"><p style="margin-top: 0px;"></p>
 <div class="input-field col s4" >
<input type="file" name="file" value="Choose file" />
</div>

 <div class="input-field col s4" >
            <button class="medium btn waves-effect waves-light blue darken-3" type="submit" name="submit" style="margin-top: -10px;">
            IMPORT
            
          <i class="mdi-content-send right"></i>
          </button>
          
                              
</form>
</div></div></div></div>
<style>
td{
    width:60px;
}
</style>
	<script type="text/javascript" src="../js/jquery-2.1.1.min.js"></script>
  <script type="text/javascript" src="../js/materialize.min.js"></script>
</body>
</html>
<?php
// i will tell you get data from excel with php

//first of all you add this files your project.
// And i show my excel file and add  some data

//start now :)

 error_reporting(0);


if (isset($_POST["submit"])){
    if (!empty($_FILES["file"]["tmp_name"])){
     $data= explode(".",$_FILES["file"]["name"]);
     if ($data[1] == "XLS" || $data[1] == "xls" || $data[1] == "xlsx" ){
            

    
       
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
  
  
  

  
for ($i=5;$i<=$rowCount;$i++){
    

      
    if ($i==20){  
       $i+=7;
    }
    if ($i==27){
        $employee = $connection->sheets[0]["cells"][24][1];
         $emp = explode(':',$employee);
    }
    
    $date = $connection->sheets[0]["cells"][$i][1];
    $week =$connection->sheets[0]["cells"][$i][2];
    $inam =$connection->sheets[0]["cells"][$i][3];
    $outam =$connection->sheets[0]["cells"][$i][4];
    $inpm =$connection->sheets[0]["cells"][$i][5];
    $outpm =$connection->sheets[0]["cells"][$i][6];
    $inotin =$connection->sheets[0]["cells"][$i][7];
    $inotout =$connection->sheets[0]["cells"][$i][8];
    $date2 = $connection->sheets[0]["cells"][$i][9];
    $week2 =$connection->sheets[0]["cells"][$i][10];
    $inam2 =$connection->sheets[0]["cells"][$i][11];
    $outam2 =$connection->sheets[0]["cells"][$i][12];
    $inpm2 =$connection->sheets[0]["cells"][$i][13];
    $outpm2 =$connection->sheets[0]["cells"][$i][14];
    $inotin2 =$connection->sheets[0]["cells"][$i][15];
    $inotout2 =$connection->sheets[0]["cells"][$i][16];
    
    
    
    
    
   
  
    
    
    if ($i==42){
        break;
    }
   




mysql_connect('localhost','root','');
mysql_select_db('ntips');

$sqlname = "SELECT * FROM employee WHERE emp_id = '$emp[1]'";
$results = mysql_query($sqlname);
$name = mysql_fetch_array($results);
$fullname = $name["first_name"] ." ". $name["last_name"];

$sql = "INSERT INTO attendance (emp_id,emp_name,date,week,in_am,out_am,in_pm,out_pm,in_overtime,out_overtime) VALUES
                                ('$emp[1]','$fullname','$date','$week','$inam','$outam','$inpm','$outpm','$inotin','$inotout')";
mysql_query($sql);

$sql2 ="INSERT INTO attendance (emp_id,emp_name,date,week,in_am,out_am,in_pm,out_pm,in_overtime,out_overtime) VALUES
                                ('$emp[1]','$fullname','$date2','$week2','$inam2','$outam2','$inpm2','$outpm2','$inotin2','$inotout2')";
mysql_query($sql2);

}
//echo "<script>alert('success');</script>";
        
        
     echo "<script>alert('success');</script>";

}

        
        
  else{
        echo"Select XLS file only";
     }     
     
     
}else{
    echo"no file selected";
}
}
       
 




?>