<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Addresses extends CI_Controller {
  public function __construct()
  {
    parent::__construct();
    $this->load->helper('url');
    $this->load->helper('controller_macro');
    $this->load->helper('page');
  }

  public function index()
  {
    $data = [
      'tab' => 'addresses'
    ];
    return view('addresses/index', $data);
  }
}
