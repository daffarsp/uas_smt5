
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
        
        $dsn = new Dosen();
        
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
                       <h1>Data Dosen</h1>
                    </div>
                    <div class="card-body">
                    <table class="table table-hover table-striped">
                        <thead>
                            <tr class="btn-info">
                                <th>Nidn</th>
                                <th>Nama Dosen</th>
                                <th>Alamat</th>
                                <th>No Telphone</th>
                                <th>Action/Modifikasi</th>
                            </tr>
                        </thead>
                        <tbody>
                          <?php 
                            //Tampilkan semua dosen
                            
                            $arraymhs=$dsn->tampilDosen();
                            
                            foreach($arraymhs as $row) {
                           ?>
                                <tr>
                                  
                                    <td><?php echo $row['nidn']; ?></td>
                                    <td><?php echo $row['nama']; ?> </td>
                                    <td><?php echo $row['alamat']; ?></td>
                                    <td><?php echo $row['telp'] ;?></td>
                                  
                                   
                                    <td>

                                        <a href="dosen-edit.php?Kode=<?php echo $row['nidn'];?>" class ="btn btn-success">
                                        <span class="glyphicon glyphicon-edit"></span>
                                        </a>

                                        &nbsp;
                                        <a href="dosen-del.php?Kode=<?php echo $row['nidn'];?>" class ="btn btn-danger">
                                        <span class="glyphicon glyphicon-remove" onClick="return confirm('Apakah Anda Yakin?');"></span>                   </a>
                              
        
                                    </td>
 
                            <?php 
                            } ; 
                            ?>

                        </tbody>
                    </table>
                    <a href="dosen-add.php" class="btn btn-primary">Tambah Data Dosen</a>
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