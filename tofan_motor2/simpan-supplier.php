<?php
	    include "koneksi.php";
	    $kode_supplier	    = $_POST['kode_supplier'];
	    $nama_supplier		= $_POST['nama_supplier'];
	    $kontak				= $_POST['kontak'];
	    $input    			="INSERT INTO data_supplier (kode_supplier,nama_supplier,kontak)
	            			  VALUES ('$kode_supplier','$nama_supplier','$kontak')";
	    $query_input 	    = mysqli_query($konek,$input);
	        if ($query_input) 
		{
	    	echo "<script>alert('Data Disimpan')</script>";
	    	echo "<meta http-equiv='refresh' content='1 url=data-supplier.php'>";
	    }
	    else {
	    	echo "<script>alert('Ulangi Data Belum Disimpan')</script>";
	    	echo "<meta http-equiv='refresh' content='1 url=data-supplier.php'>";
	    }
?>