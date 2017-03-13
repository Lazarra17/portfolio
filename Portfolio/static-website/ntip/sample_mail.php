<?php

/**
 * @author Nicoyah
 * @copyright 2015
 */
if (isset($_POST["submit"])){
$to = "shagilazarra@yahoo.com";
$subject ="sample email";
$text=$_POST["message"];
$from = $_POST["email"];

$body = <<<EMAIL

Hi! My name is Nicoyah

$text

From Lazarra

EMAIL;


if (mail($to,$subject,$body,$from) == true){
    
    echo "your message has been sent!";
}else
{
    echo "messge not sent";
}



}



?>
<html>
<body>
<form action='?' method="post">

email: <input  type="text" name="email"/>
message: <textarea rows="20" cols = "20" name="message">
</textarea><br />
<input type="submit" value="submit" name="submit" />


</form>
</body>
</html>