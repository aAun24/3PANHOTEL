<?php
session_start();
if(empty($_SESSION['email'])){
  //echo "ว่าง";
	echo"<meta http-equiv='refresh' content='0; URL=http://angsila.cs.buu.ac.th/~57160284/887240/Project'>";
}else{
}


 $_SESSION['paymoney'] = $_SESSION['pay_room1']+$_SESSION['pay_room2']+$_SESSION['pay_room3']+$_SESSION['pay_room4'];
 echo $_SESSION['paymoney']." บาท";
?>