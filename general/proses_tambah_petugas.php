<?php
if($_POST){
    $id_petugas=$_POST['id_petugas'];
    $username=$_POST['username'];
    $password=md5($_POST['password']);
    $nama_petugas=$_POST['nama_petugas'];
    $level=$_POST['level'];

if(empty($id_petugas)){
    echo "<script>alert('Id petugas tidak boleh kosong');location.href='petugas.php';</script>";
    } elseif(empty($nama_petugas)){
    echo "<script>alert('nama petugas tidak boleh kosong');location.href='petugas.php';</script>";
    } elseif(empty($username)){
    echo "<script>alert('Username tidak boleh kosong');location.href='petugas.php';</script>";
    } else {
    include "koneksi.php";
    $insert=mysqli_query($conn,"insert into petugas 
    (id_petugas, username, password, nama_petugas, level) 
    value
    ('".$id_petugas."','".$username."','".$password."','".$nama_petugas."','".$level."')") or
    die(mysqli_error($conn));
if($insert){
    echo "<script>alert('Sukses menambahkan petugas');location.href='petugas.php';</script>";
} else {
    echo "<script>alert('Gagal menambahkan petugas');location.href='petugas.php';</script>";
}
}
}
?>