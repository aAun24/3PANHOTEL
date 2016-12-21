<meta charset="utf8">
<?php
session_start();
	$_SESSION['byuser']=""; 
	$_SESSION['checkin']=""; 
	$_SESSION['checkout']="";
	$_SESSION['people']=0;
	$_SESSION['day']=0;
	$_SESSION['room1']=0;
	$_SESSION['room2']=0;
	$_SESSION['room3']=0;
	$_SESSION['room4']=0;
	$_SESSION['name_room1']="";
	$_SESSION['name_room2']="";
	$_SESSION['name_room3']="";
	$_SESSION['name_room4']="";
	$_SESSION['pay_room1']=0;
	$_SESSION['pay_room2']=0;
	$_SESSION['pay_room3']=0;
	$_SESSION['pay_room4']=0;
	 //15-10-2559

	$_SESSION['byuser']=$_POST['byuser']; 
	$_SESSION['checkin']=$_POST['checkin']; 
	$_SESSION['checkout']=$_POST['checkout'];
	$_SESSION['people']=$_POST['people'];
	/*echo $_SESSION['checkin'];
	echo $_SESSION['checkout'];
	echo $_SESSION['people'];
	echo $_SESSION['byuser'];*/
	//echo"Correct";
	echo"<meta http-equiv='refresh' content='0;URL=form_searchRoom2'>";
		

?>