<?php
  session_start();
  
    if (isset($_SESSION["accesscode"])){
    if ($_SESSION["accesscode"] == "newtaytayiceplant1" || $_SESSION["accesscode"] == "newtaytayiceplant11" || $_SESSION["accesscode"] == "newtaytayiceplant4"){  
  
  include 'php/db/connect.php';
  include 'php/function.php';



   // echo "<script> alert('". $gender ."'); </script>";
?>
<html>
<head>
	<title>Search - Employee</title>
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
      <div class="container white z-depth-2" style="margin-top: 2%; height:auto; width:75%; padding-top: 1%; padding-bottom: 3%;">
        <div class="row">
          <div class="col s12">
            <h4 style="letter-spacing: 2px;">Search All Employee</h4>
          <form method="GET" action="" >
          
            
            
            
              <table class="hoverable responsive-table bordered" style="font-size: 15px;">
                <thead>
                  <tr>
                    <th data-field="id">Emp ID</th>
                    <th data-field="name">Employee Name</th>
                    <th data-field="gender">Gender</th>
                    <th data-field="city">City</th>
                    <th data-field="contact">Contact</th>
                    <th data-field="email">Email</th>
                    <th data-field="position">Department</th>
                    <th data-field="position">Position</th>
                    <th data-field="date_hired">Date Hired</th>
                  </tr>
                </thead>
                <tbody>
                
                
                 <?php 
     //       if (isset($_GET["submit"])){
                //$searchby = $_GET["searchby"]; 
      //          $search = $_GET["find"];
                
            $sql = "SELECT * FROM `employee`";    
                $result = mysql_query($sql);
                while ($row = mysql_fetch_assoc($result)){
                  
    
             ?>
                
          
                      <tr>
                        <td><?php echo $row['emp_id_no']; ?></td>
                        <td><?php echo $row['last_name'] . ", " . $row['first_name'] . " " . ucfirst($row['middle_name']); ?></td>
                        <td><?php echo $row['gender']; ?></td>
                        <td><?php echo $row['city']; ?></td>
                        <td><?php echo $row['contact']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['department']; ?></td>
                        <td><?php echo $row['position']; ?></td>
                        <td><?php echo $row['date_hired']; ?></td>
                      </tr>
                  <?php
                    }
                  //  }
                  ?>
                </tbody>
              </table>
          </div>
          
                </tbody>
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
        echo "<script>alert('Please, login as marketing admin!');window.location='index.php'</script>";
        sleep(1);
    }}
    else{
        echo "<script>alert('Please, login as marketing admin!');window.location='index.php'</script>";
        sleep(1);
    }
    
?> 