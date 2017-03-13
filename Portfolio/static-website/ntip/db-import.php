 <?php 
 session_start();    
  
     if (isset($_SESSION["nodb"])){
        header("location:index.php");
     }
  
// include 'php/db/connect.php';
//  include 'php/function.php';
  set_time_limit(0);
if (isset($_POST["submit"])){ 
        
        $server = data_secure($_POST['server']);
        $username = data_secure($_POST["username"]);
        $password = data_secure($_POST["password"]);
      
    
    mysql_connect($server,$username,$password) or die ("<script>alert('Cannot connect to Mysql, Wrong server,username or password');window.location='../db-import.php'</script>");
 
    
 
 
     $data= explode(".",$_FILES["dbase"]["name"]);

     
     if (($data[1] == "sql" || $data[1] == "SQL") && $data[0] == "ntips"){
        

       $file = $_FILES["dbase"]["tmp_name"];
        $filecontent = file_get_contents($file);
//         if (move_uploaded_file($_FILES["filname"]["tmp_name"], $target_file)) {
//        $filename =  "database/". basename( $_FILES["filname"]["name"]);
  

              
            
            
              // Function to restore from a file
              
              
            $sqls = "DROP DATABASE ntips";
            mysql_query($sqls);
            
            
            $sql = "CREAT DATABASE ntips";
            mysql_query($sql);
            
                
            //ini_set('memory_limit','128M'); // set memory limit here
            //$db = mysql_connect ( 'localhost', 'root', '' ) or die('not connected');
            //mysql_select_db( 'ntips', $db) or die('Not found');
            //$fp = fopen ( 'database/ntip.sql', 'r' );
            //$fetchData = fread ( $fp, filesize ( 'database/ntip.sql') );
            $sqlInfo = explode ( ";\n", $filecontent); // explode dump sql as a array data
            
            foreach ($sqlInfo AS $sqlData )
            {
            mysql_query ($sqlData);
            }
            
            
            echo "<script>alert('You have successfully restored the database');window.location='index.php';</script>";
          //  header("Location: php/logout.php");       
            
                         
            
            }else{
            echo "<script>alert('Error: select the right sql file.  Please see administrator');</script>";
                 }     
                 
                 


}
?>




<html>
<head>
	<title>IMPORT DATABASE</title>
	<link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>
	<!-- <link type="text/css" rel="stylesheet" href="css/mystyle.css"> -->
  <link type="text/css" rel="stylesheet" href="css/forms.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
  <link type="text/css" rel="stylesheet" href="css/sidebar.css">
   <link rel="icon" href="img/snowflake.png" type="image/png" />   
</head>
<body onload="">
<?php 
//include 'php/header.php';
//include 'php/sidebar.php';

    ?>

  
	
	<div class="container register z-depth-2" style="height:auto;margin-left:23%;margin-top: 20px;">
    <form action= "#" method="post" class="col s12" enctype="multipart/form-data">
      <div class="register-title"> 
        <h5 class="center-align">IMPORT DATABASE</h5>
      </div>
      <div class="row" style="padding-top: 15px;">
        <form class="col s12">
          <div class="row">
          
           <div class="input-field col s6">
                <i class="small mdi-social-person prefix black-text"></i>
                <input id="server" type="text" class="validate" name="server"  require required maxlength="30" value= "<?php if(isset($_POST['submit'])){ echo $_POST['server'];}; ?>" >
                <label for="First Name">Server</label>
            </div>
             <div class="input-field col s6">
                <i class="small mdi-social-person prefix black-text"></i>
                <input id="username" type="text" class="validate" name="username"  require required maxlength="30" value= "<?php if(isset($_POST['submit'])){ echo $_POST['username'];}; ?>" >
                <label for="Last Name">Username</label>
            </div>
          
             <div class="input-field col s6">
              <i class="small mdi-social-person prefix black-text"></i>
                <input id="password" type="password" class="validate" name="password"  maxlength="30" value="<?php if(isset($_POST['submit'])){ echo $_POST['password'];}; ?>">
                <label for="Username">Password</label>
            </div>
            
             <div class="input-field col s4">
         <span style="color: black;">   * Import NTIP database </span>
                <input id="dbase" type="file" class="validate" name="dbase"  required="" accept=".sql">

            </div>
            
            
         <p style="clear:both;margin: 20px;color: black;">(Note: This website will not work without database.  Please import the ntips database)</p>
          <button class="medium btn waves-effect waves-light blue darken-3 right" type="submit" name="submit" style="margin-right: 25px;">
            Submit 
          <i class="mdi-content-send right"></i>
          </button>
<p style="color: black;" id="demo"></p>      
    
      </div>
      
    </form>
  
  


	<script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
  <script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>



 
       
   


<?php

 function data_secure($data){
    $data = htmlspecialchars($data);
    $data = trim($data);
    $data = stripcslashes($data);
      return $data;
}

?>