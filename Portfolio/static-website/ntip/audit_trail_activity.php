<?php
  session_start();
  
     if (isset($_SESSION["accesscode"])){  
      if ($_SESSION["accesscode"] == "newtaytayiceplant1" || $_SESSION["accesscode"] == "newtaytayiceplant2" || $_SESSION["accesscode"] == "newtaytayiceplant3"
      || $_SESSION["accesscode"] == "newtaytayiceplant11" || $_SESSION["accesscode"] == "newtaytayiceplant22" || $_SESSION["accesscode"] == "newtaytayiceplant33"
      || $_SESSION["accesscode"] == "newtaytayiceplant4"){        
    
    
  include 'php/db/connect.php';
  include 'php/function.php';
    
    $time_in = $_GET["time_in"];    

                $sql = "SELECT activity FROM `audit_trail` WHERE date_time_in ='$time_in'";    
                $result = mysql_query($sql);
               $row = mysql_fetch_assoc($result);
               $text = explode("+", $row["activity"]);


   // echo "<script> alert('". $gender ."'); </script>";
?>
<html>
<head>
	<title>Audit Trail - Activity</title>
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
    <div class="col s12" style="margin-left: 7%;">
      <div class="container white z-depth-2" style="margin-top: 2%; height:auto; width:70%; padding-top: 1%; padding-bottom: 3%;">
        <div class="row">
          <div class="col s12">
            <h4 style="letter-spacing: 2px;">Audit Trail - 
            <?php if (isset($_SESSION["user_id"]))
            {
                if ($_SESSION["user_id"] == 1){
                    echo "Human Resource Department";
                     $department = "Human Resource";
                }
               else if ($_SESSION["user_id"] == 2){
                    echo "Marketing Department";
                    $department = "Marketing";
                }
               else if ($_SESSION["user_id"] == 3){
                    echo "Production Department";
                     $department = "Production";
                }
                 else if ($_SESSION["user_id"] == 4){
                    echo "Super Admin";
                     $department = "superadmin";
                }
                
                 }?>
            
            
            
            </h4>
          <form method="GET" action="" >
          <div id="HR" class="col s12"><br>
        
  
            </form>    
            </div>
           
            
            
              <table class="hoverable responsive-table bordered" style="font-size: 15px;">
              
              
              
                <thead>
                  <tr>
                    
                    
                    <th data-field="name" style="background-color: #f1f1f1;">Admin Name:<span style="font-weight: normal;margin-left: 20px;"> <?php echo userData("admin_name")?></span></th>
                    <th data-field="name" style="background-color: #f1f1f1;">Department:<span style="font-weight: normal;margin-left: 20px;"> <?php echo userData("department")?> </span></th>
                    <th data-field="name" style="background-color: #f1f1f1;">IP Address:<span style="font-weight: normal;margin-left: 20px;"> <?php echo auditSelectIP("ip_address",$time_in)?> </span></th>
               
               
                  </tr>
                </thead>
                
                     <thead>
                    
                  
                      </table>
                   
                  </tr>
                </thead>
                  <table class="hoverable responsive-table bordered" style="font-size: 15px;">
                  
                    <th data-field="name" style="background-color: #f1f1f1;">Activities</th>
                <tbody>
                
                
                 <?php 
                              
            
             ?>
                
          
                      <tr>
                      <?php 
                      foreach($text as $texts){
                      ?>
                        <td><?php echo $texts; ?></td>
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