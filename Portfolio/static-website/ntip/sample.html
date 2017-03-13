<?php
  session_start();
  include 'php/db/connect.php';
  include 'php/function.php';

  $today = gmdate('Y');
  $id = data_secure($_SESSION['emp_id']);

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

    if(!empty($lname) && !empty($fname) && !empty($mname) && !empty($gender) && !empty($bday) && !empty($address) && !empty($region) && !empty($city) 
    && !empty($zip) && !empty($contact) && !empty($email) && !empty($position)&& !empty($datehired) && !empty($salary)){

    if (!is_numeric($zip)){
        echo "<script> alert('Invalid Zip Code'); </script>";
      }elseif (!is_numeric($contact)){
        echo "<script> alert('Invalid Contact Number'); </script>";
      }
       elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
       echo "<script> alert('Invalid email'); </script>";
      }
      else{
        editEmployee($id, $lname, $fname, $mname, $gender, $bday, $address, $region, $city, $zip, $contact, $email,$username, $dept,$position,$datehired,$salary);
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
  <link type="text/css" rel="stylesheet" href="css/sidebar.css"
</head>
<body>
  <?php
    include '/php/header.php';
    
   if (isset($_SESSION["emp_id"])){
  include '/php/sidebaremployee.php';
  }
  ?>
     <div class="col s12" style="margin-left: 13%;">
      <div class="container white z-depth-2" style="margin-top: 2%;height:auto; padding-top: 1%; padding-bottom: 3%;">
        <form action ="#" method="post">
        <h4 style="letter-spacing: 2px;">Add New Employee</h4>
        (Note: All fields with <b>" * "</b> is required)<br><br>
    
                
                <div class="row">
           <div class="input-field col s4">
                <i class="small mdi-social-person prefix black-text"></i>
                <input readonly="" id="department" type="text" class="validate" name="department"  require required maxlength="15" value="<?php echo empData($id, 'department'); ?>">
                <label for="department">* Department</label>
            </div>
             <div class="input-field col s4">
                <i class="small mdi-social-person prefix black-text"></i>
                <input readonly="" id="Position" type="text" class="validate" name="Position"  require required maxlength="15" value="<?php echo empData($id, 'position'); ?>">
                <label for="Position">* Position</label>
            </div>
            
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
                <input type="radio" class="filled-in" id="male" name="gender" value="male" <?php if(empData($id, 'gender') == "male"){ echo "checked";} ?>>
                <label for="male">Male</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="radio" class="filled-in" id="female" name="gender" value="female" <?php if(empData($id, 'gender') == "female"){ echo "checked";} ?>>
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
                <input readonly="" id="email" type="email" class="validate" name="email"  require required maxlength="40" value="<?php echo empData($id, 'email'); ?>">
                <label for="email">* Email</label>
            </div>
            
          
            
            </div>
        
            
            
             <div class="input-field col s4">
             <i>* Date Hired</i><br>
                <input readonly="" id="Date Hired" type="date" class="validate" name="datehired"  require required maxlength="15" value="<?php echo empData($id, 'date_hired'); ?>">
                <label for="Date Hired"></label>
            </div> <br />
            
            <div class="input-field col s4">
                <input readonly="" id="salary" type="text" class="validate" name="salary"  require required maxlength="12" value="<?php echo empData($id, 'salary'); ?>">
                <label for="Salary">* Salary</label>
            </div><br /><br />
            
            
        </div>
            <button class="medium btn waves-effect waves-light blue darken-3 right" type="submit" name="submit" style="margin-right: 25px;">
            Update 
          <i class="mdi-content-send left"></i>
          </button>
        </form>
      </div>
    </div>
  <script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
  <script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>