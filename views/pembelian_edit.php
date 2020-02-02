<?php
$id=$_GET['id'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM pembelian WHERE id='$id'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Update Data pembelian</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                    <div class="form-group">
                            <label for="nama_pembeli" class="col-sm-3 control-label">Nama Pembeli</label>
                             <div class="col-sm-9">
                                <input type="text" name="nama_pembeli" value="<?=$data['nama_pembeli']?>"class="form-control" id="inputEmail3" placeholder="Nama Pembeli" readonly="true">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="kode_barang" class="col-sm-3 control-label">Kode Barang</label>
                             <div class="col-sm-9">
								<input type="text" name="kode_barang" value="<?=$data['kode_barang']?>"class="form-control" id="inputEmail3" placeholder="Kode Barang" readonly="true">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="nama_barang" class="col-sm-3 control-label">Nama Barang</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama_barang" value="<?=$data['nama_barang']?>"class="form-control" id="inputEmail3" placeholder="Nama Barang">
                            </div>
                        </div>
						<div class="form-group">
                            <label for="jenis_barang" class="col-sm-3 control-label">Jenis Barang</label>
                            <div class="col-sm-9">
                                <input type="text" name="jenis_barang" value="<?=$data['jenis_barang']?>"class="form-control" id="inputEmail3" placeholder="Jenis Barang">
                            </div>
                        </div>
						
						
                        <div class="form-group">
                            <label for="jumlah" class="col-sm-3 control-label">Jumlah</label>
                            <div class="col-sm-9">
                                <input type="text" name="jumlah" value="<?=$data['jumlah']?>" class="form-control" id="inputPassword3" placeholder="jumlah">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-edit"></span> Update Data Pembelian</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=pembelian&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Pembelian
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php 
if($_POST){
    //Ambil data dari form
    $nama_pembeli=$_POST['nama_pembeli']
    $kode_barang=$_POST['kode_barang'];
	$nama_barang=$_POST['nama_barang'];
    $jenis_barang=$_POST['jenis_barang'];
    $jumlah=$_POST['jumlah'];
	
    //buat sql
    $sql="UPDATE pembelian SET nama_pembeli = '$nama_pembeli ',kode_barang = '$kode_barang', nama_barang='$nama_barang', jenis_barang='$jenis_barang', jumlah='$jumlah', WHERE id='$id'"; 
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Edit MHS Error");
    if ($query){
        echo "<script>window.location.assign('?page=pembelian&actions=tampil');</script>";
    }else{
        echo "<script>alert('Edit Data Gagal');<script>";
    }
    }

?>



