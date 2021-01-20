<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Tambah Data Perlengkapan ATK</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <div class="col-sm-2 col-xs-9">     
                        </div>
                        </div>

                         <div class="form-group">
                            <label for="id_atk" class="col-sm-3 control-label">ID ATK</label>
                            <div class="col-sm-9">
                                <input type="text" name="id_atk" class="form-control" id="inputEmail3" placeholder="Inputkan ID ATK" required>
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="nama_atk" class="col-sm-3 control-label">Nama ATK</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama_atk" class="form-control" id="inputEmail3" placeholder="Inputkan Nama ATK" required>
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="stock_atk" class="col-sm-3 control-label">Stock ATK</label>
                            <div class="col-sm-9">
                                <input type="text" name="stock_atk" class="form-control" id="inputEmail3" placeholder="Inputkan Stock ATK" required>
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
                    <a href="?page=perlengkapanatk&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Perlengkapan ATK
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php
if($_POST){
    //Ambil data dari form
  $id_atk=$_POST['id_atk'];
    $nama_atk=$_POST['nama_atk'];
    $stock_atk=$_POST['stock_atk'];
    $harga=$_POST['harga'];
    //buat sql
    $sql="INSERT INTO tbl_perlengkapanatk VALUES ('$id_atk','$nama_atk','$stock_atk','$harga')";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan perlengkapanatk Error");
    if ($query){
        echo "<script>window.location.assign('?page=perlengkapanatk&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>
