<?php 
include 'koneksi.php';
$id_pas= $_GET['id_pas'];
mysql_query("DELETE FROM pasien WHERE id_pas='$id_pas'")or die(mysql_error());
 
header("location:akun_pasien.php?pesan=hapus");
?>