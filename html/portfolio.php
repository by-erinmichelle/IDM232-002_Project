<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="initial-scale=1.0, width=device-width"/>
	<title>Portfolio | Erin Michelle</title>
	<link rel="stylesheet" type="text/css" href="../css/normalize.css">
	<link rel="stylesheet" type="text/css" href="../css/stylesheet.css">
</head>

				<?php
				include "_header.php";
				?>

<div id="nav-list" class="visually-hidden nav ff-bold">
					<ul>
						<li class="current-page"><a class="portfolio" href="portfolio.php">portfolio</a>
								<div class="subnav"> 
									<ul>
										<li><a href="projects.php?category=Graphic">graphic</a></li>
										<li><a href="projects.php?category=Web">web</a></li>
										<li><a href="projects.php?category=Photography">photography</a></li>
										<li><a href="projects.php?category=Art">art</a></li>
									</ul>
							</div>
						</li>
						<li class="unactive"><a href="about.php">about</a></li>
						<li class="unactive"><a href="contact.php">contact</a></li>
					</ul>
				</div>


			<div class="subnav-portfolio ff-bold"> 
				<ul>
				
						<li><a href="projects.php?category=Graphic">graphic</a></li>
						<li><a href="projects.php?category=Web">web</a></li>
						<li><a href="projects.php?category=Photography">photography</a></li>
						<li><a href="projects.php?category=Art">art</a></li>

					<!-- <li><a href="graphic.php">graphic</a></li>
					<li><a href="web.php">web</a></li>
					<li><a href="photography.php">photography</a></li>
					<li><a href="art.php">art</a></li> -->

				</ul>
			</div>

<?php 
include "_footer.php";
?>
