<div class="container mt-4">

      <div class="row">
        <div class="col-lg-6">
        <?php Flasher::flash(); ?>
        </div>
      <div>

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#formModalUser">
        Add User
    </button>
    <br>
    <div class="row">
        <div class="col-lg-6">
        <h3>Daftar Users</h3>
        <ul class="list-group">
            <?php foreach( $data['user'] as $user ) : ?>
            <li class="list-group-item">
            <?= $user['nama']; ?>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
              <a href="<?= BASEURL; ?>/user/detail/<?= $user['id']; ?>" class="btn btn-primary ">Detail</a>
              <a href="<?= BASEURL; ?>/user/edit/<?= $user['id']; ?>" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#formModalUser">Edit</a>
              <a href="<?= BASEURL; ?>/user/hapus/<?= $user['id']; ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin?');">Hapus</a>
            </div>
            </li>
            <?php endforeach; ?>
        </ul>
        

        </div>
    </div>
   
</div>
<!-- Modal -->
<div class="modal fade" id="formModalUser" tabindex="-1" aria-labelledby="User" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="User">User</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
        <form action="<?= BASEURL; ?>/user/tambah" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama">
            </div>

            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" name="username">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="text" class="form-control" id="password" name="password">
            </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
        </form>
      </div>
    </div>
  </div>
</div>