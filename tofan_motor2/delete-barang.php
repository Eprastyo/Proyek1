<?php
include "koneksi.php";
$delete = mysqli_query($konek,"DELETE FROM data_barang WHERE kode_barang='".$_GET['kode_barang']."'");
if($delete){
	header("location:beranda.php");
}else{
	echo "Gagal Hapus";
}
?>