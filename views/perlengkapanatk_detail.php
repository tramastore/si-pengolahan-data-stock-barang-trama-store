<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Informasi Detail Perlengkapan ATK</h3>
                </div>
                <div class="panel-body">
                    <!--Menampilkan data detail arsip-->
                    <?php
                    $sql = "SELECT *FROM tbl_perlengkapanatk WHERE id_atk ='" . $_GET ['id_atk'] . "'";
                    //proses query ke database
                    $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
                    //Merubaha data hasil query kedalam bentuk array
                    $data = mysqli_fetch_array($query);
                    ?>   

                    <!--dalam tabel--->
                    <table class="table table-bordered table-striped table-hover"> 
                        <tr>
                            <td width="200">ID Barang</td> <td><?= $data['id_atk'] ?></td>
                        </tr>
                        <tr>
                            <td>Nama Barang</td> <td><?= $data['nama_atk'] ?></td>
                        </tr>
                        <tr>
                            <td>Stock Barang</td> <td><?= $data['stock_atk'] ?></td>
                        </tr>
                        <tr>
                            <td>Harga</td> <td><?= $data['harga'] ?></td>
                        </tr>
                    </table>
                
                </div> <!--end panel-body-->
                <!--panel footer--> 
                <div class="panel-footer">
                    <a href="?page=perlengkapanatk&actions=tampil" class="btn btn-success btn-sm">
                        Kembali ke Data Perlengkapan ATK </a>

                </div>
                <!--end panel footer-->
            </div>

        </div>
    </div>
</div>

