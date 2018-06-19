<?php
$koneksi = mysqli_connect('localhost','root','','alfian');

$sql = "DELETE FROM mahasiswa WHERE id=$_GET[id]";
mysqli_query($koneksi, $sql);

header('Location: mahasiswa.php');