<?php
  session_start();
  
  
  include 'php/db/connect.php';
  include 'php/function.php';
  
  $id = data_secure($_SESSION["emp_id_no"]);
  
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
    $ip = $_SERVER['REMOTE_ADDR'];
    }
  
  
empEvalcehck($id);




   // echo "<script> alert('". $gender ."'); </script>";
?>
<html>
<head>
	<title>NTIP - Employee Evaluation</title>
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
      <div class="container white z-depth-2" style="margin-top: 2%; height:auto; padding-top: 1%; padding-bottom: 3%;">
        <div class="row">
          <div class="col s12">
            <ul class="tabs " style="background-color: #fcfcfc; ">
              <li class="tab col s3"><a href="#evaluation" class="blue-text active">Employee Evaluation</a></li> 


            </ul>
          </div>
      
     
          <div id="evaluation"  class="col s12"><br>
          <form method="post">
              <table class="hoverable responsive-table bordered">
               
                <thead>
                  <tr>
                   <h5>Employee Performance Review</h5>
                    <div class="input-field col s6" >
         <input id="track-no" type="text" class="validate" name="name" readonly="" require  maxlength="30" value="<?php echo empData($id, 'first_name') . " " . empData($id, 'last_name');?>">
          <label for="name">Name</label>
            </div>

          <div class="input-field col s6" >
         <input id="track-no" type="text" class="validate" name="department" readonly="" require  maxlength="30" value="<?php echo empData($id, 'department');?>">
          <label for="Tracking">Department</label>
            </div>
            
           <div class="input-field col s6" >
         <input id="track-no" type="text" class="validate" name="reviewer_name" readonly="" require  maxlength="30" value="<?php echo empEval($id,'reviewer');?>">
          <label for="Tracking">Reviewer</label>
            </div> 
            
           <div class="input-field col s6" >
         <input id="track-no" type="text" class="validate" name="date_review" readonly="" require  maxlength="30" value="<?php echo empEval($id,'date_review');?>">
          <label for="Tracking">Date of Last Review</label>
            </div>             
            
            
            <br style="clear: both;" />
                 
                  
                 <p>1. Honesty</p>
                
                
                
             <div >                                          
                <input type="radio" <?php if (empEval($id,'q1ans') == "Excellent") echo "checked=''" ?>  disabled="" class="filled-in" id="q1" name="q1" value="Excellent" >
                <label for="q1" style="color: grey;">Excellent</label><br />
                
                <input type="radio"  <?php if (empEval($id,'q1ans') == "Good") echo "checked=''" ?>  disabled="" class="filled-in" id="q2" name="q1" value="Good">
                <label for="q2" style="color: grey;">Good</label><br />
                
                <input type="radio"  <?php if (empEval($id,'q1ans') == "Fair") echo "checked=''" ?>  disabled="" class="filled-in" id="q3" name="q1" value="Fair">
                <label for="q3" style="color: grey;">Fair</label><br />
                
                <input type="radio"  <?php if (empEval($id,'q1ans') == "Poor") echo "checked=''" ?>  disabled="" class="filled-in" id="q4" name="q1" value="Poor">
                <label for="q4" style="color: grey;">Poor</label><br />
          </div>
         
                 
                    <div >   
                 <p>2. Productivity</p>
                
                <input type="radio" disabled="" <?php if (empEval($id,'q2ans') == "Excellent") echo "checked=''" ?> class="filled-in" id="q5" name="q2" value="Excellent">
                <label for="q5" style="color: grey;">Excellent</label><br />
                <input type="radio" disabled="" <?php if (empEval($id,'q2ans') == "Good") echo "checked=''" ?> class="filled-in" id="q6" name="q2" value="Good">
                <label for="q6" style="color: grey;">Good</label><br />
                <input type="radio" disabled="" <?php if (empEval($id,'q2ans') == "Fair") echo "checked=''" ?> class="filled-in" id="q7" name="q2" value="Fair">
                <label for="q7" style="color: grey;">Fair</label><br />
                <input type="radio" disabled="" <?php if (empEval($id,'q2ans') == "Poor") echo "checked=''" ?> class="filled-in" id="q8" name="q2" value="Poor">
                <label for="q8" style="color: grey;">Poor</label><br />
               
                <p>3. Work Quality</p>
                
                <input type="radio" disabled="" <?php if (empEval($id,'q3ans') == "Excellent") echo "checked=''" ?> class="filled-in" id="q9" name="q3" value="Excellent">
                <label for="q9" style="color: grey;">Excellent</label><br />
                <input type="radio" disabled="" <?php if (empEval($id,'q3ans') == "Good") echo "checked=''" ?> class="filled-in" id="q10" name="q3" value="Good">
                <label for="q10" style="color: grey;">Good</label><br />
                <input type="radio" disabled="" <?php if (empEval($id,'q3ans') == "Fair") echo "checked=''" ?> class="filled-in" id="q11" name="q3" value="Fair">
                <label for="q11" style="color: grey;">Fair</label><br />
                <input type="radio" disabled="" <?php if (empEval($id,'q3ans') == "Poor") echo "checked=''" ?> class="filled-in" id="q12" name="q3" value="Poor">
                <label for="q12" style="color: grey;">Poor</label><br />
               
               
                <p>4. Technical Skills</p>
                
                <input type="radio" disabled="" <?php if (empEval($id,'q4ans') == "Excellent") echo "checked=''" ?>  class="filled-in" id="q13" name="q4" value="Excellent">
                <label for="q13" style="color: grey;">Excellent</label><br />
                <input type="radio" disabled="" <?php if (empEval($id,'q4ans') == "Good") echo "checked=''" ?> class="filled-in" id="q14" name="q4" value="Good">
                <label for="q14" style="color: grey;">Good</label><br />
                <input type="radio" disabled="" <?php if (empEval($id,'q4ans') == "Fair") echo "checked=''" ?> class="filled-in" id="q15" name="q4" value="Fair">
                <label for="q15" style="color: grey;">Fair</label><br />
                <input type="radio" disabled="" <?php if (empEval($id,'q4ans') == "Poor") echo "checked=''" ?> class="filled-in" id="q16" name="q4" value="Poor">
                <label for="q16" style="color: grey;">Poor</label><br />
               
               
                <p>5. Work Consistency</p>
                
                <input type="radio" disabled="" <?php if (empEval($id,'q5ans') == "Excellent") echo "checked=''" ?> class="filled-in" id="q21" name="q5" value="Excellent">
                <label for="q21" style="color: grey;">Excellent</label><br />
                <input type="radio" disabled="" <?php if (empEval($id,'q5ans') == "Good") echo "checked=''" ?> class="filled-in" id="q22" name="q5" value="Good">
                <label for="q22" style="color: grey;">Good</label><br />
                <input type="radio" disabled="" <?php if (empEval($id,'q5ans') == "Fair") echo "checked=''" ?> class="filled-in" id="q23" name="q5" value="Fair">
                <label for="q23" style="color: grey;">Fair</label><br />
                <input type="radio" disabled="" <?php if (empEval($id,'q5ans') == "Poor") echo "checked=''" ?> class="filled-in" id="q24" name="q5" value="Poor">
                <label for="q24" style="color: grey;">Poor</label><br />
                
         
            
            <p>6. Enthusiasm</p>
                
                <input type="radio" disabled="" <?php if (empEval($id,'q6ans') == "Excellent") echo "checked=''" ?> class="filled-in" id="q25" name="q6" value="Excellent">
                <label for="q25" style="color: grey;">Excellent</label><br />
                <input type="radio" disabled="" <?php if (empEval($id,'q6ans') == "Good") echo "checked=''" ?> class="filled-in" id="q26" name="q6" value="Good">
                <label for="q26" style="color: grey;">Good</label><br />
                <input type="radio" disabled="" <?php if (empEval($id,'q6ans') == "Fair") echo "checked=''" ?> class="filled-in" id="q27" name="q6" value="Fair">
                <label for="q27" style="color: grey;">Fair</label><br />
                <input type="radio" disabled="" <?php if (empEval($id,'q6ans') == "Poor") echo "checked=''" ?> class="filled-in" id="q28" name="q6" value="Poor">
                <label for="q28" style="color: grey;">Poor</label><br />
                
        
            
            <p>7. Cooperation</p>
               
      
                <input type="radio" disabled=""  <?php if (empEval($id,'q7ans') == "Excellent") echo "checked=''" ?> class="filled-in" id="q29" name="q7" value="Excellent">
                <label for="q29" style="color: grey;">Excellent</label><br />
                <input type="radio" disabled="" <?php if (empEval($id,'q7ans') == "Good") echo "checked=''" ?> class="filled-in" id="q30" name="q7" value="Good">
                <label for="q30" style="color: grey;">Good</label><br />
                <input type="radio" disabled="" <?php if (empEval($id,'q7ans') == "Fair") echo "checked=''" ?> class="filled-in" id="q31" name="q7" value="Fair">
                <label for="q31" style="color: grey;">Fair</label><br />
                <input type="radio" disabled="" <?php if (empEval($id,'q7ans') == "Poor") echo "checked=''" ?> class="filled-in" id="q32" name="q7" value="Poor">
                <label for="q32" style="color: grey;">Poor</label><br />
       
           
           
            <p>8. Attitude</p>
               
      
                <input type="radio" disabled="" <?php if (empEval($id,'q8ans') == "Excellent") echo "checked=''" ?> class="filled-in" id="q33" name="q8" value="Excellent">
                <label for="q33" style="color: grey;">Excellent</label><br />
                <input type="radio" disabled="" <?php if (empEval($id,'q8ans') == "Good") echo "checked=''" ?> class="filled-in" id="q34" name="q8" value="Good">
                <label for="q34" style="color: grey;">Good</label><br />
                <input type="radio" disabled="" <?php if (empEval($id,'q8ans') == "Fair") echo "checked=''" ?> class="filled-in" id="q35" name="q8" value="Fair">
                <label for="q35" style="color: grey;">Fair</label><br />
                <input type="radio" disabled="" <?php if (empEval($id,'q8ans') == "Poor") echo "checked=''" ?> class="filled-in" id="q36" name="q8" value="Poor">
                <label for="q36" style="color: grey;">Poor</label><br />
         
         
            
            <p>9. Initiative</p>
               
      
                <input type="radio" disabled="" <?php if (empEval($id,'q9ans') == "Excellent") echo "checked=''" ?> class="filled-in" id="q37" name="q9" value="Excellent">
                <label for="q37" style="color: grey;">Excellent</label><br />
                <input type="radio" disabled="" <?php if (empEval($id,'q9ans') == "Good") echo "checked=''" ?> class="filled-in" id="q38" name="q9" value="Good">
                <label for="q38" style="color: grey;">Good</label><br />
                <input type="radio" disabled="" <?php if (empEval($id,'q9ans') == "Fair") echo "checked=''" ?> class="filled-in" id="q39" name="q9" value="Fair">
                <label for="q39" style="color: grey;">Fair</label><br />
                <input type="radio" disabled="" <?php if (empEval($id,'q9ans') == "Poor") echo "checked=''" ?> class="filled-in" id="q40" name="q9" value="Poor">
                <label for="q40" style="color: grey;">Poor</label><br />
      
       
    <p>10. Working Relations</p>
               
      
                <input type="radio" disabled="" <?php if (empEval($id,'q10ans') == "Excellent") echo "checked=''" ?> class="filled-in" id="q41" name="q10" value="Excellent">
                <label for="q41" style="color: grey;">Excellent</label><br />
                <input type="radio" disabled="" <?php if (empEval($id,'q10ans') == "Good") echo "checked=''" ?> class="filled-in" id="q42" name="q10" value="Good">
                <label for="q42" style="color: grey;">Good</label><br />
                <input type="radio" disabled="" <?php if (empEval($id,'q10ans') == "Fair") echo "checked=''" ?> class="filled-in" id="q43" name="q10" value="Fair">
                <label for="q43" style="color: grey;">Fair</label><br />
                <input type="radio" disabled="" <?php if (empEval($id,'q10ans') == "Poor") echo "checked=''" ?> class="filled-in" id="q47" name="q10" value="Poor">
                <label for="q44" style="color: grey;">Poor</label><br />
        
            
    <p>11. Creativity</p>
               
      
                <input type="radio" disabled="" <?php if (empEval($id,'q11ans') == "Excellent") echo "checked=''" ?> class="filled-in" id="q45" name="q11" value="Excellent">
                <label for="q45" style="color: grey;">Excellent</label><br />
                <input type="radio" disabled="" <?php if (empEval($id,'q11ans') == "Good") echo "checked=''" ?> class="filled-in" id="q46" name="q11" value="Good">
                <label for="q46" style="color: grey;">Good</label><br />
                <input type="radio" disabled="" <?php if (empEval($id,'q11ans') == "Fair") echo "checked=''" ?> class="filled-in" id="q47" name="q11" value="Fair">
                <label for="q47" style="color: grey;">Fair</label><br />
                <input type="radio" disabled="" <?php if (empEval($id,'q11ans') == "Poor") echo "checked=''" ?> class="filled-in" id="q48" name="q11" value="Poor">
                <label for="q48" style="color: grey;">Poor</label><br />
         
       
            
    <p>12. Punctuality</p>
               
      
                <input type="radio" disabled="" <?php if (empEval($id,'q12ans') == "Excellent") echo "checked=''" ?> class="filled-in" id="q49" name="q12" value="Excellent">
                <label for="q49" style="color: grey;">Excellent</label><br />
                <input type="radio" disabled="" <?php if (empEval($id,'q12ans') == "Good") echo "checked=''" ?> class="filled-in" id="q50" name="q12" value="Good">
                <label for="q50" style="color: grey;">Good</label><br />
                <input type="radio" disabled="" <?php if (empEval($id,'q12ans') == "Fair") echo "checked=''" ?> class="filled-in" id="q51" name="q12" value="Fair">
                <label for="q51" style="color: grey;">Fair</label><br />
                <input type="radio" disabled="" <?php if (empEval($id,'q12ans') == "Poor") echo "checked=''" ?> class="filled-in" id="q52" name="q12" value="Poor">
                <label for="q52" style="color: grey;">Poor</label><br />
         
      

            
    <p>13. Attendance</p>
               
      
                <input type="radio" disabled="" <?php if (empEval($id,'q13ans') == "Excellent") echo "checked=''" ?> class="filled-in" id="q57" name="q14" value="Excellent">
                <label for="q57" style="color: grey;">Excellent</label><br />
                <input type="radio" disabled="" <?php if (empEval($id,'q13ans') == "Good") echo "checked=''" ?> class="filled-in" id="q58" name="q14" value="Good">
                <label for="q58" style="color: grey;">Good</label><br />
                <input type="radio" disabled="" <?php if (empEval($id,'q13ans') == "Fair") echo "checked=''" ?> class="filled-in" id="q59" name="q14" value="Fair">
                <label for="q59" style="color: grey;">Fair</label><br />
                <input type="radio" disabled="" <?php if (empEval($id,'q13ans') == "Poor") echo "checked=''" ?> class="filled-in" id="q60" name="q14" value="Poor">
                <label for="q60" style="color: grey;">Poor</label><br />
         
      
            
    <p>14. Dependability</p>
               
      
                <input type="radio" disabled="" <?php if (empEval($id,'q14ans') == "Excellent") echo "checked=''" ?>  class="filled-in" id="q61" name="q15" value="Excellent">
                <label for="q61" style="color: grey;">Excellent</label><br />
                <input type="radio" disabled="" <?php if (empEval($id,'q14ans') == "Good") echo "checked=''" ?> class="filled-in" id="q62" name="q15" value="Good">
                <label for="q62" style="color: grey;">Good</label><br />
                <input type="radio" disabled="" <?php if (empEval($id,'q14ans') == "Fair") echo "checked=''" ?> class="filled-in" id="q63" name="q15" value="Fair">
                <label for="q63" style="color: grey;">Fair</label><br />
                <input type="radio" disabled="" <?php if (empEval($id,'q14ans') == "Poor") echo "checked=''" ?> class="filled-in" id="q64" name="q15" value="Poor">
                <label for="q64" style="color: grey;">Poor</label><br />
         
    
                  
    <p>15. Communication Skills</p>
               
      
                <input type="radio" disabled="" <?php if (empEval($id,'q15ans') == "Excellent") echo "checked=''" ?> class="filled-in" id="q65" name="q16" value="Excellent">
                <label for="q65" style="color: grey;">Excellent</label><br />
                <input type="radio" disabled="" <?php if (empEval($id,'q15ans') == "Good") echo "checked=''" ?> class="filled-in" id="q66" name="q16" value="Good">
                <label for="q66" style="color: grey;">Good</label><br />
                <input type="radio" disabled="" <?php if (empEval($id,'q15ans') == "Fair") echo "checked=''" ?> class="filled-in" id="q67" name="q16" value="Fair">
                <label for="q67" style="color: grey;">Fair</label><br />
                <input type="radio" disabled="" <?php if (empEval($id,'q15ans') == "Poor") echo "checked=''" ?> class="filled-in" id="q68" name="q16" value="Poor">
                <label for="q68" style="color: grey;">Poor</label><br />
         
            </div>   
                  
                  

                  
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
      </div>
      </div>
    </div>
	<script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
  <script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>
<?php

    
?>
