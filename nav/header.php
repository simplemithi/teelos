<?php
	if ($_SERVER['SERVER_NAME'] == "localhost") {
		$root_path = "/~SimpleMithi/tishan";
	} else {
		$root_path = "";
	}
	include($root_path.'/db/db_connect.php');
?>
<!DOCTYPE html>
<html>
	<head>
		<title> Teelo's </title>

		<meta charset="utf-8">
		<meta name="description" content="Finest sri lankan chilli paste for all you taste buds">
        <meta name="keywords" content="chilli paste, maldive fish, teelos, sri lankan food, indian food, spicy, chilli dishes">
        <meta name="author" content="SimpleMithi">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

		<!-- Add icon library -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<!-- 1. Link to jQuery (1.8 or later), -->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> <!-- 33 KB -->

		<!-- fotorama.css & fotorama.js. -->
		<link  href="http://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.css" rel="stylesheet"> <!-- 3 KB -->
		<script src="http://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.js"></script> <!-- 16 KB -->

		<link rel="stylesheet" type="text/css" href="<?php echo $root_path?>/assets/css/main.css">
	</head>

	<!-- <body background="https://powerpoint.crystalgraphics.com/template/bdyeyfzgg_largest.jpg"> -->
	<!-- <body style="background-image: url('assets/images/background.jpg'); background-size:cover"> -->
	<!-- <body style="background-image: url('assets/images/background_1.jpg'); background-size:cover"> -->
	<body>
		<div class="wrapper">

			<div class="header_div col-sm-12 col-md-12 col-lg-12 text-center" style="z-index:1">
				<div class="topnav" id="myTopnav">
					<a href="<?php echo $root_path?>/" class="header_logo_a">
						<img src="<?php echo $root_path?>/assets/images/logo.jpg" class="header_logo pull-left" alt="logo" title="Teelo's Logo" style="height:45px; width:85px; padding:2px; margin-left:0px; border-radius:5px; margin-top:5px"/>
					</a>
				
					<a href="<?php echo $root_path?>/contact"><i class="fa fa-envelope"></i> Contact Us</a>
					<a href="<?php echo $root_path?>/products"><i class="fa fa-cutlery"></i> Products</a>
					<a href="<?php echo $root_path?>/about"><i class="fa fa-users"></i> About Us</a>
					<a href="<?php echo $root_path?>/"><i class="fa fa-home"></i> Home</a>
					<a href="javascript:void(0);" class="icon" onclick="mob_nav_collapse()">
						<i class="fa fa-bars fa-2x green"></i>
					</a>
				</div>
			</div>
			<hr class="seperator" style="z-index:1" />