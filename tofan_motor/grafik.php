<div id="grafik_databarang"></div>

<?php
include 'koneksi.php';
?>

<?php
    include 'koneksi.php';
    $sql = mysqli_query($konek, "SELECT * from data_barang_keluar");
    $nama_brg = array();
    $jml_brg = array();
    while ($data = mysqli_fetch_array($sql)){
    $nama_brg[]  = $data['nama_barang'];
    $jml_brg[]   = intval($data['jumlah']);
?>

<script src="highcharts/highcharts.js"></script>
<script src="highcharts/exporting.js"></script>
<script type="text/javascript">
    Highcharts.chart('grafik_databarang', {
    chart: {
        type: 'area'
    },
    title: {
        text: 'Grafik Penjualan Barang Keluar'
    },
    subtitle: {
        text: 'Source: Tofan Motor'
    },
    xAxis: {
        categories: <?=json_encode($nama_brg);?>,
        tickmarkPlacement: 'on',
        title: {
            enabled: false
        }
    },
    yAxis: {
        title: {
            text: 'Jumlah Barang'
        },
        labels: {
            formatter: function () {
                return this.value;
            }
        }
    },
    tooltip: {
        split: false,
        valueSuffix: ''
    },
    plotOptions: {
        area: {
            stacking: 'normal',
            lineColor: '#666666',
            lineWidth: 1,
            marker: {
                lineWidth: 1,
                lineColor: '#666666'
            }
        }
    },
    credits: {
      enabled: false
  	},
    series: [{
        name: 'Nama Barang',
        data: <?=json_encode($jml_brg);?>
    }]
});
</script>
<?php
}
?>