<?php
include "koneksi.php";
$delete = mysqli_query($konek,"DELETE FROM data_barang WHERE kode_barang='".$_GET['kode_barang']."'");
if($delete){
	header("location:index.php?page=databarang&id=10");
}else{
	echo "Gagal Hapus";
}
?>