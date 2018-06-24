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
						<p>Tinjau Pemeriksaan</p>
						<li class="active">
							<a href="as_manager.php">Endokrin</a>
						</li>
						<li>
							<a href="as_manager2.php">Goldar</a>
						</li>
						<br><br>
					</ul>

					<ul class="list-unstyled CTAs">
						<br><br><br>
						<li><a href="as_manager.php?page=logout" class="article">Logout</a></li>

					</ul>
				</nav>

				<!--navbar-->
				<div id="content" class="container" id="responsive">
   				<?php
   				include ('navbar_manager.php');
   				?>

					<!--CONTENT-->

 

<table>
<form action="as_manager.php" method="post">
    <div class="form-group">
      <label >tangal awal:</label>
      <input  name="tanggal" class="form-control" placeholder="masukan username anda..." type="date" >
    </div>
    <div class="form-group">
      <label >tanggal akhir:</label>
      <input  name="tanggal2" class="form-control" placeholder="masukan password anda..." type="date" >
  	</div>
  <button type="submit" name="look" class="btn btn-primary">LIHAT</button>
  </form>
 <!--  cetak --> 
<!-- <form action="report_view.php" method="post">
    <div class="form-group">
      <label >tangal awal:</label>
      <input  name="tanggal" class="form-control" placeholder="masukan username anda..." type="date" >
    </div>
    <div class="form-group">
      <label >tanggal akhir:</label>
      <input  name="tanggal2" class="form-control" placeholder="masukan password anda..." type="date" >
  	</div>
  	 <button type="submit" name="looks" class="btn btn-primary">Submit</button>
  </form> -->
  
<!-- <form action="searching.php"  method="post" > -->
<!-- <td><label><h4>Id Registrasi :&nbsp;&nbsp;</h4></label></td>
<td><input class="form-control" style="width:300px;"type="text" id="myInput"></td> -->
<!-- </form> -->
</table>

<br>
<table class="table table-bordered" id="myTable" >
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Id Registrasi</th>
      <th scope="col">Jenis Pemeriksaan</th>
      <th scope="col">Tanggal Pemeriksaan</th>
      <th scope="col">Nama Dokter</th>
      <th scope="col">Hormon T3</th>
      <th scope="col">Hormon T4</th>
    <th scope="col">ACTION</th>
    </tr>
  </thead>
  <?php

if(isset($_POST['look'])){

$tanggal=$_POST['tanggal'];
$tanggal2=$_POST['tanggal2'];
    $nomor=0;
    $query_mysql = mysql_query("SELECT * FROM endokrin where tgl BETWEEN '$tanggal' AND '$tanggal2'")or die(mysql_error());
    while($data = mysql_fetch_array($query_mysql)){
    $nomor++;	
 
 $tgl= $data['tgl'];

?>
<tbody>
<tr>
<th scope="row"><?php echo $nomor?></th>
<td><?php echo $data['id_pas']?></td>
<td><?php echo$data['kode_periksa']?></td>
<td><?php echo$data['tgl']?></td>
<td><?php echo$data['dok']?></td>
<td><?php echo$data['T3']?></td>
<td><?php echo$data['T4']?></td>
<td><a href="view2.php?no=<?php echo $no?>"><button>Cetak</button></a>
	<a href="endokrin_e.php?no=<?php echo $no?>"><button>Edit</button></a>
</td>
</tr>
    <?php
}
}
?>
</tbody>
</table>
			</div>
			


			<?php
			include ('js.php');
			?>
		</body>
</html>
	
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
header("location: login_pasien.php");	
}?>




