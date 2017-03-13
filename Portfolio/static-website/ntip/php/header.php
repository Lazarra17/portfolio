
<div class="navbar-fixed">
    <?php if(loggedin()){
      echo "<nav class='white'>";
      }else{
        echo "<nav class='blue darken-4'>";
        } ?>
      <div class="nav-wrapper">
        <ul style="padding-left: 5px; padding-right: 20px;">
          <li><img src="img/snowflake-icon.png" style="margin-top: 10px;margin-left: 10px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
          <li class=""><a href="index.php" class="">Home</a></li>
          <?php
            if(loggedin2()){
              $username = userData2('username');
              echo "<li class='right'><a style = 'margin-top: 15px; margin-left: 20px;' class='dropdown-button btn blue darken-4' href='#' data-activates='dropdown1'>Settings</a></li>";
              echo "<ul id='dropdown1' class='dropdown-content text-blue' style='margin-top: 50px;'>";
              echo "<li class='right border:0px'><a href='php/logout.php'>Logout</a></li>";
              echo "</ul>";
              echo "<li class='right blue-text' style='font-weight: bold;'><u>Logged in as ". $username ."</u></li>";
          
           echo " <li class='right blue-text'><img src='img/shipping.png'  style='margin-top: 10px;height:43px;width:70px;'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>;";
  echo " <li class='right blue-text'><img src='img/cod.png'  style='margin-top: 10px;height:43px;width:70px;'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>";
        
  }elseif(loggedin()){
              $username = userData('username');
              echo "<li class='right'><a style = 'margin-top: 15px; margin-left: 20px;' class='dropdown-button btn blue darken-4' href='#' data-activates='dropdown1'>Settings</a></li>";
              echo "<ul id='dropdown1' class='dropdown-content text-blue' style='margin-top: 50px;'>";
              echo "<li class='right border:0px'><a href='php/logout.php'>Logout</a></li>";
              echo "</ul>";
              echo "<li class='right blue-text' style='font-weight: bold;'><u>Logged in as ". $username ."</u></li>";
           echo " <li class='right blue-text'><img src='img/shipping.png'  style='margin-top: 10px;height:43px;width:70px;'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>;";
 echo " <li class='right blue-text'><img src='img/cod.png'  style='margin-top: 10px;height:43px;width:70px;'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>";

  }elseif(loggedin3()){
              $username = userData4('username');
              echo "<li class='right'><a style = 'margin-top: 15px; margin-left: 20px;' class='dropdown-button btn blue darken-4' href='#' data-activates='dropdown1'>Settings</a></li>";
              echo "<ul id='dropdown1' class='dropdown-content text-blue' style='margin-top: 50px;'>";
              echo "<li class='right border:0px'><a href='php/logout.php'>Logout</a></li>";
              echo "</ul>";
              echo "<li class='right blue-text' style='font-weight: bold;'><u>Logged in as ". $username ."</u></li>";
               echo " <li class='right blue-text'><img src='img/shipping.png'  style='margin-top: 10px;height:43px;width:70px;'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>";
        
              echo " <li class='right blue-text'><img src='img/cod.png'  style='margin-top: 10px;height:43px;width:70px;'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>";

            
            }
            else{
              echo "<li class=''><a href='about_us.php' class='active'>About us</a></li>";
              echo "<li class=''><a href='register.php' class='active'>Register</a></li>";
              echo "<li><a href='login.php'>Login</a></li>";
              echo "<li><a href='order-tracking.php' id='order-track'>Order Tracking</a></li>";
              echo " <li>
                      <a href='my_cart.php' class='waves-effect waves-cyan'>
                       <i class='mdi-action-shopping-cart'></i>
                      </a>
                      </li> ";
                  echo "<li><a href='faqs.php' id='order-track'>FAQs</a></li>";     
               echo " <li class='right blue-text'><img src='img/shipping.png'  style='margin-top: 10px;height:43px;width:70px;'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>";
            echo " <li class='right blue-text'><img src='img/cod.png'  style='margin-top: 10px;height:43px;width:70px;'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>";

}
              
          ?>
          
        </ul>
      </div>
    </nav>
  </div>

  