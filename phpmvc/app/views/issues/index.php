<div class="container mt-4">

  <div class="row">
    <div class="col-lg-6">
        <?php Flasher::flash(); ?>
    </div>
  </div>

    <!-- search -->
    <div class="row">
      <div class="col-lg-6 mx-auto">
        <form action="<?= BASEURL; ?>/issues/cari" method="post">
          <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Search issues..." name="keyword" id="keyword" autocomplete="off">
            <button class="btn btn-outline-primary" type="submit" id="tombolCari">Search</button>
          </div>
        </form>
      </div>
    </div>

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary tombolTambahData" data-bs-toggle="modal" data-bs-target="#formModal" style="margin-bottom:15px; float:right">
        Add Issues
    </button>
    <br>
    <h3>Daftar Issues</h3>
    <?php foreach( $data['issues'] as $issues ) : ?>
    <div class="card mt-5 mx-auto col-lg-2 mb-5" style="width: 60rem;">
        <img src="<?= BASEURL; ?>/img/<?= $issues['gambar']; ?>" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title"><?= $issues['judul']; ?></h5>
            <p class="card-text"><?= substr($issues['paragraf1'],0,500); ?>...</p>
            <a href="<?= BASEURL; ?>/issues/detail/<?= $issues['id_issues']; ?>" class="btn btn-primary">Read More</a>
            <a href="<?= BASEURL; ?>/issues/hapus/<?= $issues['id_issues']; ?>" class="btn btn-danger" style="float:right" onclick="return confirm('yakin ?');">Delete</a>
            <a href="<?= BASEURL; ?>/issues/ubah/<?= $issues['id_issues']; ?>" class="btn btn-success tampilModalUbah" style="float:right; margin-right:10px;" data-bs-toggle="modal" data-bs-target="#formModal" data-id="<?= $issues['id_issues']; ?>">Edit</a>
        </div>
    </div>
    <?php endforeach; ?>

</div>

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="judulModal">Add Issues</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
        <form action="<?= BASEURL; ?>/issues/tambah" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id_issues" id="id_issues">
            <div class="mb-3">
                <label for="judul" class="form-label">Judul</label>
                <input type="text" class="form-control" id="judul" name="judul">
            </div>

            <div class="mb-3">
                <label for="paragraf1" class="form-label">Paragraf 1</label>
                <textarea class="form-control" id="paragraf1" name="paragraf1" rows="3"></textarea>
            </div>
            <div class="mb-3">
                <label for="paragraf2" class="form-label">Paragraf 2</label>
                <textarea class="form-control" id="paragraf2" name="paragraf2" rows="3"></textarea>
            </div>
            <div class="mb-3">
                <label for="paragraf3" class="form-label">Paragraf 3</label>
                <textarea class="form-control" id="paragraf3" name="paragraf3" rows="3"></textarea>
            </div>

            <div class="mb-3" id="gambar">
                <label for="gambar" class="form-label">Input Gambar</label>
                <input type="file" class="form-control-file" id="gambar" name="gambar">
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
