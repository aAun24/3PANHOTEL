<form action='http://angsila.cs.buu.ac.th/~57160284/887240/Project/index.php/welcome/Price_update' method='post'>
<table class="table">
			<thead>
				<tr>
					<th width="30%"><h4>ประเภท</h4></th>
          <th width="30%"><h4>ราคา </h4></th>
          <th width="30%"><h4>เปอร์เซ็นต์เพิ่มกำไร</h4></th>
          <th width="10%"><h4>แก้ไข</h4></th>
				</tr>
			</thead>
			<tbody>
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
      /*if($_SESSION['status']=='staff'){
        echo"<meta http-equiv='refresh' content='0;URL=viewPrice'>";
      }*/
      if($_SESSION['status']=='customer'){
        echo"<meta http-equiv='refresh' content='0;URL=index2'>";
      }
}
?>

		<?php
		$host = "localhost";
		$username = "it57160284";
		$password = "it57160284";
		$database = "it57160284";
		$conn = mysqli_connect($host,$username,$password,$database);
		$conn->query("SET NAMES UTF8");
 							//$email = $_SESSION['email'];
		$sql1 = "SELECT *  FROM Room_Hotel where name='Superior'" ;
		$result1 = $conn->query($sql1);
		$sql2 = "SELECT *  FROM Room_Hotel where name='Deluxe'" ;
		$result2 = $conn->query($sql2);
		$sql3 = "SELECT *  FROM Room_Hotel where name='Suite'" ;
		$result3 = $conn->query($sql3);
		$sql4 = "SELECT *  FROM Room_Hotel where name='Family'" ;
		$result4 = $conn->query($sql4);
		echo"";

		
		while($row1=$result1->fetch_object()){	

           			echo "<tr class=\"info\">";
                    echo "<td>$row1->name</td>";
                    echo "<td>$row1->price</td>";
                    //echo "<td>".(($row1->per*'100')-100)."%</td>";
                    echo "<td>$row1->percent</td>";
                    echo "<td><button type=\"button\" class=\"btn btn-warning\" onclick='update1()'>Edit</button></td>";
                    echo "</tr>";

        } 
   

    	while($row2=$result2->fetch_object()){ 
					
           echo "<tr class=\"info\">";
                    echo "<td>$row2->name</td>";
                    echo "<td>$row2->price</td>";
                    //echo "<td>".(($row1->per*'100')-100)."%</td>";
                    echo "<td>$row2->percent</td>";
                    echo "<td><button type=\"button\" class=\"btn btn-warning\" onclick='update2()'>Edit</button></td>";
                    echo "</tr>";
                 
        }
        while($row3=$result3->fetch_object()){ 
 
                    echo "<tr class=\"info\">";
            echo "<td>$row3->name</td>";
            echo "<input type='hidden' name='name' value='$row3->name'>";
            echo "<td><input type=\"text\" class=\"form-control\" name=\"price\" id=\"price\" value=\"$row3->price\"></td>";
           
            //echo "<td><input type=\"text\" class=\"form-control\" name=\"per\" value=\"".(($row1->per*'100')-100)."\" id=\"per\"></td>";
            echo "<td><input type=\"text\" class=\"form-control\" name=\"per\" value=\"$row3->percent\" id=\"per\"></td>";
              echo "<td><button type='submit' class='btn btn-success' onclick='update3()'>Update</button></td>";      
            echo "</tr>"; 
                   
        }
        while($row4=$result4->fetch_object()){ 
 
                    echo "<tr class=\"info\">";
                    echo "<td>$row4->name</td>";
                    echo "<td>$row4->price</td>";
                    //echo "<td>".(($row4->per*'100')-100)."%</td>";
                    echo "<td>$row4->percent</td>";
                    echo "<td><button type=\"button\" class=\"btn btn-warning\" onclick='update4()'>Edit</button></td>";
                    echo "</tr>";
                    
        }
		
	?>
			</tbody>
		</table>
		</form>


