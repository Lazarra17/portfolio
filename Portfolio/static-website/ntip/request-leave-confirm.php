<?php
  session_start();
  
  
   if (isset($_SESSION["accesscode"])){
     if ($_SESSION["accesscode"] == "newtaytayiceplant1" || $_SESSION["accesscode"] == "newtaytayiceplant11" || $_SESSION["accesscode"] == "newtaytayiceplant4"){  


  include 'php/db/connect.php';
  include 'php/function.php';

  $today = gmdate('Y');
  $id = data_secure($_GET['emp_id_no']);
  $request_no = data_secure($_GET["request_no"]); 
  
  if(isset($_POST['submit'])){
 
    $message = data_secure($_POST["message"]);
    $email = data_secure($_POST["email"]);
    $rank = data_secure($_POST["rank"]);
    $fullname = data_secure($_POST["fname"]);
    
    
    
    $leavestarts = selectLeaveStart($id);
    $leaveuntil = selectLeaveUntil($id);
    $decision = $rank;
    $status = "old";
    

      if (!is_string($rank)){
        echo "<script> alert('Invalid Status'); </script>";
      }
      elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
       echo "<script> alert('Invalid email'); </script>";
      }
      else{
       
       
       
       
        leaveUpdate($request_no,$id,$rank,$status);
       leaveMessage($email,$message,$decision);
        
        $rems = empData($id,"rem_leaves") - ($leaveuntil-$leavestarts);
        if ($rank == "Approved"){
            remLeave($id,$rems);
        }
        
        
   	 	 $todayoryt = $_SESSION["time_in_oryt"];
         $allactivity = auditSelect("activity",$todayoryt);
                
                 $activity = "Approved request leaved of $fullname; Employee No: $id at " . date("h:i:sa");
                 $activity = $allactivity . "+" . $activity;    
             auditActivity($activity,$todayoryt);
        
        
        
        
        
      }
    }
  


if (isset($_GET["code"]) && isset($_GET["id"])){
  if ($_GET["code"] == "deletereq" && $_GET["id"] != ""){
    
    deleteRequest($_GET["id"]);
    
  }
  
}

  // $lname = empDataCustomer($id, 'last_name');
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
<body>
  <?php
    include 'php/header.php';
    include 'php/sidebar.php';
  ?>
    <div class="col s12" style="margin-left: 8%;">
      <div class="container white z-depth-2" style="margin-top: 2%;height:auto; padding-top: 1%; padding-bottom: 3%;">
        <form action ="#" method="post">
        <h4 style="letter-spacing: 2px;">Update Delivery</h4>
        (Note: All fields with <b>" * "</b> is required.  For mozilla firefox browser and others the date format is yyyy-mm-dd)<br><br>
        <div class="row">
          
           <input id="email" type="hidden" class="validate" name="email"  value="<?php echo userData7($request_no,$id, 'email'); ?>">
           <input id="request" type="hidden" class="validate" name="request_no"  value="<?php echo userData7($request_no,$id, 'leave_id'); ?>">
            <div class="input-field col s4">
                <i class="small mdi-social-person prefix black-text"></i>
                <input id="lname" type="text" class="validate" readonly name="fname" require required maxlength="15" value="<?php echo userData7($request_no,$id, 'full_name'); ?>">
                <label for="fname">* Full Name</label>
            </div>
            <div class="input-field col s4">
              <i class="small mdi-social-person prefix black-text"></i>
                <input readonly id="department" type="text" class="validate" name="department"  require required maxlength="15" style ="" value="<?php echo userData7($request_no,$id, 'department'); ?>">
                <label for="Department">* Department</label>
            </div>
              <div class="input-field col s4">
              <i class="small mdi-social-person prefix black-text"></i>
                <input readonly id="position" type="text" class="validate" name="position"  require required maxlength="15" style ="" value="<?php echo userData7($request_no,$id, 'position'); ?>">
                <label for="position">* Position</label>
            </div>
   
            <div class="input-field col s4" style="clear: both;">
            
                <span style="font-size: 13px;"> Leave Starts</span>
             
                <input readonly id="leave_starts" type="date" class="validate" name="leave_starts"  require required maxlength="12" value="<?php echo userData7($request_no,$id, 'leave_start'); ?>">
                
            </div>
            
            <div class="input-field col s4" >
           
                <span style="font-size: 13px;"> Leave Until</span><input readonly="" id="leave_until" required="" type="date" class="validate" name="leave_until"  maxlength="12" value="<?php echo userData7($request_no,$id, 'leave_until'); ?>" />
                
            </div>
            
             <div class="input-field col s4" >
           
                <span style="font-size: 13px;"> Remaining Leaves</span><input readonly="" id="leave_until" type="text" readonly="" class="validate" name="rem_leaves"  maxlength="12" value="<?php echo empData($id, 'rem_leaves'); ?>" />
                
            </div>
            
            <div class=" col s6 left">
             <h6><strong>Reasons </strong> </h6>
            </div>
            
            
             <div class=" col s12 center" style="margin-bottom: 10px;">
                <select class="browser-default black-text"  id="department" name="reason" require required>
              <option value="" disabled selected>Select Leave Reason</option>
              <option value="Sick Leave" <?php if (userData7($request_no,$id, 'reason') == "Sick Leave")echo "selected";?>  >Sick Leave</option>
              <option value="Vacation Leave"  <?php if (userData7($request_no,$id, 'reason') == "Vacation Leave")echo "selected";?>>Vacation Leave</option>
              <option value="Maternity Leave"   <?php if (userData7($request_no,$id, 'reason') == "Maternity Leave")echo "selected";?>>Maternity Leave</option>
              <option value="Paternity Leave"   <?php if (userData7($request_no,$id, 'reason') == "Paternity Leave")echo "selected";?>>Paternity Leave</option>
              <option value="Bereavement Leave"  <?php if (userData7($request_no,$id, 'reason') == "Bereavement Leave")echo "selected";?> >Bereavement Leave</option>
              <option value="Travel Leave"  <?php if (userData7($request_no,$id, 'reason') == "Sick LeaveTravel Leave")echo "selected";?> >Travel Leave</option>
            </select>
            </div>
            
             <div class=" col s6 left">
             <h6><strong>Discription </strong> </h6>
            </div>
            
             <div class=" col s12 center">
                <textarea  rows="10" name="discription"  require required="">
                  <?php     echo userData7($request_no,$id, 'discription'); ?>
                </textarea>
            </div>
            
            
             <div class="input-field col s3" >
             <select  class="browser-default black-text" name="rank" require required>
              <option value="" disabled selected>Confirmation</option>
              <option value="On-Going" <?php  if (userData7($request_no,$id,"rank") == "On-Going")echo "selected"; ?>>On-Going</option>
              <option value="Approved" <?php  if (userData7($request_no,$id,"rank") == "Approved")echo "selected"; ?>>Approved</option>
              <option value="Disapproved"   <?php  if (userData7($request_no,$id,"rank" ) == "Disapproved")echo "selected"; ?>>Disapproved</option>
              
              
              
            </select>
            </div>
           
           
           <div class="input-field col s12">
           
                <input id="message" type="text" class="validate" name="message" require required value="">
                <label for="message">* Message</label>
            </div>
           
        </div>
        
        <button class="medium btn waves-effect waves-light blue darken-3 right" type="submit" name="submit" style="margin-right: 25px;">
            Update 
          <i class="mdi-content-send right"></i>
          </button>
            <a  class="medium btn waves-effect waves-light red darken-3 right"  style="color: white; margin-right: 25px " href="request-leave-confirm.php?code=deletereq&id=<?php echo $request_no?>">
           
         
          Delete
          <i class="mdi-action-delete right"></i> </a>
       
          
            
        </form>
        <br />
      </div>
    </div>
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