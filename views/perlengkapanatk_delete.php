<?php
//membuat query untuk hapus data
$sql="DELETE FROM tbl_perlengkapanatk WHERE id_atk ='".$_GET['id_atk']."'";
$query=mysqli_query($koneksi, $sql) or die ("SQL Hapus Error");
if($query){
    echo"<script> window.location.assign('?page=perlengkapanatk&actions=tampil');</script>";
}else{
    echo"<script> alert ('Maaf !!! Data Tidak Berhasil Dihapus') window.location.assign('?page=perlengkapanatk&actions=tampil');</scripr>";
}

