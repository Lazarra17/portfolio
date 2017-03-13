<?php

function secure_data($data){
    $data = htmlspecialchars($data);
    $data = trim($data);
    $data = stripcslashes($data);
    return $data;   
}
function secure_pass($data){
   $data = crypt('Nico',secure_data($data));
   return $data;
    
}

?>