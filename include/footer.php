<?php 

if(isset($_POST["gonder"])) { // kaydet butonu geldiyse kayıt başarılı oldu
	include_once("include/baglanti.php");
	$sql = "INSERT INTO `hizli_iletisim` (`ID`, `ad`, `mail`, `telefon`, `mesaj`) VALUES (NULL, ?, ?, ?, ?);";
	$dizi = [
		$_POST["ad"],
		$_POST["mail"],
		$_POST["telefon"],
		$_POST["mesaj"]
	];
	$sth = $baglanti->prepare($sql);
	$sonuc = $sth->execute($dizi);
	header("Location:index.php");
}
?>

<div class="footer">
		<div class="container">
			<div class="col-md-4 footer-top">
				<h3>Hızlı İletişim</h3>
				<form method="post">

					<input type="text" placeholder="Adınızı Giriniz" name="ad">

					<input type="text" placeholder="Mailinizi Giriniz" name="mail">

					<input type="text" placeholder="Numaranızı Giriniz" name="telefon">

					<textarea cols="77" rows="6" value="" name="mesaj" placeholder="Mesajınızı Giriniz"></textarea>

					<input type="submit" value="Gönder" name="gonder">

				</form>

			</div>
			<div class="col-md-4 footer-middle">
				<h3>En Çok Beğenilen Ürünler</h3>
				<div class="product-go">
					<div class="grid-product">
						<h6><a href="#">Moda Combo Gözlük</a></h6>
						<div class="rating">
							<span>☆</span>
							<span>☆</span>
							<span>☆</span>
							<span>☆</span>
							<span>☆</span>
						</div>
						<span class=" price-in"><small>$70.00</small> $40.00</span>
					</div>
					<div class="fashion">
						<a href="#"><img class="img-responsive " src="images/f1.jpg" alt="">
							<p>SALE</p>
						</a>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="product-go">
					<div class="grid-product">
						<h6><a href="#">Klasik Combo Gözlük</a></h6>
						<div class="rating">
							<span>☆</span>
							<span>☆</span>
							<span>☆</span>
							<span>☆</span>
							<span>☆</span>
						</div>
						<span class=" price-in"><small>$70.00</small> $40.00</span>
					</div>
					<div class="fashion">
						<a href="#"><img class="img-responsive " src="images/f2.jpg" alt="">
							<p class="new1">NEW</p>
						</a>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="product-go">
					<div class="grid-product">
						<h6><a href="#">Güneş Combo Gözlük</a></h6>
						<div class="rating">
							<span>☆</span>
							<span>☆</span>
							<span>☆</span>
							<span>☆</span>
							<span>☆</span>
						</div>
						<span class=" price-in"><small>$70.00</small> $40.00</span>
					</div>
					<div class="fashion">
						<a href="#"><img class="img-responsive " src="images/f3.jpg" alt="">
							<p class="new1">NEW</p>
						</a>
					</div>
					<div class="clearfix"> </div>
				</div>

			</div>
			<div class="col-md-4 footer-bottom">
				<h3>Bizi Takip Edin</h3>
				<div class="logo-footer">
					<ul class="social">
						<li><a href="#"><i class="fb"> </i> </a></li>
						<li><a href="#"><i class="rss"> </i></a></li>
						<li><a href="#"><i class="twitter"> </i></a></li>
						<li><a href="#"><i class="dribble"> </i></a></li>
						<div class="clearfix"> </div>
					</ul>
					<div class="clearfix"> </div>
				</div>
				<div class="indo">
					<ul class="social-footer ">
						<li><span><i class="glyphicon glyphicon-earphone"> </i>+62 226759804 </span></li>
						<li><a href="mailto:info@example.com"><i class="glyphicon glyphicon-envelope" class="mes">
								</i>info@example.com</a></li>
						<li><a href="#"><i class="glyphicon glyphicon-link" class="mes-in"> </i>http://example.com</a>
						</li>
					</ul>
					<a href="#"><img src="images/pa.png" alt=""></a>
				</div>
			</div>
			<div class="clearfix"> </div>
			<p class="footer-class">Copyrights © 2015 I Wear. All rights reserved | Design by <a
					href="http://w3layouts.com/">W3layouts</a></p>
		</div>
	</div>
	<!---->
	<script type="text/javascript">
		$(document).ready(function () {
			/*
			var defaults = {
			containerID: 'toTop', // fading element id
			containerHoverID: 'toTopHover', // fading element hover id
			scrollSpeed: 1200,
			easingType: 'linear' 
			};
			*/
			$().UItoTop({
				easingType: 'easeOutQuart'
			});
		});
	</script>
	<a href="#to-top" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	<!---->

	<!---->