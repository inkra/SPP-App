<!DOCTYPE html>
<html>
<head>
 <title>Cetak Laporan</title>
</head>
<body>
 <style type="text/css">
 body{
 font-family: sans-serif;
 }
 table{
 margin: 20px auto;
 border-collapse: collapse;
 width: 800px;
 }
 table th,
 table td{
 border: 1px solid #3c3c3c;
 padding: 3px 8px;

 }
 a{
 background: blue;
 color: #fff;
 padding: 8px 10px;
 text-decoration: none;
 border-radius: 2px;
 }

 h2 {
     margin:0 150px;
    padding-top: 20px;
 }
 
 h4, p {
     margin:0 150px;
     padding-top: 10px;
 }

 img {
     width: 140px;
     position: absolute;
 }

 .date {
     position: absolute;
     right: 0;
 }
    .tengah{
        text-align: center;
    }
 </style>
<img src="logo.png">
<h2 class="align-center">LAPORAN PEMBAYARAN SPP</h2>
<h4>SMK TELKOM MALANG</h4>
 <p>Jl. Danau Ranau, Sawojajar, Kec. Kedungkandang,<br> Kota Malang, Jawa Timur 65139</p>
 <p>Telepon: (0341) 712500</p>
 <br><br>
 <div class="date">
 <?php 
 echo date('l, d-m-Y');
  ?>
  </div>
  <br>
 <table class="table table-hover my-0">
									<thead>
										<tr>
                                        <th class="d-none d-xl-table-cell">No</th>
                                        <th class="d-none d-xl-table-cell">NISN</th>
											<th class="d-none d-xl-table-cell">Nama Siswa</th>
                                            <th class="d-none d-xl-table-cell">Kelas</th>
											<th class="d-none d-xl-table-cell">Jurusan</th>
											<th class="d-none d-xl-table-cell">Angkatan</th>
											<th class="d-none d-xl-table-cell">Tanggal</th>
                                            <th class="d-none d-xl-table-cell">Bulan</th>
											<th class="d-none d-xl-table-cell">Tahun</th>
                                            <th class="d-none d-xl-table-cell">Jumlah Bayar</th>
                                            <th class="d-none d-xl-table-cell">Keterangan</th>
										</tr>
									</thead>
									<tbody>
                                    <?php
								
                                include "koneksi.php";
                                $qry_histori=mysqli_query($conn,"select * from siswa
                                inner join pembayaran on pembayaran.nisn=siswa.nisn
                                inner join kelas on kelas.id_kelas=siswa.id_kelas ORDER BY bulan_spp ASC");
                                $no=0;
                                while($data_histori=mysqli_fetch_array($qry_histori)){
									if($data_histori['tgl_bayar']!=='0000-00-00'){
                                $no++;?>
								
                                        <tr class="text-xs font-weight-bold">
                                            <td class="align-middle text-left"><?=$no?></td>
                                            <td class="align-middle text-left"><?=$data_histori['nisn']?></td>
                                            <td class="align-middle text-left"><?=$data_histori['nama']?></td>
											<td class="align-middle text-left"><?=$data_histori['nama_kelas']?></td>
                                            <td class="align-middle text-left"><?=$data_histori['jurusan']?></td>
                                            <td class="align-middle text-left"><?=$data_histori['angkatan']?></td>
                                            <td class="align-middle text-left"><?=$data_histori['tgl_bayar']?></td>
                                            <td class="align-middle text-left"><?=$data_histori['bulan_spp']?></td>
                                            <td class="align-middle text-left"><?=$data_histori['tahun_spp']?></td>
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