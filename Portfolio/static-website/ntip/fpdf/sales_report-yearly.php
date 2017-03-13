<?php
session_start();
 if (isset($_SESSION["accesscode"])){
     if ($_SESSION["accesscode"] == "newtaytayiceplant3" || $_SESSION["accesscode"] == "newtaytayiceplant33" || $_SESSION["accesscode"] == "newtaytayiceplant333" || $_SESSION["accesscode"] == "newtaytayiceplant4"){  
        
include "../php/db/connect.php";



$year = $_GET["year"];

require "fpdf.php";
$pdf = new FPDF();



//$query = "SELECT DISTINCT MONTHNAME(date_created) as month FROM `receipt`";





$price =$total_price = $total_tax = $total_amount_income = $total_amount_income_final = $total_tax_final= $total_price_final= "";

$sql2 = "SELECT DISTINCT MONTHNAME(date_added) as mm FROM receipt WHERE YEAR(date_added) = '$year' AND tax <> '' ORDER BY date_added";
$res = mysql_query($sql2);
while ($monthname = mysql_fetch_array($res)){ 


$pdf->AddPage("L");
$pdf->SetFont("ARIAL",'B','20');
$pdf->Cell(38,8,"",0,1);
$pdf->Cell(0,12,"SALES REPORT YEAR $year",1,1,'C');
$pdf->Cell(0,12,"$monthname[mm]",1,1,'C');
$pdf->SetFont("ARIAL",'','10');

$pdf->Cell(25,8,"Order Date",1,0,'C');
$pdf->Cell(38,8,"Customer Name",1,0,'C');
$pdf->Cell(121,8,"Address",1,0,'C');
$pdf->Cell(40,8,"Particulars",1,0,'C');
$pdf->Cell(18,8,"Qty",1,0,'C');
$pdf->Cell(18,8,"TAX",1,0,'C');
$pdf->Cell(17,8,"Amount",1,1,'C');

$sql = "SELECT * FROM `receipt` WHERE MONTHNAME(date_added) = '$monthname[mm]' AND address <> ''";
$result = mysql_query($sql);
while ($row = mysql_fetch_array($result)){
 
$pdf->Cell(25,8,"$row[date_added]",1,0,'C');     
$pdf->Cell(38,8,"$row[full_name] ",1,0,'C');
$pdf->Cell(121,8,"$row[address] ",1,0,'C');
$pdf->Cell(40,8,"$row[particulars]",1,0,'C');
$pdf->Cell(18,8,"$row[quantity]",1,0,'C');
$pdf->Cell(18,8,"$row[tax]",1,0,'C');  
$pdf->Cell(17,8,$price = $row["sub_total"],1,1,'C');   
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

$total_price_final += $total_price;
$total_tax_final += $total_tax;
$total_amount_income_final += $total_amount_income;


$total_price = 0;
$total_tax = 0;
$total_amount_income = 0;



}

$pdf->AddPage("L");
$pdf->SetFont("ARIAL",'B','20');
$pdf->Cell(38,8,"",0,1);
$pdf->Cell(0,12,"SALES REPORT YEAR $year",1,1,'C');
$pdf->Cell(0,12,"TOTAL",1,1,'C');
$pdf->SetFont("ARIAL",'','10');





$pdf->Cell(139,8,"TOTAL AMOUNT TAX",1,0,'C');
$pdf->Cell(138,8,"TOTAL AMOUNT INCOME",1,1,'C');

$pdf->Cell(139,8,$total_tax_final,1,0,'C');   
$pdf->Cell(138,8,$total_amount_income_final,1,1,'C');   


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