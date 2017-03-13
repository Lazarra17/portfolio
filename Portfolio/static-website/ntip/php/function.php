<?php
	ob_start();
	require 'db/connect.php';

	function loggedin() {
		if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])){
			return true;
		}else{
			return false;
		}
	}

	function loggedin2() {
		if(isset($_SESSION['customer_id']) && !empty($_SESSION['customer_id'])){
			return true;
		}else{
			return false;
		}
	}
    
    function loggedin3() {
		if(isset($_SESSION['emp_id_no']) && !empty($_SESSION['emp_id_no'])){
			return true;
		}else{
			return false;
		}
	}        


	function userData($field){
		$query = "SELECT `$field` FROM `users` WHERE `user_code` = '" . $_SESSION['user_id'] . "'";
		if($run = mysql_query($query)){
			$result = mysql_result($run, 0, $field);
			return $result;
		}
	}
    
    	function userDataAdmin($field){
		$query = "SELECT `$field` FROM `users` WHERE `user_code`";
		if($run = mysql_query($query)){
			$result = mysql_result($run, 0, $field);
			return $result;
		}
	}

	function userData2($field){
		$query = "SELECT `$field` FROM `customer` WHERE `customer_id` = '" . $_SESSION['customer_id'] . "'";
		if($run = mysql_query($query)){
			$result = mysql_result($run, 0, $field);
			return $result;
		}
	}
    	function userData3($field){
		$query = "SELECT `$field` FROM `customer`";
		if($run = mysql_query($query)){
			$result = mysql_result($run, 0, $field);
			return $result;
		}
	}
    
 
                
    function userData4($field){
		$query = "SELECT `$field` FROM `employee` WHERE `emp_id_no` = '" . $_SESSION['emp_id_no'] . "'";
		if($run = mysql_query($query)){
			$result = mysql_result($run, 0, $field);
			return $result;
		}
	}    
        function userData5($field){
		$query = "SELECT `$field` FROM `employee`";
		if($run = mysql_query($query)){
			$result = mysql_result($run, 0, $field);
			return $result;
		}
	}

   function userData6($field,$id){
		$query = "SELECT `$field` FROM `orders` WHERE order_id='". $id. "'";
		if($run = mysql_query($query)){
			$result = mysql_result($run, 0, $field);
			return $result;
		}
	}

 function userData7($request_no,$id,$field){
		$query = "SELECT `$field` FROM `leave_report` WHERE leave_id = '". $request_no. "' AND emp_id_no='". $id. "'";
		if($run = mysql_query($query)){
			$result = mysql_result($run, 0, $field);
			return $result;
		}
	}

 function userData8($field){
		$query = "SELECT `$field` FROM `receipt` ORDER BY Or_no DESC";
		if($run = mysql_query($query)){
			$result = mysql_result($run, 0, $field);
			return $result;
		}
	}
    
        function selectUsernameEmp($field,$email){
		$query = "SELECT `$field` FROM `employee` WHERE email='$email'";
		if($run = mysql_query($query)){
			$result = mysql_result($run, 0, $field);
			return $result;
		}else{
		  return 0;
		}
	}
    
     function selectUsernameCust($field,$email){
		$query = "SELECT `$field` FROM `customer` WHERE email='$email'";
		if($run = mysql_query($query)){
			$result = mysql_result($run, 0, "$field");
			return $result;
		}else{
		  return 0;
		}
	}
    
     function selectOrderNo($field){
		$query = "SELECT `$field` FROM `orders` ORDER BY order_id DESC LIMIT 1";
		if($run = mysql_query($query)){
			$result = mysql_result($run, 0, $field);
			return $result;
		}
	}
    
    function selectEmpID($field){
		$query = "SELECT `$field` FROM `employee` ORDER BY emp_id_no DESC LIMIT 1";
		if($run = mysql_query($query)){
			$result = mysql_result($run, 0, $field);
			return $result;
		}
	}       

	function addEmployee($emp_id_no,$lname, $fname, $mname, $gender, $bday, $address, $region, $city, $zip, $contact, $email, $dept,$position, $datehired,$salary,$username){
		$today  = gmdate('Y/m/d');
		$status = "Active";
        $password = hash("sha256","Password1");
        $type = "employee";                
		$query  = "INSERT INTO `employee` (`emp_id_no`,`username` ,`first_name` ,`last_name`, `middle_name`, `gender`, `birthday`, `address`, `region`, `city`, `zip_code`, `contact`, `email`,`password`, `department`,`position`,`date_hired`,`salary`, `status`, `date_added`,`type`) VALUES('$emp_id_no','" . $username . "','" . $fname . "', '" . $lname . "', '" . $mname . "', '" . $gender . "', '" . $bday ."', '" . $address . "', '" . $region ."', '" . $city . "', '" . $zip . "', '". $contact ."', '" . $email ."','" . $password ."', '" . $dept ."','". $position. "','". $datehired . "', '".$salary ."','" . $status ."', '". $today ."','".$type ."')";		   
		if($run = mysql_query ($query)){
		//	echo "<script> alert('Successfully added an employee record'); </script>";
			//header('Location: index.php?employee-add');
             echo "<script> alert('Successfully added an employee record'); 
        window.location.href = 'employee-record.php?Successfully-added';</script>";
            
		}
	}
    
    
    function addAdmin($admin_no,$admintype,$fullname,$username ,$password,$department ,$gender,$address){
    
        $today  = gmdate('Y/m/d');
		$status = "active";
        $password_crypted = data_crypt($password);
		$query  = "INSERT INTO `users` (`user_code` ,`admin_no`,`admin_name` ,`username`, `password`, `department`, `gender`, `address`, `date_joined`, `status`)
                                    VALUES ('" . $admintype . "','" . $admin_no . "','" . $fullname . "','" . $username . "','" . $password_crypted . "','" . $department . "','" . $gender . "','" . $address . "','" . $today . "','" . $status . "')";	   
		if($run = mysql_query ($query)){
		//	echo "<script> alert('Successfully added an employee record'); </script>";
			//header('Location: index.php?employee-add');
             echo "<script> alert('Successfully added an employee record'); 
        window.location.href = 'employee-record.php?Successfully-added';</script>";
            
		}
	}
    
       function   addProduct($product_no,$product_name,$pictureName,$target_file_slideshow1,$target_file_slideshow2,$target_file_slideshow3,$target_file_slideshow4,$unit,$price,$allsummary)
        {
        $date = new DateTime();
        date_default_timezone_set("Asia/Taipei");       
		$today  = gmdate('Y/m/d');          
		$query  = "INSERT INTO `products` (`product_no`,`product_name`, `product_picture`,`sshow1`,`sshow2`,`sshow3`,`sshow4`,`unit`,`price`,`summary`,`date_added`) VALUES('". $product_no ."','". $product_name ."','". $pictureName ."','". $target_file_slideshow1 ."','". $target_file_slideshow2 ."','". $target_file_slideshow3 ."','". $target_file_slideshow4 ."','". $unit ."','". $price ."','". $allsummary ."','". $today ."')";		   
		mysql_query($query);	
         echo "<script> alert('You have added a new product'); 
        window.location.href = 'index.php?Successfully-added';</script>";
	}
    
    
    
    function addUpdate($tracking_no,$email, $description){
        $date = new DateTime();

        date_default_timezone_set("Asia/Taipei");
        
		$today = date('m-d-Y h:i:sa');
        $type = "Employee";                
		$query  = "INSERT INTO `updates` (`order_no`,`date`, `description`, `email`) VALUES('". $tracking_no ."','". $today ."','". $description ."','". $email ."')";		   
		mysql_query($query);	
	}
    
    
    

    
       function updatePassword($username,$emp_id_no,$newpassword){
        
		$query  = "UPDATE `employee` SET password = '$newpassword' WHERE username = '$username' && emp_id_no = '$emp_id_no'";		   
		mysql_query($query);
      echo "<script>alert('You have successfuly changed your password');window.location = 'edit-employee-account.php';</script>";	

	
    } 
    
           function   updatePasswordCustomer($username,$newpassword,$address){
        
		$query  = "UPDATE `customer` SET password = '$newpassword' WHERE username = '$username' AND address = '$address'";		   
		mysql_query($query);
      echo "<script>alert('You have successfuly changed your password');window.location = 'edit-customer.php';</script>";	

	
    } 
    
    
    
    function    updateProduct($product_no,$product_name,$pictureName,$target_file_slideshow1,$target_file_slideshow2,$target_file_slideshow3,$target_file_slideshow4,$unit,$price,$allsummary){
 
        $date = new DateTime();
        date_default_timezone_set("Asia/Taipei");       
		$today  = gmdate('Y/m/d');          
		$query  = "UPDATE `products` SET product_name = '$product_name' , product_picture = '$pictureName',sshow1 = '$target_file_slideshow1',sshow2 = '$target_file_slideshow2',sshow3 = '$target_file_slideshow3',sshow4 = '$target_file_slideshow4',unit = '$unit',price = '$price',summary = '$allsummary',date_updated = '$today' WHERE product_no = '$product_no'";		   
		mysql_query($query);
        echo "<script>alert('You have successfuly updated your product');window.location = 'update-product.php';</script>";	
	}
    
       function updateProductwoPicture($product_no,$product_name,$unit,$price,$allsummary){
        $date = new DateTime();
        date_default_timezone_set("Asia/Taipei");       
		$today  = gmdate('Y/m/d');          
		$query  = "UPDATE `products` SET product_name = '$product_name' ,unit = '$unit',price = '$price',summary = '$allsummary',date_updated = '$today' WHERE product_no = '$product_no'";		   
		mysql_query($query);
        echo "<script>alert('You have successfuly updated your product');window.location = 'update-product.php';</script>";	
	}
    
       function  updateProduct1($product_no,$product_name,$pictureName,$unit,$price,$allsummary){
        $date = new DateTime();
        date_default_timezone_set("Asia/Taipei");       
		$today  = gmdate('Y/m/d');          
		$query  = "UPDATE `products` SET product_name = '$product_name',product_picture = '$pictureName',unit = '$unit',price = '$price',summary = '$allsummary',date_updated = '$today' WHERE product_no = '$product_no'";		   
		mysql_query($query);
        echo "<script>alert('You have successfuly updated your product');window.location = 'update-product.php';</script>";	
	}  
  function updateProduct2($product_no,$product_name,$target_file_slideshow1,$target_file_slideshow2,$target_file_slideshow3,$target_file_slideshow4,$unit,$price,$allsummary){
    
        $date = new DateTime();
        date_default_timezone_set("Asia/Taipei");       
		$today  = gmdate('Y/m/d');          
		$query  = "UPDATE `products` SET product_name = '$product_name',sshow1 = '$target_file_slideshow1',sshow2 = '$target_file_slideshow2',sshow3 = '$target_file_slideshow3',sshow4 = '$target_file_slideshow4',unit = '$unit',price = '$price',summary = '$allsummary',date_updated = '$today' WHERE product_no = '$product_no'";		   
		mysql_query($query);
        echo "<script>alert('You have successfuly updated your product');window.location = 'update-product.php';</script>";	
    
  }

     function leaveUpdate($request_no,$id,$rank,$status){
		$today  = gmdate('Y/m/d');             
		$query = "UPDATE `leave_report` SET rank = '" . $rank . "',status = '" . $status . "' WHERE leave_id = '" . $request_no . "' AND emp_id_no = '" . $id . "' ";
        mysql_query($query);
        
        echo "<script> alert('Message Sent!'); 
        window.location.href = 'request-leave.php?Successfully-edited';</script>";	
	}
    
    function selectLeaveStart($id){
     $sql = "SELECT DAY(leave_start) as days FROM leave_report WHERE emp_id_no = '$id'";   
     $run = mysql_query($sql);
     $result = mysql_result($run,0,"days");
     return $result;
    }
    
     function selectLeaveUntil($id){
     $sql = "SELECT DAY(leave_until) as days FROM leave_report WHERE emp_id_no = '$id'";   
     $run = mysql_query($sql);
     $result = mysql_result($run,0,"days");
     return $result;
    }
    
    
    
    function leaveMessage($email,$message,$decision){
		$today  = gmdate('Y/m/d');             
		$query  = "INSERT INTO `leave_message` (`email`,`date`, `message`,`decision`) VALUES('". $email ."','". $today ."','". $message ."','". $decision ."')";		   
        mysql_query($query);	
	}
    
    
    function orderRecieve($id,$email){
		$today  = gmdate('Y/m/d');
        $description = "Thank you for shopping with NTIP! Your order
         has been received and is going through verification process.
         Next update will be sent to you via email soon.";            
		$query  = "INSERT INTO `updates` (`order_no`,`date`, `description`, `email`) VALUES('". $id ."','". $today ."','". $description ."','". $email ."')";		   
		mysql_query($query);
			
		
	}
    
 function remLeave($id,$rems){        
	$query = "UPDATE `employee` SET rem_leaves = '" . $rems ."' WHERE emp_id_no = '" . $id . "'" ;
		mysql_query($query);
 }
	function editEmployee($id, $lname, $fname, $mname, $gender, $bday, $address, $region, $city, $zip, $contact, $email,$username, $dept ,$position, $datehired,$salary,$status){
		
		// $query  = "INSERT INTO `employee` (`first_name` ,`last_name`, `middle_name`, `gender`, `birthday`, `address`, `region`, `city`, `zip_code`, `contact`, `email`, `department`) VALUES('" . $fname . "', '" . $lname . "', '" . $mname . "', '" . $gender . "', '" . $bday ."', '" . $address . "', '" . $region ."', '" . $city . "', '" . $zip . "', '". $contact ."', '" . $email ."', '" . $dept ."', '" . $status .")";		   
		$query = "UPDATE `employee` SET last_name = '" . $lname . "' , first_name = '" . $fname . "' , middle_name = '" . $mname ."', gender = '" . $gender . "', birthday = '" . $bday . "', address = '" . $address . "', region = '" . $region ."', city = '" . $city . "', zip_code = '" . $zip ."', contact = '" . $contact ."', email = '" . $email ."', username = '" . $username ."', department = '" . $dept ."' , position = '" . $position ."' , date_hired = '" . $datehired . "' , salary = '" . $salary ."', status = '" . $status ."' WHERE emp_id_no = '" . $id . "'" ;
		mysql_query ($query);
		 echo "<script> alert('You have successfully updated your account'); 
        window.location.href = 'employee-record.php';</script>";
	}
    
    	function editEmployeeAccount($id, $lname, $fname, $mname, $gender,$dept, $bday, $address, $region, $city, $zip, $contact){
		
		// $query  = "INSERT INTO `employee` (`first_name` ,`last_name`, `middle_name`, `gender`, `birthday`, `address`, `region`, `city`, `zip_code`, `contact`, `email`, `department`) VALUES('" . $fname . "', '" . $lname . "', '" . $mname . "', '" . $gender . "', '" . $bday ."', '" . $address . "', '" . $region ."', '" . $city . "', '" . $zip . "', '". $contact ."', '" . $email ."', '" . $dept ."', '" . $status .")";		   
		$query = "UPDATE `employee` SET last_name = '" . $lname . "' , first_name = '" . $fname . "' , middle_name = '" . $mname ."', gender = '" . $gender . "', birthday = '" . $bday . "',department = '" . $dept . "', address = '" . $address . "', region = '" . $region ."', city = '" . $city . "', zip_code = '" . $zip ."', contact = '" . $contact ."' WHERE emp_id_no = '" . $id . "'" ;
		mysql_query ($query);
		 echo "<script> alert('You have successfully updated your account'); 
        window.location.href = 'edit-employee-account.php';</script>";
	}
    
    
    
    	function editCustomer($id, $lname, $fname, $gender,  $address, $contact, $email ){
	
    	$status = "Active";
		// $query  = "INSERT INTO `employee` (`first_name` ,`last_name`, `middle_name`, `gender`, `birthday`, `address`, `region`, `city`, `zip_code`, `contact`, `email`, `department`) VALUES('" . $fname . "', '" . $lname . "', '" . $mname . "', '" . $gender . "', '" . $bday ."', '" . $address . "', '" . $region ."', '" . $city . "', '" . $zip . "', '". $contact ."', '" . $email ."', '" . $dept ."', '" . $status .")";		   
		$query = "UPDATE `customer` SET lname = '" . $lname . "' , fname = '" . $fname . "' , gender = '" . $gender . "', address = '" . $address . "', contact = '" . $contact  ."' WHERE customer_id = '" . $id . "'";
	
    	mysql_query ($query);
        echo "<script> alert('You have successfully updated customer record'); </script>";
		header('Location: index.php?Customer-updated');
	}
    
    	function editOrder($id, $shipped_date, $status,$state ){
	
    	$rank = "old";
		// $query  = "INSERT INTO `employee` (`first_name` ,`last_name`, `middle_name`, `gender`, `birthday`, `address`, `region`, `city`, `zip_code`, `contact`, `email`, `department`) VALUES('" . $fname . "', '" . $lname . "', '" . $mname . "', '" . $gender . "', '" . $bday ."', '" . $address . "', '" . $region ."', '" . $city . "', '" . $zip . "', '". $contact ."', '" . $email ."', '" . $dept ."', '" . $status .")";		   
		$query = "UPDATE `orders` SET shipped_date = '" . $shipped_date . "' , status = '" . $status . "', rank = '" . $rank . "', state = '" . $state . "' WHERE order_id = '" . $id . "'";
	
    	mysql_query ($query);
        echo "<script> alert('You have successfully updated customer record'); 
        window.location.href = 'order-update.php?Successfully-Updateds';</script>";
		
	}
    
    
    
    	function deleteEmployee($id){
		$query = "DELETE FROM `employee` WHERE emp_id_no = '". $id."' ";
    	mysql_query ($query);
        echo "<script> alert('You have successfully deleted a record'); </script>";
		
	}
    
        function deleteCustomer($id){
		$query = "DELETE FROM `customer` WHERE customer_id = '". $id."' ";
    	mysql_query ($query);
        echo "<script> window.alert('You have successfully deleted a record');
             </script>";
	}
    
     function deleteOrder($id){
		$query = "DELETE FROM `orders` WHERE order_id = '". $id."' ";
    	mysql_query ($query);
        echo "<script> window.alert('You have successfully deleted a record');
             </script>";
	}
    
       function deleteProduct($product_no){
		$query = "DELETE FROM `products` WHERE product_no = '". $product_no."' ";
    	mysql_query ($query);
        echo "<script> window.alert('You have successfully deleted a record');
             </script>";
	}
    


	function addCustomer($username, $fname,$lname,$email,$gender, $pass, $address, $contact){
		$type   = "Customer";
		$today  = gmdate('Y/m/d');
		$query  = "INSERT INTO `customer` (`username` ,`password`, `fname`,`lname`,`email`,`gender`,`address`, `contact`, `date_created`, `type`) VALUES('" . $username . "', '" . $pass . "', '" . $fname . "', '" . $lname . "', '" . $email . "','" . $gender . "', '" . $address . "', '" . $contact ."', '" . $today . "', '" . $type . "')";		   
		if($run = mysql_query ($query)){
		
			
		}
	}

	function addNewCustomer($fname,$lname,$email,$gender, $city, $address, $contact){
		$type   = "Customer";
		$today  = gmdate('Y/m/d');
		$query  = "INSERT INTO `guest` (`fname`,`lname`,`email`,`gender`,`city`,`address`, `contact`, `date_created`, `type`) VALUES('" . $fname . "', '" . $lname . "', '" . $email . "','" . $gender . "' ,'" . $city . "', '" . $address . "', '" . $contact ."', '" . $today . "', '" . $type . "')";		   
		if($run = mysql_query ($query)){
			
		
            
		}
	}

        function addOrderEmployee($order_no,$fullnameemp,$addressemp,$product_name,$quantity,$unitprice,$total,$emailemp,$contactemp,$methods){
    
        $type   = "Customer";
        $status = "Unverified";
        $rank = "new";
        $receipt = "None";
		$today  = gmdate('Y/m/d');
		$query  = "INSERT INTO `orders` (`order_id`,`customer_name`,`customer_address`,`particulars`,`items`,`unitprice`,`price`,`email`,`contacts`,`methods`,`order_date`,`status`,`rank`,`receipt`) VALUES('" . $order_no . "','" . $fullnameemp . "', '" . $addressemp . "','" . $product_name . "', '" . $quantity . "','" . $unitprice . "','" . $total . "' ,'" . $emailemp . "', '" . $contactemp . "','" . $methods . "', '" . $today ."', '" . $status . "', '" . $rank . "', '" . $receipt . "')";		   
		if($run = mysql_query ($query)){
		echo "<script> window.alert('You have successfully bought the item, please check your email');
            window.location.href = '../index.php?Successfully-Bought'; </script>";
            }
		}
        
         function addOrderCustomer($order_no,$fullname,$address,$product_name,$quantity,$unitprice,$total,$email,$contact,$methods){
    
        $type   = "Customer";
        $status = "Unverified";
        $rank = "new";
        $receipt = "None";
		$today  = gmdate('Y/m/d');
		$query  = "INSERT INTO `orders` (`order_id`,`customer_name`,`customer_address`,`particulars`,`items`,`unitprice`,`price`,`email`,`contacts`,`methods`,`order_date`,`status`,`rank`,`receipt`) VALUES('" . $order_no . "','" . $fullname . "', '" . $address . "','" . $product_name . "', '" . $quantity . "','" . $unitprice . "','" . $total . "' ,'" . $email . "', '" . $contact . "','" . $methods . "', '" . $today ."', '" . $status . "', '" . $rank . "', '" . $receipt . "')";		   
		if($run = mysql_query ($query)){
		echo "<script> window.alert('You have successfully bought the item, please see your email for the Tracking Number!');
          window.location.href = '../index.php?Successfully-Bought'; </script>";
            
		}
    }
    
          function addOrderCustomernew($order_no,$fullname,$address,$product_name,$quantity,$unitprice,$total,$email,$contact,$methods){
    
        $type   = "Customer";
        $status = "Unverified";
        $rank = "new";
        $receipt = "None";
		$today  = gmdate('Y/m/d');
		$query  = "INSERT INTO `orders` (`order_id`,`customer_name`,`customer_address`,`particulars`,`items`,`unitprice`,`price`,`email`,`contacts`,`methods`,`order_date`,`status`,`rank`,`receipt`) VALUES('" . $order_no . "','" . $fullname . "', '" . $address . "','" . $product_name . "', '" . $quantity . "','" . $unitprice . "','" . $total . "' ,'" . $email . "', '" . $contact . "','" . $methods . "', '" . $today ."', '" . $status . "', '" . $rank . "', '" . $receipt . "')";		   
		if($run = mysql_query ($query)){
	
            
		}
    }
    
    function cancelledOrder($order_id,$email,$particulars,$quantity,$price,$order_date){
        $today  = gmdate('Y/m/d');
        $status = "Cancelled";
        $sql = "INSERT INTO orders_cancelled (order_no,email,particulars,quantity,total_price,ordered_date,status,date_cancelled) VALUES 
                ('$order_id','$email','$particulars','$quantity','$price','$order_date','$status','$today')";
        mysql_query($sql); 
        header("Location: my_order.php?successfully_cancelled");
        
    }
    
     function addToCart($ip,$prod_no,$prod_name,$prod_picture,$prod_price,$email){
        

		$today  = gmdate('Y/m/d');
        $quantity = 1;
        $total = $prod_price;
		$query  = "INSERT INTO `cart` (`client_ip`,`product_no`,`product_name`,`product_picture`,`quantity`,`product_price`,`total_price`,`email`,`date_ordered`) VALUES
            ('" . $ip . "', '" . $prod_no . "','" . $prod_name . "', '" . $prod_picture . "','" . $quantity . "','" . $prod_price . "' ,'" . $total . "' ,'" . $email . "','" . $today . "')";		   
		if($run = mysql_query ($query)){
		echo "<script>window.location.href = 'my_cart.php?Successfully-addedtocart'; </script>";
            
		}
    
        
     }
    function updateCart($ip,$prod_no,$quantity,$email){
        
        $today  = gmdate('Y/m/d');
		$query  = "UPDATE cart SET quantity = '$quantity' WHERE client_ip = '$ip' AND product_no = '$prod_no' AND email = '$email'";	   
		mysql_query ($query);
		echo "<script>window.location.href = 'my_cart.php?Successfully-addedtocart'; </script>";
        
    
    }
        function checkCart($ip,$prod_no,$email){
        
        $sql = "SELECT * FROM cart WHERE client_ip = '$ip' AND product_no = '$prod_no' AND email = '$email'";
        $result = mysql_query($sql);
        $quantity = mysql_fetch_array($result);
        $quantity = $quantity["quantity"] + 1;
        return $quantity;
    
    }
        function  updateCartQuantity($ip,$product_no,$quantity,$subtotal){
        

		$query  = "UPDATE cart SET quantity = '$quantity', total_price = '$subtotal' WHERE client_ip = '$ip' AND product_no = '$product_no'";	   
		mysql_query ($query);
	
        
    
    }
    
    function removeCartItem($prod_no,$ip){
        $sql = "DELETE FROM cart WHERE product_no = '$prod_no' AND client_ip = '$ip'";
        mysql_query($sql);
        header("Location: my_cart.php");
        
    }
    
     function removeCartItemCheckout($prod_no,$ip){
        $sql = "DELETE FROM cart WHERE product_no = '$prod_no' AND client_ip = '$ip'";
        mysql_query($sql);  
    }
    
      function removeCartItemCustomer($prod_no,$email){
        $sql = "DELETE FROM cart WHERE product_no = '$prod_no' AND email = '$email'";
        mysql_query($sql);  
    }
        /*

        function addOrder($fullname,$address,$particulars,$items,$price,$total,$email,$contact,$methods){
		$type   = "Customer";
        $status = "Unverified";
        $rank = "new";
        $receipt = "None";
		$today  = gmdate('Y/m/d');
		$query  = "INSERT INTO `orders` (`customer_name`,`customer_address`,`particulars`,`items`,`price`,`email`,`contacts`,`methods`,`order_date`,`status`,`rank`,`receipt`) VALUES('" . $fullname . "', '" . $address . "','" . $particulars . "', '" . $items . "','" . $price . "' ,'" . $email . "', '" . $contact . "','" . $methods . "', '" . $today ."', '" . $status . "', '" . $rank . "', '" . $receipt . "')";		   
		if($run = mysql_query ($query)){
		echo "<script> window.alert('You have successfully bought the item, please check your email');
            window.location.href = '../index.php?Successfully-Bought'; </script>";
            
		}
	}
*/
    function receiptUpdate($receipt){
        
        $sql = "UPDATE `orders` SET receipt = 'Created' WHERE order_id='$receipt'";
        mysql_query($sql);
        
    }
            
   function fileLeave($id,$fullname,$dept, $position, $leavestarts, $leaveuntil, $reason,$discription,$email){
    $today  = gmdate('Y/m/d');
    $rank = "Needs Confirmation";
    $status = "New";
    
    $sql = "INSERT INTO `leave_report` (`emp_id_no`,`full_name`,`department`,`position`,`email`,`leave_start`,`leave_until`,`reason`,`discription`,`rank`,`status`,`date_created`)
             VALUES ('" . $id . "','" . $fullname . "','" . $dept . "', '" . $position . "','" . $email . "','" . $leavestarts . "', '" . $leaveuntil . "','" . $reason . "' ,'" . $discription . "' ,'" . $rank . "','" . $status . "','" . $today . "')";		   
    mysql_query($sql);
       echo "<script> window.alert('You have successfully file a leave please wait for the confirmation within 24 hours.');
            window.location.href = 'message.php?Successfully-file-leave'; </script>";
        
     
    
   }
   
    function addReceipt($or_no,$name, $address,$particulars,$quantity,$price,$tax,$total_price){
           $today  = gmdate('Y/m/d');
          $sql = "INSERT INTO `receipt` (`OR_no`,`full_name`,`address`,`particulars`,`quantity`,`sub_total`,`tax`,`total_price`,`date_added`) VALUES ('" . $or_no . "','" . $name . "','" . $address . "', '" . $particulars . "','" . $quantity . "','" . $price . "', '" . $tax . "','" . $total_price . "','" . $today . "')";		   
     mysql_query($sql);
    
   }
   
       function addTodaysDelivery($order_no,$name,$address){
           $today  = gmdate('Y/m/d');
           $status = "Not listed";
          $sql = "INSERT INTO `todays_delivery` (`order_no`,`full_name`,`address`,`date_created` , `status`) VALUES ('" . $order_no . "','" . $name . "','" . $address . "','" . $today . "','" . $status . "')";		   
     mysql_query($sql);
    
   }
   
       function updateTodaysDelivery(){
           $today  = gmdate('Y/m/d');
           $status = "Listed";
          $sql = "UPDATE `todays_delivery` SET `status`= $status";		   
     mysql_query($sql);
    
   }
   
   
   
   
   function  successfulDelivery($name, $address,$particulars,$quantity,$price,$email,$order_date,$shipped_date){
     
     $sql = "INSERT INTO `successful_deliveries` (`customer_name`,`address`,`particulars`,`quantity`,`total_price`,`email`,`date_order`,`date_shipped`)
             VALUES ('" . $name . "','" . $address . "','" . $particulars . "', '" . $quantity . "','" . $price . "','" . $email . "', '" . $order_date . "','" . $shipped_date . "')";		   
     if(mysql_query($sql)){
       echo "<script> window.alert('You have a successfull delivery.'); window.location.href = 'index.php?Successful-delivery';</script>";
            
        
     }
    
   }
   
      function audit_trail($admin_name,$department,$ip){
        $date = new DateTime();

        date_default_timezone_set("Asia/Taipei");
		$today = date('m-d-Y h:i:sa');                 
		$query  = "INSERT INTO `audit_trail` (`admin_name`,`department`,`date_time_in`,`ip_address`) VALUES('". $admin_name ."','". $department ."','". $today ."','". $ip ."')";		   
		mysql_query($query);	
	}
   
   
   function auditTrailOut(){
        $date = new DateTime();
        date_default_timezone_set("Asia/Taipei");
		$today = date('m-d-Y h:i:sa');  
        $sql = "UPDATE `audit_trail` SET `date_time_out`= '$today' WHERE at_id ORDER BY at_id DESC LIMIT 1";
        mysql_query($sql);
    
   }
   
      function productNo(){
        
       $sql = "SELECT product_no FROM `products` ORDER BY product_no DESC LIMIT 1";
        $result = mysql_query($sql);
        $row= mysql_fetch_array($result);
        echo $row["product_no"] + 1;
   }
   
   
   
      function auditActivity($activity,$todayoryt){
        
        $sql = "UPDATE `audit_trail` SET `activity`= '$activity' WHERE date_time_in='$todayoryt'";
        mysql_query($sql);
    
   }
   
         function auditSelect($field,$todayoryt){
        $sql = "SELECT $field FROM `audit_trail` WHERE date_time_in='$todayoryt'";
        $result = mysql_query($sql);
        $row = mysql_fetch_array($result);
        return $row[$field];
   }
   
   
           function auditSelectIP($field,$time_in){
        
        $date = new DateTime();
        date_default_timezone_set("Asia/Taipei");
		$today = date('m-d-Y h:i:sa');  
        $sql = "SELECT $field FROM `audit_trail` WHERE date_time_in = '$time_in'";
        $result = mysql_query($sql);
        $row = mysql_fetch_array($result);
        return $row[$field];
        
    
   }
   
  function addEvaluation($id,$name,$department,$reviewer_name,$q1,$q1ans,$q2,$q2ans,$q3,$q3ans,$q4,$q4ans,$q5,$q5ans,$q6,$q6ans,$q7,$q7ans
                ,$q8,$q8ans,$q9,$q9ans,$q10,$q10ans,$q11,$q11ans,$q12,$q12ans,$q13,$q13ans,$q14,$q14ans,$q15,$q15ans){
   $today  = gmdate('Y-m-d');
     $sql = "INSERT INTO `emp_evaluation` (`emp_id_no`,`name`,`department`,`reviewer`,`date_review`,`q1`,`q1ans`,`q2`,`q2ans`,`q3`,`q3ans`,
            `q4`,`q4ans`,`q5`,`q5ans`,`q6`,`q6ans`,`q7`,`q7ans`,`q8`,`q8ans`,`q9`,`q9ans`,`q10`,`q10ans`,`q11`,`q11ans`,`q12`,`q12ans`,`q13`,`q13ans`,`q14`,`q14ans`,`q15`,`q15ans`)
     VALUES ('" . $id . "','" . $name . "','" . $department . "','" . $reviewer_name . "', '" . $today . "', '" . $q1 . "', '" . $q1ans . "', '" . $q2 . "', '" . $q2ans . "'
     , '" . $q3 . "', '" . $q3ans . "', '" . $q4 . "', '" . $q4ans . "', '" . $q5 . "', '" . $q5ans . "', '" . $q6 . "', '" . $q6ans . "'
     , '" . $q7 . "', '" . $q7ans . "', '" . $q8 . "', '" . $q8ans . "', '" . $q9 . "', '" . $q9ans . "', '" . $q10 . "', '" . $q10ans . "'
     , '" . $q11 . "', '" . $q11ans . "', '" . $q12 . "', '" . $q12ans . "', '" . $q13 . "', '" . $q13ans . "', '" . $q14 . "', '" . $q14ans . "', '" . $q15 . "', '" . $q15ans . "')";		   
   mysql_query($sql);
    echo "<script> window.alert('You have a successfull evaluated an employee.');</script>";
    
   }
   
    	function deleteRequest($id){
		$query = "DELETE FROM `leave_report` WHERE leave_id = '". $id."' ";
    	mysql_query ($query);
       header("Location: request-leave.php?deleted");
		
	}
   
      function selectAdminNo($field){
    
    $sql = "SELECT `$field` FROM users ORDER BY admin_no DESC LIMIT 1"; 
    $run = mysql_query($sql);
    $result = mysql_result($run, 0, $field);
    return $result;
     
   }
   
   function updateAdmin($admin_no){
    
    $sql = "UPDATE `users` SET status = 'Disabled' WHERE admin_no='$admin_no'"; 
    mysql_query($sql);
    echo "<script> window.alert('You have a successfull disabled an account.');</script>";
     
   }
      function enableAdmin($admin_no){
    
    $sql = "UPDATE `users` SET status = 'active' WHERE admin_no='$admin_no'"; 
    mysql_query($sql);
    echo "<script> window.alert('You have a successfull enabled an account.'); </script>";
     
   }
   function deleteAdmin($admin_no){
    
    $sql = "DELETE FROM users WHERE admin_no='$admin_no'"; 
    mysql_query($sql);
    echo "<script> window.alert('You have a successfull deleted an account.'); </script>";
     
   }
   
   
   
   
   function updateStocks($product_no,$updatestocks){
        
    $sql = "UPDATE `products` SET stocks = '$updatestocks' WHERE product_no='$product_no'"; 
    mysql_query($sql);
    echo "<script> window.alert('You have a successfull added a new stocks.'); </script>";
        
    }
   
   
    function sendOrderTrackingNo($to,$tracking_no){
    
    $subject ="TaytayIcePlant Order";
    $from = "https://www.taytayiceplant.com";
    $body = <<<EMAIL


Greetings from TaytayIcePlant.

    We have received your order from our website and going on through verification.  
The delivery will take up to 1-2 days depending on your place.  Just relax while waiting
your order.

    Here is your Tracking No: $tracking_no.  You can track your order in our website at 
http://taytayiceplant.com/order-tracking.php  

From: wwww.taytayiceplant.com 

EMAIL;



    
    
    
    
   if (mail($to,$subject,$body,$from) == true){
         
           echo "<script></script>";
        }else
        {
            echo "<script>alert('messge not sent');</script>";
        }
  

  
     
   }
   

 function passwordRecover($emailrecover,$code,$username){
    

        
    $subject ="TaytayIcePlant Password Recovery";
    $from = "https://www.taytayiceplant.com";
    $body = <<<EMAIL
    

Greetings from TaytayIcePlant.

    You have requested us to recover your password.  Do not worry about it just click this link 
http://taytayiceplant.com/forgot-password.php?emailrecover=$emailrecover&code=$code to recover your password.
    
Your USERNAME: $username

From: wwww.taytayiceplant.com 

EMAIL;



    
    
    
    
   if (mail($emailrecover,$subject,$body,$from) == true){
         
           echo "<script>alert('An email has been sent!');window.location = 'index.php';</script>";
           
        }else
        {
            echo "<script>alert('messge not sent');</script>";
        }
  

  
     
   }
   
   


function passwordRecoverChangePasswordCustomer($password,$emailcustomer){
               
		$query  = "UPDATE customer SET password='$password' WHERE email = '$emailcustomer'";
        mysql_query($query);	
          echo "<script>alert('Your password has been updated!');window.location = 'login.php';</script>";
	}


function passwordRecoverChangePasswordEmployee($password,$emailemployee){
               
		$query  = "UPDATE employee SET password='$password' WHERE email = '$emailemployee'";
        mysql_query($query);	
           echo "<script>alert('Your password has been updated!');window.location = 'login.php';</script>";
	}


   
function emailcheckCustomer($emailrecover){
    
    $sql = "SELECT * FROM customer WHERE email = '$emailrecover'";
    $result = mysql_query($sql);
    if (mysql_num_rows($result) == 1){
        $emailcheck = $emailrecover;
    }else{
        $emailcheck = null;
    }
    return $emailcheck;
    
    
    
    
                        
}   

function emailcheckEmployee($emailrecover){
    
    $sql = "SELECT * FROM employee WHERE email = '$emailrecover'";
    $result = mysql_query($sql);
    if (mysql_num_rows($result) == 1){
        $emailcheck = $emailrecover;
    }else{
        $emailcheck = null;
    }
    return $emailcheck;
} 

function usernamecheckCustomer($username){
    
    $sql = "SELECT * FROM customer WHERE username = '$username'";
    $result = mysql_query($sql);
    if (mysql_num_rows($result) == 1){
        $emailcheck = $username;
    }else{
        $emailcheck = null;
    }
    return $emailcheck;
} 


function usernamecheckEmployee($username){
    
    $sql = "SELECT * FROM employee WHERE username = '$username'";
    $result = mysql_query($sql);
    if (mysql_num_rows($result) == 1){
        $emailcheck = $username;
    }else{
        $emailcheck = null;
    }
    return $emailcheck;
} 

  
function usernamecheckAdmin($username){
    
    $sql = "SELECT * FROM users WHERE username = '$username'";
    $result = mysql_query($sql);
    if (mysql_num_rows($result) == 1){
        $emailcheck = $username;
    }else{
        $emailcheck = null;
    }
    return $emailcheck;
} 

function checkOrder($prod_no,$ip,$email){
    
    $sql = "SELECT * FROM cart WHERE client_ip= '$ip' AND product_no = '$prod_no' AND email='$email'";
    $result = mysql_query($sql);
    if (mysql_num_rows($result) == 1){
        $ordercheck = "1";
    }else{
        $ordercheck = "0";
    }
    return $ordercheck;
} 
  
   
   
   function addFeedback($name,$email,$feedback,$ip){
     $today  = gmdate('Y/m/d');
     $sql = "INSERT INTO feedback (customer_name,email,feedback,ip,date_created) VALUES ('$name','$email','$feedback','$ip','$today')";
     mysql_query($sql);
     echo "<script>alert('Your message has been successfully submitted.  Thank you..');window.location = 'faqs.php'; </script>";
   }
   
   
   	function feedbackData($field,$email){
		$query = "SELECT `$field` FROM `feedback` WHERE email = '" . $email . "'";
		if($run = mysql_query($query)){
			$result = mysql_result($run, 0, $field);
			return $result;
		}
	}
   
	function empEval($id ,$field){
		$query = "SELECT `$field` FROM `emp_evaluation` WHERE `emp_id_no` = '" . $id . "'";
	
       
    
    	$run = mysql_query($query);
    	   
           if (mysql_num_rows($run) == 1){
			$result = mysql_result($run, 0, $field);
			return $result;
     
		}else{
		  return "None";
		}
        
        
        
	}
    
	function empEvalcehck($id){
		$query = "SELECT `emp_id_no` FROM `emp_evaluation` WHERE `emp_id_no` = '" . $id . "'";
	   $run = mysql_query($query);
		
        if (mysql_num_rows($run)== 0){
       echo "<script>alert('Yoo are not yet been evaluated');window.location = 'index.php'; </script>";
        }else{
            return true;
        }
		
	}
     
  

	function empData($id ,$field){
		$query = "SELECT `$field` FROM `employee` WHERE `emp_id_no` = '" . $id . "'";
		if($run = mysql_query($query)){
			$result = mysql_result($run, 0, $field);
			return $result;
		}
	}
  
    
    
    	function empadminData($id,$field){
		$query = "SELECT `$field` FROM `users` WHERE admin_no='$id'";
		if($run = mysql_query($query)){
			$result = mysql_result($run, 0, $field);
			return $result;
		}
	}
    
    
    
    	function empDataCustomer($id ,$field){
		$query = "SELECT `$field` FROM `customer` WHERE `customer_id` = '" . $id . "'";
		if($run = mysql_query($query)){
			$result = mysql_result($run, 0, $field);
			return $result;
		}
	}
    
    function empDataOrder($id ,$field){
		$query = "SELECT `$field` FROM `orders` WHERE `order_id` = '" . $id . "'";
		if($run = mysql_query($query)){
			$result = mysql_result($run, 0, $field);
			return $result;
		}
	}
    
     function empDataProduct($id ,$field){
		$query = "SELECT `$field` FROM `products` WHERE `product_no` = '" . $id . "'";
		if($run = mysql_query($query)){
			$result = mysql_result($run, 0, $field);
			return $result;
		}
	}
    
         function empDataAttendance($field,$dateconfrim){
		$query = "SELECT `$field` FROM `attendance` WHERE `date` = '" . $dateconfrim . "'";
		if($run = mysql_query($query)){
			$result = mysql_num_rows($run);
			return $result;
		}
	}
    
    
    function orderTracking($field){
        $sql = "SELECT $field FROM orders ORDER BY order_id DESC LIMIT 1";
        $result = mysql_query($sql);
        $row = mysql_fetch_array($result);
        $row["order_id"];
        return $row["order_id"];
        
    }
    
    
    function data_secure($data){
    $data = htmlspecialchars($data);
    $data = trim($data);
    $data = stripcslashes($data);
    return $data;
}

    
    function data_crypt($data){
    $data = hash("sha256",$data);
    return $data;
}
    
    
    
    
?>