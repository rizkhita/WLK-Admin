<?php
	
	include "koneksi.php";
	if(isset($_POST["submitee"])){

		$x=$_POST['no'];		
		$a=$_POST['id_pas'];
		$b=$_POST['kode_periksa'];
		$dok=$_POST['dok'];
		$e=$_POST['tgl'];
			$c=$_POST['T4'];
			$d=$_POST['T3'];
			
			
			$QUERY="INSERT INTO endokrin SET no='$x',id_pas='$a',kode_periksa='$b',dok='$dok',tgl='$e',T4='$c',T3='$d'";

		mysql_query($QUERY) or die (error_reporting());
		header("location: endokrin_v.php");
	}else{
		echo "<script>alert('id pasien tidak ditemukan'); window.location = 'goldar.php'; </script>";
	
	}

?>