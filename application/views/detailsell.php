<script> //alert("sss");</script>
<?php
session_start();
if(empty($_SESSION['email'])){
  //echo "ว่าง";
	echo"<meta http-equiv='refresh' content='0; URL=http://angsila.cs.buu.ac.th/~57160284/887240/Project'>";
}else{
  //echo "ไม่ว่าง";
}
?>
<?php
			$host = "localhost";
			$username = "it57160284";
			$password = "it57160284";
			$database = "it57160284";
			$conn = mysqli_connect($host,$username,$password,$database);
			$conn -> query("SET NAMES UTF8");
			$year = $this->input->post('year');
			$month = $this->input->post('month');

			if($month==13){
				$sql3 = "SELECT * from Book_Hotel where YEAR(datetime)='$year' and (status='เข้าพักแล้ว'or status = 'ไม่เข้าพัก');";
			}else{
				$sql3 = "SELECT * from Book_Hotel where YEAR(datetime)='$year' and MONTH(datetime)='$month' and (status='เข้าพักแล้ว'or status = 'ไม่เข้าพัก');";
			}
			
			$result3 = $conn->query($sql3);
			$row3 = mysqli_num_rows($result3);
			//echo $result3;
			if($row3 <= 0){
				echo "<center><h1><img width='250px' height='250px' src=\"http://angsila.cs.buu.ac.th/~57160284/887240/Project/dist/images/sad3.jpg \">ขออภัย!ระบบไม่พบรายการขายในเดือนนี้</h1></center><BR>";
			}else{
		echo"<BR><BR>

				<div class=\"row\">
				<div class=\"col-md-1\"></div>
				<div class=\"col-md-10\" style=\"border: 2px solid #cccc99;\">
				
				<div class=\"row\" style=\"border: 2px solid #cccc99;\">
				<center>
				<div class=\"col-md-1\" >ลำดับ</div>
				<div class=\"col-md-2\">ชื่อ-นามสกุล</div>
				<div class=\"col-md-3\">วันที่เช็คอิน-เช็คเอาท์</div>
				<div class=\"col-md-4\">ห้องพัก</div>
				<div class=\"col-md-2\">จำนวนเงิน</div>		
				</center>	
				</div>";
				echo"<div class=\"row\">
					<center>";
				$i=0;
				while($row3 = $result3->fetch_object()){ 
				$i++;
				echo"<div class=\"col-md-1\">$i</div>";
				$sql4 = "SELECT firstname,lastname from SignUp_Hotel,Book_Hotel where email='$row3->byuser';";
				$result4 = $conn->query($sql4);
				$row4 = $result4->fetch_object();
				echo"<div class=\"col-md-2\">$row4->firstname $row4->lastname</div>
					<div class=\"col-md-3\">$row3->checkin"."/"."$row3->checkout</div>";
					$s1 = "";$s2 = "";$s3 = "";$s4 = "";
							$room1=$row3->room1;$room2=$row3->room2;
							$room3=$row3->room3;$room4=$row3->room4;
							//Superior ห้องละ 3500 บาท  2 ห้อง  2 คืน  ราคารวม  14400 บาท
							if($room1!="0"){
								$s1 = $row3->name_room1." ".$room1." ห้อง ";
							}
							if($room2!="0"){
								$s2 = $row3->name_room2." ".$room2." ห้อง ";
							}
							if($room3!="0"){
								$s3 = $row3->name_room3." ".$room3." ห้อง ";
							}
							if($room4!="0"){
								$s4 = $row3->name_room4." ".$room4." ห้อง ";
							}
							$s = $s1.$s2.$s3.$s4;
				echo"<div class=\"col-md-4\">$s</div>
					<div class=\"col-md-2\">$row3->paymoney บาท</div>	";	
				}
				echo"
				</center>	
				</div>
				</div>
				</div>
				<div class=\"col-md-1\"></div>
				<BR><BR>
				</div>";
			echo"
				<div class=\"row\">";
		
		echo"<div class=\"col-md-8\">";
		echo"</div>";
		echo"<div class=\"col-md-4\">";
				$sql5 = "SELECT sum(people) as people , count(id_book) as book , sum(paymoney) as money from Book_Hotel where YEAR(datetime)='$year' and MONTH(datetime)='$month' and status='เข้าพักแล้ว';";
			$result5 = $conn->query($sql5);
				
					echo"<div class=\"row\">
						<center>";
					$i=0;
					$row5 = $result5->fetch_object();
					echo "<h4 style=\"font-size:18pt;\">จำนวนยอดเข้าพัก : $row5->book ใบ   </h4>";
					echo "<h4 style=\"font-size:18pt;\">ยอดเงินรวม : $row5->money บาท</h4>";
		echo"</div>

		</div>";

			}
			
			
			?>