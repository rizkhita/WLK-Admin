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
					</ul>

					<ul class="list-unstyled CTAs">
						<br><br><br>
						<li><a href="akun_admin.php?page=logout" class="article">Logout</a></li>

					</ul>
				</nav>

				<!--navbar-->
				<div id="content" class="container" id="responsive">
   				<?php
   				include ('navbar_manager.php');
   				?>



<table>
<form action="searching.php"  method="post" >
<td><label><h4>Cari Data Pasien :&nbsp;&nbsp;</h4></label></td>
<td><input class="form-control" style="width:300px;"type="text" id="myInput"></td>
</form>
</table>

<br>
<table class="table table-bordered" id="myTable" >
  <thead>
    <tr>
      <th scope="col">Id Admin</th>
      <th scope="col">Nama</th>
      <th scope="col">Alamat</th>
      <th scope="col">Tempat Lahir</th>
      <th scope="col">Tanggal Lahir</th>
      <th scope="col">Jenis Kelamin</th>
      <th scope="col">Nomor Telepon</th>
      <th scope="col">Bagian</th>
      <th scope="col">Username</th>
      <th scope="col">Password</th> 
    <th scope="col">ACTION</th>
    </tr>
  </thead>
  <?php
  $query_mysql = mysql_query("SELECT * FROM admin")or die(mysql_error());
    while($data = mysql_fetch_array($query_mysql)){
  ?>
  <tbody>
    <tr>
<th scope="row"><?php echo $data['id_admin']?></th>
<td><?php echo$data['nama']?></td>
<td><?php echo$data['alamat']?></td>
<td><?php echo$data['ttl']?></td>
<td><?php echo$data['born']?></td>
<td><?php echo$data['jk']?></td>
<td><?php echo$data['no_tlp']?></td>
<td><?php echo$data['bagian']?></td>
<td><?php echo$data['username']?></td>
<td type="hidden" value="<?php echo$data['password']?>">-</td>
</td>
<td>
<a href="hapus_admin.php?id_admin=<?php echo $data['id_admin']; ?>"><button>Hapus</button></a>
<a href="edit_admin.php?id_admin=<?php echo $data['id_admin']; ?>"><button>Edit</button></a>
</td>
    </tr>
    <?php
}
?>
  </tbody>
</table>	

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

<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
<?php } else{
header("location: login_admin.php");	
}?>




