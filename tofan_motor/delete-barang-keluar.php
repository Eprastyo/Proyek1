<?php
include "koneksi.php";
$delete = mysqli_query($konek,"DELETE FROM data_barang_keluar WHERE nama_barang='".$_GET['nama_barang']."'");
if($delete){
	header("location:index.php?page=barangkeluar&id=10");
}else{
	echo "Gagal Hapus";
}
?>