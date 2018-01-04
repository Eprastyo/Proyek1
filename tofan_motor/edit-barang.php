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

    <title>Edit Barang</title>
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
            <?php
               $data_edit = mysqli_query($konek,"SELECT * FROM data_barang WHERE kode_barang='".$_GET['kode_barang']."'");
               $row       = mysqli_fetch_array($data_edit);
               ?> 
            <div class="well">
            <h2 class="judul">EDIT BARANG</h2>
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-2">
                        Kode Barang
                    </div>
                    <div class="col-md-10 inpt">
                        <input type="text" class="text" name="kode_barang" value="<?php echo $row['kode_barang']?>" disabled/></input>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2">
                        Nama Barang
                    </div>
                    <div class="col-md-10 inpt">
                        <input type="text" class="text" name="nama_barang" value="<?php echo $row['nama_barang'] ?>"></input>
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
                        <input type="text" class="text" name="harga" value="<?php echo $row['harga'] ?>"></input>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2">
                        Satuan
                    </div>
                    <div class="col-md-10 inpt">
                        <input type="text" class="text" name="satuan" value="<?php echo $row['satuan'] ?>"></input>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2">
                        Stok
                    </div>
                    <div class="col-md-10 inpt">
                        <input type="text" class="text" name="stok" value="<?php echo $row['stok'] ?>"></input>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2">
                        Keterangan
                    </div>
                    <div class="col-md-10 inpt">
                        <input type="text" class="text" name="keterangan" value="<?php echo $row['keterangan'] ?>"></input>
                    </div>
                </div>        
                <a onclick="goBack()" class="btn btn-warning">Batal</a>
                <input type="submit" value="Edit" name="edit" class="btn btn-warning"></input>
            </form>
            <?php
              if(isset($_POST['edit'])){
                     $update = mysqli_query($konek,"UPDATE data_barang SET nama_barang='".$_POST['nama_barang']."',supplier='".$_POST['supplier']."',harga='".$_POST['harga']."',satuan='".$_POST['satuan']."',stok='".$_POST['stok']."',keterangan='".$_POST['keterangan']."' WHERE kode_barang='".$_GET['kode_barang']."'");
                     if($update){
                           echo "<script>alert('Data Telah Diupdate')</script>";
                           echo "<meta http-equiv='refresh' content='1 url=beranda.php'>";

                     }else{
                           echo "Data Belum Disimpan";
                           echo "<meta http-equiv='refresh' content='1 url=beranda.php'>";
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