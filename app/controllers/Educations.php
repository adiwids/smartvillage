<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Educations extends CI_Controller {
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
      'tab' => 'education'
    ];
    return view('educations/index', $data);
  }
}
