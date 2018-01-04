<?php
include 'koneksi.php';
switch($_GET['id']){
default:?>
<div class="well">
    <h2 class="judul">DATA SUPPLIER</h2>
    <a href="?page=datasupplier&id=15">
        <button class="btn btn-warning atas"><span class="glyphicon glyphicon-plus"></span>Tambah Supplier</button>
    </a>
    <div class="table-responsive">
        <table id="ngoding" class="table table-striped table-bordered" cellspacing="0" width="100%" style="font-size: 13px">
            <thead>
                <tr>
                <th>Kode Supplier</th>
                <th>Nama Supplier</th>
                <th>Kontak</th>
                <th>Aksi</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                <th>Kode Supplier</th>
                <th>Nama Supplier</th>
                <th>Kontak</th>
                <th>Aksi</th>
                </tr>
            </tfoot>
            <tbody>
                <?php
                include 'koneksi.php';
                $query = mysqli_query($konek, "SELECT * from data_supplier");
                while ($data = mysqli_fetch_array($query)){
                ?>
                <tr>
                    <td><?php echo $data['kode_supplier'];?></td>
                    <td><?php echo $data['nama_supplier'];?></td>
                    <td><?php echo $data['kontak'];?></td>
                    <td>
                        <a href="?page=datasupplier&id=20&kode_supplier=<?=$data['kode_supplier']?>"><button class="btn btn-warning"><span class="glyphicon glyphicon-pencil"></span>Edit</button></a>
                        <a href="delete-supplier.php?kode_supplier=<?=$data['kode_supplier']?>"onclick="return confirm('Yakin akan dihapus ?');"><button class="btn btn-warning"><span class="glyphicon glyphicon-trash"></span>Hapus</button></a>
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
    include 'tambah_supplier.php';
    break;
case '20':
    include 'edit-supplier.php';
    break;}  
?>