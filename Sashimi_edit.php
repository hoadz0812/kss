<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
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
	<?php
		$idmon=$_REQUEST["idmon"];
		$conn=mysqli_connect("localhost","root","") or die ("Không connect đc với máy chủ");
		//Chọn CSDL để làm việc
		mysqli_select_db($conn,"kimsushi") or die ("Không tìm thấy CSDL");
		$sql_edit_mon="Select * from `sashimi` where id_mon=$idmon";
		$result_edit_mon=mysqli_query($conn,$sql_edit_mon);
		$row=mysqli_fetch_object($result_edit_mon);
		$id_mon=$row->id_mon; 
		$tta=$row->ten_tieng_anh;
		$ttv=$row->ten_tieng_viet;
		$gia=$row->gia;
		$hinh_anh=$row->hinh_anh;
	?>
	<br>
	<div class="main" align="center">
	<form name="suamon" action="Sashimi_edit_save.php" method="post">
		<input type="hidden" name="txt_idmon" value="<?php echo $id_mon;?>" />
		<table width="80%" border="0" align="center" bgcolor="#E2E2E2">
  			<tr height="50" bgcolor="#8A8A8A">
    			<td colspan="2" align="center">SỬA THÔNG TIN MÓN</td>
  			</tr>
  			<tr>
    			<td width="200">Tên tiếng anh</td>
    			<td><input type="text" class="text" name="tta" value="<?php echo $tta;?>" /></td>
  			</tr>
  			<tr>
    			<td>Tên tiếng việt</td>
    			<td><input type="text" class="text" name="ttv" value="<?php echo $ttv;?>"/></td>
  			</tr>
			<tr>
    			<td>Giá</td>
    			<td><input type="text" class="text" name="gia" value="<?php echo $gia;?>"/></td>
  			</tr>
  			<tr>
    			<td colspan="2" align="center"><input type="submit" value="OK" />&nbsp;<input type="reset" value="RESET" /></td>
  			</tr>
		</table>
	</form>
	</div>
</body>
</html>