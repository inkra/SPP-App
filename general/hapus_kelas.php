<?php
    if($_GET['id_kelas']){
        include "koneksi.php";
        $qry_hapus=mysqli_query($conn,"delete from kelas where id_kelas='".$_GET['id_kelas']."'");
        if($qry_hapus){
            echo "<script>alert('Sukses Hapus Kelas');location.href='kelas.php';</script>";
        } else {
            echo "<script>alert('Gagal hapus Kelas');location.href='kelas.php';</script>";
        }
    }
?>