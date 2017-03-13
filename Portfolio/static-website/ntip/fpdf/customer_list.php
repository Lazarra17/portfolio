<?php
session_start();

 if (isset($_SESSION["accesscode"])){
     if ($_SESSION["accesscode"] == "newtaytayiceplant2" || $_SESSION["accesscode"] == "newtaytayiceplant22" || $_SESSION["accesscode"] == "newtaytayiceplant4"){  
        
include "../php/db/connect.php";


$sql = "SELECT * FROM `customer`";
$result = mysql_query($sql);






require "fpdf.php";
$pdf = new FPDF();
$pdf->AddPage("L");
$pdf->SetFont("ARIAL",'B','20');
$pdf->Cell(38,8,"",0,1);
$pdf->Cell(0,12,"Customers LIST",1,1,'C');
$pdf->SetFont("ARIAL",'','10');

$pdf->Cell(38,8,"Customer Name",1,0,'C');
$pdf->Cell(25,8,"Gender",1,0,'C');
$pdf->Cell(88,8,"Address",1,0,'C');
$pdf->Cell(38,8,"Contact",1,0,'C');
$pdf->Cell(50,8,"Email",1,0,'C');
$pdf->Cell(38,8,"Date Joined",1,1,'C');
while ($row = mysql_fetch_array($result)){
    
$pdf->Cell(38,8,"$row[fname] $row[lname] ",1,0,'C');
$pdf->Cell(25,8,"$row[gender] ",1,0,'C');
$pdf->Cell(88,8,"$row[address]",1,0,'C');
$pdf->Cell(38,8,"$row[contact]",1,0,'C');
$pdf->Cell(50,8,"$row[email]",1,0,'C');
$pdf->Cell(38,8,"$row[date_created]",1,1,'C');   
}

$pdf->Output();

?>
<?php
 }
 
    else {
        echo "<script>alert('Please, login as marketing admin!');window.location='../index.php'</script>";
        sleep(1);
    }}
    else{
        echo "<script>alert('Please, login as marketing admin!');window.location='../index.php'</script>";
        sleep(1);
    }
    
?> 