<?php
	
	@include('cek-login.php');
	$koneksi	= mysqli_connect("localhost","root","","projek1");
	
	if(!isset($_SESSION['email'])){
	header('location:formlogin.php');
}
?>

<html>
<head>
	<title>chat personal</title>
	
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.0/jquery.min.js"></script>
	<script type="text/javascript">
		var auto_refresh = setInterval(
		function () {
			$('#pesan').load('pusat-pesan.php').fadeIn("fast");
		}, 10000); // refresh setiap 10000 milliseconds
	</script>
	
</head>
<style>
.container{
	width:300px;
	background:#ebebeb;
}
.session {
	text-align:right;
	width:250px;
}
.other{
	text-align:left;
}
</style>
<body>
	<center>
<!--	<div>selamat datang <?php echo $_SESSION['email']; ?></div> -->
		<div class="container">				
				<div id="pesan">
					
					<?php					
					
					$pilih		= "SELECT * FROM personal ORDER BY id_chating_personal ASC";
					$query		= mysqli_query($koneksi,$pilih);
					
				if (mysqli_num_rows($query)==0){
					echo "kosong";
				}else{
					while ($data= mysqli_fetch_array($query)){
						if ($data['pengirim']==$_SESSION['email']){
						?>
						<div class="session">
							<div>
								<strong>
									<?php echo $data['pengirim']; ?>
								</strong>
									<?php echo $data['waktu_kirim']; ?>
							</div>						
							<div>
								<?php echo $data['pesan']; ?>
							</div>						
						</div>
						<?php
						
						}else{
							
						?>
						<div class="other">
							<div>
								<strong>
									<?php echo $data['penerima']; ?>
								</strong>
									<?php echo $data['waktu_kirim']; ?>
							</div>						
							<div>
								<?php echo $data['pesan']; ?>
							</div>					
						</div>
						<?php
						}
					}
				}
					?>
				</div>
	</div>
	</center>
</body>
</html>
