<?php/*
 session_start();
 if(empty($_SESSION['email'])){
  //echo "ว่าง";
  echo"<meta http-equiv='refresh' content='0;URL=form_home'>";
}else{
  //echo $_SESSION['firstname'];
  //echo "ไม่ว่าง";*/
?>

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
						<span class="menu"><img src="<?= base_url();?>/dist/images/menu.png" alt=""/></span>
						<nav class="cl-effect-11" id="cl-effect-11">
							<ul class="nav1">
								<li><a class="active" href="<?= base_url();?>" data-hover="HOME">HOME</a></li>
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
					<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
					aria-hidden="true">
					<div class="modal-dialog modal-lg">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
									×</button>
									<h4 class="modal-title" id="myModalLabel">
										SignUp </h4>
									</div>
									<div class="modal-body">
										<div class="row">
											<div class="col-md-2">

											</div>
											<div class="col-md-8" style="border-right: 1px dotted #C2C2C2;padding-right: 30px;">
												<!-- Nav tabs -->

												<!-- Tab panes -->
												<div class="tab-content">
													<div class="tab-pane active" id="Login">
														<form role="form" class="form-horizontal">
															<div class="form-group">

																<div class="col-md-6">
																	<label for="firstname" class="col-sm-1 control-label">
																		Firstname:</label><br><br>
																		<div class="col-sm-11">
																			<input type="email" class="form-control" id="email1" placeholder="First name" />
																		</div>
																	</div>
																	<div class="col-md-6">
																		<label for="surname" class="col-sm-1 control-label">
																			Surname:</label><br><Br>
																			<div class="col-sm-11">
																				<input type="email" class="form-control" id="email1" placeholder="Surname" />
																			</div>
																		</div>

																	</div>
																	<div class="form-group">
																		<label for="email" class="col-sm-1 control-label">
																			Email:</label><br><br>
																			<div class="col-sm-11">
																				<input type="email" class="form-control" id="email1" placeholder="Email" />
																			</div>
																		</div>
																		<div class="form-group">
																			<label for="exampleInputPassword1" class="col-sm-1 control-label">
																				Password:</label><br><br>
																				<div class="col-sm-11">
																					<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" />
																				</div>
																			</div>
																			<div class="form-group">
																				<label for="exampleInputPassword1" class="col-sm-4 control-label">
																					Re-enter password:</label><br><br>
																					<div class="col-sm-11">
																						<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Re-enter password" />
																					</div>
																				</div>
																				<div class="row">
																					<div class="col-sm-8">
																					</div>
																					<div class="col-sm-4">
																						<button type="submit" class="btn btn-success btn-sm">
																							SignUp</button>
																							<button type="submit" class="btn btn-danger btn-sm">
																								Cencel</button>
																							</div>
																						</div>
																					</form>
																				</div>

																			</div>

																		</div>
																		<div class="col-md-2">

																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
													aria-hidden="true">
													<div class="modal-dialog modal-lg">
														<div class="modal-content">
															<div class="modal-header">
																<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
																	×</button>
																	<h4 class="modal-title" id="myModalLabel1">
																		SignIn </h4>
																	</div>
																	<div class="modal-body">
																		<div class="row">
																			<div class="col-md-2">

																			</div>
																			<div class="col-md-8" style="border-right: 1px dotted #C2C2C2;padding-right: 30px;">
																				<!-- Nav tabs -->

																				<!-- Tab panes -->
																				<div class="tab-content">
																					<div class="tab-pane active" id="Login">
																						<form role="form" class="form-horizontal">

																							<div class="form-group">
																								<label for="email" class="col-sm-1 control-label">
																									Email:</label><br><br>
																									<div class="col-sm-11">
																										<input type="email" class="form-control" id="email1" placeholder="Email" />
																									</div>
																								</div>
																								<div class="form-group">
																									<label for="exampleInputPassword1" class="col-sm-1 control-label">
																										Password:</label><br><br>
																										<div class="col-sm-11">
																											<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" />
																										</div>
																									</div>

																									<div class="row">
																										<div class="col-sm-8">
																										</div>
																										<div class="col-sm-4">
																											<button type="submit" class="btn btn-success btn-sm">
																												SignIn</button>
																												<button type="submit" class="btn btn-danger btn-sm">
																													Cencel</button>
																												</div>
																											</div>
																										</form>
																									</div>

																								</div>

																							</div>
																							<div class="col-md-2"></div>
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>

																		<div class="clearfix"></div>
																	</div>
																	<div class="banner-info">
																		<script src="<?= base_url();?>/dist/js/responsiveslides.min.js"></script>
																		<script>
									// You can also use "$(window).load(function() {"
									$(function () {
									 // Slideshow 4
									 $("#slider3").responsiveSlides({
									 	auto: true,
									 	pager: false,
									 	nav: false,
									 	speed: 500,
									 	namespace: "callbacks",
									 	before: function () {
									 		$('.events').append("<li>before event fired.</li>");
									 	},
									 	after: function () {
									 		$('.events').append("<li>after event fired.</li>");
									 	}
									 });
									});
								</script>

							</div>
						</div>
					</div>
					<!-- //banner -->
					<!-- banner-pos -->
