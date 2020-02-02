<?php
if(!isset($_SESSION ['idsesi'])) {
    echo "<script> window.location.assign('../index.php'); </script>";
}
?>

<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title"><span class="fa fa-user-plus"></span> Data Penjualan</h3>
                </div>
                <div class="panel-body">
                    <table id="dtskripsi" class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                                <th>No.</th><th width="17%">Kode Barang</th><th>Nama Barang</th><th>Merek</th><th>Jenis Barang</th><th>Jumlah</th><th>Harga</th><th>ACTIONS</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!--ambil data dari database, dan tampilkan kedalam tabel-->
                            <?php
                            //buat sql untuk tampilan data, gunakan kata kunci select
                            $sql = "SELECT * FROM penjualan";
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
                                    <td><?= $data['kode_barang'] ?></td>
                                    <td><?= $data['nama_barang'] ?></td>
                                    <td><?= $data['merek'] ?></td>
                                    <td><?= $data['jenis_barang'] ?></td>
                                    <td><?= $data['jumlah'] ?></td>
                                    <td><?= $data['harga'] ?></td>
                                    <td>
                                        <a href="?page=penjualan&actions=edit&id=<?= $data['id'] ?>" class="btn btn-warning btn-xs">
                                            <span class="fa fa-edit"></span>
                                        </a>
                                        <a href="?page=penjualan&actions=delete&id=<?= $data['id'] ?>" class="btn btn-danger btn-xs">
                                            <span class="fa fa-remove"></span>
                                        </a>
                                    </td>
                                </tr>
                                <!--Tutup Perulangan data-->
                            <?php } ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="7">
                                    <a href="?page=penjualan&actions=tambah" class="btn btn-info btn-sm">
                                        Tambah Data

                                    </a>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>

