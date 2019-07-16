<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 *
 * Model Stok_produk_model
 *
 * This Model for ...
 * 
 * @package		CodeIgniter
 * @category	Model
 * @author    Setiawan Jodi <jodisetiawan@fisip-untirta.ac.id>
 * @link      https://github.com/setdjod/myci-extension/
 * @param     ...
 * @return    ...
 *
 */

class Produk_model extends CI_Model
{

  // ------------------------------------------------------------------------

  // ------------------------------------------------------------------------


  // ------------------------------------------------------------------------
  public function get_produk()
  {
    $result = $this->db->get('stock_barang');
    return $result;
  }

  // ------------------------------------------------------------------------

}

/* End of file Stok_produk_model.php */
/* Location: ./application/models/Stok_produk_model.php */
