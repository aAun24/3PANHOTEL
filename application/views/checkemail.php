<?php
$servername = "localhost";
$username = "it57160284";
$password = "it57160284";
$dbname = "it57160284";
mysql_query("SET NAMES utf8");
 
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
 
//$m = $_POST['email'];
$m = "aun_14354@hotmail.com";
$sql = "SELECT * FROM SignUp_insert WHERE email LIKE '$m' ";
$result = $conn->query($sql);
 
if ($result->num_rows >= 1){
    echo "Not";
} else {
    echo "OK";
}
?>