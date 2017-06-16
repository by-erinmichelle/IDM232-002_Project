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

<body>

<body>

	<div class="container">
	
		<header class="header">

			<div class="logo ff-bold"><a href="index.html">erin michelle</a></div>

			<img id="hamburger" src="../graphics/hamburger.png" alt="menu">	

		</header>

		<main>
		