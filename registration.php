<?php
include "inclusion/conn/conn.php";
include "inclusion/function.php";

$page = "";
$message = "";
$error = false;

if (isset($_POST["submit"])){
	$admin_type = data_security($_POST["admin_type"]);
	$username = data_security($_POST["username"]);
	$password = data_crypt($_POST["password"]);
	$code = data_security($_POST["code"]);
	
	if (!empty($admin_type) && !empty($username) &&  !empty($password) &&  !empty($code)){
		if (strlen($username) < 5){
			$message = "Username must be at least 5 characters.";
			$error = true;
		}
		elseif (strlen($password) < 6){
			$message = "Password must be at least 6 characters.";
			$error = true;
		}
		elseif (preg_match('/\s/',$username) == 1){
			$message = "Username must not contain white space.";
			$error = true;
		}
		elseif ($code != "alright"){
			$message = "Wrong code.  Please contact administrator";
			$error = true;
		}
		else{
			$error = false;
			addNewAdmin($admin_type,$username,$password);
			$message = message();
		}
	}
	else{
		 $message = "Please fill up the form.";
		 $error = true;
	}

}


?>


<!Doctype html>
<html>
   <!--Head,Meta and Title tags-->
    <?php include "inclusion/header.php";?>
    
    <body>
        <!--Navigation-->
        <?php include "inclusion/navigation.php"; ?>
        <!--Welcome Banner-->
       
        <div class="container" ng-app="myApp" ng-controller="myCtrl">
            <div class="row" style="margin-top:40px;margin-bottom:80px;">
                <div class="col-lg-3 col-md-3 col-xs-12"></div>
                <div class="col-lg-6 col-md-6 col-xs-12">
               <?php if ($error == true){ ?>
                 <p class="text-center bg-danger"><?php echo $message; ?></p><?php }
					else{  ?>
				<p class="text-center bg-success"><?php echo $message; ?></p>
					<?php } ?>
                	<div class="registration">
                		<h3 class="registration-title">Administrator Registration</h3>
                		<p><small>This system is restricted to authorized users only.</small> </p>
                		<p><small>Individuals attempting unauthorized access or use of this computer system may be subject violators to criminal, civil and / or administrative actions.</small></p>
                		
                		<div class="row">
                			<div class="col-lg-3 col-md-3 col-xs-3 hidden-xs">
                				<img src="images/security.png" class="img-responsive ">
                			</div>
                			<div class="col-lg-9 col-md-9 col-xs-9">
                				<form class="form-horizontal" name="myForm" action="<?php $_SERVER['PHP_SELF']?>" method="POST">
               					      <div class="form-group">
              					      		<label class="control-label col-sm-4" for="Admin Type">Admin Type:</label>
              					      			<div class="col-sm-5">
               					      				<select name="admin_type" required class="form-control">
               					      					<option selected>Admin</option>
               					      				</select>
               					      			</div>
               					      </div>
               					      <div class="form-group has-feedback" ng-class="{'has-success' : myForm.username.$valid, 'has-error' : myForm.username.$invalid && myForm.username.$dirty}">
               					      		<label class="control-label col-sm-4">Username:</label>
               					      		<div class="col-sm-8">
               					      			<input type="text" ng-minlength="5" required name="username" value="<?php if(isset($_POST['submit'])) echo $_POST['username'];  ?>" ng-model="username" class="form-control">
               					      			
               					      			<span class="glyphicon form-control-feedback" ng-class="{'glyphicon-ok' : myForm.username.$valid, 'glyphicon-remove' : myForm.username.$invalid && myForm.username.$dirty}"></span>
               					      		</div>
               						  </div>
               					      <div class="form-group has-feedback" ng-class="{'has-success' : myForm.password.$valid, 'has-error' : myForm.password.$invalid && myForm.password.$dirty}">
               					      		<label class="control-label col-sm-4">Password:</label>
               					      		<div class="col-sm-8">
               					      			<input type="password" required name="password" ng-minlength="6" ng-model="password"  class="form-control">
               					      			<span class="glyphicon form-control-feedback" ng-class="{'glyphicon-remove' : myForm.password.$invalid && myForm.password.$dirty, 'glyphicon-ok' : myForm.password.$valid}"></span>
               					      		</div>
               						  </div>
              					      <div class="form-group">
               					      		<label class="control-label col-sm-4">Code:</label>
               					      		<div class="col-sm-8">
               					      			<input type="password" required name="code" class="form-control">
               					      		</div>
               						  </div>
               					      <div class="form-group text-right">
               					      		<div class="col-sm-offset-3 col-sm-9">
               					      			<button type="submit" name="submit" class="btn btn-primary">
               					      				SEND <span class="glyphicon glyphicon-send"></span> 
               					      			</button>
               					      		</div>               					      	
               					      </div>
                					  
                				</form>
                			</div>
                		</div>
                		
                	</div>
                </div>
                <div class="col-lg-6 col-md-6 col-xs-12"></div>
            </div>
        </div>

        <!--Footer Links-->
        <?php 
			include "inclusion/footer.php"
		?>
        
    </body>
</html>