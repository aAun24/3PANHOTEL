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
      if($_SESSION['status']=='customer'){
        $id = $_SESSION['id_book'];
        echo"<meta http-equiv='refresh' content='5;URL=file_order2?id=$id'>";
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
                                <!--<li><a href="<?= base_url();?>/index.php/welcome/form_searchRoom2" data-hover="BOOKING">BOOKING</a></li> -->
                                <li><a href="<?= base_url();?>/index.php/welcome/detail12" data-hover="ROOM">ROOM</a></li>
                                <li><a href="<?= base_url();?>/index.php/welcome/file_order2" data-hover="FILE">FILE</a></li>
                                
                                <li><a href="<?= base_url();?>/index.php/welcome/contact2" data-hover="CONTACT">CONTACT</a></li>
                                <li><a data-hover="PROFILE" href="">PROFILE</a></li
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

            <center><br><br><h2>+++ ขอบคุณที่ชำระเงิน +++<h2><br>
            <img src = "<?= base_url();?>/dist/images/s.png"><br><br>  </center>




<!--footer-->
<div class="footer">
    <div class="container">                 
        <div class="col-md-4 ftr_navi ftr">
            <h3>NAVIGATION</h3>
            <ul>
                <li><a href="<?= base_url();?>">HOME</a></li>
                                            <li><a href="<?= base_url();?>/index.php/welcome/detail12" data-hover="ROOM">ROOM</a></li>
                                            <li><a href="<?= base_url();?>/index.php/welcome/about2">ABOUT</a></li>
                                            <li><a href="<?= base_url();?>/index.php/welcome/contact2">CONTACT</a></li>
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
    <a href="<?= base_url();?>/dist/#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
    <!-- //smooth scrolling -->

</body>
</html>