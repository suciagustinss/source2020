<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Tambah Data Penjualan</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
 
                      <!--input noperkara-->
						 <div class="form-group">
                            <label for="no_perkara" class="col-sm-3 control-label">Nomor Perkara</label>
                            <div class="col-sm-9">
                                <input type="text" name="no_perkara"class="form-control" id="inputEmail3" placeholder="Inputkan Nomor Perkara" required>
                            </div>
                        </div>
                     
						<!--input paraperkara-->
						 <div class="form-group">
                            <label for="para_pihak" class="col-sm-3 control-label">Para Pihak</label>
                            <div class="col-sm-9">
                                <input type="text" name="para_pihak" class="form-control" id="inputEmail3" placeholder="Inputkan Para Pihak yang Terlibat" required>
                            </div>
                        </div>
                       
                       <!--input tanggalmasuk-->
                         <div class="form-group">
                            <label for="tgl_masuk" class="col-sm-3 control-label">Tanggal Masuk</label>
                            <div class="col-sm-3">
                                <input type="date" name="tgl_masuk" class="form-control" id="inputEmail3" placeholder="Inputkan Tanggal Masuk" required>
                            </div>
                        </div>

                       <!--input keterangan-->
						<div class="form-group">
                            <label for="ket" class="col-sm-3 control-label">Keterangan</label>
                            <div class="col-sm-9">
                                <input type="text" name="ket" class="form-control" id="inputPassword3" placeholder="Inputkan Keterangan">
                            </div>
                        </div>



                        

                        

						
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-save"></span> Simpan Data</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=perdata&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data perdata
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php
if($_POST){
    //Ambil data dari form
    $pihak=$_POST['para_pihak'];
	$noperkara=$_POST['no_perkara'];
    $tglmasuk=$_POST['tgl_masuk'];
	$ket=$_POST['ket'];
    //buat sql
    $sql="INSERT INTO tbl_perdata VALUES ('','$noperkara','$pihak','$tglmasuk','$ket')";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan Arsip Error");
    if ($query){
        echo "<script>window.location.assign('?page=perdata&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>
