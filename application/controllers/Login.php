<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('customer_model');
  }

  public function index()
  {
    $this->load->view('login_page_v');
  }

  function login_customer()
  {
    $email = $this->input->post('email-customer');
    $password = $this->input->post('password-customer');
    $data['customer'] = $this->customer_model->get_customer();
    $masuk = 0;
    foreach ($data['customer']->result() as $cust) :
      if ($cust->email == $email && $cust->password == $password) {
        $masuk++;
        $arraydata = array(
          'id_pelanggan' => $cust->id_pelanggan,
          'nama_pelanggan' => $cust->nama_pelanggan,
          'alamat_pelanggan' => $cust->alamat_pelanggan,
          'wilayah' => $cust->wilayah,
          'tipe_customer' => $cust->tipe_customer,
          'sejak' => $cust->sejak,
          'email' => $cust->email,
          'status' => '1'
        );
        $this->session->set_userdata($arraydata);
      }
    endforeach;

    if ($masuk > 0) {
      redirect('main');
    } else {
      // redirect('welcome/login');
      redirect('login?login=0');
    }
  }

  function logout_customer()
  {
    $arraydata = array(
      'id_pelanggan',
      'nama_pelanggan',
      'alamat_pelanggan',
      'wilayah',
      'tipe_customer',
      'sejak',
      'email',
      'status'
    );
    $this->session->unset_userdata($arraydata);
    redirect('main');
  }
}


/* End of file Login.php */
/* Location: ./application/controllers/Login.php */
