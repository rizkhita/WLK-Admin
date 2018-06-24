<?php 
include 'koneksi.php';
$id_admin= $_GET['id_admin'];
mysql_query("DELETE FROM admin WHERE id_admin='$id_admin'")or die(mysql_error());
 
header("location:akun_admin.php?pesan=hapus");
?>