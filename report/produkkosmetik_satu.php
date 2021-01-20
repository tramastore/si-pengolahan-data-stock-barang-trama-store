<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data Produk Kosmetik</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>  
    <body onload="print()">
        <!--Menampilkan data detail perlengkapanatk-->
        <?php
        include '../config/koneksi.php';
        $sql = "SELECT * FROM tbl_kosmetik WHERE id_kosmetik='" . $_GET ['id_kosmetik'] . "'";
        //proses query ke database
        $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
        //Merubaha data hasil query kedalam bentuk array
        $data = mysqli_fetch_array($query);
        ?>   

        <div class="container">
            <div class='row'>
                <div class="col-sm-12">
                    <!--dalam tabel--->
                    <div class="text-center">
                        <h2>Sistem Informasi Pengolahan Data Stock Barang Trama Store </h2>
                        <h4>Jalan Perintis Dusun VII Sipaku Area<br> Simpang Empat, Kabupaten Asahan, Sumatera Utara, 21271</h4>
                        <hr>
                        <h3>DATA Produk Kosmetik</h3>
                        <table class="table table-bordered table-striped table-hover"> 
                            <tbody>
                                <tr>
                                    <td>ID Kosmetik</td> <td><?= $data['id_kosmetik'] ?></td>
                                </tr>
                                <tr>
                                    <td width="200">Nama Kosmetik</td> <td><?= $data['nama_kosmetik'] ?></td>
                                </tr>
                                <tr>
                                    <td>Stock Kosmetik</td> <td><?= $data['stock_kosmetik'] ?></td>
                                </tr>
                                <tr>
                                    <td>Harga</td> <td><?= $data['harga'] ?></td>
                                </tr>
                            </tbody>
                            <tfoot> 
                                <tr>
                                    <td colspan="2" class="text-right">
                                        Kisaran  <?= date("d-m-Y") ?>
                                        <br><br><br><br>
                                        <u>Kabag Toko Emma Nur Maulina<strong></u><br>
                                        
                                    </td>
                                </tr>
                            </tfoot> 
                        </table>
                    </div>
                </div>
            </div>
    </body>
</html>