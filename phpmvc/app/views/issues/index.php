<div class="container mt-5">

    <h3>Daftar Issues</h3>
    <?php foreach( $data['issues'] as $issues ) : ?>
    <div class="card mt-5 mx-auto col-lg-2" style="width: 60rem;">
        <img src="<?= BASEURL; ?>/img/<?= $issues['gambar']; ?>" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title"><?= $issues['judul']; ?></h5>
            <p class="card-text"><?= substr($issues['paragraf1'],0,500); ?>...</p>
            <a href="<?= BASEURL; ?>/issues/detail/<?= $issues['id_issues']; ?>" class="btn btn-primary">Read More</a>
        </div>
    </div>
    <?php endforeach; ?>

</div>
