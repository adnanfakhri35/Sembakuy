<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="initial-scale=1,user-scalable=no,maximum-scale=1,width=device-width">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">    
    <link rel="stylesheet" href="css">
    <!-- <link rel="stylesheet" href="Qgis2Web/resources/ol.css">
    <link rel="stylesheet" href="Qgis2Web/resources/fontawesome-all.min.css">
    <link rel="stylesheet" type="text/css" href="Qgis2Web/resources/horsey.min.css">
    <link rel="stylesheet" type="text/css" href="Qgis2Web/resources/ol3-search-layer.min.css">
    <link rel="stylesheet" href="Qgis2Web/resources/ol-layerswitcher.css">
    <link rel="stylesheet" href="Qgis2Web/resources/qgis2web.css"> !-->
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.5.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <title><?= $title; ?></title>
</head>
<body>
    
<!-- navbar -->
<nav class="navbar1">
  <div class="logo_item">
      <a href="homepage.html"><img src="/images/Logo Sembakuy@2x.png">Sembakuy</a>  
  </div>

  <ul>
    <li><a href="/home">Beranda</a></li>
    <li><a href="/tentangKami">Tentang Kami</a></li>
    <li><a href="/bantuan">Bantuan</a></li>
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
      <a href="profil.html"><li class="profile-icon"><img src="/images/profil.png" style="height: 25px; width: 25px;"></li></a>
      <a href="peta.html"><li class="search-icon"><img src="/images/searchBlack.png"></li></a>
    
  </ul>  
</nav>