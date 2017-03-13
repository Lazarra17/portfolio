<?php
  session_start();
  
    if (isset($_SESSION["accesscode"])){
     if ($_SESSION["accesscode"] == "newtaytayiceplant1" || $_SESSION["accesscode"] == "newtaytayiceplant11" || $_SESSION["accesscode"] == "newtaytayiceplant4"){   
  include 'php/db/connect.php';
  include 'php/function.php';
$search="";
if (isset($_GET["find"])){
    $search = data_secure($_GET["find"]);
    
}

   // echo "<script> alert('". $gender ."'); </script>";
?>
<html>
<head>
	<title>Delete Account</title>
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
    <div class="col s12" style="margin-left: 10%;">
      <div class="container white z-depth-2" style="margin-top: 2%; height:auto; width:80%; padding-top: 1%; padding-bottom: 3%;">
        <div class="row">
          <div class="col s12">
            <h4 style="letter-spacing: 2px;">Delete Employee</h4>
              <form method="GET" action="" >
          
            
           <div class="input-field col s4">
                <i class="small mdi-social-person prefix black-text"></i>
                <input id="find" type="text" class="validate" name="find"  require required maxlength="15" value="<?php echo $search?>">
                <label for="find records">* Find Records </label>
            </div>
           
            
              <div class="input-field col s4">
              <button class="medium btn waves-effect waves-light blue darken-3 left" type="submit" name="submit" style="margin-right: 25px;">
            Find
          <i class="mdi-content-send right"></i>
          </button>
              
            </div>
           
            
            
              <table class="hoverable responsive-table bordered" style="font-size: 15px;clear:both">
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
            if (isset($_GET["submit"])){
                //$searchby = $_GET["searchby"]; 
       $search = data_secure($_GET["find"]);
                                          
                        
                
            $sql = "SELECT * FROM `employee` WHERE first_name = '$search' OR last_name='$search'";    
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
                        <td><a href="employee-delete.php?emp_id_no=<?php echo $row["emp_id_no"] . "&find=" . $search?>" style="color:red;">Delete</a>
                                               </td>
                             
                      </tr>
                  <?php
                 
                   
                   
                    }  
                   
                   
                  
                    }
                
                if (isset($_GET["emp_id_no"])){
                    $id = data_secure($_GET["emp_id_no"]);
                    $find = data_secure($_GET["find"]);
                    $fullname = data_secure($_GET["fullname"]);
                    deleteEmployee($id);
                 
           	 	 $todayoryt = $_SESSION["time_in_oryt"];
                 $allactivity = auditSelect("activity",$todayoryt);
                 $activity = "Deleted an employee record $fullname at" . date("h:i:sa");
                 $activity = $allactivity . "+" . $activity;    
                 auditActivity($activity,$todayoryt);
               
                    
                    
                    
                    
                      $sql = "SELECT * FROM `employee` WHERE first_name = '$search' OR last_name='$search'";    
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
                        <td><a href="employee-delete.php?emp_id_no=<?php echo $row["emp_id_no"] . "&find=" . $search . "&fullname=$row[first_name] $row[last_name]";?>&jawRtFkdyRHAc" style="color:red;">Delete</a>
                        
                       </td>
                             
                      </tr>
                    
                 <?php                   
                  
                    }  
                 
             
              
                        
                } 
                  ?>
                </tbody>
              </table>
        </div>
          
                </form>    </div>
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