<?php
  session_start();
  
    if (isset($_SESSION["accesscode"])){
     if ($_SESSION["accesscode"] == "newtaytayiceplant1" || $_SESSION["accesscode"] == "newtaytayiceplant11" || $_SESSION["accesscode"] == "newtaytayiceplant4"){  
  
  include 'php/db/connect.php';
  include 'php/function.php';

  $today = gmdate('Y');
    $error = "";
    $erroruser = "";
  if(isset($_POST['submit'])){
    $lname   =  data_secure($_POST['lname']);
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
    $dept    = data_secure($_POST['department']);
    $position = data_secure($_POST['position']);
    $datehired  = data_secure($_POST['datehired']);
    $salary    = data_secure($_POST['salary']);
    $username    = data_secure($_POST['username']);



        $emailcustomer = emailcheckCustomer($email);
        $emailemployee = emailcheckEmployee($email); 
        $usernamecustomer = usernamecheckCustomer($username); 
        $usernameemployee = usernamecheckEmployee($username); 
        $usernameadmin = usernamecheckAdmin($username); 


    if(!empty($lname) && !empty($fname) && !empty($mname) && !empty($gender) && !empty($bday) 
    && !empty($address) && !empty($region) && !empty($city) && !empty($zip) && !empty($contact) && !empty($email) && !empty($position) && !empty($datehired)&& !empty($salary)){

      

      if (!is_numeric($zip)){
        echo "<script> alert('Invalid Zip Code'); </script>";
      }elseif (!is_numeric($contact)){
        echo "<script> alert('Invalid Contact Number'); </script>";
       }elseif (!is_numeric($salary)){
        echo "<script> alert('Invalid Salary'); </script>";
      }
      
      elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
       echo "<script> alert('Invalid email'); </script>";
      }
       elseif((preg_match('/\s/',$username) == 1)) {
       echo "<script> alert('Username must not have space'); </script>";
      }
      
        else if ($usernamecustomer != null || $usernameemployee != null || $usernameadmin != null){
        echo "<script> alert('Username already exist'); </script>";
             $erroruser = "- Username aleary exist";
        }
        
       else if ($emailemployee != null || $emailcustomer != null ){
        echo "<script> alert('Email already exist'); </script>";
             $error = "- Email aleary exist";
        }
      else{
         $emp_id = explode("-",selectEmpID("emp_id_no"));
         $emp_no = $emp_id[1] + 1;
         $emp_id_no = "$emp_id[0]-$emp_no";
         
         
         
        
        
        addEmployee($emp_id_no,$lname, $fname, $mname, $gender, $bday, $address, $region, $city, $zip, $contact, $email, $dept,$position,$datehired,$salary,$username);
     
           	 	 $todayoryt = $_SESSION["time_in_oryt"];
                 $allactivity = auditSelect("activity",$todayoryt);
                 $activity = "Added a new employee record: Employee ID: $emp_id_no, Employee Name: $fname $mname $lname at" . date("h:i:sa");
                 $activity = $allactivity . "+" . $activity;    
                 auditActivity($activity,$todayoryt);
     
      }
    }
  }

   // echo "<script> alert('". $gender ."'); </script>";
?>
<html>
<head>
	<title>Add new employee</title>
	<link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>
	<!-- <link type="text/css" rel="stylesheet" href="css/mystyle.css"> -->
  <link type="text/css" rel="stylesheet" href="css/forms.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
  <link type="text/css" rel="stylesheet" href="css/sidebar.css">
   <link rel="icon" href="img/snowflake.png" type="image/png" />
</head>
<body onload="positiontype()">
  <?php
    include 'php/header.php';
    include 'php/sidebar.php';
  ?>
    <div class="col s12" style="margin-left: 13%;">
      <div class="container white z-depth-2" style="margin-top: 2%;height:auto; padding-top: 1%; padding-bottom: 3%;">
        <form action ="#" method="post">
        <h4 style="letter-spacing: 2px;">Add New Employee</h4>
        (Note: All fields with <b>"<span style="color: red;"> * </span>"</b> is required, Employee default password - <span style="color: red;">Password1</span>
        <br>&nbsp; Date format  <span style="color: red;">(yyyy-mm-dd)</span> for other browser except Chrome)<br><br>
        <div class="row">
            <label class="black-text ">* Department</label>
            <select class="browser-default black-text" id="department" onchange="positiontype()" name="department" require required>
              <option value="" disabled selected>Select Department</option>
              <option value="Human Resources" <?php if(isset($_POST['submit'])){ if ($_POST['department'] == "Human Resources"){echo "selected";}}; ?>>Human Resources</option>
              <option value="Marketing" <?php if(isset($_POST['submit'])){ if ($_POST['department'] == "Marketing"){echo "selected";}}; ?>>Marketing</option>
              <option value="Production" <?php if(isset($_POST['submit'])){ if ($_POST['department'] == "Production"){echo "selected";}}; ?>>Production</option>
            </select>
            <div class="input-field col s4">
                <i class="small mdi-social-person prefix black-text"></i>
                <input id="lname" type="text" class="validate" name="lname"  require required maxlength="50" value= "<?php if(isset($_POST['submit'])){ echo $_POST['lname'];}; ?>">
                <label for="lname">* Last Name</label>
            </div>
            <div class="input-field col s4">
                <input id="fname" type="text" class="validate" name="fname"  require required maxlength="50" value= "<?php if(isset($_POST['submit'])){ echo $_POST['fname'];}; ?>">
                <label for="fname">* First Name</label>
            </div>
            <div class="input-field col s4">
                <input id="mname" type="text" class="validate" name="mname" maxlength="50" required="" value= "<?php if(isset($_POST['submit'])){ echo $_POST['mname'];}; ?>">
                <label for="mname">Middle Name</label>
            </div>
            <div class="input-field col s6 center" style="margin-top: 1%;">
                <i>* Gender</i><br>
                <input type="radio" class="filled-in" id="male" name="gender" value="Male" <?php if(isset($_POST['submit'])){ if ($_POST['gender'] == "Male"){echo "checked";}}; ?>>
                <label for="male">Male</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="radio" class="filled-in" id="female" name="gender" value="Female" <?php if(isset($_POST['submit'])){ if ($_POST['gender'] == "Female"){echo "checked";}}; ?>>
                <label for="female">Female</label>
            </div>
            <div class=" col s6 center">
                <i>*Birthday (dd/mm/yyyy)</i><br>
                <input type="date" name="bday" value= "<?php if(isset($_POST['submit'])){ echo $_POST['bday'];}; ?>" require required>
            </div>
            <div class="input-field col s12">
                <input id="address" type="text" class="validate" name="address"  require required maxlength="100" value= "<?php if(isset($_POST['submit'])){ echo $_POST['address'];}; ?>">
                <label for="address">* Permanent Address</label>
            </div>
            <div class="input-field col s4">
                <input id="region" type="text" class="validate" name="region"  require required maxlength="50" value= "<?php if(isset($_POST['submit'])){ echo $_POST['region'];}; ?>">
                <label for="region">* Region</label>
            </div>
            <div class="input-field col s4">
                <input id="city" type="text" class="validate" name="city"  require required maxlength="50" value= "<?php if(isset($_POST['submit'])){ echo $_POST['city'];}; ?>">
                <label for="city">* City</label>
            </div>
            <div class="input-field col s4">
                <input id="zipcode" type="text" class="validate" name="zipcode"  require required maxlength="4" value= "<?php if(isset($_POST['submit'])){ echo $_POST['zipcode'];}; ?>">
                <label for="zipcode">* Zip Code</label>
            </div>
            <div class="input-field col s4">
                <input id="contact" type="text" class="validate" name="contact"  require required maxlength="15" value= "<?php if(isset($_POST['submit'])){ echo $_POST['contact'];}; ?>">
                <label for="contact">* Contact Number</label>
            </div>
            <div class="input-field col s8">
                <input id="email" type="email" class="validate" name="email"  require required maxlength="40" value= "<?php if(isset($_POST['submit'])){ echo $_POST['email'];}; ?>">
                <label for="email">* Email <span style="color: red;"><?php if(isset($_POST['submit'])){ echo $error;}; ?></span></label>
                
                
            </div>
            <select class="browser-default black-text" name="position" require required>            
              <option value="" disabled selected>Select Position</option>
              <option id="1" value="Supervisor" <?php if(isset($_POST['submit'])){ if ($_POST['position'] == "Supervisor"){echo "selected";}}; ?>>Supervisor</option>
              <option id="2" value="General Manager" <?php if(isset($_POST['submit'])){ if ($_POST['position'] == "General Manager"){echo "selected";}}; ?>>General Manager</option>
              <option id="3" value="Human Resources Staff" <?php if(isset($_POST['submit'])){ if ($_POST['position'] == "Human Resources Staff"){echo "selected";}}; ?>>Human Resources Staff</option>
              <option id="4" value="Marketing Staff" <?php if(isset($_POST['submit'])){ if ($_POST['position'] == "Marketing Staff"){echo "selected";}}; ?>>Marketing Staff</option>
              <option id="5" value="Purchasing Manager" <?php if(isset($_POST['submit'])){ if ($_POST['position'] == "Purchasing Manager"){echo "selected";}}; ?>>Production Staff</option>               
            </select>
            
            
             <div class="input-field col s4">
             <i>* Date Hired (dd/mm/yyyy)</i><br>
             <input type="hidden" value="<?php echo gmdate("Y-m-d");?>" id="today" />
                <input id="datehired" type="date" class="validate" name="datehired"  require required maxlength="15" onchange="output()" min="<?php echo gmdate("Y-m-d");?>" max="<?php echo gmdate("Y-m-d");?>" value= "<?php if(isset($_POST['submit'])){ echo $_POST['datehired'];}; ?>">
                <label for="Date Hired"></label>
            </div> <br />
            
            <div class="input-field col s4">
                <input id="salary" type="text" class="validate" name="salary"  require required maxlength="12" value= "<?php if(isset($_POST['submit'])){ echo $_POST['salary'];}; ?>">
                <label for="Salary">* Salary</label>
            </div>
            
             <div class="input-field col s4">
                <input id="username" type="text" class="validate" name="username"  require required maxlength="30" value= "<?php if(isset($_POST['submit'])){ echo $_POST['username'];}; ?>">
                <label for="Username">* Username <span style="color: red;"><?php if(isset($_POST['submit'])){ echo $erroruser;}; ?></span></label>
            </div>
            
        </div>
            <button class="medium btn waves-effect waves-light blue darken-3 right" type="submit" name="submit" style="margin-right: 25px;">
            Submit 
          <i class="mdi-content-send right"></i>
          </button>
        </form>
      </div>
    </div>
    
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



    
    function output(){
    var day = document.getElementById("datehired").value;
    var today = document.getElementById("today").value;
  
      if (day < today){
        document.getElementById("datehired").value = today;
        alert('Invalid date');
      } if (day > today){
        document.getElementById("datehired").value = today;
        alert('Invalid date');
        
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
        echo "<script>alert('Please, login as HR admin!');window.location='index.php'</script>";
        sleep(1);
    }}
    else{
        echo "<script>alert('Please, login as HR admin!');window.location='index.php'</script>";
        sleep(1);
    }
    
?>  