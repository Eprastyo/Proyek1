<?php
include "koneksi.php";
$delete = mysqli_query($konek,"DELETE FROM data_supplier WHERE kode_supplier='".$_GET['kode_supplier']."'");
if($delete){
	header("location:data-supplier.php");
}else{
	echo "Gagal Hapus";
}
?>