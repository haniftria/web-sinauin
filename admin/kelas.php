<br>
<?php include ('header.php');?>
</br>
<br>
<title>Data Kelas</title>
  <div class="container">
    <h2><center>DATA KELAS</center></h2>
  </br>
    <table class="tabel" align="center">
  <tr>
    <th>ID Kelas</th>
    <th>Nama Kelas</th>
    <th>Aksi</th>
  </tr></div>
  <?php
  //  1. Lakukan include koneksi.php untuk membuat koneksi
  include('config.php');

  // 2. Buat perintah SQL untuk menampilkan data
  $sql_tampil ="SELECT * FROM kelas";

  // 3. Jalankan perintah diatas dengan fungsi mysqli_query
  $kelas=mysqli_query($conn,$sql_tampil);

  // 4. Lakukan fetch dengan result type MYSQL_ASSOC

  while($baris_data=mysqli_fetch_array($kelas,MYSQLI_ASSOC)){
    ?>
    <tr>
      <td><?php echo $baris_data['id_kelas']; ?></td>
      <td><?php echo $baris_data['nama_kelas']; ?></td>
      <td>
        <a class="btn edit btn-info btn-sm" href="editkelas.php?id_kelas=<?php echo $baris_data['id_kelas']; ?>">Edit</a>
        <a class="btn hapus btn-warning btn-sm" href="deletekelas.php?id_kelas=<?php echo $baris_data['id_kelas']; ?>">Hapus</a>
          </td>
    </tr>
<?php } ?>
<a class="btn tambah btn-primary btn-sm" href="addkelas.php?id=<?php echo $baris_data['id_kelas'];?>">Tambah</a>
</body>
</html>
</table>
</div>      
<?php include ('footer.php');?>