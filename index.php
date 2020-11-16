<!DOCTYPE html>
<html lang="sr">
	<head>
	    <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=0">
		<meta name="author" content="Milosminda">
		<title>Shop</title>
		<link href="https://www.milosminda.com" rel="canonical">
        <meta name="robots" content="noindex">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="css/main.css">
		<link rel="icon" type="image/png" href="img/m-m-m.png"/>
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<!-- Main Header -->
		<header class="main-header">
			<!-- Top Bar -->
			<div class="top-bar">
				<!-- Container -->
				<div class="container">
					<a href="tel:+38165555555" class="phone-info">+381 55 55 555</a>
					<a href="register.php" class="login">Registrujte se</a>
					<a href="login.php" class="login">Prijavi se</a>
				</div>
				<!-- Container END-->
			</div>
			<!-- Top Bar END -->
			<!-- Nav Bar -->
			<div class="navbar">
				<!-- Container -->
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navigation" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						</button>
						<h1 class="logo"><a href="index.php"><img src="img/logo.png" alt="Logo" class="img-responsive"></a></h1>
					</div>
					<div class="collapse navbar-collapse" id="navigation">
						<nav>
							<ul class="nav navbar-nav navbar-right">
								<li class="active"><a href="">Naslovna</a></li>
								<li><a href="">Prodavnica</a></li>
								<li><a href="">Blog</a></li>
								<li><a href="">O nama</a></li>
								<li><a href="contact.php">Kontakt</a></li>
							</ul>
						</nav>
					</div>
					<!-- Search Cart Holder -->
					<div class="search-cart-holder">
						<div class="search">
							<input type="text" name="Search" class="form-control">
							<button type="submit" class="btn"></button>
						</div>
						<div class="cart">
							<a href="">
								<img src="img/cart-icon.png" alt="Cart Icon">
								<span class="badge">2</span>
							</a>
						</div>
					</div>
					<!-- Search Cart Holder END -->
				</div>
				<!-- Container END -->
			</div>
			<!-- Nav Bar END -->
		</header>
		<!-- Main Header END -->
		<main>
			<!-- Intro Header -->
			<header class="intro-header">
				<img src="img/background-intro.jpg" alt="Background intro" class="img-responsive">
				<!-- Carousel -->
				<div id="intro-slider" class="carousel slide" data-ride="carousel">
					<!-- Indicators -->
					<ol class="carousel-indicators">
						<li data-target="#intro-slider" data-slide-to="0" class="active"></li>
						<li data-target="#intro-slider" data-slide-to="1"></li>
						<li data-target="#intro-slider" data-slide-to="2"></li>
					</ol>
					<!-- Wrapper for slides -->
					<div class="carousel-inner" role="listbox">
						<div class="item active">
							<img src="img/slide-1.jpg" alt="Slide 1">
						</div>
						<div class="item">
							<img src="img/slide-2.jpg" alt="Slide 2">
						</div>
						<div class="item">
							<img src="img/slide-3.jpg" alt="Slide 3">
						</div>
					</div>
					<!-- Controls -->
					<a class="left carousel-control" href="#intro-slider" role="button" data-slide="prev">
						<span class="arrow-left" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="right carousel-control" href="#intro-slider" role="button" data-slide="next">
						<span class="arrow-right" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
				<!-- Carousel END -->
				<h2 class="frame"><span>Shop</span> kolekcija jesen / zima</h2>
			</header>
			<!-- Intro Header END -->
			<!-- Main Container -->
			<div class="container">
				<!-- Products Section -->
				<section class="products-section">
					<h2 class="products-title">Dobro dosli u nasu prodavnicu</h2>
					<!-- Collections Holder -->
					<div class="collections-holder">
						<div class="row">
							<div class="col-md-6">
								<a href="" class="frame" data-collection="female">
									<img src="img/female-products.jpg" alt="Female Product" class="img-responsive">
									<span>ÏZenska kolekcija</span>
								</a>
							</div>
							<div class="col-md-6">
								<a href="" class="frame" data-collection="male">
									<img src="img/male-products.jpg" alt="Male Product" class="img-responsive">
									<span>MuÏska kolekcija</span>
								</a>
							</div>
						</div>
					</div>
					<!-- Collections Holder END -->
					<!-- Products Holder -->
					<div class="products-holder">
						<!-- Products Categories -->
						<ul class="products-categories list-reset">
							<li class="active"><a href="" data-collection="newCol">Nova kolekcija</a></li>
							<li><a href="" data-collection="popular">Popularno</a></li>
							<li><a href="" data-collection="action">Akcija</a></li>
						</ul>
						<!-- Products Categories END-->
						<div id="mainRow" class="row">
							<script id="template" type="template">
							<div class="col-xs-6 col-md-4 col-lg-3 article-clear">
								<!-- Product -->
								<article class="product">
									<!-- Image Holder -->
									<div class="product-image-holder">
										<a href="detailed.html" data-product="{{imgSrc}}"><img src="img/{{imgSrc}}.jpg" alt="{{title}}" class="img-responsive"></a>
										<!-- Hover List -->
										<ul class="hover-list list-reset">
											<li><a href=""><img src="img/shop-icon.png" alt="Shop Icon"></a></li>
											<li><a href=""><img src="img/view-icon.png" alt="View Icon"></a></li>
											<li><a href=""><img src="img/like-icon.png" alt="Like Icon"></a></li>
										</ul>
										<!-- Hover List END -->
									</div>
									<!-- Image Holder END -->
									<!-- Product Title -->
									<div class="product-title clearfix">
										<h3>{{title}} <span>{{model}}</span></h3>
										<span>{{price}} rsd</span>
									</div>
									<!-- Product Title END -->
									<!-- Color Picker -->
									<div>
										<ul class="color-picker list-reset clearfix">
											<li><a href="" class="purple">Purple</a></li>
											<li><a href="" class="green">Green</a></li>
											<li><a href="" class="dark-gray">Dark gray</a></li>
										</ul>
									</div>
									<!-- Color Picker END -->
								</article>
								<!-- Product END -->
							</div>
							</script>
						</div>
					</div>
					<!-- Products Holder END -->
				</section>
				<!-- Products Section EDN -->
			</div>
			<!-- Main Container END -->
		</main>
		<!-- Main Footer -->
		<footer class="main-footer">
			<!-- Footer Top -->
			<div class="footer-top">
				<div class="container">
					<div class="row">
						<!-- Info -->
						<div class="col-sm-3">
							<h3>Shop</h3>
							<p class="info">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas rem ullam voluptatibus enim omnis consectetur.</p>
							<p>
								<a href="mailto:info@example.com">info@example.com</a><br>
								<a href="tel:+3811223456">+381 12 23 456</a><br>
								Nis, Srbija
							</p>
						</div>
						<!-- Info END -->
						<!-- Users -->
						<div class="col-sm-3 col-md-offset-1 hidden-xs">
							<h4>Korisnici</h4>
							<ul class="list-reset">
								<li><a href="">Moj nalog</a></li>
								<li><a href="">Kako kupiti</a></li>
								<li><a href="">Vodic</a></li>
							</ul>
						</div>
						<!-- Users END -->
						<!-- Tags -->
						<div class="col-sm-6 col-md-5 hidden-xs">
							<h4>Tagovi</h4>
							<ul class="list-reset tags clearfix">
								<li><a href="">Jakne</a></li>
								<li><a href="">Sportska oprema</a></li>
								<li><a href="">Jakne</a></li>
								<li><a href="">Zimska kolekcija</a></li>
								<li><a href="">Haljine</a></li>
								<li><a href="">Sportska oprema</a></li>
								<li><a href="">Jakne</a></li>
								<li><a href="">Sportska oprema</a></li>
							</ul>
						</div>
						<!-- Tags END -->
					</div>
				</div>
				<span class="back-to-top">Back to top</span>
			</div>
			<!-- Footer Top END -->
			<!-- Footer Bottom -->
			<div class="footer-bottom">
				<div class="container clearfix">
					<!-- Soc Net -->
					<ul class="soc-net list-reset">
						<li><a href="https://www.krojacevaskola.com" target="_blank" class="ks">Krojaceva skola</a></li>
						<li><a href="https://www.facebook.com/" target="_blank" class="fb">Facebook</a></li>
						<li><a href="https://twitter.com/" target="_blank" class="tw">Twitter</a></li>
						<li><a href="https://www.instagram.com" target="_blank" class="in">Instagram</a></li>
						<li><a href="https://www.youtube.com" target="_blank" class="yt">Youtube</a></li>
					</ul>
					<!-- Soc Net END -->
					<!-- Footer Nav -->
					<ul class="hidden-xs footer-nav nav">
						<li class="active"><a href="">O nama</a></li>
						<li><a href="">Uslovi koriscenja</a></li>
						<li><a href="">Novosti</a></li>
						<li><a href="contact.php">Kontakt</a></li>
					</ul>
					<!-- Footer Nav END -->
				</div>
			</div>
			<!-- Footer Bottom END -->
		</footer>
		<!-- Main Footer END -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/main.js"></script>
	</body>
</html>