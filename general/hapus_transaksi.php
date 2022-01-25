<?php
    if($_GET['id_pembayaran']){
        include "koneksi.php";
        $qry_hapus=mysqli_query($conn,"delete from pembayaran where id_pembayaran='".$_GET['id_pembayaran']."'");
        if($qry_hapus){
            echo "<script>alert('Sukses Hapus Data Transaksi');location.href='pembayaran.php';</script>";
        } else {
            echo "<script>alert('Gagal hapus Data Transaksi');location.href='pembayaran.php';</script>";
        }
    }
?>