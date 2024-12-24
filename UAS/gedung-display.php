
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
        
        $gnd = new Gedung();
        
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
                       <h1>Data Gedung</h1>
                    </div>
                    <div class="card-body">
                    <table class="table table-hover table-striped">
                        <thead>
                            <tr class="btn-info">
                                <th>Kode Kelas</th>
                                <th>Nama Kelas</th>
                                <th>Nama Gedung</th>
                                <th>Action/Modifikasi</th>
                            </tr>
                        </thead>
                        <tbody>
                          <?php 
                            //Tampilkan semua dosen
                            
                            $arraymhs=$gnd->tampilGedung();
                            
                            foreach($arraymhs as $row) {
                           ?>
                                <tr>
                                  
                                    <td><?php echo $row['kode_kelas']; ?></td>
                                    <td><?php echo $row['nama_kelas']; ?> </td>
                                    <td><?php echo $row['nama_gedung']; ?> </td>
                                  
                                   
                                    <td>

                                        <a href="gedung-edit.php?Kode=<?php echo $row['kode_kelas'];?>" class ="btn btn-success">
                                        <span class="glyphicon glyphicon-edit"></span>
                                        </a>

                                        &nbsp;
                                        <a href="gedung-del.php?Kode=<?php echo $row['kode_kelas'];?>" class ="btn btn-danger">
                                        <span class="glyphicon glyphicon-remove" onClick="return confirm('Apakah Anda Yakin?');"></span>                   </a>
                              
        
                                    </td>
 
                            <?php   
                            } ; 
                            ?>

                        </tbody>
                    </table>
                    <a href="gedung-add.php" class="btn btn-primary">Tambah Data Gedung</a>
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