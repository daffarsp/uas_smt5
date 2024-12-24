
<?php require_once("includes/auth.php"); ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>my blog</title>
	<link rel="stylesheet" type="text/css" href="css/css/bootstrap.min.css">
    <?php
        include "includes/myclass.php";
        /** QUERY **/
        
        $mhs = new mahasiswa();
        
    ?>
 

</head>
<body>
	<
    <?php
    
    //memanggil file header
    include("includes/header.php") ;

    ?>
    <!---bagian Isi -->
    <div class="container">
         <div class="container-fluid">    
            <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">
                       <h1>Data Mahasiswa</h1>
                    </div>
                    <div class="card-body">
                    <table class="table table-hover table-striped">
                        <thead>
                            <tr class="btn-info">
                                <th>Nim</th>
                                <th>Nama Mahasiswa</th>
                                <th>Tempat Lahir</th>
                                <th>Tanggal Lahir</th>
                                <th>Jenis Kelamin</th>
                                <th>Agama</th>
                                <th>Jurusan</th>
                                <th>Alamat</th>
                                <th>Email</th>
                                <th>No Telphone</th>
                                <th>Action/Modifikasi</th>
                            </tr>
                        </thead>
                        <tbody>
                          <?php 
                            //Tampilkan semua customer
                            
                            $arraymhs=$mhs->TampilMahasiswa();
                            
                            foreach($arraymhs as $row) {
                           ?>
                                <tr>
                                  
                                    <td><?php echo $row['nim']; ?></td>
                                    <td><?php echo $row['nama']; ?> </td>
                                    <td><?php echo $row['tempat_lahir']; ?></td>
                                    <td><?php echo $row['tgl_lahir'] ;?></td>
                                    <td><?php echo $row['jenis_kelamin'] ;?></td>
                                    <td><?php echo $row['agama']; ?></td>
                                    <td><?php echo $row['jurusan']; ?> </td>
                                    <td><?php echo $row['alamat']; ?></td>
                                    <td><?php echo $row['email'] ;?></td>
                                    <td><?php echo $row['telp'] ;?></td>
                                  
                                   
                                    <td>

                                        <a href="mahasiswa-edit.php?Kode=<?php echo $row['nim'];?>" class ="btn btn-success">
                                        <span class="glyphicon glyphicon-edit"></span>
                                        </a>

                                        &nbsp;
                                        <a href="mahasiswa-del.php?Kode=<?php echo $row['nim'];?>" class ="btn btn-danger">
                                        <span class="glyphicon glyphicon-remove" onClick="return confirm('Apakah Anda Yakin?');"></span>                   </a>
                              
        
                                    </td>
 
                            <?php 
                            } ; 
                            ?>

                        </tbody>
                    </table>
                    <a href="mahasiswa-add.php" class="btn btn-primary">Tambah Data Mahasiswa</a>
                    </div><!-- Penutup card body --> 
                    </div><!-- Penutup card --> 
            </div><!-- Penutup div   col-md-10 --> 

            <div class="col-md-1"></div>
        </div><!-- Penutup div  row --> 
        <hr>

    </div> <!--Penutup Countainer-fluid -->
</div> <!--Penutup Countainer--->

 <?php
    
    //memanggil file header
    include("includes/footer.php") ;

    ?>
 

</body>
</html>