
<?php

if(isset($_POST['simpan'])){
include ("koneksi.php");


$id_pas=$_POST['id_pas'];
$a=$_POST['nama'];
$b=$_POST['alamat'];
$c=$_POST['ttl'];
$d=$_POST['jk'];
$g=$_POST['tlp'];
$e=$_POST['user'];
$f=$_POST['pass'];
$update=mysql_query("UPDATE pasien SET nama='$a',alamat='$b',ttl='$c',jk='$d',no_tlp='$g',username='$e',password='$f' WHERE id_pas='$id_pas'") ;
 header("location: akun_pasien.php");
  }  
?>


<?php

if(isset($_POST['endokrin'])){
include ("koneksi.php");

$no=$_POST['no'];
$a=$_POST['id_pas'];
$b=$_POST['kode_periksa'];
$dok=$_POST['dok'];
$c=$_POST['tgl'];
$d=$_POST['T3'];
$e=$_POST['T4'];
$update=mysql_query("UPDATE endokrin SET id_pas='$a',kode_periksa='$b',dok='$dok',tgl='$c',T3='$d',T4='$e' WHERE no='$no'") ;
 header("location: endokrin_v.php");
  }  
?>
<?php

if(isset($_POST['goldar'])){
include ("koneksi.php");

$no=$_POST['no'];
$a=$_POST['id_pas'];
$b=$_POST['kode_periksa'];
$dok=$_POST['dok'];
$c=$_POST['tgl'];
$d=$_POST['golongan'];
$e=$_POST['rhesus'];
$update=mysql_query("UPDATE goldar SET id_pas='$a',kode_periksa='$b',dok='$dok',tgl='$c',golongan='$d',rhesus='$e' WHERE no='$no'") ;
 header("location: goldar_v.php");
  }  
?>

<?php
if(isset($_POST['adminn'])){
include ("koneksi.php");


$id_admin=$_POST['id_admin'];
$a=$_POST['nama'];
$b=$_POST['alamat'];
$c=$_POST['ttl'];
$d=$_POST['jk'];
$g=$_POST['tlp'];
$bagian=$_POST['bagian'];
$e=$_POST['user'];
$f=$_POST['pass'];
$update=mysql_query("UPDATE admin SET nama='$a',alamat='$b',ttl='$c',jk='$d',no_tlp='$g',bagian='$bagian',username='$e',password='$f' WHERE id_admin='$id_admin'") ;
 header("location: akun_admin.php");
  }  
?>

<?php
if(isset($_POST['managern'])){
include ("koneksi.php");


$id_manager=$_POST['id_manager'];
$a=$_POST['nama'];
$b=$_POST['alamat'];
$c=$_POST['ttl'];
$d=$_POST['jk'];
$g=$_POST['tlp'];
$penda=$_POST['penda'];
$e=$_POST['user'];
$f=$_POST['pass'];
$update=mysql_query("UPDATE manager SET nama='$a',alamat='$b',ttl='$c',jk='$d',no_tlp='$g',penda='$penda',username='$e',password='$f' WHERE id_manager='$id_manager'") ;
 header("location: akun_manager.php");
  }  
?>