<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=0">
  <meta name="author" content="Milosminda">
  <title>Shop</title>
  <link href="https://www.milosminda.com" rel="canonical">
  <meta name="robots" content="noindex">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/main.css">
  <link rel="icon" type="image/png" href="img/m-m-m.png" />
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
      <div class="container">
        <a href="#" class="phone-info">+381 55 555 555</a>
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
          <h1 class="logo"><a href="index.php"><img src="img/logo.png" alt="Logo" class="img-responsive"></a></h1>
        </div>
        <div class="collapse navbar-collapse" id="navigation">
          <nav>
            <ul class="nav navbar-nav navbar-right">
              <li class="active"><a href="index.php">Naslovna</a></li>
              <li><a href="#">Prodavnica</a></li>
              <li><a href="#">Blog</a></li>
              <li><a href="#">O nama</a></li>
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
  <div class="bkg-image">
    <img src="img/background-contact-form.jpg" alt="">
  </div>
  <!-- Login -->
  <div class="container">
    <div class="register">
      <div class="row">
        <div class="col-sm-6">
          <h2>Novi kupci</h2>
          <p>Otvaranje naloga pruža mnoge prednosti: ostvarite poklon vaučer za registraciju, specijalne popuste za online kupovinu, rođendanske i novogodišnje popuste, ekskluzivan pristup aktuelnim kolekcijama, akcijama i događajima. Kupujte komfornije, lakše i brže!</p>
        </div>
        <div class="col-sm-6 form-bkg">
          <h2>Kreirajte novi korisnički nalog</h2>
          <form>
            <input class="form-control errorInput" type="text" placeholder="Full Name" required>
            <input class="form-control errorInput" type="email" placeholder="Email Address" required>
            <input class="form-control errorInput" type="password" placeholder="Password" required>
            <input class="form-control errorInput" type="password" placeholder="Confirm Password" required>
            <input class="form-control errorInput" type="tel" placeholder="Phone" required>
            <div class="checkbox">
              <label>
                <input type="checkbox" required> Slažem se sa <a href="#">Uslovima Korišćenja.</a>
              </label>
            </div>
            <button class="btn btn-success btn-block errorBtn" type="submit" name="submit" onclick="wrongAns();">Prijavite se</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- Login END -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>
</body>

</html>