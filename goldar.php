<?php
include('koneksi.php'); // Memasuk-kan skrip Login 
 session_start();
if(isset($_SESSION["nama_admin"])){

?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<title>PAW | Laboratorium Klinik</title>
	
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="style.css">
		<!--Tmbahan css-->
		<style type="text/css">
		
		</style>

		</head>
		<body>
			<div class="wrapper">
				<!--sidebar-->
				<nav id="sidebar">
					<div class="sidebar-header">			
						<img src="img/logo.png">
					</div>
					<ul class="list-unstyled components">
						<p>REGISTRASI @IO</p>
						<li class="active">
							<a href="endokrin.php">Endokrin</a>
						</li>
						<li>
							<a href="goldar.php">Goldar</a>
						</li>
						<li>
							<a href="#">Goldarr</a>
						</li>
						<br><br>
					</ul>

					<ul class="list-unstyled CTAs">
						<br><br><br>
						<li><a href="index.php?page=logout" class="article">Logout</a></li>

					</ul>
				</nav>

				<!--navbar-->
				<div id="content" class="container" id="responsive">
   				<?php
   				include ('navbar.php');
   				?>

					<!--CONTENT-->

 

<table>
<td style="width:70px;"></td>
<h3>Buat Dokumen Hasil Pemeriksaan</h3><br>
<form action="goldar_p.php" method="post">
<td>
	<input type="hidden" name="no">
    <div class="form-group">
      <label >Id Registrasi:</label>
      <input type="text" name="id_pas" class="form-control" style="width:300px;">
    </div>
    <br>
    <div class="form-group">
      <h4>--Pemeriksaan Golongan Darah--</h4>
      <input type="hidden" name="kode_periksa" value="Golongan Darah" class="form-control" style="width:300px;">
    </div>
    <br>
    <div class="form-group">
      <label >Nama Dokter:</label>
      <input type="text" name="dok" class="form-control" style="width:500px;">
    </div>
    <div class="form-group">
      <label >Tgl Periksa:</label>
      <input type="date" name="tgl" class="form-control" style="width:500px;">
    </div>
    <div class="form-group">
      <label >Golongan Darah:</label>
      <input type="text" name="golongan" class="form-control" style="width:500px;">
       
      <!--<select name="st3" placeholder="satuan" style="width=300px;" class="form-control">
				<option value="mg"><h1>perempuan</h1></option>
				<option value="laki-laki"><h1>laki-laki</h1></option>
		</select>-->
	</div>
    <div class="form-group">
      <label >Rhesus:</label>
      <input type="text" name="rhesus" class="form-control" style="width:500px;">
    </div>
  <br>
  <button type="SUBMIT" name="submitte" class="btn btn-primary">OKE</button>
</td>
</form>
	</table>		
			</div>
			


			<?php
			include ('js.php');
			?>
		</body>
		<?php
	if(isset($_GET["page"])){
		$page = $_GET["page"];
		if(	$page=="logout"){
			session_destroy();

		}
	}
?>

</html>

<?php } else{
header("location: login_pasien.php");	
}?>

