<?php
switch($_GET['id']){
default:?>
<div class="well">
            <h2 class="judul">DATA BARANG KELUAR</h2>
            <a href="?page=barangkeluar&id=15">
            <button class="btn btn-warning atas"><span class="glyphicon glyphicon-plus"></span>INPUT BARANG KELUAR</button>
            </a>
            <div class="table-responsive">
            <table id="ngoding" class="table table-striped table-bordered" cellspacing="0" width="100%" style="font-size: 13px">
                <thead>
                    <tr>
                        <th>Nama Barang</th>
                        <th>Tanggal</th>
                        <th>Jumlah</th>
                        <th>Harga</th>
                        <th>Total Harga</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Nama Barang</th>
                        <th>Tanggal</th>
                        <th>Jumlah</th>
                        <th>Harga</th>
                        <th>Total Harga</th>
                        <th>Aksi</th>
                    </tr>
                </tfoot>
                <tbody>
                <?php
                include 'koneksi.php';
                $sql = mysqli_query($konek, "SELECT * from data_barang_keluar");
                while ($data = mysqli_fetch_array($sql)){
                ?>
                <tr>
                    <td><?php echo $data['nama_barang'];?></td>
                    <td><?php echo $data['tgl_keluar'];?></td>
                    <td><?php echo $data['jumlah'];?></td>
                    <td><?php echo $data['harga'];?></td>
                    <td><?php echo $data['total_harga'];?></td>
                    <td>
                        <a href="delete-barang-keluar.php?nama_barang=<?=$data['nama_barang']?>"onclick="return confirm('Yakin akan dihapus ?');"><button class="btn btn-warning"><span class="glyphicon glyphicon-trash"></span>Hapus</button></a>
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
    include 'input_barang_keluar.php';
    break;} 
?>