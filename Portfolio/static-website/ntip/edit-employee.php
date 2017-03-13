<?php
  session_start();
     if (isset($_SESSION["accesscode"])){
    if ($_SESSION["accesscode"] == "newtaytayiceplant1" || $_SESSION["accesscode"] == "newtaytayiceplant11" || $_SESSION["accesscode"] == "newtaytayiceplant4"){   
  
  include 'php/db/connect.php';
  include 'php/function.php';

  $today = gmdate('Y');
  $id = data_secure($_GET['emp_id_no']);

  if(isset($_POST['submit'])){
    $lname   = data_secure($_POST['lname']);
    $fname   = data_secure($_POST['fname']);
    $mname   = data_secure($_POST['mname']);
    $gender  = data_secure($_POST['gender']);
    $bday    = data_secure($_POST['bday']);
    $address = data_secure($_POST['address']);
    $region  = data_secure($_POST['region']);
    $city    = data_secure($_POST['city']);
    $zip     = data_secure($_POST['zipcode']);
    $contact = data_secure($_POST['contact']);
    $email   = data_secure($_POST['email']);
    $username= data_secure($_POST['username']);
    $dept    = data_secure($_POST['department']);
    $position = data_secure($_POST['position']);
    $datehired  = data_secure($_POST['datehired']);
    $salary    = data_secure($_POST['salary']);
     $status    = data_secure($_POST['status']);

    if(!empty($lname) && !empty($fname) && !empty($mname) && !empty($gender) && !empty($bday) && !empty($address) && !empty($region) && !empty($city) 
    && !empty($zip) && !empty($contact) && !empty($email) && !empty($position)&& !empty($datehired) && !empty($salary)&& !empty($status)){

    if (!is_numeric($zip)){
        echo "<script> alert('Invalid Zip Code'); </script>";
      }elseif (!is_numeric($contact)){
        echo "<script> alert('Invalid Contact Number'); </script>";
      }
       elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
       echo "<script> alert('Invalid email'); </script>";
      }
      else{
        editEmployee($id, $lname, $fname, $mname, $gender, $bday, $address, $region, $city, $zip, $contact, $email,$username, $dept,$position,$datehired,$salary,$status);
    
           	 	 $todayoryt = $_SESSION["time_in_oryt"];
                 $allactivity = auditSelect("activity",$todayoryt);
     $activity = "Updated an employee account: Employee ID: $id; Employee Name: $fname $mname $lname.";
     $activity = $allactivity . "+" . $activity;    
     auditActivity($activity,$todayoryt);

    
    
    
      }
    }
  }



  // $lname = empData($id, 'last_name');
  // echo "<script> alert('". $lname ."'); </script>";



   // echo "<script> alert('". $gender ."'); </script>";
?>
<html>
<head>
  <title>Home</title>
  <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>
  <!-- <link type="text/css" rel="stylesheet" href="css/mystyle.css"> -->
  <link type="text/css" rel="stylesheet" href="css/forms.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
  <link type="text/css" rel="stylesheet" href="css/sidebar.css">
   <link rel="icon" href="img/snowflake.png" type="image/png" />
</head>
<body onload="positiontype(),showmap()">
  <?php
    include 'php/header.php';
    include 'php/sidebar.php';
  ?>
     <div class="col s12" style="margin-left: 7%;">
      <div class="container white z-depth-2" style="margin-top: 2%;height:auto; padding-top: 1%; padding-bottom: 3%;">
        <form action ="#" method="post">
        <h4 style="letter-spacing: 2px;">Update Employee</h4>
        (Note: All fields with <b>" * "</b> is required)<br><br>
    
                
                <div class="row">
      
                
                
            <label class="black-text ">* Department</label>
            <select class="browser-default black-text" onchange="positiontype()" id="department" name="department" require required>
              <option value="" disabled selected>Select Department</option>
              <option value="Human Resources" <?php if (empData($id, 'department')== "Human Resources") echo "selected"; ?> >Human Resources</option>
              <option value="Marketing" <?php if (empData($id, 'department')== "Marketing") echo "selected"; ?> >Marketing</option>
              <option value="Production" <?php if (empData($id, 'department')== "Production") echo "selected"; ?> >Production</option>
            </select>
            
            
            <div class="input-field col s4" style="clear: both;">
                <i class="small mdi-social-person prefix black-text"></i>
                <input id="lname" type="text" class="validate" name="lname"  require required maxlength="15" value="<?php echo empData($id, 'last_name'); ?>">
                <label for="lname">* Last Name</label>
            </div>
            <div class="input-field col s4">
                <input id="fname" type="text" class="validate" name="fname"  require required maxlength="15" value="<?php echo empData($id, 'first_name'); ?>">
                <label for="fname">* First Name</label>
            </div>
            <div class="input-field col s4">
                <input id="mname" type="text" class="validate" name="mname" maxlength="15" value="<?php echo empData($id, 'middle_name'); ?>">
                <label for="mname">Middle Name</label>
            </div>
            <div class="input-field col s6 center" style="margin-top: 1%;">
                <i>* Gender</i><br>
                <input type="radio" class="filled-in" id="male" name="gender" value="Male" <?php if(empData($id, 'gender') == "Male"){ echo "checked";} ?>>
                <label for="male">Male</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="radio" class="filled-in" id="female" name="gender" value="Female" <?php if(empData($id, 'gender') == "Female"){ echo "checked";} ?>>
                <label for="female">Female</label>
            </div>
            <div class=" col s6 center">
                <i>*Birthday</i><br>
                <input type="date" name="bday" require required value="<?php echo empData($id, 'birthday'); ?>">
            </div>
            <div class="input-field col s12">
                <input id="address" type="text" class="validate" name="address"  require required maxlength="50" value="<?php echo empData($id, 'address'); ?>">
                <label for="address">* Permanent Address</label>
            </div>
            <div class="input-field col s4">
                <input id="region" type="text" class="validate" name="region"  require required maxlength="15" value="<?php echo empData($id, 'region'); ?>">
                <label for="region">* Region</label>
            </div>
            <div class="input-field col s4">
                <input id="city" type="text" class="validate" name="city"  require required maxlength="15" value="<?php echo empData($id, 'city'); ?>">
                <label for="city">* City</label>
            </div>
            <div class="input-field col s4">
                <input id="zipcode" type="text" class="validate" name="zipcode"  require required maxlength="4" value="<?php echo empData($id, 'zip_code'); ?>">
                <label for="zipcode">* Zip Code</label>
            </div>
            <div class="input-field col s4">
                <input id="contact" type="text" class="validate" name="contact"  require required maxlength="12" value="<?php echo empData($id, 'contact'); ?>">
                <label for="contact">* Contact Number</label>
            </div>
            <div class="input-field col s4">
                <input id="email" type="email" class="validate" name="email"  require required maxlength="40" value="<?php echo empData($id, 'email'); ?>">
                <label for="email">* Email</label>
            </div>
            
               <div class="input-field col s4">
                <input id="username" type="text" class="validate" name="username"  require required maxlength="12" value="<?php echo empData($id, 'username'); ?>">
                <label for="username">* Username</label>
            </div>
            
            
            </div>
             <label class="black-text ">* Position</label>
            <select class="browser-default black-text" name="position" require required>            
              <option value="" disabled selected>Select Position</option>
              <option id="1" value="Supervisor" <?php if(isset($_POST['submit'])){ if ($_POST['position'] == "Supervisor"){echo "selected";}}; ?>>Supervisor</option>
              <option id="2" value="General Manager" <?php if(isset($_POST['submit'])){ if ($_POST['position'] == "General Manager"){echo "selected";}}; ?>>General Manager</option>
              <option id="3" value="Human Resources Staff" <?php if(isset($_POST['submit'])){ if ($_POST['position'] == "Human Resources Staff"){echo "selected";}}; ?>>Human Resources Staff</option>
              <option id="4" value="Marketing Staff" <?php if(isset($_POST['submit'])){ if ($_POST['position'] == "Marketing Staff"){echo "selected";}}; ?>>Marketing Staff</option>
              <option id="5" value="Purchasing Manager" <?php if(isset($_POST['submit'])){ if ($_POST['position'] == "Purchasing Manager"){echo "selected";}}; ?>>Production Staff</option>               
            </select>
            
             <div class="input-field col s4">
             <i>* Date Hired</i><br>
                <input id="Date Hired" type="date" class="validate" name="datehired"  require required maxlength="15" value="<?php echo empData($id, 'date_hired'); ?>">
                <label for="Date Hired"></label>
            </div> <br />
            
            <div class="input-field col s4">
                <input id="salary" type="text" class="validate" name="salary"  require required maxlength="12" value="<?php echo empData($id, 'salary'); ?>">
                <label for="Salary">* Salary</label>
            </div>
              <label class="black-text ">* Status</label><br />
            <select class="browser-default black-text col s3" name="status" require required>
              <option value="" disabled selected>Select Status</option>
              <option value="Active" <?php if (empData($id, 'status')== "Active") echo "selected"; ?>>Active</option>
              <option value="Fired" <?php if (empData($id, 'status')== "Fired") echo "selected"; ?>>Fired</option>
           
            </select>
            <br /><br><br />
   
            <button class="medium btn waves-effect waves-light blue darken-3 right" type="submit" name="submit" style="margin-right: 25px;">
            Update 
          <i class="mdi-content-send left"></i>
          </button>
          
            <button class="medium btn waves-effect waves-light green darken-3 right" type="button" onclick="window.location='employee_evaluation.php?emp_id_no=<?php echo empData($id, 'emp_id_no');?>'" name="evaluation" style="margin-right: 25px;">
            Employee Evaluation 
          <i class="mdi-content-send right"></i>
          </button>          
          
                    <h5 style="color: black ;">Map</h5> <span style="color: black;">(Note: To use the map please input the customers' address)</span>
    <iframe  id="map"
  width="880"
  height="450"
  frameborder="0" style="border:0"
  src="" allowfullscreen>
</iframe>
          
               </div>
        </form>
        
        
        
      </div>
    </div>
    
       <script>
function showmap(){
    var address = document.getElementById("address").value;
   
    document.getElementById("map").src = "https://www.google.com/maps/embed/v1/place?key=AIzaSyCHaDcDOh4CbOm34e_rOa0w-Ve7kDe7m8s&q="+ address;
    
}
</script>  
    <script>
    function positiontype() {
    
    var department = document.getElementById("department").value;


 if (department == "Human Resources"){
    
    document.getElementById("1").hidden = false;  
    document.getElementById("2").hidden = false;  
    document.getElementById("3").hidden = false;  
    document.getElementById("4").hidden = true;  
    document.getElementById("5").hidden = true;  

    
    
}
 else if (department == "Marketing"){
      
    document.getElementById("1").hidden = false;  
    document.getElementById("2").hidden = false;  
    document.getElementById("3").hidden = true;  
    document.getElementById("4").hidden = false;  
    document.getElementById("5").hidden = true;  

    
}
 else if (department == "Production"){
   
    document.getElementById("1").hidden = false;  
    document.getElementById("2").hidden = false;  
    document.getElementById("3").hidden = true;  
    document.getElementById("4").hidden = true;  
    document.getElementById("5").hidden = false;  

    
}

    


else {
       
    document.getElementById("1").hidden = true;  
    document.getElementById("2").hidden = true;  
    document.getElementById("3").hidden = true;  
    document.getElementById("4").hidden = true;  
    document.getElementById("5").hidden = true;  

    
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