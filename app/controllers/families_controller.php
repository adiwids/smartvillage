<?php defined('BASEPATH') OR exit('No direct script access allowed');

require_once 'admin_controller.php';

class Families_controller extends Admin_controller {
  public function __construct()
  {
    parent::__construct();
    $this->load->model('address_model');
  }

  public function index()
  {
    $new_address = Address_model::from_village($this->village);
    $this->data = array_merge($this->data, [
      "new_address" => $new_address
    ]);
    return view('families/index', $this->data);
  }

  public function show()
  {
    $this->data = array_merge($this->data, [
      'tab' => 'family'
    ]);
    return view('families/show', $this->data);
  }

  public function edit()
  {
    $new_address = Address_model::from_village($this->village);
    $this->data = array_merge($this->data, [
      "new_address" => $new_address
    ]);

    return view('families/edit', $this->data);
  }
}
