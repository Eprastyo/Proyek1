<div class="well">
            <h2 class="judul">TAMBAH BARANG BARU</h2>
            <form action="simpan-barang.php" method="POST" enctype="multipart/form-data">
                       <div class="row">
                    <div class="col-md-2">
                        Kode Barang
                    </div>
                    <div class="col-md-10 inpt">
                        <input type="text" name="kode_barang">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2">
                        Nama Barang
                    </div>
                    <div class="col-md-10 inpt">
                        <input type="text" name="nama_barang">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2">
                        Gambar Barang
                    </div>
                    <div class="col-md-10 inpt">
                        <input type="file" name="gambar_barang">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2">
                        Nama Supplier
                    </div>
                    <div class="col-md-3 inpt">
                        <select name="supplier">
                         <?php
                        include "koneksi.php";
                        $query = "select * from data_supplier";
                        $hasil = mysqli_query($konek,$query);
                        while ($qtabel = mysqli_fetch_assoc($hasil))
                        { 
                            echo "<option value=".$qtabel['nama_supplier'].">".$qtabel['nama_supplier']." </option>";
                        }
                        ?>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2">
                        Harga
                    </div>
                    <div class="col-md-10 inpt">
                        <input type="text" name="harga">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2">
                        Satuan
                    </div>
                    <div class="col-md-10 inpt">
                        <input type="text" name="satuan">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2">
                        Stok
                    </div>
                    <div class="col-md-10 inpt">
                        <input type="text" name="stok">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2">
                        Keterangan
                    </div>
                    
                    <div class="col-md-6 inpt">
                        <textarea name="keterangan"></textarea>
                    </div>
                </div>  
                <a onclick="goBack()" class="btn btn-warning">Batal</a>
                <input type="submit" value="Simpan" class="btn btn-warning"></input>
            </form>
</div>