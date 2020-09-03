<meta charset="UTF-8">
<?php
//1. เชื่อมต่อ database: 


$con= mysqli_connect("localhost","root","12345678","top1") or die("Error: " . mysqli_error($con));
 
mysqli_query($con, "SET NAMES 'utf8' ");
 



//สร้างตัวแปรสำหรับรับค่าที่นำมาแก้ไขจากฟอร์ม
	$s_id = $_POST["s_id"];
	$s_title = $_POST["s_title"];
	$s_gender = $_POST["s_gender"];
	$s_fname = $_POST["s_fname"];
	$s_lname = $_POST["s_lname"];	
	$s_nickname = $_POST["s_nickname"];

//ทำการปรับปรุงข้อมูลที่จะแก้ไขลงใน database 
	
	$sql = "UPDATE register SET  
			s_title='$s_title' ,
			s_gender='$s_gender' , 
			s_fname='$s_fname' ,
			s_lname='$s_lname' ,
			s_nickname='$s_nickname'  
			WHERE s_id='$s_id' ";

$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());

mysqli_close($con); //ปิดการเชื่อมต่อ database 

//จาวาสคริปแสดงข้อความเมื่อบันทึกเสร็จและกระโดดกลับไปหน้าฟอร์ม
	
	if($result){
	echo "<script type='text/javascript'>";
	echo "alert('เเก้ได้หรือเปล่าวะ');";
	echo "window.location = 'find.php'; ";
	echo "</script>";
	}
	else{
	echo "<script type='text/javascript'>";
	echo "alert('Error back to Update again');";
        echo "window.location = 'showmember.php'; ";
	echo "</script>";
}
?>