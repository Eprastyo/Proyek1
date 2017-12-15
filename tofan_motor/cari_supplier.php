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

    <title>Cari Supplier</title>

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
                                        <span class="glyphicon glyphicon-arrow-down"></span><a href="Lap BRNG MSK.php">Data Barang Masuk</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-arrow-up"></span><a href="http://www.jquery2dotnet.com">Data Barang Keluar</a>
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
            <h2 class="judul">DATA SUPPLIER</h2>
            <a href="tambah_supplier.php">
            <button class="btn btn-warning atas"><span class="glyphicon glyphicon-plus"></span>Tambah Supplier</button>
            </a>
            <form action="cari_supplier.php" method="POST">
                <input type="text" name="input_pencarian" placeholder="Nama Supplier"></input>
                <input type="submit" name="cari_supplier" value="Cari"></input>
            </form>
            <table class="table table-stripped">
                <tr>
                <th>Kode Supplier</th>
                <th>Nama Supplier</th>
                <th>Kontak</th>
                <th>Aksi</th>
                </tr>
    <?php
        include 'koneksi.php';
        $input_pencarian = $_POST ['input_pencarian'];
        $cari_supplier = $_POST ['cari_supplier'];
        if ($cari_supplier){
        if ($input_pencarian !=""){
                $sql = mysqli_query($konek,"SELECT * FROM data_supplier where nama_supplier like '%$input_pencarian%'") or die (mysqli_error());
        }else{
                $sql = mysqli_query($konek,"SELECT * FROM data_supplier") or die (mysqli_error());
        }
        }else{
                $sql = mysqli_query($konek,"SELECT * FROM data_supplier") or die (mysqli_error());
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
        <td><?php echo $data['kode_supplier'];?></td>
        <td><?php echo $data['nama_supplier'];?></td>
        <td><?php echo $data['kontak'];?></td>
        <td>
            <a href="edit-barang.php?kode_barang=<?=$data['kode_supplier']?>"><button class="btn btn-warning"><span class="glyphicon glyphicon-pencil"></span>Edit</button></a>
            <a href="delete-barang.php?kode_barang=<?=$data['kode_supplier']?>"onclick="return confirm('Yakin akan dihapus ?');"><button class="btn btn-warning"><span class="glyphicon glyphicon-trash"></span>Hapus</button></a>
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