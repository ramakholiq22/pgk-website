<?php
include"../koneksi.php";
$judul=$_POST['judul_post'];
$isi=$_POST['isi_post'];
$tgl=date("Y-m-d");

$id = $_POST['id'];

$edit="UPDATE tb_post SET judul_post='".$judul."', isi_post='".$isi."', tgl_post='".$tgl."' WHERE id='$id'";
$hasil=mysql_query($edit);

if ($hasil) {
	echo"<script>alert('Data Berhasil Di Update');window.location.href='index.php';</script>";
}else {
	echo"<script>alert('data gagal di update');window.location.href='index.php';</script>";
}
?>