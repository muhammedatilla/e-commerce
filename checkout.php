<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>

<head>
	<title>I-wear A Ecommerce Category Flat Bootstarp Resposive Website Template | Checkout :: w3layouts</title>
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
		<h2>Checkout</h2>
	</div>
	<!---->
	<div class="product">
		<div class="container">
			<div class="col-md-3 product-price">


				<!---->
				<div class="product-bottom">
					<div class="of-left-in">
						<h3 class="best">BEST SELLERS</h3>
					</div>
					<div class="product-go">
						<div class=" fashion-grid">
							<a href="single.php"><img class="img-responsive " src="images/f1.jpg" alt=""></a>

						</div>
						<div class=" fashion-grid1">
							<h6 class="best2"><a href="single.php">Lorem ipsum dolor sit
									amet consectetuer </a></h6>

							<span class=" price-in1"> $40.00</span>
						</div>

						<div class="clearfix"> </div>
					</div>
					<div class="product-go">
						<div class=" fashion-grid">
							<a href="single.php"><img class="img-responsive " src="images/f2.jpg" alt=""></a>

						</div>
						<div class="fashion-grid1">
							<h6 class="best2"><a href="single.php">Lorem ipsum dolor sit
									amet consectetuer </a></h6>

							<span class=" price-in1"> $40.00</span>
						</div>

						<div class="clearfix"> </div>
					</div>
					<div class="product-go">
						<div class=" fashion-grid">
							<a href="single.php"><img class="img-responsive " src="images/f3.jpg" alt=""></a>

						</div>
						<div class=" fashion-grid1">
							<h6 class="best2"><a href="single.php">Lorem ipsum dolor sit
									amet consectetuer </a></h6>
							<ul class="star-footer">
								<li><a href="#"><i> </i></a></li>
								<li><a href="#"><i> </i></a></li>
								<li><a href="#"><i> </i></a></li>
								<li><a href="#"><i> </i></a></li>
								<li><a href="#"><i> </i></a></li>
							</ul>
							<span class=" price-in1"><small>$70.00</small> $40.00</span>
						</div>

						<div class="clearfix"> </div>
					</div>
				</div>
				<div class=" per1">
					<a href="single.php"><img class="img-responsive" src="images/pi9.jpg" alt="">
						<div class="six1">
							<h4>DISCOUNT</h4>
							<p>Up to</p>
							<span>20%</span>
						</div>
					</a>
				</div>
			</div>
			<!---->
			<div class="col-md-9 product-price1">
				<div class="check-out">

					<div class=" cart-items">
						<h3>My Shopping Bag (2)</h3>
						<script>
							$(document).ready(function (c) {
								$('.close1').on('click', function (c) {
									$('.cart-header').fadeOut('slow', function (c) {
										$('.cart-header').remove();
									});
								});
							});
						</script>
						<script>
							$(document).ready(function (c) {
								$('.close2').on('click', function (c) {
									$('.cart-header1').fadeOut('slow', function (c) {
										$('.cart-header1').remove();
									});
								});
							});
						</script>

						<div class="in-check">
							<ul class="unit">
								<li><span>Item</span></li>
								<li><span>Product Name</span></li>
								<li><span>Unit Price</span></li>
								<li><span>Stock Status</span></li>
								<li> </li>
								<div class="clearfix"> </div>
							</ul>
							<ul class="cart-header">
								<div class="close1"> </div>
								<li class="ring-in"><a href="single.php"><img src="images/f1.jpg"
											class="img-responsive" alt=""></a>
								</li>
								<li><span>Woo Dress</span></li>
								<li><span>$ 60.00</span></li>
								<li><span>In Stock</span></li>
								<li> <a href="single.php" class="add-cart cart-check">ADD TO CART</a></li>
								<div class="clearfix"> </div>
							</ul>
							<ul class=" cart-header1">
								<div class="close2"> </div>
								<li class="ring-in"><a href="single.php"><img src="images/f2.jpg"
											class="img-responsive" alt=""></a>
								</li>
								<li><span>Woo Dress</span></li>
								<li><span>$ 60.00</span></li>
								<li><span>In Stock</span></li>
								<li> <a href="single.php" class="add-cart cart-check">ADD TO CART</a></li>
								<div class="clearfix"> </div>
							</ul>
						</div>
					</div>

				</div>

				<div class=" per2">
					<a href="single.php"><img class="img-responsive" src="images/pi2.jpg" alt="">
						<div class="six3">
							<h4>DISCOUNT</h4>
							<p>Up to</p>
							<span>30%</span>
						</div>
					</a>
				</div>
				<div class=" per3">
					<a href="single.php"><img class="img-responsive" src="images/pi3.jpg" alt="">
						<div class="six3">
							<h4>DISCOUNT</h4>
							<p>Up to</p>
							<span>45%</span>
						</div>
					</a>
				</div>
				<div class=" per4">
					<a href="single.php"><img class="img-responsive" src="images/pi10.jpg" alt="">
						<div class="six4">
							<h4>DISCOUNT</h4>
							<p>Up to</p>
							<span>70%</span>
						</div>
					</a>
				</div>
			</div>
			<div class="clearfix"> </div>
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
	<?php 
		include_once("include/footer.php");
	?>
</body>

</html>