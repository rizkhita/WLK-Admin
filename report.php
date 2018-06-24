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
						<p>LAPORAN</p>
						<li class="active">
							<a href="as_manager.php">Print Laporan</a>
						</li>
						<li>
							<a href="nyoba.php">Grafik</a>
						</li>
						<li>
							<a href="#"></a>
						</li>
						<br><br>
					</ul>

					<ul class="list-unstyled CTAs">
						<br><br><br>
						<li><a href="report.php?page=logout" class="article">Logout</a></li>

					</ul>
				</nav>

				<!--navbar-->
				<div id="content" class="container" id="responsive">
   				<?php
   				include ('navbar_manager.php');
   				?>

					<!--CONTENT-->

 

<table>
 <!--  cetak --> 
<form action="report_view.php" method="post">
    <div class="form-group">
      <label >tangal awal:</label>
      <input  name="tanggal" class="form-control" placeholder="masukan username anda..." type="date" >
    </div>
    <div class="form-group">
      <label >tanggal akhir:</label>
      <input  name="tanggal2" class="form-control" placeholder="masukan password anda..." type="date" >
  	</div>
  	 <button type="submit" name="looks" class="btn btn-primary">CETAK</button>
  </form>
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




