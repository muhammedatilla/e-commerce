<?php 
	include_once("include/baglanti.php");
	$sql = "SELECT * FROM product";
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
	<!-- start menu -->
	<link href="css/memenu.css" rel="stylesheet" type="text/css" media="all" />
	<script type="text/javascript" src="js/memenu.js"></script>
	<script>
		$(document).ready(function () {
			$(".memenu").memenu();
		});
	</script>
	<!-- /start menu -->
	<!--//slider-script-->
	<script src="js/main.js"></script> <!-- Resource jQuery -->
	<script>
		(function (i, s, o, g, r, a, m) {
			i['GoogleAnalyticsObject'] = r;
			i[r] = i[r] || function () {
				(i[r].q = i[r].q || []).push(arguments)
			}, i[r].l = 1 * new Date();
			a = s.createElement(o),
				m = s.getElementsByTagName(o)[0];
			a.async = 1;
			a.src = g;
			m.parentNode.insertBefore(a, m)
		})(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

		ga('create', 'UA-48014931-1', 'codyhouse.co');
		ga('send', 'pageview');

		jQuery(document).ready(function ($) {
			$('.close-carbon-adv').on('click', function () {
				$('#carbonads-container').hide();
			});
		});
	</script>
	<script src="js/simpleCart.min.js"> </script>
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
	<!---->
	<div class="back">
		<h2>Product Details</h2>
	</div>
	<!---->
	<div class="product">
		<div class="container">
			<div class="col-md-3 product-price">
				<!--initiate accordion-->
				<script type="text/javascript">
					$(function () {
						var menu_ul = $('.menu > li > ul'),
							menu_a = $('.menu > li > a');
						menu_ul.hide();
						menu_a.click(function (e) {
							e.preventDefault();
							if (!$(this).hasClass('active')) {
								menu_a.removeClass('active');
								menu_ul.filter(':visible').slideUp('normal');
								$(this).addClass('active').next().stop(true, true).slideDown('normal');
							} else {
								$(this).removeClass('active');
								$(this).next().stop(true, true).slideUp('normal');
							}
						});

					});
				</script>
				<!---->
				<div class="product-middle">

					<div class="fit-top">
						<h6 class="shop-top">LOREM IPSUM</h6>
						<a href="#" class="shop-now">SHOP NOW</a>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="sellers">
					<div class="of-left-in">
						<h3 class="tag">TAGS</h3>
					</div>
					<div class="tags">
						<ul>
							<li><a href="#">design</a></li>
							<li><a href="#">fashion</a></li>
							<li><a href="#">lorem</a></li>
							<li><a href="#">dress</a></li>
							<li><a href="#">fashion</a></li>
							<li><a href="#">dress</a></li>

							<div class="clearfix"> </div>
						</ul>

					</div>

				</div>
				<!---->
				<div class="product-bottom">
					<div class="of-left-in">
						<h3 class="best">BEST SELLERS</h3>
					</div>
					<div class="product-go">
						<div class=" fashion-grid">
							<a href="#"><img class="img-responsive " src="images/f1.jpg" alt=""></a>

						</div>
						<div class=" fashion-grid1">
							<h6 class="best2"><a href="#">Lorem ipsum dolor sit
									amet consectetuer </a></h6>

							<span class=" price-in1"> $40.00</span>
						</div>

						<div class="clearfix"> </div>
					</div>
					<div class="product-go">
						<div class=" fashion-grid">
							<a href="#"><img class="img-responsive " src="images/f2.jpg" alt=""></a>

						</div>
						<div class="fashion-grid1">
							<h6 class="best2"><a href="#">Lorem ipsum dolor sit
									amet consectetuer </a></h6>

							<span class=" price-in1"> $40.00</span>
						</div>

						<div class="clearfix"> </div>
					</div>
					<div class="product-go">
						<div class=" fashion-grid">
							<a href="#"><img class="img-responsive " src="images/f3.jpg" alt=""></a>

						</div>
						<div class=" fashion-grid1">
							<h6 class="best2"><a href="#">Lorem ipsum dolor sit
									amet consectetuer </a></h6>
							<span class=" price-in1"><small>$70.00</small> $40.00</span>
						</div>

						<div class="clearfix"> </div>
					</div>
				</div>
			</div>
			<!---->
			<div class="col-md-9 product-price1">
				<div class="col-md-5 single-top">
					<div class="flexslider">
						<ul class="slides">
							<li data-thumb="images/si.jpg">
								<img src="images/si3.jpeg" />
							</li>
							<li data-thumb="images/s2.jpg">
								<img src="images/si1.jpeg" />
							</li>
							<li data-thumb="images/s3.jpeg">
								<img src="images/si2.jpeg" />
							</li>
							<li data-thumb="images/s1.jpg">
								<img src="images/s12.jpeg" />
							</li>
						</ul>
					</div>
					<!-- FlexSlider -->
					<script defer src="js/jquery.flexslider.js"></script>
					<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />

					<script>
						// Can also be used with $(document).ready()
						$(window).load(function () {
							$('.flexslider').flexslider({
								animation: "slide",
								controlNav: "thumbnails"
							});
						});
					</script>
				</div>
				<div class="col-md-7 single-top-in simpleCart_shelfItem">
					<div class="single-para ">
						<h4>GUCCI</h4>
						<div class="star-on">
							<div class="clearfix"> </div>
						</div>

						<h5 class="item_price">$ 96.00</h5>
						<div class="available">
							<ul>
								<li>Color
									<select>
									<?php while($satir = $sorgu->fetch(PDO::FETCH_ASSOC)){ ?>
										<option><?=$satir['color']?></option>
										<?php } ?>
									</select></li>
									</ul>
									<ul>
								<li class="size-in">Size<select>
									<?php $satir = $sorgu->fetch(PDO::FETCH_ASSOC) ?>
										<option>Medium</option>
										<option>small</option>
										<option>Large</option>
										<option>small</option>
									</select></li>
								<div class="clearfix"> </div>
							</ul>
						</div>
						<ul class="tag-men">
							<li><span>TAG</span>
								<span class="women1">: Women,</span></li>
							<li><span>SKU</span>
								<span class="women1">: CK09</span></li>
						</ul>
						<a href="#" class="add-cart item_add">ADD TO CART</a>

					</div>
				</div>
				<div class="clearfix"> </div>
				<!---->
				<div class="cd-tabs">
					<nav>
						<ul class="cd-tabs-navigation">
							<li><a data-content="fashion" href="#0">Description </a></li>
							<li><a data-content="cinema" href="#0">Addtional Informatioan</a></li>
							<li><a data-content="television" href="#0" class="selected ">Reviews (1)</a></li>

						</ul>
					</nav>
					<ul class="cd-tabs-content">
						<li data-content="fashion">
							<div class="facts">
								<p> <?=$satir['aciklama']?> </p>
								<ul>
									<li>Research</li>
									<li>Design and Development</li>
									<li>Porting and Optimization</li>
									<li>System integration</li>
									<li>Verification, Validation and Testing</li>
									<li>Maintenance and Support</li>
								</ul>
							</div>

						</li>
						<li data-content="cinema">
							<div class="facts1">

								<div class="color">
									<p>Color</p>
									<span>Blue, Black, Red</span>
									<div class="clearfix"></div>
								</div>
								<div class="color">
									<p>Size</p>
									<span>S, M, L, XL</span>
									<div class="clearfix"></div>
								</div>

							</div>

						</li>
						<li data-content="television" class="selected">
							<div class="comments-top-top">
								<div class="top-comment-left">
									<img class="img-responsive" src="images/co.png" alt="">
								</div>
								<div class="top-comment-right">
									<h6><a href="#">Hendri</a> - September 3, 2014</h6>
									<p>Wow nice!</p>
								</div>
								<div class="clearfix"> </div>
								<a class="add-re" href="#">ADD REVIEW</a>
							</div>

						</li>
						<div class="clearfix"></div>
					</ul>
				</div>
				<!---->


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