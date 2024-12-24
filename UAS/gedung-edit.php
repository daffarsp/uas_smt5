

<?php 
        require_once("includes/auth.php");
            
        include "includes/myclass.php";
                /** QUERY **/
                
        $gnd = new Gedung();
    
                
        if (isset($_POST['submit']))
                {
    
                    // Tampung ke variable
                    $kode_kelas          = $_POST['kode_kelas'];
                    $nama_kelas           = $_POST['nama_kelas'];
                    $nama_gedung         = $_POST['nama_gedung'];


                    $gnd->updateGedung( $kode_kelas, $nama_kelas, $nama_gedung) ;
            

                     echo "Data sudah di ditambahkan";
                     //panggil kembali page Dosen-display.php
                     echo "<meta http-equiv='Refresh' content='0; URL=gedung-display.php'>";
                     
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
            <?php  $data = $gnd->BacaDataGedung($_GET['Kode']); ?>
            <form action="" method="post">
                <div class="form-group">
                <label for="kode_kelas">Kode Kelas</label>
                <input type="text" class="form-control" name="kode_kelas"  value="<?php echo $data['kode_kelas']?>" placeholder="Isikan kode mata kuliah">
                </div>

                <div class="form-group">
                <label for="nama_kelas">Nama Kelas</label>
                <input type="text" class="form-control" name="nama_kelas" value="<?php echo $data['nama_kelas']?>" placeholder="Isikan Nama mata kuliah">
                </div>

                <div class="form-group">
                    <label for="nama_gedung">Gedung</label>
                    <select name="nama_gedung" class="form-control" required> 
                        <option value="--">-- Pilih Gedung --</option>
                        <option value="Gedung A" <?php if($data['nama_gedung'] == 'Gedung A') echo 'selected'; ?>>Gedung A</option>   
                        <option value="Gedung B" <?php if($data['nama_gedung'] == 'Gedung B') echo 'selected'; ?>>Gedung B</option>
                        <option value="Gedung C" <?php if($data['nama_gedung'] == 'Gedung C') echo 'selected'; ?>>Gedung C</option>
                    </select>
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