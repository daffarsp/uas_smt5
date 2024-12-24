<?php 
include_once 'includes/myclass.php';


// proses hapus data
if (isset($_GET['Kode']))
{
		$dsnDel = new dosen();
		// baca ID dari parameter customeryang akan dihapus
		$nidn = $_GET['Kode'];
		// proses hapus data  customer berdasarkan nimvia method
		$dsnDel->hapusdosen($nidn);	
	echo "<meta http-equiv='Refresh' content='1; URL=dosen-display.php'>";
}
?>