
<!DOCTYPE html>
<html >
<head>
	<meta charset="UTF-8">
	<title>Sign-Up/Sign-In Form</title>
	<link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>

	<style>
		*, *:before, *:after {
			box-sizing: border-box;
		}

		html {
			overflow-y: scroll;
		}

		body {
			/*background: #c1bdba;*/
			font-family: 'Titillium Web', sans-serif;
		}

		a {
			text-decoration: none;
			color: #1ab188;
			-webkit-transition: .5s ease;
			transition: .5s ease;
		}
		a:hover {
			color: #179b77;
		}

		/*.form {
			background: rgba(19, 35, 47, 0.9);
			padding: 40px;
			width: 600px;
			margin: 40px auto;
			border-radius: 4px;
			box-shadow: 0 4px 10px 4px rgba(19, 35, 47, 0.3);
		}*/

		.tab-group {
			list-style: none;
			padding: 0;
			margin: 0 0 0 0;
		}
		.tab-group:after {
			content: "";
			display: table;
			clear: both;
		}
		.tab-group li a {
			display: block;
			text-decoration: none;
			padding: 15px;
			background: rgba(160, 179, 176, 0.25);
			color: #a0b3b0;
			font-size: 20px;
			float: left;
			width: 50%;
			text-align: center;
			cursor: pointer;
			-webkit-transition: .5s ease;
			transition: .5s ease;
		}
		.tab-group li a:hover {
			background: #179b77;
			color: #ffffff;
		}
		.tab-group .active a {
			background: #1ab188;
			color: #ffffff;
		}

		.tab-content > div:last-child {
			display: none;
		}

		h1 {
			text-align: center;
			color: #ffffff;
			font-weight: 300;
			margin: 0 0 40px;
		}

		label {
			position: absolute;
			-webkit-transform: translateY(6px);
			transform: translateY(6px);
			left: 13px;
			color: rgba(255, 255, 255, 0.5);
			-webkit-transition: all 0.25s ease;
			transition: all 0.25s ease;
			-webkit-backface-visibility: hidden;
			pointer-events: none;
			font-size: 22px;
		}
		label .req {
			margin: 2px;
			color: #1ab188;
		}

		label.active {
			-webkit-transform: translateY(50px);
			transform: translateY(50px);
			left: 2px;
			font-size: 14px;
		}
		label.active .req {
			opacity: 0;
		}

		label.highlight {
			color: #ffffff;
		}

		input, textarea {
			font-size: 22px;
			display: block;
			width: 100%;
			height: 100%;
			padding: 5px 10px;
			background: none;
			background-image: none;
			border: 1px solid #a0b3b0;
			color: #ffffff;
			border-radius: 0;
			-webkit-transition: border-color .25s ease, box-shadow .25s ease;
			transition: border-color .25s ease, box-shadow .25s ease;
		}
		input:focus, textarea:focus {
			outline: 0;
			border-color: #1ab188;
		}

		textarea {
			border: 2px solid #a0b3b0;
			resize: vertical;
		}

		.field-wrap {
			position: relative;
			margin-bottom: 40px;
		}

		.top-row:after {
			content: "";
			display: table;
			clear: both;
		}
		.top-row > div {
			float: left;
			width: 48%;
			margin-right: 4%;
		}
		.top-row > div:last-child {
			margin: 0;
		}

		.button {
			border: 0;
			outline: none;
			border-radius: 0;
			padding: 15px 0;
			font-size: 2rem;
			font-weight: 600;
			text-transform: uppercase;
			letter-spacing: .1em;
			background: #1ab188;
			color: #ffffff;
			-webkit-transition: all 0.5s ease;
			transition: all 0.5s ease;
			-webkit-appearance: none;
		}
		.button:hover, .button:focus {
			background: #179b77;
		}

		.button-block {
			display: block;
			width: 100%;
		}

		.forgot {
			margin-top: -20px;
			text-align: right;
		}
		/*! normalize.css v4.0.0 | MIT License | github.com/necolas/normalize.css */
		html{font-family:sans-serif;-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%}
		body{margin:0}article,aside,details,figcaption,figure,footer,header,main,menu,nav,section,summary{display:block}audio,canvas,progress,video{display:inline-block}audio:not([controls]){display:none;height:0}progress{vertical-align:baseline}template,[hidden]{display:none}a{background-color:transparent}a:active,a:hover{outline-width:0}abbr[title]{border-bottom:none;text-decoration:underline;text-decoration:underline dotted}b,strong{font-weight:inherit}b,strong{font-weight:bolder}dfn{font-style:italic}h1{font-size:2em;margin:0.67em 0}mark{background-color:#ff0;color:#000}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-0.25em}sup{top:-0.5em}img{border-style:none}svg:not(:root){overflow:hidden}code,kbd,pre,samp{font-family:monospace, monospace;font-size:1em}figure{margin:1em 40px}hr{-webkit-box-sizing:content-box;-moz-box-sizing:content-box;box-sizing:content-box;height:0;overflow:visible}button,input,select,textarea{font:inherit;margin:0}optgroup{font-weight:bold}button,input,select{overflow:visible}button,select{text-transform:none}button,[type="button"],[type="reset"],[type="submit"]{cursor:pointer}[disabled]{cursor:default}button,html [type="button"],[type="reset"],[type="submit"]{-webkit-appearance:button}button::-moz-focus-inner,input::-moz-focus-inner{border:0;padding:0}button:-moz-focusring,input:-moz-focusring{outline:1px dotted ButtonText}fieldset{border:1px solid #c0c0c0;margin:0 2px;padding:0.35em 0.625em 0.75em}legend{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;color:inherit;display:table;max-width:100%;padding:0;white-space:normal}textarea{overflow:auto}[type="checkbox"],[type="radio"]{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;padding:0}[type="number"]::-webkit-inner-spin-button,[type="number"]::-webkit-outer-spin-button{height:auto}[type="search"]{-webkit-appearance:textfield}[type="search"]::-webkit-search-cancel-button,[type="search"]::-webkit-search-decoration{-webkit-appearance:none}

	</style>
</head>
<?php

$useragent = $_SERVER['HTTP_USER_AGENT']; // เก็บว่าคนดูใช้ Browser ตัวใด


// ใช้ If ทำการแยกประเภทของ Browser ของคนดู ว่ามันเป็นของ คอมพิวเตอร์ หรือ โทรศัพท์เคลื่อนที่

if(preg_match('/android|avantgo|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|e\-|e\/|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(di|rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|xda(\-|2|g)|yas\-|your|zeto|zte\-/i',substr($useragent,0,4)))
{
     // ทำการเขียนโปรแกรมต่อที่นี่ กรณีเป็นการดูเว็บเพจจากโทรศัพท์เคลื่อนที่
     // header('Location: http://www.thamwebsite.com'); // ใส่ URL ของหน้าที่ต้องการให้ไป กรณีเป็นการดูจากโทรศัพท์เคลื่อนที่
	echo"<body background-color=\"#c1bdba\">";
	echo"<BR><BR><BR><BR><BR><BR><BR><BR><BR><BR>";
	echo"<div class ='form' style='background: rgba(19, 35, 47, 0.9);
	padding: 40px;width: 800px;margin: 40px auto;border-radius: 4px;box-shadow: 0 4px 10px 4px rgba(19, 35, 47, 0.3);'>";
	?>

	<a href="<?= base_url();?>">
		<img src="<?= base_url();?> echo '/dist/images/Delete-icon.png'" width="50px" height="50px" 
		style="margin-left:670px">
	</a>

	<?php
}
else
{
     // ทำการเขียนโปรแกรมต่อที่นี่ กรณีเป็นการดูเว็บเพจจากคอมพิวเตอร์
     // header('Location: http://www.codetukyang.com'); // ใส่ URL ของหน้าที่ต้องการให้ไป กรณีเป็นการดูจากคอมพิวเตอร์
	echo "<body background=\"<?= base_url();?>/dist/images/banner5.jpg\">";
	echo"<div class='form' style='background: rgba(19, 35, 47, 0.9);
	padding: 40px;width: 500px;height:600px;margin: 40px auto;border-radius: 4px;box-shadow: 0 4px 10px 4px rgba(19, 35, 47, 0.3);'>"; 
	?>
	<a href="<?= base_url();?>">

		<img src="<?= base_url(); echo '/dist/images/Delete-icon.png'?>" width="30px" height="30px" 
		style="margin-left:400px">
	</a>

	<?php
}

?>

<ul class="tab-group">
	<?php /*echo $_GET['s']; 
	if($_GET['s']='signup'){
		echo"<li class=\"tab active\"><a href=\"#signup\">Sign Up</a></li>
		<li class=\"tab\"><a href=\"#signin\">Sign In</a></li>";
	}else{
		echo"<li class=\"tab\"><a href=\"#signup\">Sign Up</a></li>
		<li class=\"tab active\"><a href=\"#signin\">Sign In</a></li>";
	}*/
	?>
	<li class="tab "><a href="#signup" id="s1">Sign Up</a></li>
	<li class="tab"><a href="#signin" id="s2">Sign In</a></li></ul>
	
</ul>

<div class="tab-content">
	<div id="signup">   
		<h1>Register a new membership</h1>

		<form action="<?= base_url();?>/index.php/welcome/SignUp_insert" method="post" name="signUp">
			<input type="hidden" name="status" value="customer">
			<input type="hidden" name="phone" value="-">
			<input type="hidden" name="address" value="-">
			<div class="top-row">
				<div class="field-wrap">
					<label>
						First Name<span class="CKfirstname">*</span>
					</label>
					<input type="text" name="firstname" id="firstname"/>
				</div>

				<div class="field-wrap">
					<label>
						Last Name<span class="CKlastname">*</span>
					</label>
					<input type="text" name="lastname" id="lastname"/>
				</div>
			</div>

			<div class="field-wrap">
				<label>
					Email Address<span class="CKemail">*</span>
				</label>
				<input type="text" name="email" id="email"/>
			</div>

			<div class="field-wrap">
				<label>
					Set A Password<span class="CKpassword">*</span>
				</label>
				<input type="password" name="password" id="password"/>
			</div>

			<div class="field-wrap">
				<label>
					RePassword<span class="CKrepassword">*</span>
				</label>
				<input type="password" name="repassword" id="repassword"/>
			</div>

			<button type="submit" class="button button-block" name="submitUP" id="submitUP" value="submitUP"/ style="margin-top: -18px">Get Started</button>

		</form>
	</div>

	<div id="signin">   
		<h1>Welcome Back!</h1>

		<form action="<?= base_url();?>/index.php/welcome/form_doSignin" method="post" name="SignIn" id="SignIn">
			<div class="field-wrap">
				<label>
					Email Address<span class="email">*</span>
				</label>
				<input type="text" name="INemail" id="INemail"/>
			</div>

			<div class="field-wrap">
				<label>
					Password<span class="password">*</span>
				</label>
				<input type="password" name="INpassword" id="INpassword"/>
			</div>

			<p class="forgot"><a href="#">Forgot Password?</a></p>

			<button class="button button-block" name="submitIN" id="submitIN" value="submitIN"/>Sign In</button>

		</form>

	</div>

</div><!-- tab-content -->

</div> <!-- /form -->
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

<?php
if($_GET['s']=="signup"){

	echo "<script>
	$(document).ready(function(){
		$(\"#s1\").click();
		

	});

</script>";

}else{
	echo "<script>
	$(document).ready(function(){
		$(\"#s2\").click();
	});

</script>";
}
?>

<script>
	$('.form').find('input, textarea').on('keyup blur focus', function (e) {

		var $this = $(this),
		label = $this.prev('label');

		if (e.type === 'keyup') {
			if ($this.val() === '') {
				label.removeClass('active highlight');
			} else {
				label.addClass('active highlight');
			}
		} else if (e.type === 'blur') {
			if( $this.val() === '' ) {
				label.removeClass('active highlight'); 
			} else {
				label.removeClass('highlight');   
			}   
		} else if (e.type === 'focus') {

			if( $this.val() === '' ) {
				label.removeClass('highlight'); 
			} 
			else if( $this.val() !== '' ) {
				label.addClass('highlight');
			}
		}

	});

	$('.tab a').on('click', function (e) {

		e.preventDefault();

		$(this).parent().addClass('active');
		$(this).parent().siblings().removeClass('active');

		target = $(this).attr('href');

		$('.tab-content > div').not(target).hide();

		$(target).fadeIn(600);

	});

</script>

<script>
	function isValidEmail($email) {  
		var filter=/^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
		return (filter.test($email));   
	}  
	function check_email($email){
		var request = $.ajax({
 
		url: "<?= base_url();?>/index.php/welcome/checkemail",
		 
		type: "POST",
		 
		data: {email: email},
		 
		success: function( data, textStatus, jQxhr ){
		  if(data == 'OK'){

		  } else {
		  }
		},
		 
		error: function(jqXhr, textStatus, errorThrown){
		 
		  // Not OK
		 
		  return false;
		 
		}
		 
		});

  	}
  $('#submitUP').on('click',function(event){
  	var valid = true;
  	errorMessage = "โปรดป้อน ";
  	var firstname = "";
  	var lastname = "";
  	var email = "";
  	var password = "";
  	var repassword = "";
  	var checkpass = "";

  	if($('#firstname').val()==''){
  		firstname = "ชื่อ";
  		valid  = false;
  	}
  	if($('#lastname').val()==''){
  		lastname = "นามสกุล";
  		valid  = false;
  	}
  	if($('#email').val()==''){
  		email = "อีเมล";
  		valid  = false;
  	}else{
  		if(!isValidEmail($('#email').val())){
  			email = "อีเมลให้ถูกต้อง";
  			valid = false;
  		}else{
  			/*if(!check_email($('#email').val())){
  				errorMessage += "อีเมลถูกใช้งานเเล้ว \n";
  				valid = false;
  			}else{
  				errorMessage += "อีเมลใช้งานได้ \n";
  				valid = true;
  			}*/
  		}

  	}
  	if($('#password').val()==''){
  		password = "รหัสผ่าน";
  		valid  = false;
  	}
  	if($('#repassword').val()==''){
  		repassword = "รหัสผ่านอีกครั้ง";
  		valid  = false;
  	}
  	if(document.signUp.password.value !='' && document.signUp.repassword.value!=''){
  		if(document.signUp.password.value != document.signUp.repassword.value){
  			checkpass = "รหัสผ่านให้ตรงกัน";
  			valid  = false;
  		}
  	}
  	if(!valid && errorMessage.length >0){
  		if(firstname!="") errorMessage+=firstname+",";
  		if(lastname!="") errorMessage+=lastname+",";
  		if(email!="") errorMessage+=email+",";
  		if(password!="") errorMessage+=password+",";
  		if(repassword!="") errorMessage+=repassword+",";
  		if(checkpass!="") errorMessage+=checkpass+",";
		errorMessage = errorMessage.substr(0, errorMessage.length-1);
  		alert(errorMessage);
  		event.preventDefault();
  	}
		//พอป้อนครบมันจะ error
		
	});
</script>

<script>

	function isValidEmail($email) {  
		var filter=/^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
		return (filter.test($email));   
	}  
	$('#submitIN').on('click',function(event){
		var valid = true;
		var errorMessage = "โปรดป้อน ";
	  	var email = "";
	  	var password = "";
		if($('#INemail').val()==''){
			email= "อีเมล";
			valid  = false;
		}else{
			if(!isValidEmail($('#INemail').val())){
				email= "อีเมลให้ถูกต้อง";
				valid = false;
			}

		}
		if($('#INpassword').val()==''){
			password= "รหัสผ่าน";
			valid  = false;
		}
		if(!valid && errorMessage.length >0){
  		if(email!="") errorMessage+=email+",";
  		if(password!="") errorMessage+=password+",";
		errorMessage = errorMessage.substr(0, errorMessage.length-1);
  		alert(errorMessage);
  		event.preventDefault();
  	}
		//พอป้อนครบมันจะ error
		
	});
</script>


</body>
</html>
