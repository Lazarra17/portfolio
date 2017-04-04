<?php
	$page = "index.php";
?>
<!Doctype html>
<html>
   <!--Head,Meta and Title tags-->
    <head>
    	<title>Lazarra17 | Chad Nico Lazarra Online Profile</title>
    	<?php include "inclusion/header.php";?>
    </head>
    <body>
        <!--Navigation-->
        	<?php include "inclusion/navigation.php"; ?>        
        <!--Welcome Banner-->
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-xs-12 margin-off">
                    <img src="images/banner.jpg" class="img-responsive center-block" />
                </div>
            </div>
        </div>
        
        <div class="container">
            <!--Summary-->
            <div class="row">
                <div class="col-lg-4 col-md-4 col-xs-12">
                    <img src="images/summary.jpg" class="img-responsive img-circle center-block summary-photo" />
                </div>
                
                <div class="col-lg-8 col-md-8 col-xs-12">
                    <h3 class="summary-name">Chad Nico Lazarra</h3>
                    <p class="summary-content">I am responsible, comitted, resourceful and a team player person.  I am very knowledgeable in web developing and designing.  I have created several websites, Promotional Materials and MIS.  I finished Asiatravel.com Arabic site Project 2016-2017 and an online ordering website for New Taytay Ice Plant 2015.  I have one year experience as a web designer in asiatravel.com</p>
                    <p class="summary-content"><strong>My Ambition:</strong> To be a Full Stack Developer someday and create several Management Information System(MIS) that will benefit the company and improve exisiting operations.</p>
                    <p class="summary-content"><strong>Mark Up/Scripting Languages:</strong> HTML5,CSS3,JavaScript, PHP and MySql<br />
                    <strong>Frameworks:</strong> Bootstrap, JQuery and Angular JS</p>
                    <button class="btn btn-primary read-more">READ MORE</button>
                    
                </div>
            </div>
            <div class="row" style="margin-top:20px;">
                <!--About Me-->
                <div class="col-4 col-md-4 col-xs-12">
                    <div class="thumbnail">
                        <a href="about.php">
                            <img src="images/aboutme-bottom.jpg">
                            <div class="caption">
                                <p class="summary-content">I have an ambition to be a Full Stack Developer and develop a MIS that will contribute the growth of an organization</p>
                            </div>
                        </a>
                    </div>
                </div>
                <!--Portfolio-->
                <div class="col-4 col-md-4 col-xs-12">
                    <div class="thumbnail">
                        <a href="portfolio/index.php">
                            <img src="images/portfolio.jpg">
                            <div class="caption">
                                <p class="summary-content">I worked in asiatravel for over a year as a Web designer.  For a short period of time I’ve created several websites, layouts etc.</p>
                            </div>
                        </a>
                    </div>
                </div>
                <!--Curriculum Vitae-->
                <div class="col-4 col-md-4 col-xs-12">
                    <div class="thumbnail">
                        <a href="pdf/CV-Chad-Final.docx.pdf">
                            <img src="images/cv.jpg">
                            <div class="caption">
                                <p class="summary-content">I’m looking for a Back-end Developer position probably PHP developer which can help me  improve my skills and abilities... </p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!--Footer Links-->
		
        <?php 
			include "inclusion/footer.php"
		?>
    </body>
</html>