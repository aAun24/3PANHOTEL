
<?php
header("Cache-Control: no-store, no-cache, must-revalidate");   
header("Cache-Control: post-check=0, pre-check=0", false);  
$host = "localhost";
$username = "it57160284";
$password = "it57160284";
$database = "it57160284";
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
	//$_SESSION[email]
	$sql = "SELECT *  FROM Book_Hotel , SignUp_Hotel  where byuser='aun_14354@hotmail.com' AND email='aun_14354@hotmail.com' AND id_book='90';";
	$result = $conn->query($sql);
	$datecheckin;
	$datecheckout;
	$datetotal;
	while($row = $result->fetch_object()){ 
		if($row->id_book==90){
			$datecheckin = $row->checkin;
			$datecheckout = $row->checkout;
			$datetotal = $row->day;
		}else{
			
		}
	}
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

	$sql2 = "SELECT *  FROM Room_Hotel";
	$result2 = $conn->query($sql2);
	while($row2 = $result2->fetch_object()){ 
		if($row2->name=='Family'){

			for($d=0;$d<(count($daytotal))-1;$d++){
		//echo $d." ".$daytotal[$d]."<BR>"; เเสดงวันที่ที่พักทั้งหมด
				if($daytotal[$d]=='2016/09/15'){
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
			echo $totalmoney*$this->input->post("room")."&#3647";
			
		}
	}
?>