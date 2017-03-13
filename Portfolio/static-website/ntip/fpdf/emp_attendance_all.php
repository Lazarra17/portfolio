<?php

  

include "../php/db/connect.php";








$sql2 = "SELECT DISTINCT emp_id_no,emp_name FROM `attendance` ORDER BY emp_id_no,date";
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

$sql = "SELECT * FROM `attendance` WHERE emp_id_no='$rows[emp_id_no]' ORDER BY emp_id_no,date";
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
?>
<?php

    
?> 