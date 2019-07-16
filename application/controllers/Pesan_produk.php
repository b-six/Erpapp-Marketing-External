<?php
defined('BASEPATH') or exit('No direct script access allowed');
// Don't forget include/define REST_Controller path

/**
 *
 * Controller Pesan_produk
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

class Pesan_produk extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
    $this->load->model('produk_model');
    ;
  }

  public function index()
  {
    $data['produk'] = $this->produk_model->get_produk();
    $data['title'] = "PT. Sinar Sosro - Pesan Produk";
    $this->load->view('pesan_produk_v.php', $data);
  }

}


/* End of file Pesan_produk.php */
/* Location: ./application/controllers/Pesan_produk.php */