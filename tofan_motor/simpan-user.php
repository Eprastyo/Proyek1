<?php
	    include "koneksi.php";
	    $username		    = $_POST['username'];
	    $password			= $_POST['password'];
	    $nama				= $_POST['nama'];
	    $captcha 			= $_POST['captcha'];
	    $input    			= "INSERT INTO user (nama,username,password)
	            			   VALUES ('$nama','$username','$password')";
	    $query_input 		= mysqli_query($konek,$input);
	        if ($query_input) 
		{
			session_start();
			if($_SESSION['kodecap']==$_POST['captcha']){
				echo "<script>alert('Data Disimpan')</script>";
		        echo "<meta http-equiv='refresh' content='1 url=login.php'>";
	    	}else{
				echo "<script>alert('Captcha salah')</script>";
				echo "<meta http-equiv='refresh' content='1 url=daftar_user.php'>";
			}
	    }
	    else {
	    	echo "<script>alert('Ulangi Data Belum Disimpan')</script>";
	    	echo "<meta http-equiv='refresh' content='1 url=login.php'>";
	    }
?>