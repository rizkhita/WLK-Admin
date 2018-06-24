<?php
include ("koneksi.php");

header("location: register_admin.php");

$a=$_POST['nama'];
$b=$_POST['alamat'];
$c=$_POST['ttl'];
$c2=$_POST['born'];
$d=$_POST['jk'];
$g=$_POST['tlp'];
$bagian=$_POST['bagian'];
$e=$_POST['user'];
$f=$_POST['pass'];
$QUERY="INSERT INTO admin SET nama='$a',alamat='$b',ttl='$c',born='$c2',jk='$d',no_tlp='$g',bagian='$bagian',username='$e',password='$f'";
			mysql_query($QUERY) or die (error_reporting());
			header("location: akun_admin.php");
?>