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
	<?php
	$conn=mysqli_connect("localhost","root","") or die ("Không connect đc với máy chủ");
	mysqli_select_db($conn,"kimsushi") or die ("Không tìm thấy CSDL");	
	$sql_select="Select * from `com`";
	$result=mysqli_query($conn,$sql_select);
	$tong_bg=mysqli_num_rows($result);
	$stt_mon=0;
	while($row=mysqli_fetch_object($result))
	{
		$stt_mon++;
		$id_mon[$stt_mon]=$row->id_mon;
		$tta[$stt_mon]=$row->ten_tieng_anh;
		$ttv[$stt_mon]=$row->ten_tieng_viet;
		$gia[$stt_mon]=$row->gia;
		$hinh_anh[$stt_mon]=$row->hinh_anh;
	}
	?>
	<br>
	<div class="main" align="center">
	<table border="1" width="90%" bgcolor="#E2E2E2">
  		<tr bgcolor="#8A8A8A">
    		<td colspan="7" align="center">DANH MỤC CƠM</td>
  		</tr>
  		<form name="search_com" method="post" action="Com_search.php">
  			<tr>
    			<td colspan="7">&nbsp; Tìm kiếm: <select name="com">
    				<option value="0">Chọn món</option>
    				<?php
  						for($i=2;$i<=$tong_bg; $i++)
  						{
  					?>
  					<option value="<?php echo $id_mon[$i]?>"><?php echo $ttv[$i]?></option> 
					<?php
  						} 
					?>
    				</select>
					<input type="submit" value="Search" />
				</td>
  			</tr>
  		</form>
  		<tr>
    		<td width="38" align="center">STT</td>
    		<td width="212" align="center">Tên tiếng anh</td>
    		<td width="149" align="center">Tên tiếng việt</td>
			<td width="100" align="center">Giá</td>
    		<td width="80" align="center">Hình ảnh</td>
    		<td colspan="2" align="center"><a style="background-color:lightskyblue; color:black" href="Com_them.php">Thêm món</a></td>
  		</tr>
  		<?php
 		for($i=2;$i<=$tong_bg; $i++)
  			{
  
  		?>
  		<tr>
    		<td align="center"><?php echo $i-1;?></td>
    		<td align="center"><?php echo $tta[$i]?></td>
    		<td align="center"><?php echo $ttv[$i]?></td>
			<td align="center"><?php echo $gia[$i]?></td>
    		<td align="center"><img src="images/<?php echo $hinh_anh[$i] ?>" width="300px" height="300px"></td>
    		<td width="35" align="center"><a style="background-color:red; color:black" href="Com_edit.php?idmon=<?php echo $id_mon[$i]?>">Sửa</a></td>
    		<td width="37" align="center"><a style="background-color:yellow; color:black" href="Com_del.php?idmon=<?php echo $id_mon[$i]?>">Xoá</a></td>
  		</tr>
  		<?php
  			}
  		?>
  		<tr bgcolor="#8A8A8A">
    		<td colspan="7" align="center">Có tổng số  <?php echo $tong_bg-1;?> món</td>
 	 	</tr>
	</table>
	</div>
	<br>
</body>
</html>