<?php
session_start();

 if (isset($_SESSION["accesscode"])){
     if ($_SESSION["accesscode"] == "newtaytayiceplant2" || $_SESSION["accesscode"] == "newtaytayiceplant22" || $_SESSION["accesscode"] == "newtaytayiceplant4"){  


include "../php/db/connect.php";




$sql = "SELECT * FROM `products`";
$result = mysql_query($sql);

$pos_y = 40;


require "fpdf.php";
$pdf = new FPDF();

$pdf->AddPage("P");
$pdf->SetFont("ARIAL",'B','20');
$pdf->Cell(38,8,"",0,1);
$pdf->Cell(0,12,"Inventory LIST",1,1,'C');
$pdf->SetFont("ARIAL",'','10');

$pdf->Cell(22,8,"Product No:",1,0,'C');
$pdf->Cell(35,8,"Product Name",1,0,'C');
$pdf->Cell(52,8,"Product Picture",1,0,'C');
$pdf->Cell(27,8,"Per/Unit",1,0,'C');
$pdf->Cell(27,8,"Price",1,0,'C');
$pdf->Cell(27,8,"Stocks",1,1,'C');
while ($row = mysql_fetch_array($result)){
    
$pdf->Cell(22,30,"$row[product_no]",1,0,'C');
$pdf->Cell(35,30,"$row[product_name] ",1,0,'C');
$pdf->Cell(52,30,$pdf->Image("../$row[product_picture]",75,$pos_y,35,0),1,0,'C');

$pdf->Cell(27,30,"$row[unit]",1,0,'C');
$pdf->Cell(27,30,"$row[price]",1,0,'C');
$pdf->Cell(27,30,"$row[stocks]",1,1,'C');  



 
$pos_y += 30;
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