<?php include ('template/header.php');?>
    <title>Login - SINAUIN</title>
  <!-- login -->
  <div class="container">
<div class="card border-success mb-3" style="max-width: 25rem;">
  <div class="card-header text-center">LOG IN</div>
    <div class="card-body text-success">
      <form action="loginaksi.php" method="post">
        <div class="form-group">
          <label for="email">Email address</label>
          <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Enter email">
          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
           <label for="password">Password</label>
            <input type="password" class="form-control" name="password" placeholder="Password">
        </div>
        <div class="form-group">
          <a href="#" class="card-link">Lupa password?</a>
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-success">Login</button>
          <a> or</a>
          <a class="btn btn-outline-success" href="daftar.php">Register</a>
        </div>
      </form>
    </div>
  </div>
</div>
</div>
<!-- akhir login -->
<?php include ('template/footer.php');?>