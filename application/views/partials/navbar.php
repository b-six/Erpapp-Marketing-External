<!-- Dropdown Structure -->
<ul id="dropdown1" class="dropdown-content">
  <li><a href="daftar_produk?produk=1">Daftar Produk</a></li>
  <li><a href="pesan_produk">Pesan Produk</a></li>
</ul>

<!-- navbar -->
<nav class="red darken-4">
  <div class="nav-wrapper">
    <a href="main" class="brand-logo logo-sosro">
        <img src="<?php echo base_url('assets/img/sinarsosro_logo.png'); ?>" alt="logo pt. sinar sosro" height="50px;">
    </a>
    <ul class="right hide-on-med-and-down">
        <!-- Dropdown Trigger -->
      <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">Produk<i class="material-icons right">arrow_drop_down</i></a></li>
      <li><a href="about">Tentang Kami</a></li>
      <li class="divider"></li>
      <li><a href="#">Login</a></li>
    </ul>
  </div>
</nav>