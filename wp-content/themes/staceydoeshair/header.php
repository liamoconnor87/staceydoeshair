<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <?php wp_head(); ?>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="author" content="webDevLiam - Liam O'Connor - Stacey Chamberlain - Stacey Does Hair">
    <meta name="description"
      content="A Hairstylist based in Canvey Island, Essex. Operating around Essex.">
    <meta name="keywords"
      content="Essex, Canvey Island, Southend, Southend-on-sea, Benfleet, Leigh-on-Sea, Chelmsford, Wickford">

    <!-- FAVICON -->
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico">
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">

    <!-- GOOGLE FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

    <!-- FONT AWESOME -->
    <script src="https://kit.fontawesome.com/fd5b45d410.js" crossorigin="anonymous"></script>

    <!-- JQUERY CDN -->
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>


    <title>Stacey Does Hair | Hair Stylist based in Essex, Canvey Island.</title>

  </head>
  <body>

    <!-- NAVIGATION BAR-->
  	<div class="sub-menu">
  		<div class="nav-menu">
  			<h3 class="pointer uppercase price-list-page link-hover"><span class="title-link">Price List</span></h3>
  			<h3 class="pointer uppercase contact-page link-hover"><span class="title-link">Contact</span></h3>
  		</div>
  	</div>

  	<nav class="navbar">

  		<div id="open-btn" class="menu-buttons pointer">
  			<i class="fas fa-bars"></i>
  		</div>

  		<div id="close-btn"  class="menu-buttons pointer">
  			<i class="fas fa-times"></i>
  		</div>

  		<div class="logo">
  			<a class="index-page pointer"><img src=<?php echo get_theme_file_uri("/assets/img/staceydoeshair_logo.png"); ?>></a>
  		</div>

  	</nav>
