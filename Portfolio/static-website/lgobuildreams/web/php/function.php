<?php


function register($email,$pass,$fname,$lname,$gender){
    $status= "active";
    $sql = "INSERT INTO lgo_members (email,password,first_name,last_name,gender,status) VALUES ('$email','$pass','$fname'
            ,'$lname','$gender','$status')";
    if (mysql_query($sql)){
    echo "<script>alert('Account registered');window.location = 'index.php'</script>";
   }else{
    mysql_error();
   }
    
}


?>