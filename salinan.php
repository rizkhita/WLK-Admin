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
						<p>Registrasi</p>
						<li class="active">
							<a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false">menu</a>
							<ul class="collapse list-unstyled" id="homeSubmenu" >
							<li><a href="">Buat Akun Baru</a></li>	
							<li><a href="">Lihat Data Akun</a></li>	
							<li><a href="">Kotak</a></li>	
							</ul>
						</li>
						<li>
							<a href="">menu2</a>
							<a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false">menu3</a>
							<ul class="collpase list-unstyled" id="pageSubmenu">
							<li><a href="">aa</a></li>	
							<li><a href="">ab</a></li>	
							<li><a href="">ac</a></li>	
							</ul>
						</li>
						<li>
							<a href="#">portfolio</a>
						</li>
						<li>
							<a href="#">contact</a>
						</li>
					</ul>
					<ul class="list-unstyled CTAs">
						<li><a href="" class="article">logout</a></li>

					</ul>
				</nav>

				<!--navbar-->
				<div id="content" class="container" id="responsive">
   				<?php
   				include ('navbar.php');
   				?>

					<!--CONTENT-->
					<div class="line">

					</div>

					<h3>Lorem Ipsum Dolor</h3>
               		<!--end -->
				</div>
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
			header("location: login_pasien.php");
		}
	}
?>

</html>

<?php } else{
header("location: login_pasien.php");	
}?>