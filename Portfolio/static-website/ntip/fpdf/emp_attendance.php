<?php
session_start();
  
        if (isset($_SESSION["accesscode"])){
     if ($_SESSION["accesscode"] == "newtaytayiceplant1" || $_SESSION["accesscode"] == "newtaytayiceplant11" || $_SESSION["accesscode"] == "newtaytayiceplant4"){  

include "../php/db/connect.php";


$searchname =  $_POST["searchname"];

$sql = "SELECT DISTINCT emp_name,emp_id_no FROM `attendance` WHERE emp_name='$searchname' OR emp_id_no='$searchname' ORDER BY emp_id_no,date";
$result = mysql_query($sql);

if (mysql_num_rows($result) == 1){
    
    
    
    
    
    
    $sql = "SELECT * FROM `attendance` WHERE emp_name='$searchname' OR emp_id_no='$searchname' ORDER BY emp_id_no,date";



$sql2 = "SELECT DISTINCT emp_id_no,emp_name FROM `attendance` WHERE emp_name='$searchname' OR emp_id_no='$searchname' ORDER BY emp_id_no,date";
$result2 = mysql_query($sql2);



require "fpdf.php";
$pdf = new FPDF();


while ($rows = mysql_fetch_array($result2)){
    
    


$pdf->AddPage();
$pdf->SetFont("ARIAL",'B','20');
$pdf->Cell(38,8,"",0,1);
$pdf->Cell(191,12,"Employee Attendance " . gmdate("Y") ,1,1,'C');
$pdf->SetFont("ARIAL",'','11');
$pdf->Cell(40,8,"Employee ID",1,0,'L');
$pdf->Cell(151,8,"$rows[emp_id_no]",1,1,'L');
$pdf->Cell(40,8,"Employee Name",1,0,'L');
$pdf->Cell(151,8,"$rows[emp_name]",1,1,'L');
$pdf->Cell(27,6,"DATE",1,0,'C');
$pdf->Cell(28,6,"In AM",1,0,'C');
$pdf->Cell(28,6,"Out AM",1,0,'C');
$pdf->Cell(27,6,"In PM",1,0,'C');
$pdf->Cell(27,6,"Out PM",1,0,'C');
$pdf->Cell(27,6,"In OT",1,0,'C');
$pdf->Cell(27,6,"Out OT",1,1,'C');

$result = mysql_query($sql);
while ($row = mysql_fetch_array($result)){


$pdf->Cell(27,6,"$row[date]",1,0,'C');
$pdf->Cell(28,6,"$row[in_am]",1,0,'C');
$pdf->Cell(28,6,"$row[out_am]",1,0,'C');
$pdf->Cell(27,6,"$row[in_pm]",1,0,'C');
$pdf->Cell(27,6,"$row[out_pm]",1,0,'C');
$pdf->Cell(27,6,"$row[in_overtime]",1,0,'C');
$pdf->Cell(27,6,"$row[out_overtime]",1,1,'C');

}}
$pdf->Output();

}else{
    echo "<script>alert('No records found');window.location = '../reports.php?No-records-found'</script>";
 
}

?>
<?php
 }
 
    else {
        echo "<script>alert('Please, login as HR admin!');window.location='index.php'</script>";
        sleep(1);
    }}
    else{
        echo "<script>alert('Please, login as HR admin!');window.location='index.php'</script>";
        sleep(1);
    }
    
?> 
