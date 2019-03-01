<?php include 'config.php'; ?>
<br>
<?php include ('header.php'); ?>
<br> <br>
<title>Buat Soal</title>
<h2><center>Mata Pelajaran</center></h2>
		<div class="card card-c" style="width: 20rem;">
		<div class="text-center">
  	<ul class="list-group list-group-flush">
	    <?php 	
	        	$sql = "SELECT * FROM mata_pelajaran";
	        	$mapel=mysqli_query($conn,$sql);

	        	while ($k = mysqli_fetch_array($mapel, MYSQLI_ASSOC)){ 
	         ?>
	          <input type="hidden" name="id_mata_pelajaran" value="<?php echo $k['id_mata_pelajaran']; ?>" readonly>
	          <a href="jsoal.php?idmapel=<?php echo $k['id_mata_pelajaran'];?>" class="list-group-item"><?php echo $k['keterangan']; ?></a>
	      <?php } ?>
  </ul>
  </div>
</div>