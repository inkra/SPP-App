<?php 
    include 'koneksi.php';

    $id_petugas = $_POST['id_petugas'];
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $nama_petugas = $_POST['nama_petugas'];
    $level = $_POST['level'];

    $sql = "
        update petugas set id_petugas = '" . $id_petugas . "', username = '" . $username . "', password = '" . $password . "', nama_petugas = '" . $nama_petugas . "', level = '" . $level . "'
        where id_petugas = '" . $id_petugas . "';
    ";

    $result = mysqli_query($conn, $sql);
        if($result){
            echo "<script>alert('Success edit petugas');location.href='petugas.php';</script>";
        }else{
            echo "<script>alert('Failed edit petugas');location.href='petugas.php';</script>";
            // printf('Failed sign up: ' . mysqli_error($conn));
        }
?>