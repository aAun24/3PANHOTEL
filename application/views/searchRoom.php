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
						<center><h2>กรุณาเลือกจำนวนห้องพักที่ต้องการ</h2></center>
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


								$sql1 = "SELECT *  FROM Room_Hotel WHERE name='Superior'";
								$result1 = $conn->query($sql1);
								if($row1 = $result1->fetch_object()){ 
									echo "<div class='hotel-rooms'>";
									echo "<div class='hotel-left'>";
										//ทำลิ้งไปหน้ารายละเอียดเพิ่มเติม
									echo "<a href='<?= base_url();?>/dist/single.html'>";
									echo"<span class='glyphicon glyphicon-bed' aria-hidden='true'></span>".$row1->name."</a>";
									echo "<div class='hotel-left-grids'>";
									echo "<div class='hotel-left-one'>";
									echo "<img src='<?= base_url();?>/dist/images/26.jpg' alt='' />";
									echo "</div>";
									echo "<div class='hotel-left-two'>";
									echo "จำนวนผู้พักสูงสุด".$row1->num_people."คน";
									echo $row1->feature;
									echo "</div>";
									echo "<div class='clearfix'></div>";
									echo "</div>";
									echo "</div>";
										//echo $date;
									echo "<div class='hotel-right text-right'>";
									echo"<h4>";
									echo "<div id='load1'>0&#3647</div>";
									echo"</h4>";
									echo "<p>Best price</p>";
									echo"<form action='' method='post' enctype='multipart/form-data' name='form1' id='form1'>";
									echo "<select name='room1' id='room1' onchange='searchroom1()'>
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
								//echo"<input type='button' name='Button' value='Send' onclick='searchroom()' />  ";
								echo"</form>";
								echo "</div>";
								echo "<center>ขณะนี้เหลือห้องพัก";

								echo " 3 ";

								echo "ห้อง</center>";
								echo "<div class='clearfix'></div>";
								echo "</div>";
								
								}


								$sql2 = "SELECT *  FROM Room_Hotel WHERE name='Deluxe'";
								$result2 = $conn->query($sql2);
								if($row2 = $result2->fetch_object()){ 
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
									echo"<h4>";
									echo "<div id='load2'>0&#3647</div>";
									echo"</h4>";
									echo "<p>Best price</p>";
									echo"<form action='' method='post' enctype='multipart/form-data' name='form2' id='form2'>";
									echo "<select name='room2' id='room2' onchange='searchroom2()'>
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
								//echo"<input type='button' name='Button' value='Send' onclick='searchroom()' />  ";
								echo"</form>";
								echo "</div>";
								echo "<center>ขณะนี้เหลือห้องพัก";

								echo " 3 ";

								echo "ห้อง</center>";
								echo "<div class='clearfix'></div>";
								echo "</div>";
								
								}

								$sql3 = "SELECT *  FROM Room_Hotel WHERE name='Suite'";
								$result3 = $conn->query($sql3);
								if($row3 = $result3->fetch_object()){ 
									echo "<div class='hotel-rooms'>";
									echo "<div class='hotel-left'>";
										//ทำลิ้งไปหน้ารายละเอียดเพิ่มเติม
									echo "<a href='<?= base_url();?>/dist/single.html'>";
									echo"<span class='glyphicon glyphicon-bed' aria-hidden='true'></span>".$row3->name."</a>";
									echo "<div class='hotel-left-grids'>";
									echo "<div class='hotel-left-one'>";
									echo "<img src='<?= base_url();?>/dist/images/26.jpg' alt='' />";
									echo "</div>";
									echo "<div class='hotel-left-two'>";
									echo "จำนวนผู้พักสูงสุด".$row3->num_people."คน";
									echo $row3->feature;
									echo "</div>";
									echo "<div class='clearfix'></div>";
									echo "</div>";
									echo "</div>";
										//echo $date;
									echo "<div class='hotel-right text-right'>";
									echo"<h4>";
									echo "<div id='load3'>0&#3647</div>";
									echo"</h4>";
									echo "<p>Best price</p>";
									echo"<form action='' method='post' enctype='multipart/form-data' name='form3' id='form3'>";
									echo "<select name='room3' id='room3' onchange='searchroom3()'>
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
								//echo"<input type='button' name='Button' value='Send' onclick='searchroom()' />  ";
								echo"</form>";
								echo "</div>";
								echo "<center>ขณะนี้เหลือห้องพัก";

								echo " 3 ";

								echo "ห้อง</center>";
								echo "<div class='clearfix'></div>";
								echo "</div>";
								
								}



								$sql4 = "SELECT *  FROM Room_Hotel WHERE name='Family'";
								$result4 = $conn->query($sql4);
								if($row4 = $result4->fetch_object()){ 
									echo "<div class='hotel-rooms'>";
									echo "<div class='hotel-left'>";
										//ทำลิ้งไปหน้ารายละเอียดเพิ่มเติม
									echo "<a href='<?= base_url();?>/dist/single.html'>";
									echo"<span class='glyphicon glyphicon-bed' aria-hidden='true'></span>".$row4->name."</a>";
									echo "<div class='hotel-left-grids'>";
									echo "<div class='hotel-left-one'>";
									echo "<img src='<?= base_url();?>/dist/images/26.jpg' alt='' />";
									echo "</div>";
									echo "<div class='hotel-left-two'>";
									echo "จำนวนผู้พักสูงสุด".$row4->num_people."คน";
									echo $row4->feature;
									echo "</div>";
									echo "<div class='clearfix'></div>";
									echo "</div>";
									echo "</div>";
										//echo $date;
									echo "<div class='hotel-right text-right'>";
									echo"<h4>";
									echo "<div id='load4'>0&#3647</div>";
									echo"</h4>";
									echo "<p>Best price</p>";
									echo"<form action='' method='post' enctype='multipart/form-data' name='form4' id='form4'>";
									echo "<select name='room4' id='room4' onchange='searchroom4()'>
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
								//echo"<input type='button' name='Button' value='Send' onclick='searchroom()' />  ";
								echo"</form>";
								echo "</div>";
								echo "<center>ขณะนี้เหลือห้องพัก";

								echo " 3 ";

								echo "ห้อง</center>";
								echo "<div class='clearfix'></div>";
								echo "</div>";
								
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
	    function searchroom4(){
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
	        	document.getElementById("load4").innerHTML = xmlhttp1.responseText;

	        }
	        //ajax1.open("POST","data_post.php",true);  
	        //ajax1.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");   
	       // ajax1.send("name="+document.form1.name.value+"&email="+document.form1.email.value); 

	       xmlhttp1.open("post","<?= base_url();?>/index.php/welcome/searchprice",true);
	       xmlhttp1.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
	       xmlhttp1.send("room="+document.form4.room4.value);
	        //xmlhttp1.send();
	    }

	    function searchroom3(){
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
	        	document.getElementById("load3").innerHTML = xmlhttp1.responseText;

	        }
	        //ajax1.open("POST","data_post.php",true);  
	        //ajax1.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");   
	       // ajax1.send("name="+document.form1.name.value+"&email="+document.form1.email.value); 

	       xmlhttp1.open("post","<?= base_url();?>/index.php/welcome/searchprice",true);
	       xmlhttp1.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
	       xmlhttp1.send("room="+document.form3.room3.value);
	        //xmlhttp1.send();
	    }

	    function searchroom2(){
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
	        	document.getElementById("load2").innerHTML = xmlhttp1.responseText;

	        }
	        //ajax1.open("POST","data_post.php",true);  
	        //ajax1.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");   
	       // ajax1.send("name="+document.form1.name.value+"&email="+document.form1.email.value); 

	       xmlhttp1.open("post","<?= base_url();?>/index.php/welcome/searchprice",true);
	       xmlhttp1.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
	       xmlhttp1.send("room="+document.form2.room2.value);
	        //xmlhttp1.send();
	    }

	    function searchroom1(){
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
	        	document.getElementById("load1").innerHTML = xmlhttp1.responseText;

	        }
	        //ajax1.open("POST","data_post.php",true);  
	        //ajax1.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");   
	       // ajax1.send("name="+document.form1.name.value+"&email="+document.form1.email.value); 

	       xmlhttp1.open("post","<?= base_url();?>/index.php/welcome/searchprice",true);
	       xmlhttp1.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
	       xmlhttp1.send("room="+document.form1.room1.value);
	        //xmlhttp1.send();
	    }
	</script>
</body>
</html>


