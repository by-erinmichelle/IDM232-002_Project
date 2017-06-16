<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="initial-scale=1.0, width=device-width"/>
	<title>About | Erin Michelle</title>
	<link rel="stylesheet" type="text/css" href="../css/normalize.css">
	<link rel="stylesheet" type="text/css" href="../css/stylesheet.css">
</head>

<?php
include "_header.php";
?>
			
				<div id="nav-list" class="visually-hidden nav ff-bold">
					<ul>						
						<li class="unactive"><a href="portfolio.php">portfolio</a>
						<div class="subnav"> 
									<ul>
										<li><a href="projects.php?category=Graphic">graphic</a></li>
										<li><a href="projects.php?category=Web">web</a></li>
										<li><a href="projects.php?category=Photography">photography</a></li>
										<li><a href="projects.php?category=Art">art</a></li>
									</ul>
							</div></li>
							<li class="current-page"><a href="about.php">about</a></li>
						<li class="unactive"><a href="contact.php">contact</a></li>
					</ul>
				</div>


					<div class="about">


					<p class="intro ff-bold">Hi, I'm Erin.</p>

					<picture>
					<!--image loads at each screen size on refresh-->
							
	              <source srcset="../graphics/me-160.jpg 160w,
	                      			../graphics/me-320.jpg 320w,
	                      			../graphics/me-500.jpg 500w,
				../graphics/me-640.jpg 640w,
				../graphics/me-900.jpg 900w"
	              sizes="(min-width: 37.44rem) 50vw,
	              (min-width: 320px) 50vw"
	              type="image/jpg">
	              <img srcset="../graphics/me-160.jpg 160w,
				../graphics/me-320.jpg 320w,
				../graphics/me-500.jpg 500w, 
				../graphics/me-640.jpg 640w,
				../graphics/me-900.jpg 900w"
	           sizes="(min-width: 37.44rem) 50vw, 
	           (min-width: 320px) 50vw"
	           src="../graphics/me-160.jpg" 
	           alt="me">
	                 
					</picture>
					
					<div class="ff-regular">

					<p class="p-first p-right">I'm 20 years old and I was born and raised in San Diego, California. I decided to move to the east coast to be a student at Drexel University in Philadelphia, PA. I am currently in my sophomore year and majoring in Interactive Digital Media. I'm taking classes that focus on design as well as development of digital media, including web authoring, creative concept design, and user interface design. Outside of class, I work as the Graphic Design Assistant for Drexel's Performing Arts Department.
					</p>

			 		<p class="p-left">Other than being a digital designer, I am also a dancer. I started tap and jazz classes when I was 7 years old. Since then, I've had experience with modern, ballet, musical theatre, Afro-Cuban, Bollywood(my favorite!), hip-hop, Latin, and Irish. I was a member of the San Diego Civic Dance Company for two years before Drexel. Now, I am a member of the Drexel Dance Ensemble.
			 		</p>

					<p class="p-right">When I'm not studying or at dance rehearsal, I love to paint, sketch, and make crafts. I'm constantly looking for new DIY tutorials to do. I love to make things myself because I can look at the finished product and be proud of the work I put into it. While I work on my latest DIY tutorial, I typically blast 90's pop and classic Disney hits, although I also enjoy listening to more mellow indie tunes. Besides crafting, I spend my free time eating mac and cheese and googling pictures of corgis(Google image search "sploot"!).
					</p>

					<p class="p-left">In the future I hope to gain experience working for an agency, working in-house, and working as a freelancer. I would love to work in New York, Philadelphia, or even abroad. I want to build websites for both small businesses and big name companies. I am also really interested in leading a team to build an app and one day managing my own web design studio.

					<br/>View my Resume <a href="../graphics/resume.pdf" target="_blank">here.</a>
					
					</p>

					</div>

					</div>

<?php 
include "_footer.php";
?>