
<div class="container mt-5">
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title"><?= $data['user']['nama']; ?></h5>
            <h6 class="card-subtitle mb-2 text-muted"><?= $data['user']['username']; ?></h6>
            <p class="card-text"><?= $data['user']['password']; ?></p>
            <a href="<?=BASEURL; ?>/user" class="card-link">Kembali</a>
        </div>
    </div>

<div>