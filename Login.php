<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="StyleLogin.css">
	<link rel="stylesheet" type="text/css" href="StyleMenu.css">
</head>

<body>
	<table  width="100%" >
			<tr>
				<td width="250px" align="right">	
				<a href="KIM SUSHI.php">
					<img src="ảnh/37123974_1787574851295795_6939990757411389440_n.jpg" height="150px">
				</a>
				</td>
				<td>
					<div class="title">
						Kim SuShi
					</div>
					<div class="title1">
						Ẩm thực Nhật Bản - Nét tinh túy ẩm thực Đông Nam Á
					</div>	
				</td>
				<td align="right" class="top">
					<img src="ảnh/co.jpg" height="50px">
					<img src="ảnh/conb.jpg" height="50px">
				</td>
			</tr>
			<tr>
				<td colspan="3">&nbsp;
					
				</td>
			</tr>
</table>
	<div class="from">
		<form action="process.php" method="post" name="login">
			<p class="name" align="center">
				Đăng nhập vào hệ thống
			</p>
			<p class="label">
				<label>Tên đăng nhập:</label>
			</p>
			<p class="input">
				<input type="text" name="user">
			</p>
			<p class="label">
				<label>Mật khẩu:</label>
			</p>
			<p class="input">
				<input type="password" name="pass">
			</p>
			<p align="center">
				<input type="button" id="btn" value="Đăng nhập" onClick="check_input()">
			</p>
		</form>
	</div>
</body>
</html>
<script language="javascript">
	function check_input(){
		var txtuser= document.login.user.value;
		var txtpass= document.login.pass.value;
		if(txtuser=="" || txtpass=="")
			alert("Bạn chưa nhập đủ dữ liệu. Hãy kiểm tra lại!");
		else
			document.login.submit();
	}
</script>