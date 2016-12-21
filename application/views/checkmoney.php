<?php
session_start();
if(empty($_SESSION['email'])){
  //echo "ว่าง";
  echo"<meta http-equiv='refresh' content='0;URL=http://angsila.cs.buu.ac.th/~57160284/887240/Project'>";
}else{
  //echo $_SESSION['firstname'];
  //echo "<meta http-equiv='refresh' content='0;URL=index.php/welcome/booking2'>";
      if($_SESSION['status']=='manager'){
        echo"<meta http-equiv='refresh' content='0;URL=sell1'>";
      }
      /*if($_SESSION['status']=='staff'){
        echo"<meta http-equiv='refresh' content='0;URL=viewPrice'>";
      }*/
      if($_SESSION['status']=='customer'){
        echo"<meta http-equiv='refresh' content='0;URL=index2'>";
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
								<li><a  href="http://angsila.cs.buu.ac.th/~57160284/887240/Project/index.php/welcome/viewPrice" data-hover="ROOM">ROOM</a></li>
								<!-- -->
								<li><a href="http://angsila.cs.buu.ac.th/~57160284/887240/Project/index.php/welcome/Updategallery" data-hover="GALLERY">GALLERY</a></li>
								<li><a  href="http://angsila.cs.buu.ac.th/~57160284/887240/Project/index.php/welcome/checkBooking" data-hover="BOOKING">BOOKING</a></li>
								<li><a class="active" href="http://angsila.cs.buu.ac.th/~57160284/887240/Project/index.php/welcome/checkmoney" data-hover="MONEY">MONEY</a></li>
			                    <li><a href="http://angsila.cs.buu.ac.th/~57160284/887240/Project/index.php/welcome/signout" data-hover="SIGNOUT">SIGNOUT</a></li>
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
		<h3 class="tittle">การชำระเงิน</h3>
			<table class="table">
			<thead>
				<tr>
					<th><h4>เลขที่ใบจอง</h4></th>
					<th><h4>ชื่อ-นามสกุล</h4></th>
					<th><h4>วันที่เข้าพัก </h4></th>
					<th><h4>วันที่ออก</h4></th>
					<th><h4>วันที่จอง</h4></th>
					<th><h4>สถานะการชำระเงิน</h4></th>
				</tr>

				<tr>
				<?php 
				$host = "localhost";
				$username = "it57160284";
				$password = "it57160284";
				$database = "it57160284";
				$conn = mysqli_connect($host,$username,$password,$database);
				$conn->query("SET NAMES UTF8");
				$sql2 = "SELECT * FROM Book_Hotel where status = 'ค้างชำระ' order by id_book desc";
				$result2 = $conn->query($sql2);
				while ($row2=$result2->fetch_object()) {
				//SELECT * FROM Book_Hotel Where byuser='aun_14354@hotmail.com'
				$id = $row2->id_book;
				$status = $row2->status;
				$sql3= "SELECT firstname,lastname FROM SignUp_Hotel where email = '$row2->byuser' ";
				$result3 = $conn->query($sql3);
				$row3=$result3->fetch_object();
				echo"
					<tr class=\"info\">
					<td><h4>HT-PS-$id</h4></td>
					<td><h4>$row3->firstname $row3->lastname</h4></td>
					<td><h4>$row2->checkin</h4></td>
					<td><h4>$row2->checkout</h4></td>
					<td><h4>$row2->datetime</h4></td>
				<div class='load'>";
							echo"
							<td><h4>
					<input type=\"button\" class=\"btn btn-danger\" onclick=\"location.href='http://angsila.cs.buu.ac.th/~57160284/887240/Project/index.php/welcome/cancel_money?id=$id';\" value=\"ยกเลิกการจอง\">
							</h4></td>
							</tr>
		  					
							";
				echo"</div>";
				}

			?>
				</tr>

			</thead>
			</table>
                    
	</div>
</div>
<!--//contact-->
							<!--footer-->
							<div class="footer">
								<div class="container">				 	
									<div class="col-md-4 ftr_navi ftr">
										<h3>NAVIGATION</h3>
										<ul>
											<li><a href="http://angsila.cs.buu.ac.th/~57160284/887240/Project/index.php/welcome/viewPrice" data-hover="HOME">HOME</a></li>
								<!--<li><a href="http://angsila.cs.buu.ac.th/~57160284/887240/Project/index.php/welcome/form_searchRoom" data-hover="BOOKING">BOOKING</a></li>-->
								<li><a class="active" href="http://angsila.cs.buu.ac.th/~57160284/887240/Project/index.php/welcome/Updategallery" data-hover="GALLERY">GALLERY</a></li>
								<li><a href="http://angsila.cs.buu.ac.th/~57160284/887240/Project/index.php/welcome/checkBooking" data-hover="BOOKING">BOOKING</a></li>
								<li><a href="http://angsila.cs.buu.ac.th/~57160284/887240/Project/index.php/welcome/checkmoney" data-hover="MONEY">MONEY</a></li>
                                <li><a href="http://angsila.cs.buu.ac.th/~57160284/887240/Project/index.php/welcome/signout" data-hover="SIGNOUT">SIGNOUT</a></li>
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

