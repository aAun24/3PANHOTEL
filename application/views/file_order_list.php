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
								<li><a href="<?= base_url();?>/index.php/welcome/index2" data-hover="HOME">HOME</a></li>
								<!--<li><a href="<?= base_url();?>/index.php/welcome/form_searchRoom2" data-hover="BOOKING">BOOKING</a></li> -->
								<li><a href="<?= base_url();?>/index.php/welcome/detail12" data-hover="ROOM">ROOM</a></li>
								<li><a href="<?= base_url();?>/index.php/welcome/booking2" data-hover="Booking">Booking</a></li>
								<li><a class="active" href="<?= base_url();?>/index.php/welcome/file_order_list2" data-hover="FILE">FILE</a></li>
								<li><a href="<?= base_url();?>/index.php/welcome/contact2" data-hover="CONTACT">CONTACT</a></li>
								<li><a data-hover="PROFILE" href="<?= base_url();?>/index.php/welcome/profile2">PROFILE</a></li>
								<li><a data-hover="SIGNOUT" href="<?= base_url();?>/index.php/welcome/signout">SIGNOUT</a></li>
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
				<h2 class="tittle-one">History Booking</h2>
			</div>	
			<div class="about-bottom">
				<div class="row">
				    <div class="col-sm-2">เลขที่ใบจอง</div>
  					<div class="col-sm-2">วันที่เข้าพัก</div>
  					<div class="col-sm-2">วันที่ออก</div>
  					<div class="col-sm-1">จำนวนคืน</div>
  					<div class="col-sm-1">ผู้พัก</div>
  					<div class="col-sm-2">สถานะการชำระเงิน</div>
  					<div class="col-sm-2">ไฟล์ใบจอง</div>
				</div><br>
			<?php 
				$host = "localhost";
				$username = "root";
				$password = "";
				$database = "3panhotel";
				$conn = mysqli_connect($host,$username,$password,$database);
				$conn->query("SET NAMES UTF8");
				$sql2 = "SELECT * FROM Book_Hotel Where byuser='$email'";
				$result2 = $conn->query($sql2);
				while ($row2=$result2->fetch_object()) {
				//SELECT * FROM Book_Hotel Where byuser='aun_14354@hotmail.com'
				$id = $row2->id_book;
				echo"
				<div class=\"row\">
				    <div class=\"col-sm-2\">HT-PS-$id</div>
  					<div class=\"col-sm-2\">$row2->checkin</div>
					<div class=\"col-sm-2\">$row2->checkout</div>
  					<div class=\"col-sm-1\">$row2->day  คืน</div>
  					<div class=\"col-sm-1\">$row2->people คน</div>";
  					$status = $row2->status;
  					if($status=='ค้างชำระ'){
  					echo"<div class=\"col-sm-2\"><a href=http://localhost:4869/3PANHOTEL/index.php/welcome/paysbuy2?id=$id><font color=\"red\">$status</font></a></div>";	
					}else{
						if($status=='ชำระเงินแล้ว'){
							echo"<div class=\"col-sm-2\"><font color=\"green\">$status</font></div>";
						}else{
							if($status=='เข้าพักแล้ว'){
							echo"<div class=\"col-sm-2\"><font color=\"orange\">$status</font></div>";
							}else{
								if($status=='ยกเลิก'){
								echo"<div class=\"col-sm-2\"><font color=\"red\">$status</font></div>";
								}else{
									echo"<div class=\"col-sm-2\"><font color=\"#EF30CF\">$status</font></div>";
								}
							}
						}

						
					}
					if($status=='ค้างชำระ'){
  					echo"<div class=\"col-sm-2\"><font color=\"red\">รอการชำระ</font></div>";	
					}else{
						echo"<div class=\"col-sm-2\"><font color=\"green\">
						 <a href=\"http://localhost:4869/3PANHOTEL/index.php/welcome/file_order2?id=$row2->id_book\">ดูใบจอง</a></font></div>
							";
					}

				echo"</div><br>";
				}

			?>
			<BR><BR>
		</div>
	</div>


							<div class="footer">
								<div class="container">				 	
									<div class="col-md-4 ftr_navi ftr">
										<h3>NAVIGATION</h3>
										<ul>
											<li><a href="<?= base_url();?>/index.php/welcome/index2">HOME</a></li>
											<li><a href="<?= base_url();?>/index.php/welcome/detail12" data-hover="ROOM">ROOM</a></li>
                                        <li><a href="<?= base_url();?>/index.php/welcome/booking2" data-hover="BOOKING">BOOKING</a></li>
                                        <li><a href="<?= base_url();?>/index.php/welcome/file_order_list2" data-hover="FILE">FILE</a></li>
                                        <li><a href="<?= base_url();?>/index.php/welcome/contact2" data-hover="CONTACT">CONTACT</a></li>
                                        <li><a href="<?= base_url();?>/index.php/welcome/signout" data-hover="SIGN OUT">SIGN OUT</a></li>
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