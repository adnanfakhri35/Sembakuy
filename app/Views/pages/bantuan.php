<?= $this->extend('layout/page_layout') ?>

<?= $this->section('content') ?>
<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
~~~~~~~~~~~~~~~~~~~~~~~~~Header~~~~~~~~~~~~~~~~~~~~~~~~~
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

<header class="section__container header__container">
    <div class="header__image__container">
      <div class="header__content">
        <h1>Perlu <br> Bantuan?</h1>
        <p>Pusat Bantuan Website Sembakuy. Cari atau tanyakan kesuliatan Anda disini.</p>
        <div class="input-box">
            <i class="uil uil-search"></i>
            <input type="text" placeholder="Ketik  kata kunci (misal: Cara Membuat Akun)" />
            <button class="button">Cari</button>
        </div>
      </div>
      <div class="faq">
        <h4>Paling Sering Ditanya</h4>
        <div class="list-group list-group-flush">
            <a href="#" class="list-group-item list-group-item-action">Cara mendaftar akun Sembakuy</a>
            <a href="#" class="list-group-item list-group-item-action">Cara mengedit akun Sembakuy  </a>
            <a href="#" class="list-group-item list-group-item-action">Cara Melihat Harga</a>
            <a href="#" class="list-group-item list-group-item-action">Cara Mencari Pasar</a>
          </div>
      </div>
      <br>
    </div>
</header>

   <!-- HERO -->
   <div class="hero d-flex align-items-center">
    <div class="container">

    </div>
  </div>
<!-- //HERO -->

<div>
    <container class="bantuan-faq">

    </container>
</div>

<?= $this->endSection() ?>
