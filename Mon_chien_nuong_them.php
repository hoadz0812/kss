<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ADMIN</title>
<link rel="stylesheet" type="text/css" href="Style_admin.css">
</head>

<body>
	<div class="head">
		<table  width="100%">
			<tr>
				<td width="300px" align="center">	
				<a href="">
					<img src="ảnh/37123974_1787574851295795_6939990757411389440_n.jpg" height="150px">
				</a>
				</td>
				<td>
					<div class="title">
						Kim SuShi Admin
					</div>
				</td>
				<td width="200px">&nbsp;</td>
			</tr>
		</table>
	</div>
	<div class="menu">
		<ul>
			<li><a href="">Quản lý tài khoản ▼</a>
				<ul class="submenu">
					<li><a href="Admin_tai_khoan.php">Tài Khoản</a>
					<li><a href="Login.php">Đăng xuất</a>
				</ul>
			</li>
			<li><a href="">Quản lý Menu ▼</a>
				<ul class="submenu">
					<li><a href="Admin_menu_ssm.php">Sashimi và Sushi</a>
					<li><a href="Admin_menu_salad.php">Salad</a>
					<li><a href="Admin_menu_com.php">Cơm</a>
					<li><a href="Admin_menu_mon_chien_nuong.php">Món Chiên và Món Nướng</a>
					<li><a href="Admin_menu_lau_my.php">Lẩu và Mỳ</a>
					<li><a href="Admin_menu_do_uong.php">Đồ uống</a>
				</ul>
			</li>
		</ul>
	</div>
	<br>
	<div class="main" align="center">
		<form name="mon_chien_nuong" method="post" action="Mon_chien_nuong_them_save.php" enctype="multipart/form-data">
	<table border="0" align="center" width="80%" bgcolor="#E2E2E2">
		<tr height="50" bgcolor="#8A8A8A">
			<td colspan="2" align="center">THÊM MÓN</td>
		</tr>
		<tr>
			<td width="200">Tên tiếng anh</td>
			<td ><input type="text" class="text" name="txtTTA" ></td>
		</tr>
		<tr>
			<td width="200">Tên tiếng việt</td>
			<td ><input type="text" class="text" name="txtTTV" ></td>
		</tr>
		<tr>
			<td width="200">Giá</td>
			<td ><input type="text" class="text" name="txtGia" ></td>
		</tr>
		<tr>
			<td width="200">Hình ảnh</td>
			<td ><input type="file" class="text" name = "img_logo"></td>
		</tr>
		<tr>
			<td colspan="2" align="center"><input type="button" value="  OK   " onClick="check_input()"> <input type="reset" value="Cancel"></td>
		</tr>
	</table>
	</form>
	</div>
</body>
</html>
<script language="javascript">
	function check_input(){
		var txtTTA= document.mon_chien_nuong.txtTTA.value;
		var txtTTV= document.mon_chien_nuong.txtTTV.value;
		var txtGia= document.mon_chien_nuong.txtGia.value;
		if(txtTTA=="" || txtTTV=="" || txtGia=="")
			alert("Bạn chưa nhập đủ dữ liệu. Hãy kiểm tra lại!");
		else{
			alert("Thêm món thành công!");
			document.mon_chien_nuong.submit();
		}
			
	}
</script>		