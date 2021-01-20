<?php
//membuat query untuk hapus data
$sql="DELETE FROM tbl_kosmetik WHERE id_kosmetik='".$_GET['id_kosmetik']."'";
$query=mysqli_query($koneksi, $sql) or die ("SQL Hapus Error");
if($query){
    echo"<script> window.location.assign('?page=produkkosmetik&actions=tampil');</script>";
}else{
    echo"<script> alert ('Maaf !!! Data Tidak Berhasil Dihapus') window.location.assign('?page=produkkosmetikk&actions=tampil');</scripr>";
}

