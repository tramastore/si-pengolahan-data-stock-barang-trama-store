<?php
$id_barang=$_GET['id_barang'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM tbl_kebutuhanrumahtangga WHERE id_barang ='$id_barang'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Update Data Kebutuhan Rumah Tangga</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <label for="id_barang" class="col-sm-3 control-label">Id Barang</label>
                             <div class="col-sm-9">
                                <input type="text" name="id_barang" value="<?=$data['id_barang']?>"class="form-control" id="inputEmail3" placeholder="id_barang" readonly="true">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="nama_barang" class="col-sm-3 control-label">Nama Barang</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama_barang" value="<?=$data['nama_barang']?>"class="form-control" id="inputEmail3" placeholder="nama_barang">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="stock_barang" class="col-sm-3 control-label">Stock Barang</label>
                            <div class="col-sm-9">
                                <input type="text" name="stock_barang" value="<?=$data['stock_barang']?>"class="form-control" id="inputEmail3" placeholder="stock_barang">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="harga" class="col-sm-3 control-label">Harga</label>
                            <div class="col-sm-9">
                                <input type="text" name="harga" value="<?=$data['harga']?>"class="form-control" id="inputEmail3" placeholder="harga">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-edit"></span> Update Data Kebutuhan Rumah Tangga</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=kebutuhanrumahtangga&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Kebutuhan Rumah Tangga
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php 
if($_POST){
    $id_barang=$_POST['id_barang'];
    $nama_barang=$_POST['nama_barang'];
    $stock_barang=$_POST['stock_barang'];
    $harga=$_POST['harga'];
    //buat sql
    $sql="UPDATE tbl_kebutuhanrumahtangga SET id_barang = '$id_barang', nama_barang='$nama_barang', stock_barang='$stock_barang', harga='$harga' WHERE id_barang='$id_barang'"; 
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Edit MHS Error");
    if ($query){
        echo "<script>window.location.assign('?page=kebutuhanrumahtangga&actions=tampil');</script>";
    }else{
        echo "<script>alert('Edit Data Gagal');<script>";
    }
    }

?>



