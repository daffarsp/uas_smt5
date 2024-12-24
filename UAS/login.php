
<?php 

    // KONEKSI KE DATA BASE DENGNA MENGGUNAKAN PDO
    require_once("includes/myclass.php");

    if(isset($_POST['login'])){
      
       
        // ambil data dari form login
       
        $username = $_POST['username']; 
          

        // ambil data dari database
        $user = new Login();
     
        $data=$user->CheckLogin($username);
     
     
        // bandingkan password yang dikirim dari form login dengan password
        // yang ada di database
        
      
         if( password_verify($_POST['password'], $data['password']) ) {
            session_start();
               $_SESSION["user"] = $data['password'];
               // login sukses, alihkan ke halaman timeline
               header("Location: index.php");  
        } else {
            header("Location: login.php");  
        }

       
    }
?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>my blog</title>
	<link rel="stylesheet" type="text/css" href="css/css/bootstrap.min.css">
</head>
<body>
        <?php
    
    //memanggil file header
    include("includes/header.php") ;

    ?>
        <!---bagian Isi -->
        
<div class="container">
    <div class="container-fluid">

            <div class="card border-primary mb-3" style="width: 40rem; ">
             <div class="card-header">     
                 <h2 class="card-title">Form Login</h2>
            </div>
            <div class="card-body">
                 
            <form action="" method="post">
                <div class="form-group">
                <label for="username">User Name</label>
                <input type="text" class="form-control" name="username" placeholder="Isikan User Name">
                </div>

                <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password">
                </div>
  
                <button type="submit" class="btn btn-info" name='login'>Login</button>
                <button type="reset" class="btn btn-info">Batal</button>
            </form>

                <p>Belum punya akun? <a href="register.php">Daftar di sini</a></p>
            </div>
        </div>
    </div>
</div>
<br>  <br> <br> <br> <br> <br>   
<?php
    
    //memanggil file header
    include("includes/footer.php") ;

    ?>
</body>
</html>