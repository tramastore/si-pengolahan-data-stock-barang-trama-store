<?php
$id_kosmetik=$_GET['id_kosmetik'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM tbl_kosmetik WHERE id_kosmetik='$id_kosmetik'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Update Data Produk Kosmetik</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <label for="id_kosmetik" class="col-sm-3 control-label">Id Kosmetik</label>
                             <div class="col-sm-9">
                                <input type="text" name="id_kosmetik" value="<?=$data['id_kosmetik']?>"class="form-control" id="inputEmail3" placeholder="id_kosmetik" readonly="true">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="nama_kosmetik" class="col-sm-3 control-label">Nama Kosmetik</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama_kosmetik" value="<?=$data['nama_kosmetik']?>"class="form-control" id="inputEmail3" placeholder="nama_kosmetik">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="stock_kosmetik" class="col-sm-3 control-label">Stock Kosmetik</label>
                            <div class="col-sm-9">
                                <input type="text" name="stock_kosmetik" value="<?=$data['stock_kosmetik']?>"class="form-control" id="inputEmail3" placeholder="stock_kosmetik">
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
                                    <span class="fa fa-edit"></span> Update Data Produk Kosmetik</button>
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
    $id_kosmetik=$_POST['id_kosmetik'];
    $nama_kosmetik=$_POST['nama_kosmetik'];
    $stock_kosmetik=$_POST['stock_kosmetik'];
    $harga=$_POST['harga'];
    //buat sql
    $sql="UPDATE tbl_kosmetik SET id_kosmetik= '$id_kosmetik', nama_kosmetik='$nama_kosmetik', stock_kosmetik='$stock_kosmetik', harga='$harga' WHERE id_kosmetik='$id_kosmetik'"; 
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Edit MHS Error");
    if ($query){
        echo "<script>window.location.assign('?page=produkkosmetik&actions=tampil');</script>";
    }else{
        echo "<script>alert('Edit Data Gagal');<script>";
    }
    }

?>



