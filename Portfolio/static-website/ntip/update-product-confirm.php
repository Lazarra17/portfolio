<?php
  session_start();
  
    if (isset($_SESSION["accesscode"])){
     if ($_SESSION["accesscode"] == "newtaytayiceplant2" || $_SESSION["accesscode"] == "newtaytayiceplant22" || $_SESSION["accesscode"] == "newtaytayiceplant4"){  
  
  include 'php/db/connect.php';
  include 'php/function.php';

  $today = gmdate('Y');
  if (isset($_GET["product_no"])){
  $prod_no = $_GET["product_no"];
  }else
  {
    header("Location:update-product.php");
  }







  if(isset($_POST['submit'])){
  
    $product_no   =  data_secure($_POST['product_no']);
    $product_name   = data_secure($_POST['product_name']);
    $unit   = data_secure($_POST['unit']);
    $price  = data_secure($_POST['price']);   


if (!empty($_FILES["fileToUpload"]["tmp_name"]) && empty($_FILES["slideshow"]["tmp_name"][0]) && empty($_FILES["slideshow"]["tmp_name"][1]) && 
    empty($_FILES["slideshow"]["tmp_name"][2]) && empty($_FILES["slideshow"]["tmp_name"][3])){
        
        
$target_dir = "images/";
$target_dir2 = "images/slideshow/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);






$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image

    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);

    
    

    
                        
    if($check !== false){
      //  echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
         
    } else {
        echo "<script>alert('File is not an image.');</script>";
    $uploadOk = 0;
    }


// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "<script>alert('Sorry, your file is too large.');</script>";
    $uploadOk == 0;
    }

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "<script>alert('Sorry, only JPG, JPEG, PNG & GIF files are allowed.');</script>";
    $uploadOk == 0;
    }
 
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "<script>alert('Sorry, your file was not uploaded.');</script>";
// if ever$uploadYeah ok, try to upload file
}


 else {
    
    
      if (!is_numeric($price)){
        echo "<script> alert('Invalid Price'); </script>";
      }
      
      else  {
        
   if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
      
        $pictureName =  "images/". basename( $_FILES["fileToUpload"]["name"]);
        
    
        for ($count =1;$count<=10;$count++){
            
            if (isset($_POST["characteristic$count"])){
                $summary[$count] = $_POST["characteristic$count"] . "+";
                  
            }
                            
            
        }
      
     $allsummary =  $summary[1] .$summary[2] .$summary[3] .$summary[4] .$summary[5] . $summary[6] . $summary[7] . $summary[8]. $summary[9]. $summary[10];

        
        updateProduct1($product_no,$product_name,$pictureName,$unit,$price,$allsummary);
        
   	 	 $todayoryt = $_SESSION["time_in_oryt"];
         $allactivity = auditSelect("activity",$todayoryt);
         $activity = "Updated a product record: Product No: $product_no; Product Name: $product_name at " . date("h:i:sa");
         $activity = $allactivity . "+" . $activity;  
           
         auditActivity($activity,$todayoryt);
        
        
        
    } else {
        echo "<script>alert('Sorry, there was an error uploading your file.');</script>";
    }
    
       // addEmployee($lname, $fname, $mname, $gender, $bday, $address, $region, $city, $zip, $contact, $email, $dept,$position,$datehired,$salary,$username);
      }
    
}
   }        
        
        
        
        
        
        
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    

   elseif (empty($_FILES["fileToUpload"]["tmp_name"]) && !empty($_FILES["slideshow"]["tmp_name"][0]) && !empty($_FILES["slideshow"]["tmp_name"][1]) && 
    !empty($_FILES["slideshow"]["tmp_name"][2]) && !empty($_FILES["slideshow"]["tmp_name"][3]))
    { 
    


$target_dir2 = "images/slideshow/";




//$target_file_slideshow = $target_dir2 . basename($_FILES["slideshow"]["name"]);
$target_file_slideshow1 = $target_dir2 . basename($_FILES["slideshow"]["name"][0]);
$target_file_slideshow2 = $target_dir2 . basename($_FILES["slideshow"]["name"][1]);
$target_file_slideshow3 = $target_dir2 . basename($_FILES["slideshow"]["name"][2]);
$target_file_slideshow4 = $target_dir2 . basename($_FILES["slideshow"]["name"][3]);


$uploadOk = 1;
$imageFileType = pathinfo($target_file_slideshow1,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image


    $check0 = getimagesize($_FILES["slideshow"]["tmp_name"][0]);
    $check1 = getimagesize($_FILES["slideshow"]["tmp_name"][1]);
    $check2 = getimagesize($_FILES["slideshow"]["tmp_name"][2]);
    $check3 = getimagesize($_FILES["slideshow"]["tmp_name"][3]);
    
    

    
                        
    if($check0 !== false || $check1 !== false || $check2 !== false || $check3 !== false){
      //  echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
         
    } else {
        echo "<script>alert('File is not an image.');</script>";
    $uploadOk = 0;
    }

// Check if file already exists



if (count($_FILES["slideshow"]["tmp_name"]) >4){
        echo "<script>alert('Sorry, please select 4 pictures only.');</script>";
    $uploadOk = 0;
    }

// Check file size


// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "<script>alert('Sorry, only JPG, JPEG, PNG & GIF files are allowed.');</script>";
    $uploadOk == 0;
    }
 
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "<script>alert('Sorry, your file was not uploaded.');</script>";
// if ever$uploadYeah ok, try to upload file
}

      
    


 else {
    
    
      if (!is_numeric($price)){
        echo "<script> alert('Invalid Price'); </script>";
      }
      
      else  {
        
   if (move_uploaded_file($_FILES["slideshow"]["tmp_name"][0], $target_file_slideshow1) 
    && move_uploaded_file($_FILES["slideshow"]["tmp_name"][1], $target_file_slideshow2) && move_uploaded_file($_FILES["slideshow"]["tmp_name"][2], $target_file_slideshow3)
    && move_uploaded_file($_FILES["slideshow"]["tmp_name"][3], $target_file_slideshow4)) {
      
        
        
    
        for ($count =1;$count<=10;$count++){
            
            if (isset($_POST["characteristic$count"])){
                $summary[$count] = $_POST["characteristic$count"] . "+";
                  
            }
                            
            
        }
      
     $allsummary =  $summary[1] .$summary[2] .$summary[3] .$summary[4] .$summary[5] . $summary[6] . $summary[7] . $summary[8]. $summary[9]. $summary[10];

        
        updateProduct2($product_no,$product_name,$target_file_slideshow1,$target_file_slideshow2,$target_file_slideshow3,$target_file_slideshow4,$unit,$price,$allsummary);
        
   	 	 $todayoryt = $_SESSION["time_in_oryt"];
         $allactivity = auditSelect("activity",$todayoryt);
         $activity = "Updated a product record: Product No: $product_no; Product Name: $product_name at " . date("h:i:sa");
         $activity = $allactivity . "+" . $activity;
           
         auditActivity($activity,$todayoryt);
        
        
        
    } else {
        echo "<script>alert('Sorry, there was an error uploading your file.');</script>";
    }
    
       // addEmployee($lname, $fname, $mname, $gender, $bday, $address, $region, $city, $zip, $contact, $email, $dept,$position,$datehired,$salary,$username);
      }
    
}
   
    
    
    
    }
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    

   elseif (empty($_FILES["fileToUpload"]["tmp_name"]) && empty($_FILES["slideshow"]["tmp_name"][0])
      && empty($_FILES["slideshow"]["tmp_name"][1]) && empty($_FILES["slideshow"]["tmp_name"][2])
      && empty($_FILES["slideshow"]["tmp_name"][3])){
                
   
   
      
      
    
      if (!is_numeric($price)){
        echo "<script> alert('Invalid Price'); </script>";
      }
      else{
                
        for ($count =1;$count<=10;$count++){
            
            if (isset($_POST["characteristic$count"])){
                $summary[$count] = $_POST["characteristic$count"] . "+";
                  
          }  
          }
                            
           
        
      
     $allsummary =  $summary[1] .$summary[2] .$summary[3] .$summary[4] .$summary[5] . $summary[6] . $summary[7] . $summary[8]. $summary[9]. $summary[10];

          updateProductwoPicture($product_no,$product_name,$unit,$price,$allsummary);    

   	 	 $todayoryt = $_SESSION["time_in_oryt"];
         $allactivity = auditSelect("activity",$todayoryt);
         $activity = "Updated a product record: Product No: $product_no; Product Name: $product_name at " . date("h:i:sa");
         $activity = $allactivity . "+" . $activity;  
           
         auditActivity($activity,$todayoryt);
        
        
      

      
      
      } 
      
      
      
      
      
      /**
      next codes*/
      
      
      
            
    }
    else
    {
        
 
  



$target_dir = "images/";
$target_dir2 = "images/slideshow/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);



//$target_file_slideshow = $target_dir2 . basename($_FILES["slideshow"]["name"]);
$target_file_slideshow1 = $target_dir2 . basename($_FILES["slideshow"]["name"][0]);
$target_file_slideshow2 = $target_dir2 . basename($_FILES["slideshow"]["name"][1]);
$target_file_slideshow3 = $target_dir2 . basename($_FILES["slideshow"]["name"][2]);
$target_file_slideshow4 = $target_dir2 . basename($_FILES["slideshow"]["name"][3]);


$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
$imageFileType2 = pathinfo($target_file_slideshow1,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image

    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    $check0 = getimagesize($_FILES["slideshow"]["tmp_name"][0]);
    $check1 = getimagesize($_FILES["slideshow"]["tmp_name"][1]);
    $check2 = getimagesize($_FILES["slideshow"]["tmp_name"][2]);
    $check3 = getimagesize($_FILES["slideshow"]["tmp_name"][3]);
    
    

    
                        
    if($check !== false || $check0 !== false || $check1 !== false || $check2 !== false || $check3 !== false){
       // echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
         
    } else {
        echo "<script>alert('File is not an image.');</script>";
    $uploadOk = 0;
    }

// Check if file already exists



if (count($_FILES["slideshow"]["tmp_name"]) >4){
        echo "<script>alert('Sorry, please select 4 pictures only.');</script>";
    $uploadOk = 0;
    }

// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "<script>alert('Sorry, your file is too large.');</script>";
    $uploadOk == 0;
    }

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" && $imageFileType2 != "jpg" && $imageFileType2 != "png" && $imageFileType2 != "jpeg"
&& $imageFileType2 != "gif" ) {
    echo "<script>alert('Sorry, only JPG, JPEG, PNG & GIF files are allowed.');</script>";
    $uploadOk == 0;
    }
 
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "<script>alert('Sorry, your file was not uploaded.');</script>";
// if ever$uploadYeah ok, try to upload file
}

      
    


 else {
    
    
      if (!is_numeric($price)){
        echo "<script> alert('Invalid Price'); </script>";
      }
      
      else  {
        
   if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file) && move_uploaded_file($_FILES["slideshow"]["tmp_name"][0], $target_file_slideshow1) 
    && move_uploaded_file($_FILES["slideshow"]["tmp_name"][1], $target_file_slideshow2) && move_uploaded_file($_FILES["slideshow"]["tmp_name"][2], $target_file_slideshow3)
    && move_uploaded_file($_FILES["slideshow"]["tmp_name"][3], $target_file_slideshow4)) {
      
        $pictureName =  "images/". basename( $_FILES["fileToUpload"]["name"]);
        
    
        for ($count =1;$count<=10;$count++){
            
            if (isset($_POST["characteristic$count"])){
                $summary[$count] = $_POST["characteristic$count"] . "+";
                  
            }
                            
            
        }
      
     $allsummary =  $summary[1] .$summary[2] .$summary[3] .$summary[4] .$summary[5] . $summary[6] . $summary[7] . $summary[8]. $summary[9]. $summary[10];

        
        updateProduct($product_no,$product_name,$pictureName,$target_file_slideshow1,$target_file_slideshow2,$target_file_slideshow3,$target_file_slideshow4,$unit,$price,$allsummary);
        
   	 	 $todayoryt = $_SESSION["time_in_oryt"];
         $allactivity = auditSelect("activity",$todayoryt);
         $activity = "Updated a product record: Product No: $product_no; Product Name: $product_name at " . date("h:i:sa");
         $activity = $allactivity . "+" . $activity;  
           
         auditActivity($activity,$todayoryt);
        
        
        
    } else {
        echo "<script>alert('Sorry, there was an error uploading your file.');</script>";
    }
    
       // addEmployee($lname, $fname, $mname, $gender, $bday, $address, $region, $city, $zip, $contact, $email, $dept,$position,$datehired,$salary,$username);
      }
    
}
   }
//}
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
     <span style="color: red;"> (Note: All fields with <b>" * "</b> is required.  Make sure that the picture in slideshow is 310px height and 400px width to fit inside the frame.  Only 4 pictures are allowed for the slideshow)</span><br><br>
         
        <div class="row">
          
            <div class="input-field col s12">
               
                <input id="product_id" type="text" class="validate" readonly="" name="product_no"  require required maxlength="50" value="<?php echo empDataProduct($prod_no,"product_no")?>">
                <label for="product_id">* Product No:</label>
            </div>
            
            <div class="input-field col s4" style="clear: both;">
                <input id="product_name" type="text" class="validate" name="product_name" value="<?php echo empDataProduct($prod_no,"product_name")?>"  require required maxlength="50">
                <label for="fname">* Product Name:</label>
            </div>
            <div class="input-field col s4">
            * Update Display product picture
                <input id="mname" type="file" class="validate" src="images/block-ice.jpg" name="fileToUpload" accept=".jpg,.png,gif">
            </div>
            
           <div class="input-field col s4">
            * Update slideshow pictures
             <input id="mname" type="file" class="validate" name="slideshow[]" src="images/block-ice.jpg"  multiple="" accept=".jpg">
            </div>
            
              <div class="input-field col s6" style="clear: both;">
              <select name="unit"  class="browser-default black-text" require required>
              <option disabled="" selected="">Per / </option>
              <option value="Sack" <?php if(empDataProduct($prod_no,"unit") == "Sack"){echo "selected";}?>>Sack  </option>
              <option value="Block" <?php if(empDataProduct($prod_no,"unit") == "Block"){echo "selected";}?>>Block </option>
              </select>
            </div>
          
            <div class="input-field col s6">
                <input id="product_name" type="text" class="validate" name="price" value="<?php echo empDataProduct($prod_no,"price")?>"  require required maxlength="3">
                <label for="fname">* Price</label>
            </div>
            
           <div style="clear: both;"></div>
            <h6 style="font-weight: bold;">&nbsp;&nbsp;&nbsp;&nbsp;Product Characteristics must at least 5</h6>
            
            <?php 
          $count2= 0;
          $character = empDataProduct($prod_no,"summary");
            $character = explode("+",$character);
            
          
            for ($count = 1; $count<=11;$count++)
                        
            {
                error_reporting(0);
                                                
             ?>
            
            <div class="input-field col s6" hidden="" id="characteristics<?php echo $count?>">
                <input id="characteristic" type="text" class="validate" name="characteristic<?php echo $count?>" value="<?php echo $character[$count-1];?>"  maxlength="50">
                <label for="fname">* Product Characteristic</label>
            </div>
            <p id="demo"></p>
            <?php 
            } ?>
            
            
   <button class="medium btn waves-effect waves-light green darken-3 left" type="button" onclick="addCol()" name="culumn" style="margin-right: 25px;margin-left:10px">
            Add culumn
          <i class="mdi-image-exposure-plus-1"></i>
          </button>
       
            <button class="medium btn waves-effect waves-light blue darken-3 right" type="submit" name="submit" style="margin-right: 25px;">
            Submit
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