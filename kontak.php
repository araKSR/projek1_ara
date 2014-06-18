<?php
	session_start();
	$koneksi	= mysqli_connect("localhost","root","","projek1");
?>
<html>
<head><title>kontak</title></head>
<style>
	.warna {
		background:#ebebeb;
		width : 300px;
		diplay:block;
	}
	.warna1 {
		background:#fff;
		width : 300px;
		diplay:block;
	}
	.container{
		text-align:left;
	}
</style>
<body>
	<div class="container">
		<center>
			<?php
				
				$select	= "SELECT * FROM user";
				$query	= mysqli_query($koneksi,$select);
				
				while($daftar = mysqli_fetch_array($query)){
					if ($daftar['id_user']%2==0){
			?>
				<div class="warna">
					<div><img src=""></div>
					<a href="personal.php">
						<div><?php echo $daftar['nama_pengguna']; ?></div>
					</a>
				</div>
			<?php
					}else{
			?>
					<div class="warna1">
						<div><img src=""></div>
						<a href="personal.php">
							<div><?php echo $daftar['nama_pengguna']; ?></div>
						</a>
					</div>
			<?php			
					}	
			}
			?>
		</center>
	</div>
</body>
</html>
