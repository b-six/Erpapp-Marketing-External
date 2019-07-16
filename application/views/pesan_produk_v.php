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

    <!-- konten -->
    <div class="container">
        <div class="row">
            <div class="col s12">
                <h5 class="grey-text"> <b>Pesan Produk</b></h5>
            </div>
        </div>
        <div class="row">
            <form class="col s12" action="" method="post">
                <div class="row">
                    <div class="input-field col s12">
                        <select>
                            <option value="" disabled selected>Pilih produk</option>
                            <?php 
                            foreach($produk->result() as $p) :
                            ?>
                            <option value="<?php echo $p->id_barang;?>"><?php echo $p->nama_barang; ?></option>
                            <?php endforeach; ?>
                        </select>
                        <label>Pilih Produk</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="password" type="password" class="validate">
                        <label for="password">Password</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="email" type="number" class="validate">
                        <label for="email">Jumlah</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <button type="submit" class="btn" name="submit-pesan-produk" id="submit-pesan-produk">Pesan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- footer -->
    <footer class="page-footer red darken-4">
        <div class="container">
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
            <div class="container center">
                B six - Erpapp Marketing © Copyright 2019. All rights reserved
            </div>
        </div>
    </footer>

    <!-- js -->
    <?php $this->load->view('partials/js.php') ?>
</body>

</html>