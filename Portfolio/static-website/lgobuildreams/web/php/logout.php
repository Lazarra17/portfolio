<?php
session_start();
session_unset();
session_destroy();
$file = glob("../tmp/*");
foreach ($file as $files){
    if (is_file($files)){
        unlink($files);
    }
}
header("Location: ../index.php");
?>