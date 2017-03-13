<?php
include 'conn.php';

function data_secure($data){
    $data = trim($data);
    $data = htmlspecialchars($data);
    $data = stripcslashes($data);
    return $data;
    
}



function data_crypt($data){

    $data = data_secure(hash("sha256",$data));
    return $data;
  
}



function addMember($fname,$lname,$email,$finalpass,$contact,$peraddress,$shipaddress,$zipcode,$trademark){
    
    $today = gmdate("Y-m-d");
    
    $sql = "INSERT INTO sphb_sp_members (first_name,last_name,email,password,contact,permanent_address,shipping_address,zipcode,trademark,joined_date)
            VALUES ('$fname','$lname','$email','$finalpass','$contact','$peraddress','$shipaddress','$zipcode','$trademark','$today')";
    if (mysql_query($sql)){
          header("Location: login.php?successfully-registered");
    }else{
       
    

    }
  
    
}


function userdata($source,$dbdata){
    
    $sql = "SELECT $dbdata FROM sphb_sp_members WHERE email = '$source'";
    $result = mysql_query($sql);
    $output = mysql_result($result,0);
   return $output;
}














?>