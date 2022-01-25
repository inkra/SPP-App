<!DOCTYPE html>
<html>
<head>
 <title>Cetak Laporan</title>
</head>
<body>
 <style type="text/css">
table{
 margin: 0 auto;
 border-collapse: collapse;
 width: 700px;
 }
 table th,
 table td{
 border: 1px solid #3c3c3c;
 padding: 3px 8px;

 }

 h2 {
     margin:0 150px;
    padding-top: 20px;
 }
 
 h4, .header {
     margin:0 150px;
     padding-top: 10px;
 }

 img {
     width: 140px;
     position: absolute;
 }

 table {
     text-align: left;
 }

p {
    line-height: 20px;
}
 .date {
     position: absolute;
     right: 0;
 }
    .tengah{
        text-align: center;
    }

.biodata {
    margin:0 250px;
    width: 450px;
    
}

.biodata p {
    line-height: 20px;
}
 </style>
<img src="logo.png">
<h2 class="align-center">LAPORAN PEMBAYARAN SPP</h2>
<h4>SMK TELKOM MALANG</h4>
 <p class="header">Jl. Danau Ranau, Sawojajar, Kec. Kedungkandang,<br> Kota Malang, Jawa Timur 65139</p>
 <p class="header">Telepon: (0341) 712500</p>
 <br><hr style="width:100%", size="3", color=black><hr>


 <?php
 include "koneksi.php";
 $sql = 'select * from siswa join kelas on siswa.id_kelas=kelas.id_kelas where siswa.nisn = '  .$_GET['nisn'];
 $result = mysqli_query($conn, $sql);
?>
<?php while( $data_siswa = mysqli_fetch_assoc($result)) { ?>
<p>NISN    : <?=$data_siswa['nisn']?><br>Nama : <?=$data_siswa['nama']?><br>Kelas : <?=$data_siswa['nama_kelas']?><br>Telp : <?=$data_siswa['no_tlp']?><br>Alamat : <?=$data_siswa['alamat']?></p>

<?php
}
?>


<div class="date">
 <?php 
 echo date('l, d-m-Y');
  ?><br>
  </div>
  <br><br>
 <table class="table table-hover my-0">
									<thead>
										<tr>
                                        <th class="d-none d-xl-table-cell">No</th>
											<th class="d-none d-xl-table-cell">Tanggal</th>
                                            <th class="d-none d-xl-table-cell">Bulan</th>
											<th class="d-none d-xl-table-cell">Tahun</th>
                                            <th class="d-none d-xl-table-cell">Nominal</th>
                                            <th class="d-none d-xl-table-cell">Jumlah Bayar</th>
                                            <th class="d-none d-xl-table-cell">Keterangan</th>
										</tr>
									</thead>
									<tbody>
                                    <?php
								
                                include "koneksi.php";
                                $qry_histori=mysqli_query($conn,"select * from pembayaran
                                inner join spp on spp.id_spp=pembayaran.id_spp ORDER BY bulan_spp ASC");
                                $no=0;
                                while($data_histori=mysqli_fetch_array($qry_histori)){
									if($data_histori['tgl_bayar']!=='0000-00-00'){
                                $no++;?>
								
                                        <tr class="text-xs font-weight-bold">
                                            <td class="align-middle text-left"><?=$no?></td>
                                            <td class="align-middle text-left"><?=$data_histori['tgl_bayar']?></td>
                                            <td class="align-middle text-left"><?=$data_histori['bulan_spp']?></td>
											<td class="align-middle text-left"><?=$data_histori['tahun_spp']?></td>
                                            <td class="align-middle text-left"><?=$data_histori['nominal']?></td>
                                            <td class="align-middle text-left"><?=$data_histori['jumlah_bayar']?></td>
                                           
                                            <td>
												<?php
													if($data_histori['tgl_bayar']=='0000-00-00'){
														echo '<div class="alert alert-danger" role="alert">Belum Lunas</div>';
													}else{
														echo '<div class="alert alert-success" role="alert">Lunas</div>';
													}
												?>
											</td>
                                        </tr>
                                        <?php
											}
                                        }
                                        ?>
                                    </tbody>
								</table>
    <script>
 window.print();
 </script>
</body>
</html>