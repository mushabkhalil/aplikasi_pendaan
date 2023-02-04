<!DOCTYPE html>
<html>
<head>
	<title>Pendaftaran</title>
</head>
<body>
  <p>Selamat Datang Di Halaman Pendaftaran | SMK Luqman Al Hakim Kudus</p>
  <form action="proses_pendaftaran.php" method="POST">
  	<hr> 
  	<br> 
  <fieldset>
  	<legend>Pendaftaran</legend>
  	<br>
  	<table> 
  		<tr>
  			<td>Nama</td>
  			<td>:</td>
  			<td><input type="text" name="nama" placeholder="Mohon diisi..."></td>
  		</tr>
  		<tr> 
  			<td>Email</td>
  			<td>:</td>
  			<td><input type="email" name="email" placeholder="Mohon diisi..."></td>
  		</tr>
  		<tr>
  			<td>Tanggal lahir</td>
  			<td>:</td>
  			<td><input type="date" name="tanggal_lahir" placeholder="Mohon diisi..."></td>
  		</tr>
  		<tr>
  			<td>Alamat</td>
  			<td>:</td>
  			<td><textarea name="alamat" cols="25" rows="5" placeholder="Mohon diisi..."></textarea>
  			</td>
  		</tr>
  	</table>
  	<br> 
  	<table> 
  		<tr><td><input type="submit" name="kirim" value="daftar"></td>
         <hr>
       </tr>
       <br> 
       <div>Copyright &copy; 2023 | SMK Luqman Al Hakim Kudus</div>
   </table>
</fieldset>
<p><a href="login.php">Log out</a></p>
</form>
<br>
</body>
</html>