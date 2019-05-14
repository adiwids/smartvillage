<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Residents extends CI_Controller {
  public function __construct()
  {
    parent::__construct();
    $this->load->helper('url');
    $this->load->helper('controller_macro');
    $this->load->helper('page');
  }

  public function dashboard()
  {
    return view('residents/dashboard', []);
  }

  public function index()
  {
    return view('residents/index', []);
  }

  public function edit()
  {
    $current_tab = $this->input->get('tab');
    if(strlen($current_tab) == 0) {
      $current_tab = 'personal_information';
    }
    return view('residents/edit', ['current_tab' => $current_tab]);
  }
}
