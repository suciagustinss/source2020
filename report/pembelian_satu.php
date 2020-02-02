<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data Pembelian</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body onload="print()">
        <!--Menampilkan data detail arsip-->
        <?php
        include '../config/koneksi.php';
        $sql = "SELECT * FROM pembelian WHERE id='" . $_GET ['id'] . "'";
        //proses query ke database
        $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
        //Merubaha data hasil query kedalam bentuk array
        $data = mysqli_fetch_array($query);
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
                        <h3>DATA PEMINJAMAN ARSIP</h3>
                        <table class="table table-bordered table-striped table-hover">
                            <tbody>
								<tr>
                                    <td>Nomor Perkara</td> <td><?= $data['no_perkara'] ?></td>
                                </tr>
                                <tr>
                                    <td>Nama Peminjam</td> <td><?= $data['peminjam'] ?></td>
                                </tr>
                                <tr>
                                    <td>Tanggal Pinjam</td> <td><?= $data['tgl_pinjam'] ?></td>
                                </tr>
                                <tr>
                                    <td>Tanggal Kembali</td> <td><?= $data['tgl_kembali'] ?></td>
                                </tr>
								<tr>
                                    <td>Lama Pinjam</td> <td><?= $data['lama_pinjam'] ?> hari</td>
                                </tr>

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
