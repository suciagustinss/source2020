<?php
$id=$_GET['id'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM penjualan WHERE id ='$id'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Update Data Penjualan</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <label for="kode_barang" class="col-sm-3 control-label">Kode Barang</label>
                            <div class="col-sm-2 col-xs-9">
                            <input type="text" name="kode_barang" value="<?=$data['kode_barang']?>" class="form-control" id="inputEmail3" placeholder="Kode Barang">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="nama_barang" class="col-sm-3 control-label">Nama Barang</label>
                            <div class="col-sm-2 col-xs-9">
                            <input type="text" name="nama_barang" value="<?=$data['nama_barang']?>" class="form-control" id="inputEmail3" placeholder="nama Barang">
                            </div>
                        </div>
						<div class="form-group">
                            <label for="merek" class="col-sm-3 control-label">Merek Barang</label>
                            <div class="col-sm-9">
                                <input type="text" name="merek" value="<?=$data['merek']?>"class="form-control" id="inputEmail3" placeholder="Merek Barang">
                            </div>
                        </div>
						<div class="form-group">
                            <label for="jenis Barang" class="col-sm-3 control-label">Jenis Barang</label>
                            <div class="col-sm-9">
                                <input type="text" name="jenis_barang" value="<?=$data['jenis_barang']?>"class="form-control" id="inputEmail3" placeholder="Jenis Barang">
                            </div>
                        </div>
                        <!--untuk tanggal lahir form tahun-bulan-tanggal 1998-10-10-->
                        <div class="form-group">


                            <label class="col-sm-3 control-label">Tanggal Jual</label>
                            <!--untu tahun-->
                            <div class="col-sm-2 col-xs-9">
                                <select name="tahun" class="form-control">
                                    <?php for($i=2020;$i>1980;$i--) {?>
                                    <option value="<?=$i?>"> <?=$i?> </option>
                                    <?php }?>
                                    
                                </select>

                            </div>
                            <!--Untuk Bulan-->
                            <div class="col-sm-2 col-xs-9">
                                <select name="bulan" class="form-control">
                                    <?php 
                                    $bulan=  array("","Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
                                    for($j=12;$j>0;$j--) {?>
                                    <option value="<?=$j?>"> <?=$bulan[$j]?> </option>
                                    <?php }?>
                                    
                                </select>

                            </div>
                            <!--Untuk Tanggal-->
                            <div class="col-sm-2 col-xs-9">
                                <select name="tanggal" class="form-control">
                                    <?php for($k=31;$k>0;$k--) {?>
                                    <option value="<?=$k?>"> <?=$k?> </option>
                                    <?php }?>
                                    
                                </select>

                            </div>

                        </div>
                        <!--end tanggal lahir-->           

                        <div class="form-group">Jumlah</label>
                            <div class="col-sm-9">
                                <input type="text" name="jumlah" value="<?=$data['jumlah']?>" class="form-control" id="inputPassword3" placeholder="Jumlah">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="harga" class="col-sm-3 control-label">Harga</label>
                            <div class="col-sm-9">
                                <input type="text" name="harga" value="<?=$data['harga']?>" class="form-control" id="inputPassword3" placeholder="harga">
                            </div>
                        </div>
                        <!--Status-->
                
                        <!--Akhir Status-->
                        <div class="form-group">
                            <label for="keterangan" class="col-sm-3 control-label">Keterangan</label>
                            <div class="col-sm-9">
                                <input type="text" name="keterangan" value="<?=$data['keterangan']?>" class="form-control" id="inputPassword3" placeholder="Keterangan">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-edit"></span> Update Data Penjualan</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=penjualan&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Penjualan
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php 
if($_POST){
    //Ambil data dari form
    $kode_barang=$_POST['kode_barang'];
    $nama_barang=$_POST['nama_barang'];
	$merek=$_POST['merek'];
    $jenis_barang=$_POST['jenis_barang'];
    $tgl_jual=$_POST['tahun']."_".$_POST['bulan']."_".$_POST['tanggal'];
    $jumlah=$_POST['jumlah'];
	$harga=$_POST['harga'];
    $keterangan=$_POST['keterangan'];
    //buat sql
    $sql="UPDATE penjualan SET kode_barang='$kode_barang',nama_barang='$nama_barang',merek='$merek',jenis_barang='$jenis_barang',tgl_jual='$tgl_jual',jumlah='$jumlah',harga='$harga',keterangan='$keterangan' WHERE id ='$id'"; 
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Edit MHS Error");
    if ($query){
        echo "<script>window.location.assign('?page=penjualan&actions=tampil');</script>";
    }else{
        echo "<script>alert('Edit Data Gagal');<script>";
    }
    }

?>



