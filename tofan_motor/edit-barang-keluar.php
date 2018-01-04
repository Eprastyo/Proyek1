<?php
               include 'koneksi.php';
               $data_edit = mysqli_query($konek,"SELECT * FROM data_barang_keluar WHERE nama_barang='".$_GET['nama_barang']."'");
               $row       = mysqli_fetch_array($data_edit);
            ?> 
            <div class="well">
            <h2 class="judul">EDIT BARANG KELUAR</h2>
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-2">
                        Nama Barang
                    </div>
                    <div class="col-md-10 inpt">
                        <input type="text" class="text" name="nama_barang" value="<?php echo $row['nama_barang']?>" disabled/></input>
                    </div>
                </div>
                 <div class="row">
                    <div class="col-md-2">
                        Jumlah
                    </div>
                    <div class="col-md-10 inpt">
                        <input type="text" class="text" name="jumlah" value="<?php echo $row['jumlah'] ?>"></input>
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
                <a onclick="goBack()" class="btn btn-warning">Batal</a>
                <input type="submit" value="Simpan" class="btn btn-warning"></input>
            </form>
            <?php
              if(isset($_POST['edit'])){

                $jumlah = $_POST['jumlah'];
                $harga  = $_POST['harga'];
                $total  = $jumlah*$harga;

                    $update = mysqli_query($konek,"UPDATE data_barang_keluar SET jumlah='".$_POST['jumlah']."',harga='".$_POST['harga']."' total_harga=$total WHERE nama_barang='".$_GET['nama_barang']."'");

                     if($update){
                            echo "<script>alert('Data Telah Diupdate')</script>";
                           echo "<meta http-equiv='refresh' content='1 url=index.php?page=barangkeluar&id=10'>";
                     }else{
                            echo "<script>alert('Data Belum Disimpan')</script>";
                           echo "<meta http-equiv='refresh' content='1 url=index.php?page=barangkeluar&id=10'>";
                     }
              }
            ?>
</div>