<?php
switch($_GET['id']){
default:?>
<div class="well">
            <h2 class="judul">DATA BARANG</h2>
            <a href="?page=databarang&id=15">
            <button class="btn btn-warning atas"><span class="glyphicon glyphicon-plus"></span>Tambah Barang</button>
            </a>
            <div class="table-responsive">
            <table id="ngoding" class="table table-striped table-bordered" cellspacing="0" width="100%" style="font-size: 13px">
            <thead>
            <tr>
                <th>Kode Barang</th>
                <th>Nama Barang</th>
                <th>Gambar Barang</th>
                <th>Supplier</th>
                <th>Harga</th>
                <th>Satuan</th>
                <th>Stok</th>
                <th>Keterangan</th>
                <th>Aksi</th>
            </tr>
            </thead>
            <tfoot>
            <tr>
                <th>Kode Barang</th>
                <th>Nama Barang</th>
                <th>Gambar Barang</th>
                <th>Supplier</th>
                <th>Harga</th>
                <th>Satuan</th>
                <th>Stok</th>
                <th>Keterangan</th>
                <th>Aksi</th>
            </tr>
        </tfoot>
        <tbody>
            <?php
                include 'koneksi.php';
                $sql = mysqli_query($konek, "SELECT * from data_barang");
                while ($data = mysqli_fetch_array($sql)){
                ?>
            <tr>
                    <td><?php echo $data['kode_barang'];?></td>
                    <td><?php echo $data['nama_barang'];?></td>
                    <td><img class="gmbr" src="gambar/<?php echo $data['gambar_barang']; ?>" border="0"/></td>
                    <td><?php echo $data['supplier'];?></td>
                    <td><?php echo $data['harga'];?></td>
                    <td><?php echo $data['satuan'];?></td>
                    <td><?php echo $data['stok']?></td>
                    <td><?php echo $data['keterangan']?></td>
                    <td>
                        <a href="?page=databarang&id=20&kode_barang=<?=$data['kode_barang']?>"><button class="btn btn-warning"><span class="glyphicon glyphicon-pencil"></span>Edit</button></a>
                        <a href="delete-barang.php?kode_barang=<?=$data['kode_barang']?>"onclick="return confirm('Yakin akan dihapus ?');"><button class="btn btn-warning"><span class="glyphicon glyphicon-trash"></span>Hapus</button></a>
                    </td>
            </tr>
            <?php
            }
            ?>
        </tbody>
        </table>
    </div>
</div>
<?php
    break;
case '15':
    include 'tambah-barang.php';
    break;
case '20':
    include 'edit-barang.php';
    break;}  
?>