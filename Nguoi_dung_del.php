<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<?php
$id=$_REQUEST["id_nd"];
$conn=mysqli_connect("localhost","root","") or die ("Không connect đc với máy chủ");
//Chọn CSDL để làm việc
mysqli_select_db($conn,"kimsushi") or die ("Không tìm thấy CSDL");
//Tạo câu truy vấn
$sql_del="delete from `nguoi_dung` where id_taikhoan=$id";
mysqli_query($conn,$sql_del);
header("Location: Admin_tai_khoan.php");
?>
</body>
</html>