<?= $this->extend('layout/page_layout3') ?>

<?= $this->section('content') ?>

<!-- HERO -->
<div class="hero vh-100 d-flex align-items-center" id="home" style="margin-bottom: -75px;">
    <div class="container" style="margin-top: -180px;" >
        <div class="row d-flex justify-content-center">
            <div class="col-lg-6 justify-content-center" style="margin-bottom: 0px;">
                <div class="d-flex justify-content-center">
                    <img src="images/sukses.png">
                </div>
                <h1 class="text-white" style="text-align: center;">Sukses</h1>
                <p class="text-white" style="text-align: center; margin-top: -15px;">Kami sangat senang Anda bergabung dengan <br>
                    kami menjelajahi dunia pengetahuan <br>
                    dan keindahan kata-kata.</p>    
             </div>

        </div>
    </div>
  </div>
<!-- //HERO -->
<div class="d-flex justify-content-center" >
    <form class="form justify-content-center" id="login-form" action="" method="post" style="margin-top: -240px; margin-bottom: 20px;" > 
        <div class="form-login">
            <div class="input-box" style="text-align: center;">
              
              <div class="btn-group1 justify-content-center" style="margin: 15px;">
                <a href="<?= base_url(); ?>login" type="login" value="Login" id="login" class="btn btn-primary active" >Login</a>
              </div>
              
        </div>
        <p class="text-white" style="text-align: center; margin-top: 15px;">Atau Masuk Melalui</p>
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