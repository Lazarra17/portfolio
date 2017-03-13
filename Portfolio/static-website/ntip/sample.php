
<?php
date_default_timezone_set("Asia/Taipei");
echo date("h:i:sa");




  include 'php/db/connect.php';
  include 'php/function.php';





if (isset($_POST["submit"])){

    $name = $_POST["name"];
    echo "<br>";
    echo data_crypt($name);
    
    
}


if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $ip = $_SERVER['HTTP_CLIENT_IP'];
} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
    $ip = $_SERVER['REMOTE_ADDR'];
}




if (isset($_POST["submitdata"])){
    

    if (count($_FILES["filname"]["tmp_name"]) >4){
        echo "Select 4 pictures only for the slideshow";
        
    }
    echo "copy".$_FILES["filname"]["name"][0] ;
  /*
     $data= explode(".",$_FILES["filname"]["name"]);
     if ($data[1] == "sql" || $data[1] == "SQL"){
        
        $target_dir = "database/";
        $target_file = $target_dir . basename($_FILES["filname"]["name"]);
       $file = $_FILES["filname"]["name"];


/**     if (move_uploaded_file($_FILES["filname"]["tmp_name"], $target_file)) {
      $filename =  "database/". basename( $_FILES["filname"]["name"]);
 

                $todayoryt = $_SESSION["time_in_oryt"];
                 $allactivity = auditSelect("activity",$todayoryt);
                 $activity = "Added a new employee record: Employee ID: $emp_id_no, Employee Name: $fname $mname $lname at" . date("h:i:sa");
                 $activity = $allactivity . "+" . $activity;    
                 auditActivity($activity,$todayoryt);


*/





//$sql = "TRUNCATE TABLE employee";
//mysql_query($sql);



//$sql = "LOAD DATA INFILE '$file' INTO TABLE employee FIELDS TERMINATED BY ','";
//mysql_query($sql);

/**
$code = $_POST["code"];
if ($code == "Employee List"){ 
//$sql = "TRUNCATE TABLE employee";
//mysql_query($sql);   
           
$sql = "LOAD DATA INFILE '$file' INTO TABLE employee FIELDS TERMINATED BY ','";
mysql_query($sql);
}
else if ($code == "Employee Attendance"){ 
$sql = "LOAD DATA INFILE '$file' INTO TABLE attendance FIELDS TERMINATED BY ','";
mysql_query($sql);
}




//$error =  "<script>alert('You have successfully restored the database');window.location='mysql_restore.php';</script>";
       

             

}else{
$error = "<script>alert('Error: select sql file only');</script>";
     }     
     
     
}else{
$error = "<script>alert('Error: No file selected');</script>";
}
 */     
}












?>

<html>
<body onload="addToSelect()">




       <form method="POST" action="" enctype="multipart/form-data">

               <div class="input-field col s4" style="clear: both;">
            <input type="" name="code" value="<?php ?>" /> 
            <input type="file" multiple="" name="filname[]" accept=""/><?php ?>
               </div>


           
           
           
          
              <div class="input-field col s4">
              <button class="medium btn waves-effect waves-light blue darken-3 left" type="submit" name="submitdata" style="margin-top: -10px;">
            Restore
            
          <i class="mdi-content-send right"></i>
          </button>
                   
            </form>   


</div>

<iframe
  width="600"
  height="450"
  frameborder="0" style="border:0"
  src="https://www.google.com/maps/embed/v1/place?key=API_KEY
    &q=Space+Needle,Seattle+WA" allowfullscreen>
</iframe>

</iframe>





<br><br /><br><br /><br><br /><br><br /><br><br /><br><br />

<form method="post">
<input type="text" id="names" onkeyup="sample()" name="name" size="50" />
<input type="submit" name="submit" />
<input id="today" type="date" value="<?php echo gmdate("Y-m-d");?>" />
<input onchange="output()" id="day" type="date" min="2015-08-01" max="2015-12-01" />
<p id="demo">sfd</p>
<p id="demo2"></p>
<br />

<select id="department" onchange="addToSelect()">
<option value="HR">HR</option>
<option value="marketing">Marketing</option>
<option value="production">Production</option>
</select>


<select id="position" >

<option id="hr" value="HR">HR</option>
<option id="marketing" value="marketing">Marketing</option>
<option id="product" value="production">Production</option>

</select>

<input type="text" onkeyup="sample()" />


</form>





<script>

function output(){
    var day = document.getElementById("day").value;
    var today = document.getElementById("today").value;
  
      if (day < today){
        document.getElementById("day").value = today;
      }
    
    
}


function addToSelect() {
    
    var department = document.getElementById("department").value;
	var list = document.getElementById("position").value;
  
    /*
    var hrstaff = document.createElement("option");
	list.options.add(hrstaff);
	hrstaff.text = "Human Resources Staff";
	hrstaff.value = "Human Resources Staff";
*/
 if (department == "HR"){
      
    
    
}
 else if (department == "marketing"){
      
      document.getElementById("marketing").hidden = true;
   
    
}
    

}


function sample(){

docuement.getElementById("names").value = "1212122";

</script>







</body>
</html>


