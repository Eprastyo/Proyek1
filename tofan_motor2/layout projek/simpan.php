<?php
	    include "koneksi.php";
	    $kode_barang		    = $_POST['kode_barang'];
	    $nama_barang			= $_POST['nama_barang'];
	    $supplier				= $_POST['supplier'];
	    $harga		          	= $_POST['harga'];
		$satuan					= $_POST['satuan'];
		$stok					= $_POST['stok'];
		$keterangan				= $_POST['keterangan'];
	    $input    				="INSERT INTO data_barang (kode_barang,nama_barang,supplier,harga,satuan,stok,keterangan)
	            				  VALUES ('$kode_barang','$nama_barang','$supplier','$harga','$satuan','$stok','$stok','$keterangan')";
	    $query_input 			= mysql_query($input);
	        if ($query_input) 
		{
	    ?>
	        <script language="JavaScript">
	            alert('Terima Kasih Data Telah Dikirim');
	            document.location='index.php';
	        </script>
	    <?php
	    }
	    else {
	    echo "Data Belum Dikirim";
	    }
	    mysql_close($Open);
?>