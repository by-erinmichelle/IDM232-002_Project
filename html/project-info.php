<?php 

require_once'connect.php';

if(isset($GET['id'])) {
	$id = $_GET['id'];
}else{
	header("Location: http://byerinmichelle.com/IDM232/html/");
}

$query = "SELECT * FROM project_page WHERE id = '{$id}' LIMIT 1";

$result = mysqli_query($connection, $query);
if(!$result) {
	die("Database query failed.");
}

//THIS WONT WORK. WHYYYYYY
// while ($row = mysqli_fetch_assoc($result)) {
// 	$title = $row['title'];
// 	$desc = $row['desc'];
// 	$photo = $row['photo'];
// 	$photo .= $row['infophoto1'];
// 	$id = $row['id'];

// 	echo "<pre>";
// 	print_r($row);
// 	echo "</pre>";

// };
//mysqli_free_result($result);

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="initial-scale=1.0, width=device-width"/>
	<title>MOMENTS-PHOTOGRAPHY | ERIN MICHELLE</title>
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

			<p class="info-heading ff-bold"> <?php echo $row['title']; ?> </p>

			<p class="info-text ff-regular"><?php echo $desc; ?></p>

			<div class="project-work">

			<div class="project-work-content">

			<picture>

			<source srcset="../photography/moment01-500.jpg 500w,
				../photography/moment01-640.jpg 640w,
				../photography/moment01-900.jpg 900w"
	              sizes="(min-width: 59.94rem) 30vw,
	              (min-width: 37.44rem) 45vw"
	              type="image/jpg">
				<img srcset="../photography/moment01-160.jpg 160w,
				../photography/moment01-320.jpg 320w,
				../photography/moment01-500.jpg 500w, 
				../photography/moment01-640.jpg 640w,
				../photography/moment01-900.jpg 900w"
	           sizes="(min-width: 59.94rem) 30vw, 
	           (min-width: 37.44rem) 45vw"
	           src="../photography/moment01-160.jpg" 
	           alt="moment">
	
			</picture>	

	    <picture class="project-small left">

			<source srcset="../photography/moment02-500.jpg 500w,
				../photography/moment02-640.jpg 640w,
				../photography/moment02-900.jpg 900w"
	              sizes="(min-width: 59.94rem) 30vw,
	              (min-width: 37.44rem) 45vw"
	              type="image/jpg">
				<img srcset="../photography/moment02-160.jpg 160w,
				../photography/moment02-320.jpg 320w,
				../photography/moment02-500.jpg 500w, 
				../photography/moment02-640.jpg 640w,
				../photography/moment02-900.jpg 900w"
	           sizes="(min-width: 59.94rem) 30vw, 
	           (min-width: 37.44rem) 45vw"
	           src="../photography/moment02-160.jpg" 
	           alt="moment">

	    </picture>   

	    <picture class="project-small right">

			<source srcset="../photography/moment03-500.jpg 500w,
				../photography/moment03-640.jpg 640w,
				../photography/moment03-900.jpg 900w"
	              sizes="(min-width: 59.94rem) 30vw,
	              (min-width: 37.44rem) 45vw"
	              type="image/jpg">
				<img srcset="../photography/moment03-160.jpg 160w,
				../photography/moment03-320.jpg 320w,
				../photography/moment03-500.jpg 500w, 
				../photography/moment03-640.jpg 640w,
				../photography/moment03-900.jpg 900w"
	           sizes="(min-width: 59.94rem) 30vw, 
	           (min-width: 37.44rem) 45vw"
	           src="../photography/moment03-160.jpg" 
	           alt="moment">

	    </picture>   

	    <picture>

			<source srcset="../photography/moment04-500.jpg 500w,
				../photography/moment04-640.jpg 640w,
				../photography/moment04-900.jpg 900w"
	              sizes="(min-width: 59.94rem) 30vw,
	              (min-width: 37.44rem) 45vw"
	              type="image/jpg">
				<img srcset="../photography/moment04-160.jpg 160w,
				../photography/moment04-320.jpg 320w,
				../photography/moment04-500.jpg 500w, 
				../photography/moment04-640.jpg 640w,
				../photography/moment04-900.jpg 900w"
	           sizes="(min-width: 59.94rem) 30vw, 
	           (min-width: 37.44rem) 45vw"
	           src="../photography/moment04-160.jpg" 
	           alt="moment">

	    </picture>       

			</div>			
						
		</div><!--end project work-->

		<div class="next-project">

			<p class="info-heading ff-bold">Next Project</p>
			<p class="info-text ff-regular">Portraits ></p>

		</div>

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
