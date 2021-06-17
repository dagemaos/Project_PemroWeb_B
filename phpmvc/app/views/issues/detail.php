<div class="card bg-dark text-white">
  <img src="<?= BASEURL; ?>/img/<?= $data['issues']['gambar']; ?>" class="card-img" alt="...">
  <div class="card-img-overlay">
    <h1 class="card-title"><?= $data['issues']['judul']; ?></h1>
  </div>
</div>

<div class="container mt-5">

  <!-- START THE PARAGRAF -->

  <hr class="featurette-divider">

  <div class="row featurette">
    <div class="col-md-7">
      <h2 class="featurette-heading">Firstly...</h2>
      <p class="lead"><?= $data['issues']['paragraf1']; ?></p>
    </div>
    <div class="col-md-5">
      <img src="<?= BASEURL; ?>/img/firstly.jpg ?>" class="featurette-image img-fluid mx-auto" alt="...">
      <!-- <img class="featurette-image img-fluid mx-auto" src="<? BASEURL; ?>/img/firstly.jpg" alt=""> -->
    </div>
  </div>

  <hr class="featurette-divider">

  <div class="row featurette">
    <div class="col-md-7 order-md-2">
      <h2 class="featurette-heading">Secondly...</h2>
      <p class="lead"><?= $data['issues']['paragraf2']; ?></p>
    </div>
    <div class="col-md-5 order-md-1">
      <img src="<?= BASEURL; ?>/img/secondly.jpg ?>" class="featurette-image img-fluid mx-auto" alt="..."> 
      <!-- <img class="featurette-image img-fluid mx-auto" data-src="holder.js" alt="Generic placeholder image"> -->
    </div>
  </div>

  <hr class="featurette-divider">

  <div class="row featurette">
    <div class="col-md-7">
      <h2 class="featurette-heading">And lastly...</h2>
      <p class="lead"><?= $data['issues']['paragraf3']; ?></p>
    </div>
    <div class="col-md-5">
      <img src="<?= BASEURL; ?>/img/lastly.jpg ?>" class="featurette-image img-fluid mx-auto" alt="...">
      <!-- <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="Generic placeholder image"> -->
    </div>
  </div>

  <hr class="featurette-divider">

  <!-- /END THE PARAGRAF -->

  <p class="float-right"><a href="<?= BASEURL; ?>/issues" class="btn btn-primary">Back</a></p>

</div>