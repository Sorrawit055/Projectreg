<!DOCTYPE html>
<html lang="en">
<head>
<title>Course</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Course Project">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<link href="plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
  <div class="g"><img src="logo1.1.png" class="img-fluid"  width="" height=""alt="Responsive image">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp;&nbsp; ระบบลงทะเบียนสมาชิกศิษย์เก่ามหาวิทยาลัยราชภัฎนครปฐม
  </div>
 <style>
  .g {
  background-color: gray;
  font-size: 30px;
}
</style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
  
    <ul class="nav navbar-nav">
      <li class=""><a href="index.php">หน้าเเรก</a></li>
      <li><a href="#"></a></li>
    <li><a href="#"></a></li>
    <li><a href="#"></a></li>
    <li><a href="#"></a></li>
    <li><a href="#"></a></li>
    <li><a href="#"></a></li>
 
      <li class=""><a href=".php">ความเป็นมา</a></li>
      <li><a href="#"></a></li>
    <li><a href="#"></a></li>
    <li><a href="#"></a></li>
    <li><a href="#"></a></li>
    <li><a href="#"></a></li>
    <li><a href="#"></a></li>
  
      <li class=""><a href="find.php">ตรวจสอบศิษย์เก่า</a></li>
      <li><a href="#"></a></li>
    <li><a href="#"></a></li>
    <li><a href="#"></a></li>
    <li><a href="#"></a></li>
    <li><a href="#"></a></li>
    <li><a href="#"></a></li>
   
      <li class=""><a href="#">ติดต่อ</a></li>
    
     
    </ul>
    <ul class="nav navbar-nav navbar-right">
    <?php  
 //login_success.php  
 session_start();  

 if(isset($_SESSION["s_email"]))  
 {  
      
      echo ' 
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown">ยินดีต้อนรับคุณคือ : '.$_SESSION["s_email"].' <span class="caret"></span></a>
      <ul class="dropdown-menu">
      <li><a href="editprofile.php">ข้อมูลส่วนตัว</a></li>
      <li><a href="logout.php">Logout</a></li>
    </ul>
  </li>
  
';   
   
 }  
 else  
 {  
      header("location:index2.php");  
 }  

 ?> 
    </ul>
  </div>
</nav>
  


</body>
</html>
