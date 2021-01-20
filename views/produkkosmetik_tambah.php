<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Tambah Data Produk Kosmetik</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <div class="col-sm-2 col-xs-9">     
                        </div>
                        </div>

                         <div class="form-group">
                            <label for="id_kosmetik" class="col-sm-3 control-label">ID Kosmetik</label>
                            <div class="col-sm-9">
                                <input type="text" name="id_kosmetik" class="form-control" id="inputEmail3" placeholder="Inputkan ID Kosmetik" required>
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="nama_kosmetik" class="col-sm-3 control-label">Nama Kosmetik</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama_kosmetik" class="form-control" id="inputEmail3" placeholder="Inputkan Nama Kosmetik" required>
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="stock_kosmetik" class="col-sm-3 control-label">Stock Kosmetik</label>
                            <div class="col-sm-9">
                                <input type="text" name="stock_kosmetik" class="form-control" id="inputEmail3" placeholder="Inputkan Stock Kosmetik" required>
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
                    <a href="?page=produkkosmetik&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Produk Kosmetik
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php
if($_POST){
    //Ambil data dari form
    $id_kosmetik=$_POST['id_kosmetik'];
    $nama_kosmetik=$_POST['nama_kosmetik'];
    $stock_kosmetik=$_POST['stock_kosmetik'];
    $harga=$_POST['harga'];
    //buat sql
    $sql="INSERT INTO tbl_kosmetik VALUES ('$id_kosmetik','$nama_kosmetik','$stock_kosmetik','$harga')";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan produkkosmetik Error");
    if ($query){
        echo "<script>window.location.assign('?page=produkkosmetik&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>
