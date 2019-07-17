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
      <?php if ($this->session->userdata('status') == NULL) : ?>
        <li><a href="<?php echo base_url('login?login=1'); ?>"><b>Login</b></a></li>
      <?php endif;
      if ($this->session->userdata('status') != NULL) : ?>
        <li class="avoid-clicks"><a href="#"><b><?php echo $this->session->userdata('nama_pelanggan'); ?></b><i class="material-icons right">account_circle</i></a></li>
        <li><a href="<?php echo base_url('login/logout_customer'); ?>"><b>Logout</b></a></li>
      <?php endif; ?>
    </ul>
  </div>
</nav>