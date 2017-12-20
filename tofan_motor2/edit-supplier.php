 <?php
        session_start();
        if (empty($_SESSION['username']))
                {
                    header("location:login.php");
                }             
?> 
<?php
       include 'koneksi.php';
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Beranda</title>
    <script type="text/javascript" src="datatables/media/js/jquery.js"></script>
    <script type="text/javascript" src="datatables/media/js/jquery.dataTables.js"></script>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
        <script type="text/javascript">
        function goBack(){
            window.history.back();
        }
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
                            <a data-toggle="collapse" data-parent="#accordion"><span class="glyphicon glyphicon-home">
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
            <?php
               $data_edit = mysqli_query($konek,"SELECT * FROM data_supplier WHERE kode_supplier='".$_GET['kode_supplier']."'");
               $row       = mysqli_fetch_array($data_edit);
            ?> 
            <div class="well">
            <h2 class="judul">TAMBAH BARANG BARU</h2>
            <form action="simpan-supplier.php" method="POST" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-2">
                        Kode Supplier
                    </div>
                    <div class="col-md-10 inpt">
                        <input type="text" class="text" name="kode_supplier" value="<?php echo $row['kode_supplier']?>" disabled/></input>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2">
                        Nama Supplier
                    </div>
                    <div class="col-md-10 inpt">
                        <input type="text" class="text" name="nama_supplier" value="<?php echo $row['nama_supplier'] ?>"></input>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2">
                        Kontak
                    </div>
                    <div class="col-md-10 inpt">
                        <input type="text" class="text" name="kontak" value="<?php echo $row['kontak'] ?>"></input>
                    </div>
                </div>       
                <a onclick="goBack()" class="btn btn-warning">Batal</a>
                <input type="submit" value="Simpan" class="btn btn-warning"></input>
            </form>
            <?php
              if(isset($_POST['edit'])){
                     $update = mysqli_query($konek,"UPDATE data_supplier SET nama_supplier='".$_POST['nama_supplier']."',kontak='".$_POST['kontak']."' WHERE kode_supplier='".$_GET['kode_supplier']."'");
                     if($update){
                            echo "Data Telah Diupdate";
                     }else{
                            echo "Data Belum Disimpan";
                     }
              }
            ?>
            </div>
            </div>
        </div>
    </div>
</div>
  </body>
</html>