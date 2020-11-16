<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=0">
		<meta name="author" content="Milosminda">
		<title>Shop</title
		<link href="https://www.milosminda.com" rel="canonical">
        <meta name="robots" content="noindex">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/main.css">
		<link rel="icon" type="image/png" href="img/m-m-m.png"/>
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body id="contact">
		<!-- Main Header -->
		<header class="main-header">
			<!-- Top Bar -->
			<div class="top-bar">
				<div class="container">
					<a href="#" class="phone-info">+381 12 34 567</a>
					<a href="register.php" class="login">Registrujte se</a>
					<a href="login.php" class="login">Prijavi se</a>
				</div>
			</div>
			<!-- Top Bar END -->
			<!-- Nav Bar -->
			<div class="navbar">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navigation" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						</button>
						<div class="logo"><a href="index.php"><img src="img/logo.png" alt="Logo" class="img-responsive"></a></div>
					</div>
					<div class="collapse navbar-collapse" id="navigation">
						<nav>
							<ul class="nav navbar-nav navbar-right">
								<li><a href="index.php">Naslovna</a></li>
								<li><a href="#">Prodavnica</a></li>
								<li><a href="#">Blog</a></li>
								<li><a href="#">O nama</a></li>
								<li class="active"><a href="contact.php">Kontakt</a></li>
							</ul>
						</nav>
					</div>
					<!-- Search Cart Holder -->
					<div class="search-cart-holder">
						<div class="search">
							<input type="text" name="Search" class="form-control">
							<button type="submit" class="btn"></button>
						</div>
						<a href="#" class="cart"><img src="img/cart-icon.png" alt="Cart Icon">
							<span class="badge">2</span>
						</a>
					</div>
					<!-- Search Cart Holder END -->
				</div>
			</div>
			<!-- Nav Bar END -->
		</header>
		<!-- Main Header END -->
		<main>
			<div class="container white-container">
				<h1>Kontakt</h1>
				<div class="row">
					<div class="col-sm-4">
						<div class="info">
							<h3>Milos Mikic</h3>
							<p class="address">Obrenovićeva 5, 1800 Nis</p>
							<p>Tel:<a href="tel:+3811234567">+381 12 34 567</a></p>
							<p><a href="mailto:noreply@example.com">Info@example.com</a></p>
							<p class="matb">Maticni broj: 209400514</p>
							<p>PIB: 180545454</p>
							<p>Tekuci racun: 160-3658484-62</p>
						</div>
					</div>
					<div class="col-sm-8">
						<div class="map">
							<div class="embed-responsive embed-responsive-16by9">
								<iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d46446.487747962725!2d21.858340037351837!3d43.31623795759475!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4755b0c240c81f65%3A0x56319fe3122ac3cd!2zTmnFoQ!5e0!3m2!1sen!2srs!4v1552584468530" width="600" height="450" allowfullscreen></iframe>
								<div class="see-map">
									<span>Pogledaj mapu</span>
								</div>
							</div>
						</div>
					</div>
				</div>
				<section class="contact">
					<h2>Pisite nam</h2>
					<div class="col-sm-5 col-sm-offset-4">
						<!-- Poruka -->
						<div class="alert alert-success" style="display: none;">
							<strong>Poruka je uspešno prosleđena!</strong> Hvala na interesovanju
						</div>
						<!-- Forma -->
						<form action="_send-email.php" method="post" id="contact-form">
							<div class="form-group">
								<label for="SenderName">Ime i Prezime<span>*</span></label>
								<input type="text" name="SenderName" class="form-control" id="SenderName" required>
							</div>
							<div class="form-group">
								<label for="SenderEmail">E-mail<span>*</span></label>
								<input type="email" name="SenderEmail" class="form-control" id="SenderEmail" required>
							</div>
							<div class="form-group">
								<label for="SenderMessage">Poruka<span>*</span></label>
								<textarea name="SenderMessage" id="SenderMessage" class="form-control" required></textarea>
							</div>
							<button class="btn" type="submit">Pošalji</button>
						</form>
					</div>
				</section>
			</div>
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
								<a href="mailto:contact@info@example.com">info@example.com</a><br>
								<a href="tel:+3811234567">+381 12 34 567</a><br>
								Nis, Srbija
							</p>
						</div>
						<!-- Info END -->
						<!-- Users -->
						<div class="col-sm-3 col-md-offset-1 hidden-xs">
							<h4>Korisnici</h4>
							<ul class="list-reset">
								<li><a href="#">Moj nalog</a></li>
								<li><a href="#">Kako kupiti</a></li>
								<li><a href="#">Vodic</a></li>
							</ul>
						</div>
						<!-- Users END -->
						<!-- Tags -->
						<div class="col-sm-6 col-md-5 hidden-xs">
							<h4>Tagovi</h4>
							<ul class="list-reset tags clearfix">
								<li><a href="#">Jakne</a></li>
								<li><a href="#">Sportska oprema</a></li>
								<li><a href="#">Jakne</a></li>
								<li><a href="#">Zimska kolekcija</a></li>
								<li><a href="#">Haljine</a></li>
								<li><a href="#">Sportska oprema</a></li>
								<li><a href="#">Jakne</a></li>
								<li><a href="#">Sportska oprema</a></li>
							</ul>
						</div>
						<!-- Tags END -->
					</div>
				</div>
			</div>
			<!-- Footer Top END -->
			<!-- Footer Bottom -->
			<div class="footer-bottom">
				<div class="container clearfix">
					<!-- Soc Net -->
					<ul class="soc-net list-reset">
						<li><a href="#" target="_blank" class="fb">Facebook</a></li>
						<li><a href="#" target="_blank" class="tw">Twitter</a></li>
						<li><a href="#" target="_blank" class="in">Instagram</a></li>
						<li><a href="#" target="_blank" class="yt">Youtube</a></li>
					</ul>
					<!-- Soc Net END -->
					<!-- Footer Nav -->
					<ul class="hidden-xs footer-nav nav">
						<li><a href="#">O nama</a></li>
						<li><a href="#">Uslovi koriscenja</a></li>
						<li><a href="#">Novosti</a></li>
						<li class="active"><a href="contact.php">Kontakt</a></li>
					</ul>
					<!-- Footer Nav END -->
				</div>
			</div>
			<!-- Footer Bottom END -->
		</footer>
		<!-- Main Footer END -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="js/jquery.validate.min.js"></script>
		<script src="js/messages_sr_lat.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/contact.js"></script>
	</body>
</html>