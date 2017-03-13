<?php
session_start();

 if (isset($_SESSION["accesscode"])){
     if ($_SESSION["accesscode"] == "newtaytayiceplant2" || $_SESSION["accesscode"] == "newtaytayiceplant22" || $_SESSION["accesscode"] == "newtaytayiceplant4"){  


include "../php/db/connect.php";





    






require "fpdf.php";
$pdf = new FPDF();


if (isset($_GET["reports"])){

$sql2 = "SELECT DISTINCT email FROM `orders`";
$result2 = mysql_query($sql2);
while ($row= mysql_fetch_array($result2)){

    
$pdf->AddPage("P");
$sql = "SELECT * FROM `orders` WHERE email='$row[email]'";
$result = mysql_query($sql);

while ($row = mysql_fetch_array($result)){
$pdf->SetFont("ARIAL",'B','20');

$pdf->Cell(38,8,"",0,1);
$pdf->Cell(10,8,"",0,0);
$pdf->Cell(170,12,"ORDERS LIST",1,1,'C');
$pdf->SetFont("ARIAL",'','10');
$pdf->Cell(10,8,"",0,0);
$pdf->Cell(30,8,"Customer Name",1,0,'L');
$pdf->Cell(140,8,"$row[customer_name]",1,1);
$pdf->Cell(10,8,"",0,0);
$pdf->Cell(30,8,"Address",1,0,'L');
$pdf->Cell(140,8,"$row[customer_address]",1,1);
$pdf->Cell(10,8,"",0,0);
$pdf->Cell(30,8,"Email",1,0,'L');
$pdf->Cell(140,8,"$row[email]",1,1);
$pdf->Cell(10,8,"",0,0);
$pdf->Cell(30,8,"Contact",1,0,'L');
$pdf->Cell(140,8,"$row[contacts]",1,1);
$pdf->Cell(10,8,"",0,0);
$pdf->Cell(42,8,"Order Date",1,0,'C');
$pdf->Cell(43,8,"Particulars",1,0,'C');
$pdf->Cell(43,8,"Quantity",1,0,'C');
$pdf->Cell(42,8,"Price",1,1,'C');


//$sql = "SELECT * FROM `orders` WHERE email='shagilazarra@yahoo.com'";
$result = mysql_query($sql);


while ($row = mysql_fetch_array($result)){
$pdf->Cell(10,8,"",0,0);
$pdf->Cell(42,8,"$row[order_date]",1,0,'C');   
$pdf->Cell(43,8,"$row[particulars]",1,0,'C');
$pdf->Cell(43,8,"$row[items]",1,0,'C');
$pdf->Cell(42,8,"$row[price]",1,1,'C');




}
}
}
}

elseif (isset($_GET["customer_name"])){
    
$customer_name = $_GET["customer_name"];
$pdf->AddPage("P");

$sql = "SELECT * FROM `orders` WHERE email='$customer_name'";
$result = mysql_query($sql);

while ($row = mysql_fetch_array($result)){
$pdf->SetFont("ARIAL",'B','20');

$pdf->Cell(38,8,"",0,1);
$pdf->Cell(10,8,"",0,0);
$pdf->Cell(170,12,"ORDERS LIST",1,1,'C');
$pdf->SetFont("ARIAL",'','10');
$pdf->Cell(10,8,"",0,0);
$pdf->Cell(30,8,"Customer Name",1,0,'L');
$pdf->Cell(140,8,"$row[customer_name]",1,1);
$pdf->Cell(10,8,"",0,0);
$pdf->Cell(30,8,"Address",1,0,'L');
$pdf->Cell(140,8,"$row[customer_address]",1,1);
$pdf->Cell(10,8,"",0,0);
$pdf->Cell(30,8,"Email",1,0,'L');
$pdf->Cell(140,8,"$row[email]",1,1);
$pdf->Cell(10,8,"",0,0);
$pdf->Cell(30,8,"Contact",1,0,'L');
$pdf->Cell(140,8,"$row[contacts]",1,1);
$pdf->Cell(10,8,"",0,0);
$pdf->Cell(42,8,"Order Date",1,0,'C');
$pdf->Cell(43,8,"Particulars",1,0,'C');
$pdf->Cell(43,8,"Quantity",1,0,'C');
$pdf->Cell(42,8,"Price",1,1,'C');


//$sql = "SELECT * FROM `orders` WHERE email='shagilazarra@yahoo.com'";
$result = mysql_query($sql);


while ($row = mysql_fetch_array($result)){
$pdf->Cell(10,8,"",0,0);
$pdf->Cell(42,8,"$row[order_date]",1,0,'C');   
$pdf->Cell(43,8,"$row[particulars]",1,0,'C');
$pdf->Cell(43,8,"$row[items]",1,0,'C');
$pdf->Cell(42,8,"$row[price]",1,1,'C');




}
}
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