<?php
	    include "koneksi.php";
	    $kode_barang		    = $_POST['kode_barang'];
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
        if($nama_barang==$data['nama_barang']){
        	mysqli_query($konek,"UPDATE data_barang SET stok=stok+$stok where nama_barang='$nama_barang'");
        	echo "<script>alert('Data Disimpan')</script>";
	        echo "<meta http-equiv='refresh' content='1 url=data-barang.php'>"; 
        }
        else if ($kode_barang==''|$nama_barang==''|$harga==''|$satuan==''|$stok==''|$keterangan==''){
        	echo "<script>alert('Harap diisi Semua')</script>";
        	echo "<meta http-equiv='refresh' content='1 url=tambah-barang.php'>"; 
        }
        else{
        	if (!empty($_FILES["gambar_barang"]["tmp_name"]))
			{
			    $jenis_gambar=$_FILES['gambar_barang']['type'];
			    if($jenis_gambar=="image/jpeg" || $jenis_gambar=="image/jpg" || $jenis_gambar=="image/gif" || $jenis_gambar=="image/png")
			    {           
			        if (move_uploaded_file($_FILES['gambar_barang']['tmp_name'], $namafolder)) {
			            mysqli_query($konek,"INSERT INTO data_barang (kode_barang,nama_barang,gambar_barang,supplier,harga,satuan,stok,keterangan,tanggal)
				        VALUES ('$kode_barang','$nama_barang','$nama_file','$supplier','$harga','$satuan','$stok','$keterangan','$tanggal')");
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
        }
?>