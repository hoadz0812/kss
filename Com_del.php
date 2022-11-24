<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<?php
$idmon=$_REQUEST["idmon"];
$conn=mysqli_connect("localhost","root","") or die ("Không connect đc với máy chủ");
//Chọn CSDL để làm việc
mysqli_select_db($conn,"kimsushi") or die ("Không tìm thấy CSDL");
//Tạo câu truy vấn
$sql_del="delete from `com` where id_mon=$idmon";
mysqli_query($conn,$sql_del);
header("Location: Admin_menu_com.php");
?>
</body>
</html>