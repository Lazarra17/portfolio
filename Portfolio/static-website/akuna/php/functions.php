<?php

/**
 * @author Nicoyah
 * @copyright 2016
 */



function loggedin(){
    if (isset($_SESSION['email']) && isset($_SESSION["m_code"]) && !empty($_SESSION["email"]) && !empty($_SESSION["m_code"])){
        return true;
    }else{
        return false;
    }
    
}

function loggedinAdmin(){
    if (isset($_SESSION['email']) && !empty($_SESSION["email"]) && isset($_SESSION["a_code"]) && !empty($_SESSION["a_code"])){
        return true;
    }else{
        return false;
    }
    
}




function userData($email,$type){
    $query = "SELECT * FROM members WHERE email = '$email'";
    $run = mysql_query($query);
    $result = mysql_fetch_array($run);
    return $result[$type];
    
}

function userDataAdmin($email,$type){
    $query = "SELECT * FROM admins WHERE email = '$email'";
    $run = mysql_query($query);
    $result = mysql_fetch_array($run);
    return $result[$type];
    
}


function addCustomer($fName, $lName,$gender,$contact,$sAddress,$pAddress, $email, $password, $zCode){
    $today = gmdate("Y-m-d");
    $query = "INSERT INTO `members`(`first_name`, `last_name`, `gender`,`contact`, `shipping_address`, `permanent_address`, 
    `email`, `password`, `zip_code`, `date_signed`) VALUES ('$fName', '$lName','$gender','$contact',
    '$sAddress','$pAddress','$email','$password','$zCode','$today') ";
    
    if (mysql_query($query)){
           header("Location: menu.php?registered");
    }else{
       echo mysql_error();
    }
    
    
}

function updateAccount($fName,$lName,$gender,$contact,$sAddress,$pAddress,$zCode,$email){
    $message = "<p class='response'>You have successfully updated your account.'</p>";
    $today = gmdate("Y-m-d");
    $query = "UPDATE members SET `first_name` = '$fName', `last_name` = '$lName', `gender` = '$gender',`contact` = '$contact', 
             `shipping_address` = '$sAddress', `permanent_address` = '$pAddress',`zip_code` = '$zCode', `date_updated` = '$today' WHERE email = '$email'";
    if (mysql_query($query)){
        echo $message;
    }else{
        echo mysql_error();
    }
    
    
}

function  addAdmin($fName, $lName,$email, $password,$department,$userlevel){
    $message = "<p class='response'>You have successfully added a new admin.</p>";
    $today = "Y-m-d";
    $sql = "INSERT INTO `admins` (`a_code`, `first_name`, `last_name`, `email`, `password`, `department`, `date_added`) VALUES ('$userlevel','$fName',
    '$lName','$email','$password','$department','$today')";
  
    if (mysql_query($sql)){
        echo $message;
        header("Location: admin-manage.php");
    }else{
        echo mysql_error();
    }
}

function checkLog($email,$password){
    
    $error = "Invalid email or password";
    $query = "SELECT * FROM members WHERE email = '$email' AND password = '$password'";
    $result = mysql_query($query);
    $run = mysql_num_rows($result);
    if ($run == 1){
        $_SESSION["email"] = $email;
        $_SESSION["m_code"] = userData($email,"m_code");                
        header("Location: menu.php?loggedimember");
    }else{
        echo "<p class='responseError'>$error</p>";
    }
    
        
}

function checkLogAdmin($email,$password){
    
    
    $error = "Invalid email or password";
    $query = "SELECT * FROM admins WHERE email = '$email' AND password = '$password'";
    $result = mysql_query($query);
    $run = mysql_num_rows($result);
    if ($run == 1){
        $_SESSION["email"] = $email;    
        $_SESSION["a_code"] = userDataAdmin($email,"a_code");                 
        header("Location: menu.php?loggedinadmin");
    }else{
    return false;
    //    echo "<p class='responseError'>$error</p>";
    }
    
    
    
}







function data_secure($data){
    $data = htmlspecialchars($data);
    $data = stripslashes($data);
    $data = trim($data);
    return $data;
    
}
function data_encrypt($data){
    $data = data_secure(hash("sha256",$data));
    return $data;
    
}




?>