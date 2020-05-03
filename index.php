<!DOCTYPE HTML>
<html>
	<head>
		<title>Sd Car saloon</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload landing">
		<div id="page-wrapper">

			<!-- Header -->
				<header id="header">
					<img src="images/logo.png" alt="" width="227" height="57">
					<h1 id="logo"><a href="index.html">Sd Car saloon</a></h1>
					<nav id="nav">
						<ul>
							<li><a href="index.html">Home</a></li>
							<li>
								<a href="#">Layouts</a>
								<ul>
									<li><a href="left-sidebar.html">Left Sidebar</a></li>
									<li><a href="right-sidebar.html">Right Sidebar</a></li>
									<li><a href="no-sidebar.html">No Sidebar</a></li>
									<li>
										<a href="#">Submenu</a>
										<ul>
											<li><a href="#">Option 1</a></li>
											<li><a href="#">Option 2</a></li>
											<li><a href="#">Option 3</a></li>
											<li><a href="#">Option 4</a></li>
										</ul>
									</li>
								</ul>
							</li>
							<li><a href="elements.html">Elements</a></li>
							<li><a href="#" class="button primary">Sign Up</a></li>
						</ul>
					</nav>
				</header>

			<!-- Banner -->
				<section id="banner">
					<div class="content">
						<header>
							<?php
								include 'conn.php';
								$sql = 'SELECT * FROM header';
								$result = mysqli_query($conn, $sql);

								if (mysqli_num_rows($result) > 0) 
								{
									while($row = mysqli_fetch_assoc($result)) 
									{
										echo "<h2>".$row['heading']."</h2>";
										echo "<p>".$row['sub_heading']."</p>";
									}
								} 
								else 
								{
									echo "0 results";
								}
							?>
						</header>
						<span class="image"><img src="images/pic01.jpg" alt="" /></span>
					</div>
					<a href="#one" class="goto-next scrolly">Next</a>
				</section>

			<!-- One -->
				<section id="one" class="spotlight style1 bottom">
					<span class="image fit main"><img src="images/pic02.jpg" alt="" /></span>
					<div class="content">
						<div class="container">
							<div class="row">
								<div class="col-4 col-12-medium">
									<header>
										<h2>Long drives with nice variations of cars looks</h2>
										<p>Always stay stylish</p>
									</header>
								</div>
								<div class="col-4 col-12-medium">
									<p>Fluids are the lifeblood of your vehicle. If your mechanic asks you when you last changed your power steering fluid and your answer is “I’m not sure” or “What’s power steering fluid?” you probably need to brush up on the fluids your car uses.</p>
								</div>
								<div class="col-4 col-12-medium">
									<p>Most cars will use the following fluids: engine oil, radiator coolant, automatic transmission fluid, windscreen washer fluid, brake fluid, clutch fluid, power steering fluid, battery electrolyte fluid (distilled water) and possibly more depending on the vehicle type. Check fluids regularly, and replace when needed.</p>
								</div>
							</div>
						</div>
					</div>
					<a href="#two" class="goto-next scrolly">Next</a>
				</section>

			<!-- Two -->
				<section id="two" class="spotlight style2 right">
					<span class="image fit main"><img src="images/pic03.jpg" alt="" /></span>
					<div class="content">
						<header>
							<h2>AGENCIES WE WORK WITH</h2>
							<p>Dealer with trust</p>
						</header>
						<p>Sd Car saloon modifies vehicles to meet US DOT, EPA, and CARB standards. Sd is a registered importer with the Department of Transportation and an Independent commercial importer with the Environmental protection agency and a recognized modifier for the California Air Resources Board. Sd is able to facilitate the importation process for vehicles that were not made to comply with Malaysian regulations.</p>
						<ul class="actions">
							<li><a href="#" class="button">Learn More</a></li>
						</ul>
					</div>
					<a href="#three" class="goto-next scrolly">Next</a>
				</section>

			<!-- Three -->
				<section id="three" class="spotlight style3 left">
					<span class="image fit main bottom"><img src="images/pic04.jpg" alt="" /></span>
					<div class="content">
						<header>
							<h2>Interdum felis blandit praesent sed augue</h2>
							<p>Accumsan integer ultricies aliquam vel massa sapien phasellus</p>
						</header>
						<p>Feugiat accumsan lorem eu ac lorem amet ac arcu phasellus tortor enim mi mi nisi praesent adipiscing. Integer mi sed nascetur cep aliquet augue varius tempus lobortis porttitor lorem et accumsan consequat adipiscing lorem.</p>
						<ul class="actions">
							<li><a href="#" class="button">Learn More</a></li>
						</ul>
					</div>
					<a href="#four" class="goto-next scrolly">Next</a>
				</section>

			<!-- Four -->
				<section id="four" class="wrapper style1 special fade-up">
					<div class="container">
						<header class="major">
							<h2>Accumsan sed tempus adipiscing blandit</h2>
							<p>Iaculis ac volutpat vis non enim gravida nisi faucibus posuere arcu consequat</p>
						</header>
						<div class="box alt">
							<div class="row gtr-uniform">
								<section class="col-4 col-6-medium col-12-xsmall">
									<span class="icon solid alt major fa-chart-area"></span>
									<h3>Car Interiors</h3>
									<p>Interior modification comes with many aspects that needs to go under consideration. With intricate detailing involved the handling of these controls should be done with diligence.</p>
								</section>
								<section class="col-4 col-6-medium col-12-xsmall">
									<span class="icon solid alt major fa-comment"></span>
									<h3>Car Exteriors</h3>
									<p>No body gives a look inside the car if the outside does not appeal that much. Even the best of interior modification does not work if the outer side is not that upgraded and new.</p>
								</section>
								<section class="col-4 col-6-medium col-12-xsmall">
									<span class="icon solid alt major fa-flask"></span>
									<h3>Car paints</h3>
									<p>Your vehicle’s paint is often the first thing people notice—especially if the finish is chipped, scratched, or damaged. AV Car Designs is home to the latest paint-matching technology, the industry’s top talent, and the very best products to restore your paint job’s original look and feel..</p>
								</section>
								<section class="col-4 col-6-medium col-12-xsmall">
									<span class="icon solid alt major fa-paper-plane"></span>
									<h3>Car sunroof</h3>
									<p>One of the coolest feature in a luxury car is sunroof and it does not come with all of the luxury car models only the highest rated cars and the highest model car of a company has it. </p>
								</section>
								<section class="col-4 col-6-medium col-12-xsmall">
									<span class="icon solid alt major fa-file"></span>
									<h3>Tyres & Alloys</h3>
									<p>Tyres And Alloy wheels are the feet of your Car which take you to places so it should taken care off more than the rest. With different type of Tyres and alloy wheels that have different benefit,</p>
								</section>
								<section class="col-4 col-6-medium col-12-xsmall">
									<span class="icon solid alt major fa-lock"></span>
									<h3>Automation & Hydraulics</h3>
									<p>It is the reason why your car contains power and control. A system which is a reason of every vehicle so it should be handled with utmost care and concentration. </p>
								</section>
							</div>
						</div>
						<footer class="major">
							<ul class="actions special">
								<li><a href="#" class="button">Learn more about SD</a></li>
							</ul>
						</footer>
					</div>
				</section>

			<!-- Five -->
				<section id="five" class="wrapper style2 special fade">
					<div class="container">
						<header>
							<h2>Drop your email</h2>
							<p>Car dressers will contact you soon</p>
						</header>
						<form method="post" action="getCustomers.php" class="cta">
							<div class="row gtr-uniform gtr-50">
								<div class="col-8 col-12-xsmall"><input type="email" name="email" id="email" placeholder="Your Email Address" /></div>
								<div class="col-4 col-12-xsmall"><input type="submit" value="Get Started" class="fit primary" /></div>
							</div>
						</form>
					</div>
				</section>

			<!-- Footer -->
				<footer id="footer">
					<ul class="icons">
						<li><a href="#" class="icon brands alt fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="#" class="icon brands alt fa-facebook-f"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon brands alt fa-linkedin-in"><span class="label">LinkedIn</span></a></li>
						<li><a href="#" class="icon brands alt fa-instagram"><span class="label">Instagram</span></a></li>
						<li><a href="#" class="icon brands alt fa-github"><span class="label">GitHub</span></a></li>
						<li><a href="#" class="icon solid alt fa-envelope"><span class="label">Email</span></a></li>
					</ul>
					<ul class="copyright">
						<li>&copy; SD Car Saloon.  All rights reserved. <?php echo date("Y"); ?> </li>
						
						<!-- <li>Design: <a href="http://html5up.net">HTML5 UP</a></li> -->
					</ul>
				</footer>

		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>