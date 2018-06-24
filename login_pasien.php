<?php
    session_start();
    error_reporting(0);
    if (isset($_POST["login"])){
		include_once("koneksi.php");
		if (empty($_POST["uname"]) && empty($_POST["passwd"])) {    
           			mysql_close();
	                session_destroy();
	                header("location: login_pasien.php?login=gagal");
        }
        if (isset($_POST["uname"]) and isset($_POST["passwd"])) {
            $uname = $_POST["uname"];
            $passwd = $_POST["passwd"];
			
	            
	            $login_query  = mysql_query("select * from admin where username='$uname' and password='$passwd'");
	            $login_num_rows = mysql_num_rows($login_query);
				
				$login_query2  = mysql_query("select * from manager where username='$uname' and password='$passwd'");
	            $login_num_rows2 = mysql_num_rows($login_query2);
	           
			    if ($login_num_rows > 0){
	                $login_fetch_array  = mysql_fetch_array($login_query);
	                $_SESSION["nama_admin"] = $login_fetch_array["id_admin"];
	                mysql_close();
	                header("location: index.php");
	            }elseif ($login_num_rows2 > 0){
	                $login_fetch_array2  = mysql_fetch_array($login_query2);
	                $_SESSION["nama_manager"]  = $login_fetch_array2["id_manager"];
	                // $_SESSION["nama"] = $login_fetch_array2["nama"];
	                mysql_close();
	                header("location: as_manager.php");
	            }else {
	                mysql_close();
	                session_destroy();
	                header("location: login_pasien.php?login=gagal");
	            }          
      }else{
		  mysql_close();
	                session_destroy();
	                header("location: login_pasien.php?login=gagal");
	  }
	}else{
?>
 
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<title>Pengolahan data Laboratorium</title>
	
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="style.css">
		<!--Tmbahan css-->
		<style type="text/css">
		#tengah{
			position: center;
			margin: auto;
			width: 300px;
			
		}
		</style>

		</head>
		<body>
			<div class="wrapper">
				<!--navbar-->
				<br><br>
				<div class="container">

   				    <nav class="navbar navbar-inverse">
                    <div class="container-fluid">

                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav navbar-right">
                      		<h3>Halaman Administrator</h3>
                            </ul>
                        </div>
                    </div>
                </nav>

					<!--CONTENT LOGIN-->
					<div class="line">

					</div>
					<br><br>

<div id="tengah">
  <h4>Silahkan Log In</h4><br>
  <form action="login_pasien.php" method="post">
    <div class="form-group">
      <label >Username:</label>
      <input  name="uname" class="form-control" placeholder="masukan username anda..." type="text" >
    </div>
    <div class="form-group">
      <label >Password:</label>
      <input  name="passwd" class="form-control" placeholder="masukan password anda..." type="password" >
  	</div>
  <button type="submit" name="login" id="submit" value="LOGIN" class="btn btn-primary">Submit</button>
  </form>
  <br>
<?php
						if (isset($_GET["login"])){
							if ($_GET["login"] == 'gagal'){
								echo "<p id='gagal'>Login Gagal, Periksa Kembali Username dan Password Anda </p>";
							}
						}
					?>
</div>
</div>
 

               		<!--end -->
				</div>
			</div>

			<?php
			include ('js.php');
			?>
		</body>

</html>
<?php
    }


?>