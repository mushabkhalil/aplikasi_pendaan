<?php 

    include "koneksi.php";
    $nama = $_POST['nama'];
    $tanggal = $_POST['tanggal'];
    $informasi = $_POST['informasi'];

    mysqli_query($mysqli, "insert into event set nama='$nama',tanggal='$tanggal',informasi='$informasi'");
if ($insert){
	header('location:tambah_event.php');
}else{
}