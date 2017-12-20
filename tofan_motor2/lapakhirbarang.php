<?php
	$laporan = $_POST['laporan'];
	$tanggal = $_POST['tanggal'];
	if(isset($laporan) && $laporan=='semua'){
	require_once("dompdf/dompdf_config.inc.php");
	spl_autoload_register('DOMPDF_autoload');
	function pdf_create($html, $filename, $paper, $orientation, $stream=TRUE)
	{
		$dompdf = new DOMPDF();
		$dompdf->set_paper($paper,$orientation);
		$dompdf->load_html($html);
		$dompdf->render();
		$dompdf->stream($filename.".pdf");
	}
	$filename = 'Laporan Stok Barang Semua';
	$dompdf = new DOMPDF();
	$html = file_get_contents('tampil_laporan_stok_barang.php'); 
	pdf_create($html,$filename,'A4','portrait');
	}
	else if(isset($laporan) && $laporan=='tgl'){
		if(empty($tanggal)){
			echo "<script>alert('Tanggal harus diisi')</script>";
			echo "<meta http-equiv='refresh' content='1 url=laporan_barang_keluar.php'>";	
		}else{
			require_once("dompdf/dompdf_config.inc.php");
			spl_autoload_register('DOMPDF_autoload');
			function pdf_create($html, $filename, $paper, $orientation, $stream=TRUE)
			{
				$dompdf = new DOMPDF();
				$dompdf->set_paper($paper,$orientation);
				$dompdf->load_html($html);
				$dompdf->render();
				$dompdf->stream($filename.".pdf");
			}
			$filename = 'Laporan Stok Barang Tanggal';
			$dompdf = new DOMPDF();
			$html = file_get_contents('tampil_laporan_stok_barang_tgl.php'); 
			pdf_create($html,$filename,'A4','portrait');
		}	
	}
	else{
		echo "<script>alert('Radio belum dipilih')</script>";
		echo "<meta http-equiv='refresh' content='1 url=laporan_barang_keluar.php'>";
	}
?>