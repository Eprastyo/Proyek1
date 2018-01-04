<div class="well">
	<h2 class="judul">LAPORAN STOK BARANG</h2>
	<form method="post" action="lapakhirbarang.php">
        <label>
            <input id="semua" type="radio" name="laporan" value="semua" checked>Semua Data</input>
        </label><br>
        <label>
            <input  id="tgl" type="radio" name="laporan" value="tgl">Tanggal</input>
        </label>
        <form method="post" action="tampil_laporan_stok_barang.php">
            <input type="text" name="tanggal" id="tanggal" class="tanggal"/><br>
            <input type="submit" name="submit" class="btn btn-warning">
        </form>
    </form>
</div>