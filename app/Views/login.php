<?= $this->extend('layout/page_layout3') ?>

<?= $this->section('content') ?>

<!-- HERO -->
<div class="hero vh-100 d-flex align-items-center" id="home" style="margin-bottom: -75px;">
    <div class="container" style="margin-top: -250px;" >
        <div class="row justify-content-center">
            <div class="col-lg-6" style="margin-bottom: 150px;">
                <h1 class="text-white" style="text-align: center;">Welcome.</h1>
                <p class="text-white" style="text-align: center; margin-top: -15px;">Silahkan Masuk ke Akun Anda</p>    
             </div>
        </div>
    </div>
  </div>
<!-- //HERO -->
<div class="d-flex justify-content-center" >
    <?php if (!empty(session()->getFlashdata('error'))) : ?>
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <?php echo session()->getFlashdata('error'); ?>
        </div>
    <?php endif; ?>
    <form class="form justify-content-center" id="login-form" action="<?= base_url(); ?>login/process" method="post" style="margin-top: -430px; margin-bottom: 20px;" >
        <?= csrf_field(); ?> 
        <div class="form-login">
            <div class="input-box" style="text-align: center;">
                <input id="email" name="email" type="text" placeholder="Masukkan Alamat Email" class="form-control" required autofocus/>
            </div>
            <div class="input-box" style="text-align: center; margin: 10px;">
                <input id="password" name="password" type="password" placeholder="Masukkan Password" class="form-control" required/>
            </div>
            <a class="text-white" href="#" style="margin: 15px;">Lupa Password?</a>
            <br>
            <div class="btn-group1 justify-content-center" style="margin: 15px;">
                <button type="submit" id="login" class="btn btn-primary active" >Login</button>
            </div>
            <div class="text-center">
                <a class="text-white" href="daftar.html" style="margin: 15px;">Belum Punya Akun?</a>
            </div>    
        </div>
        <p class="text-white" style="text-align: center; margin-top: 15px;">Atau Login Melalui</p>
        <div class="login-sosmed d-flex justify-content-center">
            <img src="images/fb.png" alt="">
            <img src="images/ip.png" alt="">
            <img src="images/google.png" alt="">
        </div>
        <img src="images/barlogin.png" style="margin: 15px;">
        <div class=" d-flex justify-content-center">
            <p class="text-white" style="text-align: center;">By logging in, you agree to the <span><a href="#" class="text-black">Privacy Policy</a></span> 
                <br>and <span><a href="#" class="text-black">Terms & Conditions.</a></span></p>
        </div>
    </form>
    
</div>




<?= $this->endSection() ?>
