<?php
	    include "koneksi.php";
	    $nama_barang	= $_POST['nama_barang'];
	    $jumlah			= $_POST['jumlah'];
	    $harga			= $_POST['harga'];
		$tanggal		= date("Y-m-d");

		$sql 			= mysqli_query($konek, "SELECT * FROM data_barang where nama_barang='$nama_barang'");
        $data 			= mysqli_fetch_array($sql);

		if($jumlah==''||$nama_barang==''||$harga==''){
	    	echo "<script>alert('Mohon Diisi Semua')</script>";
        	echo "<meta http-equiv='refresh' content='1 url=index.php?page=barangkeluar&id=15'>";
        }
 		else if($data['stok']<1||$jumlah>$data['stok']){
			echo "<script>alert('MAAF STOK BARANG KURANG')</script>";
        	echo "<meta http-equiv='refresh' content='1 url=index.php?page=databarang&id=10'>";
        } 
	    else if($nama_barang==$data['nama_barang']){
	        $total = $jumlah*$harga;
	        mysqli_query($konek,"UPDATE data_barang_keluar SET jumlah=jumlah+$jumlah where nama_barang='$nama_barang'");
	        mysqli_query($konek,"UPDATE data_barang_keluar SET total_harga=total_harga+$total where nama_barang='$nama_barang'");
	        mysqli_query($konek,"UPDATE data_barang SET stok=stok-$jumlah where nama_barang='$nama_barang'");

	        echo "<script>alert('Data Disimpan')</script>";
		    echo "<meta http-equiv='refresh' content='1 url=index.php?page=barangkeluar&id=10'>"; 
	    }
	    else { 
	    	$total 			= $jumlah*$harga;
        	$input    	 	="INSERT INTO data_barang_keluar (tgl_keluar,nama_barang,jumlah,harga,total_harga)
	            			  VALUES ('$tanggal','$nama_barang','$jumlah','$harga','$total')";
	    	$query_input 	= mysqli_query($konek,$input);

	    	mysqli_query($konek,"UPDATE data_barang SET stok=stok-$jumlah where nama_barang='$nama_barang'");
	    	echo "<script>alert('Data Disimpan')</script>";
	    	echo "<meta http-equiv='refresh' content='1 url=index.php?page=barangkeluar&id=10'>"; 
	    }
?>