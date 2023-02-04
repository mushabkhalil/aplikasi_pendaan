<!DOCTYPE html>
<html>
<head>
	<title>Halaman Admin</title>
</head>
<body>
    <p>Selamat Datang Di Halaman Admin</p>
    <hr> 
    <br> 
    <form action="proses_admin.php" method="POST">
    	<fieldset>
    		<legend>Halaman Admin</legend>
    		<table width="50%">
    			<tr>
    				<td>Nama</td>
    				<td>:</td>
    				<td><input type="text" name="nama" placeholder="Masukkan Nama..."></td>
    			</tr>
    			<tr>
    				<td>Tanggal</td>
    				<td>:</td>
    				<td><input type="date" name="tanggal" size="40"></td>
    			</tr>
    			<tr>
    				<td>Informasi</td>
    				<td>:</td>
    				<td><textarea name="informasi" cols="35" rows="5" placeholder="cari info boss..."></textarea></td>
    			</tr>
    			<tr>
    				<td><input type="submit" value="next"></td>
    			</tr>
    		</table>
    	</fieldset>
    	<br> 
    <p><a href="login.php"><ins><- kembali</a></ins></a>
       <hr>
       <div>Copyright &copy; 2023 | SMK Luqman Al Hakim Kudus</div>
      </form>
</body>
</html>