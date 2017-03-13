<?php
include "php/conn.php";
include "php/functions.php";

if (isset($_SESSION["email"])){
$sEmail = $_SESSION["email"];
}







?>


<!DOCTYPE html>
<html>
<head>
	<title>Akuna Philippines</title>
    <?php include "php/header.php";?>
</head>
<body>
<div id="container" class="clearfx" >

<?php 





?>






    <header class="header">
       <a href="index.php"><img src="images/akuna-logo.gif" /></a>
   
    
<?php if (loggedin()){

    
    ?>
    
    <p class="loggedin">Welcome <?php echo userData($sEmail,'first_name'); 
    ?><br />&raquo;<a style="color:cornflowerblue" href="php/logout.php">Log out</a></p>
    
    <?php
}elseif (loggedinAdmin()){
    ?>
    
      <p class="loggedin">Welcome <?php echo userDataAdmin($sEmail,'first_name'); 
    ?><br />&raquo;<a style="color:cornflowerblue" href="php/logout.php">Log out</a></p>
    
    <?php
}
else{
    

include "php/login-form.php";

}
?>
   
    </header>
    
    
    
 <div class="register">
<div class="top-menu">
<a href="menu.php">Menu</a>
</div><br />
<form action= "" method="post" class="col s12">
      <div class="register-title"> 
        
        <?php /*?><h5 class="center-align">Sign Up</h5><?php */?>
     
      </div>
      <div class="row" style="padding-top: 15px;">
       
          <div class="row">
          
          
           <div class="input-field col s10">
                <i class="small mdi-action-search prefix black-text"></i>
                <input id="Find" type="text" class="validate" name="find"  require required maxlength="255" value= "" >
                <label for="First Name">What are you looking for?</label>
            </div>
            
           <button class="medium btn waves-effect waves-light blue darken-3 right" type="submit" name="submit" style="margin: 20px 5px 0px 0px;">
            Search 
          <i class="mdi-action-search right"></i>
          </button>
           
          
          <table class="hoverable responsive-table bordered pad" >
                <thead>
                  <tr>
                  <th></th>
                  <th> </th>
                  <th> </th>
                  <th> All Records</th>
                  <th> </th>
                  <th> </th>
                  <th></th>
                  </tr>
                  <tr>
                    <th data-field="id">First Name</th>
                    <th data-field="name">Last Name</th>
                    <th data-field="gender">Shipping Address</th>
                    <th data-field="gender">Permanent Address</th>
                    <th data-field="address">Contact</th>
                    <th data-field="contact">Email</th>
                    <th data-field="email">Date Signed</th>
                    <th data-field="date_hired">Date Updated</th>
                  </tr>
                </thead>
                <tbody>
                
                
                 <?php 
        
            if (isset($_POST["submit"])){
                
                
            $find = data_secure($_POST["find"]);   
                
            $sql = "SELECT * FROM `members` WHERE first_name = '$find' OR last_name = '$find' OR gender = '$find' OR 
            contact = '$find' OR m_id = '$find' OR shipping_address = '$find' OR permanent_address = '$find' OR email = '$find'";    
                $result = mysql_query($sql);
               
                    if (mysql_num_rows($result) > 0){
                     
                        while ($row = mysql_fetch_assoc($result)){
                  
    
             ?>
                
          
                      <tr>
                        <td><?php echo $row['first_name']; ?></td>
                        <td><?php echo $row['last_name']; ?></td>
                        <td><?php echo $row['shipping_address']; ?></td>
                        <td><?php echo $row['permanent_address']; ?></td>
                        <td><?php echo $row['contact']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['date_signed']; ?></td>
                        <td><?php echo $row['date_updated']; ?></td>
                      </tr>
                 
                  <?php
                    }
                }else{
                    ?>
                    
                     <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>No Data Found</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      
                      
                      <?php
                    
                }
            }else{
               
                
            $sql = "SELECT * FROM `members` ";    
                $result = mysql_query($sql);
                while ($row = mysql_fetch_assoc($result)){
                  
    
             ?>
                
          
                      <tr>
                        <td><?php echo $row['first_name']; ?></td>
                    
                        <td><?php echo $row['last_name']; ?></td>
                        <td><?php echo $row['shipping_address']; ?></td>
                        <td><?php echo $row['permanent_address']; ?></td>
                        <td><?php echo $row['contact']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['date_signed']; ?></td>
                        <td><?php echo $row['date_updated']; ?></td>
                      </tr>
                  <?php
                    }
                  }
                  ?>
                </tbody>
              </table>
          
          </div>
         
<p style="color: black;" id="demo"></p>      
    
      </div>
      
    </form>


</div>

</div>
<?php include "php/footer.php";?>

  <script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
  <script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>
