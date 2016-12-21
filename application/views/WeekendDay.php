<?php/*
 session_start();
 if(empty($_SESSION['email'])){
  //echo "ว่าง";
  echo"<meta http-equiv='refresh' content='0;URL=form_home'>";
}else{
  //echo $_SESSION['firstname'];
  //echo "ไม่ว่าง";*/
?>

<?php
$strStartDate = "2016-01-01";
	$strEndDate = "2025-12-31";
	$formal =0;
	$Weekend = 0;
	$Holiday = 0;
	$intTotalDay = ((strtotime($strEndDate) - strtotime($strStartDate))/  ( 60 * 60 * 24 )) + 1;
	if($date=='2016/09/15'){
		echo $row2->price_holiday+2500;
		echo"</span>";
		echo $row2->price_holiday;
		echo "&#3647";
	}else{
		while (strtotime($strStartDate) <= strtotime($strEndDate)) {
			$DayOfWeek = date("w", strtotime($strStartDate));
			if($DayOfWeek == 0 or $DayOfWeek ==6)  // 0 = Sunday, 6 = Saturday;
			{
			$intHoliday++;
			echo "$strStartDate = <font color=red>Holiday</font><br>";

			}

			else{
			$intWorkDay++;
			echo "$strStartDate = <b>Work Day</b><br>";
			}

?>