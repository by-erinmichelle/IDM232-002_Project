<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="initial-scale=1.0, width=device-width"/>
	<title>Thank You | Erin Michelle</title>
	<?php echo "<link rel='stylesheet' type='text/css' href='../css/normalize.css'>"?>
	<?php echo "<link rel='stylesheet' type='text/css' href='../css/stylesheet.css'>"?>
</head>

<?php
include "_header.php";
?>
			
				<div id="nav-list" class="visually-hidden nav ff-bold">
					<ul>
						<li class="unactive"><a class="portfolio" href="portfolio.php">portfolio</a>
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
						<li class="current-page"><a href="contact.php">contact</a></li>
					</ul>
				</div>

				<div class="thanks ff-regular">
					<?php 
						$name = $_POST['name']; ?>
					<p class="thanks-text">Thank you, <?php echo $name; ?><br>
					Your message has been sent! I'll get back to you shortly.</p>			
				</div>

	<?php
	include "_footer.php";
	?>