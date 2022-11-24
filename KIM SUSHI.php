<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Kim SuShi</title>
<link rel="stylesheet" type="text/css" href="StyleMain.css">
</head>

<body>
	<div class="container">
		<table  width="100%">
			<tr>
				<td width="250px" align="right">	
				<a href="">
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
					<p><a href="Login.php"><button><img src="ảnh/icon_admin.png" width="20"></button></a></p>
				</td>
			</tr>
		</table>
		<div class="menu">
			<ul>
				<li>
					<a href="#C1">Thực đơn</a>
				</li>
				<li>
					<a href="https://thegoldenspoon.com.vn/">The Golden Spoon</a>
				</li>
				<li>
					<a href="https://gdelivery.vn/?utm_source=SEO&utm_medium=GG&utm_campaign=Deli&utm_content=shop1&utm_term=GG&esource=">Đặt bàn</a>
				</li>
				<li>
					<a href="#C2">Tuyển dụng</a>
				</li>
			</ul>
		</div>
		<br>
		<div class="slider">
			<div class="slides">
				<input type="radio" name="radio-btn" id="radio1">
				<input type="radio" name="radio-btn" id="radio2">
				<input type="radio" name="radio-btn" id="radio3">
				<input type="radio" name="radio-btn" id="radio4">
				<div class="silde first">
					<img src="ảnh/slide1.jpg" >
				</div>
				<div class="silde">
					<img src="ảnh/slide4.jpg" >
				</div>
				<div class="silde">
					<img src="ảnh/slide2.jpg" >
				</div>
				<div class="silde">
					<img src="ảnh/slide5.jpg" >
				</div>
				<div class="navigation-auto">
					<div class="auto-btn1"></div>
					<div class="auto-btn2"></div>
					<div class="auto-btn3"></div>
					<div class="auto-btn4"></div>
				</div>
			</div>
			<div class="navigation-manual">
				<label for="radio1" class="manual-btn"></label>
				<label for="radio2" class="manual-btn"></label>
				<label for="radio3" class="manual-btn"></label>
				<label for="radio4" class="manual-btn"></label>
			</div>
		</div>
		<script type="text/javascript">
			var counter = 1;
			setInterval(function(){
			document.getElementById('radio' + counter).checked=true;
			counter++;
			if(counter>4){
				counter=1;
			}
			},3000);
		</script>
		<br>
		<br>
		<div class="amthuc" align="center">
			<table align="center">
				<tr>
					<td>
						<br>
						<img src="ảnh/amthuc4.jpg" width="400px" height="300px">
					</td>
					<td>
						&emsp;
					</td>
					<td width="450px">
						<div class="amthuc-tieude">
							Ẩm Thực Nhật Bản
						</div>
						<br>
						<div class="amthuc-main">&emsp;&emsp;Kim SuShi – Quán ăn Nhật Bản sẽ đưa bạn ghé đến những quán ăn ở Tokyo đã tạo nên danh tiếng cho nền ẩm thực Nhật Bản. Nếu đã một lần thưởng thức đồ ăn tại Kim SuShi, bạn sẽ không thể quên được hương vị “ngất ngây” của những món sushi, sashimi, cá nướng… khi hòa quyện vào với các loại gia vị đặc trưng Nhật Bản đã trở nên hấp dẫn đến thế nào. Ngoài ra, những món ăn kèm không thể bỏ qua như cơm cuộn, mỳ soba lạnh, súp miso và các loại lẩu cũng sẽ làm bạn ấn tượng thêm về nền ẩm thực Nhật Bản.
						</div>
					</td>
					<td>
						&emsp;
					</td>
					<td>
						<br>
						<img src="ảnh/amthuc3.jpg" width="400px" height="300px">
					</td>
				</tr>
			</table>
		</div>
		<br>
		<br>
		<a name="C1">
			<div class="thucdon" align="center">
			<table width="1200px" align="center" bgcolor="#ffd4aa">
				<tr>
					<td colspan="2" align="center">
						<img src="ảnh/iconMenu.png" width="80px">
						<div class="tieude">
							MENU
						</div>
					</td>
				</tr>
				<tr>
					<td colspan="2">
						&emsp;
					</td>
				</tr>
				<tr align="center">
					<td>
						<a href="SaShiMi.php">
							<div class="zoom">
								<p><img src="ảnh/menu.jpg" width="500px" height="400"></p>
							</div>
						</a>	
						<div class="luachon">
							<a href="SaShiMi.php">Sashimi và Sushi</a>
						</div>
					</td>
					<td>
						<a href="Salad.php">
							<div class="zoom">
								<p><img src="ảnh/menu4.jpg" width="500px" height="400"></p>
							</div>
						</a>
						<div class="luachon">
							<a href="Salad.php">Salad</a>
						</div>
					</td>
				</tr>
				<tr>
					<td colspan="2">
						&emsp;
					</td>
				</tr>
				<tr align="center">
					<td>
						<a href="Com.php">
							<div class="zoom">
								<p><img src="ảnh/menu5.jpg" width="500px" height="400"></p>
							</div>
						</a>	
						<div class="luachon">
							<a href="Com.php">Cơm</a>
						</div>
					</td>
					<td>
						<a href="Mon_chien_nuong.php">
							<div class="zoom">
								<p><img src="ảnh/menu10.jpg" width="500px" height="400"></p>
							</div>
						</a>
						<div class="luachon">
							<a href="Mon_chien_nuong.php">Món Chiên và món Nướng</a>
						</div>
					</td>
				</tr>
				<tr>
					<td colspan="2">
						&emsp;
					</td>
				</tr>
				<tr align="center">
					<td>
						<a href="Lau_my.php">
							<div class="zoom">
								<p><img src="ảnh/menu7.jpg" width="500px" height="400"></p>
							</div>
						</a>
						<div class="luachon">
							<a href="Lau_my.php">Lẩu và Mỳ</a>
						</div>
					</td>
					<td>
						<a href="Do_uong.php">
							<div class="zoom">
								<p><img src="ảnh/menu8.jpg" width="500px" height="400"></p>
							</div>
						</a>
						<div class="luachon">
							<a href="Do_uong.php">Đồ uống</a>
						</div>
					</td>
				</tr>
				<tr>
					<td colspan="2">
						&emsp;
					</td>
				</tr>
			</table>
		</div>
		</a>
		<br><br><br><br>
		<div class="tuyendungbg">
			<table width="1200" align="center" bgcolor="#AF0088">
			<tr>
				<td width="600px" align="center">
					<a><img src="ảnh/thegoldenspoon.png"></a>
				</td>
				<td>
					<h2>The Golden Spoon – Siêu ứng dụng cho tín đồ ẩm thực</h2>
					<div class="golden"><img src="ảnh/icon-dienthoai.jpg">     Tích G-Coin lên đến 15%</div>
					<div class="golden"><img src="ảnh/icon-qua.jpg">     Đổi ngàn quà hấp dẫn</div>
					<div class="golden"><img src="ảnh/icon-check-in.jpg">     Ưu đãi tại 300+ nhà hàng</div>
					<br>
					<a href="https://apps.apple.com/vn/app/the-golden-spoon/id1141620783"><img src="ảnh/logo_appstore.png"width="162px" height="44px"></a>
					<a href="https://play.google.com/store/apps/details?id=vn.com.ggg.gpeople&hl=en"><img src="ảnh/logo_android.png"width="162px" height="44px"></a>
					<a href="https://thegoldenspoon.com.vn/"><img src="ảnh/logo_explore.jpg"width="162px" height="44px"></a>
				</td>
			</tr>
		</table>
		</div>
		<br><br><br><br>
		<a name="C2">
			<table width="100%" align="center" bordercolor="#B1B1B1">
			<tr>
				<td width="600px" align="center">
					<a><img src="ảnh/tuyendung.jpg" width="600px"></a>
				</td>
				<td width="600px" align="center">
					<div class="tuyendung">
						"Tham gia cùng chúng tôi và trở thành một phần của Kim SuShi"
						<br>
						<br>
						Hàng trăm công việc đang chờ bạn
						<br>
						<br>
						<a href="https://ggg.talent.vn/?fbclid=IwAR2FWTeQ5shpQj03W0OYy8thu1imN7CDaATh5_YFMXgFPVgdNAjgmGDZNQA">Ứng tuyển ngay</a>
					</div>
				</td>
			</tr>
		</table>
		</a>
		<br>
		<br>
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
						<h3 class="footer__heading">Về Nam Hòa Shop</h3>
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