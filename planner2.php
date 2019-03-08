<?php 
    //error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
session_start();
if(!isset($_SESSION['nama'])) {
 header("location:/sinauinn/login.php");
} else {

 ?>
<br>
<?php include ('./template/header2.php');?>
</br>
<br>
<title>Planner - SINAUIN</title>
  <div class="container">
    <br>
    <h2><center>Planner Sinauin</center></h2>
  </br> <br>
    <table class="table" align="center">
  <tr class="bg-success text-light">
    <th>Tanggal</th>
    <th>Rencana</th>
    <th>Hasil Belajar</th>
    <th>Opsi</th>
  </tr></div>
  <?php
  include('config.php');
  $id_user=$_SESSION['id_siswa'];
  $sql_tampil ="SELECT * FROM planner WHERE id_siswa='$id_user'";

  $plan=mysqli_query($conn,$sql_tampil);

  while($row=mysqli_fetch_array($plan,MYSQLI_ASSOC)){
    ?>
    <tr>
      <td><?php echo $row['tanggal']; ?></td>
      <td><?php echo $row['plan']; ?></td>
      <td><?php echo $row['review']; ?></td>
      <td>
        <a class="btn btn-info btn-sm" href="editplan.php?id_planner=<?php echo $row['id_planner']; ?>">Edit</a>
        <a class="btn btn-warning btn-sm" href="hapusplan.php?id_planner=<?php echo $row['id_planner']; ?>">Hapus</a>
          </td>
    </tr>
<?php } ?>
<a class="btn tambah btn-primary btn-sm" href="addplan.php?id_siswa=<?php echo $id_user;?>">Tambah</a>
</body>
</html>
</table>
</div>      
<?php include ('./template/footer.php');?>
<?php } ?>