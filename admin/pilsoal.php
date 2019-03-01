<br>
<?php include ('header.php');?>
</br>
<br>
	<title>Data Pilihan Soal</title>
	<div class="container">
		<h2><center>DATA PILIHAN SOAL</center></h2>
</br>
		<table class="tabel" align="center">
	</div>
	<tr>
		<th>ID PilSoal</th>
		<th>ID Mapel</th>
		<th>Materi</th>
		<th>Soal</th>
		<th>pilihan A</th>
		<th>pilihan B</th>
		<th>pilihan C</th>
		<th>pilihan D</th>
		<th>pilihan E</th>
		<th>Answer</th>
		<th>User Ans</th>
		<th>Aksi</th>
	</tr>
<?php 
	include('config.php');

	$sql_view = "SELECT * FROM pilihan_soal";

	$pilsoal=mysqli_query($conn, $sql_view);

	while ($baris_data = mysqli_fetch_array($pilsoal, MYSQLI_ASSOC)) { ?>
		<tr>
			<td><?php echo $baris_data['id_pilihan_soal']; ?></td>
			<td><?php echo $baris_data['id_mata_pelajaran']; ?></td>
			<td><?php echo $baris_data['materi']; ?></td>
			<td><?php echo $baris_data['que']; ?></td>
			<td><?php echo $baris_data['pilihan_a']; ?></td>
			<td><?php echo $baris_data['pilihan_b']; ?></td>
			<td><?php echo $baris_data['pilihan_c']; ?></td>
			<td><?php echo $baris_data['pilihan_d']; ?></td>
			<td><?php echo $baris_data['pilihan_e']; ?></td>
			<td><?php echo $baris_data['ans']; ?></td>
			<td><?php echo $baris_data['userans']; ?></td>
			<td>
	            <a class="btn edit btn-info btn-sm" href="editpilsoal.php?id_pilihan_soal=<?php echo $baris_data['id_pilihan_soal']; ?>">Edit</a>
	           <a class="btn hapus btn-warning btn-sm" href="delpilsoal.php?id_pilihan_soal=<?php echo $baris_data['id_pilihan_soal']; ?>">Hapus</a>
	          </td>
		</tr>
		<?php } ?>
		<a class="btn tambah btn-primary btn-sm" href="addpilsoal.php?id_pilihan_soal=<?php echo $baris_data['id_pilihan_soal'];?>">Tambah</a>
	</table>
</div>
<!-- <?php include ('footer.php');?> -->