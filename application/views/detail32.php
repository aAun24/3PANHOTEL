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
<title>3PAN HOTEL</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="3PAN HOTEL Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="http://angsila.cs.buu.ac.th/~57160284/887240/Project/dist/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="http://angsila.cs.buu.ac.th/~57160284/887240/Project/dist/css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="http://angsila.cs.buu.ac.th/~57160284/887240/Project/dist/css/flexslider.css" media="screen" />
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
				<h1><a href="http://angsila.cs.buu.ac.th/~57160284/887240/Project/dist/index.html"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>3PAN HOTEL</a></h1>
			</div>
			<div class="navigation">
				<span class="menu"><img src="http://angsila.cs.buu.ac.th/~57160284/887240/Project/dist/images/menu.png" alt=""/></span>
				<nav class="cl-effect-11" id="cl-effect-11">
							<ul class="nav1">
								<li><a href="http://angsila.cs.buu.ac.th/~57160284/887240/Project/index.php/welcome/booking2" data-hover="HOME">HOME</a></li>
								<li><a class="active" href="http://angsila.cs.buu.ac.th/~57160284/887240/Project/index.php/welcome/detail12" data-hover="ROOM">ROOM</a></li>
								<li><a href="http://angsila.cs.buu.ac.th/~57160284/887240/Project/index.php/welcome/booking2" data-hover="Booking">Booking</a></li>
								<li><a href="http://angsila.cs.buu.ac.th/~57160284/887240/Project/index.php/welcome/file_order_list2" data-hover="FILE">FILE</a></li>
								<li><a href="http://angsila.cs.buu.ac.th/~57160284/887240/Project/index.php/welcome/contact2" data-hover="CONTACT">CONTACT</a></li>
								<li><a href="http://angsila.cs.buu.ac.th/~57160284/887240/Project/index.php/welcome/profileCustomer" data-hover="PROFILE" href="">PROFILE</a></li>
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
<!--single-page-->
<BR>
		<h1 align="center">ตัวอย่างห้องพัก</h1>
<div class="single-page">
	<div class="container">
		<div class="col-md-8 single-gd-lt">
			<div class="single-pg-hdr">
				<h2><span class="glyphicon glyphicon-bed" aria-hidden="true"></span>Suite</h2>
			</div>
			<div class="flexslider">
							<ul class="slides">
								<li data-thumb="http://angsila.cs.buu.ac.th/~57160284/887240/Project/dist/images/suite.jpg">
									<img src="http://angsila.cs.buu.ac.th/~57160284/887240/Project/dist/images/suite.jpg" alt=""/ >
								</li>
								<li data-thumb="http://angsila.cs.buu.ac.th/~57160284/887240/Project/dist/images/suite2.jpg">
									<img src="http://angsila.cs.buu.ac.th/~57160284/887240/Project/dist/images/suite2.jpg" alt=""/>
								</li>
								<li data-thumb="http://angsila.cs.buu.ac.th/~57160284/887240/Project/dist/images/suite3.jpg">
									<img src="http://angsila.cs.buu.ac.th/~57160284/887240/Project/dist/images/suite3.jpg" alt=""/>
								</li>
								<li data-thumb="http://angsila.cs.buu.ac.th/~57160284/887240/Project/dist/images/suite4.jpg">
									<img src="http://angsila.cs.buu.ac.th/~57160284/887240/Project/dist/images/suite4.jpg" alt=""/>
								</li>
								<li data-thumb="http://angsila.cs.buu.ac.th/~57160284/887240/Project/dist/images/suite5.jpg">
									<img src="http://angsila.cs.buu.ac.th/~57160284/887240/Project/dist/images/suite5.jpg" alt=""/>
								</li>
								<li data-thumb="http://angsila.cs.buu.ac.th/~57160284/887240/Project/dist/images/suite6.jpg">
									<img src="http://angsila.cs.buu.ac.th/~57160284/887240/Project/dist/images/suite6.jpg" alt=""/>
								</li>
								<li data-thumb="http://angsila.cs.buu.ac.th/~57160284/887240/Project/dist/images/suite7.jpg">
									<img src="http://angsila.cs.buu.ac.th/~57160284/887240/Project/dist/images/suite7.jpg" alt=""/>
								</li>
								
							</ul>
			</div>
						<!-- FlexSlider -->
					<script defer src="http://angsila.cs.buu.ac.th/~57160284/887240/Project/dist/js/jquery.flexslider.js"></script>
						<script>
						// Can also be used with $(document).ready()
						$(window).load(function() {
						  $('.flexslider').flexslider({
							animation: "slide",
							controlNav: "thumbnails"
						  });
						});
						</script>

		</div>
		<div class="col-md-4 single-gd-rt">
			<div class="spl-btn">
				<div class="spl-btn-bor" style="background-color:#CC9900">
					<a data-toggle="tooltip" title="Save up to 50% on this stay">
						<span class="glyphicon glyphicon-tag" aria-hidden="true"></span>
																	
					</a>
					<p>ราคาปกติ</p>	
					<script>
						$(document).ready(function(){
						$('[data-toggle="tooltip"]').tooltip();   
						});
					</script>
				</div>
				<?php
  					$host = "localhost";
					$username = "it57160284";
					$password = "it57160284";
					$database = "it57160284";
					$conn = mysqli_connect($host,$username,$password,$database);
					$conn -> query("SET NAMES UTF8");
					$sql2 = "SELECT *  FROM Room_Hotel";
					$result2 = $conn->query($sql2);
					
					while($row2 = $result2->fetch_object()){
							if($row2->name=='Suite')
							$totalmoney = $row2->price_formal;
						
					}
					echo"<div class='sp-bor-btn text-right'>
					<h4>$totalmoney BAHT</h4>";
					//<a class='best-btn' href='http://angsila.cs.buu.ac.th/~57160284/887240/Project/index.php/welcome/booking2'>Back</a>
					echo"</div>";

				?>
			</div>
		</div>
		<div class="col-md-2 single-gd-rt"><BR><BR></div>
		<div class="col-md-4 single-gd-rt">
			<div class="spl-btn">
				<div class="spl-btn-bor" style="background-color:#CC9900">
					<p>รายละเอียด</p>
				</div>
				&nbsp;&nbsp;&nbsp;จำนวนผู้พักสูงสุด 2 ท่าน <br> &nbsp;&nbsp;&nbsp;สิ่งอำนวนความสะดวกภายในห้อง ได้แก่ <br> &nbsp;&nbsp;&nbsp;-ตู้เย็น <br> &nbsp;&nbsp;&nbsp;-แอร์<br> &nbsp;&nbsp;&nbsp;-อ่างอาบน้ำ<br> &nbsp;&nbsp;&nbsp;-เตียงเดี่ยว 2เตียง <br>&nbsp;&nbsp;&nbsp;-ห้องรับแขก
			</div>
		</div>
		<div class="col-md-2 single-gd-rt"><BR><BR></div>
					<div class="col-md-4 single-gd-rt">
						<div class="spl-btn">
							<div class="spl-btn-bor" style="background-color:#CC9900">
								<p>เลือกดูห้องพักชนิดอื่น</p>
							</div>
							<a href="http://angsila.cs.buu.ac.th/~57160284/887240/Project/index.php/welcome/detail12"><p>&nbsp;&nbsp;&nbsp;Superior</p></a>
							<a href="http://angsila.cs.buu.ac.th/~57160284/887240/Project/index.php/welcome/detail22"><p>&nbsp;&nbsp;&nbsp;Deluxe</p></a>
							<a href="http://angsila.cs.buu.ac.th/~57160284/887240/Project/index.php/welcome/detail32"><p>&nbsp;&nbsp;&nbsp;Suite</p></a>
							<a href="http://angsila.cs.buu.ac.th/~57160284/887240/Project/index.php/welcome/detail42"><p>&nbsp;&nbsp;&nbsp;Family</p></a>
						</div>
					</div>
		<div class="clearfix"></div>
	</div>
</div>
<!--//single-page-->
<!--footer-->
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