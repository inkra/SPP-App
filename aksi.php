<?php 
// berfungsi mengaktifkan session
session_start();
 
// berfungsi menghubungkan koneksi ke database
include './general/koneksi.php';
 
// berfungsi menangkap data yang dikirim
$user = $_POST['username'];
$pass = md5($_POST['password']);
 
// berfungsi menyeleksi data user dengan username dan password yang sesuai
$sql = mysqli_query($conn,"SELECT * FROM petugas WHERE username='$user' AND password='$pass'");
//berfungsi menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($sql);

// berfungsi mengecek apakah username dan password ada pada database
if($cek > 0){
	$data = mysqli_fetch_assoc($sql);

	// berfungsi mengecek jika user login sebagai admin
	if($data['level']=="admin"){
		// berfungsi membuat session
		$_SESSION['nama'] =  $data['nama_petugas'];
		$_SESSION['level'] = "admin";
		//berfungsi mengalihkan ke halaman admin
		header("location:index_admin.php");
	// berfungsi mengecek jika user login sebagai moderator
	}else if($data['level']=="petugas"){
		// berfungsi membuat session
		$_SESSION['nama'] = $data['nama_petugas'];
		$_SESSION['level'] = "petugas";
		// berfungsi mengalihkan ke halaman moderator
		header("location:petugas/index_petugas.php");

	}else{
		// berfungsi mengalihkan alihkan ke halaman login kembali
		header("location:index.php?alert=gagal");
	}	
}else{
	header("location:login.php");
}
?>