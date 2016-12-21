<?php
session_start();
if(empty($_SESSION['email'])){
  //echo "ว่าง";
  echo"<meta http-equiv='refresh' content='0;URL=#'>";
}else{
  //echo $_SESSION['firstname'];
  //echo "<meta http-equiv='refresh' content='0;URL=index.php/welcome/booking2'>";
      if($_SESSION['status']=='manager'){
        echo"<meta http-equiv='refresh' content='0;URL=sell1'>";
      }
      if($_SESSION['status']=='staff'){
        echo"<meta http-equiv='refresh' content='0;URL=viewPrice'>";
      }
      /*if($_SESSION['status']=='customer'){
        echo"<meta http-equiv='refresh' content='0;URL=index2'>";
      }*/
}
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
<title>3PAN Hotel </title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="3PAN Hotel Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="http://angsila.cs.buu.ac.th/~57160284/887240/Project/dist/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="http://angsila.cs.buu.ac.th/~57160284/887240/Project/dist/css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script src="http://angsila.cs.buu.ac.th/~57160284/887240/Project/dist/js/jquery-1.11.1.min.js"></script>
<!-- //js -->
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
	<!-- start-smoth-scrolling -->
		<script type="text/javascript" src="http://angsila.cs.buu.ac.th/~57160284/887240/Project/dist/js/move-top.js"></script>
		<script type="text/javascript" src="http://angsila.cs.buu.ac.th/~57160284/887240/Project/dist/js/easing.js"></script>
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
<div class="banner page-head">
	<div class="container">
		<div class="header-nav">
			<div class="logo">
				<h1><a href="http://angsila.cs.buu.ac.th/~57160284/887240/Project"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>3PAN HOTEL</a></h1>
			</div>
			<div class="navigation">
				<span class="menu"><img src="http://angsila.cs.buu.ac.th/~57160284/887240/Project/dist/images/menu.png" alt=""/></span>
				<nav class="cl-effect-11" id="cl-effect-11">
							<ul class="nav1">
								<li><a href="http://angsila.cs.buu.ac.th/~57160284/887240/Project/index.php/welcome/booking2" data-hover="HOME">HOME</a></li>
								<!--<li><a href="http://angsila.cs.buu.ac.th/~57160284/887240/Project/index.php/welcome/form_searchRoom2" data-hover="BOOKING">BOOKING</a></li> -->
								<li><a href="http://angsila.cs.buu.ac.th/~57160284/887240/Project/index.php/welcome/detail12" data-hover="ROOM">ROOM</a></li>
								                <li><a href="http://angsila.cs.buu.ac.th/~57160284/887240/Project/index.php/welcome/booking2" data-hover="BOOKING">BOOKING</a></li>
								<li><a class="active" href="http://angsila.cs.buu.ac.th/~57160284/887240/Project/index.php/welcome/file_order_list" data-hover="FILE">FILE</a></li>
								<li><a href="http://angsila.cs.buu.ac.th/~57160284/887240/Project/index.php/welcome/contact2" data-hover="CONTACT">CONTACT</a></li>
								<li><a  data-hover="PROFILE" href="http://angsila.cs.buu.ac.th/~57160284/887240/Project/index.php/welcome/profile2">PROFILE</a></li
								<li><a data-hover="SIGNOUT" href="http://angsila.cs.buu.ac.th/~57160284/887240/Project/index.php/welcome/signout">SIGNOUT</a></li>
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


			<div class="clearfix"></div>
		</div>
	</div>
</div>


<!-- //banner -->
<!--about-->
	<!--start-about-->
	<div class="about">
		<div class="container">
			<div class="about-top heading">
				<h2 class="tittle-one">FILE ORDER</h2>
			</div>	
			<div class="about-bottom">
				<h4>วันที่จองห้องพัก : 07/09/59</h4>
				&nbsp;&nbsp;&nbsp;คลิกดู <a href="http://angsila.cs.buu.ac.th/~57160284/887240/Project/index.php/welcome/file_order2">&nbsp;&nbsp;>>ไฟล์ใบจอง<<</a>
				<h4>วันที่จองห้องพัก : 25/09/59</h4>
				&nbsp;&nbsp;&nbsp;คลิกดู <a href="http://angsila.cs.buu.ac.th/~57160284/887240/Project/index.php/welcome/file_order3">&nbsp;&nbsp;>>ไฟล์ใบจอง<<</a>
				<h4>วันที่จองห้องพัก : 31/12/59</h4>
				&nbsp;&nbsp;&nbsp;คลิกดู <a href="http://angsila.cs.buu.ac.th/~57160284/887240/Project/index.php/welcome/file_order4">&nbsp;&nbsp;>>ไฟล์ใบจอง<<</a>
			</div>	
		</div>
	</div>

	



							<div class="footer">
								<div class="container">				 	
									<div class="col-md-4 ftr_navi ftr">
										<h3>NAVIGATION</h3>
										<ul>
										<li><a href="http://angsila.cs.buu.ac.th/~57160284/887240/Project" data-hover="HOME">HOME</a></li>
                                        <li><a href="http://angsila.cs.buu.ac.th/~57160284/887240/Project/index.php/welcome/detail12" data-hover="ROOM">ROOM</a></li>
                                        <li><a href="http://angsila.cs.buu.ac.th/~57160284/887240/Project/index.php/welcome/booking2" data-hover="BOOKING">BOOKING</a></li>
                                        <li><a href="http://angsila.cs.buu.ac.th/~57160284/887240/Project/index.php/welcome/file_order_list2" data-hover="FILE">FILE</a></li>
										</ul>
									</div>
									<div class="col-md-4 ftr_navi ftr">
										<h3>GET IN TOUCH</h3>
										<ul>
											<li>Burapha University</li>
											<li>038-102-222</li>
										</ul>
									</div>
									<div class="col-md-4 ftr-logo">
										<a href="http://angsila.cs.buu.ac.th/~57160284/887240/Project"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>3PAN HOTEL</a>

									</div>
									<div class="clearfix"> </div>
								</div>
							</div>
							<!--footer-->
							<!-- copy -->
							<div class="copy-right">
								<div class="container">
									<p> &copy; 2015 3PAN HOTEL. All Rights Reserved | Design by (a)unfriends</a></p>
								</div>
							</div>
							<!-- //copy -->
							<!-- for bootstrap working -->
							<script src="http://angsila.cs.buu.ac.th/~57160284/887240/Project/dist/js/bootstrap.js"></script>
							<!-- //for bootstrap working -->
							<!-- smooth scrolling -->
							<script type="text/javascript">
								$(document).ready(function() {
		/*
			var defaults = {
			containerID: 'toTop', // fading element id
			containerHoverID: 'toTopHover', // fading element hover id
			scrollSpeed: 1200,
			easingType: 'linear' 
			};
			*/								
			$().UItoTop({ easingType: 'easeOutQuart' });
		});
	</script>
	<a href="http://angsila.cs.buu.ac.th/~57160284/887240/Project/dist/#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	<!-- //smooth scrolling -->
</body>
</html>