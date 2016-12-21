<html>
<head>
<title>3PAN HOTEL</title>
</head>
<body>
<?php
ini_set('display_errors', 1);
error_reporting(~0);
$host = "localhost";
		$username = "it57160284";
		$password = "it57160284";
		$database = "it57160284";
		$conn = mysqli_connect($host,$username,$password,$database);
		$conn->query("SET NAMES UTF8");
 							//$email = $_SESSION['email'];
    $sql1 = "SELECT * FROM paymoney_hotel";
    $result1 = $conn->query($sql1);
	$strCustomerID = $_GET["id"];
	$sql = "DELETE FROM paymoney_hotel WHERE id = '" . $strCustomerID . "' ";
	$query = mysqli_query($conn,$sql1);
	if(mysqli_affected_rows($conn)) {
		echo "Record delete successfully";
	}
	mysqli_close($conn);
	?>
</body>
</html>