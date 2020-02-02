<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data Semua Penjualan</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body onload="print()">
        <!--Menampilkan data detail arsip-->
        <?php
        include '../config/koneksi.php';
        ?>

        <div class="container">
            <div class='row'>
                <div class="col-sm-12">
                    <!--dalam tabel--->
                    <div class="text-center">
                        <h2>Sistem Informasi Arsip Pengadilan Negeri Kisaran </h2>
                        <h4>Jalan Dipo No. 33, Kisaran, <br>
                              Kabupaten Asahan, Sumatera Utara, Kode Pos : 21211</h4>
                        <hr>
                        <h3>DATA SELURUH PEMBELIAN</h3>
                        <table class="table table-bordered table-striped table-hover">
                        <tbody>
                                <thead>
								<tr>
									<th>No.</th><th width="18%">Nama Pembeli</th><th>Alamat</th><th>Kode Barang</th><th>Nama Barang</th><th>Jenis Barang</th><th>Jumlah</th>
								</tr>
								</thead>
							<tbody>
                            <!--ambil data dari database, dan tampilkan kedalam tabel-->
                            <?php
                            //buat sql untuk tampilan data, gunakan kata kunci select
                            $sql = "SELECT * FROM pembelian";
                            $query = mysqli_query($koneksi, $sql) or die("SQL Anda Salah");
                            //Baca hasil query dari databse, gunakan perulangan untuk
                            //Menampilkan data lebh dari satu. disini akan digunakan
                            //while dan fungdi mysqli_fecth_array
                            //Membuat variabel untuk menampilkan nomor urut
                            $id = 0;
                            //Melakukan perulangan u/menampilkan data
                            while ($data = mysqli_fetch_array($query)) {
                                $id++; //Penambahan satu untuk nilai var nomor
                                ?>
                                <tr>
                                   <td><?= $id ?></td>
                                    <td><?= $data['nama_pembeli'] ?></td>
                                    <td><?= $data['alamat'] ?></td>
                                    <td><?= $data['kode_barang'] ?></td>
                                    <td><?= $data['nama_barang'] ?></td>
                                    <td><?= $data['jenis_barang'] ?></td>
                                    <td><?= $data['jumlah'] ?></td>
                                </tr>
                                <!--Tutup Perulangan data-->
                            <?php } ?>
							</tbody>
                        </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="2" class="text-right">
                                        Kisaran  <?= date("d-m-Y") ?>
                                        <br><br><br><br>
                                        <u>Wijaya Lipstik<strong></u><br>
                                        
                                    </td>
								</tr>
							</tfoot>
                        </table>
                    </div>
                </div>
            </div>
    </body>
</html>

