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
	<title>3PAN HOTEL</title>
	<!-- for-mobile-apps -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Classic Hotel Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
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
						<h1><a href="http://angsila.cs.buu.ac.th/~57160284/887240/Project"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>3PAN Hotel</a></h1>
					</div>
					<div class="navigation">
						<span class="menu"><img src="http://angsila.cs.buu.ac.th/~57160284/887240/Project/dist/images/menu.png" alt=""/></span>
						<nav class="cl-effect-11" id="cl-effect-11">
							<ul class="nav1">
								<li><a href="http://angsila.cs.buu.ac.th/~57160284/887240/Project" data-hover="HOME">HOME</a></li>
								<!--<li><a href="http://angsila.cs.buu.ac.th/~57160284/887240/Project/index.php/welcome/form_searchRoom" data-hover="BOOKING">BOOKING</a></li>-->
								<li><a href="http://angsila.cs.buu.ac.th/~57160284/887240/Project/index.php/welcome/detail11" data-hover="ROOM">ROOM</a></li>
								<li><a href="http://angsila.cs.buu.ac.th/~57160284/887240/Project/index.php/welcome/about" data-hover="ABOUT">ABOUT</a></li>
								<li><a class="active" href="http://angsila.cs.buu.ac.th/~57160284/887240/Project/index.php/welcome/contact" data-hover="CONTACT">CONTACT</a></li>
								<li><a href="http://angsila.cs.buu.ac.th/~57160284/887240/Project/index.php/welcome/signinORup" data-hover="SIGNUP">SIGNUP</a></li>
								<li><a href="http://angsila.cs.buu.ac.th/~57160284/887240/Project/index.php/welcome/signinORup" data-hover="SIGNIN">SIGNIN</a></li>
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
		<!--contact-->
		<div class="contact">
			<div class="container">
				<h2 class="tittle-one">VIEW ON MAP</h2>
				<div class="map">
					<iframe src="https://www.google.com/maps/d/u/0/embed?mid=1ySS4c9W1zvXeIcRNFa_4go0TvWg" width="640" height="480"></iframe>
				</div>


				<div class="paragraph">
					<br><h2>วิธีการเดินทาง</h2>
					<br><h4>--รถยนต์ส่วนตัว--</h4><br>
					การเดินทางจากกรุงเทพ ฯ ไป จ. ชลบุรี มีสองเส้นทาง หลัก ๆ คือ 
					เส้นทางสายบางนา - ตราด ทางหลวงหมายเลข 34 เข้าสู่จังหวัดชลบุรี <br>
					เส้นทางสายมอเตอร์เวย์หรือกรุงเทพฯ - ชลบุรี (สายใหม่) ต่อเชื่อมกับวงแหวนรอบนอก มีทางขึ้นหลายจุด<br>
					<br><h4>--รถประจำทาง--</h4><br>
					จากกรุงเทพฯ ขึ้นได้ที่สถานีขนส่งสายตะวันออก (เอกมัย) (โทร. 0 2391 2504) และสถานีขนส่งหมอชิตใหม่ (โทร. 0 2936 2852-66) 
					สาย กรุงเทพ-พัทยา หรือ กรุงเทพ-ศรีราชา <br>
					สถานที่ลงรถโดยสาร<br>
					- แยกบางแสน รถทัวร์จะผ่านตรงแยกเข้า "บางแสน" ก่อนหนองมน สามารถลงตรงนั้นได้ แล้วก็ข้ามถนน ไปรอรถแดง (รถสองแถวสีแดง) 
					เข้าไปหาดบางแสนซึ่งเป็นเส้นทางมียังโรงแรม รถสองแถวจะวนเข้าตลาดหนองมน 1 รอบ ก่อนที่จะผ่านโรงแรม<br>
					- ตลาดหนองมน สามารถลงที่ตลาดหนองมนได้ แล้วข้ามสะพานลอยไปขึ้นรถสองแถวแดง ไปหาดบางแสนทางผ่านของโรงแรมได้<br>
					<br><h4>--รถไฟ--</h4><br>
					จากสถานีรถไฟหัวลำโพง มีบริการรถไฟไปจังหวัดชลบุรีทุกวัน วันละ 1 เที่ยว รายละเอียดเพิ่มเติมติดต่อสอบถามได้ที่ โทร. 0 223 7010, 0 223 7020<br>
					<br><h4>--รถตู้--</h4><br>
					รถตู้จะไปจอดส่งใกล้ๆกับโรงพยาบาลมหาวิทยาลัยบูรพา สามารถต่อรถแดง หรือ มอเตอร์ไซค์รับจ้างไปลงที่โรงแรมได้<br>
					อนุเสาวรีย์-บางแสน จากอนุสาวรีย์ ให้นั่งรถตู้ฝั่ง center one คิวรถจะอยู่ที่หน้าภัตตาคารพงหลี มีป้ายบอกว่าไป ชลบุรี บางแสน 
					การเดินทางมาบางแสนใช้เวลาประมาณ 1.30 ชั่วโมง<br>
					รังสิต-บางแสน คิวรถอยู่ที่หน้าเมเจอร์รังสิตมีป้ายบอกว่าไป ชลบุรี บางแสน<br>
					พระรามสอง-บางแสน
				</div>
				<div class="contact-form">
					<h3 class="tittle">CONTACT FORM</h3>
					<form>
						<input type="text" placeholder="Name">
						<input type="text" placeholder="Email">
						<input type="text" placeholder="Subject">
						<div class="clearfix"> </div>
						<textarea placeholder="Message"></textarea>
						<input type="submit" value="SEND">
					</form>
				</div>
			</div>
		</div>

		<!--//contact-->
		<!--footer-->
		<div class="footer">
			<div class="container">				 	
				<div class="col-md-4 ftr_navi ftr">
					<h3>NAVIGATION</h3>
					<ul>
						<li><a href="http://angsila.cs.buu.ac.th/~57160284/887240/Project" data-hover="HOME">HOME</a></li>
						<li><a href="http://angsila.cs.buu.ac.th/~57160284/887240/Project/index.php/welcome/detail11" data-hover="DETAIL">ROOM</a></li>
						<li><a href="http://angsila.cs.buu.ac.th/~57160284/887240/Project/index.php/welcome/about" data-hover="ABOUT">ABOUT</a></li>
						<li><a href="http://angsila.cs.buu.ac.th/~57160284/887240/Project/index.php/welcome/contact" data-hover="CONTACT">CONTACT</a></li>
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