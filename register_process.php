<?php
include ("koneksi.php");

header("location: index.php");

$a=$_POST['nama'];
$b=$_POST['alamat'];
$c=$_POST['ttl'];
$c2=$_POST['born'];
$d=$_POST['jk'];
$g=$_POST['tlp'];
$e=$_POST['user'];
$f=$_POST['pass'];
$QUERY="INSERT INTO pasien SET nama='$a',alamat='$b',ttl='$c',born='$c2',jk='$d',no_tlp='$g',username='$e',password='$f'";
			mysql_query($QUERY) or die (error_reporting());
			header("location: index.php");
?>