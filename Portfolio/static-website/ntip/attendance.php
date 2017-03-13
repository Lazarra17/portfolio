
<?php
  session_start();

    if (isset($_SESSION["accesscode"])){
     if ($_SESSION["accesscode"] == "newtaytayiceplantemployee" || $_SESSION["accesscode"] == "newtaytayiceplant4"){  
  include 'php/db/connect.php';
  include 'php/function.php';



   // echo "<script> alert('". $gender ."'); </script>";
?>


<html>
<head>
	<title>Attendance</title>
	<link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>
	<!-- <link type="text/css" rel="stylesheet" href="css/mystyle.css"> -->
  <link type="text/css" rel="stylesheet" href="css/forms.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
  <link type="text/css" rel="stylesheet" href="css/sidebar.css">
   <link rel="icon" href="img/snowflake.png" type="image/png" />
</head>
<body onload="onit()">
  <?php
 
   if (isset($_SESSION["emp_id_no"])){
    $emp_id_no = data_secure($_SESSION["emp_id_no"]);
  }
  
    include 'php/header.php';
 if (isset($_SESSION["emp_id_no"])){
  include 'php/sidebar.php';
  }else{
     include 'php/sidebarcustomer.php';
  }
    
  ?>

    <div class="col s12" style="margin-left: 8%;">
      <div class="container white z-depth-2" style="margin-top: 2%; height:auto; padding-top: 1%; padding-bottom: 3%;">
        <div class="row">
          <div class="col s12">
            <ul class="tabs ">
              <li class="tab col s3"><a href="#recent" class="blue-text active">Employee Attendance</a></li> 
         
            </ul>
          </div>
          <div id="recent" class="col s12"><br>
                   <form method="GET" action="<?php echo $_SERVER["PHP_SELF"]?>">
              <table class="hoverable responsive-table bordered">
                <thead>
                
            <select class="browser-default black-text col s9" name="months" require required> 
              <option value="" disabled selected>Select Month</option>
              <option value="01">January</option>
              <option value="02">February</option>
              <option value="03">March</option>
                <option value="04">April</option>
              <option value="05">May</option>
              <option value="06">June</option>
                <option value="07">July</option>
              <option value="08">August</option>
              <option value="09">September</option>
                <option value="10">October</option>
              <option value="11">November</option>
              <option value="12">December</option>
            </select>
            <div class="input-field col s3">
              <button class="medium btn waves-effect waves-light blue darken-3 left" style="margin-top: -10px;" type="submit" name="submit">
            Find
          <i class="mdi-content-send right"></i>
          </button>
                
                  <tr >
                    <th data-field="date">Date</th>
                    <th data-field="Day">Day</th>
                    <th data-field="Time">Time IN AM</th>
                    <th data-field="Time">Time OUT AM</th>
                    <th data-field="Time">Time IN PM</th>
                    <th data-field="Time">Time OUT PM</th>
                    <th data-field="Time">Overtime IN</th>
                    <th data-field="Time">Overtime OUT</th>
                   
                    
                  </tr>
                </thead>
                <tbody>
                  <?php

                  if (isset($_GET["submit"])){
                  $month = $_GET["months"];

              
                  $query = "SELECT * FROM `attendance` WHERE emp_id_no='$emp_id_no' AND MONTH(date)='$month' ORDER BY date";                    
                   $run   = mysql_query($query);
                   
                   if (mysql_num_rows($run) >= 1){
                    while($row = mysql_fetch_array($run)){ ?>
                      <tr>
                      
                                   
                    <td><?php echo $row['date']; ?></td>
                    <td><?php echo $row['week']; ?></td>
                    <td><?php echo $row['in_am']; ?></td>
                    <td><?php echo $row['out_am']; ?></td>
                    <td><?php echo $row['in_pm']; ?></td>
                    <td><?php echo $row['out_pm']; ?></td>
                    <td><?php echo $row['in_overtime']; ?></td>
                    <td><?php echo $row['out_overtime']; ?></td>
                       </tr>
               <?php
                   }}else
                   echo "<script>alert('No records found');</script>";
                    }
                  ?>
               
               
              </table>
              </form>
          </div>
      </div>
      </div>
    </div>
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