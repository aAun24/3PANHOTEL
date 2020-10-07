<?php
 session_start();
 if(empty($_SESSION['email'])){
  //echo "ว่าง";
  echo"<meta http-equiv='refresh' content='0;URL=<?= base_url();?>'>";
}else{
  //echo $_SESSION['firstname'];
  //echo "ไม่ว่าง";
	$email=$_SESSION['email'];
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
<link href="<?= base_url();?>/dist/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?= base_url();?>/dist/css/style.css" rel="stylesheet" type="text/css" media="all" />
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
<div class="banner page-head">
	<div class="container">
		<div class="header-nav">
			<div class="logo">
				<h1><a href="<?= base_url();?>"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>3PAN HOTEL</a></h1>
			</div>
			<div class="navigation">
				<span class="menu"><img src="<?= base_url();?>/dist/images/menu.png" alt=""/></span>
				<nav class="cl-effect-11" id="cl-effect-11">
							<ul class="nav1">
								<li><a class="active" href="<?= base_url();?>/index.php/welcome/sell1" data-hover="HOME">HOME</a></li>
								<!--<li><a href="<?= base_url();?>/index.php/welcome/form_searchRoom" data-hover="BOOKING">BOOKING</a></li>-->
								<li><a href="<?= base_url();?>/index.php/welcome/account" data-hover="ACCOUNT">ACCOUNT</a></li>
								<li><a href="<?= base_url();?>/index.php/welcome/comment" data-hover="COMMENT">COMMENT</a></li>
								<li><a href="<?= base_url();?>/index.php/welcome/profile2" data-hover="PROFILE">PROFILE</a></li>
								<li><a href="<?= base_url();?>/index.php/welcome/signout" data-hover="SINGOUT">SIGNOUT</a></li>
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
				<h2 class="tittle-one">PROFILE</h2>
			</div>	
			<div class="about-bottom">
			<?php 
				$host = "localhost";
				$username = "root";
				$password = "";
				$database = "3panhotel";
				$conn = mysqli_connect($host,$username,$password,$database);
				$conn -> query("SET NAMES UTF8");
				$sql = "SELECT * FROM SignUp_Hotel Where 
							email='$email'";
				$result = $conn->query($sql);
				$row=$result->fetch_object();
			?>
			<div class="row">
  				<div class="col-sm-2">Frist Name :</div>
  				<div class="col-sm-10"><?php echo $row->firstname;?></div>
			</div><br>
			<div class="row">
  				<div class="col-sm-2">Last Name :</div>
  				<div class="col-sm-10"><?php echo $row->lastname;?></div>
			</div><br>
			<div class="row">
  				<div class="col-sm-2">E-mail  :</div>
  				<div class="col-sm-10"><?php echo $row->email;?></div>
			</div><br>
			<div class="row">
  				<div class="col-sm-2">Password  :</div>
  				<div class="col-sm-10"><?php echo $row->password;?></div>
			</div><br>			
			<div class="row">
  				<div class="col-sm-2">Phone :</div>
  				<div class="col-sm-10"><?php echo $row->phone;?></div>
			</div><br>				
			<div class="row">
  				<div class="col-sm-2">Address  :</div>
  				<div class="col-sm-10"><?php echo $row->address;?></div>
			</div><br>
				
			<center><button ONCLICK="profileEdit()">แก้ไข</button> &nbsp;&nbsp;&nbsp;
				<button onClick = "history.go(-1)">ยกเลิก</button>
			<BR><BR>
		</div>
	</div>


							<div class="footer">
								<div class="container">				 	
									<div class="col-md-4 ftr_navi ftr">
										<h3>NAVIGATION</h3>
										<ul>
											<li><a href="<?= base_url();?>">HOME</a></li>
											<li><a href="<?= base_url();?>/index.php/welcome/detail12" data-hover="ROOM">ROOM</a></li>
											<li><a href="<?= base_url();?>/index.php/welcome/about2">ABOUT</a></li>
											<li><a href="<?= base_url();?>/index.php/welcome/contact2">CONTACT</a></li>
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
										<a href="<?= base_url();?>"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>3PAN HOTEL</a>

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
							<script src="<?= base_url();?>/dist/js/bootstrap.js"></script>
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
	<a href="<?= base_url();?>/dist/#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	<!-- //smooth scrolling -->
</body>
</html>