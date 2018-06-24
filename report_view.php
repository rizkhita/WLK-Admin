<?php ob_start();


?>
<html>
<head>
  <title>Cetak PDF</title>
    
   <style>
   table {border-collapse:collapse; table-layout:fixed;width: 630px;}
   table td {word-wrap:break-word;width: 20%;}
   </style>
</head>
<body>

<p><img style="margin-left:15px;width:100px;height:auto;" src="img/logo.png"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AL MUHTAR CLINICAL LABORATORY</b></p>
<h5 style="text-align:center;">Alamat : Jl. Padjagalan No.10, Banjaran, Bandung, Jawa Barat (40379).<br>Telp/Fax : (022) 5946190. Email : kikirizkhita@gmail.com</h5>

<hr width="100%" color="black" align="center">
<br>
<?php
// Load file koneksi.php
include_once ('koneksi.php');
 ?>
<h2 style="text-align:center;">LAPORAN PEMERIKSAAN</h2>
<br>


<!-- 
    $sql   = "SELECT *  FROM endokrin where....";
            $query = mysql_query(  $sql )  or die(mysql_error());
            $result = mysql_num_rows($query);  -->
 
  <?php

if(isset($_POST['looks'])){
include ("koneksi.php");
$tanggal=$_POST['tanggal'];
$tanggal2=$_POST['tanggal2'];

     $sql   = "SELECT *  FROM endokrin where tgl BETWEEN '$tanggal' AND '$tanggal2'";
            $query = mysql_query(  $sql )  or die(mysql_error());
            $result = mysql_num_rows($query);

            $sql2   = "SELECT *  FROM goldar where tgl BETWEEN '$tanggal' AND '$tanggal2'";
            $query2= mysql_query(  $sql2 )  or die(mysql_error());
            $result2  = mysql_num_rows($query2);

?>

<h4>Berikut merupakan laporan jumlah pemeriksaan laboratorium yang dilakukan dari tanggal <?php echo $tanggal;?> sampai dengan tanggal <?php echo $tanggal2;?></h4>
<br>
<h4>- Jumlah Pemeriksaan Hormon dan  Endokrin :<?php echo $result; ?> x</h4>
<h4>- Jumlah Golongan Darah :<?php echo $result2; ?> x</h4>

    <?php
}

?>


<br><br><br><br>



<br><br><br><br><br><br><br>
<h5 style="text-align:right;margin-right:50px;">Manager&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Penanggung Jawab&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h5>
<h5 style="text-align:right;margin-right:50px;"><img style="width:100px;height:auto;" src="img/logo.png">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img style="width:100px;height:auto;" src="img/logo.png">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h5>
<!-- <img style="margin-right:15px;width:100px;height:auto;" src="img/logo.png"> -->
<h6 style="text-align:right;margin-right:50px;"> Wendi Siswanto ,ST.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dr. Rizhita Sp.PD-KEMD&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h6>
</body>
</html>
<?php

$html = ob_get_contents();
ob_end_clean();

require_once('html2pdf/html2pdf.class.php');
$pdf = new HTML2PDF('P','A4','en');

$pdf->WriteHTML($html);
$pdf->Output('Laporan Jumlah Pemeriksaan.pdf', 'D');
?>

