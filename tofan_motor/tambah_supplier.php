<div class="well">
            <h2 class="judul">TAMBAH SUPPLIER</h2>
			<form action="simpan-supplier.php" method="POST" enctype="multipart/form-data">
				<div class="row">
                    <div class="col-md-2">
                        Kode Supplier
                    </div>
                    <div class="col-md-10 inpt">
                        <input type="text" name="kode_supplier">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2">
                        Nama Supplier
                    </div>
                    <div class="col-md-10 inpt">
                        <input type="text" name="nama_supplier">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2">
                        No. Telp/HP
                    </div>
                    <div class="col-md-10 inpt">
                        <input type="text" name="kontak"><br>
                    </div>
                </div>
            <a onclick="goBack()" class="btn btn-warning">Batal</a>
			<input type="submit" value="simpan" class="btn btn-warning">
			</form>
</div>