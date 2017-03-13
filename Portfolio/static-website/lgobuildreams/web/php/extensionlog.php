<?php
ini_set('session.save_path', 'tmp');

if (isset($_SESSION["email"])){
    $sql = "SELECT first_name FROM lgo_members WHERE email = '". $_SESSION['email'] ."' LIMIT 1";
    $result = mysql_query($sql);
    $name = mysql_fetch_array($result);
    
?>
<div style="float:right">
<?php echo $name["first_name"];?> | <a href="php/logout.php">Logout</a>
</div>
<?php }
else{
    
    ?>
<li><a href="register.php">Register</a></li>
<div id="login">
<div id="logpos">
<form method="POST" action="">
<p>Email:</p> <input type="text" name="email" size="17"> 
</div>
<div id="logpos">
<p>Password:</p> <input type="password" name="password" size="17"> <input type="submit" name="submit" value="Login" style="margin-left: 20px;">
</form>
</div>
</div>
<?php }
if (isset($_POST["submit"])){
$email = secure_data($_POST["email"]);
$password = secure_data($_POST["password"]);

$sql = "SELECT * FROM lgo_members WHERE `email` = '$email' AND `password` = '$password'";
$result = mysql_query($sql);
$count = mysql_num_rows($result);

if ($count == 1){
    $_SESSION["email"] = $email; 
    header("Location: index.php");
}else{
    echo "<script>alert('falied');</script>";
    
}

 }

?>


