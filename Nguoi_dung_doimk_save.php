<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<?php
		$id=$_REQUEST["txt_doimk"];
		$mkc=$_REQUEST["mkc"];
		$mkm=$_REQUEST["mkm"];
		$conn=mysqli_connect("localhost","root","") or die ("Không connect đc với máy chủ");
		mysqli_select_db($conn,"kimsushi") or die ("Không tìm thấy CSDL");
	
	    $sql_check = "Select * from nguoi_dung where id_taikhoan = $id";
		$result = mysqli_query($conn,$sql_check);
		$row=mysqli_fetch_array($result);
		if($row['mat_khau'] == $mkc){
			if($mkc==$mkm){
				echo "Mật khẩu mới không được trùng mật khẩu cũ";
			}
			else{
				$sql_doimk_save="update `nguoi_dung` set `mat_khau`='$mkm'  where id_taikhoan = $id";
				mysqli_query($conn,$sql_doimk_save);
				header("Location: Admin_tai_khoan.php");
			}
		}else{
			echo "nhập sai mk cũ";
		}	
	?>
</body>
</html>