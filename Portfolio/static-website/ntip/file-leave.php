<?php
  session_start();
  
     if ($_SESSION["accesscode"] == "newtaytayiceplantemployee"){
  include 'php/db/connect.php';
  include 'php/function.php';

  
   $id = data_secure($_SESSION['emp_id_no']);
   $fullname= empData($id,"first_name") ." ". empData($id,"middle_name"). " ". empData($id,"last_name");
    $rem_leaves = empData($id, 'rem_leaves');

  if(isset($_POST['submit'])){
   
    $dept    = data_secure($_POST['department']);
    $position = data_secure($_POST['position']);
    
    $leavemonth  = data_secure($_POST['leavemonth']);
    $leaveday  = data_secure($_POST['leaveday']);
    $leaveyear  = data_secure($_POST['leaveyear']);
    
    $leavestarts = $leaveyear . "-" . $leavemonth . "-" . $leaveday;
    
    $untilmonth  = data_secure($_POST['untilmonth']);
    $untilday  = data_secure($_POST['untilday']);
    $untilyear  = data_secure($_POST['untilyear']);
    
    $leaveuntil = $untilyear . "-" . $untilmonth . "-" . $untilday;
    
    $reason   = data_secure($_POST['reason']);
    $email   = data_secure($_POST['email']);
    $discription   = data_secure($_POST['discription']);

    if(!empty($leavestarts) && !empty($leaveuntil) && !empty($reason)){

    if ($leaveday+($leavemonth * 30) >= $untilday+ ($untilmonth * 30)){
        echo "<script>alert('Invalid date'); </script>"; 
    }
    else if($untilday- $leaveday > $rem_leaves){
         echo "<script>alert('Not enough remaining leaves'); </script>"; 
        
    }
    else{
        $less = $untilday-$leaveday;
        fileLeave($id,$fullname,$dept,$position,$leavestarts,$leaveuntil,$reason,$discription,$email);

      }
      }
    }
  

  

  // $lname = empData($id, 'last_name');
  // echo "<script> alert('". $lname ."'); </script>";



   // echo "<script> alert('". $gender ."'); </script>";
?>
<html>
<head>
  <title>File Leave</title>
  <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>
  <!-- <link type="text/css" rel="stylesheet" href="css/mystyle.css"> -->
  <link type="text/css" rel="stylesheet" href="css/forms.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
  <link type="text/css" rel="stylesheet" href="css/sidebar.css">
   <link rel="icon" href="img/snowflake.png" type="image/png" />
</head>
<body onload="showmonth()">
  <?php
    include 'php/header.php';
    
   if (isset($_SESSION["emp_id_no"])){
   include 'php/sidebar.php';
  }
  ?>
     <div class="col s12" style="margin-left: 10%;">
      <div class="container white z-depth-2" style="margin-top: 2%;height:auto; padding-top: 1%; padding-bottom: 3%;">
        <form action ="#" method="post">
        <h4 style="letter-spacing: 2px;">File Leave</h4>
        (Note: All fields with <b>" * "</b> is required)<br><br>
      
      <input id="email" type="hidden" class="validate" name="email"   value="<?php echo empData($id, 'email'); ?>" >
       <input id="today" type="hidden" class="validate" name="today"   value="<?php echo gmdate('m'); ?>" >
          
                
                <div class="row">
           <div class="input-field col s4">
                <i class="small mdi-social-person prefix black-text"></i>
                <input readonly="" id="department" type="text" class="validate" name="department"  require required maxlength="15" value="<?php echo empData($id, 'department'); ?>">
                <label for="department">* Department</label>
            </div>
             <div class="input-field col s4">
                <i class="small mdi-social-person prefix black-text"></i>
                <input readonly="" id="Position" type="text" class="validate" name="position"  require required maxlength="15" value="<?php echo empData($id, 'position'); ?>">
                <label for="Position">* Position</label>
            </div>
             <div class="input-field col s4">
                <i class="small mdi-action-leave prefix black-text"></i>
                <input readonly="" id="Position" type="text" class="validate" name="rem_leaves"  require required maxlength="15" value="<?php echo $rem_leaves; ?>">
                <label for="Position">* Remaining Leaves</label>
            </div>
           
            <div class=" col s6 center">
                <i>*Leave Starts</i><br>
            <?php /*?>    <input type="date" name="leavestarts" min="<?php echo gmdate("Y-m-d");?>" require required value=""><?php */?>
           
           
            <?php /** 
               * @Month 
             */?> 
           
            <select class="browser-default black-text col s4" onchange="showmonth()"  id="leavemonth" name="leavemonth" require required>
              <option value="" disabled selected> Month</option>
              <?php 
              for ($count = 1; $count <= 12;$count++){
              ?>
              <option id="lm<?php echo $count?>" value="<?php echo $count?>"  <?php if(isset($_POST['submit'])){ if ($_POST['leavemonth'] == $count){echo "selected";}}; ?>><?php echo $count?></option>
                <?php }?>
            </select>
           
             <?php /** 
               * @Day 
             */?>
           
             <select class="browser-default black-text col s4"   id="day" name="leaveday" require required>
              <option value="" disabled selected>Day</option>
            
               <?php 
              for ($count = 1; $count <= 31;$count++){
              ?>
              <option id="ld<?php echo $count?>" <?php if(isset($_POST['submit'])){ if ($_POST['leaveday'] == $count){echo "selected";}}; ?> value="<?php echo $count?>"  ><?php echo $count?></option>
            <?php } ?>
            </select>
            
               <?php /** 
               * @Year 
             */?>
           <select class="browser-default black-text col s4"   id="yaer" name="leaveyear" require required>
         <option value="" disabled selected>Year</option>
          <?php 
              for ($count = 2015,$count2=0; $count <= 2016;$count++,$count2++){
              ?>
              <option id="y<?php echo gmdate("Y") + $count2;?>"  <?php if(isset($_POST['submit'])){ if ($_POST['leaveyear'] == $count){echo "selected";}}; ?> value="<?php echo gmdate("Y") + $count2;?>"  ><?php echo gmdate("Y") + $count2?></option>
            <?php } ?>
            </select>
            </div>
            
             <div class=" col s6 center">
                <i>*Leave Until</i><br>
                
                <?php /** 
               * @Month 
             */?> 
                
                   <select class="browser-default black-text col s4"   id="untilmonth" name="untilmonth" require required>
              <option value="" disabled selected> Month</option>
              <?php 
              for ($count = 1; $count <= 12;$count++){
              ?>
              <option id="lu<?php echo $count?>"  <?php if(isset($_POST['submit'])){ if ($_POST['untilmonth'] == $count){echo "selected";}}; ?> value="<?php echo $count?>"  ><?php echo $count?></option>
                <?php }?>
            </select>
           
           
            <?php /** 
               * @Day 
             */?>
           
           
             <select class="browser-default black-text col s4"   id="day" name="untilday" require required>
              <option value="" disabled selected>Day</option>
            
               <?php 
              for ($count = 1; $count <= 31;$count++){
              ?>
              <option id="ud<?php echo $count?>"   <?php if(isset($_POST['submit'])){ if ($_POST['untilday'] == $count){echo "selected";}}; ?> value="<?php echo $count?>"  ><?php echo $count?></option>
            <?php } ?>
            </select>
            
            
            
            <?php /** 
               * @Year 
             */?>
            
            <select class="browser-default black-text col s4"   id="yaer" name="untilyear" require required>
             <option value="" disabled selected>Year</option>
         <?php 
              for ($count = 2015,$count2=0; $count <= 2016;$count++,$count2++){
              ?>
              <option id="y<?php echo gmdate("Y") + $count2;?>" value="<?php echo gmdate("Y") + $count2;?>"  <?php if(isset($_POST['submit'])){ if ($_POST['untilyear'] == $count){echo "selected";}}; ?>  ><?php echo gmdate("Y") + $count2;?></option>
            <?php } ?>
            
            </select>
            
            </div>
             <div class=" col s6 left">
             <h6><strong>Reasons </strong> </h6>
            </div>
            
            
             <div class=" col s12 center" style="margin-bottom: 10px;">
              <select class="browser-default black-text"  id="department" name="reason" require required>
              <option value="" disabled selected>Select Leave Reason</option>
              <option value="Sick Leave"   <?php if(isset($_POST['submit'])){ if ($_POST['reason'] == "Sick Leave"){echo "selected";}}; ?>>Sick Leave</option>
              <option value="Vacation Leave" <?php if(isset($_POST['submit'])){ if ($_POST['reason'] == "Vacation Leave"){echo "selected";}}; ?>>Vacation Leave</option>
              <option value="Maternity Leave"  <?php if(isset($_POST['submit'])){ if ($_POST['reason'] == "Maternity Leave"){echo "selected";}}; ?>>Maternity Leave</option>
              <option value="Paternity Leave" <?php if(isset($_POST['submit'])){ if ($_POST['reason'] == "Paternity Leave"){echo "selected";}}; ?> >Paternity Leave</option>
              <option value="Travel Leave" <?php if(isset($_POST['submit'])){ if ($_POST['reason'] == "Travel Leave"){echo "selected";}}; ?> >Travel Leave</option>
            </select>
            </div>
            
             <div class=" col s6 left">
             <h6><strong>Discription </strong> </h6>
            </div>
            
             <div class=" col s12 center">
                <textarea  rows="10" name="discription" require required="">
                 <?php if(isset($_POST['submit'])){echo $_POST['discription'];} ?> 
                </textarea>
            </div>
            
        
        
            
            
            
            
            
        </div>
            <button class="medium btn waves-effect waves-light blue darken-3 right" type="submit" name="submit" style="margin-right: 25px;">
            File Leave 
          <i class="mdi-content-send left"></i>
          </button><br />
        </form>
      </div>
    </div>
    <script>
    

    var leavemonths = document.getElementById("leavemonth");
    var leaveuntil = document.getElementById("untilmonth");  
    var leaveuntil = document.getElementById("untilmonth");
    var today = document.getElementById("today");
    
function showmonth(){
    
    if (today.value == '01'){
         document.getElementById("lm1").disabled = false;
         document.getElementById("lm2").disabled = false;
         document.getElementById("lm3").disabled = false;
         document.getElementById("lm4").disabled = false;
         document.getElementById("lm5").disabled = false;
         document.getElementById("lm6").disabled = false;
         document.getElementById("lm7").disabled = false;
         document.getElementById("lm8").disabled = false;
         document.getElementById("lm9").disabled = false;
         document.getElementById("lm10").disabled = false;
         document.getElementById("lm11").disabled = false;
         document.getElementById("lm12").disabled = false;
    }
    
   else if (today.value == '02'){
    
         document.getElementById("lm1").disabled = true;
         document.getElementById("lm2").disabled = false;
         document.getElementById("lm3").disabled = false;
         document.getElementById("lm4").disabled = false;
         document.getElementById("lm5").disabled = false;
         document.getElementById("lm6").disabled = false;
         document.getElementById("lm7").disabled = false;
         document.getElementById("lm8").disabled = false;
         document.getElementById("lm9").disabled = false;
         document.getElementById("lm10").disabled = false;
         document.getElementById("lm11").disabled = false;
         document.getElementById("lm12").disabled = false;
    }
    
       else if (today.value == '03'){
    
         document.getElementById("lm1").disabled = true;
         document.getElementById("lm2").disabled = true;
         document.getElementById("lm3").disabled = false;
         document.getElementById("lm4").disabled = false;
         document.getElementById("lm5").disabled = false;
         document.getElementById("lm6").disabled = false;
         document.getElementById("lm7").disabled = false;
         document.getElementById("lm8").disabled = false;
         document.getElementById("lm9").disabled = false;
         document.getElementById("lm10").disabled = false;
         document.getElementById("lm11").disabled = false;
         document.getElementById("lm12").disabled = false;
    }
    
       else if (today.value == '04'){
    
         document.getElementById("lm1").disabled = true;
         document.getElementById("lm2").disabled = true;
         document.getElementById("lm3").disabled = true;
         document.getElementById("lm4").disabled = false;
         document.getElementById("lm5").disabled = false;
         document.getElementById("lm6").disabled = false;
         document.getElementById("lm7").disabled = false;
         document.getElementById("lm8").disabled = false;
         document.getElementById("lm9").disabled = false;
         document.getElementById("lm10").disabled = false;
         document.getElementById("lm11").disabled = false;
         document.getElementById("lm12").disabled = false;
    }
    
    else if (today.value == '05'){
    
         document.getElementById("lm1").disabled = true;
         document.getElementById("lm2").disabled = true;
         document.getElementById("lm3").disabled = true;
         document.getElementById("lm4").disabled = true;
         document.getElementById("lm5").disabled = false;
         document.getElementById("lm6").disabled = false;
         document.getElementById("lm7").disabled = false;
         document.getElementById("lm8").disabled = false;
         document.getElementById("lm9").disabled = false;
         document.getElementById("lm10").disabled = false;
         document.getElementById("lm11").disabled = false;
         document.getElementById("lm12").disabled = false;
    }
    
    else if (today.value == '06'){
    
         document.getElementById("lm1").disabled = true;
         document.getElementById("lm2").disabled = true;
         document.getElementById("lm3").disabled = true;
         document.getElementById("lm4").disabled = true;
         document.getElementById("lm5").disabled = true;
         document.getElementById("lm6").disabled = false;
         document.getElementById("lm7").disabled = false;
         document.getElementById("lm8").disabled = false;
         document.getElementById("lm9").disabled = false;
         document.getElementById("lm10").disabled = false;
         document.getElementById("lm11").disabled = false;
         document.getElementById("lm12").disabled = false;
    }
      
    else if (today.value == '07'){
    
         document.getElementById("lm1").disabled = true;
         document.getElementById("lm2").disabled = true;
         document.getElementById("lm3").disabled = true;
         document.getElementById("lm4").disabled = true;
         document.getElementById("lm5").disabled = true;
         document.getElementById("lm6").disabled = true;
         document.getElementById("lm7").disabled = false;
         document.getElementById("lm8").disabled = false;
         document.getElementById("lm9").disabled = false;
         document.getElementById("lm10").disabled = false;
         document.getElementById("lm11").disabled = false;
         document.getElementById("lm12").disabled = false;
    }
        
  
      else if (today.value == '08'){
    
         document.getElementById("lm1").disabled = true;
         document.getElementById("lm2").disabled = true;
         document.getElementById("lm3").disabled = true;
         document.getElementById("lm4").disabled = true;
         document.getElementById("lm5").disabled = true;
         document.getElementById("lm6").disabled = true;
         document.getElementById("lm7").disabled = true;
         document.getElementById("lm8").disabled = false;
         document.getElementById("lm9").disabled = false;
         document.getElementById("lm10").disabled = false;
         document.getElementById("lm11").disabled = false;
         document.getElementById("lm12").disabled = false;
    }
      
  
      else if (today.value == '09'){
    
         document.getElementById("lm1").disabled = true;
         document.getElementById("lm2").disabled = true;
         document.getElementById("lm3").disabled = true;
         document.getElementById("lm4").disabled = true;
         document.getElementById("lm5").disabled = true;
         document.getElementById("lm6").disabled = true;
         document.getElementById("lm7").disabled = true;
         document.getElementById("lm8").disabled = true;
         document.getElementById("lm9").disabled = false;
         document.getElementById("lm10").disabled = false;
         document.getElementById("lm11").disabled = false;
         document.getElementById("lm12").disabled = false;
    }
      
     
      else if (today.value == '10'){
    
         document.getElementById("lm1").disabled = true;
         document.getElementById("lm2").disabled = true;
         document.getElementById("lm3").disabled = true;
         document.getElementById("lm4").disabled = true;
         document.getElementById("lm5").disabled = true;
         document.getElementById("lm6").disabled = true;
         document.getElementById("lm7").disabled = true;
         document.getElementById("lm8").disabled = true;
         document.getElementById("lm9").disabled = true;
         document.getElementById("lm10").disabled = false;
         document.getElementById("lm11").disabled = false;
         document.getElementById("lm12").disabled = false;
    }
      
   
    
      else if (today.value == '11'){
    
         document.getElementById("lm1").disabled = true;
         document.getElementById("lm2").disabled = true;
         document.getElementById("lm3").disabled = true;
         document.getElementById("lm4").disabled = true;
         document.getElementById("lm5").disabled = true;
         document.getElementById("lm6").disabled = true;
         document.getElementById("lm7").disabled = true;
         document.getElementById("lm8").disabled = true;
         document.getElementById("lm9").disabled = true;
         document.getElementById("lm10").disabled = true;
         document.getElementById("lm11").disabled = false;
         document.getElementById("lm12").disabled = false;
    }
      
    
      else if (today.value == '12'){
    
         document.getElementById("lm1").disabled = true;
         document.getElementById("lm2").disabled = true;
         document.getElementById("lm3").disabled = true;
         document.getElementById("lm4").disabled = true;
         document.getElementById("lm5").disabled = true;
         document.getElementById("lm6").disabled = true;
         document.getElementById("lm7").disabled = true;
         document.getElementById("lm8").disabled = true;
         document.getElementById("lm9").disabled = true;
         document.getElementById("lm10").disabled = true;
         document.getElementById("lm11").disabled = true;
         document.getElementById("lm12").disabled = false;
    }
      
  
    
    
    if (leavemonths.value == 2){
        
  document.getElementById("ld29").disabled = true;
  document.getElementById("ld30").disabled = true;  
  document.getElementById("ld31").disabled = true;
  
  document.getElementById("ud29").disabled = true;
  document.getElementById("ud30").disabled = true;  
  document.getElementById("ud31").disabled = true;
 
 
  
  
    }
    
      
      
      
   else if (leavemonths.value == 4 || leavemonths.value == 6 || leavemonths.value == 9 || leavemonths.value == 11){
      document.getElementById("ld31").disabled = true;
       document.getElementById("ud31").disabled = true;
      
   }
  
   else{
      document.getElementById("ld29").disabled = false;
      document.getElementById("ld30").disabled = false;
      document.getElementById("ld31").disabled = false;
     
   }
   
   
   
   
   
   
   
   
   
     if (leavemonths.value == 1){
          document.getElementById("lu1").disabled = false;
          document.getElementById("lu2").disabled = false;
          document.getElementById("lu3").disabled = false;
          document.getElementById("lu4").disabled = false;
          document.getElementById("lu5").disabled = false;
          document.getElementById("lu6").disabled = false;
          document.getElementById("lu7").disabled = false;
          document.getElementById("lu8").disabled = false;
          document.getElementById("lu9").disabled = false;
          document.getElementById("lu10").disabled = false;
          document.getElementById("lu11").disabled = false;
          document.getElementById("lu12").disabled = false;
     }
     
     else if (leavemonths.value == 2){
          document.getElementById("lu1").disabled = true;
          document.getElementById("lu2").disabled = false;
          document.getElementById("lu3").disabled = false;
          document.getElementById("lu4").disabled = false;
          document.getElementById("lu5").disabled = false;
          document.getElementById("lu6").disabled = false;
          document.getElementById("lu7").disabled = false;
          document.getElementById("lu8").disabled = false;
          document.getElementById("lu9").disabled = false;
          document.getElementById("lu10").disabled = false;
          document.getElementById("lu11").disabled = false;
          document.getElementById("lu12").disabled = false;
          leaveuntil.value = "2";
          
     }
     
     else if (leavemonths.value == 3){
          document.getElementById("lu1").disabled = true;
          document.getElementById("lu2").disabled = true;
          document.getElementById("lu3").disabled = false;
          document.getElementById("lu4").disabled = false;
          document.getElementById("lu5").disabled = false;
          document.getElementById("lu6").disabled = false;
          document.getElementById("lu7").disabled = false;
          document.getElementById("lu8").disabled = false;
          document.getElementById("lu9").disabled = false;
          document.getElementById("lu10").disabled = false;
          document.getElementById("lu11").disabled = false;
          document.getElementById("lu12").disabled = false;
           leaveuntil.value = "3";
     }
     else if (leavemonths.value == 4){
          document.getElementById("lu1").disabled = true;
          document.getElementById("lu2").disabled = true;
          document.getElementById("lu3").disabled = true;
          document.getElementById("lu4").disabled = false;
          document.getElementById("lu5").disabled = false;
          document.getElementById("lu6").disabled = false;
          document.getElementById("lu7").disabled = false;
          document.getElementById("lu8").disabled = false;
          document.getElementById("lu9").disabled = false;
          document.getElementById("lu10").disabled = false;
          document.getElementById("lu11").disabled = false;
          document.getElementById("lu12").disabled = false;
           leaveuntil.value = "4";
     }
     else if (leavemonths.value == 5){
          document.getElementById("lu1").disabled = true;
          document.getElementById("lu2").disabled = true;
          document.getElementById("lu3").disabled = true;
          document.getElementById("lu4").disabled = true;
          document.getElementById("lu5").disabled = false;
          document.getElementById("lu6").disabled = false;
          document.getElementById("lu7").disabled = false;
          document.getElementById("lu8").disabled = false;
          document.getElementById("lu9").disabled = false;
          document.getElementById("lu10").disabled = false;
          document.getElementById("lu11").disabled = false;
          document.getElementById("lu12").disabled = false;
            leaveuntil.value = "5";
     }
     
     else if (leavemonths.value == 6){
          document.getElementById("lu1").disabled = true;
          document.getElementById("lu2").disabled = true;
          document.getElementById("lu3").disabled = true;
          document.getElementById("lu4").disabled = true;
          document.getElementById("lu5").disabled = true;
          document.getElementById("lu6").disabled = false;
          document.getElementById("lu7").disabled = false;
          document.getElementById("lu8").disabled = false;
          document.getElementById("lu9").disabled = false;
          document.getElementById("lu10").disabled = false;
          document.getElementById("lu11").disabled = false;
          document.getElementById("lu12").disabled = false;
            leaveuntil.value = "6";
     }

     else if (leavemonths.value == 7){
          document.getElementById("lu1").disabled = true;
          document.getElementById("lu2").disabled = true;
          document.getElementById("lu3").disabled = true;
          document.getElementById("lu4").disabled = true;
          document.getElementById("lu5").disabled = true;
          document.getElementById("lu6").disabled = true;
          document.getElementById("lu7").disabled = false;
          document.getElementById("lu8").disabled = false;
          document.getElementById("lu9").disabled = false;
          document.getElementById("lu10").disabled = false;
          document.getElementById("lu11").disabled = false;
          document.getElementById("lu12").disabled = false;
            leaveuntil.value = "7";
     }
     else if (leavemonths.value == 8){
          document.getElementById("lu1").disabled = true;
          document.getElementById("lu2").disabled = true;
          document.getElementById("lu3").disabled = true;
          document.getElementById("lu4").disabled = true;
          document.getElementById("lu5").disabled = true;
          document.getElementById("lu6").disabled = true;
          document.getElementById("lu7").disabled = true;
          document.getElementById("lu8").disabled = false;
          document.getElementById("lu9").disabled = false;
          document.getElementById("lu10").disabled = false;
          document.getElementById("lu11").disabled = false;
          document.getElementById("lu12").disabled = false;
            leaveuntil.value = "8";
     }
     
     else if (leavemonths.value == 9){
          document.getElementById("lu1").disabled = true;
          document.getElementById("lu2").disabled = true;
          document.getElementById("lu3").disabled = true;
          document.getElementById("lu4").disabled = true;
          document.getElementById("lu5").disabled = true;
          document.getElementById("lu6").disabled = true;
          document.getElementById("lu7").disabled = true;
          document.getElementById("lu8").disabled = true;
          document.getElementById("lu9").disabled = false;
          document.getElementById("lu10").disabled = false;
          document.getElementById("lu11").disabled = false;
          document.getElementById("lu12").disabled = false;
            leaveuntil.value = "9";
     }
     else if (leavemonths.value == 10){
          document.getElementById("lu1").disabled = true;
          document.getElementById("lu2").disabled = true;
          document.getElementById("lu3").disabled = true;
          document.getElementById("lu4").disabled = true;
          document.getElementById("lu5").disabled = true;
          document.getElementById("lu6").disabled = true;
          document.getElementById("lu7").disabled = true;
          document.getElementById("lu8").disabled = true;
          document.getElementById("lu9").disabled = true;
          document.getElementById("lu10").disabled = false;
          document.getElementById("lu11").disabled = false;
          document.getElementById("lu12").disabled = false;
            leaveuntil.value = "10";
     }
     else if (leavemonths.value == 11){
          document.getElementById("lu1").disabled = true;
          document.getElementById("lu2").disabled = true;
          document.getElementById("lu3").disabled = true;
          document.getElementById("lu4").disabled = true;
          document.getElementById("lu5").disabled = true;
          document.getElementById("lu6").disabled = true;
          document.getElementById("lu7").disabled = true;
          document.getElementById("lu8").disabled = true;
          document.getElementById("lu9").disabled = true;
          document.getElementById("lu10").disabled = true;
          document.getElementById("lu11").disabled = false;
          document.getElementById("lu12").disabled = false;
            leaveuntil.value = "11";
     }
     else if (leavemonths.value == 12){
          document.getElementById("lu1").disabled = true;
          document.getElementById("lu2").disabled = true;
          document.getElementById("lu3").disabled = true;
          document.getElementById("lu4").disabled = true;
          document.getElementById("lu5").disabled = true;
          document.getElementById("lu6").disabled = true;
          document.getElementById("lu7").disabled = true;
          document.getElementById("lu8").disabled = true;
          document.getElementById("lu9").disabled = true;
          document.getElementById("lu10").disabled = true;
          document.getElementById("lu11").disabled = true;
          document.getElementById("lu12").disabled = false;
            leaveuntil.value = "12";
          
     }
       else{
          document.getElementById("lu1").disabled = true;
          document.getElementById("lu2").disabled = true;
          document.getElementById("lu3").disabled = true;
          document.getElementById("lu4").disabled = true;
          document.getElementById("lu5").disabled = true;
          document.getElementById("lu6").disabled = true;
          document.getElementById("lu7").disabled = true;
          document.getElementById("lu8").disabled = true;
          document.getElementById("lu9").disabled = true;
          document.getElementById("lu10").disabled = true;
          document.getElementById("lu11").disabled = true;
          document.getElementById("lu12").disabled = true;
          
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
        echo "<script>alert('Please login as employee!');window.location='index.php'</script>";
        sleep(1);
    }
    
?>  