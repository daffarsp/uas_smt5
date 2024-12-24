<?php 
        require_once("includes/auth.php");
            
        include "includes/myclass.php";
                /** QUERY **/
                
        $dsn = new dosen();
?>
<?php
                
        if (isset($_POST['submit']))
                {
    
                    // Tampung ke variable
                    $nidn           = $_POST['nidn'];
                    $nama           = $_POST['nama'];
                    $alamat         = $_POST['alamat'];
                    $telp           = $_POST['telp'];

                    $dsn->tambahdosen($nidn, $nama,  $alamat, $telp) ;
            

                     echo "Data Mahasiswa sudah di ditambahkan";
                     //panggil kembali page Mahasiswa_display.php
                     echo "<meta http-equiv='Refresh' content='0; URL=dosen-display.php'>";
                     
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
                <label for="nidn">NIDN</label>
                <input type="text" class="form-control" name="nidn" placeholder="Isikan NIDN">
                </div>

                <div class="form-group">
                <label for="nama">Nama Dosen</label>
                <input type="text" class="form-control" name="nama" placeholder="Isikan Nama Lengkap">
                </div>

                <div class="form-group">
                <label for="alamat">Alamat</label>
                <textarea name="alamat"class="form-control" placeholder="Isikan Alamat Lengkap"></textarea>
                </div>

                <div class="form-group">
                <label for="telp">Nomor Telp</label>
                <input type="text" class="form-control" name="telp" >
                </div>


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