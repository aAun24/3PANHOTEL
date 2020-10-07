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
      // if($_SESSION['status']=='customer'){
      //   $id = $_SESSION['id_book'];
      //   echo"<meta http-equiv='refresh' content='5;URL=file_order2?id=$id'>";
      // }
}
?>
<?php
//require ('connection.php');//เชื่อมดาต้าเบส
require_once('mpdf/mpdf.php');
ob_start();
?>
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=UTF-8">

	<style type="text/css">
		<!--
		@page rotated { size: landscape; }
		.style1 {
			font-family: "TH SarabunPSK";
			font-size: 18pt;
			font-weight: bold;
		}
		.style2 {
			font-family: "TH SarabunPSK";
			font-size: 16pt;
			font-weight: bold;
			color:red;
		}
		.style3 {
			font-family: "TH SarabunPSK";
			font-size: 16pt;

		}
		.style5 {cursor: hand; font-weight: normal; color: #000000;}
		.style9 {font-family: Tahoma; font-size: 12px; }
		.style11 {font-size: 12px}
		.style13 {font-size: 9}
		.style16 {font-size: 9; font-weight: bold; }
		.style17 {font-size: 12px; font-weight: bold; }
	-->
</style>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<?php
				$id = $_GET["id"];
				$host = "localhost";
				$username = "root";
				$password = "";
				$database = "3panhotel";
				$conn = mysqli_connect($host,$username,$password,$database);
				$conn->query("SET NAMES UTF8");
				$sql1 = "SELECT * FROM Book_Hotel, SignUp_Hotel
								WHERE  id_book='$id'";
					$result1 = $conn->query($sql1);
					if($row1 = $result1->fetch_object()){
						$s1 = "";$s2 = "";$s3 = "";$s4 = "";
						$room1=$row1->room1;$room2=$row1->room2;
						$room3=$row1->room3;$room4=$row1->room4;
						//Superior ห้องละ 3500 บาท  2 ห้อง  2 คืน  ราคารวม  14400 บาท
						if($room1!="0"){
							$s1 = "<BR>".$row1->name_room1." ".$room1." ห้อง "
							."<BR>";
						}
						if($room2!="0"){
							$s2 = "<BR>".$row1->name_room2." ".$room2." ห้อง "
							."<BR>";
						}
						if($room3!="0"){
							$s3 = "<BR>".$row1->name_room3." ".$room3." ห้อง "
							."<BR>";
						}
						if($room4!="0"){
							$s4 = "<BR>".$row1->name_room4." ".$room4." ห้อง "
							."<BR>";
						}
					}
						$s = $s1.$s2.$s3.$s4;

				$sql = "SELECT * FROM Book_Hotel,SignUp_Hotel Where email=byuser and id_book='$id'";
				$result = $conn->query($sql);
				if ($row=$result->fetch_object()) {
					echo"<table width=\"800\" border=\"0\" align=\"center\" cellpadding=\"8\" cellspacing=\"0\">
						<tr style=\"background-color:lavender;\">
							<td style=\"\"><img src=\"<?= base_url();?>/dist/images/3PAN.png\" height=\"60px\"></td>
							<td colspan=\"6\" style=\"font-size:18pt;\" align=\"right\">เลขที่ใบจองห้องพัก : HT-PS-000$id</td>
						</tr>
						<tr style=\"background-color:lavenderblush;\">
							<td style=\"font-size:12pt;\">ชื่อผู้เข้าพัก</td>
							<td style=\"font-size:12pt;\">$row->firstname</td>			
							<td style=\"font-size:12pt;\" rowspan=\"7\">
							<center><img src=\"<?= base_url();?>/dist/images/signaun.png\"><BR><BR>
							(จุฬาลักษณ์  วทนะรัตน์)<BR>
							ผู้จัดการ</center>
							</td>
						</tr>
						<tr style=\"background-color:lavenderblush;\">
							<td style=\"font-size:12pt;\">วันที่เข้าพัก</td>
							<td style=\"font-size:12pt;\">$row->checkin</td>
						</tr>
						<tr style=\"background-color:lavenderblush;\">
							<td style=\"font-size:12pt;\">วันที่ออก</td>
							<td style=\"font-size:12pt;\">$row->checkout</td>
						</tr>
						<tr style=\"background-color:lavenderblush;\">
							<td style=\"font-size:12pt;\">จำนวนคืนที่เข้าพัก</td>
							<td style=\"font-size:12pt;\">$row->day วัน</td>    
						</tr>
						<tr style=\"background-color:lavenderblush;\">
							<td style=\"font-size:12pt;\">จำนวนผู้เข้าพัก</td>
							<td style=\"font-size:12pt;\">$row->people คน</td>
						</tr>
						<tr style=\"background-color:lavenderblush;\">
							<td style=\"font-size:12pt;\">ประเภทห้องพัก</td>
							<td style=\"font-size:12pt;\">$s</td>
						</tr>
						
						<tr style=\"background-color:lavenderblush;\">
							<td style=\"font-size:12pt;\">ยอดชำระเงินรวม</td>
							<td style=\"font-size:12pt;\">$row->paymoney บาท</td>
						</tr>
						<tr style=\"background-color:lavender;\">
							<td colspan=\"6\" style=\"font-size:10pt;\">169 20131, Burapha University Long Had Bangsaen Rd, Saen Suk, Chon Buri District, Chon Buri 20131</td>
						</tr>
						<tr style=\"background-color:lavender;\">
							<td colspan=\"6\" style=\"font-size:10pt;\"><p><center>Telephone : 089-999-9999</center></p></td>
						</tr>


					</table>";
				}
	?>
</body>
</html>
<?Php
$html = ob_get_contents();
ob_end_clean();
$pdf = new mPDF('th', 'A4', '0', 'THSaraban');
$pdf->SetAutoFont();
$pdf->SetDisplayMode('fullpage');
$pdf->WriteHTML($html, 2);

$pdf->Output('3PAN.pdf', 'I');//ตั้งชื่อไฟล์
?>     
<!--ดาวโหลดรายงานในรูปแบบ PDF <a href="MyPDF/MyPDF.pdf">คลิกที่นี้</a>-->