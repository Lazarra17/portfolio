<?php
	$page = "about.php";
?>
<!Doctype html>
<html>
   <!--Head,Meta and Title tags-->
    <?php include "inclusion/header.php";?>
    
    <body>
        <!--Navigation-->
        <?php include "inclusion/navigation.php"; ?>
        <!--Welcome Banner-->
        <div class="about-me-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-7 col-xs-12">
                   <h1 class="about-me-name">Chad Nico Lazarra</h1>
                    <p class="about-me-tagline">
                        I have an ambition to become a Full Stack Developer.  My expertise are 
                        creating beautiful user-friendly websites, developing Management Information
                        System(MIS) and designing promotional materials. 
                    </p>
                    <p class="about-me-content">
                        I am a responsible, comitted, resourceful and a team player person. I am very 
                        knowledgeable in using HTML, CSS, JavaScript, PHP & MySql.  I Graduated in
                        Polytechnic University of the Philippines having a diploma in Information
                        Communication Management Technology and continued my studies in Jose Rizal University
                        having BSIT course.
                    </p>
                    <p class="about-me-content">
                        In building websites I use Adobe Photoshop and Illustrator for layouts, Brackets as my 
                        code editor, HTML,CSS JavaScript, PHP & MySql as my primary languages and Bootstrap,
                        Angular JS and jQuery as my frameworks as a result I can build a beautiful and powerful 
                        websites.  My Thesis was created using PHP & MySql, It was an online ordering website
                        for New TayTay Ice Plant, it has a features of registration,login, emplpoyee ordering and delivery management, 
                        reports(PDF), backup, recovery etc and fortunately absorbed by the company.
                    </p>
                    <p class="about-me-content">
                        I have one year working experience as a web designer/developer dubai account in 
                        asiatravel.com, I maintained asiatravel.com web content, fixed dead links, created
                        microsites, email-html and designed EDM and newsletters, I also finished our team project 
                        IP Driven Site - Arabic Asiatravel.com
                    </p>
                    <p class="about-me-content">
                        Currently, I’m on learning Laravel (PHP Framework) because I’m planning to
                        work as a Back-end developer so that I can achieve my ambition to become
                        Full Stack Developer.  
                    </p>
                    <p class="about-me-content">
                    <a target="_blank" href="https://www.facebook.com/Chad.Nico.Lazarra"><img src="images/social-media/fb.png" class="social-link" /></a>
                    <a target="_blank" href="https://www.linkedin.com/in/chad-nico-lazarra/"><img src="images/social-media/linkedIn.png" class="social-link" /></a>
                    </p>
                </div>
                <div class="col-lg-5 col-md-5 col-xs-12">
                    <img class="about-me-image img-responsive hidden-xs hidden-sm" src="images/about-me.png" />
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