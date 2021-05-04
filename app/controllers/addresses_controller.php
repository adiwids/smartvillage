<?php defined('BASEPATH') OR exit('No direct script access allowed');

require_once 'admin_controller.php';

class Addresses_controller extends Admin_controller {
  public function __construct()
  {
    parent::__construct();
    $this->load->model('address_model');
  }

  public function index()
  {
    $new_address = Address_model::from_village($this->village);
    $this->data = array_merge($this->data, [
      'tab' => 'addresses',
      'new_address' => $new_address
    ]);

    return view('addresses/index', $this->data);
  }

  public function edit()
  {
    $default_address = Address_model::from_village($this->village);
    $this->data = array_merge($this->data, [
      'tab' => 'addresses',
      'address' => $default_address
    ]);
    return view('addresses/edit', $this->data);
  }
}
