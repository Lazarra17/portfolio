<?php
  session_start();
  
    if (isset($_SESSION["accesscode"])){
   if ($_SESSION["accesscode"] == "newtaytayiceplant1" || $_SESSION["accesscode"] == "newtaytayiceplant11" || $_SESSION["accesscode"] == "newtaytayiceplant4"){   
  include 'php/db/connect.php';
  include 'php/function.php';

if (isset($_GET["deleted"])){
    echo "<script>alert('You have successfully deleted a request.');</script>";
    
}


   // echo "<script> alert('". $gender ."'); </script>";
?>
<html>
<head>
	<title>Request leave</title>
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
      <div class="container white z-depth-2" style="margin-top: 2%; height:100%; padding-top: 1%; padding-bottom: 3%;">
        <div class="row">
          <div class="col s12">
            <ul class="tabs ">
              <li class="tab col s3"><a href="#newrequest" class="blue-text active">New Requests</a></li>
              <li class="tab col s3"><a href="#allrequest" class="blue-text">All Requests</a></li>
             
            </ul>
          </div>
          <div id="newrequest" class="col s12"><br>
              <table class="hoverable responsive-table bordered">
                <thead>
                  <tr>
                    <th data-field="id">Employee ID</th>
                    <th data-field="name">Employee Name</th>
                    <th data-field="name">Leave Start</th>
                    <th data-field="name">Leave Until</th>
                    <th data-field="name">Status</th>
                    <th data-field="price" class="centered">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    $query = "SELECT * FROM `leave_report` WHERE status = 'New'";
                    $run   = mysql_query($query);

                    while($row = mysql_fetch_array($run)){ ?>
                      <tr>
                        <td><?php echo $row['emp_id_no']; ?></td>
                        <td><?php echo $row['full_name']; ?></td>
                        <td><?php echo $row['leave_start']; ?></td>
                        <td><?php echo $row['leave_until']; ?></td>
                        <td><?php echo $row['rank']; ?></td>
                        <td><a href="request-leave-confirm.php?emp_id_no=<?php echo $row['emp_id_no'] . "&request_no=$row[leave_id]"; ?>"><i class=" small mdi-editor-border-color"></i></a></td>
                      </tr>
                  <?php
                    }
                  ?>
                </tbody>
              </table>
          </div>
          <div id="allrequest" class="col s12"><br>
            <table class="hoverable responsive-table bordered">
                <thead>
                  <tr>
                   <th data-field="id">Employee ID</th>
                    <th data-field="name">Employee Name</th>
                    <th data-field="name">Leave Start</th>
                    <th data-field="name">Leave Until</th>
                    <th data-field="price" class="centered">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                   $query = "SELECT * FROM `leave_report` WHERE status = 'old' OR status='new'";
                    $run   = mysql_query($query);

                    while($row = mysql_fetch_array($run)){ ?>
                      <tr>
                      <td><?php echo $row['emp_id_no']; ?></td>
                        <td><?php echo $row['full_name']; ?></td>
                        <td><?php echo $row['leave_start']; ?></td>
                        <td><?php echo $row['leave_until']; ?></td>
                        <td><?php echo $row['rank']; ?></td>
                        <td><a href="request-leave-confirm.php?emp_id_no=<?php echo $row['emp_id_no'] . "&request_no=$row[leave_id]"; ?>"><i class=" small mdi-editor-border-color"></i></a></td>
                       </tr>
                  <?php
                    }
                  ?>
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