<?php
//membuat query untuk hapus data
$sql="DELETE FROM tbl_kebutuhanrumahtangga WHERE id_barang ='".$_GET['id_barang']."'";
$query=mysqli_query($koneksi, $sql) or die ("SQL Hapus Error");
if($query){
    echo"<script> window.location.assign('?page=kebutuhanrumahtangga&actions=tampil');</script>";
}else{
    echo"<script> alert ('Maaf !!! Data Tidak Berhasil Dihapus') window.location.assign('?page=kebutuhanrumahtangga&actions=tampil');</scripr>";
}

