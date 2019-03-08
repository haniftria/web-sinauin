<br>
<?php include ('header.php');?>
</br>
<br>
	<title>Data Planner</title>
	<div class="container">
		<h2><center>DATA PLANNER</center></h2>
</br>

		<table class="tabel" align="center">
			<tr>
				<th>ID Planner</th>
				<th>ID Siswa</th>
				<th>Tanggal</th>
				<th>Rencana</th>
				<th>Review</th>
				<th>Aksi</th>
			</tr>
	</div>
<?php 
	include('config.php');

	$sql_view = "SELECT * FROM planner";

	$mapel=mysqli_query($conn,$sql_view);

	while($baris_data=mysqli_fetch_array($mapel,MYSQLI_ASSOC)){
		?>
		<tr>
			<td><?php echo $baris_data['id_planner'];?> </td>
			<td><?php echo $baris_data['id_siswa'];?> </td>
			<td><?php echo $baris_data['tanggal'];?> </td>
			<td><?php echo $baris_data['plan'];?> </td>
			<td><?php echo $baris_data['review'];?> </td>
			<td>
	            <a class="btn edit btn-info btn-sm" href="editplan.php?id_planner=<?php echo $baris_data['id_planner']; ?>">Edit</a>
        		<a class="btn hapus btn-warning btn-sm" href="delplan.php?id_planner=<?php echo $baris_data['id_planner']; ?>">Hapus</a>
	          </td>
		</tr>
	<?php } ?>
	<a class="btn tambah btn-primary btn-sm" href="addplan.php?id=<?php echo $baris_data['id_planner'];?>">Tambah</a>
</table>
</div>
<?php include ('footer.php');?>