<?php

include "koneksi.php";

?>
<h2>DATA PENDAFTARAN</h2>
<hr>
<a href="show_pendaftaran.php">Pendaftaran</a> | <a href="show_admin.php">Admin</a> | <a href="login.php">Login</a>
<br>
<hr>
<a href="pendaftaran.php">+ TAMBAH PENDAFTARAN</a>
<br>
<table border="1">
	<tr>
		<td>Nomer</td>
		<td>Nama</td>
		<td>Email</td>
		<td>Tanggal Lahir</td>
		<td>Alamat</td>
		<td>Opsi</td>
	</tr>
	<?php


		$tampil = mysqli_query($mysqli, "select * from pendaftaran");
		$no = 1;
		while ($hasil = mysqli_fetch_array($tampil)){
	?>
	<tr>
		<td><?php echo $no++; ?></td>
		<td><?php echo $hasil['nama']; ?></td>
		<td><?php echo $hasil['email']; ?></td>
		<td><?php echo $hasil['tanggal_lahir']; ?></td>
		<td><?php echo $hasil['alamat']; ?></td>
		<td>
			<a href="edit_pendaftaran.php?id=<?php echo $hasil['id']; ?>">edit</a> |
			<a href="hapus_pendaftaran.php?hapus&id=<?= $hasil['id']; ?>">hapus</a>
		</td>
	</tr>
	<?php
		}
	?>
</table>
