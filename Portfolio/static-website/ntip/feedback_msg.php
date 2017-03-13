<?php
  session_start();
  
     if (isset($_SESSION["accesscode"])){  
      if ($_SESSION["accesscode"] == "newtaytayiceplant1" || $_SESSION["accesscode"] == "newtaytayiceplant2" || $_SESSION["accesscode"] == "newtaytayiceplant3"
      || $_SESSION["accesscode"] == "newtaytayiceplant11" || $_SESSION["accesscode"] == "newtaytayiceplant22" || $_SESSION["accesscode"] == "newtaytayiceplant33"
      || $_SESSION["accesscode"] == "newtaytayiceplant4"){        
    
    
  include 'php/db/connect.php';
  include 'php/function.php';
    $email = data_secure($_GET["email"]);


   // echo "<script> alert('". $gender ."'); </script>";
?>
<html>
<head>
	<title>NTIP - Feedback</title>
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
            <h4 style="letter-spacing: 2px;">NTIP - Feedback
          
            
            
            
            </h4>
          <form method="GET" action="" >
          <div id="HR" class="col s12"><br>
        
  
            </form>    
            </div>
           
            
            
              <table class="hoverable responsive-table bordered" style="font-size: 15px;">
              
              
              
                <thead>
                  <tr>
                    
                    
                    <th data-field="name" style="background-color: #f1f1f1;">Customer Name:<span style="font-weight: normal;margin-left: 20px;"> <?php echo feedbackData("customer_name",$email)?></span></th>
                    <th data-field="name" style="background-color: #f1f1f1;">Email:<span style="font-weight: normal;margin-left: 20px;"> <?php echo feedbackData("email",$email)?> </span></th>
                    <th data-field="name" style="background-color: #f1f1f1;">IP Address:<span style="font-weight: normal;margin-left: 20px;"> <?php echo feedbackData("ip",$email)?> </span></th>
               
               
                  </tr>
                </thead>
                
                     <thead>
                    
                  
                      </table>
                   
                  </tr>
                </thead>
                  <table class="hoverable responsive-table bordered" style="font-size: 15px;">
                  
                    <th data-field="name" style="background-color: #f1f1f1;">Message</th>
                <tbody><td>
                 <div class=" col s12 center">
              <textarea readonly="" cols="80" rows="15" style="resize: none;" name="feedback" required="">
         <?php     echo feedbackData("feedback",$email) ?>
        </textarea>
                </div></td>
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