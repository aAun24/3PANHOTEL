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
								<li><a class="active" href="http://angsila.cs.buu.ac.th/~57160284/887240/Project/index.php/welcome/viewPrice" data-hover="ROOM">ROOM</a></li>
								<!-- -->
								<li><a href="http://angsila.cs.buu.ac.th/~57160284/887240/Project/index.php/welcome/Updategallery" data-hover="GALLERY">GALLERY</a></li>
								<li><a href="http://angsila.cs.buu.ac.th/~57160284/887240/Project/index.php/welcome/checkBooking" data-hover="BOOKING">BOOKING</a></li>
								<li><a href="http://angsila.cs.buu.ac.th/~57160284/887240/Project/index.php/welcome/checkmoney" data-hover="MONEY">MONEY</a></li>
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
		<h3 class="tittle">Price Update</h3>
		<div class="col-sm-2"></div>
		<div class="col-sm-8"> 
			<div id="load1">
			<table class="table">
			<thead>
				<tr>
					<th width="30%"><h4>ประเภท</h4></th>
					<th width="30%"><h4>ราคา </h4></th>
					<th width="30%"><h4>เปอร์เซ็นต์เพิ่มกำไร</h4></th>
					<th width="10%"><h4>แก้ไข</h4></th>
				</tr>
			</thead>
			<tbody>

		<?php
		$host = "localhost";
		$username = "it57160284";
		$password = "it57160284";
		$database = "it57160284";
		$conn = mysqli_connect($host,$username,$password,$database);
		$conn -> query("SET NAMES UTF8");
 		//$email = $_SESSION['email'];
		$sql1 = "SELECT *  FROM Room_Hotel where name='Superior'" ;
		$result1 = $conn->query($sql1);
		$sql2 = "SELECT *  FROM Room_Hotel where name='Deluxe'" ;
		$result2 = $conn->query($sql2);
		$sql3 = "SELECT *  FROM Room_Hotel where name='Suite'" ;
		$result3 = $conn->query($sql3);
		$sql4 = "SELECT *  FROM Room_Hotel where name='Family'" ;
		$result4 = $conn->query($sql4);

		
		
		while($row1=$result1->fetch_object()){ 
					
                    echo "<tr class=\"info\">";
                    echo "<td>$row1->name</td>";
                    echo "<td>$row1->price</td>";
                    //echo "<td>".(($row1->per*'100')-100)."%</td>";
                    echo "<td>$row1->percent</td>";
                    echo "<td><button type=\"button\" class=\"btn btn-warning\" onclick='update1()'>Edit</button></td>";
                    echo "</tr>";
                   
        }
       while($row2=$result2->fetch_object()){ 
					
                    echo "<tr class=\"info\">";
                    echo "<td>$row2->name</td>";
                    echo "<td>$row2->price</td>";
                    //echo "<td>".(($row2->per*'100')-100)."%</td>";
                    echo "<td>$row2->percent</td>";
                    echo "<td><button type=\"button\" class=\"btn btn-warning\" onclick='update2()'>Edit</button></td>";
                    echo "</tr>";
                 
        }
        while($row3=$result3->fetch_object()){ 
 
                    echo "<tr class=\"info\">";
                    echo "<td>$row3->name</td>";
                    echo "<td>$row3->price</td>";
                    //echo "<td>".(($row3->per*'100')-100)."%</td>";
                    echo "<td>$row3->percent</td>";
                    echo "<td><button type=\"button\" class=\"btn btn-warning\" onclick='update3()'>Edit</button></td>";
                    echo "</tr>";
                   
        }
        while($row4=$result4->fetch_object()){ 
 
                    echo "<tr class=\"info\">";
                    echo "<td>$row4->name</td>";
                    echo "<td>$row4->price</td>";
                    //echo "<td>".(($row4->per*'100')-100)."%</td>";
                    echo "<td>$row4->percent</td>";
                    echo "<td><button type=\"button\" class=\"btn btn-warning\" onclick='update4()'>Edit</button></td>";
                    echo "</tr>";
                    
        }
		
	?>
			</tbody>
		</table>
 		</div>
		
		<div class="col-sm-2"></div>
		<BR><BR>
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

<script type="text/javascript">
		function update1(){
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
	       xmlhttp1.open("post","http://angsila.cs.buu.ac.th/~57160284/887240/Project/index.php/welcome/form_updatePrice1",true);
	       xmlhttp1.send();
	    }


	    function update2(){
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
	       xmlhttp1.open("post","http://angsila.cs.buu.ac.th/~57160284/887240/Project/index.php/welcome/form_updatePrice2",true);
	       xmlhttp1.send();
	    }
	    function update3(){
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
	       xmlhttp1.open("post","http://angsila.cs.buu.ac.th/~57160284/887240/Project/index.php/welcome/form_updatePrice3",true);
	       xmlhttp1.send();
	    }
	    function update4(){
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
	       xmlhttp1.open("post","http://angsila.cs.buu.ac.th/~57160284/887240/Project/index.php/welcome/form_updatePrice4",true);
	       xmlhttp1.send();
	    }
</script>