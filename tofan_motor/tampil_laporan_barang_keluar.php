<html>
<head></head>
<body>
<h1 align="center">TOKO TOFAN MOTOR</h1>
<h4 align="center">JL.Raya Bangkir no 10 Indramayu</h4>
<H2>Laporan Barang Keluar</H2>
<table border="1" align="center" style="border-collapse: collapse;">
    <tr>
    <th>TANGGAL</th>
    <th>NAMA BARANG</th>
    <th>JUMLAH</th>
    <th>HARGA</th>
    <th>TOTAL HARGA</th>
    </tr>
    <?php
                include 'koneksi.php';
                $sql = mysqli_query($konek, "SELECT * from data_barang_keluar");
                while ($data = mysqli_fetch_array($sql)){
                ?>
            <tr>
                    <td><?php echo $data['tgl_keluar'];?></td>
                    <td><?php echo $data['nama_barang'];?></td>
                    <td><?php echo $data['jumlah'];?></td>
                    <td><?php echo $data['harga'];?></td>
                    <td><?php echo $data['total_harga'];?></td>
            </tr>
    <?php
    }
    ?>
</table>
</body>
</html>