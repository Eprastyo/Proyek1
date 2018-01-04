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
    <title>Tofan Motor</title>
    <script type="text/javascript" src="datatables/media/js/jquery.js"></script>
    <script type="text/javascript" src="datatables/media/js/jquery.dataTables.js"></script>
    <script src="js/jquery-3.2.1.min.js"></script>
    <link rel="stylesheet" type="text/css" href="datatables/media/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="datatables/media/css/dataTables.bootstrap.css">
    <link rel="stylesheet" href="datepicker/css/bootstrap-datepicker3.css"/>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <script type="text/javascript">
    $(document).ready( function () {
        $('#ngoding').DataTable();
    } );
    </script>
        <script type="text/javascript">
        function goBack(){
            window.history.back();
        }
    </script>
    <script type="text/javascript" src="tinymce/tinymce.min.js"></script>
    <script type="text/javascript">
    tinyMCE.init({
    // General options
    selector : "textarea"
    });
    </script>
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
                            </span><a href="?page=beranda">Beranda</a>
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
                                        <span class="glyphicon glyphicon-list-alt"></span><a href="?page=databarang&id=10">Data Barang</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-user"></span><a href="?page=datasupplier&id=10">Data Supplier</a>
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
                            </span><a href="?page=barangkeluar&id=10">Data Barang Keluar</a>
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
                                        <span class="glyphicon glyphicon-arrow-up"></span><a href="?page=lapbarangkeluar">Barang Keluar</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-tasks"></span><a href="?page=lapstokbarang">Data Stok Barang</a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion"><span class="glyphicon glyphicon-home">
                            </span><a href="?page=grafik">Perkembangan</a>
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
            <?php 
                if(isset($_GET['page'])){
                    $page = $_GET['page'];
             
                    switch ($page) {
                        case 'beranda':
                            include "beranda.php";
                            break;
                        case 'databarang':
                            include "data-barang.php";
                            break;
                        case 'datasupplier':
                            include "data-supplier.php";
                            break;
                        case 'barangkeluar':
                            include "barang_keluar.php";
                            break;
                        case 'lapbarangkeluar':
                            include "laporan_barang_keluar.php";
                            break;
                        case 'lapstokbarang':
                            include "laporan_stok_barang.php";
                            break;
                        case 'grafik':
                            include "grafik.php";
                            break;        
                        default:
                            echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
                            break;
                    }
                }else{
                    include "beranda.php";
                }
             
            ?>
        </div>
    </div>
</div>

  </body>
</html>