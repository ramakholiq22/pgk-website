<!DOCTYPE html>
<html>
<head>
	<title>Perkumpulan Gerakan Kebangsaan</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</head>
<body>
	<nav class="navbar navbar-inverse">
  		<div class="container-fluid">
  			<div class="navbar-header">
  				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
  					<span class="icon-bar"></span>
  					<span class="icon-bar"></span>
  					<span class="icon-bar"></span>
  				</button>
  				<a href="index.php"><img src="image/logo-nav.png" style="width: 30px; height: 30px; margin-top: 10px;"></a>
  			</div>

  			<div class="collapse navbar-collapse" id="myNavbar">
  				<ul class="nav navbar-nav navbar-right">
  					<li><a href="index.php" style="color: #ffffff;">Halaman Utama</a></li>
  					<li><a href="post.php" style="color: #ffffff;">Kiriman</a></li>
  					<li><a href="#footer" style="color: #ffffff;">Kontak</a></li>
            <li><a href="admin/login.php" style="color: #ffffff;">Masuk</a></li>
          </ul>
  			</div>
  		</div>
	</nav>

  <!-- <div id="myCarousel" class="carousel slide" data-ride="carousel">
     Indicators 
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
      <li data-target="#myCarousel" data-slide-to="4"></li>
      <li data-target="#myCarousel" data-slide-to="5"></li>
    </ol>

    Wrapper for slides 
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="image/foto1.jpg" alt="Image" style="height: 425px; width: 100%;">
        <div class="carousel-caption">
        </div>      
      </div>

      <div class="item">
        <img src="image/IMG_7514.jpg" alt="Image" style="height: 425px; width: 100%;">
        <div class="carousel-caption">
        </div>      
      </div>

      <div class="item">
        <img src="image/foto2.jpg" alt="Image" style="height: 425px; width: 100%;">
        <div class="carousel-caption">
        </div>      
      </div>

      <div class="item">
        <img src="image/foto3.jpg" alt="Image" style="height: 425px; width: 100%;">
        <div class="carousel-caption">
        </div>      
      </div>

      <div class="item">
        <img src="image/foto4.jpg" alt="Image" style="height: 425px; width: 100%;">
        <div class="carousel-caption">
        </div>      
      </div>

      <div class="item">
        <img src="image/IMG_7794.jpg" alt="Image" style="height: 425px; width: 100%;">
        <div class="carousel-caption">
        </div>      
      </div>
    </div>


   Left and right controls
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div> -->

<!-- pages in content -->
  <?php
      include"content/main-page.php";
  ?>

  <div id="footer">
    <h1>Kontak</h1>
  </div>

  <div class="footer2">
    <h2>SEKRETARIAT</h2>
    <p style="text-align: center; color: #ffffff;">
      Jl. Duren Tiga Raya No.7, Duren Tiga, Pancoran <br> Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12760
      <br>
      <span class="text"><i class="fa fa-phone" style="font-size: 18px;"></i> 082298491121</span>
      <span class="text"><i class="fa fa-instagram" style="font-size: 18px;"></i> @dpppgk </span>
      <span class="text"><i class="fa fa-envelope" style="font-size: 18px;"></i> dpp.pgk@gmial.com</span>
      <br>
    </p>
  </div>

  <!-- Add Google Maps -->
<div id="googleMap" style="height:400px;width:100%;">
  <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3966.0761780105463!2d106.8306657!3d-6.2536939!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f3cc338d7d9f%3A0xbc9aa8492c23d19f!2sJl.+Duren+Tiga+Raya+No.7%2C+Duren+Tiga%2C+Pancoran%2C+Kota+Jakarta+Selatan%2C+Daerah+Khusus+Ibukota+Jakarta+12760%2C+Indonesia!5e0!3m2!1sid!2s!4v1525794035078" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>

</body>
</html>