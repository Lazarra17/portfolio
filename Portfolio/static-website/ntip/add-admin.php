<?php
  session_start();
  
        if (isset($_SESSION["accesscode"])){
     if ($_SESSION["accesscode"] == "newtaytayiceplant1" || $_SESSION["accesscode"] == "newtaytayiceplant11" || $_SESSION["accesscode"] == "newtaytayiceplant4"){  
 
  
  include 'php/db/connect.php';
  include 'php/function.php';

  $today = gmdate('Y');
    $erroruser = "";
  if(isset($_POST['submit'])){
    $lname   = data_secure($_POST['lname']);
    $fname   = data_secure($_POST['fname']);
    $mname   = data_secure($_POST['mname']);
    $gender  = data_secure($_POST['gender']);
    $address = data_secure($_POST['address']);
    $username= data_secure($_POST['username']);
    $password= data_secure($_POST['password']);
    $department= data_secure($_POST['department']);
    $confirmPassword = data_secure($_POST['confirm-password']);
    $admintype     = data_secure($_POST['admintype']);

  $fullname = $fname . " " . $mname . " " . $lname;
   

        $usernamecustomer = usernamecheckCustomer($username); 
        $usernameemployee = usernamecheckEmployee($username); 
        $usernameadmin = usernamecheckAdmin($username); 

  

      if((preg_match('/\s/',$username) == 1)) {
       echo "<script> alert('Username must not have space'); </script>";
      }
      elseif(strlen($password) < "8"){
        echo "<script> alert('Password must atleast have 8 characters'); </script>";
      }
       else if ($usernamecustomer != null || $usernameemployee != null || $usernameadmin != null){
        echo "<script> alert('Username already exist'); </script>";
             $erroruser = "- Username aleary exist";
        }
      elseif ($password != $confirmPassword){
        echo "<script> alert('Password not matched'); </script>";
        
      }
      else{
     
      $adminno = selectAdminNo("admin_no");
     $adminno = explode("-",$adminno);
     $admin_no = $adminno[1] + 1;
     $admin_no = "A15-" . $admin_no;
     
      addAdmin($admin_no,$admintype,$fullname,$username ,$password,$department ,$gender,$address);
      
      
   	        	 $todayoryt = $_SESSION["time_in_oryt"];
                  $allactivity = auditSelect("activity",$todayoryt);
                 $activity = "Added new admin $fullname " . date("h:i:sa");
                 $activity = $allactivity . "+" . $activity;    
                 auditActivity($activity);
      }
   
  }

   // echo "<script> alert('". $gender ."'); </script>";
?>
<html>
<head>
	<title>Add New Admin</title>
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
    <div class="col s12" style="margin-left: 7%;">
      <div class="container white z-depth-2" style="margin-top: 2%;height:auto; padding-top: 1%; padding-bottom: 3%;">
        <form action ="#" method="post">
        <h4 style="letter-spacing: 2px;">Add New Admin</h4>
        (Note: All fields with <b>" * "</b> is required)<br><br>
        <div class="row">
            <label class="black-text ">* Department</label>
            <select class="browser-default black-text" id="department" name="department" onchange="positiontype()" require required>
              <option value="dis" disabled selected>Select Department</option>
              <option value="Human Resource" <?php if(isset($_POST['submit'])){ if ($_POST['department'] == "Human Resources"){echo "selected";}}; ?>>Human Resources</option>
              <option value="Marketing" <?php if(isset($_POST['submit'])){ if ($_POST['department'] == "Marketing"){echo "selected";}}; ?>>Marketing</option>
              <option value="Production" <?php if(isset($_POST['submit'])){ if ($_POST['department'] == "Production"){echo "selected";}}; ?>>Production</option>
               <option value="superadmin" <?php if(isset($_POST['submit'])){ if ($_POST['department'] == "superadmin"){echo "selected";}}; ?>>Superadmin</option>
            </select>
            <?php ?>
            <div class="input-field col s4">
                <i class="small mdi-social-person prefix black-text"></i>
                <input id="lname" type="text" class="validate" name="lname"  require required maxlength="30" value= "<?php if(isset($_POST['submit'])){ echo $_POST['lname'];}; ?>">
                <label for="lname">* Last Name</label>
            </div>
            <div class="input-field col s4">
                <input id="fname" type="text" class="validate" name="fname"  require required maxlength="30" value= "<?php if(isset($_POST['submit'])){ echo $_POST['fname'];}; ?>">
                <label for="fname">* First Name</label>
            </div>
            <div class="input-field col s4">
                <input id="mname" type="text" class="validate" name="mname" maxlength="30" value= "<?php if(isset($_POST['submit'])){ echo $_POST['mname'];}; ?>">
                <label for="mname">Middle Name</label>
            </div>
            <div class="input-field col s6 center" style="margin-top: 1%;">
                <i>* Gender</i><br>
                <input type="radio" class="filled-in" id="male" name="gender" value="Male" <?php if(isset($_POST['submit'])){ if ($_POST['gender'] == "Male"){echo "checked";}}; ?>>
                <label for="male">Male</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="radio" class="filled-in" id="female" name="gender" value="Female" <?php if(isset($_POST['submit'])){ if ($_POST['gender'] == "Female"){echo "checked";}}; ?>>
                <label for="female">Female</label>
            </div>
            
          <label class="black-text ">* Admin Type</label>
            <select class="browser-default black-text col s6" id="admintype" name="admintype" require required>
              <option value="" disabled selected>Select Type</option>
              <option id="1" value="11" <?php if(isset($_POST['submit'])){ if ($_POST['admintype'] == "11"){echo "selected";}}; ?>>Human Resources Staff Admin</option>
              <option id="2" value="22" <?php if(isset($_POST['submit'])){ if ($_POST['admintype'] == "22"){echo "selected";}}; ?>>Marketing Staff Admin</option>
              <option id="3" value="33" <?php if(isset($_POST['submit'])){ if ($_POST['admintype'] == "33"){echo "selected";}}; ?>>Production Staff Admin</option>
              <option id="4" value="333" <?php if(isset($_POST['submit'])){if ($_POST['admintype'] == "333"){echo "selected";}}; ?>>Production Staff Admin - Investigator</option>
              <option id="5" value="1" <?php  if(isset($_POST['submit'])){ if ($_POST['admintype'] == "1"){echo "selected";}}; ?>>Human Resources Admin</option>
              <option id="6" value="2" <?php  if(isset($_POST['submit'])){ if ($_POST['admintype'] == "2"){echo "selected";}}; ?>>Marketing Admin</option>
              <option id="7" value="3" <?php  if(isset($_POST['submit'])){ if ($_POST['admintype'] == "3"){echo "selected";}}; ?>>Production Admin</option>
              <option id="8" value="4" <?php  if(isset($_POST['submit'])){ if ($_POST['admintype'] == "4"){echo "selected";}}; ?>>Super Admin</option>
            </select>
            
            <div class="input-field col s12">
                <input id="address" type="text" class="validate" name="address"  require required maxlength="100" value= "<?php if(isset($_POST['submit'])){ echo $_POST['address'];}; ?>">
                <label for="address">* Complete Address</label>
            </div>
            <div class="input-field col s12">
                <input id="region" type="text" class="validate" name="username"  require required maxlength="30" value= "<?php if(isset($_POST['submit'])){ echo $_POST['username'];}; ?>">
                <label for="region">* Username <span style="color: red;"><?php if(isset($_POST['submit'])){ echo $erroruser;}; ?></span></label>
            </div>
            <div class="input-field col s6" style="clear: both;">
                <input id="city" type="password" class="validate" name="password"  require required maxlength="30" >
                <label for="city">* Password</label>
            </div>
              <div class="input-field col s6">
                <input id="city" type="password" class="validate" name="confirm-password"  require required maxlength="30">
                <label for="city">* Confirm Password</label>
            </div>
        
     
            
        </div>
            <button class="medium btn waves-effect waves-light blue darken-3 right" type="submit" name="submit" style="margin-right: 25px;">
            Submit 
          <i class="mdi-content-send right"></i>
          </button><br>
        </form>
      </div>
    </div>
    
    <script>
function positiontype() {
    
    var department = document.getElementById("department").value;
	var admintype = document.getElementById("admintype").value;

 if (department == "Human Resources"){
    
    document.getElementById("1").hidden = false;  
    document.getElementById("2").hidden = true;  
    document.getElementById("3").hidden = true;  
    document.getElementById("4").hidden = true;  
    document.getElementById("5").hidden = false;  
    document.getElementById("6").hidden = true;  
    document.getElementById("7").hidden = true;  
    document.getElementById("8").hidden = true;   
    
    
}
 else if (department == "Marketing"){
      
    document.getElementById("1").hidden = true;  
    document.getElementById("2").hidden = false;  
    document.getElementById("3").hidden = true;  
    document.getElementById("4").hidden = true;  
    document.getElementById("5").hidden = true;  
    document.getElementById("6").hidden = false;  
    document.getElementById("7").hidden = true;  
    document.getElementById("8").hidden = true;   
    
}
 else if (department == "Production"){
   
    document.getElementById("1").hidden = true;  
    document.getElementById("2").hidden = true;  
    document.getElementById("3").hidden = false;  
    document.getElementById("4").hidden = false;  
    document.getElementById("5").hidden = true;  
    document.getElementById("6").hidden = true;  
    document.getElementById("7").hidden = false;  
    document.getElementById("8").hidden = true;   
    
}

 else if (department == "superadmin"){
   
    document.getElementById("1").hidden = true;  
    document.getElementById("2").hidden = true;  
    document.getElementById("3").hidden = true;  
    document.getElementById("4").hidden = true;  
    document.getElementById("5").hidden = true;  
    document.getElementById("6").hidden = true;  
    document.getElementById("7").hidden = true;  
    document.getElementById("8").hidden = false;   
    
}

else {
       
    document.getElementById("1").hidden = true;  
    document.getElementById("2").hidden = true;  
    document.getElementById("3").hidden = true;  
    document.getElementById("4").hidden = true;  
    document.getElementById("5").hidden = true;  
    document.getElementById("6").hidden = true;  
    document.getElementById("7").hidden = true;  
    document.getElementById("8").hidden = true;   
    
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