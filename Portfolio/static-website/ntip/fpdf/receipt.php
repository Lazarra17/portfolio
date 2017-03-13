<?php
session_start();
 if (isset($_SESSION["accesscode"])){
     if ($_SESSION["accesscode"] == "newtaytayiceplant3" || $_SESSION["accesscode"] == "newtaytayiceplant33" || $_SESSION["accesscode"] == "newtaytayiceplant333" || $_SESSION["accesscode"] == "newtaytayiceplant4"){  
        
include "../php/db/connect.php";


include "../php/function.php";

               


$receipt = $_GET["orders_id"];
receiptUpdate($receipt);
$or_no = userData8("OR_no") + 1;
$totals= 0;

    



require "fpdf.php";






$pdf = new FPDF();

$order_id = $_GET["orders_id"];


    
$pdf->AddPage("P");

    
$pdf->SetFont("ARIAL",'B','17');
$pdf->Cell(10,8,"",0,0);
$pdf->Cell(170,5,"New Taytay Ice Plant",0,1,'C');
$pdf->SetFont("ARIAL",'','12');
$pdf->Cell(190,5,"041 National Road Sitio Ilog Pugad Bangiada, San Juan Taytay, Rizal",0,1,'C');
$pdf->Cell(190,5,"VAT Reg. TIN no. 231-107-880-000",0,1,'C');
$pdf->Cell(190,5,"Tel. Nos. 806-0935 / 806-0034",0,1,'C');
$pdf->SetFont("Arial","U");
$pdf->Cell(190,2,"                                                                                                                                        ",0,1,'C');
$pdf->SetFont("Arial","B","15");
$pdf->Cell(0,10,"",0,1);
$pdf->Cell(15,10,"",0,0);
$pdf->Cell(100,10,"Sales Invoice",0,0,'L');
$pdf->SetFont("Arial","","11");
$pdf->Cell(0,10,gmdate('M-d-Y'),0,1);
$pdf->Cell(15,10,"",0,0);


    
$pdf->Cell(12,10,"Name: ",0,0);
$pdf->Cell(50,10,userData6('customer_name',$receipt),0,0);
$pdf->Cell(37,10,"",0,0);
$pdf->Cell(12,10,"OR No:",0,0);
$pdf->Cell(50,10," $or_no",0,1);

$pdf->Cell(15,10,"",0,0);
$pdf->Cell(15,10,"Address: ",0,0);
$pdf->Cell(50,10,userData6('customer_address',$receipt).":",0,1);
$pdf->SetFont("Arial","B","11");
$pdf->Cell(0,10,"",0,1);
$pdf->Cell(5,10,"",0,0,"C");
$pdf->Cell(63,10,"Particulars",0,0,"C");
$pdf->Cell(30,10,"Quantity",0,0,"C");
$pdf->Cell(30,10,"Unit Price",0,0,"C");
$pdf->Cell(35,10,"AMOUNT",0,1,"C");
$pdf->SetFont("Arial","","11");

$sql = "SELECT * FROM `orders` WHERE order_id= '$order_id' ";
$result = mysql_query($sql);
while ($row = mysql_fetch_array($result)){
        
$pdf->Cell(5,10,"",0,0,"C");
$pdf->Cell(63,10,"$row[particulars]","",0,"C");
$pdf->Cell(30,10,"$row[items]","",0,"C");
$pdf->Cell(30,10,"$row[unitprice]","",0,"C");
$pdf->Cell(35,10,"$row[price]","",1,"C");

$pdf->Cell(13,10,"",0,0,"C");
$pdf->Cell(162,10," ","T",1);
$totals += $row["price"]; 

addReceipt($or_no,$row["customer_name"], $row["customer_address"],$row["particulars"],$row["items"],$row["price"],$row["price"] * .12,($row["price"])-($row["price"] * .12));

}

$pdf->SetFont("Arial","","9");
$pdf->Cell(110,3,"",0,0,"L");
$pdf->Cell(40,7,"Sub Total",0,0,"L");
$pdf->Cell(35,7,($totals)-($totals * .12),0,1,"L");


$pdf->SetFont("Arial","","9");
$pdf->Cell(110,3,"",0,0,"L");
$pdf->Cell(40,7,"VAT",0,0,"L");
$pdf->Cell(35,7,$totals * .12,0,1,"L");


$pdf->SetFont("Arial","B","11");
$pdf->Cell(110,3,"",0,0,"L");
$pdf->Cell(40,7,"TOTAL AMOUNT",0,0,"L");
$pdf->Cell(35,7,$totals,0,1,"L");

$pdf->SetFont("Arial","U","11");
$pdf->Cell(5,12,"",0,1,"C");
$pdf->Cell(110,0,"",0,0,"C");
$pdf->Cell(35,7,"                                        ",0,1,"L");
$pdf->SetFont("Arial","","11");

$pdf->Cell(112,10,"",0,0,"C");
$pdf->Cell(40,7,"Customer's Signature",0,0,"L");








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