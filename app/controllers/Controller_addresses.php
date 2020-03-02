<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Controller_addresses extends CI_Controller {
  public function __construct()
  {
    parent::__construct();
    $this->load->helper('url');
    $this->load->helper('controller_macro');
    $this->load->helper('page');
    $this->load->model('model_village_information');
    $this->load->model('model_setting');
    $this->load->model('model_address');
  }

  public function index()
  {
    $village = new Model_village_information();
    foreach(Model_setting::load_village_information(Model_village_information::ROOT_KEY) as $row) {
      $attr = $row->key;
      $village->$attr = $row->value;
    }

    $new_address = Model_address::from_village($village);
    $data = [
      'tab' => 'addresses',
      'village' => $village,
      'new_address' => $new_address
    ];

    return view('addresses/index', $data);
  }

  public function edit()
  {
    return view('addresses/edit');
  }
}
