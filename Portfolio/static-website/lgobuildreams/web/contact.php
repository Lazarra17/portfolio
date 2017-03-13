<?php 
include "php/conn.php";
include "php/data_sec.php";
?>
<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="" />
    <link href="css/style.css" rel="stylesheet" type="text/css"/>
	<title>LGO Buildreams - About Us</title>
</head>
<body>
<div id="nav">
<h3>L-GO Buildreams - Contact Us</h3>
<ul>
<li><a href="index.php">Home</a></li>
<li><a  href="about_us.php">About us</a></li>

<li ><a  style="color:teal;" href="contact.php">Contact</a></li>
<?php include "php/extensionlog.php";?>
</ul>
</div>
<div id="container" style="">
<form>
<div id="bottom" style="clear: both; margin-top: 50px;height:auto;padding-bottom:20px; ">
<h1>Contact Us</h1>
<p>

Name: <input type="text" name="name">
 <br /><br>
Email: <input type="text" name="name">
 <br /><br>
Message <br />
<textarea cols="60" rows="20">
</textarea> <br /><br />
 <input type="submit" value="Submit" />
 <input type="reset" value="Reset" />
</form>
 </p>
</div>

</div>

</body>
</html>