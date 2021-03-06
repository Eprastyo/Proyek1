<?php
        session_start();
        if (empty($_SESSION['username']))
                {
                    header("location:login.php");
                }             
?> 
<html>
<head>
	<title>TOFAN MOTOR</title>
	<link rel="stylesheet" type="text/css" href="css.css">
</head>
<body>
	<div class="header">
		<h1>TOFAN <span>MOTOR</span></h1>
	</div>
	<div class="container">
		<div class="side">
			<ul>
				<li><a href="beranda.php" id="beranda">Beranda</a></li>
				<li>
					<button class="accordion">Master Data</button>
					<div class="panel">
						<a href="data-barang.php">Data Barang</a>
						<a href="data-supplier.php">Data Supplier</a>
					</div>
				</li>
				<li>
					<button class="accordion">Transaksi Data</button>
					<div class="panel">
						<a href="INPT MSK.php">Data Barang Masuk</a>
						<a href="INPT BARU.php">Data Barang Keluar</a>
					</div>
				</li>
				<li>
					<button class="accordion">Laporan</button>
					<div class="panel">
						<a href="LAP BRNG MSK.php">Barang Masuk</a>
                        <a href="LAP BRNG KEL.php">Barang Keluar</a>
                        <a href="stok-barang.php">Data Stok Barang</a>
					</div>
				</li>
				<li><a href="logout.php">Logout</a></li>
			</ul>
		</div>
		<div class="content">
			<h2 id="pendek">INPUT BARANG MASUK</h2>
			<table id="tabletop">
				<tr>
					<th width="45%">Nama Barang</th>
					<th width="45%">Jumlah</th>
					<th>Aksi</th>
				</tr>
				<tr>
					<td>
						<input class="pilih" list="barang" placeholder="Pilih Barang">
						<datalist id="barang">
						<option value="Ban">
						<option value="Oli">
						<option value="Lainnya">
						</datalist>
					</td>
					<td>
						<input type="text" name="jumlah">
					</td>
					<td>
						<button>Tambah</button>
					</td>
				</tr>
			</table>
			<table id="tablebot">
				<tr>
					<th>No</th>
					<th width="150px">Kode Barang</th>
					<th width="250px">Nama Barang</th>
					<th>Jumlah</th>
					<th>Satuan</th>
					<th width="160px">Harga</th>
					<th width="250px">Total Harga</th>
					<th width="100px">Hapus</th>
				</tr>
				<tr> 
					<th colspan="6"s>Total Harga</th>
					<td>Rp.,-</td>
					<td>
					
					</td>
				</tr>
				<table>
					<tr>
						<td id="tablebott" width="20%">Kode Barang Masuk</td>
						<td id="tablebott">
							<input type="text" name="brngkel">
						</td>
					</tr>
					<tr>
						<td>Tanggal Keluar</td>
						<td>
							<input type="text" name="tglkel">
						</td>
					</tr>
					<tr>
						<td>Supplier</td>
						<td>
							<input type="text" name="tglkel">
						</td>
					</tr>
					<tr>
						<td colspan="2">
							<button>Simpan</button>
						</td>
					</tr>
				</table>
			</table>
		</div>
	</div>
	<div class="footer"></div>
	<script>
		var acc = document.getElementsByClassName("accordion");
		var i;

		for (i = 0; i < acc.length; i++) {
    		acc[i].onclick = function(){
        	this.classList.toggle("active");
        	var panel = this.nextElementSibling;
        	if (panel.style.display === "block") {
            panel.style.display = "none";
        	} else {
            panel.style.display = "block";
        		}
    		}
		}
	</script>
</body>
</html>