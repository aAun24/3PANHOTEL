<!-- Simple signup form optimized for mobile, with toggleable password masking -->
<?php echo '<meta http-equiv="refresh" content="5?/>'?>
<!DOCTYPE html>
<html>
<head>
    
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
    <style>
@import "compass/css3";

$primaryColour: #009966;

@import url(http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700);
@import "compass/css3/filter";
@import "compass/css3/transition";

body {
  font-family: "Open Sans";
    background: $primaryColour;
  height: 100vh;
}

input:focus,
select:focus,
textarea:focus,
button:focus {
  outline: none;
}

.topslot {
  background-image: url("http://i.imgur.com/faWOSDs.jpg");
  background-color: darken($primaryColour,5%);
  background-position: center;
  background-size: cover;
  padding: 1rem 0rem 6rem 0rem;
  box-shadow: 0em -4em 8em -4em rgba(0,0,0,0.5) inset;
  border-bottom: 0.3rem solid darken($primaryColour,10%);
}
.brief {
  display: block;
  color: #fff;
  font-size: 4rem;
  font-weight: 400;
  text-align: center;
  margin: 2rem 0rem 0rem;
  h1 {
    font-size: 5rem;
    margin: 0rem;
  }
  p {
    margin: 0rem;
    font-style: italic;
    font-weight: 300;
    font-size: 1.09rem;
  }
}

form {
  padding: 1rem;
  background: #fff;
  border-radius: 0.25rem;
  box-shadow: 0rem 0.3rem 1rem 0.1rem rgba(0,0,0,0.35);
}

input {
  margin-bottom: 1rem;
  display: block;
  @include box-sizing(border-box);
}

input:not([type=submit]){
  text-align: center;
  padding: 0.25rem 0.5rem;
  border-radius: 0.15rem;
  border: 2px solid lighten($primaryColour,5%);
  //@include transition(border 0.5s cubic-bezier(0.605, 1.310, 0.455, 1.005));
  &:focus { border-left-width: 0.5rem; }
  box-shadow: 0rem 0.25rem 0.25rem 0rem rgba(0,0,0,0.15) inset;
  font-size: 1.5rem;
  font-weight: 300;
  width: 100%;
}

input[type=submit] {
  border: 0rem;
  width: 100%;
  background-color: $primaryColour;
  color: white;
  margin-bottom: 0rem;
  font-size: 1.4rem;
  padding: 0.3rem 0rem;
  @include transition(background 0.5s ease);
  &:hover {
    cursor: pointer;
    background-color: lighten($primaryColour,10%);
  }
  &:active {
    -webkit-transition-duration: 0s;
    background-color: darken($primaryColour,5%);
  }
}

#signup.is-on {
  color: #fff;
}
.signup-fields {
  // display: none;
}

.signup-fields {
  height: 0;
  opacity: 0;
  &.is-on {
    opacity: 1;
    height: 60px;
  }
}

.main {
  margin: -2.5rem auto 0rem;
  width: 16rem;
  .extras {
    text-align: center;
    font-size: 0.8rem;
    margin-top: 1rem;
    a {
      text-decoration: none;
      font-weight: 300;
      color: lighten($primaryColour, 25%);
      &:hover {
        color: #fff;
        text-decoration: underline;
      }
    }
  }
}

    </style>
    <script>
      $('#signup').click(function(){
  if($(this).hasClass("is-on"))
  {
    // $(".signup-fields").slideUp();
    $(this).removeClass('is-on').html("sign up");
    $('.signup-fields').removeClass('is-on');
    $('#submit').attr('value','log in');
    $('#verb').html('continue');
  }
  else
  { 
    // $(".signup-fields").slideDown();
    $(this).addClass('is-on').html("nevermind, log in");
    $('.signup-fields').addClass('is-on');
    $('#submit').attr('value','sign up');
    $('#verb').html('begin');
  }
});

    </script>
</head>
<body>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<div class="landing">
<section class="topslot">
  <div class="wrapper">
    
    <div class="brief">
      <h1>Sign Up</h1>
      <p><span id="verb">continue</span> your happiness</p>
    </div>
    
  </div>
</section>

<section>
  <div class="main">
    <form method="POST" action="" accept-charset="UTF-8">
      <input type="hidden" name="status" value="c">
      <label for="firstname" class="col-sm-1 control-label">
       Firstname:</label><br><br>
      <input type="text" class="form-control" id="firstname" name="firstname" placeholder="First name" />
       <label for="surname" class="col-sm-1 control-label">
       Surname:</label><br><Br>
      <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Surname" />
       <label for="email" class="col-sm-1 control-label">
        Email:</label><br><br>
        <input type="email" class="form-control" id="email1" name="email" placeholder="Email" />
        <label for="exampleInputPassword1" class="col-sm-1 control-label">
                                                                            Password:</label><br><br>
                                                                           
                                                                                <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password" />
         <label for="exampleInputPassword1" class="col-sm-4 control-label">
                                                                                Confirm password:</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" name="repassword" placeholder="Re-enter password" />
                                                                              
        <button type="submit" class="btn btn-success btn-sm">
                                                                                        SignUp</button>
                                                                                        <button type="submit" class="btn btn-danger btn-sm">
                                                                                            Cencel</button>
                                                                                        </div>
                                                                                    </div>
      </div>
     
    </form><!--
    <?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "3panhotel";
    $conn = mysqli_connect($host,$username,$password,$database);
    $conn -> query("SET NAMES UTF8");
    $firstname  = $_POST['firstname']; 
    $lastname  = $_POST['lastname'];  
    $email  = $_POST['email']; 
    $password  = $_POST['password']; 
    $sql = "INSERT INTO SignUp_Hotel(firstname,lastname,email,password VALUES('$firstname','$lastname','$email','$password')";
    //echo $sql;
    $conn ->query($sql);
    echo"Signup success.";
               
    ?>

    <div class="extras">
      <a id="signup" href="#">sign up</a>
    </div>
-->
  </div>
    
</section>
</div>

</body>
</html>

