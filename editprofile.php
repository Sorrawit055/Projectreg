<html> <head>
<title> Display Selected Customer Information</title>
</head> 
<?php


$serverName = "localhost";
$userName = "root";
$userPassword = "12345678";
$dbName = "top1";

$conn = new PDO("mysql:host=$serverName;dbname=$dbName",$userName,$userPassword);


	$sql = "SELECT * FROM register";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	?>
<body>
<?php include 'bar2.php';?>

<center><div class="container">
<center><h1>ข้อมูล</h1></center>
<?php
	if(isset($_GET["s_id"]))
	{
		$strCustomerID = $_GET["s_id"];
	}
    $serverName = "localhost";
    $userName = "root";
    $userPassword = "12345678";
    $dbName = "top1";
   
    $conn = new PDO("mysql:host=$serverName;dbname=$dbName",$userName,$userPassword);
 

    $sql = "SELECT * FROM register WHERE s_id = ?  ";
    $params = array($strCustomerID);
    $stmt = $conn->prepare($sql);
    $stmt->execute($params);
    $result = $stmt->fetch( PDO::FETCH_ASSOC );
  ?>
<table width="500" border="50">
<form action="updateprofile.php" method="post" >
  <tr>
    <th width="125">ID</th>
    <td width="240" ><?php echo $result["s_id"];?></td>
    </tr>
  <tr>
    <th width="130">เพศ</th>
    <td  ><input type="text" id="input_3" name="s_gender" data-type="input-textbox" class="form-textbox" size="20" value="<?php echo $result["s_gender"];?>" data-component="textbox" aria-labelledby="label_3" /></td>
    </tr>
  <tr>
    <th width="130">คำขึ้นต้น</th>
    <td ><input type="text" id="input_3" name="q3_input3" data-type="input-textbox" class="form-textbox" size="20" value="<?php echo $result["s_title"];?>" data-component="textbox" aria-labelledby="label_3" /></td>

    </tr>
  <tr>
    <th width="130">ขื่อ</th>
    <td  ><input type="text" id="input_3" name="q3_input3" data-type="input-textbox" class="form-textbox" size="20" value="<?php echo $result["s_fname"];?>" data-component="textbox" aria-labelledby="label_3" /></td>
    </tr>
  <tr>
    <th width="130">นามสกุล</th>
    <td><input type="text" id="input_3" name="q3_input3" data-type="input-textbox" class="form-textbox" size="20" value="<?php echo $result["s_lname"];?>" data-component="textbox" aria-labelledby="label_3" /></td>
    </tr>
  <tr>
    <th width="130">ชื่อเล่น</th>
    <td><input type="text" id="input_3" name="q3_input3" data-type="input-textbox" class="form-textbox" size="20" value="<?php echo $result["s_nickname"];?>" data-component="textbox" aria-labelledby="label_3" /></td>
    </tr>
    <tr>
    <th width="130">วันเกิด</th>
    <td><input type="date" id="input_3" name="q3_input3" data-type="input-textbox" class="form-textbox" size="20" value="<?php echo $result["s_bday"];?>" data-component="textbox" aria-labelledby="label_3" /></td>
    </tr>
    <tr>
    <th width="130">เบอร์โทรศัพท์</th>
    <td><input type="text" id="input_3" name="q3_input3" data-type="input-textbox" class="form-textbox" size="20" value="<?php echo $result["s_phone"];?>" data-component="textbox" aria-labelledby="label_3" /></td>
    </tr>
    <tr>
    <th width="130">Facebook</th>
    <td><input type="text" id="input_3" name="q3_input3" data-type="input-textbox" class="form-textbox" size="20" value="<?php echo $result["s_facebook"];?>" data-component="textbox" aria-labelledby="label_3" /></td>
    </tr>
    <tr>
    <th width="130">Email</th>
    <td><input type="text" id="input_3" name="q3_input3" data-type="input-textbox" class="form-textbox" size="20" value="<?php echo $result["s_email"];?>" data-component="textbox" aria-labelledby="label_3" /></td>
    </tr>
    <tr>
    <th width="130">บ้านเลขที่</th>
    <td><input type="text" id="input_3" name="q3_input3" data-type="input-textbox" class="form-textbox" size="20" value="<?php echo $result["address1"];?>" data-component="textbox" aria-labelledby="label_3" /></td>
    </tr>
    <tr>
    <th width="130">ตำบล</th>
    <td><input type="text" id="input_3" name="q3_input3" data-type="input-textbox" class="form-textbox" size="20" value="<?php echo $result["address2"];?>" data-component="textbox" aria-labelledby="label_3" /></td>
    </tr>
    <tr>
    <th width="130">อำเภอ</th>
    <td><input type="text" id="input_3" name="q3_input3" data-type="input-textbox" class="form-textbox" size="20" value="<?php echo $result["address3"];?>" data-component="textbox" aria-labelledby="label_3" /></td>
    </tr>
    <tr>
    <th width="130">จังหวัด</th>
    <td><input type="text" id="input_3" name="q3_input3" data-type="input-textbox" class="form-textbox" size="20" value="<?php echo $result["address4"];?>" data-component="textbox" aria-labelledby="label_3" /></td>
    </tr>
    <tr>
    <th width="130">รหัสไปรษณีย์</th>
    <td><input type="text" id="input_3" name="q3_input3" data-type="input-textbox" class="form-textbox" size="20" value="<?php echo $result["address5"];?>" data-component="textbox" aria-labelledby="label_3" /></td>
    </tr>
    <tr>
    <th width="130">ปีที่จบ</th>
    <td><input type="text" id="input_3" name="q3_input3" data-type="input-textbox" class="form-textbox" size="20" value="<?php echo $result["s_generation"];?>" data-component="textbox" aria-labelledby="label_3" /></td>
    </tr>
    <tr>
    <th width="130">ที่อยู่ทำงาน</th>
    <td><input type="text" id="input_3" name="q3_input3" data-type="input-textbox" class="form-textbox" size="20" value="<?php echo $result["s_address"];?>" data-component="textbox" aria-labelledby="label_3" /></td>
    </tr>
    <tr>
    <th width="130">ตำเเหน่งงาน</th>
    <td><input type="text" id="input_3" name="q3_input3" data-type="input-textbox" class="form-textbox" size="20" value="<?php echo $result["s_position"];?>" data-component="textbox" aria-labelledby="label_3" /></td>

    </tr>

 


</div>

  </table> <br>  <input type="submit"  value="เเก้ไขมูล">  </form>          <center>     <br> <button onclick="window.location.href = 'find.php';">กลับไป</button>
  <br><br><br>
<?php
$conn = null;
?>
<br>
</body>
<?php include 'footer.php';?>

</html>