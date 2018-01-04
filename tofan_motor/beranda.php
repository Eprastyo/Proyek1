<div class="well">
		<h2 class="judul">DATA BARANG</h2>
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
                    </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
</div>