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
            <a href="../index.php" class="nav-link">
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
          <h1><i class="fa fa-pencil"></i> Tambah Kiriman</h1>
        </div>
      </div>
    </div>
  </header>

  <!-- ADD POST -->
  <!-- POST MODAL -->
    <div class="container">
        <form method="post" action="submit1.php" enctype="multipart/form-data">
          <div class="modal-body">
            <div class="form-group">
              <label style="margin-top: 20px;">Judul</label>
              <input type="text" class="form-control" placeholder="Masukan Judul Postingan" name="judul_post">
            </div>

            <div class="form-group">
              <label for="file">Unggah Gambar</label>
              <input type="file" class="form-control-file" name="gbr_post">
              <small class="form-text text-muted">Max Ukuran 3 MB</small>
            </div>

            <div class="form-group">
              <label>Isi Kiriman</label>
              <textarea class="form-control" name="editor1" placeholder="Ketuk Untuk Menambahkan" cols="60" rows="10" name="isi_post"></textarea>
            </div>    
          </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="reset">Batal</button>
            <button class="btn btn-primary" type="submit" name="submit" value="Simpan">Simpan</button>
        </div>
        </form>
        
    </div>

  <footer id="main-footer" class="bg-dark text-white mt-5 p-5">
    <div class="conatiner">
      <div class="row">
        <div class="col">
          <p class="lead text-center">Perkumpulan Gerakan Kebangsaan</p>
        </div>
      </div>
    </div>
  </footer>

  <script type="text/javascript" src="ckeditor/ckeditor.js"></script>
  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="https://cdn.ckeditor.com/4.7.1/standard/ckeditor.js"></script>
  <script>
      CKEDITOR.replace( 'editor1' );
  </script>
</body>
</html>