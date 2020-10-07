<?php
session_start();
if(empty($_SESSION['email'])){
  //echo "ว่าง";
	echo"<meta http-equiv='refresh' content='0; URL=<?= base_url();?>'>";
}else{
  //echo "ไม่ว่าง";
}
header("Cache-Control: no-store, no-cache, must-revalidate");   
header("Cache-Control: post-check=0, pre-check=0", false);  
$host = "localhost";
$username = "root";
$password = "";
$database = "3panhotel";
$conn = mysqli_connect($host,$username,$password,$database);
$conn -> query("SET NAMES UTF8");
 							//$email = $_SESSION['email'];
/*$sql = "SELECT *  FROM Book_Hotel , SignUp_Hotel  where byuser='aun_14354@hotmail.com' AND email='aun_14354@hotmail.com';";
$result = $conn->query($sql);
while($row = $result->fetch_object()){ 
} */
$strStartDate = "2016-01-01";
$strEndDate = "2026-12-31";
$weekendDay[]=0;
$i=0;
	//หาวันหยุดเสาร์-อาทิตย์
while (strtotime($strStartDate) <= strtotime($strEndDate)) {
	$DayOfWeek = date("w", strtotime($strStartDate));
		if($DayOfWeek == 0 or $DayOfWeek ==6)  // 0 = Sunday, 6 = Saturday;
		{
			$weekendDay[$i++] = $strStartDate;
		//echo "$strStartDate = <font color=red>Holiday</font><br>";
		}
		//$DayOfWeek = date("l", strtotime($strStartDate)); // return Sunday, Monday,Tuesday....
		$strStartDate = date ("Y-m-d", strtotime("+1 day", strtotime($strStartDate)));
}
	//จบหาวันหยุดเสาร์-อาทิตย์
	
	//หาวันที่เช็คอิน-เอาท์	
	//$_SESSION[email]
	/*$sql = "SELECT *  FROM Book_Hotel , SignUp_Hotel  where byuser='aun_14354@hotmail.com' AND email='aun_14354@hotmail.com' AND id_book='128';";
	$result = $conn->query($sql);
	$datecheckin;
	$datecheckout;
	$datetotal;
	while($row = $result->fetch_object()){ 
		if($row->id_book==128){
			$datecheckin = $row->checkin;
			$datecheckout = $row->checkout;
		}else{
			
		}
	}*/
	$datecheckin=0;
	$datecheckout=0;
	
	///หาวันที่เช็คอิน-เอาท์	 
	$datecheckin=$_SESSION['checkin'];
	$datecheckout=$_SESSION['checkout'];
	//หาระยะเวลาที่ไปพัก
	$j=0;
	$daytotal[]=0;
	$strStartDate = $datecheckin;
	$strEndDate   = $datecheckout;
	$totalmoney=0;
	while (strtotime($strStartDate) <= strtotime($strEndDate)) {
		$DayOfWeek = date("w", strtotime($strStartDate));
		$daytotal[$j++] = $strStartDate;
		$strStartDate = date ("Y-m-d", strtotime("+1 day", strtotime($strStartDate)));
	}
	//จบหาระยะเวลาที่ไปพัก
	$_SESSION['day']=count($daytotal)-1;
	$name = $this->input->post('name_room');
	$sql2 = "SELECT *  FROM Room_Hotel";
	$result2 = $conn->query($sql2);
	while($row2 = $result2->fetch_object()){ 
		if($row2->name==$name){

			for($d=0;$d<(count($daytotal))-1;$d++){
				//echo $d." ".$daytotal[$d]."<BR>"; เเสดงวันที่ที่พักทั้งหมด
				//ใส่เทศกาลลงไฟล์ JSON
				if($daytotal[$d]=='2016/10/23'||$daytotal[$d]=='2016/10/24'||
				   $daytotal[$d]=='2016/12/05'||$daytotal[$d]=='2016/12/10'||
				   $daytotal[$d]=='2016/09/12'||$daytotal[$d]=='2016/12/31'||
				   $daytotal[$d]=='2017/01/01'||
				   $daytotal[$d]=='2017/02/22'||$daytotal[$d]=='2017/04/06'||
				   $daytotal[$d]=='2017/04/13'||$daytotal[$d]=='2017/04/14'||
				   $daytotal[$d]=='2017/04/15'||$daytotal[$d]=='2017/05/05'||
				   $daytotal[$d]=='2017/05/20'||$daytotal[$d]=='2017/07/19'||
				   $daytotal[$d]=='2017/07/20'||$daytotal[$d]=='2017/08/12'||
				   $daytotal[$d]=='2017/10/23'||$daytotal[$d]=='2017/10/24'||
				   $daytotal[$d]=='2017/12/05'||$daytotal[$d]=='2017/12/10'||
				   $daytotal[$d]=='2018/01/01'||$daytotal[$d]=='2018/03/01'||
				   $daytotal[$d]=='2018/04/06'||$daytotal[$d]=='2018/04/13'||
				   $daytotal[$d]=='2018/04/14'||$daytotal[$d]=='2018/04/15'||
				   $daytotal[$d]=='2018/05/01'||$daytotal[$d]=='2018/05/05'||
				   $daytotal[$d]=='2018/05/29'||$daytotal[$d]=='2018/07/27'||
				   $daytotal[$d]=='2018/07/28'||$daytotal[$d]=='2018/08/12'||
				   $daytotal[$d]=='2018/10/23'||$daytotal[$d]=='2018/10/24'||
				   $daytotal[$d]=='2018/11/22'||$daytotal[$d]=='2018/12/10'||
				   $daytotal[$d]=='2018/12/31'){
					$totalmoney = $totalmoney + $row2->price_holiday;
				}else{
					$checkWeekend = 'false';
					for($w=0;$w<count($weekendDay);$w++){
					//echo $weekendDay[$w]."<BR>";
						if($weekendDay[$w]==$daytotal[$d]){
							$checkWeekend = 'true';
							break;
						}else{
							$checkWeekend = 'false';
						}
					}
					if($checkWeekend=='true'){
						$totalmoney = $totalmoney + $row2->price_weekend;
					}else{
						$totalmoney = $totalmoney + $row2->price_formal;
					}
				}
			}
	if($this->input->post('name_room')=='Superior'){
		$_SESSION['name_room1'] = "Superior";
		$_SESSION['room1'] = $this->input->post("room");
		$_SESSION['pay_room1'] = $totalmoney*$this->input->post("room");
	}else{
		if($this->input->post('name_room')=='Deluxe'){
			$_SESSION['name_room2'] = "Deluxe";
			$_SESSION['room2'] = $this->input->post("room");
			$_SESSION['pay_room2'] = $totalmoney*$this->input->post("room");
		}else{
			if($this->input->post('name_room')=='Suite'){
				$_SESSION['name_room3'] = "Suite";
				$_SESSION['room3'] = $this->input->post("room");
				$_SESSION['pay_room3'] = $totalmoney*$this->input->post("room");
			}else{
				$_SESSION['name_room4'] = "Family";
				$_SESSION['room4'] = $this->input->post("room");
				$_SESSION['pay_room4'] = $totalmoney*$this->input->post("room");
			}
		}
	}

	/*$room = $this->input->post("room");
	//echo $room;
	if($room !=0){
		echo $room."<span>".(($totalmoney*$room)+1500)."</span>".$totalmoney*$room."&#3647";
		//echo "no o";
	}else{
		//echo 0."&#3647";
		echo "o";
	}*/
	echo $totalmoney*$this->input->post("room")."&#3647";
	
		}
	}

?>