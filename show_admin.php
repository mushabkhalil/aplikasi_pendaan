<html> 
<?php 
include "koneksi.php";

 ?>

 <head> 
 	<title>Halaman Admin</title>
 </head>
 <body>

 	<h2>DATA ADMIN</h2>

 	<a href="admin.php"> + TAMBAH ADMIN</a>
       <a href="tambah_event.php"> + TAMBAH EVENT</a> <a href="show_pendaftaran.php">+ DATA PESERTA</a> <p></p>
 	<table border="1" width="80%">
 		<tr>
 			<td align="center">ID</td>
 			<td align="center">Nama</td>
 			<td align="center">Tanggal</td>
 			<td align="center">Informasi</td>
 			<td align="center">Opsi</td>
 		</tr>
 		<?php include "koneksi.php";
 		$tampil = mysqli_query ($mysqli, "select *from admin");
 		$no = 1;
 		while ($hasil = mysqli_fetch_array($tampil)){
        ?>
        <tr>
        	<td align="center"><?php echo $no++; ?></td>
        	<td align="center"><?php echo $hasil['nama']?></td>
        	<td align="center"><?php echo $hasil['tanggal']?></td>
        	<td align="center"><?php echo $hasil['informasi']?></td>
        	<td align="center"><a href="edit_admin.php?id=<?php echo $hasil['id'];?>">Edit</a>| 
               <a href="hapus.php?hapus&id=<?=$hasil['id'];?>">Hapus</a></td>
        	</tr>
        	<?php
 		}
 		?>
 	</table>
 	<hr>
 	<br>
    <div>Copyright &copy; 2023 | SMK Luqman Al Hakim Kudus</div>
   </body>
   </html>
