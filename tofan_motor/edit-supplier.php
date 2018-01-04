<?php
          include 'koneksi.php';
          $data_edit = mysqli_query($konek,"SELECT * FROM data_supplier WHERE kode_supplier='".$_GET['kode_supplier']."'");
          $row       = mysqli_fetch_array($data_edit);
            ?> 
            <div class="well">
            <h2 class="judul">TAMBAH BARANG BARU</h2>
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-2">
                        Kode Supplier
                    </div>
                    <div class="col-md-10 inpt">
                        <input type="text" class="text" name="kode_supplier" value="<?php echo $row['kode_supplier']?>" disabled/></input>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2">
                        Nama Supplier
                    </div>
                    <div class="col-md-10 inpt">
                        <input type="text" class="text" name="nama_supplier" value="<?php echo $row['nama_supplier'] ?>"></input>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2">
                        Kontak
                    </div>
                    <div class="col-md-10 inpt">
                        <input type="text" class="text" name="kontak" value="<?php echo $row['kontak'] ?>"></input>
                    </div>
                </div>       
                <a onclick="goBack()" class="btn btn-warning">Batal</a>
                <input type="submit" value="Edit" name="edit" class="btn btn-warning"></input>
            </form>
            <?php
              if(isset($_POST['edit'])){
                     $update = mysqli_query($konek,"UPDATE data_supplier SET nama_supplier='".$_POST['nama_supplier']."',kontak='".$_POST['kontak']."' WHERE kode_supplier='".$_GET['kode_supplier']."'");
                     if($update){
                            echo "<script>alert('Data Telah Diupdate')</script>";
                            echo "<meta http-equiv='refresh' content='1 url=index.php?page=datasupplier&id=10'>";
                     }else{
                           echo "<script>alert('Data Belum Disimpan')</script>";
                           echo "<meta http-equiv='refresh' content='1 url=index.php?page=datasupplier&id=10'>";
                     }
              }
            ?>
</div>