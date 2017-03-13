<?php
session_start();
  
        if (isset($_SESSION["accesscode"])){
     if ($_SESSION["accesscode"] == "newtaytayiceplant1" || $_SESSION["accesscode"] == "newtaytayiceplant11" || $_SESSION["accesscode"] == "newtaytayiceplant4"){  

include "../php/db/connect.php";


$sql = "SELECT * FROM `employee`";
$result = mysql_query($sql);






require "fpdf.php";
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont("ARIAL",'B','20');
$pdf->Cell(38,8,"",0,1);
$pdf->Cell(190,12,"Employee LIST",1,1,'C');
$pdf->SetFont("ARIAL",'','11');
$pdf->Cell(38,8,"Employee ID",1,0,'C');
$pdf->Cell(38,8,"Employee Name",1,0,'C');
$pdf->Cell(38,8,"Department",1,0,'C');
$pdf->Cell(38,8,"Position",1,0,'C');
$pdf->Cell(38,8,"Date Hired",1,1,'C');

while ($row = mysql_fetch_array($result)){
    

$pdf->Cell(38,8,$row["emp_id_no"],1,0,'C');
$pdf->Cell(38,8,$row["first_name"] . " ". $row["last_name"] ,1,0,'C');
$pdf->Cell(38,8,$row["department"],1,0,'C');
$pdf->Cell(38,8,$row["position"],1,0,'C');
$pdf->Cell(38,8,$row["date_hired"],1,1,'C');
    
}

$pdf->Output();

?>
<?php
 }
 
    else {
        echo "<script>alert('Please, login as HR admin!');window.location='index.php'</script>";
        sleep(1);
    }}
    else{
        echo "<script>alert('Please, login as HR admin!');window.location='index.php'</script>";
        sleep(1);
    }
    
?> 