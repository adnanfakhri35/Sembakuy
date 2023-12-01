<!-- navbar -->
<nav class="navbar1">
  <div class="logo_item" >
    <a href="homepage.html" class="d-flex align-items-center"><img src="images/Logo Sembakuy@2x.png"><span>Sembakuy</span></a>  
  </div>

  <ul>
    <li><a href="<?= base_url('/homeAfterLogin')?>">Beranda</a></li>
    <li><a href="<?= base_url('/tentangKami')?>">Tentang Kami</a></li>
    <li><a href="<?= base_url('/bantuan')?>">Bantuan</a></li>
    <li class="language-dropdown">
      <div class="navbar_content">
        <div class="dropdown">
          <i class='bx bx-globe'></i>
          <span><a class="dropdown-toggle">Bahasa</a></span>
          <div class="dropdown-menu notification">
            <div class="notification-header">Bahasa</div>
            <ul class="row" style="margin-left: -25px; margin-top: -10px;">
              <li><a class="text-black" href="#"><span class="flag-icon flag-icon-id flag-icon-rounded" style="margin-right: 7px;"></span>
                Indonesia</a></li>
              <li><a class="text-black" href="#"><span class="flag-icon flag-icon-gb flag-icon-rounded" style="margin-right: 7px;"></span>
                English</a></li>     
            </ul>
          </div>
        </div>
    </div>
      </li>
      <a href="profil.html"><li class="profile-icon"><img src="images/profil.png" style="height: 25px; width: 25px;"></li></a>
      <a href="peta.html"><li class="search-icon"><img src="images/searchBlack.png"></li></a>
  </ul>

  
</nav>