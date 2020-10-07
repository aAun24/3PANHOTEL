<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
	<title>3PAN HOTEL</title>
	<!-- for-mobile-apps -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="3PAN HOTEL Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
		<!-- //for-mobile-apps -->
		<link href="<?= base_url();?>/dist/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
		<link href="<?= base_url();?>/dist/css/style.css" rel="stylesheet" type="text/css" media="all" />
		<link href="<?= base_url();?>/dist/css/chocolat.css" rel="stylesheet">
		<!-- js -->
		<script src="<?= base_url();?>/dist/js/jquery-1.11.1.min.js"></script>
		<!-- //js -->
		<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
		<!-- start-smoth-scrolling -->
		<script type="text/javascript" src="<?= base_url();?>/dist/js/move-top.js"></script>
		<script type="text/javascript" src="<?= base_url();?>/dist/js/easing.js"></script>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
		</script>
		<style>
			img{
				width:200px;
				height:200px;
			}
		</style>
		<!-- start-smoth-scrolling -->
	</head>
	<body>
		<!-- banner -->
		<div class="banner">
			<div class="container">
				<div class="header-nav">
					<div class="logo">
						<h1><a href="<?= base_url();?>"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>3PAN HOTEL</a></h1>
					</div>
					<div class="navigation">
						<span class="menu"><img src="<?= base_url();?>/dist/images/menu.png" alt=""/ style="width:30px;height:30px"></span>
						<nav class="cl-effect-11" id="cl-effect-11">
							<ul class="nav1">
								<li><a class="active" href="<?= base_url();?>" data-hover="HOME">HOME</a></li>
								<li><a href="<?= base_url();?>/index.php/welcome/form_searchRoom" data-hover="BOOKING">BOOKING</a></li>
								<li><a href="<?= base_url();?>/index.php/welcome/about" data-hover="ABOUT">ABOUT</a></li>
								<li><a href="<?= base_url();?>/index.php/welcome/contact" data-hover="CONTACT">CONTACT</a></li>
								<li><a data-toggle="modal" data-target="#myModal">SignUp</a></li>
								<li><a data-toggle="modal" data-target="#myModal1">SignIn</a></li>
							</ul>
						</nav>
						<!-- script for menu -->
						<script> 
							$( "span.menu" ).click(function() {
								$( "ul.nav1" ).slideToggle( 300, function() {
						 // Animation complete.
						});
							});
						</script>
						<!-- //script for menu -->

					</div>