<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>

<head>
	<title>I-wear A Ecommerce Category Flat Bootstarp Resposive Website Template | Product :: w3layouts</title>
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
	<!---->
	<div class="back">
		<h2>Produts</h2>
	</div>
	<!---->
	<div class="product">
		<div class="container">
			<div class="col-md-3 product-price">
				<div class="price-grid">
					<div class="of-left">
						<h3 class="cate cate-on">PRICE</h3>
					</div>
					<ul class="dropdown-menu1">
						<li><a href="#">
								<p>
									<label for="amount" class="amount">Range:</label>
									<input type="text" id="amount"
										style="border: 0; color: #ff5d56; font-weight: bold;" />

								</p>

								<div id="slider-range"></div>
							</a></li>

					</ul>
					<a class="go" href="single.php">GO</a>
					<div class="clearfix"> </div>
					<!---->
					<script type="text/javascript" src="js/jquery-ui.min.js"></script>

					<link rel="stylesheet" type="text/css" href="css/jquery-ui.css">

					<script type='text/javascript'>
						//<![CDATA[ 
						$(window).load(function () {
							$("#slider-range").slider({
								range: true,
								min: 0,
								max: 500,
								values: [100, 400],
								slide: function (event, ui) {
									$("#amount").val("$" + ui.values[0] + " - $" + ui.values[1]);
								}
							});
							$("#amount").val("$" + $("#slider-range").slider("values", 0) + " - $" + $("#slider-range").slider(
								"values", 1));

						}); //]]>  
					</script>


					<!---->
				</div>
				<div class=" rsidebar span_1_of_left">
					<div class="of-left">
						<h3 class="cate">CATEGORIES</h3>
					</div>
					<ul class="menu">
						<li class="item1"><a href="#">Men </a>
							<ul class="cute">
								<li class="subitem1"><a href="single.php">Cute Kittens </a></li>
								<li class="subitem2"><a href="single.php">Strange Stuff </a></li>
								<li class="subitem3"><a href="single.php">Automatic Fails </a></li>
							</ul>
						</li>
						<li class="item2"><a href="#">Women </a>
							<ul class="cute">
								<li class="subitem1"><a href="single.php">Cute Kittens </a></li>
								<li class="subitem2"><a href="single.php">Strange Stuff </a></li>
								<li class="subitem3"><a href="single.php">Automatic Fails </a></li>
							</ul>
						</li>
						<li class="item3"><a href="#">Kids</a>
							<ul class="cute">
								<li class="subitem1"><a href="single.php">Cute Kittens </a></li>
								<li class="subitem2"><a href="single.php">Strange Stuff </a></li>
								<li class="subitem3"><a href="single.php">Automatic Fails</a></li>
							</ul>
						</li>
						<li class="item4"><a href="#">Accesories</a>
							<ul class="cute">
								<li class="subitem1"><a href="single.php">Cute Kittens </a></li>
								<li class="subitem2"><a href="single.php">Strange Stuff </a></li>
								<li class="subitem3"><a href="single.php">Automatic Fails</a></li>
							</ul>
						</li>

						<li class="item4"><a href="#">Shoes</a>
							<ul class="cute">
								<li class="subitem1"><a href="product.php">Cute Kittens </a></li>
								<li class="subitem2"><a href="product.php">Strange Stuff </a></li>
								<li class="subitem3"><a href="product.php">Automatic Fails </a></li>
							</ul>
						</li>
					</ul>
				</div>
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
						<a href="single.php" class="shop-now">SHOP NOW</a>
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
							<li><a href="#">design</a></li>
							<li><a href="#">dress</a></li>
							<li><a href="#">design</a></li>
							<li><a href="#">fashion</a></li>
							<li><a href="#">lorem</a></li>
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
					<a href="single.php"><img class="img-responsive" src="images/n7.jpg" alt="">
						<div class="six1">
							<h4>DISCOUNT</h4>
							<p>Up to</p>
							<span>60%</span>
						</div>
					</a>
				</div>
			</div>


			<!---->

			<!---->
			<div class="col-md-9 product-price1">
				<div class="mens-toolbar">
					<p class="showing">Showing 1–9 of 21 results</p>
					<div class="sort">
						<select>
							<option value=""> Sorting By Rate</option>
							<option value="">Sorting By Color </option>
							<option value="">Sorting By Price </option>
						</select>

					</div>

					<div class="clearfix"></div>
				</div>
				<div class="product-right-top">
					<div class="top-product">
						<div class="col-md-4 chain-grid  simpleCart_shelfItem">
							<div class="grid-span-1">
								<a href="single.php"><img class="img-responsive " src="images/n1.jpg" alt=" ">
									<div class="link">
										<ul>
											<li><i class="glyphicon glyphicon-search"> </i></li>

										</ul>
									</div>
								</a>
							</div>
							<div class="grid-chain-bottom ">
								<a href="single.php">Sun Glasses #1</a>
								<div class="star-price">
									<div class="price-at">
										<ul class="star-footer">
											<li><a href="#"><i> </i></a></li>
											<li><a href="#"><i> </i></a></li>
											<li><a href="#"><i> </i></a></li>
											<li><a href="#"><i> </i></a></li>
											<li><a href="#"><i> </i></a></li>
										</ul>
									</div>
									<div class="price-at-bottom ">
										<span class="item_price">$ 75.00</span>
									</div>
									<div class="clearfix"> </div>
								</div>
								<div class="cart-add">
									<a class="add1 item_add" href="#">ADD TO CART <i> </i></a>
									<a class="add2" href="#"><i class="glyphicon glyphicon-heart-empty"> </i></a>
									<div class="clearfix"> </div>
								</div>
							</div>

						</div>
						<div class="col-md-4 chain-grid simpleCart_shelfItem">
							<div class="grid-span-1">
								<a href="single.php"><img class="img-responsive " src="images/n2.jpg" alt=" ">
									<div class="link">
										<ul>
											<li><i class="glyphicon glyphicon-search"> </i></li>

										</ul>
									</div>
								</a>
							</div>
							<div class="grid-chain-bottom ">
								<a href="single.php">Sun Glasses #1</a>
								<div class="star-price">
									<div class="price-at">
										<ul class="star-footer">
											<li><a href="#"><i> </i></a></li>
											<li><a href="#"><i> </i></a></li>
											<li><a href="#"><i> </i></a></li>
											<li><a href="#"><i> </i></a></li>
											<li><a href="#"><i> </i></a></li>
										</ul>
									</div>
									<div class="price-at-bottom ">
										<span class="item_price">$ 75.00</span>
									</div>
									<div class="clearfix"> </div>
								</div>
								<div class="cart-add">
									<a class="add1 item_add" href="#">ADD TO CART <i> </i></a>
									<a class="add2" href="#"><i class="glyphicon glyphicon-heart-empty"> </i></a>
									<div class="clearfix"> </div>
								</div>
							</div>
						</div>
						<div class="col-md-4 chain-grid simpleCart_shelfItem">
							<div class="grid-span-1">
								<a href="single.php"><img class="img-responsive " src="images/n3.jpg" alt=" ">
									<div class="link">
										<ul>
											<li><i class="glyphicon glyphicon-search"> </i></li>

										</ul>
									</div>
								</a>
							</div>
							<div class="grid-chain-bottom ">
								<a href="single.php">Sun Glasses #1</a>
								<div class="star-price">
									<div class="price-at">
										<ul class="star-footer">
											<li><a href="#"><i> </i></a></li>
											<li><a href="#"><i> </i></a></li>
											<li><a href="#"><i> </i></a></li>
											<li><a href="#"><i> </i></a></li>
											<li><a href="#"><i> </i></a></li>
										</ul>
									</div>
									<div class="price-at-bottom ">
										<span class="item_price">$ 75.00</span>
									</div>
									<div class="clearfix"> </div>
								</div>
								<div class="cart-add">
									<a class="add1 item_add" href="#">ADD TO CART <i> </i></a>
									<a class="add2" href="#"><i class="glyphicon glyphicon-heart-empty"> </i></a>
									<div class="clearfix"> </div>
								</div>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="top-product">

						<div class="col-md-4 chain-grid simpleCart_shelfItem">
							<div class="grid-span-1">
								<a href="single.php"><img class="img-responsive " src="images/n4.jpg" alt=" ">
									<div class="link">
										<ul>
											<li><i class="glyphicon glyphicon-search"> </i></li>

										</ul>
									</div><span>NEW</span>
								</a>
							</div>
							<div class="grid-chain-bottom ">
								<a href="single.php">Sun Glasses #1</a>
								<div class="star-price">
									<div class="price-at">
										<ul class="star-footer">
											<li><a href="#"><i> </i></a></li>
											<li><a href="#"><i> </i></a></li>
											<li><a href="#"><i> </i></a></li>
											<li><a href="#"><i> </i></a></li>
											<li><a href="#"><i> </i></a></li>
										</ul>
									</div>
									<div class="price-at-bottom ">
										<span class="item_price">$ 75.00</span>
									</div>
									<div class="clearfix"> </div>
								</div>
								<div class="cart-add">
									<a class="add1 item_add" href="#">ADD TO CART <i> </i></a>
									<a class="add2" href="#"><i class="glyphicon glyphicon-heart-empty"> </i></a>
									<div class="clearfix"> </div>
								</div>
							</div>
						</div>
						<div class="col-md-4 chain-grid simpleCart_shelfItem">

							<div class="grid-span-1">
								<a href="single.php"><img class="img-responsive " src="images/n5.jpg" alt=" ">
									<div class="link">
										<ul>
											<li><i class="glyphicon glyphicon-search"> </i></li>

										</ul>
									</div>
								</a>
							</div>
							<div class="grid-chain-bottom ">
								<a href="single.php">Sun Glasses #1</a>
								<div class="star-price">
									<div class="price-at">
										<ul class="star-footer">
											<li><a href="#"><i> </i></a></li>
											<li><a href="#"><i> </i></a></li>
											<li><a href="#"><i> </i></a></li>
											<li><a href="#"><i> </i></a></li>
											<li><a href="#"><i> </i></a></li>
										</ul>
									</div>
									<div class="price-at-bottom ">
										<span class="item_price">$ 75.00</span>
									</div>
									<div class="clearfix"> </div>
								</div>
								<div class="cart-add">
									<a class="add1 item_add" href="#">ADD TO CART <i> </i></a>
									<a class="add2" href="#"><i class="glyphicon glyphicon-heart-empty"> </i></a>
									<div class="clearfix"> </div>
								</div>
							</div>
						</div>
						<div class="col-md-4 chain-grid simpleCart_shelfItem">
							<div class="grid-span-1">
								<a href="single.php"><img class="img-responsive " src="images/n6.jpg" alt=" ">
									<div class="link">
										<ul>
											<li><i class="glyphicon glyphicon-search"> </i></li>

										</ul>
									</div>
								</a>
							</div>
							<div class="grid-chain-bottom ">
								<a href="single.php">Sun Glasses #1</a>
								<div class="star-price">
									<div class="price-at">
										<ul class="star-footer">
											<li><a href="#"><i> </i></a></li>
											<li><a href="#"><i> </i></a></li>
											<li><a href="#"><i> </i></a></li>
											<li><a href="#"><i> </i></a></li>
											<li><a href="#"><i> </i></a></li>
										</ul>
									</div>
									<div class="price-at-bottom ">
										<span class="item_price">$ 75.00</span>
									</div>
									<div class="clearfix"> </div>
								</div>
								<div class="cart-add">
									<a class="add1 item_add" href="#">ADD TO CART <i> </i></a>
									<a class="add2" href="#"><i class="glyphicon glyphicon-heart-empty"> </i></a>
									<div class="clearfix"> </div>
								</div>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="top-product">

						<div class="col-md-4 chain-grid simpleCart_shelfItem">
							<div class="grid-span-1">
								<a href="single.php"><img class="img-responsive " src="images/n7.jpg" alt=" ">
									<div class="link">
										<ul>
											<li><i class="glyphicon glyphicon-search"> </i></li>

										</ul>
									</div><span>NEW</span>
								</a>
							</div>
							<div class="grid-chain-bottom ">
								<a href="single.php">Sun Glasses #1</a>
								<div class="star-price">
									<div class="price-at">
										<ul class="star-footer">
											<li><a href="#"><i> </i></a></li>
											<li><a href="#"><i> </i></a></li>
											<li><a href="#"><i> </i></a></li>
											<li><a href="#"><i> </i></a></li>
											<li><a href="#"><i> </i></a></li>
										</ul>
									</div>
									<div class="price-at-bottom ">
										<span class="item_price">$ 75.00</span>
									</div>
									<div class="clearfix"> </div>
								</div>
								<div class="cart-add">
									<a class="add1 item_add" href="#">ADD TO CART <i> </i></a>
									<a class="add2" href="#"><i class="glyphicon glyphicon-heart-empty"> </i></a>
									<div class="clearfix"> </div>
								</div>
							</div>
						</div>
						<div class="col-md-4 chain-grid simpleCart_shelfItem">
							<div class="grid-span-1">
								<a href="single.php"><img class="img-responsive " src="images/n8.jpg" alt=" ">
									<div class="link">
										<ul>
											<li><i class="glyphicon glyphicon-search"> </i></li>

										</ul>
									</div>
									<span>NEW</span>
								</a>
							</div>
							<div class="grid-chain-bottom ">
								<a href="single.php">Sun Glasses #1</a>
								<div class="star-price">
									<div class="price-at">
										<ul class="star-footer">
											<li><a href="#"><i> </i></a></li>
											<li><a href="#"><i> </i></a></li>
											<li><a href="#"><i> </i></a></li>
											<li><a href="#"><i> </i></a></li>
											<li><a href="#"><i> </i></a></li>
										</ul>
									</div>
									<div class="price-at-bottom ">
										<span class="item_price">$ 75.00</span>
									</div>
									<div class="clearfix"> </div>
								</div>
								<div class="cart-add">
									<a class="add1 item_add" href="#">ADD TO CART <i> </i></a>
									<a class="add2" href="#"><i class="glyphicon glyphicon-heart-empty"> </i></a>
									<div class="clearfix"> </div>
								</div>
							</div>
						</div>
						<div class="col-md-4 chain-grid simpleCart_shelfItem">
							<div class="grid-span-1">
								<a href="single.php"><img class="img-responsive " src="images/n1.jpg" alt=" ">
									<div class="link">
										<ul>
											<li><i class="glyphicon glyphicon-search"> </i></li>

										</ul>
									</div>
									<span>NEW</span>
								</a>
							</div>
							<div class="grid-chain-bottom ">
								<a href="single.php">Sun Glasses #1</a>
								<div class="star-price">
									<div class="price-at">
										<ul class="star-footer">
											<li><a href="#"><i> </i></a></li>
											<li><a href="#"><i> </i></a></li>
											<li><a href="#"><i> </i></a></li>
											<li><a href="#"><i> </i></a></li>
											<li><a href="#"><i> </i></a></li>
										</ul>
									</div>
									<div class="price-at-bottom ">
										<span class="item_price">$ 75.00</span>
									</div>
									<div class="clearfix"> </div>
								</div>
								<div class="cart-add">
									<a class="add1 item_add" href="#">ADD TO CART <i> </i></a>
									<a class="add2" href="#"><i class="glyphicon glyphicon-heart-empty"> </i></a>
									<div class="clearfix"> </div>
								</div>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<ul class="start">
					<li><a href="#"><i> </i></a></li>
					<li><span>1</span></li>
					<li class="arrow"><a href="#">2</a></li>
					<li class="arrow"><a href="#">3</a></li>


					<li><a href="#"><i class="next"> </i></a></li>
				</ul>
				<div class="clearfix"> </div>
			</div>

			<div class="clearfix"> </div>

			<div class="shipping">
				<div class="col-md-3 col-md1">
					<div class=" phone">

						<div class="num">
							<span>8(802)234-5678</span>
							<p>Monday - Saturday: 8am - 5pm PST</p>
						</div>
						<i class="phone-in"> </i>
						<div class="clearfix"> </div>
					</div>

				</div>
				<div class="col-md-5 col-md2">
					<div class=" phone1">

						<i class="phone-in1"> </i>
						<div class="num1">
							<span>Free Shipping</span>
							<p>on all orders over $99</p>
						</div>
						<a class="learn-in" href="single.php">Learn More</a>
						<div class="clearfix"> </div>
					</div>

				</div>
				<div class="col-md-4 col-md3">
					<div class=" phone2">


						<div class="num2">
							<span>Crazy Sale!</span>
							<p>on selected items</p>
						</div>
						<a class="learn-in1" href="single.php">Learn More</a>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>

		</div>

		<!---->

	</div>
	<div class="bottom-grid1">

		<div class="fit1">
			<h3>HAPPY SHOPPING</h3>
			<p>Lorem Ipsum sit amet consectuer adipiscing elit
				sed diam nonummy nibh euismod</p>
		</div>
	</div>

	<!---->

	<script src="js/simpleCart.min.js"> </script>
	<!---->
	<?php 
		include_once("include/footer.php");
	?>
</body>

</html>