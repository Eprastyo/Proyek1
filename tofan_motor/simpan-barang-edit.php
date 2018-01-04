<?php
	    include "koneksi.php";
	    $nama_barang			= $_POST['nama_barang'];
	    $supplier				= $_POST['supplier'];
	    $harga		          	= $_POST['harga'];
		$satuan					= $_POST['satuan'];
		$stok					= $_POST['stok'];
		$keterangan				= $_POST['keterangan'];
		$nama_file   			= $_FILES['gambar_barang']['name'];
		$namafolder				= "gambar/$nama_file";
		$tanggal				= date("Y-m-d");

		$sql = mysqli_query($konek, "SELECT nama_barang FROM data_barang");
        $data = mysqli_fetch_array($sql);

	    if (!empty($_FILES["gambar_barang"]["tmp_name"]))
			{
			    $jenis_gambar=$_FILES['gambar_barang']['type'];
			    if($jenis_gambar=="image/jpeg" || $jenis_gambar=="image/jpg" || $jenis_gambar=="image/gif" || $jenis_gambar=="image/png")
			    {           
			        if (move_uploaded_file($_FILES['gambar_barang']['tmp_name'], $namafolder)) {
			            mysqli_query($konek,"INSERT INTO data_barang (gambar_barang) VALUES ('$nama_file') ");
			            mysqli_query($konek,"UPDATE data_barang SET nama_barang=$nama_barang,gambar_barang=$nama_file,supplier=$supplier,harga=$harga,satuan=$satuan,stok=$stok,keterangan=$keterangan where nama_barang='$nama_barang'");
				        echo "<script>alert('Data Disimpan')</script>";
				        echo "<meta http-equiv='refresh' content='1 url=data-barang.php'>"; 
			        } else {
			           echo "Data gagal disimpan";
			        }
			   } else {
			        echo "Jenis gambar yang anda kirim salah. Harus .jpg .gif .png";
			   }
			} else {
			    echo "Anda belum memilih gambar";
			}
?>