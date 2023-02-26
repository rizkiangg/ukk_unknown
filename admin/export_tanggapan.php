<?php
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Data Pengaduan dan Tanggapan.xls")


?>

<center>
    <h3>Laporan Pengaduan Dan Tanggapan <br> UKK RPL </h3>
</center>

<table class="table table-striped">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>TANGGAL</th>
                                <th>NIK</th>
                                <th>JUDUL LAPORAN</th>
                                <th>TANGGAPAN</th>
                                <th>STATUS</th>
                                <th>AKSI</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            include '../config/koneksi.php';
                            $no = 1;
                            $query = mysqli_query($koneksi, "SELECT a.*, b.* FROM tanggapan a inner join pengaduan b ON a.id_pengaduan=b.id_pengaduan ORDER BY tgl_tanggapan DESC");
                            while ($data = mysqli_fetch_array($query)) { ?>


                                <tr>
                                    <td><?php echo $no++; ?></td>
                                    <td><?php echo $data['tgl_tanggapan'] ?></td>
                                    <td><?php echo $data['nik'] ?></td>
                                    <td><?php echo $data['judul_laporan'] ?></td>
                                    <td><?php echo $data['isi_laporan'] ?></td>
                                    <td><?php echo $data['tanggapan'] ?></td>
                                    <td><?php echo $data['status'] ?></td>

                                
                                    
                            </tr>
                           <?php }?>
                        </tbody>
                    </table>