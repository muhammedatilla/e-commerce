<?php 

if(isset($_POST["giris"])) { // kaydet butonu geldiyse kayıt başarılı oldu
	include_once("include/baglanti.php");
	$sql = "INSERT INTO `regisyer` (`ID`, `email`, `password`) VALUES (NULL, ?, ?);";
	$dizi = [
		$_POST["email"],
		$_POST["password"],
		$_POST["password"]
	];
	$sth = $baglanti->prepare($sql);
	$sonuc = $sth->execute($dizi);
	header("Location:index.php");
}
?>

<!DOCTYPE html>
<html>

<head>
	<title>Giriş Yap</title>
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="js/jquery.min.js"></script>
	<!-- Custom Theme files -->
	<!--theme-style-->
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<!--//theme-style-->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="I-wear Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<!--fonts-->
	<link href='//fonts.googleapis.com/css?family=Lato:100,300,400,700,900' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Montez' rel='stylesheet' type='text/css'>
	<!--//fonts-->
	<!-- start menu -->
	<!--//slider-script-->
	<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
	<script type="text/javascript">
		$(document).ready(function () {
			$('#horizontalTab').easyResponsiveTabs({
				type: 'default', //Types: default, vertical, accordion           
				width: 'auto', //auto or any width like 600px
				fit: true // 100% fit in a container
			});
		});
	</script>
	<!-- Bootstrap core JavaScript
    ================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<!-- js -->
	<script src="js/bootstrap.js"></script>
	<!-- js -->
	<script src="js/simpleCart.min.js"> </script>
	<!-- start menu -->
	<link href="css/memenu.css" rel="stylesheet" type="text/css" media="all" />
	<script type="text/javascript" src="js/memenu.js"></script>
	<script>
		$(document).ready(function () {
			$(".memenu").memenu();
		});
	</script>
	<!-- /start menu -->
</head>

<body>
	<!--header-->
	<?php 
		include_once("include/header.php");
	?>
	<!---->
	<div class="back">
		<h2>Giriş Yap</h2>
	</div>
	<!---->
	<div class="container">
		<div class="account_grid">
			<div class=" login-right">
				<h3>Kayıtlı Müşteriler</h3>
				<p>Bizde bir hesabınız varsa lütfen giriş yapınız.</p>
				<form method="post">
					<div class = "contact-top">
						<span>Email Adresi</span>
						<input type="text" name="mail">
					</div>
					<div>
						<span>Şifre</span>
						<input type="text" name="password">
					</div>
					<a class="forgot" href="#">Şifremi Unuttum?</a>
					<input type="submit" value="GİRİŞ" name="giris">
				</form>
			</div>
			<div class=" login-left">
				<h3>ÜYE OL</h3>
				<p>Mağazamızda bir hesap oluşturarak, ödeme sürecinde daha hızlı ilerleyebilir, 
				    birden fazla teslimat adresi saklayabilir, siparişlerinizi hesabınızda 
					görüntüleyebilir ve takip edebilir ve daha fazlasını yapabilirsiniz.</p>
				<a class="acount-btn" href="register.php">HESAP OLUŞTUR</a>
			</div>

		</div>

	</div>
	<!---->
	<div class="bottom-grid1">

		<div class="fit1">
			<h3>HAPPY SHOPPING</h3>
			<p>Lorem Ipsum sit amet consectuer adipiscing elit
				sed diam nonummy nibh euismod</p>
		</div>
	</div>
	<!---->
	<!---->
	<?php 
		include_once("include/footer.php");
	?>
</body>

</html>