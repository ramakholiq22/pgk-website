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

  <style>
  .image-post{
    background-color: #aaa;
    width: 100%;
  }

  .back{

  width: auto;
  height: auto;
  }
  </style>
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

<!-- pages in content -->
 <div class="back">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <table class="table" style="margin-top: 20px;">
              <?php
                //pages navigasi
                $halaman = 5; //until pages
                $page = isset($_GET["halaman"]) ? (int)$_GET["halaman"]:1;
                $start = ($page>1) ? ($page * $halaman) - $halaman :0;
                $result = mysql_query("SELECT * FROM tb_post");
                $query = mysql_query("SELECT * FROM tb_post LIMIT $start, $halaman");
                $total = mysql_num_rows($result);
                $pages = ceil($total/$halaman);

                //display post from db
                $no = 0;
                while ($data = mysql_fetch_array($query)) {
              ?>

                <tr>
                  <?php
                  $no++;
                  ?>
                  <?php echo '<td>' ?>
                <div class="image-post" style="width: 300px; height: 200px;">
                   <img style="width: 300px; height: 200px;" src="<?php echo"upload/".$data['gbr_post'] ?>">
                 </div> <?php '</td>' ?>
                  <?php echo '<td scope="row">'.$data["judul_post"].'</td>'; ?>
                  <?php echo '<td>'.$data["tgl_post"].'</td>'; ?>
                  <td><a href="baca.php?judul_post=<?php echo $data['judul_post']; ?>" class="btn btn-secondary">
                    <i class="fa fa-angle-double-right"></i> Baca Selengkapnya
                  </a></td>
                </tr>
               <?php } ?>
            </table>
          </div>
        <!-- Navigasi Page -->
        <nav class="ml-4">
          <ul class="pagination">
            <?php for ($i=1; $i <=$pages; $i++) { ?>
              <li class="page-item"><a href="?halaman=<?php echo $i; ?>" class="page-link"><?php echo $i; ?></a></li>
            <?php } ?>
          </ul>
        </nav>
      </div>
    </div>
  </div>

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