

<?php 
        require_once("includes/auth.php");
            
        include "includes/myclass.php";
                /** QUERY **/
                
        $dsn = new dosen();
    
                
        if (isset($_POST['submit']))
                {
    
                    // Tampung ke variable
                    $nidn            = $_POST['nidn'];
                    $nama           = $_POST['nama'];
                    $alamat         = $_POST['alamat'];
                    $telp           = $_POST['telp'];

                    $dsn->updatedosen( $nidn, $nama, $alamat,  $telp) ;
            

                     echo "Data Dosen sudah di ditambahkan";
                     //panggil kembali page Dosen-display.php
                     echo "<meta http-equiv='Refresh' content='0; URL=dosen-display.php'>";
                     
                }

    ?>


!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>my blog</title>
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
            <?php  $data = $dsn->BacaDataDosen($_GET['Kode']); ?>
            <form action="" method="post">
                <div class="form-group">
                <label for="nim">NIDN</label>
                <input type="text" class="form-control" name="nidn"  value="<?php echo $data['nidn']?>" placeholder="Isikan NIM">
                </div>

                <div class="form-group">
                <label for="nama">Nama Dosen</label>
                <input type="text" class="form-control" name="nama" value="<?php echo $data['nama']?>" placeholder="Isikan Nama Lengkap">
                </div>

                <div class="form-group">
                <label for="alamat">Alamat</label>
               <textarea name="alamat" class="form-control"><?php echo $data['alamat']; ?></textarea>
                </div>

                <div class="form-group">
                <label for="nama">Nomor Telp</label>
                <input type="text" class="form-control" name="telp" value="<?php echo $data['telp']?>">
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