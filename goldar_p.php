<?php
	
	include "koneksi.php";
	if(isset($_POST["submitte"])){

		$x=$_POST['no'];		
		$a=$_POST['id_pas'];
		$b=$_POST['kode_periksa'];
		$dok=$_POST['dok'];
		$e=$_POST['tgl'];
			$c=$_POST['golongan'];
			$d=$_POST['rhesus'];
			
			
			$QUERY="INSERT INTO goldar SET no='$x',id_pas='$a',kode_periksa='$b',dok='$dok',tgl='$e',golongan='$c',rhesus='$d'";

		mysql_query($QUERY) or die (error_reporting());
		header("location: goldar_v.php");
	}else{

		echo "<script>alert('id pasien tidak ditemukan'); window.location = 'goldar.php'; </script>";
		
	}

?>
