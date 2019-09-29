<?php
include"../koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Admin Area</title>
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <nav class="navbar navbar-expand-sm navbar-dark bg-dark p-0">
    <div class="container">
      <a href="index.php" class="navbar-brand">Admin</a>
      <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item px-2">
            <a href="index.php" class="nav-link">Papan Kiriman</a>
          </li>
        </ul>

        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a href="logout.php" class="nav-link">
              <i class="fa fa-user-times"></i> Logout
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <header id="main-header" class="py-2 bg-primary text-white">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h1> Details</h1>
        </div>
      </div>
    </div>
  </header>

  <!-- POSTS -->
  <section id="posts">
    <div class="container">
      <div class="card-body">
        <?php
          $id=$_GET['id'];
          $select="SELECT * FROM tb_post WHERE id='$id'";
          $hasil=mysql_query($select);
          while ($data=mysql_fetch_array($hasil)) { ?>

          <form action="detailupdate.php" method="post">
            <div class="form-group">
              <label for="title">Judul</label>
              <input type="text" class="form-control" placeholder="Masukan Judul Baru" name="judul_post" value="<?php echo $data['judul_post'];?>">
            </div>
                
            <div class="form-group">
              <label for="body">Isi Kiriman</label>
              <textarea name="editor1" class="form-control" placeholder="Ketuk Untuk Ubah" cols="60" rows="10" name="isi_post"></textarea>
            </div>
                
            <div class="modal-footer">
              <a href="index.php" class="btn btn-light btn-block">
                <i class="fa fa-arrow-left"></i> Kembali ke Papan Kiriman
              </a>
              <button class="btn btn-success btn-block" type="submit" name="submit" value="Simpan"><i class="fa fa-check"></i> Simpan Perubahan</button>
            </div>
          </form>

        <?php } ?>
            </div>
          </div>
  </section>

  <footer id="main-footer" class="bg-dark text-white mt-5 p-5">
    <div class="conatiner">
      <div class="row">
        <div class="col">
          <p class="lead text-center">Perkumpulan Gerakan Kebangsaan</p>
        </div>
      </div>
    </div>
  </footer>


  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="https://cdn.ckeditor.com/4.7.1/standard/ckeditor.js"></script>
  <script>
      CKEDITOR.replace( 'editor1' );
  </script>
</body>
</html>
