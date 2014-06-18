<html>
<head><title>regist</title>
</head>
<body>

<form method="POST" action="insertregistrasi.php">
<table>
		<tr>
			<td> 
				<input type =text name="email"  placeholder="Email anda">
			</td>
		</tr>
		<tr>
			<td> 
				<input type =password name="password"  placeholder="password lo coy">
			</td>
		</tr>
		<tr>
			<td> 
				<input type =text name="verif_password"  placeholder="verifikasi password">
			</td>
		</tr>
		<tr>
			<td> 
				<input type =text name="nama_pengguna" placeholder="Nama pengguna">
			</td>
		</tr>
		<tr>
			<td> 
				<input type =date name ="tanggal_lahir" placeholder="tgl lahir">
			</td>
		</tr>
		<tr>
			<td>
				<select name="gender">
					<option>--Pilih--</option>
					<option name="gender">Laki-laki</option>
					<option name="gender">Perempuan</option>
				</select>				
			</td>
		</tr>
		<tr>
			<td> 
				<textarea type =text name ="alamat" placeholder="alamat"></textarea>
			</td>
		</tr>
		<tr>
			<td> 
				<input type =text name ="sekolah" placeholder="asal sekolah">
			</td>
		</tr>
		<tr>
			<td> 
				<input type =text name ="pekerjaan" placeholder="pekerjaan">
			</td>
		</tr>
		<tr>	
			<td>
				 
				<button type="submit" name="submit" >MENDAFTAR</button>
			</td>
		</tr>
</table>
</form>
</body>
</html>
