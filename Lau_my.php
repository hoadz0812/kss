<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Lẩu và mỳ</title>
<link rel="stylesheet" type="text/css" href="StyleMenu.css">
<link rel="stylesheet" type="text/css" href="StyleMain.css">
</head>

<body>
<?php
$conn=mysqli_connect("localhost","root","") or die ("Không connect đc với máy chủ");
//Chọn CSDL để làm việc
mysqli_select_db($conn,"kimsushi") or die ("Không tìm thấy CSDL");
//Tạo câu truy vấn
$sql_select="Select * from `lau_my`";
$result=mysqli_query($conn,$sql_select);
$tong_bg=mysqli_num_rows($result);
$stt_mon=0;
while($row=mysqli_fetch_object($result))
{
	$stt_mon++;
	$tta[$stt_mon]=$row->ten_tieng_anh;
	$ttv[$stt_mon]=$row->ten_tieng_viet;
	$gia[$stt_mon]=$row->gia;
	$hinh_anh[$stt_mon]=$row->hinh_anh;
}
?>
	<table  width="100%">
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
	<div class="container">
		<table width="1100px" align="center">
			<tr>
				<td colspan="5" align="center">
					<img src="ảnh/iconMenu.png" width="80px">
					<div class="title2">
						MENU
					</div>
					<div class="title3">Lẩu và Mỳ</div>
				</td>
			</tr>
			<tr>
				<td colspan="5">&emsp;</td>
			</tr>
			<?php
				$a=2;
				$tong_bg2=4;
				$b=$tong_bg+1;
				$c=$tong_bg+2;
				$d=$tong_bg+3;
  				for($j=1;$j<=($tong_bg+1)/3; $j++)
  				{	
  			?>
			<tr class="anh">
				<?php
  					for($i=$a;$i<=$tong_bg2; $i++)
  					{
						$n=$i;
						if($i==$b || $i==$c || $i==$d)
							$i=1;
  				?>
				<td align="center"> <img src="images/<?php echo $hinh_anh[$i] ?>" width="300px" height="300px"> </td>
				<?php
						$i=$n;
					}
  				?>
			</tr>
			<tr class="title_ten_mon">
				<?php
  					for($i=$a;$i<=$tong_bg2; $i++)
  					{
						$n=$i;
						if($i==$b || $i==$c || $i==$d)
							$i=1;
  				?>
				<td> <?php echo $tta[$i]?> </td>
				<?php
						$i=$n;
					}
  				?>
			</tr>
			<tr class="title_ten_mon">
				<?php
  					for($i=$a;$i<=$tong_bg2; $i++)
  					{
						$n=$i;
						if($i==$b || $i==$c || $i==$d)
							$i=1;
  				?>
				<td> <?php echo $ttv[$i]?> </td>
				<?php
						$i=$n;
					}
  				?>
			</tr>
			<tr class="title_gia">
				<?php
  					for($i=$a;$i<=$tong_bg2; $i++)
  					{
						$n=$i;
						if($i==$b || $i==$c || $i==$d)
							$i=1;
  				?>
				<td> <?php echo $gia[$i]?> </td>
				<?php
						$i=$n;
					}
  				?>
			</tr>
			<tr>
				<?php
  					for($i=$a;$i<=$tong_bg2; $i++)
  					{
						$n=$i;
						if($i==$b || $i==$c || $i==$d)
							$i=1;
  				?>
				<td> <br>&nbsp; </td>
				<?php
						$i=$n;
					}
  				?>
			</tr>
			
			<?php
					$tong_bg2+=3;
					$a+=3;
				}
  			?>
		</table>
	</div>
	<footer class="footer">
			<div class="grid">
				<div class="grid__row">
					<div class="grid__column-2-4">
						<h3 class="footer__heading">Chăm sóc khách hàng</h3>
						<ul class="footer-list">
							<li class="footer-item">
								<a href="" class="footer-item__link">Giới thiệu</a>
								</li>
							<li class="footer-item">
								<a href="" class="footer-item__link">Tuyển dụng</a>
								</li>
							<li class="footer-item">
								<a href="" class="footer-item__link">Điều khoản</a>
							</li>
						</ul>
					</div>
					<div class="grid__column-2-4">
						<h3 class="footer__heading">Về KIMSUSHI</h3>
						<ul class="footer-list">
							<li class="footer-item">
								<a href="" class="footer-item__link">Trung tâm trợ giúp</a>
							</li>
							<li class="footer-item">
								<a href="" class="footer-item__link">Hướng dẫn mua hàng</a>
							</li>
						</ul>
					</div>
					<div class="grid__column-2-4">
						<h3 class="footer__heading">Theo dõi</h3>
						<ul class="footer-list">
							<li class="footer-item">
								<a href="" class="footer-item__link">
									<i class="footer-item__icon fab fa-facebook"></i>
									Facebook
								</a>
								</li>
							<li class="footer-item">
								<a href="" class="footer-item__link">
									<i class="footer-item__icon fab fa-instagram"></i>
									Instagram
								</a>
								</li>
							<li class="footer-item">
								<a href="" class="footer-item__link">
									<i class="footer-item__icon fab fa-linkedin"></i>
									LinkedIn
								</a>
							</li>
						</ul>
					</div>
					<div class="grid__column-2-4">
						<h3 class="footer__heading">Vào cửa hàng trên ứng dụng</h3>
						<div class="footer__download">
							<img src="ảnh/QR.jpg" alt="Download QR" class="footer__download-qr">
							<div class="footer__download-apps">
								<a href="" class="footer__download-app-link">
									<img src="ảnh/GGPL.jpg" alt="Google play" class="footer__download-app-img">
								</a>
								<a href="" class="footer__download-app-link">
									<img src="ảnh/AS.jpg" alt="App store" class="footer__download-app-img">
								</a>							
							</div>
						</div>
					</div>
				</div>	
			</div>
			<div class="footer__bottom">
				<div class="grid">
					<p class="footer__text">© 2021 - Bản quyền thuộc về KIM SUSHI</p>
				</div>
			</div>	
		</footer>
</body>
</html>