<?php
if($_POST){
    $id_kelas=$_POST['id_kelas'];
    $nama_kelas=$_POST['nama_kelas'];
    $jurusan=$_POST['jurusan'];
    $angkatan=$_POST['angkatan'];

if(empty($id_kelas)){
    echo "<script>alert('Id kelas tidak boleh kosong');location.href='kelas.php';</script>";
    } elseif(empty($nama_kelas)){
    echo "<script>alert('nama kelas tidak boleh kosong');location.href='kelas.php';</script>";
    } elseif(empty($jurusan)){
    echo "<script>alert('Jurusan tidak boleh kosong');location.href='kelas.php';</script>";
    } else {
    include "koneksi.php";
    $insert=mysqli_query($conn,"insert into kelas
    (id_kelas, nama_kelas, jurusan, angkatan) 
    value
    ('".$id_kelas."','".$nama_kelas."','".$jurusan."','".$angkatan."')") or
    die(mysqli_error($conn));
if($insert){
    echo "<script>alert('Sukses menambahkan kelas');location.href='kelas.php';</script>";
} else {
    echo "<script>alert('Gagal menambahkan kelas');location.href='kelas.php';</script>";
}
}
}
?>