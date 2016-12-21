<?php
session_start();
if(empty($_SESSION['email'])){
  //echo "ว่าง";
  //echo"<meta http-equiv='refresh' content='0;URL=#'>";
}else{
  //echo $_SESSION['firstname'];
    if($_SESSION['status']=='manager'){
        echo"<meta http-equiv='refresh' content='0;URL=sell1'>";
      }
      if($_SESSION['status']=='staff'){
        echo"<meta http-equiv='refresh' content='0;URL=viewPrice'>";
      }
      if($_SESSION['status']=='customer'){
        echo "<meta http-equiv='refresh' content='0;URL=http://angsila.cs.buu.ac.th/~57160284/887240/Project/index.php/welcome/index2'>";
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
        <link href="http://angsila.cs.buu.ac.th/~57160284/887240/Project/dist/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
        <link href="http://angsila.cs.buu.ac.th/~57160284/887240/Project/dist/css/style.css" rel="stylesheet" type="text/css" media="all" />
        <link href="http://angsila.cs.buu.ac.th/~57160284/887240/Project/dist/css/chocolat.css" rel="stylesheet">
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
        <style>
            img{
                width:200px;
                height:200px;
            }
            h3{
                font-color:#FE642E;
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
                        <h1><a href="http://angsila.cs.buu.ac.th/~57160284/887240/Project"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>3PAN HOTEL</a></h1>
                    </div>
                    <div class="navigation">
                        <span class="menu"><img src="http://angsila.cs.buu.ac.th/~57160284/887240/Project/dist/images/menu.png" alt=""/ style="width:30px;height:30px"></span>
                        <div class="row">
                            <div class="col-md-12">
                                <nav class="cl-effect-11" id="cl-effect-11">
                                    <ul class="nav1">
                                        <li><a class="active" href="http://angsila.cs.buu.ac.th/~57160284/887240/Project" data-hover="HOME">HOME</a></li>
                                        <!--<li><a href="http://angsila.cs.buu.ac.th/~57160284/887240/Project/index.php/welcome/form_searchRoom" data-hover="BOOKING">BOOKING</a></li>-->
                                        <li><a href="http://angsila.cs.buu.ac.th/~57160284/887240/Project/index.php/welcome/detail11" data-hover="ROOM">ROOM</a></li>
                                        <li><a href="http://angsila.cs.buu.ac.th/~57160284/887240/Project/index.php/welcome/about" data-hover="ABOUT">ABOUT</a></li>
                                        <li><a href="http://angsila.cs.buu.ac.th/~57160284/887240/Project/index.php/welcome/contact" data-hover="CONTACT">CONTACT</a></li>
                                        <li><a href="http://angsila.cs.buu.ac.th/~57160284/887240/Project/index.php/welcome/signinORup?s=signup" data-hover="SIGNUP">SIGNUP</a></li>
                                        <li><a href="http://angsila.cs.buu.ac.th/~57160284/887240/Project/index.php/welcome/signinORup?s=signin" data-hover="SIGNIN">SIGNIN</a></li>
                                    </ul>                         
                                </nav>
                            </div>
                    <!--<nav class="cl-effect-11" id="cl-effect-11">
                        <ul class="nav1">
                            <div class="col-md-2">
                                <li><a href="http://angsila.cs.buu.ac.th/~57160284/887240/Project/index.php/welcome/signup" data-hover="SIGNUP">SIGNUP</a></li>
                            </div>      
                            <div class="col-md-2">
                                <li><a href="http://angsila.cs.buu.ac.th/~57160284/887240/Project/index.php/welcome/signin" data-hover="SINGIN">SIGNIN</a></li>
                            </div>
                        </ul>                         
                    </nav>-->

                        </div>
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
                            <li><a href="#" class="f1"></a></li>
                            <li><a href="#" class="f2"></a></li>
                            <li><a href="#" class="f3"></a></li>
                            <li><a href="#" class="f4"></a></li>
                        </ul>
                    </div>-->
                    <div class="clearfix"></div>
                </div>
                <div class="banner-info">
                    <script src="http://angsila.cs.buu.ac.th/~57160284/887240/Project/dist/js/responsiveslides.min.js"></script>
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
                             <div  id="top" class="callbacks_container">
                                <ul class="rslides" id="slider3">
                                    <li>
                                        <div class="banner-text">
                                            <h3>WELCOME</h3>
                                            <h4>3PAN THE BEST AND THE CHEAP IN THE WORLD</h4>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="banner-text">
                                            <h3>PLEASE SIGNUP</h3>
                                            <H4>SIGN UP TO RECEIVE VARIOUS BENEFITS</H4>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="banner-text">
                                            <h3>PLEASE SIGNIN</h3>
                                            <h4>SIGN IN TO SEARCH FOR ROOMS AND BOOKING</h4>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                            <!--<div class="banner-bottom">
                                <div class="droop-down">
                                    <div class="row">
                                        <center><h1>คุณสามารถดูตัวอย่างห้องพักที่ต้องการ</h1></center>
                                        
                                    </div>
                                </div>
                            </div>-->
                        </div>
                    </div>
                    <BR><BR><BR>
                        <!-- //banner -->
                        <!-- banner-pos -->
                        <div class="banner-pos">
                            <div class="container">
                                <div class="banner-pos-grids">
                                <!--<div class="ban-pos-gridone">
                                    <h3>Featured Hotel</h3>
                                    <div class="ban-pos-info l-grids">
                                        <figure class="effect-bubba">
                                            <img src="http://angsila.cs.buu.ac.th/~57160284/887240/Project/dist/images/4.jpg" alt=""/>
                                            <figcaption>
                                                <h4>3PAN HOTEL</h4>
                                                <p>In officiis debitis aut rerum tincidunt labore dolore magna</p>                                                              
                                            </figcaption>           
                                        </figure>
                                    </div>
                                </div>-->
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="ban-pos-gridtwo l-grids" style="width:100%">
                                            <div class="ban-pos-info l-grids">
                                                <figure class="effect-bubba">
                                                    <a href="http://angsila.cs.buu.ac.th/~57160284/887240/Project/index.php/welcome/detail11"><img src="http://angsila.cs.buu.ac.th/~57160284/887240/Project/dist/images/susu4.jpg" alt="Superior"/>
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
                                                    <a href="http://angsila.cs.buu.ac.th/~57160284/887240/Project/index.php/welcome/detail21"><img src="http://angsila.cs.buu.ac.th/~57160284/887240/Project/dist/images/su1.jpg" alt="Deluxe"/>
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
                                                    <a href="http://angsila.cs.buu.ac.th/~57160284/887240/Project/index.php/welcome/detail31"><img src="http://angsila.cs.buu.ac.th/~57160284/887240/Project/dist/images/suite2.jpg" alt="Suite"/>
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
                                                    <a href="http://angsila.cs.buu.ac.th/~57160284/887240/Project/index.php/welcome/detail41"><img src="http://angsila.cs.buu.ac.th/~57160284/887240/Project/dist/images/family.jpg" alt="Family"/>
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
                                            <img src="http://angsila.cs.buu.ac.th/~57160284/887240/Project/dist/images/6.jpg" alt="" />
                                        </div>
                                        <div class="col-md-6 facilities-grid-left">
                                            <div class="fac-grids">
                                                <div class="facilities-left">
                                                    <img src="http://angsila.cs.buu.ac.th/~57160284/887240/Project/dist/images/ddd.jpg" alt="" />
                                                </div>
                                                <div class="facilities-right">
                                                    <img src="http://angsila.cs.buu.ac.th/~57160284/887240/Project/dist/images/333.jpg" alt="" />
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="fac-rig-btm">
                                                <img src="http://angsila.cs.buu.ac.th/~57160284/887240/Project/dist/images/444.jpg" alt="" />
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
                                        $username = "it57160284";
                                        $password = "it57160284";
                                        $database = "it57160284";
                                        $conn = mysqli_connect($host,$username,$password,$database);
                                        $conn -> query("SET NAMES UTF8");
                                        $sql = "SELECT * FROM Gallery_Hotel";
                                        $result = $conn->query($sql);
                                        while($row = $result->fetch_object()){
                                        echo "<div class='col-md-4 gal-grid'>
                                              <div class='view view-fifth'>";
                                        echo "<a href='http://angsila.cs.buu.ac.th/~57160284/887240/Project/dist/images/gallery/";

                                        echo $row->picture; 

                                        echo"'class='b-link-stripe b-animate-go  thickbox'  title='Image Title'>";

                                        echo "<img src='http://angsila.cs.buu.ac.th/~57160284/887240/Project/dist/images/gallery/";
                                       
                                        echo $row->picture; 

                                         
                                        echo "'alt='' class='img-responsive' style='height:200px'>";

                                        echo "<div class='mask'><h4>3PAN HOTEL</h4>";
                                        echo "<p>".$row->name."</p>";
                                        echo "<span>More</span></div></a></div></div>";
                                        }
                                    ?>
                                        <div class="clearfix"> </div>
                                    </div>
                                    <script src="http://angsila.cs.buu.ac.th/~57160284/887240/Project/dist/js/jquery.chocolat.js"></script>

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
                                        <li><a href="http://angsila.cs.buu.ac.th/~57160284/887240/Project" data-hover="HOME">HOME</a></li>
                                        <li><a href="http://angsila.cs.buu.ac.th/~57160284/887240/Project/index.php/welcome/detail11" data-hover="ROOM">ROOM</a></li>
                                        <li><a href="http://angsila.cs.buu.ac.th/~57160284/887240/Project/index.php/welcome/about" data-hover="ABOUT">ABOUT</a></li>
                                        <li><a href="http://angsila.cs.buu.ac.th/~57160284/887240/Project/index.php/welcome/contact" data-hover="CONTACT">CONTACT</a></li>
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