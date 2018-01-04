<div class="well">
            <h2 class="judul">INPUT BARANG KELUAR</h2>
            <form action="simpan_barang_keluar.php" method="POST" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-2">
                            Nama Barang
                        </div>
                        <div class="col-md-10 inpt">
                            <?php  
                            include 'koneksi.php'; 
                            $result = mysqli_query($konek,"select * from data_barang");
                            $jsArray = "var barang = new Array();\n";
                            echo '<select name="nama_barang" onchange="document.getElementById(\'harga\').value = barang[this.value]">';
                            echo '<option>--Pilih Nama Barang--</option>';
                            while ($row = mysqli_fetch_array($result)) {
                                echo '<option value="' . $row['nama_barang'] . '">' . $row['nama_barang'] . '</option>';
                                $jsArray .= "barang['" . $row['nama_barang'] . "'] = '" . addslashes($row['harga']) . "';\n";
                            }
                            echo '</select>';
                            ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            Harga
                        </div>
                        <div class="col-md-10 inpt">
                            <input type="text" name="harga" id="harga"/>
                            <script type="text/javascript">
                            <?php echo $jsArray; ?>
                            </script>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            Jumlah
                        </div>
                        <div class="col-md-10 inpt">
                            <input type="text" class="text" name="jumlah"></input>  
                        </div>
                    </div>
                <a onclick="goBack()" class="btn btn-warning">Batal</a>
                <input type="submit" value="Simpan" class="btn btn-warning">
                </form>
</div>