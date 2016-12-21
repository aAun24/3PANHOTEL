<meta charset="utf8">
<?php
session_start();
$host = "localhost";
$username = "it57160284";
$password = "it57160284";
$database = "it57160284";

$conn = mysqli_connect($host,$username,$password,$database);
$conn->query("set names utf8");

if($conn->connect_error){
	die('Connect error!');
}else{
	if($_POST['INemail']!=null&&$_POST['INpassword']!=null){
		$email = $_POST['INemail'];
		$sql = "SELECT * from SignUp_Hotel where email = '$email'";
		$result = $conn->query($sql);
		$row=$result->fetch_object();
		if($_POST['INemail']==$row->email){
			if($_POST['INpassword']==$row->password){
				$_SESSION['firstname']=$row->firstname;	
				$_SESSION['lastname']=$row->lastname;	
				$_SESSION['password']=$row->password;
				$_SESSION['email']=$row->email;		
				$_SESSION['status']=$row->status;		
				//echo $_session['username'];
				//echo"Correct";
				if($_SESSION['status']=='manager'){
					echo"<meta http-equiv='refresh' content='0;URL=sell1'>";
				}else{
					if($_SESSION['status']=='staff'){
						echo"<meta http-equiv='refresh' content='0;URL=viewPrice'>";
					}else{
						echo"<meta http-equiv='refresh' content='0;URL=index2'>";
					}
				}
				
			}else{
				//echo"Password incorrect";
				$message = "โปรดป้อน รหัสผ่านให้ถูกต้อง";
				echo "<script type='text/javascript'>alert('$message');</script>";
				echo"<meta http-equiv='refresh' content='0;URL=form_Signin'>";		
			}
		}else{
			if($_POST['INemail']!=$row->email){
				//echo"Plase Sign Up";
				echo"<meta http-equiv='refresh' content='0;URL=index'>";
			}
		}
	
	}else{
		$check="";
		if($_POST['INemail']==null){
			$check = $check . "โปรดป้อน อีเมล";
		}
		if($_POST['INpassword']==null){
			$check = $check . "โปรดป้อน รหัสผ่าน";
		}
		echo $check;
	}
	
}
?>