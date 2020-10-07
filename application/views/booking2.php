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
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="3PAN HOTEL Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
		<!-- //for-mobile-apps -->
		<link href="<?= base_url();?>/dist/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
		<link href="<?= base_url();?>/dist/css/style.css" rel="stylesheet" type="text/css" media="all" />
		<link href="<?= base_url();?>/dist/css/chocolat.css" rel="stylesheet">
		<!-- js -->
		<script src="<?= base_url();?>/dist/js/jquery-1.11.1.min.js"></script>
		<!-- //js -->
		<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
		<!-- start-smoth-scrolling -->
		<script type="text/javascript" src="<?= base_url();?>/dist/js/move-top.js"></script>
		<script type="text/javascript" src="<?= base_url();?>/dist/js/easing.js"></script>
		

		<link rel="stylesheet" media="all" type="text/css" href="http://angsila.cs.buu.ac.th/~57160284/887240/test/jquerydatepicker/jquery-ui.css" />
<link rel="stylesheet" media="all" type="text/css" href="http://angsila.cs.buu.ac.th/~57160284/887240/test/jquerydatepicker/jquery-ui-timepicker-addon.css" />


<!--เริ่มcode date-->
<script type="text/javascript" src="http://angsila.cs.buu.ac.th/~57160284/887240/test/jquerydatepicker/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="http://angsila.cs.buu.ac.th/~57160284/887240/test/jquerydatepicker/jquery-ui.min.js"></script>

<script type="text/javascript" src="http://angsila.cs.buu.ac.th/~57160284/887240/test/jquerydatepicker/jquery-ui-timepicker-addon.js"></script>
<script type="text/javascript" src="http://angsila.cs.buu.ac.th/~57160284/887240/test/jquerydatepicker/jquery-ui-sliderAccess.js"></script>
<script type="text/javascript">

// $(document).ready(function () {

//     $("#checkin").datepicker({
//         dateFormat: "dd-M-yy",
//         minDate: 0,
        
//     });
    
// });


/*$(function(){

	var startDateTextBox = $("#checkin").datepicker({ dateFormat: "dd-M-yy", minDate: 0});
	var endDateTextBox = $('#checkout');
	//startDateTextBox.setDate(startDate.getDate() + 30);

	startDateTextBox.datepicker({ 
		dateFormat: 'dd-M-yy',
		onClose: function(dateText, inst) {
			if (endDateTextBox.val() != '') {
				var testStartDate = startDateTextBox.datetimepicker('getDate');
				var testEndDate = endDateTextBox.datetimepicker('getDate');
				if (testStartDate > testEndDate)
					endDateTextBox.datetimepicker('setDate', testStartDate);
			}
			else {
				endDateTextBox.val(dateText);
			}
		},
		onSelect: function (selectedDateTime){
			//alert('sd');
			endDateTextBox.datetimepicker('option', 'minDate', startDateTextBox.datetimepicker('getDate') );
		}
	});
	endDateTextBox.datepicker({ 
		dateFormat: 'dd-M-yy',
		onClose: function(dateText, inst) {
			if (startDateTextBox.val() != '') {
				var testStartDate = startDateTextBox.datetimepicker('getDate');
				var testEndDate = endDateTextBox.datetimepicker('getDate');
				if (testStartDate > testEndDate)
					startDateTextBox.datetimepicker('setDate', testEndDate);
			}
			else {
				startDateTextBox.val(dateText);
			}
		},
		onSelect: function (selectedDateTime){
			startDateTextBox.datetimepicker('option', 'maxDate', endDateTextBox.datetimepicker('getDate') );
		}
	});

});
*/



// $(document).ready(function () {
//     $("#dt1").datepicker({
//         dateFormat: "dd-M-yy",
//         minDate: 0,
//         onSelect: function () {
//             var dt2 = $('#dt2');
//             var startDate = $(this).datepicker('getDate');
//             //add 30 days to selected date
//             startDate.setDate(startDate.getDate() + 30);
//             var minDate = $(this).datepicker('getDate');
//             //minDate of dt2 datepicker = dt1 selected day
//             dt2.datepicker('setDate', minDate);
//             //sets dt2 maxDate to the last day of 30 days window
//             dt2.datepicker('option', 'maxDate', startDate);
//             //first day which can be selected in dt2 is selected date in dt1
//             dt2.datepicker('option', 'minDate', minDate);
//             //same for dt1
//             $(this).datepicker('option', 'minDate', minDate);
//         }
//     });
//     $('#dt2').datepicker({
//         dateFormat: "dd-M-yy"
//     });
// });
$(function(){

	var startDateTextBox = $('#checkin');
	var endDateTextBox = $('#checkout');

	//$("#checkin").datepicker({minDate: -20, maxDate: '+1M +10dd'});
	// minDate: -20 ไม่สามารถเลือกวันที่ ก่อน 20 วันก่อนหน้าได้
	// maxDate: '+1M +10D' ไม่สามารถเลือก วันที่ถัดจาก อีก 1 เดือนและ 10 วัน ได้

	startDateTextBox.datepicker({ 
		dateFormat: 'yy-m-d',
		minDate: 0, //เลือกวันปัจจุบันขึ้นไป
		//maxDate: '+1M',
		onClose: function(dateText, inst) {
			if (endDateTextBox.val() != '') {
				var testStartDate = startDateTextBox.datetimepicker('getDate');
				var testEndDate = endDateTextBox.datetimepicker('getDate');
				if (testStartDate > testEndDate)
					endDateTextBox.datetimepicker('setDate', testStartDate);
			}
			else {
				endDateTextBox.val(dateText);
			}
		},
		onSelect: function (selectedDateTime){
			endDateTextBox.datetimepicker('option', 'minDate', startDateTextBox.datetimepicker('getDate') );
		}
	});
	endDateTextBox.datepicker({ 
		//dateFormat: 'dd-M-yy',
		dateFormat: 'yy-m-d',
		onClose: function(dateText, inst) {
			if (startDateTextBox.val() != '') {
				var testStartDate = startDateTextBox.datetimepicker('getDate');
				var testEndDate = endDateTextBox.datetimepicker('getDate');
				if (testStartDate > testEndDate)
					startDateTextBox.datetimepicker('setDate', testEndDate);
			}
			else {
				startDateTextBox.val(dateText);
			}
		},
		onSelect: function (selectedDateTime){
			startDateTextBox.datetimepicker('option', 'maxDate', endDateTextBox.datetimepicker('getDate') );
		}
	});

});

</script>
<script type="text/javascript">
			/*function checkdate(){
  				errorMessage = "";
  				$date = date("d/m/Y");
				 if(document.getElementById('checkin').value == "")
				    {
				        errorMessage += "PLEASE INPUT CHECKIN\n";
				    }else{
				    	if(document.getElementById('checkin').value<$date){
				    		errorMessage += "CHECKIN INVALID\n";
				    	}else{
				    		errorMessage += document.getElementById('checkin');
				    		errorMessage += $date;
				    	}
				    }
				 if(document.getElementById('checkout').value == "")
				    {
				        errorMessage += "PLEASE INPUT CHECKOUT\n";
				    }else{
				    	if(document.getElementById('checkout').value<document.getElementById('checkin').value){
				    		errorMessage += "CHECKOUT INVALID\n";
				    	} 
				    }
				  if(errorMessage.length >0){
				  		alert(errorMessage);
				  }
			}*/
		</script>
<!--จบ code date-->
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
		</script>
		<style>
			img{
				width:200px;
				height:200px;
			}
			input[type=text]{
				font-family: Cursive;
				font-size: 20px;
				border: 2;
				align:center;
				border: 2px solid #FFBF00;
				width: 200px;
				/*height:50px;*/
				-webkit-appearance: none;
			}
			select{
				font-family: Cursive;
				font-size: 16px;
				align:center;
				border: 2px solid #FFBF00;
				width: 50px;
			}
			.search input[type=submit]{
				width: 150px;
				color:white;
				background-color: red;
				margin-right: 50px;
			}	
			h2{
				/*margin-top: -120px;*/
				/*color: #ECCA69;*/
				color: black;
				font-family: Cursive;
				/*font-size: 72px;*/
			}
		</style>
		<!-- start-smoth-scrolling -->
	</head>
	<body>
		<!-- banner -->
		<div class="banner">
			<div class="container">
				<div class="header-nav">
					<div class="logo">
						<h1><a href="<?= base_url();?>"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>3PAN HOTEL</a></h1>
					</div>
					<div class="navigation">
						<span class="menu"><img src="<?= base_url();?>/dist/images/menu.png" alt=""/ style="width:30px;height:30px"></span>
						<nav class="cl-effect-11" id="cl-effect-11">
							<ul class="nav1">
								<li><a href="<?= base_url();?>/index.php/welcome/index2" data-hover="HOME">HOME</a></li>
								<!--<li><a href="<?= base_url();?>/index.php/welcome/form_searchRoom2" data-hover="BOOKING">BOOKING</a></li>-->
								<li><a href="<?= base_url();?>/index.php/welcome/detail12" data-hover="ROOM">ROOM</a></li>
								<li><a class="active" href="<?= base_url();?>/index.php/welcome/booking2" data-hover="BOOKING">BOOKING</a></li>
								<li><a href="<?= base_url();?>/index.php/welcome/file_order_list2" data-hover="FILE">FILE</a></li>
								<li><a href="<?= base_url();?>/index.php/welcome/contact2" data-hover="CONTACT">CONTACT</a></li>
								<li><a href="<?= base_url();?>/index.php/welcome/profileCustomer" data-hover="PROFILE" href="">PROFILE</a></li>
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
				<div class="banner-info">
					<script src="<?= base_url();?>/dist/js/responsiveslides.min.js"></script>
					<script>
									// You can also use "$(window).load(function() {"
									$(function () {
									 // Slideshow 4
									 $("#slider3").responsiveSlides({
									 	auto: true,
									 	pager: false,
									 	nav: false,
									 	speed: 500,
									 	namespace: "callbacks",
									 	before: function () {
									 		$('.events').append("<li>before event fired.</li>");
									 	},
									 	after: function () {
									 		$('.events').append("<li>after event fired.</li>");
									 	}
									 });
									});
					</script>
					<!--<div  id="top" class="callbacks_container" style="margin-top:-50px;">
									<ul class="rslides" id="slider3">
										<li>
											<div class="banner-text">
												<h3>WELCOME TO 3PAN HOTEL</h3>
												<h4>PLEASE FILL OUT THE FORM</h4>
											</div>
										</li>
										<li>
											<div class="banner-text">
												<h3>WELCOME TO 3PAN HOTEL</h3>
												<H4>OR</H4>
											</div>
										</li>
										<li>
											<div class="banner-text">
												<h3>WELCOME TO 3PAN HOTEL</h3>
												<h4>PLEASE SEE THE KIND OF ROOM</h4>
											</div>
										</li>
									</ul>
								</div>
							</div> -->
							<H2><center>กรุณากรอกวันที่ต้องการเข้าพัก</center></H2>
							<div class="banner-bottom">
							
								<div class="droop-down">
									<div class="row">

										<div class="col-md-11">
											<form action="<?= base_url();?>/index.php/welcome/Book_saveform" method="post">
												<input type="hidden" name="byuser" id="email" 
												value=" <?php echo $_SESSION['status']; ?>">
												<div class="col-md-4">
													<h4>CheckIn&nbsp;&nbsp;&nbsp;
													<input type="text" id="checkin" name="checkin" required="checkout" 
												value="<?php echo date("Y-m-d",strtotime("+1 day", strtotime(date("Y-m-d"))))?>">
													<!-- <input type="text" name="dateStart" id="dateStart" value="" />  -->
													</h4>
												</div>
												<div class="col-md-4">
													<h4>CheckOut&nbsp;&nbsp;
													<input type="text" id="checkout" name="checkout" required="checkout" value="<?php echo date("Y-m-d",strtotime("+2 day", strtotime(date("Y-m-d"))))?>">										
													<!-- <input type="text" name="dateEnd" id="dateEnd" value="" /> -->
													</h4>
													
												</div>
												<div class="col-md-3">
													<h4>People&nbsp;&nbsp;&nbsp;
														<select name="people" id="people">
															<option selected>1</option>
															<option>2</option>
															<option>3</option>
															<option>4</option>
															<option>5</option>
															<option>6</option>
															<option>7</option>
															<option>8</option>
														</select></h4>
													</div>
												</div>

										<div class="col-md-1">
													<div class="search">
														<input type="submit" value="check">
													</div>
												</div>
											</form>
										</div>
										<!--<script type="text/javascript">
											function saveForm(){	
												//ไม่ได้ js ทำงานฝั่ง client เเต่ session ทำงานฝั่ง server
												//$_SESSION['email']=document.getElementById('email').value ;
												//$_SESSION['checkin']=document.getElementById('checkin').value ;
												//$_SESSION['checkout']=document.getElementById('checkout').value ;
												//$_SESSION['people']=document.getElementById('people').value ;
												//alert($_SESSION['people']);
												//redirect('welcome/form_searchRoom2');
												//window.location.replace("<?= base_url();?>/index.php/welcome/form_searchRoom2");
												//window.location("<?= base_url();?>/index.php/welcome/form_searchRoom2");
												//window.location.assign("<?= base_url();?>/index.php/welcome/form_searchRoom2");
											}
										 </script>-->
										<div class="clearfix"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- //banner -->
					<!-- banner-pos -->
					<div class="banner-pos">
						<div class="container">
							<div class="banner-pos-grids">
								<!--<div class="ban-pos-gridone">
									<h3>Featured Hotel</h3>
									<div class="ban-pos-info l-grids">
										<figure class="effect-bubba">
											<img src="<?= base_url();?>/dist/images/4.jpg" alt=""/>
											<figcaption>
												<h4>3PAN HOTEL</h4>
												<p>In officiis debitis aut rerum tincidunt labore dolore magna</p>																
											</figcaption>			
										</figure>
									</div>
								</div>-->
								<BR><BR>
								<div class="row">
									<div class="col-md-3">
										<div class="ban-pos-gridtwo l-grids" style="width:100%">
											<div class="ban-pos-info l-grids">
												<figure class="effect-bubba">
													<a href="<?= base_url();?>/index.php/welcome/detail12"><img src="<?= base_url();?>/dist/images/susu4.jpg" alt="Superior"/>
														<figcaption>
															<h1 style="font-size:38pt">Superior</h1>

														</figcaption>	
													</a>		
												</figure>
											</div>
										</div>
									</div>
									<div class="col-md-3">
										<div class="ban-pos-gridtwo l-grids" style="width:100%">
											<div class="ban-pos-info l-grids">
												<figure class="effect-bubba">
													<a href="<?= base_url();?>/index.php/welcome/detail22"><img src="<?= base_url();?>/dist/images/su1.jpg" alt="Deluxe"/>
														<figcaption>
															<h1 style="font-size:42pt">Deluxe</h1>

														</figcaption>
													</a>			
												</figure>
											</div>
										</div>
									</div>
									<div class="col-md-3">
										<div class="ban-pos-gridtwo l-grids" style="width:100%">
											<div class="ban-pos-info l-grids">
												<figure class="effect-bubba">
													<a href="<?= base_url();?>/index.php/welcome/detail32"><img src="<?= base_url();?>/dist/images/suite2.jpg" alt="Suite"/>
														<figcaption>
															<h1 style="font-size:42pt">Suite</h1>

														</figcaption>
													</a>			
												</figure>
											</div>
										</div>
									</div>
									<div class="col-md-3">
										<div class="ban-pos-gridtwo l-grids" style="width:100%;">
											<div class="ban-pos-info l-grids">
												<figure class="effect-bubba">
													<a href="<?= base_url();?>/index.php/welcome/detail42"><img src="<?= base_url();?>/dist/images/family.jpg" alt="Family"/>
														<figcaption>
															<h1 style=" font-size:42pt">Family</h1>

														</figcaption>
													</a>			
												</figure>
											</div>
										</div>
									</div>
									<div class="clearfix"></div>
								</div>




							</div>
						</div>
						<BR><BR><BR>
							<!-- //banner-pos -->
							<!-- welcome -->

							<!-- //welcome -->
							<!-- facilities -->
							<div class="facilities">
								<div class="container">
									<h3 class="tittle">FACILITIES</h3>
									<div class="facilities-grids">
										<div class="col-md-6 facilities-grid">
											<img src="<?= base_url();?>/dist/images/6.jpg" alt="" />
										</div>
										<div class="col-md-6 facilities-grid-left">
											<div class="fac-grids">
												<div class="facilities-left">
													<img src="<?= base_url();?>/dist/images/ddd.jpg" alt="" />
												</div>
												<div class="facilities-right">
													<img src="<?= base_url();?>/dist/images/333.jpg" alt="" />
												</div>
												<div class="clearfix"></div>
											</div>
											<div class="fac-rig-btm">
												<img src="<?= base_url();?>/dist/images/444.jpg" alt="" />
											</div>
										</div>
										<div class="clearfix"></div>
									</div>
								</div>
							</div>
							<!-- //facilities -->
							<!-- services -->
							<div class="feature-serv">
								<div class="container">
									<h3 class="tittle">FEATURED SERVICES</h3>
									<div class="services-bottom-grids">
										<div class="col-md-4 services-bottom-grid">
											<div class="services-bottom-grd-left wel-grid">
												<div class="time-service">
													<figure class="icon">
														<span class="glyphicon glyphicon-time" aria-hidden="true"></span>
													</figure>
												</div>
											</div>
											<div class="services-bottom-grd-right">
												<h4>เวลาของคุณมีค่าเสมอ</h4>
												<p>คุณสามารถมาเช็คอินได้ตั้งแต่ 10.00 AM และเช็คเอาท์ได้ตั้งแต่ 12.00 PM เช่นกัน </p>
											</div>
											<div class="clearfix"> </div>
										</div>
										<div class="col-md-4 services-bottom-grid">
											<div class="services-bottom-grd-left wel-grid">
												<div class="time-service">
													<figure class="icon">
														<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
													</figure>
												</div>
											</div>
											<div class="services-bottom-grd-right">
												<h4>ท็อประดับ 5 ดาว</h4>
												<p>ที่แรกและที่เดียว โรงแรมที่ดีทีสุดในโลก</p>
											</div>
											<div class="clearfix"> </div>
										</div>
										<div class="col-md-4 services-bottom-grid">
											<div class="services-bottom-grd-left wel-grid">
												<div class="time-service">
													<figure class="icon">
														<span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
													</figure>
												</div>
											</div>
											<div class="services-bottom-grd-right">
												<h4>ช่วยเหลือ+เเก้+ซ่อม </h4>
												<p>เรามีบริการช่วยดูแลปัญหาอุปกรณ์ชำรุด 24 ชั่วโมง</p>
											</div>
											<div class="clearfix"> </div>
										</div>
										<div class="col-md-4 services-bottom-grid">
											<div class="services-bottom-grd-left wel-grid btm-gre">
												<div class="time-service">
													<figure class="icon">
														<span class="glyphicon glyphicon-home" aria-hidden="true"></span>
													</figure>
												</div>
											</div>
											<div class="services-bottom-grd-right">
												<h4>คิดถึงบ้าน คิดถึงเรา</h4>
												<p>สเน่ห์ของกลิ่นไอทะเลยามคำ่คืนจะช่วยทำให้คุณรู้สึกเหมือนอยู่บ้าน</p>
											</div>
											<div class="clearfix"> </div>
										</div>
										<div class="col-md-4 services-bottom-grid">
											<div class="services-bottom-grd-left wel-grid btm-gre">
												<div class="time-service">
													<figure class="icon">
														<span class="glyphicon glyphicon-user" aria-hidden="true"></span>
													</figure>
												</div>
											</div>
											<div class="services-bottom-grd-right">
												<h4>พนักงานมาเป็นอันดับหนึ่ง</h4>
												<p>พนักงานมาเป็นที่หนึ่ง ลูกค้าคือที่สอง ถ้าพนักงานมีความสุขในการทำงาน เขาก็จะดูแลลูกค้าได้มีความสุขเช่นกัน</p>
											</div>
											<div class="clearfix"> </div>
										</div>
										<div class="col-md-4 services-bottom-grid">
											<div class="services-bottom-grd-left wel-grid btm-gre">
												<div class="time-service">
													<figure class="icon">
														<span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>
													</figure>
												</div>
											</div>
											<div class="services-bottom-grd-right">
												<h4>หาง่าย หาเจอ หาเร็ว</h4>
												<p>คุณสามารถหาโรงแรมของเราได้ง่ายๆๆ ด้วยเเอพลิเคชั่นเฉพาะของโรงแรม</p>
											</div>
											<div class="clearfix"> </div>
										</div>
										<div class="clearfix"> </div>
									</div>
								</div>
							</div>
							<!-- //services -->
							<!-- gallery -->
							<div class="gallery" id="gallery">
								<div class="container">
									<h3 class="tittle">GALLERY</h3>
									<div class="gallery-bottom">
										<?php  
                                        $host = "localhost";
                                        $username = "root";
                                        $password = "";
                                        $database = "3panhotel";
                                        $conn = mysqli_connect($host,$username,$password,$database);
                                        $conn -> query("SET NAMES UTF8");
                                        $sql = "SELECT * FROM Gallery_Hotel";
                                        $result = $conn->query($sql);
                                        while($row = $result->fetch_object()){
                                        ?>
                                        <div class='col-md-4 gal-grid'>
                                            <div class='view view-fifth'>
                                            <a href="<?= base_url(); echo '/dist/images/gallery/'.$row->picture;?>" class='b-link-stripe b-animate-go  thickbox'  title="<?=$row->name?>">
                                            <img src="<?= base_url(); echo '/dist/images/gallery/'.$row->picture;?>" class="img-responsive" style="height:200px">
                                            <div class='mask'><h4>3PAN HOTEL</h4>
                                                <p><?=$row->name?></p>
                                                <span>More</span>
                                            </div>
                                            </a>
                                            </div>
                                        </div>
                                        <?php
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

								</div>
							</div>
							<!-- //gallery -->
							<!--footer-->
							<div class="footer">
								<div class="container">				 	
									<div class="col-md-4 ftr_navi ftr">
										<h3>NAVIGATION</h3>
										<ul>
										<li><a href="<?= base_url();?>/index.php/welcome/index2" data-hover="HOME">HOME</a></li>
                                        <li><a href="<?= base_url();?>/index.php/welcome/detail12" data-hover="ROOM">ROOM</a></li>
                                        <li><a href="<?= base_url();?>/index.php/welcome/booking2" data-hover="BOOKING">BOOKING</a></li>
                                        <li><a href="<?= base_url();?>/index.php/welcome/file_order_list2" data-hover="FILE">FILE</a></li>
                                        <li><a href="<?= base_url();?>/index.php/welcome/contact2" data-hover="CONTACT">CONTACT</a></li>
                                        <li><a href="<?= base_url();?>/index.php/welcome/signout" data-hover="SIGN OUT">SIGN OUT</a></li>
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