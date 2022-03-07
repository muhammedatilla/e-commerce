<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>

<head>
	<title>Hesap Oluştur</title>
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
		<h2>Kayıt Ol</h2>
	</div>
	<!---->
	<div class="container">
		<div class="register">
			<h3>KİŞİSEL BİLGİLER</h3>
			<form>


				<div class="mation">
					<div>
						<span>İSİM</span>
						<input type="text">
					</div>
					<div>
						<span>SOYİSİM</span>
						<input type="text">
					</div>
					<div>
						<span>EMAİL ADRESİ</span>
						<input type="text">
					</div>
					<div>
						<span>ŞİFRE</span>
						<input type="text">
					</div>
				</div>
				<input type="submit" value="ÜYE OL">
			</form>


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