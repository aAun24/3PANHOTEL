<?php
session_start();
if(empty($_SESSION['email'])){
  //echo "ว่าง";
  echo"<meta http-equiv='refresh' content='0;URL=#'>";
}else{
  //echo $_SESSION['firstname'];
	$_SESSION['paymoney']=0;
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
									<li><a class="active" href="<?= base_url();?>/index.php/welcome/booking2" data-hover="HOME">HOME</a></li>
									<li><a href="<?= base_url();?>/index.php/welcome/detail12" data-hover="ROOM">ROOM</a></li>
									<li><a href="<?= base_url();?>/index.php/welcome/booking2" data-hover="Booking">Booking</a></li>
									<li><a href="<?= base_url();?>/index.php/welcome/file_order_list2" data-hover="FILE">FILE</a></li>
									
									<li><a href="<?= base_url();?>/index.php/welcome/contact2" data-hover="CONTACT">CONTACT</a></li>
									 <li><a href="<?= base_url();?>/index.php/welcome/profile" data-hover="PROFILE">PROFILE</a></li>
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
								?>

									<img src='<?php echo base_url('/dist/images/susu4.jpg'); ?>' width='300px'
									height='200px'>

								<?php
									echo "</div>";
									echo "<div class='hotel-left-two'>";
									echo "จำนวนผู้พักสูงสุด".$row1->num_people."คน";
									echo $row1->feature;
									echo "ราคาวันธรรมดา $row1->price_formal บาท <BR>";
									echo "ราคาวันหยุดเสาร์-อาทิตย์ $row1->price_weekend บาท <BR>";
									echo "ราคาวันหยุดเทศกาล $row1->price_holiday บาท <BR>";
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
									$SumRoomSuperior =0;
									$SumBookSuperior =0;
									$sql6 = "SELECT sum_room as SumRoomSuperior FROM Room_Hotel Where name = 'Superior'";
									$re1 = $conn->query($sql6);
									if($row6 = $re1->fetch_object()){ 
										$SumRoomSuperior =  $row6->SumRoomSuperior;
									}
									$sql7 = "SELECT sum(room1) as SumBookSuperior FROM Book_Hotel Where name_room1 = 'Superior'
									    and   (status = 'ชำระเงินแล้ว' or status = 'ค้างชำระ'
                                              or status = 'เข้าพักแล้ว') ";
									$re2 = $conn->query($sql7);
									if($row7 = $re2->fetch_object()){ 
										$SumBookSuperior = $row7->SumBookSuperior;
									}	
									$haveroom1 = $SumRoomSuperior-$SumBookSuperior;
									echo"<form action='' method='post' enctype='multipart/form-data' name='form1' id='form1'>
									<input type='hidden' name='name_room1' value='Superior'>";
									echo "<select name='room1' id='room1' onchange='searchroom1()'>";
									echo"<option value=0>จำนวนห้องพัก</option>";
									for($i=1;$i<=$haveroom1;$i++){
										echo"<option value=$i>$i</option>";
									
									}
									echo"</select>";

							//echo"<input type='text' name='room' id='room'>";
								//echo"<input type='button' name='Button' value='Send' onclick='searchroom()' />  ";
								echo"</form>";
								echo "</div>";
								if($haveroom1>0){
									echo "<center>ขณะนี้เหลือห้องพัก ";
									echo $haveroom1;
									echo " ห้อง</center>";
								}else{
									echo "<center>ขณะนี้ไม่มีห้องว่าง</center>";
								}
								
								
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
							?>

									<img src='<?php echo base_url('/dist/images/Deluxe4.jpg'); ?>' width='300px'
									height='200px'>

							<?php
								echo "</div>";
								echo "<div class='hotel-left-two'>";
								echo "จำนวนผู้พักสูงสุด".$row2->num_people."คน";
								echo $row2->feature;
								echo "ราคาวันธรรมดา $row2->price_formal บาท <BR>";
								echo "ราคาวันหยุดเสาร์-อาทิตย์ $row2->price_weekend บาท <BR>";
								echo "ราคาวันหยุดเทศกาล $row2->price_holiday บาท <BR>";
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
								$SumRoomDeluxe =0;
								$SumBookDeluxe =0;
								$sql8 = "SELECT sum_room as SumRoomDeluxe FROM Room_Hotel Where name = 'Deluxe'";
								$re3 = $conn->query($sql8);
								if($row8 = $re3->fetch_object()){ 
									$SumRoomDeluxe =  $row8->SumRoomDeluxe;
								}
								$sql9 = "SELECT sum(room2) as SumBookDeluxe FROM Book_Hotel Where name_room2 = 'Deluxe'  and   (status = 'ชำระเงินแล้ว' or status = 'ค้างชำระ'
                                              or status = 'เข้าพักแล้ว')";
								$re4 = $conn->query($sql9);
								if($row9 = $re4->fetch_object()){ 
									$SumBookDeluxe = $row9->SumBookDeluxe;
								}	

								$haveroom2 =  $SumRoomDeluxe-$SumBookDeluxe;

								echo"<form action='' method='post' enctype='multipart/form-data' name='form2' id='form2'><input type='hidden' name='name_room2' value='Deluxe'>";
								echo "<select name='room2' id='room2' onchange='searchroom2()'>";
									echo"<option value=0>จำนวนห้องพัก</option>";
									for($i=1;$i<=$haveroom2;$i++){
										echo"<option value=$i>$i</option>";
									
									}
								
								echo"</select>";
							//echo"<input type='text' name='room' id='room'>";
								//echo"<input type='button' name='Button' value='Send' onclick='searchroom()' />  ";
							echo"</form>";
							echo "</div>";
								if($haveroom2>0){
									echo "<center>ขณะนี้เหลือห้องพัก ";
									echo $haveroom2;
									echo " ห้อง</center>";
								}else{
									echo "<center>ขณะนี้ไม่มีห้องว่าง</center>";
								}

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
						?>

									<img src='<?php echo base_url('/dist/images/Suite1.jpg'); ?>' width='300px'
									height='200px'>

							<?php
							echo "</div>";
							echo "<div class='hotel-left-two'>";
							echo "จำนวนผู้พักสูงสุด".$row3->num_people."คน";
							echo $row3->feature;
							echo "ราคาวันธรรมดา $row3->price_formal บาท <BR>";
								echo "ราคาวันหยุดเสาร์-อาทิตย์ $row3->price_weekend บาท <BR>";
								echo "ราคาวันหยุดเทศกาล $row3->price_holiday บาท <BR>";
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
								$SumRoomSuite =0;
								$SumBookSuite =0;
								$sql10 = "SELECT sum_room as SumRoomSuite FROM Room_Hotel Where name = 'Suite'";
								$re5 = $conn->query($sql10);
								if($row10 = $re5->fetch_object()){ 
									$SumRoomSuite =  $row10->SumRoomSuite;
								}
								$sql11 = "SELECT sum(room3) as SumBookSuite FROM Book_Hotel Where name_room3 = 'Suite'  and   (status = 'ชำระเงินแล้ว' or status = 'ค้างชำระ'
                                              or status = 'เข้าพักแล้ว')";
								$re6 = $conn->query($sql11);
								if($row11 = $re6->fetch_object()){ 
									$SumBookSuite = $row11->SumBookSuite;
								}	

								$haveroom3 = $SumRoomSuite-$SumBookSuite;
							echo"<form action='' method='post' enctype='multipart/form-data' name='form3' id='form3'><input type='hidden' name='name_room3' value='Suite'>";
							echo "<select name='room3' id='room3' onchange='searchroom3()'>";
								echo"<option value=0>จำนวนห้องพัก</option>";
									for($i=1;$i<=$haveroom3;$i++){
										echo"<option value=$i>$i</option>";
									
									}
							echo"</select>";
							//echo"<input type='text' name='room' id='room'>";
								//echo"<input type='button' name='Button' value='Send' onclick='searchroom()' />  ";
						echo"</form>";
						echo "</div>";

								if($haveroom3>0){
									echo "<center>ขณะนี้เหลือห้องพัก ";
									echo $haveroom3;
									echo " ห้อง</center>";
								}else{
									echo "<center>ขณะนี้ไม่มีห้องว่าง</center>";
								} 

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
					?>

									<img src='<?php echo base_url('/dist/images/family6.jpg'); ?>' width='300px'
									height='200px'>

							<?php
						echo "</div>";
						echo "<div class='hotel-left-two'>";
						echo "จำนวนผู้พักสูงสุด".$row4->num_people."คน";
						echo $row4->feature;
						echo "ราคาวันธรรมดา $row4->price_formal บาท <BR>";
						echo "ราคาวันหยุดเสาร์-อาทิตย์ $row4->price_weekend บาท <BR>";
						echo "ราคาวันหยุดเทศกาล $row4->price_holiday บาท <BR>";
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
								$SumRoomFamily =0;
								$SumBookFamily =0;
								$sql12 = "SELECT sum_room as SumRoomFamily FROM Room_Hotel Where name = 'Family'";
								$re7 = $conn->query($sql12);
								if($row12 = $re7->fetch_object()){ 
									$SumRoomFamily =  $row12->SumRoomFamily;
								}
								$sql13 = "SELECT sum(room4) as SumBookFamily FROM Book_Hotel Where name_room4 = 'Family' and (status = 'ชำระเงินแล้ว' or status = 'ค้างชำระ'
                                              or status = 'เข้าพักแล้ว')";
								$re8 = $conn->query($sql13);
								if($row13 = $re8->fetch_object()){ 
									$SumBookFamily = $row13->SumBookFamily;
								}	

								$haveroom4 = $SumRoomFamily-$SumBookFamily;
						echo"<form action='' method='post' enctype='multipart/form-data' name='form4' id='form4'><input type='hidden' name='name_room4' value='Family'>";
						echo "<select name='room4' id='room4' onchange='searchroom4()'>";
						echo"<option value=0>จำนวนห้องพัก</option>";
									for($i=1;$i<=$haveroom4;$i++){
										echo"<option value=$i>$i</option>";
									}
						echo"</select>";
							//echo"<input type='text' name='room' id='room'>";
								//echo"<input type='button' name='Button' value='Send' onclick='searchroom()' />  ";
					echo"</form>";
					echo "</div>";
					
								if($haveroom4>0){
									echo "<center>ขณะนี้เหลือห้องพัก ";
									echo $haveroom4;
									echo " ห้อง</center>";
								}else{
									echo "<center>ขณะนี้ไม่มีห้องว่าง</center>";
								}  

					echo "<div class='clearfix'></div>";
					echo "</div>";
					
				}



				echo"<div class='hotel-rooms'>";
				echo"<div class='hotel-left'>";
				echo"<center>";
				echo"<div class='hotel-left-grids'>";
				//echo"<h4 style='color:black'>บันทึกการจอง คลิ๊กที่นี่&nbsp;<img src='/dist/images/Red_Arrow_Down.svg' alt='Click' height='20px' width='20px'></h4>";

				//echo"<a href='/index.php/welcome/Book_insert'><input type='image' src='/dist/images/book-now4.gif' width=280px border='0' name='book' alt='booking'/ id='submitBOOK'></a>";
				?>
					<input type='image' src='<?php echo base_url('dist/images/book-now4.gif'); ?>' width=280px border='0' name='book' alt='booking'/ id='submitBOOK'>
				<?php
				echo"<div class='clearfix'></div>";
				echo"</div>";
				echo"</center>";
				echo"</div>";
				echo"<div class='hotel-right text-right'>";
				echo"<h4 style='color:black;font-size:20pt'>";
				echo"ยอดชำระเงินรวม<br>";
				/*$_SESSION['paymoney'] = $_SESSION['pay_room1']+$_SESSION['pay_room2']+$_SESSION['pay_room3']+$_SESSION['pay_room4'];
				echo $_SESSION['paymoney'];*/
				echo "<div id='paymoney'>0 บาท</div>";
				echo"</h4>";
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
				<li><a href="<?= base_url();?>/index.php/welcome/index2">HOME</a></li>
				<li><a href="<?= base_url();?>/index.php/welcome/detail12">ROOM</a></li>
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
	        	add_Paymoney();

	        }
	        //ajax1.open("POST","data_post.php",true);  
	        //ajax1.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");   
	       // ajax1.send("name="+document.form1.name.value+"&email="+document.form1.email.value); 

	       xmlhttp1.open("post","<?= base_url();?>/index.php/welcome/searchprice2",true);
	       xmlhttp1.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
	       xmlhttp1.send("room="+document.form4.room4.value+"&name_room="+document.form4.name_room4.value);
	        //xmlhttp1.send();
	    }

	    function searchroom3(){
		//alert(document.form3.name_room3.value);

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
	        	add_Paymoney();

	        }
	        //ajax1.open("POST","data_post.php",true);  
	        //ajax1.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");   
	       // ajax1.send("name="+document.form1.name.value+"&email="+document.form1.email.value); 

	       xmlhttp1.open("post","<?= base_url();?>/index.php/welcome/searchprice2",true);
	       xmlhttp1.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
	       xmlhttp1.send("room="+document.form3.room3.value+"&name_room="+document.form3.name_room3.value);
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
	        	add_Paymoney();

	        }
	        //ajax1.open("POST","data_post.php",true);  
	        //ajax1.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");   
	       // ajax1.send("name="+document.form1.name.value+"&email="+document.form1.email.value); 

	       xmlhttp1.open("post","<?= base_url();?>/index.php/welcome/searchprice2",true);
	       xmlhttp1.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
	       xmlhttp1.send("room="+document.form2.room2.value+"&name_room="+document.form2.name_room2.value);
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
	        	add_Paymoney();

	        }
	        //ajax1.open("POST","data_post.php",true);  
	        //ajax1.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");   
	       // ajax1.send("name="+document.form1.name.value+"&email="+document.form1.email.value); 

	       xmlhttp1.open("post","<?= base_url();?>/index.php/welcome/searchprice2",true);
	       xmlhttp1.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
	       xmlhttp1.send("room="+document.form1.room1.value+"&name_room="+document.form1.name_room1.value);
	       // ajax1.send("name="+document.form1.name.value+"&email="+document.form1.email.value); 
	        //xmlhttp1.send();
	    }
	    function add_Paymoney(){
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
	        	document.getElementById("paymoney").innerHTML = xmlhttp1.responseText;

	        }
	       xmlhttp1.open("post","<?= base_url();?>/index.php/welcome/paymoney",true);
	       xmlhttp1.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
	       xmlhttp1.send();

	    }
	    //function checkbook(){
	    	$('#submitBOOK').on('click',function(event){
	    		//alert("มาbookingแล้ว");
			  	var valid = true;
			  	errorMessage = "";
			  	if($('#room1').val()=='0'&&$('#room2').val()=='0'
			  	 &&$('#room3').val()=='0'&&$('#room4').val()=='0'){
			  		errorMessage += "โปรดเลือกจำนวนห้องพัก\n";
			  		valid  = false;
			  		//alert("false");
			  	}
			  	if(!valid && errorMessage.length >0){
			  		alert(errorMessage);
			  		event.preventDefault();
			  	}else{
			  		window.location = "<?= base_url();?>/index.php/welcome/Book_insert";
			  	}
					
				});
	    //}
	    /*function paysbuy(){
	    	ไม่ได้ใช้
	    	//alert("มาbookingแล้ว");
	    	var xmlhttp1;
			if(window.XMLHttpRequest){
		            //code for IE7+,Firefox,Chrome,Opera,Safari
		            xmlhttp1 = new XMLHttpRequest();
		        }else{
		            //code for IE6,IE5
		            xmlhttp1 = new ActiveXobject("Microsoft.XMLHTTP");
		        }
		        xmlhttp1.onreadystatechange = function(){
		        }
		       xmlhttp1.open("post","<?= base_url();?>/index.php/welcome/paysbuy",true);
		       xmlhttp1.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
		       xmlhttp1.send();
	    }*/
	</script>
</body>
</html>


