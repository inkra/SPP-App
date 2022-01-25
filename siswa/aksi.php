<?php
if($_POST){
$nama=$_POST['nama'];

$nisn=$_POST['nisn'];
if(empty($nama)){
echo "<script>alert('Nama tidak boleh kosong');location.href='login_siswa.php';</script>";
} elseif(empty($nisn)){
echo "<script>alert('NISN tidak boleh kosong');location.href='login_siswa.php';</script>";
} else {
include "koneksi.php";
$qry_login=mysqli_query($conn,"select * from siswa where nama = '".$nama."' and nisn = '".$nisn."'");
if(mysqli_num_rows($qry_login)>0){
$dt_login=mysqli_fetch_array($qry_login);
session_start();
$_SESSION['nisn']=$dt_login['nisn'];
$_SESSION['nama']=$dt_login['nama'];
$_SESSION['status_login']=true;
header("location: index_siswa.php");
} else {
echo "<script>alert('Username dan Password tidak benar');location.href='login_siswa.php';</script>";
}
}
}
?>