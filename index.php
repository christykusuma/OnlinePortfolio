<!DOCTYPE html>
<html>
<head>
	<title>Christy Kusuma</title>
	<link rel="stylesheet" type="text/css" href="default.css">
	<meta charset="utf-8">
	<!-- <meta http-equiv="refresh" content="3" > -->
	<link href="https://fonts.googleapis.com/css?family=Barlow+Semi+Condensed" rel="stylesheet">
	<script src="jquery-3.2.1.min.js"></script>
	<script src="main.js"></script>
</head>
<body>
	<!-- Header section -->
	<header class="header">
		<nav class="nav">
			<ul>
				<li><a href="#about">About</a></li> | 
				<li><a href="#projects">Projects</a></li> |
				<li><a href="#resume">Resume</a></li> |
				<li><a href="#contact">Contact</a></li>
			</ul>
		</nav>
		<div class="job">I am a web developer.</div>
	</header>
	<div class="container">
			<!-- Navbar -->
			<nav class="container-nav">
				<ul>
					<li class="first-nav"><a href="#about">About</a></li> 
					<li>|</li> 
					<li class="second-nav"><a href="#projects">Projects</a></li> 
					<li>|</li> 
					<li class="third-nav"><a href="#resume">Resume</a></li> 
					<li>|</li> 
					<li class="fourth-nav"><a href="#contact">Contact</a></li>
				</ul>
			</nav>

			<!-- About section -->
			<a name="about"></a>
			<div class="about">
				<h1>About Me</h1>
				<img class="christy-pic" src="imgs/christy.png">
				<p class="description">
					Hi, my name is Christy Kusuma and I love learning new things. In the past, I’ve helped multiple ventures as a PR specialist and worked with two venture accelerators at Boston University. I discovered my love for web development while in college and graduated with a cum laude in PR/Advertising and a CAS concentration in Computer Science. I decided to graduate a year early and complement my education by enrolling in a development intensive at New York Code + Design Academy. Currently, I’m looking for a front-end or full stack web development position so I can bring my breadth of experience to bear - creating beautiful intuitive products that the artist in me would be proud of.
				</p>
			</div>

			<!-- Projects section -->
			<a name="projects"></a>
			<div class="projects">
				<h1>Projects</h1>
			<div class="slideshow-container">
					<div class="mySlides fade" style="display: block;">
						<div class="numbertext">1 / 4</div>
						<img src="imgs/fidi_restaurants.jpg" style="width:100%">
						<div class="text">Manhattan FiDi Restaurants</div>
						<div class="text-content">Keep track of all the restaurants you've been to around the Financial District in Manhattan. You will be asked to write what you ordered and rate the restaurant for your own personal records and for others to read. Cataloging them also enables you to grab restaurant information and reviews from Google.</div>
						<div class="text-built">Built with: HTML/CSS, SQL and Ruby Sinatra.</div>
					</div>
					
					<div class="mySlides fade">
						<div class="numbertext">2 / 4</div>
						<img src="imgs/wanderlust.jpg" style="width:100%">
						<div class="text">Wanderlust</div>
					</div>
					
					<div class="mySlides fade">
						<div class="numbertext">3 / 4</div>
						<img src="imgs/game.jpg" style="width:100%">
						<div class="text">Adventure Time Game</div>
						<div class="text-content">
							Help Finn beat the Ice King by shooting miniature versions of Jake the dog at him. Watch out for the ice blasts! A new batch of Ice Kings will come in to replace the ones that have been killed and scores will be counted. Use the arrow keys to move around and the space bar to shoot. 
						</div>
						<div class="text-built">Built with: HTML/CSS and Javascript.</div>
					</div>

					<div class="mySlides fade">
							<div class="numbertext">4 / 4</div>
							<img src="imgs/soundcloud.jpg" style="width:100%">
							<div class="text">SoundCloud Jukebox</div>
						</div>
					
					<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
					<a class="next" onclick="plusSlides(1)">&#10095;</a>
				</div>
					<br>
					
				<div style="text-align:center">
					<span class="dot" onclick="currentSlide(1)"></span> 
					<span class="dot" onclick="currentSlide(2)"></span> 
					<span class="dot" onclick="currentSlide(3)"></span> 
					<span class="dot" onclick="currentSlide(4)"></span> 
				</div>
			</div>

			<!-- Resume section -->
			<a name="resume"></a>
			<div class="resume">
				<h1>Resume</h1>
				<div class="resume-content">
					<img class="lightbulb-pic" src="imgs/lightbulb.png">
				</div>
			</div>

			<!-- Contact section -->
			<a name="contact"></a>
			<div class="contact">
				<h1>Contact Me</h1>
				<form class="contact-form" method="post" action="index.php">
					<table class="contact-details">
						<tr>
							<td class="label">Name</td>
							<td>
								<input type="text" name="sender">
							</td>
						</tr>
						<tr>
							<td class="label">Email</td>
							<td>
								<input type="text" name="senderEmail">
							</td>
						</tr>
						<tr>
							<td class="label">Message</td>
							<td>
								<textarea rows="5" cols="30" name="message"></textarea>
							</td>
						</tr>
						<tr>
							<td></td>
							<td>
								<input type="submit" name="submit" value="Submit">
							</td>
						</tr>

					</table>

				</form>
					
			</div>
	</div>
</body>
</html>