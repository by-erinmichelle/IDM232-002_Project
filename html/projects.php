<?php 

//connect to database
require_once('connect.php');

$category = $_GET['category'];
$query = "SELECT * FROM project_page WHERE category = '$category'";

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
	<title><?php echo $category; ?> | Erin Michelle</title>
	<link rel="stylesheet" type="text/css" href="../css/normalize.css">
	<link rel="stylesheet" type="text/css" href="../css/stylesheet.css">
</head>

				<?php
				include "_header.php";
				?>

			<div class="subnav-large ff-bold"> 
				<ul>
						<li><a href="projects.php?category=Graphic">graphic</a></li>
						<li><a href="projects.php?category=Web">web</a></li>
						<li><a href="projects.php?category=Photography">photography</a></li>
						<li><a href="projects.php?category=Art">art</a></li>
				</ul>
			</div>
							
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


			<div class="featured-work">

			<div class="featured-work-content">

			<?php 
			while($row = mysqli_fetch_assoc($result))
			{
			$id = $row['id'];
			$photo = $row['photo'];
			$photo_array = explode(",", $photo);

			$url_page ="project-info.php";
			$param = $row['id'];

			$url = rawurlencode($url_page);
			$url.="?" . "id=". urlencode($param);
			
			for ($i=0; $i<count($photo_array); $i++) {
				$build = "<a href=\"{$url}\">";
				$build .= '<img srcset="'.$photo_array[$i].'320.jpg 320w, '.$photo_array[$i].'500.jpg 500w, '.$photo_array[$i].'640.jpg 640w, '.$photo_array[$i].'900.jpg 900w" sizes="(min-width: 59.94rem) 30vw, 
	           (min-width: 37.44rem) 45vw">';
				echo $build;
			}
		
			};
			mysqli_free_result($result);

			?>

		</div>			
						
		</div><!--end featured work-->

<?php 
include "_footer.php";
?>

