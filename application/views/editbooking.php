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
<link href="<?= base_url();?>/dist/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?= base_url();?>/dist/css/style.css" rel="stylesheet" type="text/css" media="all" />

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

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<!-- banner -->
<div class="banner page-head">
	<div class="container">
		<div class="header-nav">
			<div class="logo">
				<h1><a href="<?= base_url();?>"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>3PAN Hotel</a></h1>
			</div>
			<div class="navigation">
				<span class="menu"><img src="<?= base_url();?>/dist/images/menu.png" alt=""/></span>
				<nav class="cl-effect-11" id="cl-effect-11">
							<ul class="nav1">
								<li><a href="<?= base_url();?>/index.php/welcome/viewPrice" data-hover="HOME">HOME</a></li>
								<!--<li><a href="<?= base_url();?>/index.php/welcome/form_searchRoom" data-hover="BOOKING">BOOKING</a></li>-->
								<li><a class="active" href="<?= base_url();?>/index.php/welcome/Updategallery" data-hover="GALLERY">GALLERY</a></li>
								<li><a href="<?= base_url();?>/index.php/welcome/profile2" data-hover="PROFILE">PROFILE</a></li>
                                <li><a href="<?= base_url();?>/index.php/welcome/signout" data-hover="SIGNOUT">SIGNOUT</a></li>
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
		
		<?php
		$host = "localhost";
		$username = "root";
		$password = "";
		$database = "3panhotel";
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
					echo "<div id=\"load1\">";
					echo "<table class=\"table\">";
					echo "<thead>";
					echo "<tr>";
					echo "<th><h4>Room</h4></th><th><h4>Price </h4></th><th><h4>Percent</h4></th><th><h4>Edit</h4></th>";
					echo "</tr>";
					echo "</thead>";
                    echo "<tbody>";  
                    echo "<tr class=\"success\">";
                    echo "<td>$row1->name</td>";
                    echo "<td>$row1->price</td>";
                    //echo "<td>".(($row1->per*'100')-100)."%</td>";
                    echo "<td>$row1->per</td>";
                    echo "<td><button type=\"button\" class=\"btn btn-success\" onclick='update1()'>Edit</button></td>";
                    echo "</tr>";
                    echo "</tbody>";

                    echo "</table>";
 					
 					echo "</div>";
        }
       while($row2=$result2->fetch_object()){ 
					echo "<div id=\"load2\">";
					echo "<table class=\"table\">";
					echo "<thead>";
					echo "<tr>";
					echo "<th><h4>Room</h4></th><th><h4>Price </h4></th><th><h4>Percent</h4></th><th><h4>Edit</h4></th>";
					echo "</tr>";
					echo "</thead>";
                    echo "<tbody>";  
                    echo "<tr class=\"success\">";
                    echo "<td>$row2->name</td>";
                    echo "<td>$row2->price</td>";
                    //echo "<td>".(($row2->per*'100')-100)."%</td>";
                    echo "<td>$row2->per</td>";
                    echo "<td><button type=\"button\" class=\"btn btn-success\" onclick='update2()'>Edit</button></td>";
                    echo "</tr>";
                    echo "</tbody>";

                    echo "</table>";
 					
 					echo "</div>";
        }
        while($row3=$result3->fetch_object()){ 
					echo "<div id=\"load3\">";
					echo "<table class=\"table\">";
					echo "<thead>";
					echo "<tr>";
					echo "<th><h4>Room</h4></th><th><h4>Price </h4></th><th><h4>Percent</h4></th><th><h4>Edit</h4></th>";
					echo "</tr>";
					echo "</thead>";
                    echo "<tbody>";  
                    echo "<tr class=\"success\">";
                    echo "<td>$row3->name</td>";
                    echo "<td>$row3->price</td>";
                    //echo "<td>".(($row3->per*'100')-100)."%</td>";
                    echo "<td>$row3->per</td>";
                    echo "<td><button type=\"button\" class=\"btn btn-success\" onclick='update3()'>Edit</button></td>";
                    echo "</tr>";
                    echo "</tbody>";

                    echo "</table>";
 					
 					echo "</div>";
        }
        while($row4=$result4->fetch_object()){ 
					echo "<div id=\"load4\">";
					echo "<table class=\"table\">";
					echo "<thead>";
					echo "<tr>";
					echo "<th><h4>Room</h4></th><th><h4>Price </h4></th><th><h4>Percent</h4></th><th><h4>Edit</h4></th>";
					echo "</tr>";
					echo "</thead>";
                    echo "<tbody>";  
                    echo "<tr class=\"success\">";
                    echo "<td>$row4->name</td>";
                    echo "<td>$row4->price</td>";
                    //echo "<td>".(($row4->per*'100')-100)."%</td>";
                    echo "<td>$row4->per</td>";
                    echo "<td><button type=\"button\" class=\"btn btn-success\" onclick='update4()'>Edit</button></td>";
                    echo "</tr>";
                    echo "</tbody>";

                    echo "</table>";
 					
 					echo "</div>";
        }
		
	?>
		 
		</div>
		<div class="col-sm-2"></div>
	</div>
	
</div>

<!--//contact-->
							<!--footer-->
							<div class="footer">
								<div class="container">				 	
									<div class="col-md-4 ftr_navi ftr">
										<h3>NAVIGATION</h3>
										<ul>
											<li><a href="<?= base_url();?>/index.php/welcome/viewPrice" data-hover="HOME">HOME</a></li>
								<!--<li><a href="<?= base_url();?>/index.php/welcome/form_searchRoom" data-hover="BOOKING">BOOKING</a></li>-->
								<li><a class="active" href="<?= base_url();?>/index.php/welcome/Updategallery" data-hover="GALLERY">GALLERY</a></li>
								<li><a href="<?= base_url();?>/index.php/welcome/profile2" data-hover="PROFILE">PROFILE</a></li>
                                <li><a href="<?= base_url();?>/index.php/welcome/signout" data-hover="SIGNOUT">SIGNOUT</a></li>
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
</body>
</html>

<script type="text/javascript">
		function update1(){
		//alert("hello");

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
	       xmlhttp1.open("post","<?= base_url();?>/index.php/welcome/form_updatePrice1",true);
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
	        	document.getElementById("load2").innerHTML = xmlhttp1.responseText;
	        }
	       xmlhttp1.open("post","<?= base_url();?>/index.php/welcome/form_updatePrice2",true);
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
	        	document.getElementById("load3").innerHTML = xmlhttp1.responseText;
	        }
	       xmlhttp1.open("post","<?= base_url();?>/index.php/welcome/form_updatePrice3",true);
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
	        	document.getElementById("load4").innerHTML = xmlhttp1.responseText;
	        }
	       xmlhttp1.open("post","<?= base_url();?>/index.php/welcome/form_updatePrice4",true);
	       xmlhttp1.send();
	    }
</script>