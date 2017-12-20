<?php
        session_start();
        if (empty($_SESSION['username']))
                {
                    header("location:login.php");
                }

?> 
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Cari Barang</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
  </head>
  <body>
    <div class="container-fluid">
        <div class="page-header">
            <h1>TOFAN <span>MOTOR</span></h1>
        </div>
    </div>

    <div class="container-fluid">
    <div class="row">
        <div class="col-sm-3 col-md-3">
            <div class="panel-group" id="accordion">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion"><span class="glyphicon glyphicon-home">
                            </span><a href="beranda.php">Beranda</a>
                        </h4>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"><span class="glyphicon glyphicon-th">
                            </span>Master Data</a>
                        </h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse">
                        <div class="panel-body">
                            <table class="table">
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-list-alt"></span><a href="data-barang.php">Data Barang</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-user"></span><a href="data-supplier.php">Data Supplier</a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree"><span class="glyphicon glyphicon-list-alt">
                            </span>Transaksi Data</a>
                        </h4>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse">
                        <div class="panel-body">
                            <table class="table">
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-arrow-down"></span><a href="INPT MSK.php">Data Barang Masuk</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-arrow-up"></span><a href="input_barang_keluar">Data Barang Keluar</a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour"><span class="glyphicon glyphicon-file">
                            </span>Laporan</a>
                        </h4>
                    </div>
                    <div id="collapseFour" class="panel-collapse collapse">
                        <div class="panel-body">
                            <table class="table">
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-arrow-down"></span><a href="http://www.jquery2dotnet.com">Barang Masuk</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-arrow-up"></span><a href="http://www.jquery2dotnet.com">Barang Keluar</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-tasks"></span><a href="http://www.jquery2dotnet.com">Data Stok Barang</a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" ><span class="glyphicon glyphicon-off">
                            </span>
                            <a href="logout.php"> 
                           Logout</a>
                        </h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-9 col-md-9">
            <div class="well">
                <h1 class="beranda"><span class="glyphicon glyphicon-bullhorn"></span>Selamat Datang Administrator TOFAN MOTOR</h1>
            <h2 class="judul">DATA BARANG</h2>
            <a href="tambah-barang.php">
            <button class="btn btn-warning atas"><span class="glyphicon glyphicon-plus"></span>Tambah Barang</button>
            </a>

            <form action="" method="POST">
                <input type="text" name="input_pencarian" placeholder="Nama Barang"></input>
                <input type="submit" name="cari_barang" value="Cari"></input>
            </form>

            <table class="table table-stripped">
                <tr>
                <th>Kode Barang</th>
                <th>Nama Barang</th>
                <th>Supplier</th>
                <th>Harga</th>
                <th>Satuan</th>
                <th>Stok</th>
                <th>Keterangan</th>
                <th>Aksi</th>
                </tr>
    <?php
        include 'koneksi.php';
        $input_pencarian = $_POST ['input_pencarian'];
        $cari_barang = $_POST ['cari_barang'];
        if ($cari_barang){
        if ($input_pencarian !=""){
                $sql = mysqli_query($konek,"SELECT * FROM data_barang where nama_barang like '%$input_pencarian%'") or die (mysqli_error());
        }else{
                $sql = mysqli_query($konek,"SELECT * FROM data_barang") or die (mysqli_error());
        }
        }else{
                $sql = mysqli_query($konek,"SELECT * FROM data_barang") or die (mysqli_error());
                }
        $cek = mysqli_num_rows($sql);
        if($cek < 1){
            ?>
            <tr>
                <td colspan="8" align="center" style="padding: 10px;">Data Tidak Ada</td>
            </tr>
            <?php
        }
        while ($data = mysqli_fetch_array($sql)){
        ?>
        <tr>
        <td><?php echo $data['kode_barang'];?></td>
        <td><?php echo $data['nama_barang'];?></td>
        <td><?php echo $data['supplier'];?></td>
        <td><?php echo $data['harga'];?></td>
        <td><?php echo $data['satuan'];?></td>
        <td><?php echo $data['stok']?></td>
        <td><?php echo $data['keterangan']?></td>
        <td>
            <a href="edit-barang.php?kode_barang=<?=$data['kode_barang']?>"><button class="btn btn-warning"><span class="glyphicon glyphicon-pencil"></span>Edit</button></a>
            <a href="delete-barang.php?kode_barang=<?=$data['kode_barang']?>"onclick="return confirm('Yakin akan dihapus ?');"><button class="btn btn-warning"><span class="glyphicon glyphicon-trash"></span>Hapus</button></a>
        </td>
        </tr>
        <?php
        }
        ?>
        </table>
        </div>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>