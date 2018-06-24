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
							<a href="index.php">Buat Akun Baru</a>
						</li>
						<li>
							<a href="akun_pasien.php">Lihat Daftar Akun</a>
						</li>
						<li>
							<a href="#">Kotak Saran</a>
						</li>
						<br><br>
					</ul>

					<ul class="list-unstyled CTAs">
						<br><br><br>
						<li><a href="edit.php?page=logout" class="article">Logout</a></li>

					</ul>
				</nav>

				<!--navbar-->
				<div id="content" class="container" id="responsive">
   				<?php
   				include ('navbar.php');
   				?>

					<!--CONTENT-->
					
					<!--<h3>Buat Akun Pasien Baru</h3>
					<form action="register_process.php" method="post">-->


		<div class="line">
		</div>
<?php 
  include ('koneksi.php');
  $id_pas = $_GET['id_pas'];
  $query_mysql = mysql_query("SELECT * FROM pasien WHERE id_pas='$id_pas'")or die(mysql_error());
  while($data = mysql_fetch_array($query_mysql)){
  ?>
 
<table>
<td style="width:70px;"></td>
<h3>Buat Akun Pasien Baru</h3><br>
<form method="post" action="edit_process.php" >
<td>
    <div class="form-group">
      <label >Nama:</label>
      <input  type="hidden"value="<?php echo $id_pas?>" type="text" name="id_pas" class="form-control" style="width:300px;">
      <input value="<?php echo $data['nama']?>" type="text" name="nama" class="form-control" style="width:300px;">
    </div>
    <div class="form-group">
      <label >Alamat:</label>
      <input value="<?php echo $data['alamat']?>" type="text" name="alamat" class="form-control" style="width:300px;">
    </div> 
    <div class="form-group">
      <label >Tempat, tanggal lahir:</label>
      <input value="<?php echo $data['ttl']?>" type="text" name="ttl" class="form-control" style="width:300px;height:50px;">
    </div>
    <div class="form-group">
      <label >Jenis Kelamin:</label>
      <select  name="jk" style="width=300px;" class="form-control">
				<option value="perempuan" <?php if($data['jk']){echo'selected';}?> >Wanita</option>
				<option value="laki-laki" <?php if($data['jk']){echo'selected';}?> >Wanita</option>
	</select>
	</div>
	 <div class="form-group">
      <label >Nomer Telepon:</label>
      <input value="<?php echo $data['no_tlp']?>" type="text" name="tlp" class="form-control" style="width:300px;">
    </div>
  <br>
</td>
<td style="width:70px;"></td>
<td>
    <div class="form-group">
      <label >Username:</label>
      <input  value="<?php echo $data['username']?>"name="user" class="form-control"  type="text" style="width:300px;">
    </div>
    <div class="form-group">
      <label >Password:</label>
      <input value="<?php echo $data['password']?>"name="pass" class="form-control"  type="text" style="width:300px;" >
  	</div>
  	<br>
  		<input  name="simpan" style="width:150px;text-align:center;" type="submit" class="btn btn-primary">
  	</input>
  	<br><br><br><br><br><br><br><br><br><br><br>
</td>
	</form>

	</table>		
			</div>

			
<?php }} else{
header("location: login_pasien.php");	
}?>
		<?php
	if(isset($_GET["page"])){
		$page = $_GET["page"];
		if(	$page=="logout"){
			session_destroy();
		}
	}
?>


			<?php
			include ('js.php');
			?>
		</body>
		
</html>


