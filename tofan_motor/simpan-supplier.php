<?php
	    include "koneksi.php";
	    $kode_supplier	    = $_POST['kode_supplier'];
	    $nama_supplier		= $_POST['nama_supplier'];
	    $kontak				= $_POST['kontak'];
	    $cek = mysqli_num_rows(mysqli_query($konek,"SELECT * FROM data_supplier WHERE kode_supplier='$kode_supplier' or nama_supplier='$nama_supplier'"));
	    if ($cek > 0){
		    echo "<script>alert('Kode atau nama sudah ada')</script>";
	    	echo "<meta http-equiv='refresh' content='1 url=index.php?page=datasupplier&id=15'>";
		}
		else{
				    $input    			="INSERT INTO data_supplier (kode_supplier,nama_supplier,kontak)
	            			  			VALUES ('$kode_supplier','$nama_supplier','$kontak')";
				    $query_input 	    = mysqli_query($konek,$input);
				    if ($query_input){
	    				echo "<script>alert('Data Disimpan')</script>";
	    				echo "<meta http-equiv='refresh' content='1 url=index.php?page=datasupplier&id=10'>";
	   				}
	     			else {
	    				echo "<script>alert('Ulangi Data Belum Disimpan')</script>";
	    				echo "<meta http-equiv='refresh' content='1 url=index.php?page=datasupplier&id=15'>";
	    			}
		}
?>