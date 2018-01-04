<?php
               include "koneksi.php";
               $data_edit = mysqli_query($konek,"SELECT * FROM data_barang WHERE kode_barang='".$_GET['kode_barang']."'");
               $row       = mysqli_fetch_array($data_edit);
               ?> 
            <div class="well">
            <h2 class="judul">EDIT BARANG</h2>
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-2">
                        Kode Barang
                    </div>
                    <div class="col-md-10 inpt">
                        <input type="text" class="text" name="kode_barang" value="<?php echo $row['kode_barang']?>" disabled/></input>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2">
                        Nama Barang
                    </div>
                    <div class="col-md-10 inpt">
                        <input type="text" class="text" name="nama_barang" value="<?php echo $row['nama_barang'] ?>"></input>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2">
                        Nama Supplier
                    </div>
                    <div class="col-md-3 inpt">
                        <select name="supplier">
                         <?php
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
                        <input type="text" class="text" name="harga" value="<?php echo $row['harga'] ?>"></input>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2">
                        Satuan
                    </div>
                    <div class="col-md-10 inpt">
                        <input type="text" class="text" name="satuan" value="<?php echo $row['satuan'] ?>"></input>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2">
                        Stok
                    </div>
                    <div class="col-md-10 inpt">
                        <input type="text" class="text" name="stok" value="<?php echo $row['stok'] ?>"></input>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2">
                        Keterangan
                    </div>
                    <div class="col-md-10 inpt">
                        <input type="text" class="text" name="keterangan" value="<?php echo $row['keterangan'] ?>"></input>
                    </div>
                </div>        
                <a onclick="goBack()" class="btn btn-warning">Batal</a>
                <input type="submit" value="Edit" name="edit" class="btn btn-warning"></input>
            </form>
            <?php
              if(isset($_POST['edit'])){
                     $update = mysqli_query($konek,"UPDATE data_barang SET nama_barang='".$_POST['nama_barang']."',supplier='".$_POST['supplier']."',harga='".$_POST['harga']."',satuan='".$_POST['satuan']."',stok='".$_POST['stok']."',keterangan='".$_POST['keterangan']."' WHERE kode_barang='".$_GET['kode_barang']."'");
                     if($update){
                           echo "<script>alert('Data Telah Diupdate')</script>";
                           echo "<meta http-equiv='refresh' content='1 url=index.php?page=databarang&id=10'>";

                     }else{
                           echo "<script>alert('Data Belum Disimpan')</script>";
                           echo "<meta http-equiv='refresh' content='1 url=index.php?page=databarang&id=10'>";
                     }
              }
            ?>
            </div>