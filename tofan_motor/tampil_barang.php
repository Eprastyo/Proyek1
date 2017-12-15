<?php
        session_start();
        if (empty($_SESSION['username']))
                {
                    header("location:login.php");
                }             
?> 
<table border="0">
    <tr><th>ID USER</th><th>USERNAME</th><th>PASSWORD</th></tr>
    <?php
    include 'koneksi.php';
    $query = mysqli_query($konek, "SELECT * from data_barang");
    foreach ($query as $row){
        echo 
        "<tr>
            <td>".$row['kode_barang']."</td>
            <td>".$row['nama_barang']."</td>
            <td>".$row['supplier']."</td>
        </tr>";
    }
    ?>
</table>