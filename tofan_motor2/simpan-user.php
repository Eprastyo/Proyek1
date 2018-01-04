<?php
	    include "koneksi.php";
	    $username		    = $_POST['username'];
	    $password			= $_POST['password'];
	    $nama				= $_POST['nama'];
	    $captcha 			= $_POST['captcha'];
	    $cek = mysqli_num_rows(mysqli_query($konek,"SELECT * FROM user WHERE username='$username'"));

		session_start();
		if($_SESSION['kodecap']==$_POST['captcha']){
			if($cek>0){
				echo "<script>alert('Username sudah ada')</script>";
		        echo "<meta http-equiv='refresh' content='1 url=daftar_user.php'>";
			}else{
			    $input    			= "INSERT INTO user (nama,username,password)
	            			   		VALUES ('$nama','$username','$password')";
	    		$query_input 		= mysqli_query($konek,$input);
				if ($query_input) {
					echo "<script>alert('Data Disimpan')</script>";
			       	echo "<meta http-equiv='refresh' content='1 url=login.php'>";
				}else {
				   	echo "<script>alert('Ulangi Data Belum Disimpan')</script>";
				   	echo "<meta http-equiv='refresh' content='1 url=daftar_userphp'>";
	    		}
			}
	    }else{
			echo "<script>alert('Captcha salah')</script>";
			echo "<meta http-equiv='refresh' content='1 url=daftar_user.php'>";
		}
	    
?>