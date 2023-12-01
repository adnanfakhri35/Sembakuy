<?= $this->extend('layout/page_layout3') ?>

<?= $this->section('content') ?>


     <!-- HERO -->
    <div class="hero vh-100 d-flex align-items-center" id="home">
        <div class="container" id="buatakun">
            <div class="row">
                <div class="col-lg-7" style="margin-bottom: 75px;">
                    <h1 class="text-white">Buatlah Akun Anda</h1>
                    <p class="text-white" style= "margin-top: -12px;">Silahkan Buat Akun Anda dan dapatkan akses pemantauan pangan dimanapun dan kapanpun</p> 
                 </div>
                 <?php if (!empty(session()->getFlashdata('error'))) : ?>
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <h4>Periksa Entrian Form</h4>
                        </hr />
                        <?php echo session()->getFlashdata('error'); ?>
                    </div>
                 <?php endif; ?>
                </div>
            </div>
        </div>
    <!-- //HERO -->
        <div class="container" id="registrasi akun" style="margin-bottom: -35px;">
            <form class="form d-flex" id="buatakun-form" action="<?= base_url(); ?>register/process" method="post">
                <?= csrf_field(); ?>
                <div class="form-buatakun">
                    <div class="input-box" style="margin-top: 10px;">
                        <label for="nama" class="form-label">Nama</label>
                        <input id="username" class="form-control" name="nama" type="text" placeholder="Masukkan Nama"  />
                    </div>
                    <div class="input-box" >
                        <label for="username" class="form-label">Username</label>
                        <input id="username" class="form-control" name="username" type="text" placeholder="Masukkan Username"  />
                    </div>
                    <div class="input-box" style="margin-top: 10px;">
                        <label for="no_telp" class="form-label">No HP</label>
                        <input id="nohp" class="form-control" name="no_telp" type="number" placeholder="Masukkan No HP"  />
                    </div>
                    <div class="input-box" style="margin-top: 10px;">
                        <label for="email" class="form-label">Email</label>
                        <input id="email" class="form-control" name="email" type="email" placeholder="Masukkan Alamat Email"  />
                    </div>
                    <div class="input-box" style="margin-top: 10px;">
                        <label for="password" class="form-label">Password</label>
                        <input id="password" class="form-control" name="password" type="password" placeholder="Masukkan Password"  />
                    </div>
                    <div class="input-box" style="margin-top: 10px;">
                        <label for="password_conf" class="form-label">Password Confirmation</label>
                        <input id="password" class="form-control" name="password_conf" type="password" placeholder="Masukkan Lagi Password"  />
                    </div>
                    <br>
                    <div class="btn-group1 d-flex">
                        <button type="submit" value="Login" id="submit" class="btn btn-primary active">Submit</button>
                        <button type="reset" value="reset" id="reset" class="btn btn-primary active" >Reset</button>
                        <div class="login-sosmed d-flex justify-content-center" style="margin-left: 60px;">
                            <img src="images/fb.png" alt="">
                            <img src="images/ip.png" alt="">
                            <img src="images/google.png" alt="">
                        </div>
                    </div>
                    <div class="d-flex">
                    <div>
                        <img src="images/halfbar.png" style="margin-top: 15px;">
                    </div>
                        <a class="text-white" href="login.html" style="margin-left: 75px;">Sudah Punya Akun?</a>
                    </div>
                </div>
            </form>

            <div class="d-flex justify-content-center" style="margin-bottom: 50px; margin-top: -100px;">
                <div class=" d-flex justify-content-center">
                    <p class="text-white" style="text-align: center;">By logging in, you agree to the <span><a href="#" class="text-black">Privacy Policy</a></span> 
                        <br>and <span><a href="#" class="text-black">Terms & Conditions.</a></span></p>
                </div>
            </div>
        </div>


<?= $this->endSection() ?>
