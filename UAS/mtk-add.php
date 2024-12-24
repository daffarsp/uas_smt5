<?php 
        require_once("includes/auth.php");
            
        include "includes/myclass.php";
                /** QUERY **/
                
        $mtk = new Matakuliah();
?>
<?php
                
        if (isset($_POST['submit']))
                {
    
                    // Tampung ke variable
                    $kode_mtk         = $_POST['kode_mtk'];
                    $nama_mtk          = $_POST['nama_mtk'];

                    $mtk->tambahmatakuliah($kode_mtk, $nama_mtk,) ;
            

                     echo "Data sudah di ditambahkan";
                     //panggil kembali page Mahasiswa_display.php
                     echo "<meta http-equiv='Refresh' content='0; URL=mtk-display.php'>";
                     
                }

    ?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>my blog</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/css/bootstrap.min.css">
</head>
<body>

        <!---bagian Isi -->
<?php
    //memanggil file header
            include("includes/header.php") ;
?>
    
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <form action="" method="post">
                <div class="form-group">
                <label for="kode_mtk">KODE MATAKULIAH</label>
                <input type="text" class="form-control" name="kode_mtk" placeholder="Isikan matakuliah">
                </div>

                <div class="form-group">
                <label for="nama_mtk">Nama Mata Kuliah</label>
                <input type="text" class="form-control" name="nama_mtk" placeholder="Isikan Nama Matakuliah">


                <button name="submit" type="submit" class="btn btn-info">Simpan</button>
                <button type="reset" class="btn btn-info">Batal</button>
            </form>
        </div>
    </div>
</div>

   <?php
    
    //memanggil file header
    include("includes/footer.php") ;

    ?>
</body>
</html>