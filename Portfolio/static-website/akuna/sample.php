
<html>

<body>

<?php

if (isset($_GET["submit"])){
    
    echo htmlspecialchars($_GET["sample"]);
    
    
}


?>


<form action="" method="get">

<input type="text" name="sample" />

<input type="submit" name="submit" value="submit" />


</form>


</body>

</html>