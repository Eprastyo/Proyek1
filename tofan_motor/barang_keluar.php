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

    <title>Data Barang Keluar</title>
    <script type="text/javascript" src="datatables/media/js/jquery.js"></script>
    <script type="text/javascript" src="datatables/media/js/jquery.dataTables.js"></script>
    <link rel="stylesheet" type="text/css" href="datatables/media/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="datatables/media/css/dataTables.bootstrap.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <script type="text/javascript">
    $(document).ready( function () {
        $('#ngoding').DataTable();
    } );
    </script>
    <script src="js/bootstrap.min.js"></script>
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
                            <a data-toggle="collapse" data-parent="#accordion" ><span class="glyphicon glyphicon-list-alt">
                            </span><a href="barang_keluar.php">Data Barang Keluar</a>
                        </h4>
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
                                        <span class="glyphicon glyphicon-arrow-up"></span><a href="laporan_barang_keluar.php">Barang Keluar</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-tasks"></span><a href="laporan_stok_barang.php">Data Stok Barang</a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion"><span class="glyphicon glyphicon-equalizer">
                            </span><a href="grafik.php">Perkembangan</a>
                        </h4>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" ><span class="glyphicon glyphicon-off">
                            </span><a href="logout.php">Logout</a>
                        </h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-9 col-md-9">
            <div class="well">
            <h2 class="judul">DATA BARANG KELUAR</h2>
            <a href="input_barang_keluar.php">
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
        </div>
    </div>
</div>
  </body>
</html>