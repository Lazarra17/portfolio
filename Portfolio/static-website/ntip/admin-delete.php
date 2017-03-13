<?php
  session_start();

    if (isset($_SESSION["accesscode"])){
     if ($_SESSION["accesscode"] == "newtaytayiceplant4"){  
   
  
  include 'php/db/connect.php';
  include 'php/function.php';



    if (isset($_GET["update"])){
        //Disable admin
        $admin_no = data_secure($_GET["update"]);
      $admin_name = data_secure($_GET["admin_name"]);
        
        updateAdmin($admin_no); 
        
           	 	 $todayoryt = $_SESSION["time_in_oryt"];
                 $allactivity = auditSelect("activity",$todayoryt);
                $activity = "Disabled admin account: Admin No:$admin_no, Admin Name: $admin_name at " . date("h:i:sa");
                $activity = $allactivity . "+" . $activity;    
                auditActivity($activity,$todayoryt);
        
    }

    if (isset($_GET["enable"])){
        $admin_no = data_secure($_GET["enable"]);
        enableAdmin($admin_no); 
        
           	 	 $todayoryt = $_SESSION["time_in_oryt"];
                 $allactivity = auditSelect("activity",$todayoryt);
                $activity = "Enabled admin account: Admin No:$admin_no, Admin Name: $admin_name at ". date("h:i:sa");
                $activity = $allactivity . "+" . $activity;    
                auditActivity($activity,$todayoryt);       
        
        
    }

   if (isset($_GET["delete"])){
        $admin_no = data_secure($_GET["delete"]);
        deleteAdmin($admin_no); 
        
           	 	 $todayoryt = $_SESSION["time_in_oryt"];
                 $allactivity = auditSelect("activity",$todayoryt);
                $activity = "Deleted admin account: Admin No:$admin_no, Admin Name: $admin_name at " . date("h:i:sa");
                $activity = $allactivity . "+" . $activity;    
                auditActivity($activity,$todayoryt);
                
    }



   // echo "<script> alert('". $gender ."'); </script>";
?>
<html>
<head>
	<title>Delete Admin</title>
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
    <div class="col s12" style="margin-left: 5%;">
      <div class="container white z-depth-2" style="margin-top: 2%; height:auto;  padding-top: 1%; padding-bottom: 3%;">
        <div class="row">
          <div class="col s12">
            <h4 style="letter-spacing: 2px;">Search Employee</h4>
          <form method="GET" action="" >
          
        
           <div class="input-field col s4">
                <i class="small mdi-social-person prefix black-text"></i>
                <input id="find" type="text" class="validate" name="find"  require required maxlength="15">
                <label for="find records">* Find Records </label>
            </div>
           
            
              <div class="input-field col s4">
              <button class="medium btn waves-effect waves-light blue darken-3 left" type="submit" name="submit" style="margin-right: 25px;">
            Find
          <i class="mdi-content-send right"></i>
          </button>
            </form>    
            </div>
           
            
            
              <table class="hoverable responsive-table bordered" style="font-size: 15px;">
                <thead>
                  <tr>
                
                    <th data-field="name">Admin Name</th>
                    <th data-field="gender">Gender</th>
                    <th data-field="city">Address</th>
                    <th data-field="department">Department</th>
                    <th data-field="position">Position</th>
                    <th data-field="date">Date Joined</th>                    
                    <th data-field="status">Status</th>
                    <th data-field="date">Action</th>                    
                    <th data-field="status">Action</th>
                    <th data-field="status">Action</th>
                  </tr>
                </thead>
                <tbody>
                
                
                 <?php 
            if (isset($_GET["submit"])){
                //$searchby = $_GET["searchby"]; 
                $search = data_secure($_GET["find"]);
                
            $sql = "SELECT * FROM `users` WHERE admin_name = '$search' OR admin_no='$search' OR department='$search' OR user_code='$search' OR gender='$search'";    
                $result = mysql_query($sql);
                while ($row = mysql_fetch_assoc($result)){
                  
    
             ?>
                
          
                      <tr>
                         <td><?php echo $row['admin_name']; ?></td>
                        <td><?php echo $row['gender']; ?></td>
                        <td><?php echo $row['address']; ?></td>
                        <td><?php echo $row['department']; ?></td>
                        <td><?php echo "Admin" ?></td>
                        <td><?php echo $row['date_joined']; ?></td>
                        <td><?php echo $row['status']; ?></td>
                       <td><a id="action" style="color: green;" href="admin-delete.php?enable=<?php echo $row["admin_no"] . "&admin_name=$row[admin_name]";?>"><?php echo "Enable" ?></a></td>
                       <td><a id="action" style="color: orange;" href="admin-delete.php?update=<?php echo $row["admin_no"]. "&admin_name=$row[admin_name]";?>"><?php echo "Disable" ?></a></td>
                       <td><a id="action" style="color: red;" href="admin-delete.php?delete=<?php echo $row["admin_no"]. "&admin_name=$row[admin_name]";?>"><?php echo "Delete" ?></a></td>
                      </tr>
                  <?php
                    }
                    }
                  ?>
                </tbody>
              </table>
          </div>
          <style>
          #action:hover{
            text-shadow:0px 1px 0px black;
          }
          
          </style>
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
        echo "<script>alert('Please, login as super admin!');window.location='index.php'</script>";
        sleep(1);
    }}
    else{
        echo "<script>alert('Please, login as super admin!');window.location='index.php'</script>";
        sleep(1);
    }
    
?>  