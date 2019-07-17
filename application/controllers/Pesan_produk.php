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
    if ($this->session->userdata('status') == NULL) {
      redirect('main?pesan=0');
    }
    $this->load->model('produk_model');
    $this->load->model('sales_order_model');
  }

  public function index()
  {
    $data['sales_order'] = $this->sales_order_model->get_sales_order();
    $data['produk'] = $this->produk_model->get_produk();
    $data['title'] = "PT. Sinar Sosro - Pesan Produk";
    $this->load->view('pesan_produk_v.php', $data);
  }

  public function save_pesanan_customer()
  {
    $id_barang = $this->input->post('select_produk');
    $id_so = $this->input->post('id_so');
    $id_pelanggan = $this->session->userdata('id_pelanggan');
    $total_barang = $this->input->post('jumlah');
    $total_pesanan = $this->input->post('total_harga');
    $status = 'pending';
    $testimoni = 'N';
    $tanggal_pesanan = date('Y-m-d');
  }

}


/* End of file Pesan_produk.php */
/* Location: ./application/controllers/Pesan_produk.php */