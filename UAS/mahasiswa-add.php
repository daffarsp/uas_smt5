<?php 
        require_once("includes/auth.php");
            
        include "includes/myclass.php";
                /** QUERY **/
                
        $mhs = new mahasiswa();
?>
<?php
                
        if (isset($_POST['submit']))
                {
    
                    // Tampung ke variable
                    $nim            = $_POST['nim'];
                    $nama           = $_POST['nama'];
                    $tempat_lahir   = $_POST['tmplahir'];
                    $tgl_lahir      = $_POST['tgllahir'];
                    $jeniskelamin   = $_POST['jeniskelamin'];
                    $agama          = $_POST['agama'];
                    $jurusan        = $_POST['jurusan'];
                    $alamat         = $_POST['alamat'];
                    $email          = $_POST['email'];
                    $telp           = $_POST['telp'];

                    $mhs->tambahMahasiswa($nim, $nama, $tempat_lahir, $tgl_lahir, $jeniskelamin, $agama, $jurusan, $alamat, $email, $telp) ;
            

                     echo "Data Mahasiswa sudah di ditambahkan";
                     //panggil kembali page Mahasiswa_display.php
                     echo "<meta http-equiv='Refresh' content='0; URL=mahasiswa-display.php'>";
                     
                }

    ?>


!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>my blog</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
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
                <label for="nim">NIM</label>
                <input type="text" class="form-control" name="nim" placeholder="Isikan NIM">
                </div>

                <div class="form-group">
                <label for="nama">Nama Mahasiswa</label>
                <input type="text" class="form-control" name="nama" placeholder="Isikan Nama Lengkap">
                </div>

                <div class="form-group">
                <label for="nama">Tempat Lahir</label>
                <input type="text" class="form-control" name="tmplahir" >
                </div>

                <div class="form-group">
                <label for="nama">Tanggal Lahir</label>
                <input type="date" class="form-control" name="tgllahir" >
                </div>

                <div class="form-group">
                <label for="nama">Jenis Kelamin</label>
                <label class="radio-inline"><input type="radio" name="jeniskelamin" value="Laki-laki" checked   >Laki-laki</label>
                <label class="radio-inline"><input type="radio" name="jeniskelamin" value="Perempuan" >Perempuan</label>
                </div>
 
                <div class="form-group">
                        <label>Agama</label>
                        <select name="agama" class="form-control"> 
                            <option>--</option>
                            <option>Islam</option>
                            <option>Kristen</option>
                            <option>Katolik</option>
                            <option>Hindu</option>
                            <option>Budha</option>
                        </select>
                </div>                

                <div class="form-group">
                        <label>jurusan</label>
                        <select name="jurusan" class="form-control"> 
                            <option>--</option>
                            <option>Teknik  informatika</option>
                            <option>Teknik Mesin</option>
                            <option>Teknik Elektro</option>
                            <option>Teknik Sipil</option>
                            <option>Sistem Informasi</option>
                        </select>
                </div>             
                <div class="form-group">
                <label for="alamat">Alamat</label>
                <textarea name="alamat"class="form-control" placeholder="Isikan Alamat Lengkap"></textarea>
                </div>

                 <div class="form-group">
                <label for="nama">email</label>
                <input type="email" class="form-control" name="email" >
                </div>

                <div class="form-group">
                <label for="nama">Nomor Telp</label>
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