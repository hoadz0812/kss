<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<?php
        $ht = $_REQUEST["txtHoten"];
        $tk = $_REQUEST["txtTK"];
		$mk = $_REQUEST["txtMK"];
        $conn = mysqli_connect("localhost","root","") or die ("Khong connect duoc voi server");
        mysqli_select_db($conn,"kimsushi") or die ("Khong tim thay CSDL");
        $sql_insert="INSERT INTO nguoi_dung (`id_taikhoan`, `ho_ten`, `tai_khoan`, `mat_khau`) VALUES (NULL, '$ht', '$tk', '$mk')";
        mysqli_query($conn, $sql_insert);
        header("Location: Admin_tai_khoan.php");
    ?>
</body>
</html>