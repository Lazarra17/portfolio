<?php 

include "php/conn.php";
include "php/data_sec.php";
include "php/function.php";

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
<?php
$fname = $lname =$email= $pass = $cpass = $gender = "";
$Errfname = $Errlname =$Erremail= $Errpass = $Errcpass = $Errgender = "";





if (isset($_POST["signup"])){
        
    if (empty($_POST['fname']) ||  empty($_POST['lname']) || empty($_POST['email']) ||  empty($_POST['pass']) || 
                empty($_POST['cpass']) ||  empty($_POST['gender'])){
            $Errfname = "<span style='color:red;font-size:13px'> - Required</span>";       
             }
    else if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
       $Erremail = "<span style='color:red;font-size:13px''> - Invalid email format </span>"; 
             }
    else if ($_POST["pass"] != $_POST["cpass"]){
 $Errcpass = "<span style='color:red;font-size:13px''> - Password not match</span>"; 
             }
    else {
        $fname = $_POST["fname"];
        $lname = $_POST["lname"];
        $email = $_POST["email"];
        $pass = $_POST["pass"];
        $gender = $_POST["gender"];
        
        register($email,$pass,$fname,$lname,$gender);
        
        
        
    }         
 }
?>

<div id="nav">
<h3>L-GO Buildreams - Contact Us</h3>
<ul>
<li><a href="index.php">Home</a></li>
<li><a href="about_us.php">About us</a></li>
<li><a href="contact.php">Contact</a></li>
<?php include "php/extensionlog.php";?>
</ul>
</div>
<div id="container" style="">
<form method="post">
<div id="bottom" style="clear: both; margin-top: 50px;height:auto;padding-bottom:20px; ">
<h1>Register</h1>
<p style="color: red;">* Required fields</p>
<div style="float: left; margin:20px;">
*First Name: <?php echo $Errfname?><br /> <input type="text" name="fname" required="">
</div> 
<div style="float: left; margin:20px;">  
*Last Name: <?php echo $Errfname?><br /> <input type="text" name="lname" required="">
</div>

<div style="float: left; margin:20px;">  
*Email: <?php echo $Errfname;echo $Erremail ?><br /> <input type="text" name="email" required="">
</div>
<p style="clear:both;"></p>

<div style="float: left; margin:20px;">
*Password: <?php echo $Errfname; echo $Errcpass?><br /> <input type="password" name="pass" required="">
</div> 
<div style="float: left; margin:20px;">  
*Confirm Password: <?php echo $Errfname; echo $Errcpass?><br /> <input type="password" name="cpass" required="">
</div>
 <p style="clear:both;"></p>
 
<div style="float: left; margin:20px;">  
*Gender: <?php echo $Errfname?><br /> Male <input type="radio" name="gender" required="" value="Male"> Female <input type="radio" name="gender" value="Female" required="">
</div>
 <p style="clear:both;"></p>
<div style="margin:0px 20px;">
 <input id="submit" type="submit" name="signup" value="Sign Up" />
 <input id= "submit" type="reset" value="Reset" />
 </div>
</form>

</div>

</div>

























</body>
</html>