<?php
  include"../koneksi.php";

  session_start();
  if ($_SESSION['login'] == false) {
    header('location: login.php');
  }
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
            <a href="index.php" class="nav-link active">Papan Kiriman</a>
          </li>
          <li class="nav-item px-2">
            <a href="addpost.php" class="nav-link">Tambah Kiriman</a>
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
          <h1><i class="fa fa-gear"></i> Papan Kiriman</h1>
        </div>
      </div>
    </div>
  </header>

   <!-- ACTIONS -->
  <section id="action" class="py-4 mb-4 bg-light">
    <div class="container">
      <div class="row">
        <div class="col-md-6 ml-auto">
         <!-- <div class="input-group">
            <input type="text" class="form-control" placeholder="Cari">
            <span class="input-group-btn">
              <button class="btn btn-primary">Cari</button>
            </span>
          </div> -->
        </div>
      </div>
    </div>
  </section>

  <!-- buat query -->
  <?php
  $query = mysql_query("SELECT * FROM tb_post");
  ?>
  <!-- POSTS -->
  <section id="posts">
    <div class="container">
      <div class="row">
        <div class="col-md-9">
          <div class="card">
            <div class="card-header">
              <h4>Kiriman Terakhir</h4>
            </div>
            <table class="table table-striped">
              <thead class="thead-inverse">
                <tr>
                  <th>#</th>
                  <th>Judul</th>
                  <th>Waktu Kiriman</th>
                  <th></th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
              <?php
                //pages navigasi
                $halaman = 10; //until pages
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
                  echo '<td scope="row">'.$data['id'].'</td>';
                  echo '<td>'.$data["judul_post"].'</td>';
                  echo '<td>'.$data["tgl_post"].'</td>'; ?>
                  <td><a href="details.php?id=<?php echo $data['id'];?>" class="btn btn-success btn-block">
                    <i class="fa fa-angle-double-right"></i> Details
                  </a></td>
                  <td><a href="delete.php?id=<?php echo $data['id'];?>" class="btn btn-danger btn-block"><i class="fa fa-remove"></i> Hapus Data</a></td>
                </tr>
               <?php } ?>
              </tbody>
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

        <!-- side sum posts -->
        <div class="col-md-3">
          <div class="card text-center bg-primary text-white mb-3">
            <div class="card-body">
              <h3>Kiriman</h3>
              <h1 class="display-4">
                <i class="fa fa-pencil"></i> <?=$no++?>
              </h1>
            </div>
          </div>
        </div>
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

  <!-- ADD POST -->
  <!-- POST MODAL -->
  <div class="modal fade" id="addPostModal">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header bg-primary text-white">
          <h5 class="modal-title">Tambah Postingan</h5>
        </div>
        <div class="modal-body">
          <form method="post" name="posting-form" action="submit.php">
            <div class="form-group">
              <label>Judul</label>
              <input type="text" class="form-control" placeholder="Masukan Judul Postingan" name="judul_post">
            </div>
            <div class="form-group">
              <label for="file">Unggah Gambar</label>
              <input type="file" class="form-control-file">
              <small class="form-text text-muted">Max Ukuran 3 MB</small>
            </div>
            <div class="form-group">
              <label>Isi Postingan</label>
              <textarea class="form-control" name="isi_post"></textarea>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="reset">Batal</button>
          <button class="btn btn-primary" type="submit" name="submit">Simpan</button>
        </div>
      </div>
    </div>
  </div>

  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="https://cdn.ckeditor.com/4.7.1/standard/ckeditor.js"></script>
  <script>
      CKEDITOR.replace( 'isi-post' );
  </script>
</body>
</html>