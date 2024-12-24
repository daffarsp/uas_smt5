<?php 
include_once 'includes/myclass.php';


// proses hapus data
if (isset($_GET['Kode']))
{
		$mtkDel = new Matakuliah();
		// baca ID dari parameter customeryang akan dihapus
		$kode_mtk = $_GET['Kode'];
		// proses hapus data  customer berdasarkan nimvia method
		$mtkDel->hapusmatakuliah($kode_mtk);	
	echo "<meta http-equiv='Refresh' content='1; URL=mtk-display.php'>";
}
?>