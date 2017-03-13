<?php
  session_start();
  
if (isset($_SESSION["accesscode"])){  
  if ($_SESSION["accesscode"] == "newtaytayiceplant3" || $_SESSION["accesscode"] == "newtaytayiceplant33"
    || $_SESSION["accesscode"] == "newtaytayiceplant4"){
  
  include 'php/db/connect.php';
  include 'php/function.php';




?>
<html>
<head>
	<title>Reports</title>
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
            <h4 style="letter-spacing: 2px;">Generate Sales Reports</h4>
          <form method="GET" action="" >
          
            
          
             <?php 
             if (isset($_GET["weekly"])){
              
             ?>
               <div id="recent" class="col s4">
           <b> From:  </b><input type="date" name="from" required="" />      </div>
       
              <div id="recent" class="col s4">
             <b> Until:</b>
             <input type="date" name="until" required="" />      </div>
      
      
      <?php }
         elseif (isset($_GET["monthly"])){
      ?>
      
      <select class="browser-default black-text col s4" name="year" style="margin-right: 10px;" require="" required> 

            <option value="Disable" selected="" disabled="">Select Year</option>

            <?php 
           $sql = "SELECT DISTINCT YEAR(date_added) as year FROM `receipt` ORDER BY date_added";
           $result = mysql_query($sql);
           while ($year = mysql_fetch_array($result)){
           ?>     
           <option value="<?php echo $year["year"]?>"><?php echo $year["year"]?></option>   
             <?php } ?>
         
                  
             </select>
      
         <select class="browser-default black-text col s4" name="month" require="" required > 

            <option value="Disable" selected="" disabled="">Select Month</option>

            <option value="1">January</option>
            <option value="2">February</option>
            <option value="3">March</option>
            <option value="4">April</option>
            <option value="5">May</option>
            <option value="6">June</option>
            <option value="7">July</option>
            <option value="8">August</option>
            <option value="9">September</option>
            <option value="10">October</option>
            <option value="11">November</option>
            <option value="12">December</option>
                  
             </select>
      
      
        <?php }
         elseif (isset($_GET["yearly"])){
      ?>
      
         <select class="browser-default black-text col s8" name="year" require required> 
            <option value="Disable" selected="" disabled="">Select Year</option>
           
           <?php 
           $sql = "SELECT DISTINCT YEAR(date_added) as year FROM `receipt` ORDER BY date_added";
           $result = mysql_query($sql);
           while ($year = mysql_fetch_array($result)){
           ?>     
           <option value="<?php echo $year["year"]?>"><?php echo $year["year"]?></option>   
             <?php } ?>
      </select>
                 
      <?php }?>
      
      
      
      
      <?php
      
        if (isset($_GET["submit"])){
            
    $datefrom = $_GET["from"];
    $dateuntil = $_GET["until"];
    $month = $_GET["month"];
    $year = $_GET["year"];
    
    if ($datefrom != null && $dateuntil != null){
        header("Location:fpdf/sales_report-weekly.php?datefrom=$datefrom&dateuntil=$dateuntil");
        
                 $todayoryt = $_SESSION["time_in_oryt"];
                 $allactivity = auditSelect("activity",$todayoryt);
                 $activity = "Generate sales reports from $datefrom to $dateuntil  report at " . date("h:i:sa");
                 $activity = $allactivity . "+" . $activity;    
                 auditActivity($activity,$todayoryt); 
    }
    else if ($month != null && $year != null){
        header("Location:fpdf/sales_report-monthly.php?month=$month&year=$year");
        
                   	 	 $todayoryt = $_SESSION["time_in_oryt"];
                 $allactivity = auditSelect("activity",$todayoryt);
                 $activity = "Generate sales report month of $month at " . date("h:i:sa");
                 $activity = $allactivity . "+" . $activity;    
                 auditActivity($activity,$todayoryt);
    }
     else if ($year != null){
        header("Location:fpdf/sales_report-yearly.php?year=$year");
        
                 $todayoryt = $_SESSION["time_in_oryt"];
                 $allactivity = auditSelect("activity",$todayoryt);
                 $activity = "Generate sales report year of $year at " . date("h:i:sa");
                 $activity = $allactivity . "+" . $activity;    
                 auditActivity($activity,$todayoryt);
    }
    
    
}
           ?>



           
           
           
          
              <div class="input-field col s3">
              <button class="medium btn waves-effect waves-light blue darken-3 left" type="submit" name="submit" style="margin-top: -10px;">
            Generate
            
          <i class="mdi-content-send right"></i>
          </button>
       
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
        echo "<script>alert('Please, login as marketing admin!');window.location='index.php'</script>";
        sleep(1);
    }}
    else{
        echo "<script>alert('Please, login as marketing admin!');window.location='index.php'</script>";
        sleep(1);
    }
    
?> 