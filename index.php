<?php 
	include_once("include/baglanti.php");
	$sql = "SELECT * FROM gozluk";
	$sorgu = $baglanti->prepare($sql);
	$sorgu->execute();
?>


<!DOCTYPE html>
<html>

<head>
	<title>I-wear | Online Gözlük Alışverişi</title>
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="js/jquery.min.js"></script>
	<!-- Custom Theme files -->
	<!--theme-style-->
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<!--//theme-style-->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="I wear Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
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
	<div class="header">

		<?php 
			include_once("include/header.php");
		?>

		<div class="banner">
			<div class="banner-top">
				<h2>THIS IS I-WEAR</h2>
				<p>Goggles or safety glasses are forms of protective eyewear<span>fthat usually enclose or protect the
						area surrounding the eye in order to prevent particulates.</span></p>
			</div>
			<div class="now">
				<a class="morebtn" href="product.php">Keşfedin</a>
				<a class="morebtn at-in" href="single.php">Şimdi Alın</a>
				<div class="clearfix"> </div>
			</div>
		</div>
		<div class="clearfix"> </div>
	</div>
	<!---->
	<!---->
	<div class="sap_tabs">
		<div class="container">
			<label class="line"> </label>
			<h2>En Son Ürünler</h2>
			<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
				<ul class="resp-tabs-list">
					<li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><span>Fashion Gözlükler</span></li>
					<li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><span>Klasik Gözlükler</span></li>
					<li class="resp-tab-item" aria-controls="tab_item-2" role="tab"><span>Güneş Gözlükleri</span></li>
					<div class="clearfix"></div>
				</ul>
				<div class="resp-tabs-container">
					<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
						<div class="tab_img">
							<div class="img-top simpleCart_shelfItem">

								<img src="images/pi2.jpg" class="img-responsive" alt="" />

								<div class="tab_desc">
									<ul class="round-top">
										<li><a href="single.php"><i class="glyphicon glyphicon-search"> </i></a></li>
										<li><a href="#"><i class="glyphicon glyphicon-resize-small"> </i></a></li>
									</ul>

									<div class="agency ">
										<div class="agency-left">
											<h6 class="jean">Fashion Goggles</h6>
											<span class="dollor item_price">$50.00</span>
											<div class="clearfix"> </div>
										</div>
										<div class="agency-right">
											<ul class="social">
												<li><a href="#"><i class="item_add"> </i></a></li>
											</ul>
											<ul class="social-in">
												<li><a href="#"><i> </i></a></li>
												<li><a href="#"><i> </i></a></li>
												<li><a href="#"><i> </i></a></li>
												<li><a href="#"><i> </i></a></li>
												<li><a href="#"><i> </i></a></li>
											</ul>
											<div class="clearfix"> </div>
										</div>
									</div>
								</div>

							</div>
							<div class="img-top simpleCart_shelfItem">

								<img src="images/pi3.jpg" class="img-responsive" alt="" />
								<div class="tab_desc">
									<ul class="round-top">
										<li><a href="single.php"><i class="glyphicon glyphicon-search"> </i></a></li>
										<li><a href="#"><i class="glyphicon glyphicon-resize-small"> </i></a></li>
									</ul>

									<div class="agency ">
										<div class="agency-left">
											<h6 class="jean">Classic Goggles</h6>
											<span class="dollor item_price">$50.00</span>
											<div class="clearfix"> </div>
										</div>
										<div class="agency-right">
											<ul class="social">
												<li><a href="#"><i class="item_add"> </i></a></li>
											</ul>
											<ul class="social-in">
												<li><a href="#"><i> </i></a></li>
												<li><a href="#"><i> </i></a></li>
												<li><a href="#"><i> </i></a></li>
												<li><a href="#"><i> </i></a></li>
												<li><a href="#"><i> </i></a></li>
											</ul>
											<div class="clearfix"> </div>
										</div>
									</div>
								</div>
								<div class="col-in">
									<p>NEW</p>
								</div>
							</div>
							<div class="img-top simpleCart_shelfItem">

								<img src="images/pi4.jpg" class="img-responsive" alt="" />
								<div class="tab_desc">
									<ul class="round-top">
										<li><a href="single.php"><i class="glyphicon glyphicon-search"> </i></a></li>
										<li><a href="#"><i class="glyphicon glyphicon-resize-small"> </i></a></li>
									</ul>

									<div class="agency ">
										<div class="agency-left">
											<h6 class="jean">Sun Goggles</h6>
											<span class="dollor item_price">$50.00</span>
											<div class="clearfix"> </div>
										</div>
										<div class="agency-right">
											<ul class="social">
												<li><a href="#"><i class="item_add"> </i></a></li>
											</ul>
											<ul class="social-in">
												<li><a href="#"><i> </i></a></li>
												<li><a href="#"><i> </i></a></li>
												<li><a href="#"><i> </i></a></li>
												<li><a href="#"><i> </i></a></li>
												<li><a href="#"><i> </i></a></li>
											</ul>
											<div class="clearfix"> </div>
										</div>
									</div>
								</div>
								<div class="col-in col-in-1">
									<p>SALE <span>30%</span></p>
								</div>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
					<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-1">
						<div class="tab_img">
							<div class="img-top simpleCart_shelfItem">

								<img src="images/pi9.jpg" class="img-responsive" alt="" />

								<div class="tab_desc">
									<ul class="round-top">
										<li><a href="single.php"><i class="glyphicon glyphicon-search"> </i></a></li>
										<li><a href="#"><i class="glyphicon glyphicon-resize-small"> </i></a></li>
									</ul>

									<div class="agency ">
										<div class="agency-left">
											<h6 class="jean">Fashion Goggles</h6>
											<span class="dollor item_price">$50.00</span>
											<div class="clearfix"> </div>
										</div>
										<div class="agency-right">
											<ul class="social">
												<li><a href="#"><i class="item_add"> </i></a></li>
												<li><a href="#"><i class="text"> </i></a></li>
											</ul>
											<ul class="social-in">
												<li><a href="#"><i> </i></a></li>
												<li><a href="#"><i> </i></a></li>
												<li><a href="#"><i> </i></a></li>
												<li><a href="#"><i> </i></a></li>
												<li><a href="#"><i> </i></a></li>
											</ul>
											<div class="clearfix"> </div>
										</div>
									</div>
								</div>
							</div>
							<div class="img-top simpleCart_shelfItem">
								<img src="images/pi8.jpg" class="img-responsive" alt="" />
								<div class="tab_desc">
									<ul class="round-top">
										<li><a href="single.php"><i class="glyphicon glyphicon-search"> </i></a></li>
										<li><a href="#"><i class="glyphicon glyphicon-resize-small"> </i></a></li>
									</ul>
									<div class="agency ">
										<div class="agency-left">
											<h6 class="jean">Classic Goggles</h6>
											<span class="dollor item_price">$50.00</span>
											<div class="clearfix"> </div>
										</div>
										<div class="agency-right">
											<ul class="social">
												<li><a href="#"><i class="item_add"> </i></a></li>
												<li><a href="#"><i class="text"> </i></a></li>
											</ul>
											<ul class="social-in">
												<li><a href="#"><i> </i></a></li>
												<li><a href="#"><i> </i></a></li>
												<li><a href="#"><i> </i></a></li>
												<li><a href="#"><i> </i></a></li>
												<li><a href="#"><i> </i></a></li>
											</ul>
											<div class="clearfix"> </div>
										</div>
									</div>
								</div>
								<div class="col-in">
									<p>NEW</p>
								</div>
							</div>
							<div class="img-top simpleCart_shelfItem">
								<img src="images/pi10.jpg" class="img-responsive" alt="" />
								<div class="tab_desc">
									<ul class="round-top">
										<li><a href="single.php"><i class="glyphicon glyphicon-search"> </i></a></li>
										<li><a href="#"><i class="glyphicon glyphicon-resize-small"> </i></a></li>
									</ul>
									<div class="agency ">
										<div class="agency-left">
											<h6 class="jean">Sun Goggles</h6>
											<span class="dollor item_price">$50.00</span>
											<div class="clearfix"> </div>
										</div>
										<div class="agency-right">
											<ul class="social">
												<li><a href="#"><i class="item_add"> </i></a></li>
												<li><a href="#"><i class="text"> </i></a></li>
											</ul>
											<ul class="social-in">
												<li><a href="#"><i> </i></a></li>
												<li><a href="#"><i> </i></a></li>
												<li><a href="#"><i> </i></a></li>
												<li><a href="#"><i> </i></a></li>
												<li><a href="#"><i> </i></a></li>
											</ul>
											<div class="clearfix"> </div>
										</div>
									</div>
								</div>
								<div class="col-in col-in-1">
									<p>SALE <span>30%</span></p>
								</div>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
					<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-2">
						<div class="tab_img">
							<div class="img-top simpleCart_shelfItem">

								<img src="images/pi5.jpg" class="img-responsive" alt="" />

								<div class="tab_desc">
									<ul class="round-top">
										<li><a href="single.php"><i class="glyphicon glyphicon-search"> </i></a></li>
										<li><a href="#"><i class="glyphicon glyphicon-resize-small"> </i></a></li>
									</ul>

									<div class="agency ">
										<div class="agency-left">
											<h6 class="jean">Fashion Goggles</h6>
											<span class="dollor item_price">$50.00</span>
											<div class="clearfix"> </div>
										</div>
										<div class="agency-right">
											<ul class="social">
												<li><a href="#"><i class="item_add"> </i></a></li>
												<li><a href="#"><i class="text"> </i></a></li>
											</ul>
											<ul class="social-in">
												<li><a href="#"><i> </i></a></li>
												<li><a href="#"><i> </i></a></li>
												<li><a href="#"><i> </i></a></li>
												<li><a href="#"><i> </i></a></li>
												<li><a href="#"><i> </i></a></li>
											</ul>
											<div class="clearfix"> </div>
										</div>
									</div>
								</div>
							</div>
							<div class="img-top simpleCart_shelfItem">

								<img src="images/pi6.jpg" class="img-responsive" alt="" />
								<div class="tab_desc">
									<ul class="round-top">
										<li><a href="single.php"><i class="glyphicon glyphicon-search"> </i></a></li>
										<li><a href="#"><i class="glyphicon glyphicon-resize-small"> </i></a></li>
									</ul>
									<div class="agency ">
										<div class="agency-left">
											<h6 class="jean">Classic Goggles</h6>
											<span class="dollor item_price">$50.00</span>
											<div class="clearfix"> </div>
										</div>
										<div class="agency-right">
											<ul class="social">
												<li><a href="#"><i class="item_add"> </i></a></li>
												<li><a href="#"><i class="text"> </i></a></li>
											</ul>
											<ul class="social-in">
												<li><a href="#"><i> </i></a></li>
												<li><a href="#"><i> </i></a></li>
												<li><a href="#"><i> </i></a></li>
												<li><a href="#"><i> </i></a></li>
												<li><a href="#"><i> </i></a></li>
											</ul>
											<div class="clearfix"> </div>
										</div>
									</div>
								</div>
								<div class="col-in">
									<p>NEW</p>
								</div>
							</div>
							<div class="img-top simpleCart_shelfItem">

								<img src="images/pi7.jpg" class="img-responsive" alt="" />
								<div class="tab_desc">
									<ul class="round-top">
										<li><a href="single.php"><i class="glyphicon glyphicon-search"> </i></a></li>
										<li><a href="#"><i class="glyphicon glyphicon-resize-small"> </i></a></li>
									</ul>

									<div class="agency ">
										<div class="agency-left">
											<h6 class="jean">Sun Goggles</h6>
											<span class="dollor item_price">$50.00</span>
											<div class="clearfix"> </div>
										</div>
										<div class="agency-right">
											<ul class="social">
												<li><a href="#"><i class="item_add"> </i></a></li>
												<li><a href="#"><i class="text"> </i></a></li>
											</ul>
											<ul class="social-in">
												<li><a href="#"><i> </i></a></li>
												<li><a href="#"><i> </i></a></li>
												<li><a href="#"><i> </i></a></li>
												<li><a href="#"><i> </i></a></li>
												<li><a href="#"><i> </i></a></li>
											</ul>
											<div class="clearfix"> </div>
										</div>
									</div>
								</div>
								<div class="col-in col-in-1">
									<p>SALE <span>30%</span></p>
								</div>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--start-shoes-->
	<div class="goggles">
		<div class="container">
			<h2>En Yeni Gözlükler</h2>
			<div class="product-one">
				<div class="col-md-3 product-left">
					<div class="p-one simpleCart_shelfItem">

					<?php while($satir = $sorgu->fetch(PDO::FETCH_ASSOC)){ ?>
						
						<a href="single.php">
							<img src="<?=$satir['foto']?>" alt="" />
							<div class="mask">
								<span>Quick View</span>
							</div>
						</a>
						<h4><?=$satir['name']?></h4>
						<p><a class="item_add" href="#"><i></i> <span class=" item_price"><?=$satir['price']?></span></a></p>
					<?php } ?>

					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!--end-shoes-->
	<!---->
	<?php 
		include_once("include/footer.php");
	?>
</body>

</html>