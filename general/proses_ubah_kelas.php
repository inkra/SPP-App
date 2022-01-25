<?php 
    include 'koneksi.php';

    $id_kelas = $_POST['id_kelas'];
    $nama_kelas = $_POST['nama_kelas'];
    $jurusan = $_POST['jurusan'];
    $angkatan = $_POST['angkatan'];

    $sql = "
        update kelas set id_kelas = '" . $id_kelas . "', nama_kelas = '" . $nama_kelas . "', jurusan = '" . $jurusan . "', angkatan = '" . $angkatan . "'
        where id_kelas = '" . $id_kelas . "';
    ";

    $result = mysqli_query($conn, $sql);
        if($result){
            echo "<script>alert('Success edit kelas');location.href='kelas.php';</script>";
        }else{
            echo "<script>alert('Failed edit kelas');location.href='kelas.php';</script>";
            // printf('Failed sign up: ' . mysqli_error($conn));
        }
?>