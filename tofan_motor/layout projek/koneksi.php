<?php
$host = mysql_connect("localhost","root","");
if($host){
	echo "Koneksi berhasil<br/>";
}else{
	echo "Koneksi Gagal";
}
$db = mysql_select_db("penjualan");
if($db){
	echo "Koneksi database berhasil";
}else{
	echo "Koneksi database gagal";
}

?>
