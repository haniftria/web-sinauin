<br>
<?php include ('header.php');?>
</br>
<br>
	<title>Data Mata Pelajaran</title>
	<div class="container">
		<h2><center>DATA MATA PELAJARAN</center></h2>
</br>

		<table class="tabel" align="center">
			<tr>
				<th>ID Mata Pelajaran</th>
				<th>Keterangan</th>
				<th>Aksi</th>
			</tr>
	</div>
<?php 
	include('config.php');

	$sql_view = "SELECT * FROM mata_pelajaran";

	$mapel=mysqli_query($conn,$sql_view);

	while($baris_data=mysqli_fetch_array($mapel,MYSQLI_ASSOC)){
		?>
		<tr>
			<td><?php echo $baris_data['id_mata_pelajaran'];?> </td>
			<td><?php echo $baris_data['keterangan'];?> </td>
			<td>
	            <a class="btn edit btn-info btn-sm" href="editmapel.php?id_mata_pelajaran=<?php echo $baris_data['id_mata_pelajaran']; ?>">Edit</a>
        		<a class="btn hapus btn-warning btn-sm" href="deletemapel.php?id_mata_pelajaran=<?php echo $baris_data['id_mata_pelajaran']; ?>">Hapus</a>
	          </td>
		</tr>
	<?php } ?>
	<a class="btn tambah btn-primary btn-sm" href="addmapel.php?id=<?php echo $baris_data['id_mata_pelajaran'];?>">Tambah</a>
</table>
</div>
<?php include ('footer.php');?>