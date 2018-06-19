<?php
$koneksi = mysqli_connect('localhost','root','','alfian');
$jurusan = mysqli_real_escape_string ($koneksi, $_POST['jurusan']);

$sql = "UPDATE mahasiswa
		SET jurusan = '$jurusan'
		WHERE id = $_POST[id]";
		mysqli_query($koneksi,$sql);
		
header ('Location: mahasiswa.php');