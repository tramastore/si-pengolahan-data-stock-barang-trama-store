<?php
$id_atk=$_GET['id_atk'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM tbl_perlengkapanatk WHERE id_atk='$id_atk'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Update Data Perlengkapan ATK</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <label for="id_atk" class="col-sm-3 control-label">Id ATK</label>
                             <div class="col-sm-9">
                                <input type="text" name="id_atk" value="<?=$data['id_atk']?>"class="form-control" id="inputEmail3" placeholder="id_atk" readonly="true">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="nama_atk" class="col-sm-3 control-label">Nama ATK</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama_atk" value="<?=$data['nama_atk']?>"class="form-control" id="inputEmail3" placeholder="nama_atk">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="stock_atk" class="col-sm-3 control-label">Stock ATK</label>
                            <div class="col-sm-9">
                                <input type="text" name="stock_atk" value="<?=$data['stock_atk']?>"class="form-control" id="inputEmail3" placeholder="stock_atk">
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
                                    <span class="fa fa-edit"></span> Update Data Perlengkapan ATK</button>
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
    $id_atk=$_POST['id_atk'];
    $nama_atk=$_POST['nama_atk'];
    $stock_atk=$_POST['stock_atk'];
    $harga=$_POST['harga'];
    //buat sql
    $sql="UPDATE tbl_perlengkapanatk SET id_atk = '$id_atk', nama_atk='$nama_atk', stock_atk='$stock_atk', harga='$harga' WHERE id_atk='$id_atk'"; 
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Edit MHS Error");
    if ($query){
        echo "<script>window.location.assign('?page=perlengkapanatk&actions=tampil');</script>";
    }else{
        echo "<script>alert('Edit Data Gagal');<script>";
    }
    }

?>



