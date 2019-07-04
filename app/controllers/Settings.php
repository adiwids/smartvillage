<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Settings extends CI_Controller {
  public function __construct()
  {
    parent::__construct();
    $this->load->helper('url');
    $this->load->helper('controller_macro');
    $this->load->helper('page');
  }

  public function index()
  {
    return view('settings/index');
  }
}
