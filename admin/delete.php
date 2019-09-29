<?php
include"../koneksi.php";

$id=$_GET['id'];
$hapus="DELETE FROM tb_post WHERE id='$id'";
$hasil=mysql_query($hapus);

if ($hasil) {
	?>
	<script type="text/javascript">
		alert("Berhasil Menghapus Data");
		document.location="index.php";
	</script>
<?php }else{ ?>
	<script type="text/javascript">
		alert("Gagal Menghapus Data");
		document.location="index.php";
	</script>
<?php } ?>