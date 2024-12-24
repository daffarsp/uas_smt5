<?php
class Database {
	// properti
	private $dbHost="localhost";
	private $dbUser="root";
	private $dbPass="";
	private $dbName="itbu2024";
	
	// method koneksi mysql
	function connectMySQL() {
		
		$conn = new mysqli($this->dbHost, $this->dbUser, $this->dbPass,$this->dbName);

		// Check connection
		if (mysqli_connect_errno())
		  {
		  echo "Failed to connect to MySQL: " . mysqli_connect_error();
		  }
		return $conn;
	}
		
}

Class Login{
	
		function CheckLogin($username) 
	{
		
		try {
		  $db=new Database;
		  $mysqli = $db->connectMySQL();
		
		  // Tampilkan semua data di tabel barang
		  $query = "SELECT password FROM users WHERE username='$username' or email='$username'";
		  $result = $mysqli->query($query);

			$row = $result->fetch_array(MYSQLI_BOTH);
			    return $row;
	 	   
			}

		catch (Exception $e) {
		 		 echo "Query bermasalah: ".$e->getMessage(). " (".$e->getCode().")";
			}
		finally {
		  if (isset($mysqli)) {
		    $mysqli->close();
		  }
		}
	}
	
}



Class UserRegister {

	function CheckUserName($username) 
	{
		
		try {
		  $db=new Database;
		  $mysqli = $db->connectMySQL();
		
		  // Tampilkan semua data di tabel barang
		  $query = "SELECT username FROM users WHERE username='$username'";
		  $result = $mysqli->query($query);

		  $row = $result->fetch_array(MYSQLI_BOTH);
			    return $row;
	 	   
			}

		catch (Exception $e) {
		 		 echo "Query bermasalah: ".$e->getMessage(). " (".$e->getCode().")";
			}
		finally {
		  if (isset($mysqli)) {
		    $mysqli->close();
		  }
		}
	}


function tambahUser( $name, $username, $email,$password) 
	{
		
		try {
			$db=new Database;
			$mysqli = $db->connectMySQL();
		  // Insert data

 			$query = "INSERT INTO users (name, username, email, password) 
            VALUES ('$name', '$username', '$email','$password' )";
    
			$hasil = $mysqli->query($query);

			}
		catch (Exception $e) {
		 		 echo "Query bermasalah: ".$e->getMessage(). " (".$e->getCode().")";
			}
		finally {
		  if (isset($mysqli)) {
		    $mysqli->close();
		  }
		}
	}

}

Class Dosen{
			function tampilDosen() 
			{
		
				try {
					  $db=new Database;
					  $mysqli = $db->connectMySQL();
					
					  // Tampilkan semua data mahasiswa
					  $query = "SELECT * FROM dosen ORDER BY nidn";
					  $result = $mysqli->query($query);

						   while ($row = $result->fetch_array(MYSQLI_BOTH))
						    $data[]=$row;
						
						    return $data;
				 	   
						}

							catch (Exception $e) {
					 		 echo "Query bermasalah: ".$e->getMessage(). " (".$e->getCode().")";
						}
					finally {
						  if (isset($mysqli)) {
					    $mysqli->close();
					  }
				}
			}

	function tambahdosen( $nidn, $nama, $alamat, $tlp) 
	{
		
		try {
			$db=new Database;
			$mysqli = $db->connectMySQL();
			
			  // Insert data
			 $query = "INSERT INTO dosen (nidn, nama, alamat,  telp)
			          VALUES ( '$nidn', '$nama', '$alamat',  '$tlp')";

			$hasil = $mysqli->query($query);

			}
		catch (Exception $e) {
		 		 echo "Query bermasalah: ".$e->getMessage(). " (".$e->getCode().")";
			}
		finally {
		  if (isset($mysqli)) {
		    $mysqli->close();
		  }
		}
	}
	function hapusdosen($nidn) 
	{
		try {
		$db=new Database;
		$mysqli = $db->connectMySQL();
		$query = "DELETE FROM dosen WHERE nidn = '$nidn'";
		$hasil = $mysqli->query($query);
		echo "Data Dosen".$nidn." sudah di hapus";
		}
       	catch (Exception $e) {
		 		 echo "Query bermasalah: ".$e->getMessage(). " (".$e->getCode().")";
			}
		finally {
		  if (isset($mysqli)) {
		    $mysqli->close();
		  }
		}
	}	
	function updatedosen($nidn, $nama, $alamat, $telp)

	{
		try {
			$db=new Database;
			$mysqli = $db->connectMySQL();
			$query = "UPDATE dosen SET
					  nidn = '$nidn', nama = '$nama', alamat = '$alamat', telp = '$telp'
					  WHERE nidn = '$nidn'";
			$hasil = $mysqli->query($query);
			
		}
		catch (Exception $e) {
		 		 echo "Query bermasalah: ".$e->getMessage(). " (".$e->getCode().")";
			}
		finally {
		  if (isset($mysqli)) {
		    $mysqli->close();
		  }
		}
	}
	
	function BacaDataDosen($nidn) 
	{
		
		try {
			$db=new Database;
			$mysqli = $db->connectMySQL();
			$result  = $mysqli->query("SELECT * FROM dosen WHERE nidn= '$nidn'");
			$data= $result->fetch_array(MYSQLI_BOTH);
			
			return $data;
			
		}
		catch (Exception $e) {
		 		 echo "Query bermasalah: ".$e->getMessage(). " (".$e->getCode().")";
			}
		finally {
		  if (isset($mysqli)) {
		    $mysqli->close();
		  }
		}
	}
}		


Class mahasiswa {

		function tampilMahasiswa() 
			{
		
		try {
		  $db=new Database;
		  $mysqli = $db->connectMySQL();
		
		  // Tampilkan semua data mahasiswa
		  $query = "SELECT * FROM mahasiswa ORDER BY nim";
		  $result = $mysqli->query($query);

			   while ($row = $result->fetch_array(MYSQLI_BOTH))
			    $data[]=$row;
			
			    return $data;
	 	   
			}

		catch (Exception $e) {
		 		 echo "Query bermasalah: ".$e->getMessage(). " (".$e->getCode().")";
			}
		finally {
		  if (isset($mysqli)) {
		    $mysqli->close();
		  }
		}
	}
		
	function tambahMahasiswa( $nim, $nama, $tempat_lahir,  $tgl_lahir, $jeniskelamin, $agama, $jurusan, $alamat, $email, $telp) 
	{
		
		try {
			$db=new Database;
			$mysqli = $db->connectMySQL();
			
			  // Insert data
			 $query = "INSERT INTO mahasiswa (nim, nama, tempat_lahir,  tgl_lahir, jenis_kelamin, agama, jurusan, alamat, email, telp)
			          VALUES ( '$nim', '$nama',  '$tempat_lahir',  '$tgl_lahir', '$jeniskelamin', '$agama', '$jurusan', '$alamat', '$email', '$telp')";

			$hasil = $mysqli->query($query);

			}
		catch (Exception $e) {
		 		 echo "Query bermasalah: ".$e->getMessage(). " (".$e->getCode().")";
			}
		finally {
		  if (isset($mysqli)) {
		    $mysqli->close();
		  }
		}
	}
	function hapusmahasiswa($nim) 
	{
		try {
		$db=new Database;
		$mysqli = $db->connectMySQL();
		$query = "DELETE FROM mahasiswa WHERE nim = '$nim'";
		$hasil = $mysqli->query($query);
		echo "Data Mahasiswa   ".$nim." sudah di hapus";
		}
       	catch (Exception $e) {
		 		 echo "Query bermasalah: ".$e->getMessage(). " (".$e->getCode().")";
			}
		finally {
		  if (isset($mysqli)) {
		    $mysqli->close();
		  }
		}
	}
	function updatemahasiswa($nim, $nama, $tempat_lahir,  $tgl_lahir, $jeniskelamin	, $agama, $jurusan, $alamat, $email, $telp)

	{
		try {
			$db=new Database;
			$mysqli = $db->connectMySQL();
			$query = "UPDATE mahasiswa SET
					  nim = '$nim', nama = '$nama', tempat_lahir = '$tempat_lahir', tgl_lahir ='$tgl_lahir', jenis_kelamin	='$jeniskelamin', agama = '$agama', jurusan = '$jurusan', alamat = '$alamat', email = '$email', telp ='$telp' 
					  WHERE nim = '$nim'";
			$hasil = $mysqli->query($query);
			
		}
		catch (Exception $e) {
		 		 echo "Query bermasalah: ".$e->getMessage(). " (".$e->getCode().")";
			}
		finally {
		  if (isset($mysqli)) {
		    $mysqli->close();
		  }
		}
	}
	
	function BacaDataMahasiswa($nim) 
	{
		
		try {
			$db=new Database;
			$mysqli = $db->connectMySQL();
			$result  = $mysqli->query("SELECT * FROM mahasiswa WHERE nim= '$nim'");
			$data= $result->fetch_array(MYSQLI_BOTH);
			
			return $data;
			
		}
		catch (Exception $e) {
		 		 echo "Query bermasalah: ".$e->getMessage(). " (".$e->getCode().")";
			}
		finally {
		  if (isset($mysqli)) {
		    $mysqli->close();
		  }
		}
	}

}

Class Bilangan{
	function penyebut($nilai) {
		$nilai = abs($nilai);
				$huruf = array("", "satu", "dua", "tiga", "empat", "lima", "enam", "tujuh", "delapan", "sembilan", "sepuluh", "sebelas");
		$temp = "";
		if ($nilai < 12) {
			$temp = " ". $huruf[$nilai];
		} else if ($nilai <20) {
			$temp = $this->penyebut($nilai - 10). " belas";
		} else if ($nilai < 100) {
			$temp = $this->penyebut($nilai/10)." puluh". $this->penyebut($nilai % 10);
		} else if ($nilai < 200) {
			$temp = " seratus" . $this->penyebut($nilai - 100);
		} else if ($nilai < 1000) {
			$temp = $this->penyebut($nilai/100) . " ratus" . $this->penyebut($nilai % 100);
		} else if ($nilai < 2000) {
			$temp = " seribu" . $this->penyebut($nilai - 1000);
		} else if ($nilai < 1000000) {
			$temp = $this->penyebut($nilai/1000) . " ribu" . $this->penyebut($nilai % 1000);
		} else if ($nilai < 1000000000) {
			$temp = $this->penyebut($nilai/1000000) . " juta" . $this->penyebut($nilai % 1000000);
		} else if ($nilai < 1000000000000) {
			$temp = $this->penyebut($nilai/1000000000) . " milyar" . $this->penyebut(fmod($nilai,1000000000));
		} else if ($nilai < 1000000000000000) {
			$temp = $this->penyebut($nilai/1000000000000) . " trilyun" . $this->penyebut(fmod($nilai,1000000000000));
		}     
		return $temp;
	}

	function terbilang($nilai) {
		if($nilai<0) {
			$hasil = "minus ". trim($this->penyebut($nilai));
		} else {
			$hasil = trim($this->penyebut($nilai));
		}     		
		return ucwords($hasil). ' Rupiah';
	}

}



Class Matakuliah{
	function tampilMatakuliah() 
	{

		try {
			  $db=new Database;
			  $mysqli = $db->connectMySQL();
			
			  // Tampilkan semua data mahasiswa
			  $query = "SELECT * FROM matakuliah ORDER BY kode_mtk";
			  $result = $mysqli->query($query);

				   while ($row = $result->fetch_array(MYSQLI_BOTH))
					$data[]=$row;
				
					return $data;
				
				}

					catch (Exception $e) {
					  echo "Query bermasalah: ".$e->getMessage(). " (".$e->getCode().")";
				}
			finally {
				  if (isset($mysqli)) {
				$mysqli->close();
			  }
		}
	}

function tambahmatakuliah( $kode_mtk, $nama_mtk) 
{

try {
	$db=new Database;
	$mysqli = $db->connectMySQL();
	
	  // Insert data
	 $query = "INSERT INTO matakuliah (kode_mtk, nama_mtk)
			  VALUES ( '$kode_mtk', '$nama_mtk')";

	$hasil = $mysqli->query($query);

	}
catch (Exception $e) {
		  echo "Query bermasalah: ".$e->getMessage(). " (".$e->getCode().")";
	}
finally {
  if (isset($mysqli)) {
	$mysqli->close();
  }
}
}
function hapusmatakuliah($kode_mtk) 
{
try {
$db=new Database;
$mysqli = $db->connectMySQL();
$query = "DELETE FROM matakuliah WHERE kode_mtk = '$kode_mtk'";
$hasil = $mysqli->query($query);
echo "Data Matakuliah".$kode_mtk." sudah di hapus";
}
   catch (Exception $e) {
		  echo "Query bermasalah: ".$e->getMessage(). " (".$e->getCode().")";
	}
finally {
  if (isset($mysqli)) {
	$mysqli->close();
  }
}
}	
function updatematakuliah($kode_mtk, $nama_mtk)

{
try {
	$db=new Database;
	$mysqli = $db->connectMySQL();
	$query = "UPDATE matakuliah SET
			 kode_mtk = '$kode_mtk', nama_mtk = '$nama_mtk'
			  WHERE kode_mtk = '$kode_mtk'";
	$hasil = $mysqli->query($query);
	
}
catch (Exception $e) {
		  echo "Query bermasalah: ".$e->getMessage(). " (".$e->getCode().")";
	}
finally {
  if (isset($mysqli)) {
	$mysqli->close();
  }
}
}

function BacaDataMatakuliah($kode_mtk) 
{

try {
	$db=new Database;
	$mysqli = $db->connectMySQL();
	$result  = $mysqli->query("SELECT * FROM matakuliah WHERE kode_mtk= '$kode_mtk'");
	$data= $result->fetch_array(MYSQLI_BOTH);
	
	return $data;
	
}
catch (Exception $e) {
		  echo "Query bermasalah: ".$e->getMessage(). " (".$e->getCode().")";
	}
finally {
  if (isset($mysqli)) {
	$mysqli->close();
  }
}
}
}	


Class Gedung{
	function tampilGedung() 
	{

		try {
			  $db=new Database;
			  $mysqli = $db->connectMySQL();
			
			  // Tampilkan semua data mahasiswa
			  $query = "SELECT * FROM kelas ORDER BY kode_kelas";
			  $result = $mysqli->query($query);

				   while ($row = $result->fetch_array(MYSQLI_BOTH))
					$data[]=$row;
				
					return $data;
				
				}

					catch (Exception $e) {
					  echo "Query bermasalah: ".$e->getMessage(). " (".$e->getCode().")";
				}
			finally {
				  if (isset($mysqli)) {
				$mysqli->close();
			  }
		}
	}

function tambahGedung( $kode_kelas, $nama_kelas, $nama_gedung) 
{

try {
	$db=new Database;
	$mysqli = $db->connectMySQL();
	
	  // Insert data
	 $query = "INSERT INTO kelas (kode_kelas, nama_kelas, nama_gedung)
			  VALUES ( '$kode_kelas', '$nama_kelas', '$nama_gedung')";

	$hasil = $mysqli->query($query);

	}
catch (Exception $e) {
		  echo "Query bermasalah: ".$e->getMessage(). " (".$e->getCode().")";
	}
finally {
  if (isset($mysqli)) {
	$mysqli->close();
  }
}
}
function hapusGedung($kode_kelas) 
{
try {
$db=new Database;
$mysqli = $db->connectMySQL();
$query = "DELETE FROM kelas WHERE kode_kelas = '$kode_kelas'";
$hasil = $mysqli->query($query);
echo "Data Gedung".$kode_kelas." sudah di hapus";
}
   catch (Exception $e) {
		  echo "Query bermasalah: ".$e->getMessage(). " (".$e->getCode().")";
	}
finally {
  if (isset($mysqli)) {
	$mysqli->close();
  }
}
}	
function updateGedung($kode_kelas, $nama_kelas, $nama_gedung)

{
try {
	$db=new Database;
	$mysqli = $db->connectMySQL();
	$query = "UPDATE kelas SET
			 kode_kelas = '$kode_kelas', nama_kelas = '$nama_kelas', nama_gedung = '$nama_gedung'
			  WHERE kode_kelas = '$kode_kelas'";
	$hasil = $mysqli->query($query);
	
}
catch (Exception $e) {
		  echo "Query bermasalah: ".$e->getMessage(). " (".$e->getCode().")";
	}
finally {
  if (isset($mysqli)) {
	$mysqli->close();
  }
}
}

function BacaDataGedung($kode_kelas) 
{

try {
	$db=new Database;
	$mysqli = $db->connectMySQL();
	$result  = $mysqli->query("SELECT * FROM kelas WHERE kode_kelas= '$kode_kelas'");
	$data= $result->fetch_array(MYSQLI_BOTH);
	
	return $data;
	
}
catch (Exception $e) {
		  echo "Query bermasalah: ".$e->getMessage(). " (".$e->getCode().")";
	}
finally {
  if (isset($mysqli)) {
	$mysqli->close();
  }
}
}
}	