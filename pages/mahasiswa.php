<?php
$koneksi = mysqli_connect('localhost','root','','alfian');
$sql = "SELECT * from mahasiswa";
$hasil = mysqli_query($koneksi,$sql);
?>
<a href="form_mahasiswa.php"> Tambah Mahasiswa
<table border="1">
<thead>
<tr>
<th>NIM</th>
<th>Nama</th>
<th>Jurusan</th>
<th>Action</th>
</tr>
</thead>
<tbody>
<?php
while($row = mysqli_fetch_assoc($hasil)){
	?>
<tr>
<td><?php echo $row['nim']; ?></td>
<td><?php echo $row['nama']; ?></td>
<td><?php echo $row['jurusan']; ?></td>
<td><a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a>
	<a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a>
</td>
</tr>
	<?php
	$i++;
	}
	?>
</tbody>
</table>