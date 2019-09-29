<?php
include"../koneksi.php";

  //membuat variabel berdasarkan form
  $judul = ($_POST['judul_post']);
  $isi = ($_POST['isi_post']);
  $tgl = date('Y-m-d');

  //folder iamges
  $ekstensi_diperbolehkan = array('png','jpg');
  $nama = $_FILES['gbr_post']['name'];
  $x = explode('.', $nama);
  $ekstensi = strtolower(end($x));
  $ukuran = $_FILES['gbr_post']['size'];
  $file_tmp = $_FILES['gbr_post']['tmp_name'];

  if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
        if($ukuran < 5000000){
          move_uploaded_file($file_tmp, '../upload/'.$nama);
          //proses
          $query = mysql_query("INSERT INTO tb_post (judul_post, isi_post, tgl_post, gbr_nama)VALUES('".$judul."','".$isi."','".$tgl."', '".$nama."')");
          if($query){ ?>
            <script language="javascript">
              alert('Berhasil Menambahkan Post');
              document.location="index.php";
            </script>
          <?php }else{ ?>
            <script language="javascript">
              alert('Gagal Menambahkan Post');
              document.location="index.php";
             </script>
          <?php }
        }else{ ?>
          <script type="text/javascript">
            alert('Ukuran Gambar Terlalu Besar');
            document.location="addpost.php";
          </script>
<?php  }
      }else{ ?>
        <script type="text/javascript">
          alert('Format File Tidak Di Perbolehkan');
          document.location="addpost.php";
        </script>
<?php } ?>