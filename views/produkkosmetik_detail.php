<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Informasi Detail Produk Kosmetik</h3>
                </div>
                <div class="panel-body">
                    <!--Menampilkan data detail arsip-->
                    <?php
                    $sql = "SELECT *FROM tbl_kosmetik WHERE id_kosmetik ='" . $_GET ['id_kosmetik'] . "'";
                    //proses query ke database
                    $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
                    //Merubaha data hasil query kedalam bentuk array
                    $data = mysqli_fetch_array($query);
                    ?>   

                    <!--dalam tabel--->
                    <table class="table table-bordered table-striped table-hover"> 
                        <tr>
                            <td width="200">ID Barang</td> <td><?= $data['id_kosmetik'] ?></td>
                        </tr>
                        <tr>
                            <td>Nama Barang</td> <td><?= $data['nama_kosmetik'] ?></td>
                        </tr>
                        <tr>
                            <td>Stock Barang</td> <td><?= $data['stock_kosmetik'] ?></td>
                        </tr>
                        <tr>
                            <td>Harga</td> <td><?= $data['harga'] ?></td>
                        </tr>
                    </table>
                
                </div> <!--end panel-body-->
                <!--panel footer--> 
                <div class="panel-footer">
                    <a href="?page=Produkkosmetik&actions=tampil" class="btn btn-success btn-sm">
                        Kembali ke Data Produk Kosmetik </a>

                </div>
                <!--end panel footer-->
            </div>

        </div>
    </div>
</div>

