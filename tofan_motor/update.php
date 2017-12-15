<?php
include "koneksi.php";
	    $kode_barang		    = $_POST['kode_barang'];
	    $nama_barang			= $_POST['nama_barang'];
	    $supplier				= $_POST['supplier'];
	    $harga		          	= $_POST['harga'];
		$satuan					= $_POST['satuan'];
		$stok					= $_POST['stok'];
		$keterangan				= $_POST['keterangan'];
		$tanggal				= date("Y-m-d H:i:s");

		$query="UPDATE data_barang SET nama_barang='$nama_barang',supplier='$supplier',harga='$harga',satuan='$satuan',stok='$stok',keterangan='$keterangan',tanggal='$tanggal' where kode_barang='$kode_barang'";
		$query_input = mysqli_query($koneksi, $query);

		if ($query_input) 
		{
			echo "<script>alert('Data Disimpan')</script>";
	        echo "<meta http-equiv='refresh' content='1 url=beranda.php'>";
	    }
	    else {
	    	echo "<script>alert('Ulangi Data Belum Disimpan')</script>";
	    	echo "<meta http-equiv='refresh' content='1 url=beranda.php'>";
	    }
		header("location:beranda.php");
?>
