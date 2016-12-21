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
	<mata charset='utf-8'>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="keywords" content="3PAN HOTEL " />
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
			function hideURLbar(){ window.scrollTo(0,1); } </script>
			<!-- //for-mobile-apps -->
			<link href="http://angsila.cs.buu.ac.th/~57160284/887240/Project/dist/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
			<link href="http://angsila.cs.buu.ac.th/~57160284/887240/Project/dist/css/style.css" rel="stylesheet" type="text/css" media="all" />
			<link rel="stylesheet" type="text/css" href="http://angsila.cs.buu.ac.th/~57160284/887240/Project/dist/css/jquery-ui1.css">
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
			<style>
				h3{
					color:#fff;
					font-family:JasmineUPC;
					font-size: 24pt;
				}
				h4{
					font-family:JasmineUPC;
					font-size: 20pt;
					color:white;
				}
				select,input[type=date]{
					font-family: Cursive;
					font-size: 20px;
					border: 2;
					align:center;
					border: 2px solid #FFBF00;
					width: 100%;
					/*-webkit-appearance: none;*/
				}
				.search input[type=submit]{
					width: 250px;
					color:black;
					background-color: #5882FA;
				}			
				
			</style>
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
									<li><a class="active" href="http://angsila.cs.buu.ac.th/~57160284/887240/Project/index.php/welcome/booking2" data-hover="HOME">HOME</a></li>
									<li><a href="http://angsila.cs.buu.ac.th/~57160284/887240/Project/index.php/welcome/detail12" data-hover="ROOM">ROOM</a></li>
									<li><a href="http://angsila.cs.buu.ac.th/~57160284/887240/Project/index.php/welcome/booking2" data-hover="Booking">Booking</a></li>
									<li><a href="http://angsila.cs.buu.ac.th/~57160284/887240/Project/index.php/welcome/file_order_list2" data-hover="FILE">FILE</a></li>
									
									<li><a href="http://angsila.cs.buu.ac.th/~57160284/887240/Project/index.php/welcome/contact2" data-hover="CONTACT">CONTACT</a></li>
									<li><a data-hover="PROFILE" href="">PROFILE</a></li>
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
			<!--search-->
			<div class="search-page">
				<div class="container">	
					<div class="search-grids">
						<!--<div class="col-md-2 search-grid-left">-->
						<center><h2>กรุณาเลือกการชำระเงินที่ต้องการ</h2></center>
						<BR><BR>
							<div class="col-md-2"></div>
							<div class="col-md-9 search-grid-right">	
								<!--<div style="background-color:#ECCA69">-->
								<?php
								$host = "localhost";
								$username = "it57160284";
								$password = "it57160284";
								$database = "it57160284";
								$conn = mysqli_connect($host,$username,$password,$database);
								$conn -> query("SET NAMES UTF8");


				echo"<div class='hotel-rooms'>";
				echo"<div class='hotel-left'>";
				//echo"<center>";
				echo"<div class='hotel-left-grids'>";
					$last_id = 0;
					//เลือก id_book ของผู้ใช้คนนั้น ที่มี id_book ลำดับสุดท้าย
					//SELECT MAX(id_book) AS maxid FROM Book_Hotel where byuser ='aun_14354@hotmail.com';
	
					//หาระยะเวลาที่ไปพัก
					$j=0;
					$daytotal[]=0;
					$strStartDate = $_SESSION['checkin'];
					$strEndDate   = $_SESSION['checkout'];
					$totalmoney=0;
					while (strtotime($strStartDate) <= strtotime($strEndDate)) {
						$DayOfWeek = date("w", strtotime($strStartDate));
						$daytotal[$j++] = $strStartDate;
						$strStartDate = date ("Y-m-d", strtotime("+1 day", strtotime($strStartDate)));
					}
					$day = count($daytotal)-1;
					//จบหาระยะเวลาที่ไปพัก
					


					$sql2 = "SELECT MAX(id_book) AS maxid FROM Book_Hotel where byuser ='{$_SESSION['email']}' ";
					$result2 = $conn->query($sql2);
					$row2 = $result2->fetch_assoc();
					$last_id = $row2['maxid'];
					//echo $last_id;
					/*SELECT * FROM Book_Hotel, SignUp_Hotel
								WHERE  byuser ='aun_14354@hotmail.com' 
								and email = 'aun_14354@hotmail.com' 
								and id_book = '2'*/
					$sql1 = "SELECT * FROM Book_Hotel, SignUp_Hotel
								WHERE  byuser ='{$_SESSION['email']}' 
								and email = '{$_SESSION['email']}' 
								and id_book = '$last_id'";
					$result1 = $conn->query($sql1);
					if($row1 = $result1->fetch_object()){
						$s1 = "";$s2 = "";$s3 = "";$s4 = "";
						$room1=$row1->room1;$room2=$row1->room2;
						$room3=$row1->room3;$room4=$row1->room4;
						//Superior ห้องละ 3500 บาท  2 ห้อง  2 คืน  ราคารวม  14400 บาท
						if($room1!="0"){
							$s1 = "<BR>".$row1->name_room1." ".$room1." ห้อง "
							.$day." คืน ราคา ".$row1->pay_room1." บาท"."<BR>";
						}
						if($room2!="0"){
							$s2 = "<BR>".$row1->name_room2." ".$room2." ห้อง "
							.$day." คืน ราคา ".$row1->pay_room2." บาท"."<BR>";
						}
						if($room3!="0"){
							$s3 = "<BR>".$row1->name_room3." ".$room3." ห้อง "
							.$day." คืน ราคา ".$row1->pay_room3." บาท"."<BR>";
						}
						if($room4!="0"){
							$s4 = "<BR>".$row1->name_room4." ".$room4." ห้อง "
							.$day." คืน ราคา ".$row1->pay_room4." บาท"."<BR>";
						}
						$s = $s1.$s2.$s3.$s4;
						 echo "
					<center><h3 style=\"color:orange\">รายละเอียดข้อมูลการจอง</h3></center>
					<div class=\"row\">

						<div class=\"col-sm-5\" >
							<p><B>เลขที่ใบจอง :</B> HT-PS-$last_id</p>
							<p><B>วันที่จอง :</B> $row1->datetime</p>
							<p><B>ชื่อผู้เข้าพัก :</B> $row1->firstname $row1->lastname</p>
							<p><B>จำนวนผู้เข้าพัก :</B> $row1->people คน</p>
						</div>
						<div class=\"col-sm-2\" ></div>
						<div class=\"col-sm-5\" >
							<p><B>วันที่เข้าพัก :</B> $row1->checkin</p>
							<p><B>วันที่ออก :</B> $row1->checkout</p>
							<p><B>ระยะเวลาที่เข้าพัก :</B> $row1->day คืน</p>
							<p><B>ราคารวม :</B> $row1->paymoney บาท </p>
						</div>
						<div class=\"col-sm-12\" >
							<p><B>ประเภทห้องพัก :<BR></B> $s </p>
							
						</div>
					</div>";
					}

					//$query = mysql_query("select id from CUSTOMER where username = '".$_SESSION['username']."'");
				$_SESSION['id_book'] = $last_id;
				echo"<div class='clearfix'></div>";
				echo"</div>";//close left;
				//echo"</center>";
				echo"</div>";
				echo"<div class='hotel-right text-right'>";
					echo"<h4 style='color:black'>ชำระเงิน คลิ๊กที่นี่&nbsp;<img src='http://angsila.cs.buu.ac.th/~57160284/887240/Project/dist/images/Red_Arrow_Down.svg' alt='Click' height='20px' width='20px'></h4>";

					/*$sql2 = "SELECT MAX(id) AS maxid FROM paymoney_hotel";
					$result2 = $conn->query($sql2);
					$row2 = $result2->fetch_assoc();
					$last_id = $row2['maxid']+1;*/

					echo"<Form method='post' action='https://www.paysbuy.com/paynow.aspx?lang=t'> <input type='Hidden' Name='psb' value='psb'/> <input Type='Hidden' Name='biz' value='57160284@go.buu.ac.th'/> <input Type='Hidden' Name='inv' value='HT-PS-$last_id'/> <input Type='Hidden' Name='itm' value='จองโรงแรม'/> <input Type='Hidden' Name='amt' value='1'/> <input Type='Hidden' Name='postURL' value='http://angsila.cs.buu.ac.th/~57160284/887240/Project/index.php/welcome/Payment_insert'/> <input type='image' src='https://www.paysbuy.com/imgs/paypalcredit.png' border='0' name='submit' alt='Make it easier,PaySbuy - it's fast,free and secure!' width='180px' height='40px'/> </Form >";
					echo"<BR><center><h5>กรุณาชำระเงินภายใน 3 วัน <BR>มิฉะนั้นจะถูกยกเลิกการจอง
						 <BR>หากคุณมีเหตุผลต้องจ่ายล่าช้า <BR>ติดต่อมาที่ 089-999-9999</h5></center>";
				echo"</div>";//close right
				echo"<div class='clearfix'></div>";
				echo"</div>";
				?>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<!--//search-->




<!--footer-->
<div class="footer">
	<div class="container">				 	
		<div class="col-md-4 ftr_navi ftr">
			<h3>NAVIGATION</h3>
			<ul>
				<li><a href="http://angsila.cs.buu.ac.th/~57160284/887240/Project">HOME</a></li>
				<li><a href="http://angsila.cs.buu.ac.th/~57160284/887240/Project/index.php/welcome/detail12">ROOM</a></li>
				<li><a href="http://angsila.cs.buu.ac.th/~57160284/887240/Project/index.php/welcome/about2">ABOUT</a></li>
				<li><a href="http://angsila.cs.buu.ac.th/~57160284/887240/Project/index.php/welcome/contact2">CONTACT</a></li>
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
	<script src="http://angsila.cs.buu.ac.th/~57160284/887240/Project/dist/js/bootstrap.js"></script>
	<!-- //for bootstrap working -->
	<!-- smooth scrolling -->
</body>
</html>


