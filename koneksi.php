<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "db_organisasi";
$koneksi = mysql_connect($dbhost, $dbuser, $dbpass);

if ($koneksi) {
	mysql_select_db($dbname) or die("Data Base Tidak Di Temukan");
	//echo "Koneksi Berhasil";
}else{
	//echo "Koneksi Gagal";
}
?>