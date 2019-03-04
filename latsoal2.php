<?php include ('template/header2.php');?>
<?php include ('config.php');?>
<title>Latihan Soal - SINAUIN</title>
  <!-- menu Latihan soal -->
<div class="container">
  <div class="row 1">
    <?php 
            $sql = "SELECT * FROM mata_pelajaran WHERE id_mata_pelajaran";
            $mapel=mysqli_query($conn,$sql);

            while ($k = mysqli_fetch_array($mapel, MYSQLI_ASSOC)){
           ?>
           <div class="col-lg-4">
  <div class="card-lat card border-success" style="width: 18rem;">
    <img src="img/black.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title"><?php echo $k['keterangan']; ?></h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="./quiz/index.php?id_mata_pelajaran=<?php echo $k['id_mata_pelajaran'];?>" class="list-group-item btn btn-outline-success">Go</a>
      </div>
    </div>
  </div>
      <?php } ?>
</div>
</div>
  <!-- akhir menu lat soal -->
  <?php include ('template/footer.php');?>