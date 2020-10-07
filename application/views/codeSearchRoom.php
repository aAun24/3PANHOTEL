<?php
session_start();
if(empty($_SESSION['email'])){
  //echo "ว่าง";
	echo"<meta http-equiv='refresh' content='0; URL=<?= base_url();?>'>";
}else{
  //echo $_SESSION['firstname'];
  //echo "ไม่ว่าง";
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
	<title>3PAN HOTEL a Hotel Category Flat Bootstrap Responsive Website Template | Search :: w3layouts</title>
	<!-- for-mobile-apps -->
	<mata charset='utf-8'>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="keywords" content="3PAN HOTEL " />
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
			function hideURLbar(){ window.scrollTo(0,1); } </script>
			<!-- //for-mobile-apps -->
			<link href="<?= base_url();?>/dist/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
			<link href="<?= base_url();?>/dist/css/style.css" rel="stylesheet" type="text/css" media="all" />
			<link rel="stylesheet" type="text/css" href="<?= base_url();?>/dist/css/jquery-ui1.css">
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
							<h1><a href="<?= base_url();?>/dist/index.html"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>3PAN HOTEL</a></h1>
						</div>
						<div class="navigation">
							<span class="menu"><img src="<?= base_url();?>/dist/images/menu.png" alt=""/></span>
							<nav class="cl-effect-11" id="cl-effect-11">
								<ul class="nav1">
									<li><a class="active" href="<?= base_url();?>" data-hover="HOME">HOME</a></li>
									<li><a href="<?= base_url();?>/index.php/welcome/form_searchRoom" data-hover="BOOKING">BOOKING</a></li>
									<li><a href="<?= base_url();?>/index.php/welcome/detail" data-hover="DETAIL">DETAIL ROOM</a></li>
									<li><a>Profile</a></li>
									<li><a>Sign Out</a></li>
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
						<center><h2>กรุณาเลือกห้องพักที่ต้องการ</h2></center>
						<BR><BR>
							<div class="col-md-2"></div>
							<div class="col-md-9 search-grid-right">	
								<!--<div style="background-color:#ECCA69">-->
								<?php
								$host = "localhost";
								$username = "root";
								$password = "";
								$database = "3panhotel";
								$conn = mysqli_connect($host,$username,$password,$database);
								$conn -> query("SET NAMES UTF8");
 							//$email = $_SESSION['email'];
								$sql = "SELECT *  FROM Book_Hotel , SignUp_Hotel  where byuser='aun_14354@hotmail.com' AND email='aun_14354@hotmail.com';";
								$result = $conn->query($sql);
								while($row = $result->fetch_object()){ 
								/*if($row->id_book==11) {
									/*echo "<h1>ค้นหาห้องพัก</h1>";
									echo "<h4>".$row->id_book."</h4>";
									echo "<h4>".$row->email."</h4>";
									echo "<h4>".$row->checkin."</h4>";
									echo "<h4>".$row->checkout."</h4>";
									echo "<h4>".$row->day." วัน</h4>";
									echo "<h4>".$row->adults."</h4>";
									echo "<h4>".$row->children."</h4>";
									echo "<h4>".$row->room."</h4>";
									echo"<h3>แบบฟอร์มการจองห้องพัก</h3>";
									echo"<BR>";
									echo"<form action='<?= base_url();?>/index.php/welcome/Book_insert' method='post'>";
									echo"<h4>Check In</h4>";
									echo"<input type='date' name='checkin' value='$row->checkin'>";

									echo"<h4>Check Out</h4>";
									echo"<input type='date' name='checkout' value='$row->checkout'>";


									echo"<h4>People</h4>";
									echo"<select name='people' style='width=80px' >";
									for($i=0;$i<10;$i++){
										if($row->adults==$i){
											echo"<option selected>$i</option>";
										}else{
											echo"<option>$i</option>";
										}
									}
									
									
									echo"</select>";
									echo"<BR><BR>";
									/*echo"<div class='search'>";
									echo"<input type='submit' value='Search' onclick='search()'>";
									echo"</div>";
									echo"</form>";
									echo"<BR><BR>";
								}*/

							} 
							?>
							<!--</div>	
							<BR><BR>-->
								<?php
								$strStartDate = "2016-01-01";
								$strEndDate = "2026-12-31";
								$weekendDay[]=0;
								$i=0;
	//หาวันหยุดเสาร์-อาทิตย์
								while (strtotime($strStartDate) <= strtotime($strEndDate)) {
									$DayOfWeek = date("w", strtotime($strStartDate));
		if($DayOfWeek == 0 or $DayOfWeek ==6)  // 0 = Sunday, 6 = Saturday;
		{
			$weekendDay[$i++] = $strStartDate;
		//echo "$strStartDate = <font color=red>Holiday</font><br>";
		}
		//$DayOfWeek = date("l", strtotime($strStartDate)); // return Sunday, Monday,Tuesday....
		$strStartDate = date ("Y-m-d", strtotime("+1 day", strtotime($strStartDate)));
	}
	//จบหาวันหยุดเสาร์-อาทิตย์
	$sql = "SELECT *  FROM Book_Hotel , SignUp_Hotel  where byuser='$_SESSION[email]' AND email='$_SESSION[email]' AND id_book='90';";
	$result = $conn->query($sql);
	$datecheckin;
	$datecheckout;
	$datetotal;
	while($row = $result->fetch_object()){ 
		if($row->id_book==90){
			$datecheckin = $row->checkin;
			$datecheckout = $row->checkout;
			$datetotal = $row->day;
		}else{
			
		}
	}
	//หาระยะเวลาที่ไปพัก
	$j=0;
	$daytotal[]=0;
	$strStartDate = $datecheckin;
	$strEndDate   = $datecheckout;
	$totalmoney=0;
	while (strtotime($strStartDate) <= strtotime($strEndDate)) {
		$DayOfWeek = date("w", strtotime($strStartDate));
		$daytotal[$j++] = $strStartDate;
		$strStartDate = date ("Y-m-d", strtotime("+1 day", strtotime($strStartDate)));
	}
	//จบหาระยะเวลาที่ไปพัก

	$sql2 = "SELECT *  FROM Room_Hotel";
	$result2 = $conn->query($sql2);
	while($row2 = $result2->fetch_object()){ 
		if($row2->name=='Family'){
			echo "<div class='hotel-rooms'>";
		echo "<div class='hotel-left'>";
	//ทำลิ้งไปหน้ารายละเอียดเพิ่มเติม
		echo "<a href='<?= base_url();?>/dist/single.html'>";
		echo"<span class='glyphicon glyphicon-bed' aria-hidden='true'></span>".$row2->name."</a>";
		echo "<div class='hotel-left-grids'>";
		echo "<div class='hotel-left-one'>";
		echo "<img src='<?= base_url();?>/dist/images/26.jpg' alt='' />";
		echo "</div>";
		echo "<div class='hotel-left-two'>";
		echo "จำนวนผู้พักสูงสุด".$row2->num_people."คน";
		echo $row2->feature;
		echo "</div>";
		echo "<div class='clearfix'></div>";
		echo "</div>";
		echo "</div>";
	//echo $date;
		echo "<div class='hotel-right text-right'>";
		echo "<h4><span>";

		for($d=0;$d<(count($daytotal))-1;$d++){
		//echo $d." ".$daytotal[$d]."<BR>"; เเสดงวันที่ที่พักทั้งหมด
			if($daytotal[$d]=='2016/09/15'){
				$totalmoney = $totalmoney + $row2->price_holiday;
			}else{
				$checkWeekend = 'false';
				for($w=0;$w<count($weekendDay);$w++){
			//echo $weekendDay[$w]."<BR>";
					if($weekendDay[$w]==$daytotal[$d]){
						$checkWeekend = 'true';
						break;
					}else{
						$checkWeekend = 'false';
					}
				}
				if($checkWeekend=='true'){
					$totalmoney = $totalmoney + $row2->price_weekend;
				}else{
					$totalmoney = $totalmoney + $row2->price_formal;
				}
			}
		}
		echo "<div id='load'>0</div>";
		echo"</span>";
		echo $totalmoney;
		echo "&#3647";
		echo"</h4>";
		echo "<p>Best price</p>";
		echo"<form action='' method='post' enctype='multipart/form-data' name='form1' id='form1'>";
		echo "<select name='room' id='room' value='25'>
		      <option value=-1>จำนวนห้องพัก</option>
		      <option value=0>0</option>
		      <option value=1>1</option>
		      <option value=2>2</option>
		      <option value=3>3</option>
		      <option value=4>4</option>
		      <option value=5>5</option>
		      <option value=6>6</option>
		      </select>";
		//echo"<input type='text' name='room' id='room'>";
		echo"<input type='button' name='Button' value='Send' onclick='searchroom()' />  ";
		echo"</form>";
		echo "</div>";
		echo "<center>ขณะนี้เหลือห้องพัก";

		echo " 3 ";

		echo "ห้อง</center>";
		echo "<div class='clearfix'></div>";
		echo "</div>";
		}
	}
	echo"<div class='hotel-rooms'>";
	echo"<div class='hotel-left'>";
	echo"<center>";
	echo"<div class='hotel-left-grids'>";
	echo"<h4 style='color:black'>ชำระเงิน คลิ๊กที่นี่&nbsp;<img src='<?= base_url();?>/dist/images/Red_Arrow_Down.svg' alt='Click' height='20' width='20'></h4>";
	echo"<Form method='post' action='https://www.paysbuy.com/paynow.aspx?lang=t'> <input type='Hidden' Name='psb' value='psb'/> <input Type='Hidden' Name='biz' value='57160284@go.buu.ac.th'/> <input Type='Hidden' Name='inv' value='HT-PS-00001'/> <input Type='Hidden' Name='itm' value='จองโรงแรม'/> <input Type='Hidden' Name='amt' value='2'/> <input Type='Hidden' Name='postURL' value='<?= base_url();?>/index.php/welcome/thankyou'/> <input type='image' src='https://www.paysbuy.com/imgs/paypalcredit.png' border='0' name='submit' alt='Make it easier,PaySbuy - it's fast,free and secure!'/> </Form >";

	echo"<div class='clearfix'></div>";
	echo"</div>";
	echo"</center>";
	echo"</div>";
	echo"<div class='hotel-right text-right'>";
	echo"<h4 style='color:black;font-size:20pt'>";
	echo"ยอดชำระเงินรวม<br>";
	echo"XXXXXXX ";
	echo"บาท</h4>";
	echo"</div>";
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
				<li><a href="<?= base_url();?>/dist/index.html">HOME</a></li>
				<li><a href="<?= base_url();?>/dist/about.html">ABOUT</a></li>					
				<li><a href="<?= base_url();?>/dist/booking.html">BOOKING</a></li>
				<li><a href="<?= base_url();?>/dist/contact.html">CONTACT</a></li>
			</ul>
		</div>
		<div class="col-md-4 ftr_navi ftr">
			<h3>GET IN TOUCH</h3>
			<ul>
				<li>Burapha University</li>
				<li>089-999-9999</li>
			</ul>
		</div>
		<div class="col-md-4 ftr-logo">
			<a href="<?= base_url();?>/dist/index.html"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>3PAN HOTEL</a>

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
	<script type="text/javascript">

		function searchroom(){
		//alert(document.form1.room.value);

		var xmlhttp1;
		if(window.XMLHttpRequest){
	            //code for IE7+,Firefox,Chrome,Opera,Safari
	            xmlhttp1 = new XMLHttpRequest();
	        }else{
	            //code for IE6,IE5
	            xmlhttp1 = new ActiveXobject("Microsoft.XMLHTTP");
	        }
	        xmlhttp1.onreadystatechange = function(){
	        	document.getElementById("load").innerHTML = xmlhttp1.responseText;

	        }
	        //ajax1.open("POST","data_post.php",true);  
	        //ajax1.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");   
	       // ajax1.send("name="+document.form1.name.value+"&email="+document.form1.email.value); 

	        xmlhttp1.open("post","<?= base_url();?>/index.php/welcome/eiei",true);
	        xmlhttp1.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
	        xmlhttp1.send("room="+document.form1.room.value);
	        //xmlhttp1.send();
	    }
	</script>
</body>
</html>


