<?php
include "koneksi.php";
$username = $_POST['username'];
$password = $_POST['password'];
$captcha = $_POST['captcha'];

if (empty($username)){
	echo "<script>alert('Username belum diisi')</script>";
	echo "<meta http-equiv='refresh' content='1 url=login.php'>";
}else if (empty($password)){
	echo "<script>alert('Password belum diisi')</script>";
	echo "<meta http-equiv='refresh' content='1 url=login.php'>";
}else if (empty($captcha)){
	echo "<script>alert('captcha belum diisi')</script>";
	echo "<meta http-equiv='refresh' content='1 url=login.php'>";
}else{
	
	session_start();

	$login = mysqli_query($konek,"select * from user where username='$username' and password='$password'");

	if (mysqli_num_rows($login) > 0){
		if($_SESSION['kodecap']==$_POST['captcha']){
			$_SESSION['username'] = $username;
			echo "<script>alert('Selamat Datang $username!')</script>";
			echo "<meta http-equiv='refresh' content='1 url=index.php'>";
		}
		else{
			echo "<script>alert('Captcha salah')</script>";
			echo "<meta http-equiv='refresh' content='1 url=login.php'>";
		}
	}
	else{
		echo "<script>alert('Username atau Password salah')</script>";
		echo "<meta http-equiv='refresh' content='1 url=login.php'>";
}
}
?>