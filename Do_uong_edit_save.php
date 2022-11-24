<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<?php
		$id_mon=$_REQUEST["txt_idmon"];
		$tta=$_REQUEST["tta"];
		$ttv=$_REQUEST["ttv"];
		$gia=$_REQUEST["gia"];
		$conn=mysqli_connect("localhost","root","") or die ("Không connect đc với máy chủ");
		mysqli_select_db($conn,"kimsushi") or die ("Không tìm thấy CSDL");
		$sql_edit="update `do_uong` set `ten_tieng_anh`='$tta', `ten_tieng_viet`='$ttv',`gia`='$gia'  where id_mon = $id_mon";
		mysqli_query($conn,$sql_edit);
		header("Location: Admin_menu_do_uong.php");
?>
</body>
</html>