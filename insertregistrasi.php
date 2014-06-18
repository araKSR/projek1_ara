<?php
//panggil file config.php untuk menghubung ke server

$koneksi=mysqli_connect("localhost","root","","projek1");

//tangkap data dari form
$email 			= $_POST['email'];
$password 		= $_POST['password'];
$verif_password = $_POST['verif_password'];
$nama_pengguna 	= $_POST['nama_pengguna'];
$tanggal_lahir 	= $_POST['tanggal_lahir'];
$gender 		= $_POST['gender'];
$alamat 		= $_POST['alamat'];
$sekolah 		= $_POST['sekolah'];
$pekerjaan 		= $_POST['pekerjaan'];

//simpan data ke database
$insert ="INSERT INTO user values('', '$email', '$password', '$verif_password', '$nama_pengguna', '$tanggal_lahir', '$gender', 
'$alamat', '$sekolah', '$pekerjaan')" or die(mysqli_error($koneksi));
$query=mysqli_query($koneksi,$insert);

if ($query) {
	header('location:profile.php?message=success');
}
?>
