<?php
if($_POST){
    $id_pembayaran=$_POST['id_pembayaran'];
    $id_petugas=$_POST['id_petugas'];
    $nisn=$_POST['nisn'];
    $bulan_spp=$_POST['bulan_spp'];
    $tahun_spp=$_POST['tahun_spp'];
    $id_spp=$_POST['id_spp'];

if(empty($id_pembayaran)){
    echo "<script>alert('Id pembayaran tidak boleh kosong');location.href='list_kelas.php';</script>";
    } elseif(empty($nisn)){
    echo "<script>alert('nisn tidak boleh kosong');location.href='list_kelas.php';</script>";
    } else {
    include "koneksi.php";
    $insert=mysqli_query($conn,"insert into pembayaran
    (id_pembayaran, id_petugas, nisn, bulan_spp, tahun_spp, id_spp) 
    value
    ('".$id_pembayaran."','".$id_petugas."','".$nisn."','".$bulan_spp."','".$tahun_spp."','".$id_spp."')") or
    die(mysqli_error($conn));
if($insert){
    echo "<script>alert('Sukses menambahkan transaksi');location.href='list_kelas.php';</script>";
} else {
    echo "<script>alert('Gagal menambahkan transaksi');location.href='list_kelas.php';</script>";
}
}
}
?>