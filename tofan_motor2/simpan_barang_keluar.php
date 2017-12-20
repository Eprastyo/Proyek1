<?php
	    include "koneksi.php";
	    $nama_barang	= $_POST['nama_barang'];
	    $jumlah			= $_POST['jumlah'];
	    $harga			= $_POST['harga'];
		$tanggal		= date("Y-m-d");
		if($jumlah	==''|| $harga==''){
			$total = 0;
		}else{
		$total 			= $jumlah*$harga;
		}

		$sql 			= mysqli_query($konek, "SELECT * FROM data_barang_keluar where nama_barang='$nama_barang'");
        $data 			= mysqli_fetch_array($sql);
        
        
        if($nama_barang==$data['nama_barang'] & $tanggal==$data['tgl_keluar']){

        	$stok_baru 	= mysqli_query($konek, "SELECT * FROM data_barang where nama_barang='$nama_barang'");
        	$hasil 		= mysqli_fetch_array($stok_baru);

            if($hasil['stok']<1){
        		echo "<script>alert('MAAF STOK BARANG HABIS')</script>";
        		echo "<meta http-equiv='refresh' content='1 url=input_barang_keluar.php'>"; 
        	}
        	else{
        	mysqli_query($konek,"UPDATE data_barang_keluar SET jumlah=jumlah+$jumlah where nama_barang='$nama_barang'");
        	mysqli_query($konek,"UPDATE data_barang_keluar SET total_harga=total_harga+$total where nama_barang='$nama_barang'");
        	mysqli_query($konek,"UPDATE data_barang SET stok=stok-$jumlah where nama_barang='$nama_barang'");

	        header('location:barang_keluar.php');
        	}	
	    }
	    else if($jumlah ==''|| $nama_barang==''||$harga==''){
        		 // echo"<script>alert(\"Harap Diisi Semua\"); location.href = \"barang_keluar.php\"; </script>";
	    	echo "<script>alert('Mohon Diisi Semua')</script>";
        	echo "<meta http-equiv='refresh' content='1 url=input_barang_keluar.php'>"; 
        }
	    else{
        	$input    	 	="INSERT INTO data_barang_keluar (tgl_keluar,nama_barang,jumlah,harga,total_harga)
	            			  VALUES ('$tanggal','$nama_barang','$jumlah','$harga','$total')";
	    	$query_input 	= mysqli_query($konek,$input);

	    	mysqli_query($konek,"UPDATE data_barang SET stok=stok-$jumlah where nama_barang='$nama_barang'");

	    	header('location:barang_keluar.php');
		}
?>