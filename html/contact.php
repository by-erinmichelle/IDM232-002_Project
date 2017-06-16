<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="initial-scale=1.0, width=device-width"/>
	<title>Contact | Erin Michelle</title>
	<link rel="stylesheet" type="text/css" href="../css/normalize.css">
	<link rel="stylesheet" type="text/css" href="../css/stylesheet.css">
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


				<p class="contact-heading ff-bold">Let's be friends.</p>
				
				<p class="contact-text ff-regular">Interested in working with me? Want to meet up and discuss corgis? Whatever the reason, send me a message!</p>

					<form action="form_processing.php" method="post">

						<fieldset>

							<label class="ff-regular">name</label>
							<br>
							<input type="text" name="name" class="text-input">

							<label class="ff-regular">email</label>
							<br>
							<input type="text" name="email" class="text-input">

							<label class="ff-regular">message</label>
							<br>
							<textarea name="message" class="text-input"></textarea>

							<input type="submit" value="SEND" class="send ff-bold">

						</fieldset>

					</form>

<?php 
include "_footer.php";
?>