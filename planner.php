   <?php include ('template/header.php');?>
   <title>Planner - SINAUIN</title>
    <!-- kalender -->
 <div class="container plankal">
        <iframe src="https://calendar.google.com/calendar/embed?height=600&amp;wkst=1&amp;bgcolor=%2333cc00&amp;src=akunseken44%40gmail.com&amp;color=%231B887A&amp;src=id.indonesian%23holiday%40group.v.calendar.google.com&amp;color=%23125A12&amp;ctz=Asia%2FJakarta" style="border:solid 1px #777" width="800" height="600" frameborder="0" scrolling="no"></iframe>
 </div>
    <!-- akhir kalender -->

    <!-- tombol2 -->
  <div class="container">
      <div class="row planner">
        <div class="col-lg-6">
        <br> <a href="/kalender/index.php" class="btn btn-success">Tambah & Edit Rencana</a> </br>
        <br>  <a class="btn btn-success text-light">Hapus Rencana</a> </br>
        </div>
      </div>
  </div>
  <!-- akhir tombol2 -->
<?php include ('template/footer.php');?>