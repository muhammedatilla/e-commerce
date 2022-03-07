<?php 

if(isset($_POST["gonder"])) { // kaydet butonu geldiyse kayıt başarılı oldu
	include_once("include/baglanti.php");
	$sql = "INSERT INTO `want_to_work` (`ID`, `ad`, `soyad`, `telefon`, `mail`, `mesaj`) VALUES (NULL, ?, ?, ?, ?, ?);";
	$dizi = [
		$_POST["ad"],
		$_POST["soyad"],
		$_POST["telefon"],
		$_POST["mail"],
		$_POST["mesaj"]
	];
	$sth = $baglanti->prepare($sql);
	$sonuc = $sth->execute($dizi);
	header("Location:contact.php");
}
?>

<!DOCTYPE html>
<html>

<head>
	<title>İLETİŞİM</title>
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
	<!-- Bootstrap core JavaScript
    ================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<!-- js -->
	<script src="js/bootstrap.js"></script>
	<!-- js -->
</head>

<body>
	<!--header-->
	<?php 
		include_once("include/header.php");
	?>
	<!---->
	<div class="back">
		<h2>İLETİŞİM</h2>
	</div>
	<!---->
	<div class="container">
		<div class="contact">

			<div class=" contact-top-in">
				<h3>Haritadan Göz Atın</h3>
				<div class="map">
					<iframe
						src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1675115.8258740564!2d-98.4671417929578!3d34.91371150021706!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54eab584e432360b%3A0x1c3bb99243deb742!2sUnited+States!5e0!3m2!1sen!2sin!4v1434956093308"
						frameborder="0" style="border:0" allowfullscreen></iframe>

				</div>
			</div>
			<form method="post">
				<div class=" contact-top">
					<h3>BİZİMLE ÇALIŞMAK İSTER MİSİNİZ?</h3>
					<div>
						<span>Adınız</span>
						<input type="text" value="" name="ad">
					</div>
					<div>
						<span>Soyadınız</span>
						<input type="text" value="" name="soyad">
					</div>
					<div>
						<span>Telefon Numaranız</span>
						<input type="text" value="" name="telefon">
					</div>
					<div>
						<span>Email Adresiniz</span>
						<input type="text" value="" name="mail">
					</div>
					<div>
						<span>Mesajınız</span>
						<textarea type="text" value="" name="mesaj"> </textarea>
					</div>
					<input type="submit" value="Gönder"  name="gonder">
				</div>
			</form>
		</div>
	</div>
	<div class="bottom-grid1">

		<div class="fit1">
			<h3>HAPPY SHOPPING</h3>
			<p>Lorem Ipsum sit amet consectuer adipiscing elit
				sed diam nonummy nibh euismod</p>
		</div>
	</div>
	<!---->
	<?php 
		include_once("include/footer.php");
	?>
</body>

</html>