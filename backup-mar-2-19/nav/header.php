<?php
	if ($_SERVER['SERVER_NAME'] == "localhost") {
		$root_path = "/tishan";
	} else {
		$root_path = "";
	}
?>
<html>
	<head>
		<title> Teelo's </title>

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

		<!-- Add icon library -->
		<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

		<!-- 1. Link to jQuery (1.8 or later), -->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> <!-- 33 KB -->

		<!-- fotorama.css & fotorama.js. -->
		<link  href="http://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.css" rel="stylesheet"> <!-- 3 KB -->
		<script src="http://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.js"></script> <!-- 16 KB -->

		<link rel="stylesheet" type="text/css" href="<?php echo $root_path?>/assets/css/main.css">
	</head>

	
<?php //if (basename($_SERVER[REQUEST_URI]) == "index") { ?>
	<!-- <body background="<?php echo $root_path?>/assets/images/background_img.jpg"> -->
<?php //} else {?>
	<body background="<?php echo $root_path?>/assets/images/back.jpg">
<?php //} ?>
	<div class="header_div col-sm-12 col-md-12 col-lg-12 text-center">
		<!-- <img src="https://5startuning.com/wp-content/uploads/Coming-Soon-Banner.png" /> -->

		<nav class="navbar navbar-default">
			<div class="container-fluid">
				<div class="navbar-header">
					<!-- <a class="navbar-brand" href="#">TCP</a> -->
					<img src="<?php echo $root_path?>/assets/images/logo.jpg" class="header_logo" alt="logo" title="Teelo's Logo" style="height:50px; width:100px; padding:2px; margin-left:0px;"/>
				</div>
				<ul class="nav navbar-nav">
					<li class="active"><a href="<?php echo $root_path?>/index">Home</a></li>
					<li><a href="#">About Us</a></li>
					<li><a href="<?php echo $root_path?>/products">Products</a></li>
					<li><a href="<?php echo $root_path?>/contact">Contact Us</a></li>
					<!-- <li><img src="/tishan/assets/images/logo.jpg" style="height:50px; width:100px;"/></li> -->
				</ul>
			</div>
		</nav>
	</div>