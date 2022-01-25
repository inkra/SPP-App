<?php 
    include 'koneksi.php';

    $id_spp = $_POST['id_spp'];
    $angkatan = $_POST['angkatan'];
    $tahun = $_POST['tahun'];
    $nominal = $_POST['nominal'];

    $sql = "
        update spp set id_spp = '" . $id_spp . "', angkatan = '" . $angkatan . "', tahun = '" . $tahun . "', nominal = '" . $nominal . "'
        where id_spp = '" . $id_spp . "';
    ";

    $result = mysqli_query($conn, $sql);
        if($result){
            echo "<script>alert('Success edit data spp');location.href='spp.php';</script>";
        }else{
            echo "<script>alert('Failed edit data spp');location.href='spp.php';</script>";
            // printf('Failed sign up: ' . mysqli_error($conn));
        }
?>