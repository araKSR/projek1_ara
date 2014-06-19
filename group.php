<?php
	
	include('cek-login.php');
	$koneksi	= mysqli_connect("localhost","root","","projek1");
	
	if(!isset($_SESSION['email'])){
	header('location:formlogin.php');
}
?>

<html>
	<head></head>
<body>
	<center>
		<div>selamat datang <?php echo $_SESSION['email']; ?></div>
		<div>
			<?php
				include('group-chat.php');
			?>
		</div>
		<form method="POST" action="proses_kirim.php">
				<div>
					<div><input type="text" name="pesan"></div>
				</div>
				<div>
					<div id="">
						<input type="submit" name="kirim" value="kirim">
					</div>
				</div>
			</div>
		</form>
	<div><a href="logout.php">keluar</a></div>
	</center>
</body>
</html>
