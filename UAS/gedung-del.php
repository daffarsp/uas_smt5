<?php 
include_once 'includes/myclass.php';


// proses hapus data
if (isset($_GET['Kode']))
{
		$gndDel = new Gedung();
		// baca ID dari parameter customeryang akan dihapus
		$kode_kelas = $_GET['Kode'];
		// proses hapus data  customer berdasarkan nimvia method
		$gndDel->hapusGedung($kode_kelas);	
	echo "<meta http-equiv='Refresh' content='1; URL=gedung-display.php'>";
}
?>