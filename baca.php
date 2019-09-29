<?php 
include"koneksi.php";
?>

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

<?php
  $judul_post=$_GET['judul_post'];
  $select="SELECT * FROM tb_post WHERE judul_post='$judul_post'";
  $hasil=mysql_query($select);

  while ($data=mysql_fetch_array($hasil)) {
  ?>

  <section>
    <div class="container">
      <div class="row">
        <div class="col-md-9">
          <?php echo '<h1>'.$data['judul_post'].'</h1>' ?>
          <?php echo '<span>'.$data['tgl_post'].'</span>' ?>
          <?php echo '<td>' ?>
            <div class="image-post" style="width: 300px; height: 200px;">
              <img style="width: 300px; height: 200px;" src="<?php echo"upload/".$data['gbr_post'] ?>">
            </div> <?php '</td>' ?>
          <?php echo '<p>'.$data['isi_post'].'</p>' ?>
        </div>
      </div>
    </div>
  </section>
 <?php } ?>

  

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


</body>
</html>