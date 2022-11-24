<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<?php
		$id=$_REQUEST["txt_id_nd"];
		$ht=$_REQUEST["ht"];
		$tk=$_REQUEST["tk"];
		$conn=mysqli_connect("localhost","root","") or die ("Không connect đc với máy chủ");
		mysqli_select_db($conn,"kimsushi") or die ("Không tìm thấy CSDL");
		$sql_edit_save="update `nguoi_dung` set `ho_ten`='$ht', `tai_khoan`='$tk'  where id_taikhoan = $id";
		mysqli_query($conn,$sql_edit_save);
		header("Location: Admin_tai_khoan.php");
?>
</body>
</html>