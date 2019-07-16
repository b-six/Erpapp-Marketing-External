<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $title; ?>!</title>
    <!-- css -->
    <?php $this->load->view('partials/css.php') ?>
</head>

<body>
    <!-- navbar -->
    <?php $this->load->view('partials/navbar.php') ?>
    <!-- carousel -->
    <div class="carousel">
        <a class="carousel-item" href="#one!"><img src="<?php echo base_url('assets/img/carousel-img1.jpg') ?>"></a>
        <a class="carousel-item" href="#two!"><img src="<?php echo base_url('assets/img/carousel-img2.jpg') ?>"></a>
        <a class="carousel-item" href="#three!"><img src="<?php echo base_url('assets/img/carousel-img3.jpg') ?>"></a>
        <a class="carousel-item" href="#four!"><img src="<?php echo base_url('assets/img/carousel-img1.jpg') ?>"></a>
        <a class="carousel-item" href="#five!"><img src="<?php echo base_url('assets/img/carousel-img2.jpg') ?>"></a>
    </div>
    <!-- end carousel             -->

    <!-- konten -->
    <div class="container container-wide">
        <div class="row">
            <div class="col s12">
                <h5 class="grey-text"> <b>Produk</b></h5>
            </div>
        </div>
        <div class="row">
            <div class="col s2">
                <a href="daftar_produk?produk=1">
                    <img class="logo-produk" src="<?php echo base_url('assets/img/produk1.jpg') ?>" alt="">
                </a>
            </div>
            <div class="col s2 valign-wrapper">
                <a href="daftar_produk?produk=2">
                    <img class="logo-produk" src=" <?php echo base_url('assets/img/produk2.jpg') ?>" alt="">
                </a>
            </div>
            <div class="col s2">
                <a href="daftar_produk?produk=3">
                    <img class="logo-produk" src="<?php echo base_url('assets/img/produk3.png') ?>" alt="">
                </a>
            </div>
            <div class="col s2">
                <a href="daftar_produk?produk=4">
                    <img class="logo-produk" src="<?php echo base_url('assets/img/produk4.png') ?>" alt="">
                </a>
            </div>
            <div class="col s2">
                <a href="daftar_produk?produk=5">
                    <img class="logo-produk" src="<?php echo base_url('assets/img/produk5.png') ?>" alt="">
                </a>
            </div>
            <div class="col s2">
                <a href="daftar_produk?produk=6">
                    <img class="logo-produk" src="<?php echo base_url('assets/img/produk6.jpg') ?>" alt="">
                </a>
            </div>
        </div>
    </div>

    <!-- footer -->
    <footer class="page-footer red darken-4">
        <div class="container container-wide">
            <div class="row">
                <div class="col l6 s12">
                    <img src="<?php echo base_url('assets/img/sinarsosro_logo.png') ?>" alt="">
                    <p class="grey-text text-lighten-4"> <b> PT. Sinar Sosro </b> <br> Gedung Graha Sosro <br> Jl. Raya Sultan Agung KM 28 <br> Kel. Medan Satria, Bekasi, Jawa Barat 17132</p>
                </div>
                <div class="col l4 offset-l2 s12">
                    <h5 class="white-text">Contact Us</h5>
                    <ul>
                        <li class="valign-wrapper"><img class="logo-footer" src="<?php echo base_url('assets/img/ig.png'); ?>" alt=""><a class="grey-text text-lighten-3" href="#!">@tehbotolsosroid</a></li>
                        <li class="valign-wrapper"><img class="logo-footer" src="<?php echo base_url('assets/img/twitter.png'); ?>" alt=""><a class="grey-text text-lighten-3" href="#!">@tehbotolsosroID</a></li>
                        <li class="valign-wrapper"><img class="logo-footer" src="<?php echo base_url('assets/img/fb.png'); ?>" alt=""><a class="grey-text text-lighten-3" href="#!">Tehbotol Sosro</a></li>
                        <li class="valign-wrapper"><img class="logo-footer" src="<?php echo base_url('assets/img/email.png'); ?>" alt=""><a class="grey-text text-lighten-3" href="#!">contactus@sosro.com</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container center container-wide">
                B six - Erpapp Marketing © Copyright 2019. All rights reserved
            </div>
        </div>
    </footer>

    <!-- js -->
    <?php $this->load->view('partials/js.php') ?>
</body>

</html>