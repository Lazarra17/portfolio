<?php
session_start();
 if (isset($_SESSION["accesscode"])){
     if ($_SESSION["accesscode"] == "newtaytayiceplant3" || $_SESSION["accesscode"] == "newtaytayiceplant33" || $_SESSION["accesscode"] == "newtaytayiceplant333" || $_SESSION["accesscode"] == "newtaytayiceplant4"){  
        
include "../php/db/connect.php";


$sql = "SELECT * FROM `receipt` WHERE or_no <> '7000'";
$result = mysql_query($sql);






require "fpdf.php";
$pdf = new FPDF();
$pdf->AddPage("L");
$pdf->SetFont("ARIAL",'B','20');
$pdf->Cell(38,8,"",0,1);
$pdf->Cell(0,12,"All Receipts",1,1,'C');
$pdf->SetFont("ARIAL",'','9');

$pdf->Cell(25,8,"OR No",1,0,'C');
$pdf->Cell(25,8,"Date",1,0,'C');
$pdf->Cell(38,8,"Customer Name",1,0,'C');
$pdf->Cell(112  ,8,"Address",1,0,'C');
$pdf->Cell(32,8,"Particulars",1,0,'C');
$pdf->Cell(10,8,"Qty",1,0,'C');
$pdf->Cell(15,8,"Sub total",1,0,'C');
$pdf->Cell(10,8,"Tax",1,0,'C');
$pdf->Cell(10,8,"Total",1,1,'C');


while ($row = mysql_fetch_array($result)){
    
$pdf->Cell(25,8,"$row[OR_no]",1,0,'C');   
$pdf->Cell(25,8,"$row[date_added]",1,0,'C');     
$pdf->Cell(38,8,"$row[full_name] ",1,0,'C');
$pdf->Cell(112,8,"$row[address] ",1,0,'C');
$pdf->Cell(32,8,"$row[particulars]",1,0,'C');
$pdf->Cell(10,8,"$row[quantity]",1,0,'C');
$pdf->Cell(15,8,"$row[total_price]",1,0,'C');
$pdf->Cell(10,8,"$row[tax]",1,0,'C');
$pdf->Cell(10,8,"$row[sub_total]",1,1,'C');  
 
}

$pdf->Output();
?>

<?php
 }
 
    else {
        echo "<script>alert('Please, login as production admin!');window.location='../index.php'</script>";
        sleep(1);
    }}
    else{
        echo "<script>alert('Please, login as production admin!');window.location='../index.php'</script>";
        sleep(1);
    }
    
?> 