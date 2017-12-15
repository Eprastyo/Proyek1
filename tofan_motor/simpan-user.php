<?php
	    include "koneksi.php";
	    $username		    = $_POST['username'];
	    $password			= $_POST['password'];
	    $nama				= $_POST['nama'];
	    $input    			= "INSERT INTO user (nama,username,password)
	            			   VALUES ('$nama','$username','$password')";
	    $query_input 		= mysqli_query($konek,$input);
	        if ($query_input) 
		{
			echo "<script>alert('Data Disimpan')</script>";
	        echo "<meta http-equiv='refresh' content='1 url=login.php'>";
	    }
	    else {
	    	echo "<script>alert('Ulangi Data Belum Disimpan')</script>";
	    	echo "<meta http-equiv='refresh' content='1 url=login.php'>";
	    }
?>