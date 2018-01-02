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

    <title>Laporan Stok Barang</title>
    <script type="text/javascript" src="datatables/media/js/jquery.js"></script>
    <script type="text/javascript" src="datatables/media/js/jquery.dataTables.js"></script>
    <script src="js/jquery-3.2.1.min.js"></script>
    <link rel="stylesheet" type="text/css" href="datatables/media/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="datatables/media/css/dataTables.bootstrap.css">
    <link rel="stylesheet" href="datepicker/css/bootstrap-datepicker3.css"/>
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
			<h2 class="judul">LAPORAN STOK BARANG</h2>
			<form method="post" action="lapakhirbarang.php">
            <label>
                <input id="semua" type="radio" name="laporan" value="semua">Semua Data</input>
            </label><br>
            <label>
                <input  id="tgl" type="radio" name="laporan" value="tgl">Tanggal</input>
            </label>
            <form method="post" action="tampil_laporan_stok_barang.php">
            <input type="text" name="tanggal" id="tanggal" class="tanggal"/><br>
            <input type="submit" name="submit" class="btn btn-warning">
            </form>
            </form>
            </div>
            </div>
        </div>
    </div>
</div>
    <script src="js/bootstrap.min.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
    <script src="datepicker/js/bootstrap-datepicker.js"></script>
    <script type="text/javascript">
            $(document).ready(function () {
                $('#tanggal').datepicker({
                    format: "yyyy-mm-dd",
                    autoclose:true
                });
            });
    </script>
  </body>
</html>