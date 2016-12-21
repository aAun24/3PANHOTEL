  <?php
session_start();
$host = "localhost";
$username = "it57160284";
$password = "it57160284";
$database = "it57160284";

$conn = mysqli_connect($host,$username,$password,$database);
$conn ->query("set names utf8");
if($conn ->connect_error){
	die('Connect error!');
}else{
	if($_POST['name']!=null){
		$name  = $_POST['name']; 
		$img;//สร้างตัวเเปรมาเพื่อเก็บค่า เพราะตัวเเปร newimage ใช้ได้เเค่ใน if
		$picture = $_FILES['picture']['tmp_name'];  
		$picture_name = $_FILES['picture']['name']; 
		//$newimage->image_resize         = true ; // อนุญาติให้ย่อภาพได้
        // $newimage->image_x              = 20px ; // กำหนดความกว้างภาพเท่ากับ 400 pixel 
        //$newimage->image_ratio_y        = true; // ให้คำณวนความสูงอัตโนมัติ 	  
			if($picture!=null){  
				$arraypic = explode(".",$picture_name);//แบ่งชื่อไฟล์กับนามสกุลออกจากกัน  
				//$lastname = strtolower($arraypic);  
				$filename = $arraypic[0];//ชื่อไฟล์  
				$filetype = $arraypic[1];//นามสกุลไฟล์  
				if($filetype=="jpg" || $filetype=="jpeg" || $filetype=="png"  
				|| $filetype=="gif"){  
				$newimage = $filename.".".$filetype;//รวมชื่อไฟล์กับนามสกุลเข้าด้วยกัน
				//echo $newimage."new";
				copy($picture,"dist/images/gallery/".$newimage); //โฟลเดอร์สำหรับเก็บรูป/ไฟล์รูป
				$GLOBALS["img"] = $newimage;//ใช้ได้ทั้งไฟล์

				/*echo $filename;
				echo $filetype;
				echo $GLOBALS["img"];*/
				}else {  
				echo "<h3>ERROR : ไม่สามารถ Upload รูปภาพ</h3>";  
				}  
			} 
		$picture = $GLOBALS["img"]; 
		//$showpic = "uploads/".$newimage; 
		$sql = "INSERT INTO Gallery_Hotel(name,picture) VALUES('$name','$picture')";
		//echo $sql;
		$conn ->query($sql);
		//echo"Picture success.";
		echo"<meta http-equiv='refresh' content='0;URL=http://angsila.cs.buu.ac.th/~57160284/887240/Project/index.php/welcome/Updategallery'>";
	}else{
		echo"Pic fail";
	}

}
?>