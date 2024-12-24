<?php

if(isset($_POST['register'])){

    // filter data yang diinputkan
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    // enkripsi password
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);


    // menyiapkan query
    
			require_once("includes/myclass.php");
			

	
			// instance object Mahasiswa
			$user = new UserRegister();
			$user->tambahUser($name,$username,$email,$password);
	
	echo $name;
    
//echo $strQuery;
    // jika query simpan berhasil, maka user sudah terdaftar
    // maka alihkan ke halaman login
     header("Location: login.php");
}

?>

<!DOCTYPE html>
<html>
  <head>
    <title>Navbar Bootstrap - ITBU.ac</title>
    <link href="css/css/bootstrap.min.css" rel="stylesheet">
   s  </head>
<body class="bg-light">
 
    <?php include "includes/header.php" ?>

    <div class="content">
			<div class="row">
						<div class="col-md-3"></div>
							<div class="col-md-6">
									<p>&larr; <a href="index.php">Home</a>

									<h4>Bergabunglah bersama ribuan orang lainnya...</h4>
									<p>Sudah punya akun? <a href="login.php">Login di sini</a></p>

									<form action="" method="POST">

										<div class="form-group">
											<label for="name">Nama Lengkap</label>
											<input class="form-control" type="text" name="name" placeholder="Nama kamu" />
										</div>

										<div class="form-group">
											<label for="username">Username</label>
											<input class="form-control" type="text" name="username" placeholder="Username" />
										</div>

										<div class="form-group">
											<label for="email">Email</label>
											<input class="form-control" type="email" name="email" placeholder="Alamat Email" />
										</div>

										<div class="form-group">
											<label for="password">Password</label>
											<input class="form-control" type="password" name="password" placeholder="Password" />
										</div>

										<input type="submit" class="btn btn-success btn-block" name="register" value="Daftar" />

									</form>
								</div>
							<div class="col-md-3"></div>
				</div>
					<div class="row">
						<div class="col-md-3"></div>
							<div class="col-md-6">
		<?php include "includes/footer.php" ?>  
							</div>
						<div class="col-md-3"></div>
						</div>
        <script src="js/jQuery v3.2.0.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>