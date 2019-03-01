<br>
<?php include ('header.php');?>
</br>
<br>
	<title>Data Siswa</title>
	<div class="container">
		<h2><center>DATA SISWA</center></h2>
	</br>
		<table class="tabel" align="center">
	</div>
	<tr>
		<th>ID Siswa</th>
		<th>Nama</th>
		<th>Email</th>
		<th>NIS</th>
		<th>Tempat</th>
		<th>Tanggal lahir</th>
		<th>ID Kelas</th>
		<th>Alamat</th>
		<th>No HP</th>
		<th>Password</th>
		<th>Aksi</th>
	</tr>
<?php 
	include('config.php');

	$sql_view = "SELECT s.*,k.nama_kelas FROM siswa s LEFT JOIN kelas k ON s.id_kelas=k.id_kelas";

	$siswa=mysqli_query($conn, $sql_view);

	while ($baris_data = mysqli_fetch_array($siswa, MYSQLI_ASSOC)) {
		?>
		<tr>
			<td><?php echo $baris_data['id_siswa'];?></td>
			<td><?php echo $baris_data['nama'];?></td>
			<td><?php echo $baris_data['email'];?></td>
			<td><?php echo $baris_data['nis'];?></td>
			<td><?php echo $baris_data['tempat'];?></td>
			<td><?php echo $baris_data['tanggal_lahir'];?></td>
			<td><?php echo $baris_data['nama_kelas'];?></td>
			<td><?php echo $baris_data['alamat'];?></td>
			<td><?php echo $baris_data['no_hp'];?></td>
			<td><?php echo $baris_data['password'];?></td>
			<td>
	            <a class="btn edit btn-info btn-sm" href="editsiswa.php?id_siswa=<?php echo $baris_data['id_siswa']; ?>">Edit</a>
	            <a class="btn hapus btn-warning btn-sm" href="delsiswa.php?id_siswa=<?php echo $baris_data['id_siswa']; ?>">Hapus</a>
	          </td>
		</tr>
	<?php } ?>
	<a class="btn tambah btn-primary btn-sm" href="addsiswa.php?id_siswa=<?php echo $baris_data['id_siswa'];?>">Tambah</a>
</table>
</div>
<?php include ('footer.php');?>