<?php 
include_once 'includes/myclass.php';


// proses hapus data
if (isset($_GET['Kode']))
{
		$mhsDel = new mahasiswa();
		// baca ID dari parameter customeryang akan dihapus
		$nim = $_GET['Kode'];
		// proses hapus data  customer berdasarkan nimvia method
		$mhsDel->hapusmahasiswa($nim);	
	echo "<meta http-equiv='Refresh' content='1; URL=mahasiswa-display.php'>";
}
?>