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

    <title>Tambah Barang</title>
    <script type="text/javascript" src="datatables/media/js/jquery.js"></script>
    <script type="text/javascript" src="datatables/media/js/jquery.dataTables.js"></script>
    
    <link rel="stylesheet" type="text/css" href="datatables/media/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="datatables/media/css/dataTables.bootstrap.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <script type="text/javascript">
        function goBack(){
            window.history.back();
        }
    </script>

    <script type="text/javascript" src="tinymce/tinymce.min.js"></script>
    <script type="text/javascript">
    tinyMCE.init({
    selector : "textarea"
    });
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
            <h2 class="judul">TAMBAH BARANG BARU</h2>
            <form action="simpan-barang.php" method="POST" enctype="multipart/form-data">
                       <div class="row">
                    <div class="col-md-2">
                        Kode Barang
                    </div>
                    <div class="col-md-10 inpt">
                        <input type="text" name="kode_barang">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2">
                        Nama Barang
                    </div>
                    <div class="col-md-10 inpt">
                        <input type="text" name="nama_barang">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2">
                        Gambar Barang
                    </div>
                    <div class="col-md-10 inpt">
                        <input type="file" name="gambar_barang">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2">
                        Nama Supplier
                    </div>
                    <div class="col-md-3 inpt">
                        <select name="supplier">
                         <?php
                        include "koneksi.php";
                        $query = "select * from data_supplier";
                        $hasil = mysqli_query($konek,$query);
                        while ($qtabel = mysqli_fetch_assoc($hasil))
                        { 
                            echo "<option value=".$qtabel['nama_supplier'].">".$qtabel['nama_supplier']." </option>";
                        }
                        ?>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2">
                        Harga
                    </div>
                    <div class="col-md-10 inpt">
                        <input type="text" name="harga">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2">
                        Satuan
                    </div>
                    <div class="col-md-10 inpt">
                        <input type="text" name="satuan">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2">
                        Stok
                    </div>
                    <div class="col-md-10 inpt">
                        <input type="text" name="stok">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2">
                        Keterangan
                    </div>
                    
                    <div class="col-md-6 inpt">
                        <textarea name="keterangan"></textarea>
                    </div>
                </div>  
                <a onclick="goBack()" class="btn btn-warning">Batal</a>
                <input type="submit" value="Simpan" class="btn btn-warning"></input>
            </form>
            </div>
            </div>
        </div>
    </div>
</div>
  </body>
</html>