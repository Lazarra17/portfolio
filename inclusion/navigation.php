<nav class="navbar navbar-inverse navbar-static-top margin-off" id="primary-nav">
	<div class="container">
		<div class="navbar-header">
			<button class="navbar-toggle" data-target="#myNav" data-toggle="collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="index.html"><img src="images/mylogo.png" class="img-responsive logo" /></a>
		</div>
		<div class="collapse navbar-collapse" id="myNav">
			<ul class="nav navbar-nav navbar-right">
				<li <?php if($page == "index.php") echo"class='active'" ?>><a href="index.php">HOME</a></li>
				<li <?php if($page == "about.php") echo"class='active'" ?>><a href="about.php">ABOUT ME</a></li>
				<li class="dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle">PORTFOLIO <span class="caret"></span></a>
					<ul class="dropdown-menu ">
						<li><a href="portfolio/index.php" target="_blank">SUMMARY</a></li>
						<li><a href="portfolio/responsive-website.php" target="_blank">RESPONSIVE WEBSITE</a></li>
						<li><a href="portfolio/static-website.php" target="_blank">STATIC WEBSITE</a></li>
						<li><a href="portfolio/mis.php" target="_blank">MIS</a></li>
						<li><a href="portfolio/edm.php" target="_blank">EDM</a></li>
						<li><a href="portfolio/fb-banner.php" target="_blank">PROMOTIONAL BANNER</a></li>
					</ul>
				</li>
				<li><a href="pdf/CV-Chad-Final.docx.pdf">CURRICULUM VITAE</a></li>
			</ul>
		</div>
 </div>
</nav>