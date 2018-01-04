<div class="well">
		<h2 class="judul">LAPORAN BARANG KELUAR</h2>
        <form method="post" action="lapakhirbarangkeluar.php">
		<label>
			<input id="semua" type="radio" name="laporan" value="semua" checked>Semua Data</input>
		</label><br>
		<label>
			<input  id="tgl" type="radio" name="laporan" value="tgl">Tanggal</input>
		</label>
        <form method="post" action="tampil_laporan_barang_keluar_tgl.php">
            <input type="text" name="tanggal" id="tanggal" class="tanggal"/><br>
            <input type="submit" name="submit" class="btn btn-warning">
        </form>
    </form>
</div>