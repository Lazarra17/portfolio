<?php
  session_start();
   if (isset($_SESSION["accesscode"])){
     if ($_SESSION["accesscode"] == "newtaytayiceplant2" || $_SESSION["accesscode"] == "newtaytayiceplant22" || $_SESSION["accesscode"] == "newtaytayiceplant4"){   
  include 'php/db/connect.php';
  include 'php/function.php';

  $today = gmdate('Y');
  $id = data_secure($_GET['customer_id']);
  
  if(isset($_POST['submit'])){
    $lname   = data_secure($_POST['lname']);
    $fname   = data_secure($_POST['fname']);
    $mname   = data_secure($_POST['mname']);
    $gender  = data_secure($_POST['gender']);
    
    $address = data_secure($_POST['address']);   
    $contact = data_secure($_POST['contact']);
    
   

    if(!empty($lname) && !empty($fname) && !empty($gender)  && !empty($address) && !empty($contact)){

      $year = substr($bday, 0, 4);

      if (!is_numeric($contact)){
        echo "<script> alert('Invalid Contact Number'); </script>";
      }else{
        echo "<script> alert('You have successfully updat your profile'); </script>"; 
        editCustomer($id, $lname, $fname,  $gender,  $address, $contact);
            
           	 	 $todayoryt = $_SESSION["time_in_oryt"];
                 $allactivity = auditSelect("activity",$todayoryt);
                 $activity = "Updated customer account of $fname $lname at ". date("h:i:sa");
                 $activity = $allactivity . "+" . $activity;    
                 auditActivity($activity,$todayoryt);     
            
              
      }
    }
  }

  

  // $lname = empDataCustomer($id, 'last_name');
  // echo "<script> alert('". $lname ."'); </script>";



   // echo "<script> alert('". $gender ."'); </script>";
?>
<html>
<head>
  <title>Update - Customer</title>
  <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>
  <!-- <link type="text/css" rel="stylesheet" href="css/mystyle.css"> -->
  <link type="text/css" rel="stylesheet" href="css/forms.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
  <link type="text/css" rel="stylesheet" href="css/sidebar.css">
   <link rel="icon" href="img/snowflake.png" type="image/png" />
</head>
<body onload="showmap()">
  <?php
    include 'php/header.php';
    include 'php/sidebar.php';
  ?>
    <div class="col s12" style="margin-left: 7%;">
      <div class="container white z-depth-2" style="margin-top: 2%;height:auto; padding-top: 1%; padding-bottom: 3%;">
        <form action ="#" method="post">
        <h4 style="letter-spacing: 2px;">Edit Account</h4>
        (Note: All fields with <b>" * "</b> is required)<br><br>
        <div class="row">
          
          
            <div class="input-field col s4">
                <i class="small mdi-social-person prefix black-text"></i>
                <input id="lname" type="text" class="validate" name="fname"  require required maxlength="15" value="<?php echo empDataCustomer($id, 'fname'); ?>">
                <label for="fname">* First Name</label>
            </div>
            <div class="input-field col s4">
                <input id="fname" type="text" class="validate" name="lname"  require required maxlength="15" value="<?php echo empDataCustomer($id, 'lname'); ?>">
                <label for="lname">* Last Name</label>
            </div><br><br><br><br>
            
             <div class="input-field col s4">
              <i class="small mdi-social-person prefix black-text"></i>
                <input disabled id="fname" type="text" class="validate" name="email"  require required maxlength="15" style ="color:red" value="<?php echo empDataCustomer($id, 'email'); ?>">
                <label for="fname">* Email</label>
            </div>
           
            <div class="input-field col s6 center" style="margin-top: 1%;">
                <i>* Gender</i>
                <input type="radio" class="filled-in" id="male" name="gender" value="Male" <?php if(empDataCustomer($id, 'gender') == "Male"){ echo "checked";} ?>>
                <label for="male">Male</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="radio" class="filled-in" id="female" name="gender" value="female" <?php if(empDataCustomer($id, 'gender') == "Female"){ echo "checked";} ?>>
                <label for="female">Female</label>
            </div><br /><br />
           <br /><br /><br /><br />
            <div class="input-field col s12">
                <input id="address" type="text" class="validate" name="address"  require required maxlength="50" value="<?php echo empDataCustomer($id, 'address'); ?>">
                <label for="address">* Permanent Address</label>
            </div>
            
            
           
            <div class="input-field col s4">
                <input id="contact" type="text" class="validate" name="contact"  require required maxlength="12" value="<?php echo empDataCustomer($id, 'contact'); ?>">
                <label for="contact">* Contact Number</label>
            </div>
            
           <div class="input-field col s4">
                <input id="username" type="text" class="validate" name="username"  require required maxlength="12" value="<?php echo empDataCustomer($id, 'username'); ?>">
                <label for="username">* Username</label>
            </div>
           
        </div>
            <button class="medium btn waves-effect waves-light blue darken-3 right" type="submit" name="submit" style="margin-right: 25px;">
            Update 
          <i class="mdi-content-send right"></i>
          </button>
        
          
          
        </form>
        
          <h5 style="color: black ;">Map</h5> <span style="color: black;">(Note: To use the map please input the customers' address)</span>
    <iframe  id="map"
  width="880"
  height="450"
  frameborder="0" style="border:0"
  src="" allowfullscreen>
</iframe>
  </div>
  
        
      </div>
    </div>
    <script>
function showmap(){
    var address = document.getElementById("address").value;
   
    document.getElementById("map").src = "https://www.google.com/maps/embed/v1/place?key=AIzaSyCHaDcDOh4CbOm34e_rOa0w-Ve7kDe7m8s&q="+ address;
    
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