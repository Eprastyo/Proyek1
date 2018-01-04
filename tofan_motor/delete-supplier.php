<?php
include "koneksi.php";
$delete = mysqli_query($konek,"DELETE FROM data_supplier WHERE kode_supplier='".$_GET['kode_supplier']."'");
if($delete){
	header("location:index.php?page=datasupplier&id=10");
}else{
	echo "Gagal Hapus";
}
?>