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

		$sql = mysqli_query($konek, "SELECT nama_barang FROM data_barang");
        $data = mysqli_fetch_array($sql);
        if($nama_barang==$data['nama_barang']){
        	mysqli_query($konek,"UPDATE data_barang SET stok=stok+$stok");
        	echo "<script>alert('Data Disimpan')</script>";
	        echo "<meta http-equiv='refresh' content='1 url=beranda.php'>"; 
        }
        else if ($kode_barang==''|$nama_barang==''|$harga==''|$satuan==''|$stok==''|$keterangan==''){
        	echo "<script>alert('Harap diisi Semua')</script>";
        	echo "<meta http-equiv='refresh' content='1 url=tambah-barang.php'>"; 
        }
        else{
        	mysqli_query($konek,"INSERT INTO data_barang (kode_barang,nama_barang,supplier,harga,satuan,stok,keterangan,tanggal)
	        VALUES ('$kode_barang','$nama_barang','$supplier','$harga','$satuan','$stok','$keterangan','$tanggal')");
	        echo "<script>alert('Data Disimpan')</script>";
	        echo "<meta http-equiv='refresh' content='1 url=data-barang.php'>"; 
        }
?>