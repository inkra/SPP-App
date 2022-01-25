<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
	<meta name="author" content="AdminKit">
	<meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="shortcut icon" href="img/icons/icon-48x48.png" />

	<link rel="canonical" href="https://demo-basic.adminkit.io/pages-sign-in.html" />

	<title>Sign In | Aplikasi Pembayaran SPP</title>

	<link href="css/app.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
	<?php
	if(isset($_GET['alert'])){
		if($_GET['alert']=="gagal"){
			echo "<p>Maaf! Username & Password Salah.</p>";
		}else if($_GET['alert']=="belum_login"){
			echo "<p>Anda Harus Login Terlebih Dulu!</p>";
		}else if($_GET['alert']=="logout"){
			echo "<p>Anda Telah Logout!</p>";
		}
	}
	?>

<?php 
											include "koneksi.php";
                                            $sql = 'select * from siswa';
                                            $result = mysqli_query($conn, $sql);
                                        ?>
	
	<main class="d-flex w-100">
		<div class="container d-flex flex-column">
			<div class="row vh-100">
				<div class="col-sm-10 col-md-8 col-lg-5 mx-auto d-table h-100">
					<div class="d-table-cell align-middle">
						<div class="card">
							<div class="card-body">
								<div class="m-sm-4">
								<div class="text-center mt-4">
									<h3>Login Siswa!</h3>
									<p>Please login to your account.</p>
								</div>
								<form action="aksi.php" method="post">
								<div class="mt-4">
									<label for="exampleInputEmail1" class="form-label">Nama Siswa</label>
									<input type="text" class="form-control" name="nama" id="exampleInputEmail1" aria-describedby="emailHelp">
								<div class="mt-4">
									<label for="exampleInputPassword1" class="form-label">NISN Siswa</label>
									<input type="password" class="form-control" name="nisn" id="exampleInputPassword1">
								</div><br>
								<div class="text-center mb-3">
								<button type="submit" class="btn btn-primary">Login</button>
								</div>
								<p class="text-center mt-4">Apakah anda seorang petugas? login <a href="../login.php">disini</a></p>
								</form>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</main>

	<script src="js/app.js"></script>

</body>

</html>