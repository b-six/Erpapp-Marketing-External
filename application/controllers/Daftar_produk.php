<?php
defined('BASEPATH') or exit('No direct script access allowed');
// Don't forget include/define REST_Controller path

/**
 *
 * Controller Daftar_produk
 *
 * This controller for ...
 *
 * @package   CodeIgniter
 * @category  Controller CI
 * @author    Setiawan Jodi <jodisetiawan@fisip-untirta.ac.id>
 * @author    Raul Guerrero <r.g.c@me.com>
 * @link      https://github.com/setdjod/myci-extension/
 * @param     ...
 * @return    ...
 *
 */

class Daftar_produk extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    $produk = $_GET['produk'];
    $data['title'] = "PT. Sinar Sosro - Daftar Produk";
    $data['produk'] = $produk;
    $this->load->view('daftar_produk_v.php', $data);
  }

}


/* End of file Daftar_produk.php */
/* Location: ./application/controllers/Daftar_produk.php */