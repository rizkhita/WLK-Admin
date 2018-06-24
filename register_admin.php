<?php
include('koneksi.php'); // Memasuk-kan skrip Login 
 session_start();
if(isset($_SESSION["nama_manager"])){

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
						
						<p>KELOLA AKUN</p>
						<li>
							<a href="akun_manager.php">Profil</a>
						</li>
						<li>
							<a href="akun_admin.php">Akun Admin</a>
						</li>
						<li>
							<a href="register_admin.php">Tambah Admin</a>
						</li>
						<br><br>
						<br><br>
					</ul>

					<ul class="list-unstyled CTAs">
						<br><br><br>
						<li><a href="register_admin.php?page=logout" class="article">Logout</a></li>

					</ul>
				</nav>

				<!--navbar-->
				<div id="content" class="container" id="responsive">
   				<?php
   				include ('navbar_manager.php');
   				?>

					<!--CONTENT-->
					
					<!--<h3>Buat Akun Pasien Baru</h3>
					<form action="register_process.php" method="post">-->


		<div class="line">
		</div>
 
<table>
<td style="width:70px;"></td>
<h3>Buat Akun Pasien Baru</h3><br>
<form action="registeradmin_process.php" method="post">
<td>
    <div class="form-group">
      <label >Nama:</label>
      <input type="text" name="nama" class="form-control" style="width:300px;">
    </div>
    <div class="form-group">
      <label >Alamat:</label>
      <input type="text" name="alamat" class="form-control" style="width:300px;">
    </div> 
    <div class="form-group">
      <label >Tempat Lahir:</label>
      <input type="text" name="ttl" class="form-control" style="width:300px;height;">
    </div>
    <div class="form-group">
    <label >Tanggal Lahir:</label>
      <input type="date" name="born" class="form-control" style="width:300px;height;">
    </div>
    <div class="form-group">
      <label >Jenis Kelamin:</label>
      <select name="jk" style="width=300px;" class="form-control">
				<option value="perempuan"><h1>perempuan</h1></option>
				<option value="laki-laki"><h1>laki-laki</h1></option>
		</select>
	</div>
	 <div class="form-group">
      <label >Nomer Telepon:</label>
      <input type="text" name="tlp" class="form-control" style="width:300px;">
    </div>
    <div class="form-group">
      <label >Bagian:</label>
      <input type="text" name="bagian" class="form-control" style="width:300px;">
    </div>
  <br>
</td>
<td style="width:70px;"></td>
<td>
    <div class="form-group">
      <label >Username:</label>
      <input  name="user" class="form-control"  type="text" style="width:300px;">
    </div>
    <div class="form-group">
      <label >Password:</label>
      <input  name="pass" class="form-control"  type="text" style="width:300px;" >
  	</div>
  	<br>
  	<button style="width:150px;text-align:center;" type="submit" value="simpan" class="btn btn-primary">
  	SUBMIT
  	</button>
  	<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
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

<!--<tr>
					<td><h7>Nama</h7></td>
					<td>:</td>
					<td><h7><input class="form-control" type="text" name="nama"/>
					</td>			
					<td><h7>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						Username&nbsp;
					</h7></td>
					<td>:&nbsp;</td>
					<td><input class="form-control" type="text" name="user" id="up"/></td>
				</tr>
				
				<tr>
					<br><td><h7>Alamat&nbsp;</h7></td>
					<td>:&nbsp;</td>
					<td><input class="form-control" type="text" name="alamat"/></td>
					<td><h7>
						
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						Password
					</h7></td>
					<td>:&nbsp;&nbsp;</td>
					<td><input class="form-control" type="text" name="pass"/></td>
				</tr>
				
				<tr>
					<br><td><h7>Tempat, tanggal lahir</h7></td>
					<td>:</td>
					<td><input class="form-control" type="text" name="ttl"/></td>
					<td>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<button type="submit" value="simpan" >SIMPAN</button>
					</td>
				</tr>
				<tr></tr>
				<tr>
					<br><td><h7>Jenis kelamin</h7></td>
					<td>:</td>
					<td><select name="jk" style="width=100px;">
						<option value="perempuan"><h7>perempuan</h7></option>
						<option value="laki-laki"><h7>laki-laki</h7></option>
					</select>
					</td>
				</tr>
				<tr></tr>
				<tr>
					<br><td><h7>Nomer Telepon</h7></td>
					<td>:</td>
					<td><input class="form-control" type="text" name="tlp"/></td>
				</tr>
				<tr></tr>-->