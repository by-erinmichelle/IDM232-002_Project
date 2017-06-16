<?php 

require_once'connect.php';

if(isset($_GET['id'])) {
	$id = $_GET['id'];
}else{
	header("Location: http://byerinmichelle.com/IDM232/html/");
}

$query = "SELECT * FROM project_page WHERE id = '{$id}' LIMIT 1";

$result = mysqli_query($connection, $query);
if(!$result) {
	die("Database query failed.");
}

//find total number of records
$queryrows = "SELECT * FROM project_page";
$resultrows = mysqli_query($connection, $queryrows);
$totalrows = mysqli_num_rows($resultrows);
	
while ($row = mysqli_fetch_assoc($result)) {
	$id = $row['id'];
	$title = $row['title'];
	$desc = $row['desc'];
	$infophoto = $row['infophoto'];
	$infophoto_array = explode(",", $infophoto);
	$nextproject = $row['nextproject'];
	$category = $row['category'];
	
//if id is greater than or equal to 1 & less than the total # of records, add 1 to id
	if ($id>=1 && $id<$totalrows) {
		$nextproject_id = $id + 1;
//if id equals total # of records, start from the beginning of ids!
	} elseif ($id=$totalrows) {
		$nextproject_id = 1;
	}

	// echo "<pre>";
	// print_r($row);
	// echo "</pre>";
};

mysqli_free_result($result);
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="initial-scale=1.0, width=device-width"/>
	<title><?php echo $title . '-' . $category; ?> | Erin Michelle</title>
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
						<li class="current-page"><a href="portfolio.php">portfolio</a>
						<div class="subnav"> 
									<ul>
						<li><a href="projects.php?category=Graphic">graphic</a></li>
						<li><a href="projects.php?category=Web">web</a></li>
						<li><a href="projects.php?category=Photography">photography</a></li>
						<li><a href="projects.php?category=Art">art</a></li>
									</ul>
							</div></li>
							<li class="unactive"><a href="about.php">about</a></li>
						<li class="unactive"><a href="contact.php">contact</a></li>
					</ul>
				</div>

			<!--print the title of the project-->
			<p class="info-heading ff-bold"><?php echo $title; ?></p>
			
			<!--print the description of the project-->
			<p class="info-text ff-regular"><?php echo $desc; ?></p>

			<div class="project-work">

			<div class="project-work-content">

			<?php
				
				// function build_image($infophoto_array) {

				// 	echo '<img srcset="'.$infophoto_array.'320.jpg 320w, '.$infophoto_array.'500.jpg 500w, '.$infophoto_array.'640.jpg 640w, '.$infophoto_array.'900.jpg 900w">';

				// }

				for ($i=0; $i < count($infophoto_array); $i++) {

					//loop through array and echo each photo into a div w diff class
          echo "<div class=\"photo_{$i}\">";
          echo '<img srcset="'.$infophoto_array[$i].'320.jpg 320w, '.$infophoto_array[$i].'500.jpg 500w, '.$infophoto_array[$i].'640.jpg 640w, '.$infophoto_array[$i].'900.jpg 900w">';
          // echo build_image($infophoto_array[$i]);
          echo "</div>";
        
				}

			?>

			</div>			
						
		</div>

 <div class="next-project">

			<p class="info-heading ff-bold">Next Project</p>
	
			<?php
			$url_page ="project-info.php";
			$param = $nextproject_id;

			$url = rawurlencode($url_page);
			$url.="?" . "id=". urlencode($param);
			

			$build = "<p class='next ff-regular'><a href=\"{$url}\">" .$nextproject.' ></a></p>';
			echo $build;
			?>

</div>

<?php 
include "_footer.php";
?>
