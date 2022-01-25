<?php
include "koneksi.php";
	if($_GET['id_pembayaran']){

		$qry_pembayaran=mysqli_query($conn,"select * from pembayaran join spp on spp.id_spp = pembayaran.id_spp where pembayaran.id_pembayaran = " .$_GET['id_pembayaran'] );
		$data_pembayaran=mysqli_fetch_array($qry_pembayaran);

		$id_pembayaran 	= $_GET['id_pembayaran'];
		$nisn	= $_GET['nisn'];
		
		//tanggal Bayar
		$tgl_bayar 	= date('Y-m-d');
		$jumlah_bayar = $_POST['jumlah_bayar'];


		mysqli_query($conn, "UPDATE pembayaran SET tgl_bayar='$tgl_bayar', jumlah_bayar='".$data_pembayaran['nominal']."' WHERE id_pembayaran='$id_pembayaran'");
		header('location:pembayaran_siswa.php?nisn='.$nisn);
	}
?>
