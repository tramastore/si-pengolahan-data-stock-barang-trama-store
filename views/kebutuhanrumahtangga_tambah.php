<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Tambah Data Kebutuhan Rumah Tangga</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <div class="col-sm-2 col-xs-9">     
                        </div>
                        </div>

						 <div class="form-group">
                            <label for="id_barang" class="col-sm-3 control-label">ID Barang</label>
                            <div class="col-sm-9">
                                <input type="text" name="id_barang" class="form-control" id="inputEmail3" placeholder="Inputkan ID Barang" required>
                            </div>
                        </div>
						 <div class="form-group">
                            <label for="nama_barang" class="col-sm-3 control-label">Nama Barang</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama_barang" class="form-control" id="inputEmail3" placeholder="Inputkan Nama Barang" required>
                            </div>
                        </div>
						 <div class="form-group">
                            <label for="stock_barang" class="col-sm-3 control-label">Stock Barang</label>
                            <div class="col-sm-9">
                                <input type="text" name="stock_barang" class="form-control" id="inputEmail3" placeholder="Inputkan Stock Barang" required>
                            </div>
                        </div>
						 <div class="form-group">
                            <label for="harga" class="col-sm-3 control-label">Harga</label>
                            <div class="col-sm-9">
                                <input type="text" name="harga" class="form-control" id="inputEmail3" placeholder="Inputkan Harga" required>
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
                    <a href="?page=kebutuhanrumahtangga&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Kebutuhan rumah tangga
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php
if($_POST){
    //Ambil data dari form
  $id_barang=$_POST['id_barang'];
	$nama_barang=$_POST['nama_barang'];
	$stock_barang=$_POST['stock_barang'];
	$harga=$_POST['harga'];
    //buat sql
    $sql="INSERT INTO tbl_kebutuhanrumahtangga VALUES ('$id_barang','$nama_barang','$stock_barang','$harga')";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan Kebutuhanrumahtangga Error");
    if ($query){
        echo "<script>window.location.assign('?page=kebutuhanrumahtangga&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>
