<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<?php
        $tta = $_REQUEST["txtTTA"];
        $ttv = $_REQUEST["txtTTV"];
		$gia = $_REQUEST["txtGia"];
		$uploadDir_img_logo = "images/";
		$file_tmp = isset($_FILES['img_logo']['tmp_name']) ? $_FILES['img_logo']['tmp_name'] : "";
		$file_name = isset($_FILES['img_logo']['name']) ? $_FILES['img_logo']['name'] : "";
		$file_type = isset($_FILES['img_logo']['type']) ? $_FILES['img_logo']['type'] : "";
		$file_size = isset($_FILES['img_logo']['size']) ? $_FILES['img_logo']['size'] : "";
		$file_error = isset($_FILES['img_logo']['error']) ? $_FILES['img_logo']['error'] : "";
		$dmyhis=date("Y").date("m").date("d").date("H").date("i").date("s");
		$file_name_=$dmyhis.$file_name;
		copy($file_tmp, $uploadDir_img_logo.$file_name_);
        $conn = mysqli_connect("localhost","root","") or die ("Khong connect duoc voi server");
        mysqli_select_db($conn,"kimsushi") or die ("Khong tim thay CSDL");
        $sql_insert="INSERT INTO lau_my (`id_mon`, `ten_tieng_anh`, `ten_tieng_viet`, `gia`, `hinh_anh`) VALUES (NULL, '$tta', '$ttv', '$gia', '$file_name_')";
        mysqli_query($conn, $sql_insert);
        header("Location: Lau_my_them.php");
    ?>
</body>
</html>