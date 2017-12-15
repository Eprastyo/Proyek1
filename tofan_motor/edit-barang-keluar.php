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
<html>
<head>
    <title>TOFAN MOTOR</title>
    <link rel="stylesheet" type="text/css" href="css.css">
</head>
<body> 
       <?php
       $data_edit = mysqli_query($konek,"SELECT * FROM data_barang_keluar WHERE nama_barang='".$_GET['nama_barang']."'");
       $row       = mysqli_fetch_array($data_edit);
       ?> 
    <div class="header">
        <h1>TOFAN <span>MOTOR</span></h1>
    </div>
    <div class="container">
        <div class="side">
           <ul>
                <li><a href="beranda.php">Beranda</a></li>
                <li>
                    <button class="accordion">Master Data</button>
                    <div class="panel">
                        <a href="data-barang.php">Data Barang</a>
                        <a href="data-supplier.php">Data Supplier</a>
                    </div>
                </li>
                <li>
                    <button class="accordion">Transaksi Data</button>
                    <div class="panel">
                        <a href="INPT BARU.php">Data Barang Keluar</a>
                    </div>
                </li>
                <li>
                    <button class="accordion">Laporan</button>
                    <div class="panel">
                        <a href="LAP BRNG KEL.php">Barang Keluar</a>
                        <a href="stok-barang.php">Data Stok Barang</a>
                    </div>
                </li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </div>
        <div class="content">
            <h2 id="pendek">EDIT BARANG KELUAR</h2>
            <form action="" method="POST" enctype="multipart/form-data">
                <table class="tabeltambah">
                <tr>
                        <td width="250">Nama Barang</td>
                        <td width="700"><input type="text" class="text" name="nama_barang" value="<?php echo $row['nama_barang']?>" disabled/></input></td>
                    </tr>
                    <tr>
                        <td>Jumlah</td>
                        <td><input type="text" class="text" name="jumlah" value="<?php echo $row['jumlah'] ?>"></input></td>
                    </tr>
                    <tr>
                        <td>Harga</td>
                        <td><input type="text" class="text" name="harga" value="<?php echo $row['harga'] ?>"></input></td>
                    </tr>
                </table>
                <br>
                <input type="reset" value="Batal"></input>
                <input type="submit" value="Edit" name="edit"></input>
            </form>
            <?php
              if(isset($_POST['edit'])){

                $jumlah = $_POST['jumlah'];
                $harga  = $_POST['harga'];
                $total  = $jumlah*$harga;

                    $update = mysqli_query($konek,"UPDATE data_barang_keluar SET jumlah='".$_POST['jumlah']."',harga='".$_POST['harga']."' total_harga=$total WHERE nama_barang='".$_GET['nama_barang']."'");

                     if($update){
                            echo "Data Telah Diupdate";
                     }else{
                            echo "Data Belum Disimpan";
                     }
              }
            ?>
        </div>
    </div>
    <div class="footer"></div>
    <script>
        var acc = document.getElementsByClassName("accordion");
        var i;

        for (i = 0; i < acc.length; i++) {
            acc[i].onclick = function(){
            this.classList.toggle("active");
            var panel = this.nextElementSibling;
            if (panel.style.display === "block") {
            panel.style.display = "none";
            } else {
            panel.style.display = "block";
                }
            }
        }
    </script>
</body>
</html>
<style type="text/css">
    .header a.judul{
        font-size:200%; 
        color:#fff;
    }
    .content{
        background:white; 
        min-height:550px; 
        padding:10px;
    }
    .tabeltambah td{
        padding: 10px;
        margin: 5px;
    }
    .text{
        width: 700px;
    }
    #kiri{
        width:20%;
        float:left;
    }
    #leftmenu {
        width:130px;
        font:bold 12px arial,verdana,sans-serif;
    }
    #leftmenu li a {
        text-decoration:none;
        border-top:1px solid #ffffff;
        color:#000000;
        display:block;
        background-color:#e0e0e0;
        padding:10px;
    }
    #leftmenu li a:hover {
        background-color:#f0f0f0;
    }
    #leftmenu ul {
        list-style:none;
        padding:0px;
    }
    #leftmenu ul ul{
        position:absolute;
        visibility:hidden;
    } 
    #leftmenu ul li:hover ul{
        visibility:visible;
        position: absolute;
    }
    #kanan{
        width:80%;
        float:right;
    }
    .footer{
        background:#333; 
        padding:10px; 
        color:#ccc;
    }
</style>