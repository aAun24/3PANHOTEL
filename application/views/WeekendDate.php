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
$strEndDate = "2026-12-31";
$weekendDay[]=0;
$i=0;
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
for($d=0;$d<strlen();$d++)
echo $weekendDay[$d]."<BR>";
?>
