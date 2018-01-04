<html>
<head></head>
<body>
<h1 align="center">TOKO TOFAN MOTOR</h1>
<h4 align="center">JL.Raya Bangkir no 10 Indramayu</h4>
<table border="1" align="center" style="border-collapse: collapse;">
	<tr>
	<th>KODE BARANG</th>
	<th>NAMA BARANG</th>
	<th>SUPPLIER</th>
	<th>HARGA</th>
	<th>SATUAN</th>
	<th>STOK</th>
    <th>TANGGAL</th>
	</tr>
	<?php
                include 'koneksi.php';
                $sql = mysqli_query($konek, "SELECT * from data_barang");
                while ($data = mysqli_fetch_array($sql)){
                ?>
            <tr>
                    <td><?php echo $data['kode_barang'];?></td>
                    <td><?php echo $data['nama_barang'];?></td>
                    <td><?php echo $data['supplier'];?></td>
                    <td><?php echo $data['harga'];?></td>
                    <td><?php echo $data['satuan'];?></td>
                    <td><?php echo $data['stok']?></td>
                    <td><?php echo $data['tanggal']?></td>
            </tr>
    <?php
    }
    ?>
</table>
</body>
</html>