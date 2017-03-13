<?php
session_start();
 if (isset($_SESSION["accesscode"])){
     if ($_SESSION["accesscode"] == "newtaytayiceplant3" || $_SESSION["accesscode"] == "newtaytayiceplant33" || $_SESSION["accesscode"] == "newtaytayiceplant333" || $_SESSION["accesscode"] == "newtaytayiceplant4"){  
        
include "../php/db/connect.php";

$today  = gmdate('Y/m/d');
$sql = "SELECT * FROM `todays_delivery` WHERE status = 'Not listed' AND date_created ='$today'";
$result = mysql_query($sql);






require "fpdf.php";
$pdf = new FPDF();
$pdf->AddPage("L");

$pdf->SetFont("ARIAL",'B','17');
$pdf->Cell(10,8,"",0,0);
$pdf->Cell(0,5,"New Taytay Ice Plant",0,1,'C');
$pdf->SetFont("ARIAL",'','12');
$pdf->Cell(0,5,"041 National Road Sitio Ilog Pugad Bangiada, San Juan Taytay, Rizal",0,1,'C');
$pdf->Cell(0,5,"VAT Reg. TIN no. 231-107-880-000",0,1,'C');
$pdf->Cell(0,5,"Tel. Nos. 806-0935 / 806-0034",0,1,'C');
$pdf->SetFont("Arial","U");
$pdf->Cell(0,2,"                                                                                                                                                                                                                         ",0,1,'C');


$pdf->SetFont("ARIAL",'B','15');
$pdf->Cell(40,5,"",0,1);
$pdf->Cell(10,8,"",0,0);
$pdf->Cell(256,12,"TODAY'S DELIVERY",0,1,'C');
$pdf->SetFont("ARIAL",'','10');



$pdf->Cell(10,8,"",0,0);
$pdf->Cell(40,8,"Order No:",0,0,'C');
$pdf->Cell(38,8,"Customer's Name:",0,0,'C');
$pdf->Cell(143,8,"Address",0,0,'C');
$pdf->Cell(38,8,"Signature:",0,1,'C');




while ($row = mysql_fetch_array($result)){
    
$pdf->Cell(10,8,"",0,0);
$pdf->Cell(40,8,"$row[order_no]","B",0,'C');
$pdf->Cell(38,8,"$row[full_name]","B",0,'C');
$pdf->Cell(143,8,"$row[address]","B",0,'C');
$pdf->Cell(5,8,"  ",0,0,'C');
$pdf->Cell(35,8,"","B",1,'C');
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