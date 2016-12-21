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
	<title>3PAN Hotel a Hotel Category Flat Bootstrap Responsive Website Template | About :: w3layouts</title>
	<!-- for-mobile-apps -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="3PAN Hotel Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
		<!-- //for-mobile-apps -->
		<link rel="stylesheet" media="screen" href="https://fontlibrary.org/face/thsarabun-new" type="text/css"/>
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
		<style>
			h3{
				font-family: 'THSarabunNewRegular'; 
   				font-size: 28px; 
   				font-style: normal; 
   				color: black;
			}
			p{
				font-family: 'THSarabunNewRegular'; 
   				font-size: 26px; 
   				font-style: normal;
   				color: blue;
			}
			.doubleUnderline{
			border-bottom: 2px double;
			}
		</style>
	</head>
	<body>
		<!-- banner -->
		<div class="banner page-head">
			<div class="container">
				<div class="header-nav">
					<div class="logo">
						<h1><a href="http://angsila.cs.buu.ac.th/~57160284/887240/Project"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>3PAN HOTEL</a></h1>
					</div>
					<div class="navigation">
						<span class="menu"><img src="http://angsila.cs.buu.ac.th/~57160284/887240/Project/dist/images/menu.png" alt=""/></span>
						<nav class="cl-effect-11" id="cl-effect-11">
							<ul class="nav1">
								<li><a  href="http://angsila.cs.buu.ac.th/~57160284/887240/Project/index.php/welcome/sell1" data-hover="SELL">SELL</a></li>
								<!--<li><a href="http://angsila.cs.buu.ac.th/~57160284/887240/Project/index.php/welcome/form_searchRoom" data-hover="BOOKING">BOOKING</a></li>-->
								<li><a class="active" href="http://angsila.cs.buu.ac.th/~57160284/887240/Project/index.php/welcome/account" data-hover="ACCOUNT">ACCOUNT</a></li>
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


					<div class="clearfix"></div>
				</div>
			</div>
		</div>
		<BR><BR>
			<div class="row">
				<div class="col-md-3"></div>
				<div class="col-md-6">
					
	<table class="table table-hover">
	 <tr3
        <td colspan="3" align="center">
        <H3><b>ปีที่ต้องการค้นหา :</b>
        <form action='' method='post' enctype='multipart/form-data' name='form1' id='form1'>
		<?php
			$host = "localhost";
			$username = "it57160284";
			$password = "it57160284";
			$database = "it57160284";
			$conn = mysqli_connect($host,$username,$password,$database);
			$conn -> query("SET NAMES UTF8");
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
			echo"<select name=\"year\" onchange=\"detailaccount()\">";
			for($i=$min;$i<=$max;$i++){
				if($i==date("Y")-1)
				echo"<option value=$i selected>$i</option>";
				else
					echo"<option value=$i>$i</option>";
			}
			echo "</select>";
	
			?>
			</form>
		</H3>
         </td>
      </tr>
	</table>
	<div class="panel panel-default" style="width:100%;">
						<!--<div class="panel-heading">Panel Heading</div>-->
	<div class="panel-body" style="width:100%;">
	
	<div class="table-responsive">
	<table class="table table-hover">
    <tbody>
      	<td colspan="3" align="center"><H3><b>บริษัท 3PAN จำกัด</b></H3></td>
      </tr>
      <tr>
      	<td colspan="3" align="center"><H3><b>งบกำไรขาดทุน</b></H3></td>
      </tr>
      <tr>
      	<td colspan="3" align="center"><H3><b>ณ วันที่ 31 ธันวาคม ปี2015</b></H3></td>
      </tr>   
      <tr>
        <td colspan="3"><p><b>รายได้ :-</b></p></td>
      </tr>
      <tr>
        <td><p><b>รายได้ค่าบริการ</b></p></td>
        <td align="right"><p>250,000</p></td>
        <td></td>
      </tr>
      <tr>
        <td><p><b>รายได้ค่าอาหาร</b></p></td>
        <td align="right"><p>700,000</p></td>
        <td></td>
      </tr>
      <tr>
        <td><p><b>รายได้ค่าห้องพัก</b></p></td>
        <td><p align="right">5,200,000</p></td>
        <td align="right"><p><u>6,150,000 บาท</u></p></td>
      </tr>
      <tr>
        <td colspan="3"><p><b>ค่าใช้จ่าย :-</b></p></td>
      </tr>
	  <tr>
		<td><p><b>ค่าใช้จ่ายในห้องพัก</b></p></td>
		<td align="right"><p>456,000</p></td>
		<td></td>
	  </tr>
	  <tr>
	  	<td><p><b>ค่าบริการ</b></p></td>
	  	<td align="right"><p>787,000</p></td>
	  	<td></td>
	  </tr>
	  <tr>
	  	<td><p><b>เงินเดือนพนักงาน</b></p></td>
	  	<td align="right"><p>800,000</p></td>
	  	<td></td>
	  </tr>
	  <tr>
	  	<td><p><b>ภาษี</b></p></td>
	  	<td><p align="right">1,230,000</p></td>
	  	<td align="right"><p><u>3,273,000 บาท</u></p></td>
	  </tr>
	  <tr>
	  	<td colspan="2" align="center"><p>กำไร</p></td>
	  	<td  align="right"><p><u>2,877,000 บาท</u></p></td>
	  </tr>
    </tbody>
  </table>	
  </div>
						
						</div>
					</div>

				</div>
				<div class="col-md-3"></div>
			</div>

  <script type="text/javascript">
			function detailaccount(){
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

	        }
	        //ajax1.open("POST","data_post.php",true);  
	        //ajax1.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");   
	       // ajax1.send("name="+document.form1.name.value+"&email="+document.form1.email.value); 

	       xmlhttp1.open("post","http://angsila.cs.buu.ac.th/~57160284/887240/Project/index.php/welcome/detailaccount",true);
	       xmlhttp1.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
	       xmlhttp1.send("month="+document.form1.month.value+"&year="+document.form1.year.value);
	       // ajax1.send("name="+document.form1.name.value+"&email="+document.form1.email.value); 
	        //xmlhttp1.send();
	    }

		</script>


								<!-- //banner -->
							<!--footer-->
							<div class="footer">
								<div class="container">				 	
									<div class="col-md-4 ftr_navi ftr">
										<h3>NAVIGATION</h3>
										<ul>
											<li><a class="active" href="http://angsila.cs.buu.ac.th/~57160284/887240/Project/index.php/welcome/sell1" data-hover="SELL">SELL</a></li>
								<!--<li><a href="http://angsila.cs.buu.ac.th/~57160284/887240/Project/index.php/welcome/form_searchRoom" data-hover="BOOKING">BOOKING</a></li>-->
								<li><a href="http://angsila.cs.buu.ac.th/~57160284/887240/Project/index.php/welcome/account" data-hover="ACCOUNT">ACCOUNT</a></li>
								<li><a href="http://angsila.cs.buu.ac.th/~57160284/887240/Project/index.php/welcome/comment" data-hover="COMMENT">COMMENT</a></li>
								<li><a href="http://angsila.cs.buu.ac.th/~57160284/887240/Project/index.php/welcome/signout" data-hover="SINGOUT">SIGNOUT</a></li>
					
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