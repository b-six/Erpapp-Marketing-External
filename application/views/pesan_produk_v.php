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
    <!-- generate id sales order -->
    <?php
    $hitung = 0;
    $jumlahIdSama = 0;
    $date = date('Ymd');
    foreach ($sales_order->result() as $row) :
        $hitung++;
        if (strpos($row->id_so, $date) !== false) {
            $jumlahIdSama++;
        }
    endforeach;
    $id_so = $date . ($jumlahIdSama + 1);
    foreach ($sales_order->result() as $row) :
        $sama = 0;
        if ($id_so == $row->id_so) {
            $sama++;
        }
    endforeach;
    $id_so = $date . ($jumlahIdSama + 1 + $sama);
    ?>
    <!-- end generate id sales order -->

    <div class="container">
        <div class="row">
            <div class="col s12">
                <h5 class="grey-text"> <b>Pesan Produk</b></h5>
            </div>
        </div>
        <div class="row">
            <form class="col s12" action="pesan_produk/save_pesanan_customer" method="post">
                <div class="row">
                    <div class="input-field col s12">
                        <input type="text" id="id_so" name="id_so" value="<?php echo $id_so; ?>" hidden>
                        <?php
                        foreach ($produk->result() as $p) :
                            ?>
                            <input type="number" id="harga_barang_<?php echo $p->id_barang; ?>" value="<?php echo $p->harga_barang; ?>" hidden>
                        <?php endforeach; ?>
                        <select id="select_produk" name="select_produk">
                            <option value="" disabled selected>Pilih produk</option>
                            <?php
                            foreach ($produk->result() as $p) :
                                ?>
                                <option value="<?php echo $p->id_barang; ?>"><?php echo $p->nama_barang; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="jumlah" name="jumlah" type="number" class="validate" value="">
                        <label for="jumlah">Jumlah</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="harga_satuan" name="harga_satuan" type="text" class="validate" readonly placeholder="-">
                        <label for="harga_satuan">Harga Satuan</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="total_harga" name="total_harga" type="text" class="validate" readonly placeholder="-" value="0">
                        <label for="total_harga">Total Harga</label>
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