<?php
session_start();
if(empty($_SESSION['email'])){
  //echo "ว่าง";
  echo"<meta http-equiv='refresh' content='0;URL=<?= base_url();?>'>";
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
	<meta name="keywords" content="3PAN HOTEL Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
		<!-- //for-mobile-apps -->
		<link href="<?= base_url();?>/dist/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
		<link href="<?= base_url();?>/dist/css/style.css" rel="stylesheet" type="text/css" media="all" />
		<link rel="stylesheet" href="<?= base_url();?>/dist/css/flexslider.css" media="screen" />
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
		  
	</head>
	<body>
		<!-- banner -->
		<div class="banner page-head">
			<div class="container">
				<div class="header-nav">
					<div class="logo">
						<h1><a href="<?= base_url();?>"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>3PAN HOTEL</a></h1>
					</div>
					<div class="navigation">
						<span class="menu"><img src="<?= base_url();?>/dist/images/menu.png" alt=""/></span>
						<nav class="cl-effect-11" id="cl-effect-11">
							<ul class="nav1">
								<li><a  href="<?= base_url();?>/index.php/welcome/viewPrice" data-hover="ROOM">ROOM</a></li>
								<!-- -->
								<li><a class="active" href="<?= base_url();?>/index.php/welcome/Updategallery" data-hover="GALLERY">GALLERY</a></li>
								<li><a href="<?= base_url();?>/index.php/welcome/checkBooking" data-hover="BOOKING">BOOKING</a></li>
								<li><a href="<?= base_url();?>/index.php/welcome/checkmoney" data-hover="MONEY">MONEY</a></li>
			                    <li><a href="<?= base_url();?>/index.php/welcome/signout" data-hover="SIGNOUT">SIGNOUT</a></li>                       
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
							<li><a href="<?= base_url();?>/dist/#" class="f1"></a></li>
							<li><a href="<?= base_url();?>/dist/#" class="f2"></a></li>
							<li><a href="<?= base_url();?>/dist/#" class="f3"></a></li>
							<li><a href="<?= base_url();?>/dist/#" class="f4"></a></li>
						</ul>
					</div>-->
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
		<!-- //banner -->
		 <!-- gallery -->

                            <div class="gallery" id="gallery">
                                <div class="container">
										<FORM role="form" method="post" enctype="multipart/form-data" id="form" action="<?= base_url();?>/index.php/welcome/dogallery"> 
								 <table class="table table-striped">
								 		<thead>
      										<tr>
        										<h2>แก้ไขรูปภาพ</h2>
        										
      										</tr>
    										</thead>
	    								<tbody>
	      								<tr>
	        								<th>ชื่อไฟล์ : <input type="text" value="" placeholder="name" id="name" name="name" / required></th>
	        								<th><input name="picture" type="file" size="35"/> </th>
	        								<th><button type="submit" class="btn btn-success" name="submit" value="Submit" >Submit</button></th>
	      								</tr>
	   								 </tbody>
	    								
								</table>
								             
				               	</FORM>
                                    <h3 class="tittle">GALLERY</h3>

                                    <div class="gallery-bottom">
                                    <?php  
                                        $host = "localhost";
                                        $username = "root";
                                        $password = "";
                                        $database = "3panhotel";
                                        $conn = mysqli_connect($host,$username,$password,$database);
                                        $conn -> query("SET NAMES UTF8");
                                        $sql = "SELECT * FROM Gallery_Hotel order by id ASC";
                                        $result = $conn->query($sql);
                                        while($row = $result->fetch_object()){
                                        echo "<div class='col-md-4 gal-grid'>
                                              <div class='view view-fifth'>";
                                        echo "<a href='<?= base_url();?>/dist/images/gallery/";

                                        echo $row->picture; 

                                        echo"'class='b-link-stripe b-animate-go  thickbox'  title='Image Title'>";

                                        echo "<img src='<?= base_url();?>/dist/images/gallery/";
                                       
                                        echo $row->picture; 

                                         
                                        echo "'alt='' class='img-responsive' style='height:200px'>";

                                        echo "<div class='mask'><h4>3PAN HOTEL</h4>";
                                        echo "<p>".$row->name."</p>";
                                        echo "<span>More</span></div></a></div></div>";
                                        }
                                    ?>
                                        <div class="clearfix"> </div>
                                    </div>
                                    <script src="<?= base_url();?>/dist/js/jquery.chocolat.js"></script>

                                    <!--light-box-files -->
                                    <script type="text/javascript">
                                        $(function() {
                                            $('.gallery a').Chocolat();
                                        });
                                    </script>

								<BR>
								 
                                
                                </div>
                            </div>
                            <!-- //gallery -->
		<!--footer-->
		<div class="footer">
			<div class="container">				 	
				<div class="col-md-4 ftr_navi ftr">
					<h3>NAVIGATION</h3>
					<ul>
						<li><a href="<?= base_url();?>/index.php/welcome/viewPrice" data-hover="HOME">HOME</a></li>
								<!--<li><a href="<?= base_url();?>/index.php/welcome/form_searchRoom" data-hover="BOOKING">BOOKING</a></li>-->
								<li><a class="active" href="<?= base_url();?>/index.php/welcome/Updategallery" data-hover="GALLERY">GALLERY</a></li>
								<li><a href="<?= base_url();?>/index.php/welcome/checkBooking" data-hover="BOOKING">BOOKING</a></li>
								<li><a href="<?= base_url();?>/index.php/welcome/checkmoney" data-hover="MONEY">MONEY</a></li>
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
		function dogallery(){
			//alert("ddd");
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
	        	//add_Paymoney();

	        }
	       xmlhttp1.open("post","<?= base_url();?>/index.php/welcome/dogallery",true);
	       xmlhttp1.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
	       xmlhttp1.send("name="+document.form.name.value+"&picture="+document.form2.pictue.value);
	        //xmlhttp1.send();
		}
</script>