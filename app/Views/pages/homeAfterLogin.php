<?= $this->extend('layout/page_layout') ?>

<?= $this->section('content') ?>
<!-- HERO -->
<div class="hero vh-100 d-flex align-items-center" id="home">
    <div class="container">
        <div class="row">
            <div class="col-lg-7" style="margin-bottom: 75px;">
                <img class="imghome" src="images/young man in formalwear sitting on the floor with phone.png">
                <h1 class="text-white">Satu platform inovatif untuk pemantauan harga sembako</h1>
                <p class="text-white my-3">Mulai dari ketersediaan pangan, harga, dan distribusi sembako di berbagai wilayah. Sembakuy #bikingampang semua urusan dapur.</p>

             </div>
        </div>
    </div>
  </div>
<!-- //HERO -->

  <div class="container" style="margin-top: -130px; margin-bottom: 110px;">
    <a href="<?= base_url(); ?>peta" id="masuk" class="btn me-2 btn-primary">Peta</a>
    <a href="<?= base_url(); ?>cari" id="daftar" class="btn btn-outline-light">Cari</a>
  </div>

  <?= $this->endSection() ?>
