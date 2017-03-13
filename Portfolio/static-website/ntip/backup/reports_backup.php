<?php

include "../php/function.php";
include "../php/db/connect.php";

$today = gmdate("M-d-Y");

if ($_GET["code"] == "emplist"){
$sql = "SELECT * FROM employee INTO OUTFILE '../../htdocs/ntip/database/emplist-$today.sql' FIELDS TERMINATED BY ','";
mysql_query($sql);
$header = header("Location: ../database/emplist-$today.sql");
}


elseif ($_GET["code"] == "employeeattendance"){
$sql = "SELECT * FROM attendance INTO OUTFILE '../../htdocs/ntip/database/empattendance-$today.sql' FIELDS TERMINATED BY ','";
mysql_query($sql);
$header = header("Location: ../database/empattendance-$today.sql");
}



elseif ($_GET["code"] == "empleave"){
$sql = "SELECT * FROM leave_report INTO OUTFILE '../../htdocs/ntip/database/empleave-$today.sql' FIELDS TERMINATED BY ','";
mysql_query($sql);
$header = header("Location: ../database/empleave-$today.sql");
}


elseif ($_GET["code"] == "customerlist"){
$sql = "SELECT * FROM customer INTO OUTFILE '../../htdocs/ntip/database/customerlist-$today.sql' FIELDS TERMINATED BY ','";
mysql_query($sql);
$header = header("Location: ../database/customerlist-$today.sql");
}

elseif ($_GET["code"] == "orderlist"){
$sql = "SELECT * FROM orders INTO OUTFILE '../../htdocs/ntip/database/orderlist-$today.sql' FIELDS TERMINATED BY ','";
mysql_query($sql);
$header = header("Location: ../database/orderlist-$today.sql");
}

elseif ($_GET["code"] == "productlist"){
$sql = "SELECT * FROM products INTO OUTFILE '../../htdocs/ntip/database/productlist-$today.sql' FIELDS TERMINATED BY ','";
mysql_query($sql);
$header = header("Location: ../database/productlist-$today.sql");
}

elseif ($_GET["code"] == "allreceipts"){
$sql = "SELECT * FROM receipt INTO OUTFILE '../../htdocs/ntip/database/allreceipts-$today.sql' FIELDS TERMINATED BY ','";
mysql_query($sql);
$header = header("Location: ../database/allreceipts-$today.sql");
}

elseif ($_GET["code"] == "successfuldelivery"){
$sql = "SELECT * FROM successful_deliveries INTO OUTFILE '../../htdocs/ntip/database/successfuldelivery-$today.sql' FIELDS TERMINATED BY ','";
mysql_query($sql);
$header = header("Location: ../database/successfuldelivery-$today.sql");
}


echo $header;







?>