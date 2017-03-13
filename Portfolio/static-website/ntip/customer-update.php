<?php
  session_start();
  if (isset($_SESSION["accesscode"])){
     if ($_SESSION["accesscode"] == "newtaytayiceplant2" || $_SESSION["accesscode"] == "newtaytayiceplant22" || $_SESSION["accesscode"] == "newtaytayiceplant4"){   
  
  include 'php/db/connect.php';
  include 'php/function.php';



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
<body>
  <?php
    include 'php/header.php';
    include 'php/sidebar.php';
  ?>
    <div class="col s12" style="margin-left: 9%;">
      <div class="container white z-depth-2" style="margin-top: 2%; height:auto;width:78%; padding-top: 1%; padding-bottom: 3%;">
        <div class="row">
          <div class="col s12">
            <ul class="tabs ">
              <li class="tab col s3"><a href="#HR" class="blue-text active">Update Customers</a></li> 
            </ul>
          </div>
          <div id="HR" class="col s12"><br>
              <table class="hoverable responsive-table bordered">
                <thead>
                  <tr>
                    <th data-field="id">Client ID</th>
                    <th data-field="name">Customer Name</th>
                    <th data-field="gender">Gender</th>
                    <th data-field="address">Address</th>
                    <th data-field="contact">Contact</th>
                    <th data-field="email">Email</th>
                    <th data-field="date_hired">Date Created</th>
                    <th data-field="price" class="centered">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    $query = "SELECT * FROM `customer`";
                    $run   = mysql_query($query);

                    while($row = mysql_fetch_array($run)){ ?>
                      <tr>
                        <td><?php echo $row['customer_id']; ?></td>
                        <td><?php echo $row['lname'] . ", " . $row['fname']; ?></td>
                        <td><?php echo $row['gender']; ?></td>
                        <td><?php echo $row['address']; ?></td>
                        <td><?php echo $row['contact']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['date_created']; ?></td><td><a href="customer-update-confirm.php?customer_id=<?php echo $row['customer_id']; ?>"><i class=" small mdi-editor-border-color"></i></a></td>
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
        echo "<script>alert('Please, login as marketing admin!');window.location='index.php'</script>";
        sleep(1);
    }}
    else{
        echo "<script>alert('Please, login as marketing admin!');window.location='index.php'</script>";
        sleep(1);
    }
    
?> 
