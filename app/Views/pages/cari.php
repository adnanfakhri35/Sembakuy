<?= $this->extend('layout/page_layout') ?>

<?= $this->section('content') ?>
     <!-- HERO -->
     <div class="hero d-flex align-items-center" id="home">
        <div class="container" style="margin-top: -250px;">
            
            <div class="col-lg-7 d-flex" style="margin-top: 375px;">
                <h2 class="text-white">Telusuri...</h2>
            </div>
                
            <div class="d-flex">
                <div class="input-box">
                    <i class="uil uil-search"></i>
                    <input type="text" placeholder="Ketik  kata kunci (misal: Cara Membuat Akun)" />
                    <button class="button">Cari</button>
                </div>
            </div>  
            <br>

            <!-- Carosel -->

            <div id="carouselExampleControlsNoTouching" class="carousel slide" data-bs-touch="false">
                <div class="carousel-inner">
                  
                    <!-- Beras -->
                  <div class="carousel-item active" 
                       style="background-image: url(../images/kotakCari.png); background-position: center; background-size: cover; background-attachment: fixed; position: relative; border-radius: 25px; width: 1260px;">
                  <div class="d-flex align-items-center justify-content-center">
                    <div class="text-white" style="text-align: center;">
                        <img src="images/beras.png">
                        <h3>Beras</h3>
                    </div>

                    <div style="margin-left: 100px;">
                        <h4 class="text-white">Stok Terbanyak</h4>
                        <div class="d-flex align-items-center" style="background-color: #ffffff; border-radius: 15px;">
                            <img src="images/fotopasarsukasari.png">
                            <h5 style="margin-left: 15px; padding-right: 25px; margin-top: 5px;">Pasar Sukasari</h5>
                        </div>
                    </div>

                    <div style="margin-left: 25px;">
                        <h4 class="text-white">Harga Terendah</h4>
                        <div class="d-flex align-items-center" style="background-color: #ffffff; border-radius: 15px;">
                            <img src="images/fotopasarsukasari.png">
                            <h5 style="margin-left: 15px; padding-right: 25px; margin-top: 5px;">Pasar Sukasari</h5>
                        </div>
                    </div>

                    <div style="margin-left: 25px;">
                        <h4 class="text-white">Rating Tertinggi</h4>
                        <div class="d-flex align-items-center" style="background-color: #ffffff; border-radius: 15px;">
                            <img src="images/fotopasarsukasari.png">
                            <h5 style="margin-left: 15px; padding-right: 25px; margin-top: 5px;">Pasar Sukasari</h5>
                        </div>
                    </div>
                  </div>  
                  </div>
                  
                  <!-- Gula -->
                  <div class="carousel-item" 
                       style="background-image: url(../images/kotakCari.png); background-position: center; background-size: cover; background-attachment: fixed; position: relative; border-radius: 25px; width: 1260px;">
                    <div class="d-flex align-items-center justify-content-center">
                    <div class="text-white" style="text-align: center;">
                        <img src="images/gula.png">
                        <h3>Gula</h3>
                    </div>

                        <div style="margin-left: 100px;">
                        <h4 class="text-white">Stok Terbanyak</h4>
                        <div class="d-flex align-items-center" style="background-color: #ffffff; border-radius: 15px;">
                            <img src="images/fotopasarsukasari.png">
                            <h5 style="margin-left: 15px; padding-right: 25px; margin-top: 5px;">Pasar Sukasari</h5>
                        </div>
                    </div>

                    <div style="margin-left: 25px;">
                        <h4 class="text-white">Harga Terendah</h4>
                        <div class="d-flex align-items-center" style="background-color: #ffffff; border-radius: 15px;">
                            <img src="images/fotopasarsukasari.png">
                            <h5 style="margin-left: 15px; padding-right: 25px; margin-top: 5px;">Pasar Sukasari</h5>
                        </div>
                    </div>

                    <div style="margin-left: 25px;">
                        <h4 class="text-white">Rating Tertinggi</h4>
                        <div class="d-flex align-items-center" style="background-color: #ffffff; border-radius: 15px;">
                            <img src="images/fotopasarsukasari.png">
                            <h5 style="margin-left: 15px; padding-right: 25px; margin-top: 5px;">Pasar Sukasari</h5>
                        </div>
                    </div>
                  </div>  
                  </div>

                  <!-- Daging -->
                  <div class="carousel-item" 
                  style="background-image: url(../images/kotakCari.png); background-position: center; background-size: cover; background-attachment: fixed; position: relative; border-radius: 25px; width: 1260px;">
             <div class="d-flex align-items-center justify-content-center">
               <div class="text-white" style="text-align: center;">
                   <img src="images/daging.png">
                   <h3>Daging</h3>
               </div>

               <div style="margin-left: 100px;">
                   <h4 class="text-white">Stok Terbanyak</h4>
                   <div class="d-flex align-items-center" style="background-color: #ffffff; border-radius: 15px;">
                       <img src="images/fotopasarsukasari.png">
                       <h5 style="margin-left: 15px; padding-right: 25px; margin-top: 5px;">Pasar Sukasari</h5>
                   </div>
               </div>

               <div style="margin-left: 25px;">
                   <h4 class="text-white">Harga Terendah</h4>
                   <div class="d-flex align-items-center" style="background-color: #ffffff; border-radius: 15px;">
                       <img src="images/fotopasarsukasari.png">
                       <h5 style="margin-left: 15px; padding-right: 25px; margin-top: 5px;">Pasar Sukasari</h5>
                   </div>
               </div>

               <div style="margin-left: 25px;">
                   <h4 class="text-white">Rating Tertinggi</h4>
                   <div class="d-flex align-items-center" style="background-color: #ffffff; border-radius: 15px;">
                       <img src="images/fotopasarsukasari.png">
                       <h5 style="margin-left: 15px; padding-right: 25px; margin-top: 5px;">Pasar Sukasari</h5>
                   </div>
               </div>
             </div>  
                  </div>

                  <!-- Sayur -->
                  <div class="carousel-item" 
                  style="background-image: url(../images/kotakCari.png); background-position: center; background-size: cover; background-attachment: fixed; position: relative; border-radius: 25px; width: 1260px;">
             <div class="d-flex align-items-center justify-content-center">
               <div class="text-white" style="text-align: center;">
                   <img src="images/sayurbuah.png">
                   <h3>Sayur dan Buah</h3>
               </div>

               <div style="margin-left: 100px;">
                   <h4 class="text-white">Stok Terbanyak</h4>
                   <div class="d-flex align-items-center" style="background-color: #ffffff; border-radius: 15px;">
                       <img src="images/fotopasarsukasari.png">
                       <h5 style="margin-left: 15px; padding-right: 25px; margin-top: 5px;">Pasar Sukasari</h5>
                   </div>
               </div>

               <div style="margin-left: 25px;">
                   <h4 class="text-white">Harga Terendah</h4>
                   <div class="d-flex align-items-center" style="background-color: #ffffff; border-radius: 15px;">
                       <img src="images/fotopasarsukasari.png">
                       <h5 style="margin-left: 15px; padding-right: 25px; margin-top: 5px;">Pasar Sukasari</h5>
                   </div>
               </div>

               <div style="margin-left: 25px;">
                   <h4 class="text-white">Rating Tertinggi</h4>
                   <div class="d-flex align-items-center" style="background-color: #ffffff; border-radius: 15px;">
                       <img src="images/fotopasarsukasari.png">
                       <h5 style="margin-left: 15px; padding-right: 25px; margin-top: 5px;">Pasar Sukasari</h5>
                   </div>
               </div>
             </div>  
                  </div>

                  <!-- Minyak -->
                  <div class="carousel-item" 
                  style="background-image: url(../images/kotakCari.png); background-position: center; background-size: cover; background-attachment: fixed; position: relative; border-radius: 25px; width: 1260px;">
             <div class="d-flex align-items-center justify-content-center">
               <div class="text-white" style="text-align: center;">
                   <img src="images/minyak.png">
                   <h3>Minyak Sayur</h3>
               </div>

               <div style="margin-left: 100px;">
                   <h4 class="text-white">Stok Terbanyak</h4>
                   <div class="d-flex align-items-center" style="background-color: #ffffff; border-radius: 15px;">
                       <img src="images/fotopasarsukasari.png">
                       <h5 style="margin-left: 15px; padding-right: 25px; margin-top: 5px;">Pasar Sukasari</h5>
                   </div>
               </div>

               <div style="margin-left: 25px;">
                   <h4 class="text-white">Harga Terendah</h4>
                   <div class="d-flex align-items-center" style="background-color: #ffffff; border-radius: 15px;">
                       <img src="images/fotopasarsukasari.png">
                       <h5 style="margin-left: 15px; padding-right: 25px; margin-top: 5px;">Pasar Sukasari</h5>
                   </div>
               </div>

               <div style="margin-left: 25px;">
                   <h4 class="text-white">Rating Tertinggi</h4>
                   <div class="d-flex align-items-center" style="background-color: #ffffff; border-radius: 15px;">
                       <img src="images/fotopasarsukasari.png">
                       <h5 style="margin-left: 15px; padding-right: 25px; margin-top: 5px;">Pasar Sukasari</h5>
                   </div>
               </div>
             </div>  
                  </div>

                  <!-- Susu -->
                  <div class="carousel-item" 
                  style="background-image: url(../images/kotakCari.png); background-position: center; background-size: cover; background-attachment: fixed; position: relative; border-radius: 25px; width: 1260px;">
             <div class="d-flex align-items-center justify-content-center">
               <div class="text-white" style="text-align: center;">
                   <img src="images/susu.png">
                   <h3>Susu</h3>
               </div>

               <div style="margin-left: 100px;">
                   <h4 class="text-white">Stok Terbanyak</h4>
                   <div class="d-flex align-items-center" style="background-color: #ffffff; border-radius: 15px;">
                       <img src="images/fotopasarsukasari.png">
                       <h5 style="margin-left: 15px; padding-right: 25px; margin-top: 5px;">Pasar Sukasari</h5>
                   </div>
               </div>

               <div style="margin-left: 25px;">
                   <h4 class="text-white">Harga Terendah</h4>
                   <div class="d-flex align-items-center" style="background-color: #ffffff; border-radius: 15px;">
                       <img src="images/fotopasarsukasari.png">
                       <h5 style="margin-left: 15px; padding-right: 25px; margin-top: 5px;">Pasar Sukasari</h5>
                   </div>
               </div>

               <div style="margin-left: 25px;">
                   <h4 class="text-white">Rating Tertinggi</h4>
                   <div class="d-flex align-items-center" style="background-color: #ffffff; border-radius: 15px;">
                       <img src="images/fotopasarsukasari.png">
                       <h5 style="margin-left: 15px; padding-right: 25px; margin-top: 5px;">Pasar Sukasari</h5>
                   </div>
               </div>
             </div>  
                  </div>

                  <!-- Telur -->
                  <div class="carousel-item" 
                  style="background-image: url(../images/kotakCari.png); background-position: center; background-size: cover; background-attachment: fixed; position: relative; border-radius: 25px; width: 1260px;">
             <div class="d-flex align-items-center justify-content-center">
               <div class="text-white" style="text-align: center;">
                   <img src="images/telur.png">
                   <h3>Telur Ayam</h3>
               </div>

               <div style="margin-left: 100px;">
                   <h4 class="text-white">Stok Terbanyak</h4>
                   <div class="d-flex align-items-center" style="background-color: #ffffff; border-radius: 15px;">
                       <img src="images/fotopasarsukasari.png">
                       <h5 style="margin-left: 15px; padding-right: 25px; margin-top: 5px;">Pasar Sukasari</h5>
                   </div>
               </div>

               <div style="margin-left: 25px;">
                   <h4 class="text-white">Harga Terendah</h4>
                   <div class="d-flex align-items-center" style="background-color: #ffffff; border-radius: 15px;">
                       <img src="images/fotopasarsukasari.png">
                       <h5 style="margin-left: 15px; padding-right: 25px; margin-top: 5px;">Pasar Sukasari</h5>
                   </div>
               </div>

               <div style="margin-left: 25px;">
                   <h4 class="text-white">Rating Tertinggi</h4>
                   <div class="d-flex align-items-center" style="background-color: #ffffff; border-radius: 15px;">
                       <img src="images/fotopasarsukasari.png">
                       <h5 style="margin-left: 15px; padding-right: 25px; margin-top: 5px;">Pasar Sukasari</h5>
                   </div>
               </div>
             </div>  
                  </div>

                  <!-- Gas -->
                  <div class="carousel-item" 
                  style="background-image: url(../images/kotakCari.png); background-position: center; background-size: cover; background-attachment: fixed; position: relative; border-radius: 25px; width: 1260px;">
             <div class="d-flex align-items-center justify-content-center">
               <div class="text-white" style="text-align: center;">
                   <img src="images/gas.png">
                   <h3>Gas Elpiji</h3>
               </div>

               <div style="margin-left: 100px;">
                   <h4 class="text-white">Stok Terbanyak</h4>
                   <div class="d-flex align-items-center" style="background-color: #ffffff; border-radius: 15px;">
                       <img src="images/fotopasarsukasari.png">
                       <h5 style="margin-left: 15px; padding-right: 25px; margin-top: 5px;">Pasar Sukasari</h5>
                   </div>
               </div>

               <div style="margin-left: 25px;">
                   <h4 class="text-white">Harga Terendah</h4>
                   <div class="d-flex align-items-center" style="background-color: #ffffff; border-radius: 15px;">
                       <img src="images/fotopasarsukasari.png">
                       <h5 style="margin-left: 15px; padding-right: 25px; margin-top: 5px;">Pasar Sukasari</h5>
                   </div>
               </div>

               <div style="margin-left: 25px;">
                   <h4 class="text-white">Rating Tertinggi</h4>
                   <div class="d-flex align-items-center" style="background-color: #ffffff; border-radius: 15px;">
                       <img src="images/fotopasarsukasari.png">
                       <h5 style="margin-left: 15px; padding-right: 25px; margin-top: 5px;">Pasar Sukasari</h5>
                   </div>
               </div>
             </div>  
                  </div>

                  <!-- Garam -->
                  <div class="carousel-item" 
                  style="background-image: url(../images/kotakCari.png); background-position: center; background-size: cover; background-attachment: fixed; position: relative; border-radius: 25px; width: 1260px;">
             <div class="d-flex align-items-center justify-content-center">
               <div class="text-white" style="text-align: center;">
                   <img src="images/garam.png">
                   <h3>Garam</h3>
               </div>

               <div style="margin-left: 100px;">
                   <h4 class="text-white">Stok Terbanyak</h4>
                   <div class="d-flex align-items-center" style="background-color: #ffffff; border-radius: 15px;">
                       <img src="images/fotopasarsukasari.png">
                       <h5 style="margin-left: 15px; padding-right: 25px; margin-top: 5px;">Pasar Sukasari</h5>
                   </div>
               </div>

               <div style="margin-left: 25px;">
                   <h4 class="text-white">Harga Terendah</h4>
                   <div class="d-flex align-items-center" style="background-color: #ffffff; border-radius: 15px;">
                       <img src="images/fotopasarsukasari.png">
                       <h5 style="margin-left: 15px; padding-right: 25px; margin-top: 5px;">Pasar Sukasari</h5>
                   </div>
               </div>

               <div style="margin-left: 25px;">
                   <h4 class="text-white">Rating Tertinggi</h4>
                   <div class="d-flex align-items-center" style="background-color: #ffffff; border-radius: 15px;">
                       <img src="images/fotopasarsukasari.png">
                       <h5 style="margin-left: 15px; padding-right: 25px; margin-top: 5px;">Pasar Sukasari</h5>
                   </div>
               </div>
             </div>  
                  </div>

                </div>
                <button style="margin-left: -100px;" class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="prev">
                  <span style="background-color: #F4993C; border-radius: 10px;" class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button style="margin-right: -65px;" class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="next">
                  <span style="background-color: #F4993C; border-radius: 10px;" class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
            </div>

            <div style="background-color: #ffffff; border-radius: 25px; margin-top: 25px;">
                <div class="d-flex">
                    <div style="margin-top: 25px;">
                        <h3 style="margin-left: 35px;">Pasar Pilihan</h3>
                        <ul class="menu_items" style="list-style: none;" >
                            <div class="menu_title menu_items"></div>
                            
                            <li class="item" style="margin-bottom: 12px;">
                                <div class="card rounded-4" style="width: 30rem; background-color: rgba(255, 255, 255, 0.707);">
                                    <div class="card-body ">
                                        <div class="d-flex">
                                            <div class="row">
                                                <div><img src="images/surken.png" style="max-width: 250px; border-radius: 10px;"></div>
                                                <h5 class="card-title" style="text-align: center; margin-top: 7px;">Pasar Surya Kencana</h5>
                                            </div>
                                            <div class="row" style="margin-left: 10px;">
                                                <p class="card-text " >
                                                    <span style="font-weight: 600;">Alamat :</span> Jl. Suryakencana, 
                                                    RT.03 / RW.07, Babakan, Kec. 
                                                    Bogor Tengah, Kota Bogor, 
                                                    Jawa Barat 16123
                                                    <br>
                                                    <span style="font-weight: 600;">Jam :</span>  Tutup ⋅ Buka Sen pukul 07.00
                                                    <br>
                                                    <span style="font-weight: 600;">Provinsi :</span>  Jawa Barat
                                                    
                                                    <a href="<?= base_url() ?>detailPasar" id="detail" class="btn me-2 btn-primary">Detail</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li class="item">
                                <div class="card rounded-4" style="width: 30rem; background-color: rgba(255, 255, 255, 0.707);">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="row">
                                                <div><img src="images/pasarbaru.png" style="max-width: 250px; border-radius: 10px;"></div>
                                                <h5 class="card-title" style="text-align: center; margin-top: 7px;">Pasar Baru</h5>
                                            </div>
                                            <div class="row" style="margin-left: 10px;">
                                                <p class="card-text">
                                                    <span style="font-weight: 600;">Alamat :</span> RT.03/RW.07, Babakan Ps., 
                                                    Kecamatan Bogor Tengah, Kota Bogor, 
                                                    Jawa Barat 16126
                                                    <br>
                                                    <span style="font-weight: 600;">Jam :</span> Buka 24 Jam
                                                    <br>
                                                    <span style="font-weight: 600;">Provinsi :</span>  Jawa Barat
                                                    <a href="sembakoPasar.html" id="detail" class="btn me-2 btn-primary">Detail</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                          </ul>
                    </div>

                    <div style="margin-top: 25px;">
                        <h3 style="margin-left: 75px;">Komoditas Pilihan</h3>
                        <div class="d-flex justify-content-center" style="margin-left: 75px;">
                            <!-- Beras -->
                            <div class="card rounded-5" style="width: 250px; height: 165px; background-color: #F4993C;">
                                <div class="card-body ">
                                    <div class="d-flex">
                                        <div class="row">
                                            <div><img src="images/GambarBeras.png" style="max-width: 250px; border-radius: 10px;"></div>
                                            <h5 class="card-title text-white" style="margin-top: -25px; margin-left: 10px;">Beras</h5>
                                            <!-- <a href="InformasiBeras.html" id="detail" class="btn btn-outline-light" style="width: 100px; border-radius: 20px; margin-left: 15px; margin-top: 3px;">Detail</a> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <card style="width: 15px;">
                            </card>

                            <!-- Gula -->
                            <div class="card rounded-5" style="width: 250px; height: 165px; background-color: #F4993C;">
                                <div class="card-body ">
                                    <div class="d-flex">
                                        <div class="row">
                                            <div><img src="images/GambarGula.png" style="max-width: 250px; border-radius: 10px;"></div>
                                            <h5 class="card-title text-white" style="margin-top: -25px; margin-left: 10px;">Gula</h5>
                                            <!-- <a href="InformasiGula.html" id="detail" class="btn btn-outline-light" style="width: 100px; border-radius: 20px; margin-left: 15px; margin-top: 3px;">Detail</a> -->
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            <card style="width: 15px;">
                            </card>
                        </div>
                        <div class="d-flex justify-content-center" style="margin-left: 75px; margin-top: 25px;">
                            <!-- Daging -->
                            <div class="card rounded-5" style="width: 250px; height: 165px; background-color: #F4993C;">
                                <div class="card-body ">
                                    <div class="d-flex">
                                        <div class="row">
                                            <div><img src="images/GambarDaging.png" style="max-width: 250px; border-radius: 10px;"></div>
                                            <h5 class="card-title text-white" style="margin-top: -25px; margin-left: 10px;">Daging</h5>
                                            <!-- <a href="InformasiDaging.html" id="detail" class="btn btn-outline-light" style="width: 100px; border-radius: 20px; margin-left: 15px; margin-top: 3px;">Detail</a> -->
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            <card style="width: 15px;">
                            </card>

                            <!-- Sayur dan Buah -->
                            <div class="card rounded-5" style="width: 250px; height: 165px; background-color: #F4993C;">
                                <div class="card-body ">
                                    <div class="d-flex">
                                        <div class="row">
                                            <div><img src="images/Gambar Sayur dan Buah.png" style="max-width: 250px; border-radius: 10px;"></div>
                                            <h5 class="card-title text-white" style="margin-top: -25px; margin-left: 10px; font-size: 11pt;">Sayur dan <br>Buah-Buahan</h5>
                                            <!-- <a href="InformasiSayurBuah.html" id="detail" class="btn btn-outline-light" style="width: 100px; border-radius: 20px; margin-left: 15px; margin-top: -5px;">Detail</a> -->
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
      </div>
    <!-- //HERO -->

<?= $this->endSection() ?>
