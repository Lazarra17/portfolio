<?php
session_start();
 if (isset($_SESSION["accesscode"])){
     if ($_SESSION["accesscode"] == "newtaytayiceplant3" || $_SESSION["accesscode"] == "newtaytayiceplant33" || $_SESSION["accesscode"] == "newtaytayiceplant333" || $_SESSION["accesscode"] == "newtaytayiceplant4"){  
        
include "../php/db/connect.php";


$datefrom = $_GET["datefrom"];
$dateuntil = $_GET["dateuntil"];

$sql = "SELECT * FROM `receipt` WHERE date_added >= '$datefrom' AND date_added <= '$dateuntil' AND address <> ''";
$result = mysql_query($sql);
mysql_num_rows($result);
if (mysql_num_rows($result) >= 1){
$price =$total_price = "";




require "fpdf.php";
$pdf = new FPDF();
$pdf->AddPage("L");
$pdf->SetFont("ARIAL",'B','20');
$pdf->Cell(38,8,"",0,1);
$pdf->Cell(0,12,"SALES REPORT WEEKLY",1,1,'C');
$pdf->SetFont("ARIAL",'','10');

$pdf->Cell(25,8,"Order Date",1,0,'C');
$pdf->Cell(38,8,"Customer Name",1,0,'C');
$pdf->Cell(121,8,"Address",1,0,'C');
$pdf->Cell(31,8,"Particulars",1,0,'C');
$pdf->Cell(13,8,"Qty",1,0,'C');
$pdf->Cell(25,8,"TAX",1,0,'C');
$pdf->Cell(24,8,"Price",1,1,'C');


while ($row = mysql_fetch_array($result)){
 
$pdf->Cell(25,8,"$row[date_added]",1,0,'C');     
$pdf->Cell(38,8,"$row[full_name] ",1,0,'C');
$pdf->Cell(121,8,"$row[address] ",1,0,'C');
$pdf->Cell(31,8,"$row[particulars]",1,0,'C');
$pdf->Cell(13,8,"$row[quantity]",1,0,'C');
$pdf->Cell(25,8,"$row[tax]",1,0,'C');  
$pdf->Cell(24,8,$price = $row["sub_total"],1,1,'C');   
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
    echo "<script>alert('No records found');window.location='../reports.php'</script>";   
    
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