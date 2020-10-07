<?php
session_start();
if(empty($_SESSION['email'])){
  //echo "ว่าง";
  //echo"<meta http-equiv='refresh' content='0;URL=#'>";
}else{
  //echo $_SESSION['firstname'];
    if($_SESSION['status']=='manager'){
        echo"<meta http-equiv='refresh' content='0;URL=sell1'>";
      }
      if($_SESSION['status']=='staff'){
        echo"<meta http-equiv='refresh' content='0;URL=viewPrice'>";
      }
      if($_SESSION['status']=='customer'){
        echo "<meta http-equiv='refresh' content='0;URL=index2'>";
      }
  
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
	<title>3PAN Hotel a Hotel </title>
	<!-- for-mobile-apps -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="3PAN Hotel Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
                                        <li><a href="<?= base_url();?>" data-hover="HOME">HOME</a></li>
                                        <!--<li><a href="<?= base_url();?>/index.php/welcome/form_searchRoom" data-hover="BOOKING">BOOKING</a></li>-->
                                        <li><a href="<?= base_url();?>/index.php/welcome/detail11" data-hover="ROOM">ROOM</a></li>
                                        <li><a class="active" href="<?= base_url();?>/index.php/welcome/about" data-hover="ABOUT">ABOUT</a></li>
                                        <li><a href="<?= base_url();?>/index.php/welcome/contact" data-hover="CONTACT">CONTACT</a></li>
                                        <li><a href="<?= base_url();?>/index.php/welcome/signinORup" data-hover="SIGNUP">SIGNUP</a></li>
                                        <li><a href="<?= base_url();?>/index.php/welcome/signinORup" data-hover="SIGNIN">SIGNIN</a></li>
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
					<h2 class="tittle-one">ABOUT</h2>
				</div>
				<div class="about-bottom text-center">
					<img src="<?= base_url();?>/dist/images/IT.jpg" alt="IT" />
					<h4>สร้างอารยะบัณฑิต มุ่งแนวคิดสากล นำพาสังคมอย่างยั่งยืน ด้วยวิทยาการสารสนเทศ</h4>
					<p>คณะวิทยาการสารสนเทศ 169 ถนนลงหาดบางแสน ต.แสนสุข อ.เมือง จ.ชลบุรี 20131</p>
					<p>informatics@buu.ac.th   038-103060</p>
				</div>
			</div>
		</div>
		<!--end-vision-->
		<!--start-vision-->
		<div class="vision">
			<div class="container">
				<div class="vision-top heading">
					<h3 class="tittle">สร้างเสริมปัญญา ใฝ่หาความรู้ คู่คุณธรรม ชี้นำสังคม</h3>
				</div>
				<div class="vision-bottom">
					<div class="col-md-8 vision-left">
						<div class="col-md-5 vsn-left">
							<img src="<?= base_url();?>/dist/images/view.jpg" alt="" />
						</div>
						<div class="col-md-7 vsn-right">
							<h4>คณะวิทยาการสารสนเทศ</h4>
							<p>คณะวิทยาการสารสนเทศ จัดตั้งขึ้นอย่างเป็นทางการเมื่อวันที่ 9 ธันวาคม พ.ศ. 2552  โดยยกฐานะจากภาควิชาวิทยาการคอมพิวเตอร์ ซึ่งเป็นหน่วยงานภายใต้คณะวิทยาศาสตร์  ทำหน้าที่ให้การศึกษาพัฒนา  ค้นคว้า วิจัย และ ผลิตบัณฑิตในสาขาวิชาวิทยาการคอมพิวเตอร์ สาขาวิชาเทคโนโลยีสารสนเทศ และ สาขาวิชาคอมพิวเตอร์ธุรกิจ มาอย่างต่อเนื่อง ในช่วงระยะเวลาที่ผ่านมา คณะวิทยาการสารสนเทศ   ได้ทำหน้าที่ในการจัดการเรียนการสอนในรายวิชาศึกษาทั่วไปสำหรับนิสิตระดับปริญญาตรีทั้งมหาวิทยาลัย รายวิชาบริการเฉพาะสำหรับนิสิตในบางสาขาวิชาที่ต้องการความรู้พื้นฐานด้านการโปรแกรมคอมพิวเตอร์เฉพาด้าน และรายวิชาเอกของหลักสูตรในความรับผิดชอบของคณะฯ</p>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="col-md-4 vision-right">
						<ul>
							<li><span class="glyphicon glyphicon-share-alt" aria-hidden="true"></span><a href="#">IT CS SE</a></li>
							<li><span class="glyphicon glyphicon-share-alt" aria-hidden="true"></span><a href="#">ทำการศึกษาและวิจัยสร้างองค์ความรู้ใหม่</a></li>
							<li><span class="glyphicon glyphicon-share-alt" aria-hidden="true"></span><a href="#">ให้บริการวิชาการ ถ่ายทอดความรู้ และเทคโนโลยี </a></li>
							<li><span class="glyphicon glyphicon-share-alt" aria-hidden="true"></span><a href="#">จัดกิจกรรม / โครงการเกี่ยวกับการทำนุบำรุงศิลปวัฒนธรรม</a></li>
							<li><span class="glyphicon glyphicon-share-alt" aria-hidden="true"></span><a href="#">สีประจำ เทาเงิน – น้ำเงิน</a></li>
						</ul>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
		<!--end-vision-->
		<!--start-teacher-->
		<div class="staff">
			<div class="container">
				<h3 class="tittle">OUR TEAM</h3>
				<ul class="ch-grid">
									<li>
						<div class="ch-item ch-img-1">				
							<div class="ch-info-wrap">
								<div class="ch-info">
									<div class="ch-info-front ch-img-1"></div>
									<div class="ch-info-back">
										<h4>AUNAUN</h4>
										<p>57160284</p>
									</div>	
								</div>
							</div>
						</div>
					</li>
					<li>
						<div class="ch-item ch-img-2">
							<div class="ch-info-wrap">
								<div class="ch-info">
									<div class="ch-info-front ch-img-2"></div>
									<div class="ch-info-back">
										<h4>PLAMPY</h4>
										<p>57160286</p>
									</div>
								</div>
							</div>
						</div>
					</li>
					<li>
						<div class="ch-item ch-img-3">
							<div class="ch-info-wrap">
								<div class="ch-info">
									<div class="ch-info-front ch-img-3"></div>
									<div class="ch-info-back">
										<h4>NAMSAI</h4>
										<p>57160440</p>
									</div>
								</div>
							</div>
						</div>
					</li>
					<li>
						<div class="ch-item ch-img-4">
							<div class="ch-info-wrap">
								<div class="ch-info">
									<div class="ch-info-front ch-img-4"></div>
									<div class="ch-info-back">
										<h4>POPPY</h4>
										<p>57160443</p>
									</div>
								</div>
							</div>
						</div>
					</li>
					<li>
						<div class="ch-item ch-img-5">
							<div class="ch-info-wrap">
								<div class="ch-info">
									<div class="ch-info-front ch-img-5"></div>
									<div class="ch-info-back">
										<h4>NOOPLEE</h4>
										<p>57160545</p>
									</div>
								</div>
							</div>
						</div>
					</li>
				</ul>
			</div>
		</div>
		<!--//about-->
		<!--footer-->
							<div class="footer">
								<div class="container">				 	
									<div class="col-md-4 ftr_navi ftr">
										<h3>NAVIGATION</h3>
										<ul>
										<li><a href="<?= base_url();?>" data-hover="HOME">HOME</a></li>
                                        <li><a href="<?= base_url();?>/index.php/welcome/detail11" data-hover="ROOM">ROOM</a></li>
                                        <li><a href="<?= base_url();?>/index.php/welcome/about" data-hover="ABOUT">ABOUT</a></li>
                                        <li><a href="<?= base_url();?>/index.php/welcome/contact" data-hover="CONTACT">CONTACT</a></li>
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