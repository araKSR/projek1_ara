<?php

	Session_start();
	include('cek-login.php');
	
	$koneksi	= mysqli_connect("localhost","root","","projek1");
	
	$pengirim	= $_SESSION['email'];
	$penerima	= $_POST['email'];
	$pesan		= $_POST['pesan'];
	
	$input		= "INSERT INTO personal VALUES('','$pengirim','$penerima',CURRENT_TIMESTAMP,'$pesan')"or die(mysqli_error($koneksi));
	$query		= mysqli_query($koneksi,$input);
	
	if ($query){
		header('location:personal.php');
	}else{
		echo "kirim gagal" ;
	}
?>
