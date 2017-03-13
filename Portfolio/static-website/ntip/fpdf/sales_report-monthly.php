<?php
session_start();
 if (isset($_SESSION["accesscode"])){
     if ($_SESSION["accesscode"] == "newtaytayiceplant3" || $_SESSION["accesscode"] == "newtaytayiceplant33" || $_SESSION["accesscode"] == "newtaytayiceplant333" || $_SESSION["accesscode"] == "newtaytayiceplant4"){  
        
include "../php/db/connect.php";


$month = $_GET["month"];
$year = $_GET["year"];


$sql = "SELECT * FROM `receipt` WHERE MONTH(date_added) = '$month' AND YEAR(date_added) = '$year' AND tax <> ''";
$result = mysql_query($sql);
$price =$total_price = $total_tax=$total_amount_income= "";
if (mysql_num_rows($result) >= 1){

$sql2 = "select MONTHNAME(date_added) as mm, YEAR(date_added) as yy FROM receipt WHERE MONTH(date_added) = '$month' AND YEAR(date_added) = '$year' AND tax <> ''";
$res = mysql_query($sql2);
$monthname = mysql_fetch_array($res); 
$year = mysql_fetch_array($res); 

require "fpdf.php";
$pdf = new FPDF();
$pdf->AddPage("L");
$pdf->SetFont("ARIAL",'B','20');
$pdf->Cell(38,8,"",0,1);
$pdf->Cell(0,12,"SALES REPORT MONTHLY - $monthname[mm] $year[yy]",1,1,'C');
$pdf->SetFont("ARIAL",'','10');

$pdf->Cell(25,8,"Order Date",1,0,'C');
$pdf->Cell(38,8,"Customer Name",1,0,'C');
$pdf->Cell(125,8,"Address",1,0,'C');
$pdf->Cell(40,8,"Particulars",1,0,'C');
$pdf->Cell(14,8,"Qty",1,0,'C');
$pdf->Cell(15,8,"TAX",1,0,'C');
$pdf->Cell(20,8,"Price",1,1,'C');


while ($row = mysql_fetch_array($result)){
 
$pdf->Cell(25,8,"$row[date_added]",1,0,'C');     
$pdf->Cell(38,8,"$row[full_name] ",1,0,'C');
$pdf->Cell(125,8,"$row[address] ",1,0,'C');
$pdf->Cell(40,8,"$row[particulars]",1,0,'C');
$pdf->Cell(14,8,"$row[quantity]",1,0,'C');
$pdf->Cell(15,8,"$row[tax]",1,0,'C');  
$pdf->Cell(20,8,$price = $row["sub_total"],1,1,'C');   
$total_price += $price;
$total_tax = $total_price *.12;
$total_amount_income = $total_price - $total_tax;
}
$pdf->Cell(184,8,"",0,0,'C');
$pdf->Cell(44,8,"Sub Total Amount",1,0,'C');
$pdf->Cell(25,8,$total_tax,1,0,'C');   
$pdf->Cell(24,8,$total_price,1,1,'C');   


$pdf->Cell(184,8,"",0,0,'C');
$pdf->Cell(44,8,"TOTAL AMOUNT INCOME",1,0,'C');
$pdf->Cell(49,8,$total_amount_income,1,1,'C');   
$pdf->Output();

}
else{
    echo "<script>alert('No records found');window.location ='../reports-sales.php?monthly'</script>";
        
}
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