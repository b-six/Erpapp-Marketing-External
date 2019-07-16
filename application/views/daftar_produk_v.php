<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $title; ?></title>
    <!-- css -->
    <?php $this->load->view('partials/css.php') ?>
</head>

<body>
    <!-- navbar -->
    <?php $this->load->view('partials/navbar.php') ?>

    <!-- menu konten -->
    <div class="container container-wide">
        <div class="row">
            <div class="col s12">
                <h5 class="grey-text"> <b>Daftar Produk</b></h5>
            </div>
        </div>

        <div class="row">
            <div class="col s2">
                <a href="daftar_produk?produk=1">
                    <img class="logo-produk grayscale <?php if ($produk == 1) {
                                                            echo 'grayscale-off';
                                                        } ?>" src="<?php echo base_url('assets/img/produk1.jpg') ?>" alt="">
                </a>
            </div>
            <div class="col s2">
                <a href="daftar_produk?produk=2">
                    <img class="logo-produk grayscale  <?php if ($produk == 2) {
                                                            echo 'grayscale-off';
                                                        } ?>" src=" <?php echo base_url('assets/img/produk2.jpg') ?>" alt="">
                </a>
            </div>
            <div class="col s2">
                <a href="daftar_produk?produk=3">
                    <img class="logo-produk grayscale  <?php if ($produk == 3) {
                                                            echo 'grayscale-off';
                                                        } ?>" src="<?php echo base_url('assets/img/produk3.png') ?>" alt="">
                </a>
            </div>
            <div class="col s2">
                <a href="daftar_produk?produk=4">
                    <img class="logo-produk grayscale  <?php if ($produk == 4) {
                                                            echo 'grayscale-off';
                                                        } ?>" src="<?php echo base_url('assets/img/produk4.png') ?>" alt="">
                </a>
            </div>
            <div class="col s2">
                <a href="daftar_produk?produk=5">
                    <img class="logo-produk grayscale  <?php if ($produk == 5) {
                                                            echo 'grayscale-off';
                                                        } ?>" src="<?php echo base_url('assets/img/produk5.png') ?>" alt="">
                </a>
            </div>
            <div class="col s2">
                <a href="daftar_produk?produk=6">
                    <img class="logo-produk grayscale  <?php if ($produk == 6) {
                                                            echo 'grayscale-off';
                                                        } ?>" src="<?php echo base_url('assets/img/produk6.jpg') ?>" alt="">
                </a>
            </div>
        </div>

        <!-- isi konten -->

        <!-- menu tehbotol -->
        <div class="col s12 hide <?php if ($produk == 1) {
                                        echo 'show-dp';
                                    } ?>">
            <div class="row">
                <div class="col s12 center">
                    <img src="<?php echo base_url('assets/img/konten-tehbotol.jpg') ?>" alt="">
                </div>
            </div>
            <div class="row">
                <div class="col s12">
                    <p class="flow-text size-text-daftar-produk">
                        Produk unggulan PT. Sinar Sosro adalah Tehbotol Sosro kemasan botol beling atau sering disebut RGB ( Returnable Glass Bottle) merupakan produk Teh siap minum yang pertama di Indonesia dan di Dunia yang sudah diluncurkan sejak tahun 1969.
                        <br>
                        <br>
                        Untuk memenuhi kebutuhan pecintanya dimanapun berada, Tehbotol Sosro dengan inovasinya sampai dengan tahun 2019 ini telah memiliki banyak pilihan kemasan produk yaitu :
                        <br>
                        <br>
                        1. Kemasan botol beling, volume 220 ml
                        <br>
                        2. Kemasan kotak (Tetra Pak), volume 200 ml, 250 ml, 330 ml dan 1 Liter
                        <br>
                        3. Kemasan botol plastik PET 450 ml dan 350 ml
                        <br>
                        4. Kemasan pouch 230 ml
                        <br>
                        5. Kemasan Kaleng 318ml
                        <br>
                        <br>
                        Adapun Tehbotol Sosro memiliki varian rasa original, less sugar dan Tawar
                        <br>
                        <br>
                        Apapun Makanannya Minumnya Tehbotol Sosro
                    </p>
                </div>
            </div>

        </div>

        <!-- menu fruit tea -->
        <div class="col s12 hide <?php if ($produk == 2) {
                                        echo 'show-dp';
                                    } ?>">
            <div class="row">
                <div class="col s12 center">
                    <img src="<?php echo base_url('assets/img/konten-fruittea.jpg') ?>" alt="">
                </div>
            </div>
            <div class="row">
                <div class="col s12">
                    <p class="flow-text size-text-daftar-produk">
                        PDengan bertujuan untuk pengembangan produk, maka PT. Sinar Sosro pada tahun 1997 mengeluarkan produk minuman Teh dengan aneka rasa buah yaitu Fruit Tea Sosro dengan target segmen Remaja.
                        <br>
                        <br>
                        Fruit Tea Sosro dengan tagline “Banyak Sensasinya” hadir dalam berbagai rasa seperti :
                        <br>
                        <br>
                        1. Apel
                        <br>
                        2. Blackcurrant
                        <br>
                        3. Stroberi
                        <br>
                        4. Jambu Klutuk
                        <br>
                        5. Freeze (perpaduan rasa stroberi dan anggur sensasi dingin)
                        <br>
                        6. Extreme (perpaduan rasa apel dan blackcurrant)
                        <br>
                        7. Lemon
                        <br>
                        8. Markisa
                        <br>
                        9. Yuzu
                        <br>
                        <br>
                        Fruit Tea Sosro hadir dalam berbagai jenis kemasan yaitu :
                        <br>
                        1. Kemasan botol beling, volume 235 ml
                        <br>
                        2. Kemasan genggam (Tetra Pak), volume 200 ml
                        <br>
                        3. Kemasan kaleng (Can), volume 318 ml
                        <br>
                        4. Kemasan botol plastic PET, volume 500 ml dan 350 ml
                        <br>
                        5. Kemasan pouch, volume 230 ml
                        <br>
                        <br>
                        Fruit Tea Sosro, Banyak Sensasinya
                    </p>
                </div>
            </div>

        </div>

        <!-- menu country choice -->
        <div class="col s12 hide <?php if ($produk == 3) {
                                        echo 'show-dp';
                                    } ?>">
            <div class="row">
                <div class="col s12 center">
                    <img src="<?php echo base_url('assets/img/konten-cc.jpg') ?>" alt="">
                </div>
            </div>
            <div class="row">
                <div class="col s12">
                    <p class="flow-text size-text-daftar-produk">
                        PT. Sinar Sosro juga menghadirkan produk dalam kategori Jus pada akhir tahun 2008 dengan merek Country Choice.
                        <br>
                        <br>
                        Country Choice merupakan minuman real jus kaya manfaat untuk memenuhi kebutuhan nutrisi harian Anda, dengan cara yang praktis dan hemat.
                        <br>
                        <br>
                        Country Choice hadir dalam kemasan kotak ( Tetra Pak) yaitu volume 250 ml dan 1 Liter
                        <br>
                        <br>
                        Country Choice tersedia dengan varian rasa dimana masing-masing rasa memiliki “added nutrition value” yang khas.
                        <br>
                        <br>
                        Country Choice, So Juicy So Natural
                    </p>
                </div>
            </div>

        </div>

        <!-- menu prim-a -->
        <div class="col s12 hide <?php if ($produk == 4) {
                                        echo 'show-dp';
                                    } ?>">
            <div class="row">
                <div class="col s12 center">
                    <img src="<?php echo base_url('assets/img/konten-prima.jpg') ?>" alt="">
                </div>
            </div>
            <div class="row">
                <div class="col s12">
                    <p class="flow-text size-text-daftar-produk">
                        Pada tahun 90-an, PT. Sinar Sosro memproduksi kategori air minum dalam kemasan yaitu dengan merk Air Mineral Prim-A.
                        <br>
                        <br>
                        Pada saat pertama kali dikeluarkan merknya yaitu Air Sosro. Pada tahun 1999, Air Sosro berganti nama menjadi Air Mineral Prim-A.
                        <br>
                        <br>
                        Air Mineral Prim-A hadir dalam berbagai kemasan yaitu :
                        <br>
                        <br>
                        1. Kemasan cup, volume 240 ml
                        <br>
                        2. Kemasan botol, volume 330, 600, 1500 ml
                        <br>
                        3. Kemasan gallon, volume 19 Liter
                        <br>
                        <br>
                        Air Mineral Prim-A mempunyai tagline “ Semangat Prim-A”
                    </p>
                </div>
            </div>

        </div>

        <!-- menu s-tee -->
        <div class="col s12 hide <?php if ($produk == 5) {
                                        echo 'show-dp';
                                    } ?>">
            <div class="row">
                <div class="col s12 center">
                    <img src="<?php echo base_url('assets/img/konten-stee.jpg') ?>" alt="">
                </div>
            </div>
            <div class="row">
                <div class="col s12">
                    <p class="flow-text size-text-daftar-produk">
                        Pada tahun 90-an, untuk memenuhi kebutuhan konsumen terhadap produk teh dengan volume yang lebih banyak dan harga lebih terjangkau, maka PT. Sinar Sosro meluncurkan produk teh siap minum dalam kemasan botol beling dengan merk S-tee dengan volume 318 ml.
                        <br>
                        <br>
                        Dalam perkembangannya, S-Tee hadir dalam berbagai kemasan yaitu :
                        <br>
                        <br>
                        1. Kemasan botol beling, volume 318 ml dan 234 ml
                        <br>
                        2. Kemasan botol plastik PET 350
                        <br>
                        <br>
                        Berbagai kemasan S-Tee tersebut, tidak seluruhnya dipasarkan di seluruh kota di Indonesia, cakupan distribusi masing-masing kemasan berbeda-beda. Khusus untuk S-Tee kemasan botol beling 234 ml hanya bisa didapatkan di wilayah Jawa Tengah dan Jawa Timur.
                        <br>
                        <br>
                        S-Tee, Pas Rasanya Pas Harganya
                    </p>
                </div>
            </div>

        </div>

        <!-- menu tebs -->
        <div class="col s12 hide <?php if ($produk == 6) {
                                        echo 'show-dp';
                                    } ?>">
            <div class="row">
                <div class="col s12 center">
                    <img src="<?php echo base_url('assets/img/konten-tebs.jpg') ?>" alt="">
                </div>
            </div>
            <div class="row">
                <div class="col s12">
                    <p class="flow-text size-text-daftar-produk">
                        Sejak tahun 2004, PT Sinar Sosro berinovasi dengan mengeluarkan produk minuman berkarbonasi dengan merek TEBS. TEBS menyasar target konsumen anak muda yang berjiwa modern, dinamis, senang bersosialisasi, trendy, ekspresif dan easy going. Produk TEBS Sparkling hadir dalam berbagai kemasan yaitu :
                        <br>
                        <br>
                        1. Kemasan botol beling RGB, volume 230 ml
                        <br>
                        2. Kemasan botol plastik PET, volume 500 ml
                        <br>
                        3. Kemasan kaleng (Can), volume 330 ml
                        <br>
                        4. Premix 1.900 ml
                        <br>
                        <br>
                        Saat ini TEBS mempunyai slogan yang ingin diperkenalkan pada konsumen yaitu “Dare To Sparkle”
                    </p>
                </div>
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
            <div class="container container-wide center">
                B six - Erpapp Marketing © Copyright 2019. All rights reserved
            </div>
        </div>
    </footer>

    <!-- js -->
    <?php $this->load->view('partials/js.php') ?>
</body>

</html>