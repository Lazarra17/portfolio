<?php
  session_start();
  

   if ($_SESSION["accesscode"] == "newtaytayiceplantemployee"){
  
  include 'php/db/connect.php';
  include 'php/function.php';



   // echo "<script> alert('". $gender ."'); </script>";
?>
<html>
<head>
	<title>Messages</title>
	<link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>
	<!-- <link type="text/css" rel="stylesheet" href="css/mystyle.css"> -->
  <link type="text/css" rel="stylesheet" href="css/forms.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
  <link type="text/css" rel="stylesheet" href="css/sidebar.css">
   <link rel="icon" href="img/snowflake.png" type="image/png" />
</head>
<body>
  <?php
 
   if (isset($_SESSION["customer_id"])){
    $customer_id_id = data_secure($_SESSION["customer_id"]);
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
              <li class="tab col s3"><a href="#" class="blue-text active">Timeline</a></li> 
             
            </ul>
          </div>
          <div id="pending" class="col s12"><br>
              <table class="hoverable responsive-table bordered">
                <thead>
                  <tr>
                    <th data-field="date" width="150px">Date</th>
                    <th data-field="message">Message</th>
                    <th data-field="message">Decision</th>
                    
                  </tr>
                </thead>
                <tbody>
                  <?php
                  
               $email = data_secure($_SESSION["email"]);
                  $query = "SELECT * FROM `leave_message` WHERE email = '$email'";                    
                    $run   = mysql_query($query);

                    while($row = mysql_fetch_array($run)){ ?>
                      <tr>
                      
                        <td><?php echo $row['date']; ?></td>                  
                        <td><?php echo $row['message']; ?></td>
                      <td><?php echo $row['decision']; ?></td>    
                       </tr>
                  <?php
                    }
                  ?>
               
              </table>
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
        echo "<script>alert('Please login as employee!');window.location='index.php'</script>";
        sleep(1);
    }
    
?>  