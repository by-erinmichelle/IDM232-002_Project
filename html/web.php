<?php 
require_once('connect.php');

$query = "SELECT * FROM project_page LIMIT 3 OFFSET 8";
//only give 6 results, start at record 15
$result = mysqli_query($connection, $query);
if (!$result) {
	die ("Database query failed.");
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="initial-scale=1.0, width=device-width"/>
	<title>WEB | ERIN MICHELLE</title>
	<link rel="stylesheet" type="text/css" href="../css/normalize.css">
	<link rel="stylesheet" type="text/css" href="../css/stylesheet.css">
</head>

<body>

	<div class="container">

		<header class="header">

			<div class="logo ff-bold"><a href="index.html">erin michelle</a></div>

			<img id="hamburger" src="../graphics/hamburger.png" alt="menu">	

		</header>

		<main>

			<div class="subnav-large ff-bold"> 
				<ul>
					<li><a href="graphic.php">graphic</a></li>
					<li><a href="web.php">web</a></li>
					<li><a href="photography.php">photography</a></li>
					<li><a href="art.php">art</a></li>
				</ul>
			</div>
							
				<div id="nav-list" class="visually-hidden nav ff-bold">
					<ul>						
						<li class="current-page"><a href="portfolio.html">portfolio</a>
						<div class="subnav"> 
									<ul>
										<li><a href="graphic.php">graphic</a></li>
										<li><a href="web.php">web</a></li>
										<li><a href="photography.php">photography</a></li>
										<li><a href="art.php">art</a></li>
									</ul>
							</div></li>
							<li class="unactive"><a href="about.html">about</a></li>
						<li class="unactive"><a href="contact.html">contact</a></li>
					</ul>
				</div>

			<div class="featured-work">

			<div class="featured-work-content">

			<?php 
			while($row = mysqli_fetch_assoc($result))
			{
			$url_page ="project-info.php";
			$param = $row['id'];

			$url = rawurlencode($url_page);
			$url.="?" . "id=". urlencode($param);

			$build = "<a href=\"{$url}\">";
			$build .= '<img src="'.$row['photo'].'">';
			echo $build;
			};
			mysqli_free_result($result);
		?>
		

		<!--	<picture>
			sizes: how many pixels the browser needs
			w: how many pixels each of the sources has
			sizes="[media query] [length],
			media query] [length],etc…[default length]"

				<source srcset="../web/zodiac-500.jpg 500w,
				../web/zodiac-640.jpg 640w,
				../web/zodiac-900.jpg 900w"
	              sizes="(min-width: 59.94rem) 30vw,
	              (min-width: 37.44rem) 45vw"
	              type="image/jpg">
				<img srcset="../web/zodiac-160.jpg 160w,
				../web/zodiac-320.jpg 320w,
				../web/zodiac-500.jpg 500w, 
				../web/zodiac-640.jpg 640w,
				../web/zodiac-900.jpg 900w"
	           sizes="(min-width: 59.94rem) 30vw, 
	           (min-width: 37.44rem) 45vw"
	           src="../web/zodiac-160.jpg" 
	           alt="zodiac">

			</picture>

			<video autoplay loop>

				<source src="../web/laughteryoga.mp4" type="video/mp4">
			
			</video>	

			<video autoplay loop>

				<source src="../web/dancemag.mp4" type="video/mp4">
			
			</video>	-->

		</div>
						
		</div><!--end featured work-->

		</main>

		<footer>

			<div class="footer-info">
				<div class="social">
					<a href="https://www.facebook.com/erin.wiegman"><img src="../graphics/fb.png" alt="social"></a>
					<a href="https://www.linkedin.com/in/erinwiegman/"><img src="../graphics/li.png" alt="social"></a>
				</div>

				<p class="ff-regular">&copy; 2017 ERIN WIEGMAN</p>
			</div>

			<picture class="footer-design">
				<source media="(min-width: 450px)"
								srcset="../graphics/footer-550.png 550w,
								../graphics/footer-650.png 650w,
								../graphics/footer-768.png 768w,
								../graphics/footer-900.png 900w,
								../graphics/footer-1500.png 1500w"
								sizes="100vw">
		    <img srcset="../graphics/footer-320.png 320w"
		         sizes="100vw"
		         src="../graphics/footer-320.png"
		         alt="footer">
			</picture>

		</footer>

	</div>
	
	<script src="../js/main.js" type="text/javascript"></script>
	
</body>

</html>