<div class="container mt-5 mb-5 pb-5">
<div class="login-box col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 mx-auto" style="margin-bottom:200px;">
  <div class="login-logo">
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Silahkan Melakukan Register.</p>

      <form action="<?= BASEURL; ?>/register/tambah" method="post" enctype="multipart/form-data">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="ketikkan nama.." name="nama">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="ketikkan username.." name="username">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="ketikkan password.." name="password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Register</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
    </div>
    <!-- /.login-card-body -->
  </div>
  <div class="row">
        <div class="col-sm-12">
          <?php
            Flasher::flash();
          ?>
        </div>
      </div>
</div>



</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="<?= BASEURL; ?>/js/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?= BASEURL; ?>/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= BASEURL; ?>/js/adminlte.min.js"></script>
