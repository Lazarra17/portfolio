<?php
  session_start();
  
    if (isset($_SESSION["accesscode"])){
     if ($_SESSION["accesscode"] == "newtaytayiceplant2" || $_SESSION["accesscode"] == "newtaytayiceplant22" || $_SESSION["accesscode"] == "newtaytayiceplant4"){  
  
  include 'php/db/connect.php';
  include 'php/function.php';

  $today = gmdate('Y');
  if (isset($_GET["product_no"])){
  $prod_no = data_secure($_GET["product_no"]);
  }else
  {
    header("Location:update-product.php");
  }







  if(isset($_POST['submit'])){
  
    $product_no   =  data_secure($_POST['product_no']);
    $available_stocks   = data_secure($_POST['stocks']);
    $updatestocks   = data_secure($_POST['updatestocks']);
    $updatestocks = $available_stocks + $updatestocks;
   updateStocks($product_no,$updatestocks);
   
   
}


   // echo "<script> alert('". $gender ."'); </script>";
?>
<html>
<head>
	<title>Update - Product</title>
	<link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>
	<!-- <link type="text/css" rel="stylesheet" href="css/mystyle.css"> -->
  <link type="text/css" rel="stylesheet" href="css/forms.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
  <link type="text/css" rel="stylesheet" href="css/sidebar.css">
   <link rel="icon" href="img/snowflake.png" type="image/png" />
</head>
<body onload="addCol()">
  <?php
    include 'php/header.php';
    include 'php/sidebar.php';
  ?>
    <div class="col s12" style="margin-left: 6%;">
      <div class="container white z-depth-2" style="margin-top: 2%;height:auto; padding-top: 1%; padding-bottom: 3%;">
        <form action ="#" method="post" enctype="multipart/form-data">
        <h4 style="letter-spacing: 2px;">Update Product</h4>
          
        <div class="row">
          
            <div class="input-field col s12">
               
                <input id="product_id" type="text" class="validate" readonly="" name="product_no"  require required maxlength="50" value="<?php echo empDataProduct($prod_no,"product_no")?>">
                <label for="product_id">* Product No:</label>
            </div>
            
            <div class="input-field col s12" style="clear: both;">
                <input id="product_name" type="text" class="validate" name="product_name" readonly="" value="<?php echo empDataProduct($prod_no,"product_name")?>"  require required maxlength="50">
                <label for="fname">* Product Name:</label>
            </div>
            
             <div class="input-field col s6">
                <input id="avi" type="text" class="validate" name="stocks" readonly="" value="<?php echo empDataProduct($prod_no,"stocks")?>"  require required maxlength="50">
                <label for="fname">* Available Stocks: </label>
            </div>  
            
  
         
         
         
             <div class="input-field col s6">
                <input id="avi" type="text" class="validate" name="updatestocks"  maxlength="3"  value=""  require required maxlength="50">
                <label for="fname">* Add Stocks: + </label>
            </div>
            <button class="medium btn waves-effect waves-light blue darken-3 right" type="submit" name="submit" style="margin-right: 25px;">
            Update
          <i class="mdi-content-send right"></i>
          </button>
        </form>
    
      </div>
    </div>
    
    <script>
    var number = 5;    
    function addCol(){
       number++;
       
    
        if (number == 7){
           document.getElementById("characteristics7").hidden = false;        
           document.getElementById("characteristics8").hidden = false;      
         }
      else if (number == 8){
           document.getElementById("characteristics9").hidden = false;        
           document.getElementById("characteristics10").hidden = false;      
         }  
         else if (number >= 1 && number <=6){
            
           document.getElementById("characteristics1").hidden = false;        
           document.getElementById("characteristics2").hidden = false; 
           document.getElementById("characteristics3").hidden = false;        
           document.getElementById("characteristics4").hidden = false; 
           document.getElementById("characteristics5").hidden = false;        
           document.getElementById("characteristics6").hidden = false;
         }
         
          else if (number >8){
            
              alert("Maximum of 10 characteristics only"); 
         }
   
    }
    </script>
    
                    
	<script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
  <script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>
<?php
 }
 
    else {
        echo "<script>alert('Please, login as marketing admin!');window.location='index.php'</script>";
        sleep(1);
    }}
    else{
        echo "<script>alert('Please, login as marketing admin!');window.location='index.php'</script>";
        sleep(1);
    }
    
?>  