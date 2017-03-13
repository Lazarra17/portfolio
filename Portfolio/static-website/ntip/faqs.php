<?php
  session_start();
  
  
  include 'php/db/connect.php';
  include 'php/function.php';
  
  
  
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
    $ip = $_SERVER['REMOTE_ADDR'];
    }
  
  
if (isset($_POST["submit"])){
    
    
    
    
    $name = $_POST["name"];
    $email = $_POST["email"];
    $feedback = $_POST["feedback"];
    
     if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
       echo "<script> alert('Invalid email'); </script>";
      }else{
   
    addFeedback($name,$email,$feedback,$ip);
    
    
    }
}




   // echo "<script> alert('". $gender ."'); </script>";
?>
<html>
<head>
	<title>Faqs - How to Buy etc..</title>
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
 if (isset($_SESSION["emp_id_no"])){
  include 'php/sidebar.php';
  }elseif (isset($_SESSION["customer_id"])){
     include 'php/sidebarcustomer.php';
  }
  ?>
    <div class="col s12" style="margin-left: 7%;">
      <div class="container white z-depth-2" style="margin-top: 2%; height:auto; padding-top: 1%; padding-bottom: 3%;">
        <div class="row">
          <div class="col s12">
            <ul class="tabs " style="background-color: #fcfcfc; ">
              <li class="tab col s3"><a href="#howtobuy" class="blue-text active">How to buy</a></li> 
              <li class="tab col s3"><a href="#payment" class="blue-text">Payment</a></li>
              <li class="tab col s3"><a href="#shippingDelivery" class="blue-text active">Shipping & Delivery</a></li> 
              <li class="tab col s3"><a href="#feedback" class="blue-text">Feedback</a></li>

            </ul>
          </div>
          <div id="howtobuy" class="col s12"><br>
              <table class="hoverable responsive-table bordered">
              
                <thead>
                  <tr>
                </thead>
                <tbody>
                      <tr>
                 <h5>Quick Buy with 5 steps</h5>
                 <p><h5>1.</h5> <i style="color: royalblue;" class="mdi-content-send"></i>
                 Click the buy button to start buying.  (The green button with a cart icon will send to your online shopping cart.)
                 </p>
                       <img src="images/faqs/howtobuy/1.jpg" width="90%" />
                       </tr>
                     
                  
                     <tr>
                 <p><h5>2.</h5> <i style="color: royalblue;" class="mdi-content-send"></i>
                 This page shows you the product summary and its pictures.  You may read the discription and if you like the buy the product you
                 have to click the checkout button.  
                 <br />
                 (The green button with a cart icon will send to your online shopping cart.)
                 </p>
                       <img src="images/faqs/howtobuy/2.jpg" width="90%" />
                       </tr>
               
                     <tr>
                 <p><h5>3.</h5> <i style="color: royalblue;" class="mdi-content-send"></i>
                 This page requests you to login your account. If not yet a member you can register by clicking the 'Click here' link and continue ordering.  
                 </p>
                       <img src="images/faqs/howtobuy/4.jpg" width="90%" />
                       </tr>
                       
                       
                        <tr>
                 <p><h5>4.</h5> <i style="color: royalblue;" class="mdi-content-send"></i>
                 This page gives you a ordering form that needs to be filled up by the customer.  Please fill up the form and then click 
                 submit order to finish your online ordering transaction.  Once your order has been verified.  We will take care of everthing for you.
                  You only have to wait your order and pay. 
                 </p>
                       <img src="images/faqs/howtobuy/3.jpg" width="90%" />
                       </tr>
               
                 <tr>
                 <p><h5>5.</h5> <i style="color: royalblue;" class="mdi-content-send"></i>
                 While waiting your order please prepare the payment for faster transaction.  Once the delivery reach your house and you pay the order. The transaction is finish.
                 You can send feed back to us using our website. We would be glad to hear your feed back.
                   Thank you and buy with us.
                 </p>
                       <img src="images/faqs/howtobuy/5.jpg" width="90%" />
                       </tr>
               
               
               
                </tbody>
              </table>
          </div>
          <div id="payment" class="col s12"><br>
              <table class="hoverable responsive-table bordered">
               
                <thead>
                     <tr>
                 <h5>Payment - Cash on Delivery</h5>
                 <p><h5>1.</h5> <i style="color: royalblue;" class="mdi-content-send"></i>
                 After you finish the ordering transaction.  The payment method available is Cash on Delivery.
                 Hassle Free.
                 </p>
                       <img src="images/faqs/payment/payment.png" width="90%" />
                       </tr>
                     
              
             
               </thead>
              </table>
          </div>        
          
          <div id="shippingDelivery" class="col s12"><br>
              <table class="hoverable responsive-table bordered">
               
                <thead>
              
               <tr>
                 <h5>Shipping and Delivery</h5>
                 <p><h5>1.</h5> <i style="color: royalblue;" class="mdi-content-send"></i>
                 Once your order has been verified.  We will prepare your order in our factory.
                 </p>
                       <img src="images/faqs/shippinganddelivery/1.jpg" width="90%" height="60%" />
                       </tr>
             
               <tr>
                 <p><h5>2.</h5> <i style="color: royalblue;" class="mdi-content-send"></i>
                 Once your order is ready. We will delivery it to you right away. It can take 15-30 Minutes depends on your location.
                  Fast and Efficient Service 
                 </p>
                       <img src="images/faqs/shippinganddelivery/2.jpg" width="90%" height="50%" />
                       </tr>
             
                </thead>
                <tbody>
                      <tr>
                       
                       </tr>
                 
                </tbody>
              </table>
          </div>
          <div id="feedback" class="col s12"><br>
              <table class="hoverable responsive-table bordered">
          <form action="" method="post">     
                <thead>
               <tr>
                 <h5>Feed Back (Optional)</h5>
                 <p><i style="color: royalblue;" class="mdi-content-send"></i>
                 We would be glad to hear your feedback
                 </p>
          
        <textarea cols="80" rows="15" style="resize: none;" name="feedback" required="">
        -Please type here your message-
        </textarea>
                 
                 
          <div class="input-field col s4" >
         <input id="track-no" type="text" class="validate" name="name" require required maxlength="30" value="">
          <label for="Tracking">Name</label>
            </div>

          <div class="input-field col s4" >
         <input id="track-no" type="text" class="validate" name="email" require required maxlength="30" value="">
          <label for="Tracking">Email</label>
            </div>
            <br style="clear: both;" />
            
             <button class="medium btn waves-effect waves-light blue darken-3 right" type="submit" name="submit" style="margin-right: 25px;">
            Submit 
          <i class="mdi-content-send right"></i>
          </button>
          
          </form>  
          
                       </tr>
             
               <tr>
                </thead>
                <tbody>
                      <tr>
                       
                       </tr>
                 
                </tbody>
              </table>
          </div>
     
          <div id="survey" hidden="" class="col s12"><br>
          <form method="post">
              <table class="hoverable responsive-table bordered">
               
                <thead>
                  <tr>
                   <h5>Survey (Optional)</h5>
                    <div class="input-field col s4" >
         <input id="track-no" type="text" class="validate" name="name" require required maxlength="30" value="">
          <label for="Tracking">Name</label>
            </div>

          <div class="input-field col s4" >
         <input id="track-no" type="text" class="validate" name="email" require required maxlength="30" value="">
          <label for="Tracking">Email</label>
            </div>
            <br style="clear: both;" />
                 
                  
                 <p>1. How do you rate our services?</p>
                
                
                
                                                                
                <input type="radio" required="" class="filled-in" id="q1" name="q1" value="ans1">
                <label for="q1" style="color: grey;">Very Satisfied</label><br />
                
                <input type="radio" required="" class="filled-in" id="q2" name="q1" value="ans2">
                <label for="q2" style="color: grey;">Satisfied</label><br />
                
                <input type="radio" required="" class="filled-in" id="q3" name="q1" value="ans3">
                <label for="q3" style="color: grey;">Slightly Satisfied</label><br />
                
                <input type="radio" required="" class="filled-in" id="q4" name="q1" value="ans4">
                <label for="q4" style="color: grey;">Dissatisfied</label><br />
          
          </div>
                 
                 <p>2. How do you rate our crew in terms of delivery?</p>
                
                <input type="radio" required="" class="filled-in" id="q5" name="q2" value="ans1">
                <label for="q5" style="color: grey;">Very Satisfied</label><br />
                <input type="radio" required="" class="filled-in" id="q6" name="q2" value="ans2">
                <label for="q6" style="color: grey;">Satisfied</label><br />
                <input type="radio" required="" class="filled-in" id="q7" name="q2" value="ans3">
                <label for="q7" style="color: grey;">Slightly Satisfied</label><br />
                <input type="radio" required="" class="filled-in" id="q8" name="q2" value="ans4">
                <label for="q8" style="color: grey;">Dissatisfied</label><br />
               
                <p>3. How do you like our products?</p>
                
                <input type="radio" required="" class="filled-in" id="q9" name="q3" value="ans1">
                <label for="q9" style="color: grey;">Very Satisfied</label><br />
                <input type="radio" required="" class="filled-in" id="q10" name="q3" value="ans2">
                <label for="q10" style="color: grey;">Satisfied</label><br />
                <input type="radio" required="" class="filled-in" id="q11" name="q3" value="ans3">
                <label for="q11" style="color: grey;">Slightly Satisfied</label><br />
                <input type="radio" required="" class="filled-in" id="q12" name="q3" value="ans4">
                <label for="q12" style="color: grey;">Dissatisfied</label><br />
               
               
                <p>4. Does our product sustain your needs?</p>
                
                <input type="radio" required="" class="filled-in" id="q13" name="q4" value="ans1">
                <label for="13" style="color: grey;">Very Satisfied</label><br />
                <input type="radio" required="" class="filled-in" id="q14" name="q4" value="ans2">
                <label for="q14" style="color: grey;">Satisfied</label><br />
                <input type="radio" required="" class="filled-in" id="q15" name="q4" value="ans3">
                <label for="q15" style="color: grey;">Slightly Satisfied</label><br />
                <input type="radio" required="" class="filled-in" id="q16" name="q4" value="ans4">
                <label for="q16" style="color: grey;">Dissatisfied</label><br />
               
               
                <p>5. How would you describe your overall level of satisfaction in our company?</p>
                
                <input type="radio" required="" class="filled-in" id="q21" name="q5" value="ans1">
                <label for="q21" style="color: grey;">Very Satisfied</label><br />
                <input type="radio" required="" class="filled-in" id="q22" name="q5" value="ans2">
                <label for="q22" style="color: grey;">Satisfied</label><br />
                <input type="radio" required="" class="filled-in" id="q23" name="q5" value="ans3">
                <label for="q23" style="color: grey;">Slightly Satisfied</label><br />
                <input type="radio" required="" class="filled-in" id="q24" name="q5" value="ans4">
                <label for="q24" style="color: grey;">Dissatisfied</label><br />
                
            </div>
           
       
                  
             <button class="medium btn waves-effect waves-light blue darken-3 right" type="submit" name="submitsurvey" style="margin-right: 25px;">
            Submit 
          <i class="mdi-content-send right"></i>
          </button>  
                  
                  </tr>
                </thead>
                <tbody>
                      <tr>
                       
                       </tr>
                 
                </tbody>
                </form>
              </table>
          </div>
     
      </div>
      </div> <?php include "php/footer.php"; ?>
    </div>
     
	<script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
  <script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>
<?php

    
?>
