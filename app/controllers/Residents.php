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
}
