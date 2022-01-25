<?php
if($_POST){
    $id_spp=$_POST['id_spp'];
    $angkatan=$_POST['angkatan'];
    $tahun=$_POST['tahun'];
    $nominal=$_POST['nominal'];

if(empty($id_spp)){
    echo "<script>alert('Id SPP tidak boleh kosong');location.href='spp.php';</script>";
    } elseif(empty($tahun)){
    echo "<script>alert('Tahun tidak boleh kosong');location.href='spp.php';</script>";
    } elseif(empty($nominal)){
    echo "<script>alert('Nominal tidak boleh kosong');location.href='spp.php';</script>";
    } else {
    include "koneksi.php";
    $insert=mysqli_query($conn,"insert into spp
    (id_spp, angkatan, tahun, nominal) 
    value
    ('".$id_spp."','".$angkatan."','".$tahun."','".$nominal."')") or
    die(mysqli_error($conn));
if($insert){
    echo "<script>alert('Sukses menambahkan data SPP');location.href='spp.php';</script>";
} else {
    echo "<script>alert('Gagal menambahkan data SPP);location.href='spp.php';</script>";
}
}
}
?>