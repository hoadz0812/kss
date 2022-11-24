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
		$id_nd=$_REQUEST["id_nd"];
		$conn=mysqli_connect("localhost","root","") or die ("Không connect đc với máy chủ");
		//Chọn CSDL để làm việc
		mysqli_select_db($conn,"kimsushi") or die ("Không tìm thấy CSDL");
		$sql_edit="Select * from `nguoi_dung` where id_taikhoan=$id_nd";
		$result_edit=mysqli_query($conn,$sql_edit);
		$row=mysqli_fetch_object($result_edit);
		$id=$row->id_taikhoan; 
		$hoten=$row->ho_ten;
		$user=$row->tai_khoan;
		$pass=$row->mat_khau;
	
	    $sql_check = "Select * from nguoi_dung where id_taikhoan = $id";
		$result = mysqli_query($conn,$sql_check);
		$row1=mysqli_fetch_array($result);
		$mk=$row1['mat_khau'];
	  	
	?>
	<br>
	<div class="main" align="center">
	<form name="doimk" action="Nguoi_dung_doimk_save.php" method="post">
		<input type="hidden" name="txt_doimk" value="<?php echo $id;?>" />
		<table width="80%" border="0" align="center" bgcolor="#E2E2E2">
  			<tr height="50" bgcolor="#8A8A8A">
    			<td colspan="2" align="center">ĐỔI MẬT KHẨU</td>
  			</tr>
  			<tr>
    			<td width="200">Tên đăng nhập</td>
    			<td><?php echo $user;?></td>
  			</tr>
  			<tr>
    			<td>Mật khẩu cũ</td>
    			<td><input type="password" class="text" name="mkc"/></td>
  			</tr>
			<tr>
    			<td>Mật khẩu mới</td>
    			<td><input type="password" class="text" name="mkm"/></td>
  			</tr>
  			<tr>
    			<td colspan="2" align="center"><input type="button" onClick="check_input()"  value="OK"/>&nbsp;<input type="reset" value="RESET"/></td>
  			</tr>
		</table>
	</form>
	</div>
</body>
</html>
<script language="javascript">
	function check_input(){
		var txtMKC= document.doimk.mkc.value;
		var txtMKM= document.doimk.mkm.value;
		if(txtMKC=="" || txtMKM==""){
			alert("Bạn chưa nhập đủ thông tin!");
		}
		else if(txtMKC!="<?php echo $mk ?>"){
			alert("Nhập sai mật khẩu cũ!")   		
		}
		else if(txtMKC==txtMKM){
			alert("Mật khẩu mới không được trùng mật khẩu cũ!");
		}	
		else{
			document.doimk.submit();
		}
	}
</script>		