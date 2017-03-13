<?php
session_start();
 if (isset($_SESSION["accesscode"])){
     if ($_SESSION["accesscode"] == "newtaytayiceplant3" || $_SESSION["accesscode"] == "newtaytayiceplant33" || $_SESSION["accesscode"] == "newtaytayiceplant333" || $_SESSION["accesscode"] == "newtaytayiceplant4"){  
        
include "../php/db/connect.php";


$sql = "SELECT * FROM `successful_deliveries`";
$result = mysql_query($sql);






require "fpdf.php";
$pdf = new FPDF();
$pdf->AddPage("L");
$pdf->SetFont("ARIAL",'B','20');
$pdf->Cell(38,8,"",0,1);
$pdf->Cell(0,12,"SUCCESSFUL DELIVERIES",1,1,'C');
$pdf->SetFont("ARIAL",'','10');

$pdf->Cell(38,8,"Customer Name",1,0,'C');
$pdf->Cell(121,8,"Address",1,0,'C');
$pdf->Cell(22,8,"Particulars",1,0,'C');
$pdf->Cell(22,8,"Quantity",1,0,'C');
$pdf->Cell(24,8,"Price",1,0,'C');
$pdf->Cell(25,8,"Order Date",1,0,'C');
$pdf->Cell(25,8,"Shipped Date",1,1,'C');

while ($row = mysql_fetch_array($result)){
    
$pdf->Cell(38,8,"$row[customer_name] ",1,0,'C');
$pdf->Cell(121,8,"$row[address] ",1,0,'C');
$pdf->Cell(22,8,"$row[particulars]",1,0,'C');
$pdf->Cell(22,8,"$row[quantity]",1,0,'C');
$pdf->Cell(24,8,"$row[total_price]",1,0,'C');  
$pdf->Cell(25,8,"$row[date_order]",1,0,'C');   
$pdf->Cell(25,8,"$row[date_shipped]",1,1,'C');   
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