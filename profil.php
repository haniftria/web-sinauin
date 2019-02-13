<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <!-- My CSS -->
    <link rel="stylesheet" type="text/css" href="style.css">

    <title>Profil - SINAUIN</title>
  </head>
  <body>
    <!-- profil  -->
  <div class="card card-profil border-success mb-3" style="max-width: 40rem;">
  <div class="card-header text-center">Profil</div>
  <div class="card-body text-success">
    <img src="img/prof.png" class=".rounded">
    <form>
  <fieldset disabled>
    <div class="form-group">
      <label for="disabledTextInput">Nama</label>
      <input type="text" id="disabledTextInput" class="form-control" placeholder="AAAAA">
    </div>
    <div class="form-group">
      <label for="disabledTextInput">NIS</label>
      <input type="text" id="disabledTextInput" class="form-control" placeholder="31031172">
    </div>
    <div class="form-group">
      <label for="disabledTextInput">Tempat Tanggal Lahir</label>
      <input type="text" id="disabledTextInput" class="form-control" placeholder="Purwokerto, 20 Januari 2000">
    </div>
    <div class="form-group">
      <label for="disabledTextInput">Kelas</label>
      <input type="text" id="disabledTextInput" class="form-control" placeholder="X1 TKJ 2">
    </div>
    <div class="form-group">
      <label for="disabledTextInput">Alamat</label>
      <input type="text" id="disabledTextInput" class="form-control" placeholder="Jl. Mangga no.1">
    </div>
    <div class="form-group">
      <label for="disabledTextInput">No HP</label>
      <input type="text" id="disabledTextInput" class="form-control" placeholder="08980898937">
    </div>
    <div class="form-group">
      <label for="disabledTextInput">Email</label>
      <input type="text" id="disabledTextInput" class="form-control" placeholder="aaaa@gmail.com">
    </div>
    <div class="form-group">
      <label for="disabledTextInput">Password</label>
      <input type="password" id="disabledTextInput" class="form-control" placeholder="******">
    </div>
  </fieldset>
  <div class="btn-profil">
    <a class="btn btn-success text-light"onclick="konfirmasiDulu()">Hapus Akun</a>
    <p id="hasil"></p>
    <script>
      function konfirmasiDulu(){
        var konfirmasi = confirm("Apakah Anda Yakin Ingin Menghapus Akun??");
        var text = "";
        
        if(konfirmasi === true) {
          text = "Akun anda telah dihapus";
        }else{
          text = "Akun batal dihapus";
        }
        
        document.getElementById("hasil").innerHTML = text;
      }
    </script>    
    <a href="#" class="btn btn-success">Edit Profil</a>
    <a href="#" class="btn btn-prf btn-success">OK</a>
  </div>
</form>
  </div>
    <!-- akhir profil -->


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </body>
</html>