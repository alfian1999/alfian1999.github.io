<?php
$koneksi = mysqli_connect('localhost','root','','alfian');
$nim = mysqli_real_escape_string ($koneksi, $_POST['nim']);
$nama = mysqli_real_escape_string($koneksi, $_POST['nama']);
$jurusan = mysqli_real_escape_string($koneksi, $_POST['jurusan']);

$sql = "INSERT INTO mahasiswa(nim,nama,jurusan)
		values('$nim','$nama','$jurusan')";
		mysqli_query($koneksi,$sql);
		
header('Location: mahasiswa.php');