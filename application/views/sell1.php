<?php
session_start();
if(empty($_SESSION['email'])){
  //echo "ว่าง";
  echo"<meta http-equiv='refresh' content='0;URL=#'>";
}else{
  //echo $_SESSION['firstname'];
  //echo "<meta http-equiv='refresh' content='0;URL=index.php/welcome/booking2'>";
      /*if($_SESSION['status']=='manager'){
        echo"<meta http-equiv='refresh' content='0;URL=sell1'>";
      }*/
      if($_SESSION['status']=='staff'){
        echo"<meta http-equiv='refresh' content='0;URL=viewPrice'>";
      }
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
	<title>3PAN HOTEL a Hotel Category Flat Bootstrap Responsive Website Template | single :: w3layouts</title>
	<!-- for-mobile-apps -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="3PAN HOTEL Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
		<!-- //for-mobile-apps -->
		 <meta name="viewport" content="width=device-width, initial-scale=1">
  		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
		<style>
			.button {
			  display: inline-block;
			  border-radius: 4px;
			  background-color: #f4511e;
			  border: none;
			  color: #FFFFFF;
			  text-align: center;
			  font-size: 24px;
			  padding: 0px;
			  width: 130px;
			  height:35px;
			  transition: all 0.5s;
			  cursor: pointer;
			  margin: 5px;
			}

			.button span {
			  cursor: pointer;
			  display: inline-block;
			  position: relative;
			  transition: 0.5s;
			}

			.button span:after {
			  content: '»';
			  position: absolute;
			  opacity: 0;
			  top: 0;
			  right: -20px;
			  transition: 0.5s;
			}

			.button:hover span {
			  padding-right: 25px;
			}

			.button:hover span:after {
			  opacity: 1;
			  right: 0;
			}
			select{				
				border: 2px solid red;
			}
			</style>
	</head>
	<body>
		<?php
			$host = "localhost";
			$username = "it57160284";
			$password = "it57160284";
			$database = "it57160284";
			$conn = mysqli_connect($host,$username,$password,$database);
			$conn -> query("SET NAMES UTF8");
		?>
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
								<li><a class="active" href="http://angsila.cs.buu.ac.th/~57160284/887240/Project/index.php/welcome/sell1" data-hover="SELL">SELL</a></li>
								<!--<li><a href="http://angsila.cs.buu.ac.th/~57160284/887240/Project/index.php/welcome/form_searchRoom" data-hover="BOOKING">BOOKING</a></li>-->
								<li><a href="http://angsila.cs.buu.ac.th/~57160284/887240/Project/index.php/welcome/account" data-hover="ACCOUNT">ACCOUNT</a></li>
								<li><a href="http://angsila.cs.buu.ac.th/~57160284/887240/Project/index.php/welcome/comment" data-hover="COMMENT">COMMENT</a></li>
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
					<!--<div class="social-icons">
						<ul>
							<li><a href="http://angsila.cs.buu.ac.th/~57160284/887240/Project/dist/#" class="f1"></a></li>
							<li><a href="http://angsila.cs.buu.ac.th/~57160284/887240/Project/dist/#" class="f2"></a></li>
							<li><a href="http://angsila.cs.buu.ac.th/~57160284/887240/Project/dist/#" class="f3"></a></li>
							<li><a href="http://angsila.cs.buu.ac.th/~57160284/887240/Project/dist/#" class="f4"></a></li>
						</ul>
					</div>-->
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
		<!-- //banner -->
		<BR><BR>

		<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6" align="center">
			<h2>บริษัท 3PAN จำกัด</h2>
			<BR>
			<h3>รายละเอียดสรุปยอดขาย</h3>
			<h3>
			<BR>
			<form action='' method='post' enctype='multipart/form-data' name='form1' id='form1'>
			ประจำเดือน
			<select name="month" onchange="detailsell()">
				<option value="01">มกราคม</option>
				<option value="02">กุมภาพันธ์</option>
				<option value="03">มีนาคม</option>
				<option value="04">เมษายน</option>
				<option value="05">พฤษภาคม</option>
				<option value="06">มิถุนายน</option>
				<option value="07">กรกฏาคม</option>
				<option value="08">สิงหาคม</option>
				<option value="09">กันยายน</option>
				<option value="10">ตุลาคม</option>
				<option value="11" selected>พฤศจิกายน</option>
				<option value="12">ธันวาคม</option>
				<option value="13">ทั้งปี</option>
			</select>  
			ปี 
			<?php

			$sql1 = "SELECT YEAR(checkout) as year from Book_Hotel;";
			$sql2 = "SELECT YEAR(checkin) as year from Book_Hotel;";
			$result1 = $conn->query($sql1);
			$result2 = $conn->query($sql2);
			$max=0;$min=100000;
				while($row1 = $result1->fetch_array()){ 
					if($row1['year']>=$max)$max = $row1['year'];
				
				}
				while($row2 = $result2->fetch_array()){ 
					if($row2['year']<=$min)$min = $row2['year'];
				
				}

			//echo "<input type=\"number\" name=\"quantity\" min=\"$min\" max=\"$max\" value=\"2016\">";
			// echo "<BR>";
			// echo $min;
			// echo $max;
			echo"<select name=\"year\" onchange=\"detailsell()\">";
			for($i=$min;$i<=$max;$i++){
				if($i==date("Y"))
				echo"<option value=$i selected>$i</option>";
				else
					echo"<option value=$i>$i</option>";
			}
			echo "</select>";
	
			?>
			
			<!-- <button class="button" style="vertical-align:middle" onclick="detailsell()"><span>CLICK</span> -->
			</form>
			</h3>
			
		</div>
		<div class="col-md-3"></div>
		</div>
		<br><br>
<div id="load1">
		<div class="row">
		<div class="col-md-1"></div>
		<div class="col-md-10" style="border: 2px solid #cccc99;">
				
					<div class="row" style="border: 2px solid #cccc99;">
						<center>
						<div class="col-md-1" >ลำดับ</div>
						<div class="col-md-2">ชื่อ-นามสกุล</div>
						<div class="col-md-3">วันที่เช็คอิน-เช็คเอาท์</div>
						<div class="col-md-4">ห้องพัก</div>
						<div class="col-md-2">จำนวนเงิน</div>		
						</center>	
					</div>
					<?php
					$sql3 = "SELECT * from Book_Hotel where YEAR(datetime)='2016' and MONTH(datetime)='11' and (status='เข้าพักแล้ว'or status = 'ไม่เข้าพัก');";
					$result3 = $conn->query($sql3);
				
					echo"<div class=\"row\">
						<center>";
					$i=0;
					while($row3 = $result3->fetch_object()){ 
					$i++;
					echo"<div class=\"col-md-1\">$i</div>";
					$sql4 = "SELECT firstname,lastname from SignUp_Hotel,Book_Hotel where email='$row3->byuser';";
					$result4 = $conn->query($sql4);
					$row4 = $result4->fetch_object();
					echo"<div class=\"col-md-2\">$row4->firstname $row4->lastname</div>
						<div class=\"col-md-3\">$row3->checkin"."/"."$row3->checkout</div>";
						$s1 = "";$s2 = "";$s3 = "";$s4 = "";
								$room1=$row3->room1;$room2=$row3->room2;
								$room3=$row3->room3;$room4=$row3->room4;
								//Superior ห้องละ 3500 บาท  2 ห้อง  2 คืน  ราคารวม  14400 บาท
								if($room1!="0"){
									$s1 = $row3->name_room1." ".$room1." ห้อง ";
								}
								if($room2!="0"){
									$s2 = $row3->name_room2." ".$room2." ห้อง ";
								}
								if($room3!="0"){
									$s3 = $row3->name_room3." ".$room3." ห้อง ";
								}
								if($room4!="0"){
									$s4 = $row3->name_room4." ".$room4." ห้อง ";
								}
								$s = $s1.$s2.$s3.$s4;
					echo"<div class=\"col-md-4\">$s</div>
						<div class=\"col-md-2\">$row3->paymoney บาท</div>	";	
					}
					echo"
					</center>	
					</div>";
					
					?>

		</div>
		</div>
		<BR><BR>
		<div class="row">		
		<div class="col-md-8">
			
		</div>

		<div class="col-md-4">
					<?php
					$sql5 = "SELECT sum(people) as people , count(id_book) as book , sum(paymoney) as money from Book_Hotel where YEAR(datetime)='2016' and MONTH(datetime)='11' and (status='เข้าพักแล้ว'or status = 'ไม่เข้าพัก');";
					$result5 = $conn->query($sql5);
					$i=0;
					$row5 = $result5->fetch_object();
					echo "<h4 style=\"font-size:18pt;\">จำนวนยอดเข้าพัก : $row5->book ใบ   </h4>";
					echo "<h4 style=\"font-size:18pt;\">ยอดเงินรวม : $row5->money บาท</h4>";
					?> 
			</div>
			
		</div>
		</div>


		<div class="col-md-1"></div>
		<BR><BR><BR><BR>
		</div>
</div>
		<script type="text/javascript">
			function detailsell(){
		//alert(document.form1.year.value);
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
	        	changeDetail();

	        }
	        //ajax1.open("POST","data_post.php",true);  
	        //ajax1.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");   
	       // ajax1.send("name="+document.form1.name.value+"&email="+document.form1.email.value); 

	       xmlhttp1.open("post","http://angsila.cs.buu.ac.th/~57160284/887240/Project/index.php/welcome/detailsell",true);
	       xmlhttp1.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
	       xmlhttp1.send("month="+document.form1.month.value+"&year="+document.form1.year.value);
	       // ajax1.send("name="+document.form1.name.value+"&email="+document.form1.email.value); 
	        //xmlhttp1.send();
	    }
		</script>












		<!--footer-->
		<div class="footer">
			<div class="container">				 	
				<div class="col-md-4 ftr_navi ftr">
					<h4>NAVIGATION</h4>
					<ul>
						<li><a class="active" href="http://angsila.cs.buu.ac.th/~57160284/887240/Project/index.php/welcome/sell1" data-hover="SELL">SELL</a></li>
								<!--<li><a href="http://angsila.cs.buu.ac.th/~57160284/887240/Project/index.php/welcome/form_searchRoom" data-hover="BOOKING">BOOKING</a></li>-->
								<li><a href="http://angsila.cs.buu.ac.th/~57160284/887240/Project/index.php/welcome/account" data-hover="ACCOUNT">ACCOUNT</a></li>
								<li><a href="http://angsila.cs.buu.ac.th/~57160284/887240/Project/index.php/welcome/comment" data-hover="COMMENT">COMMENT</a></li>
								<li><a href="http://angsila.cs.buu.ac.th/~57160284/887240/Project/index.php/welcome/signout" data-hover="SIGNOUT">SIGNOUT</a></li>
					</ul>
				</div>
				<div class="col-md-4 ftr_navi ftr">
					<h4>GET IN TOUCH</h4>
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