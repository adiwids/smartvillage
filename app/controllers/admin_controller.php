<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_controller extends CI_Controller {
  protected $data = array();

  public function __construct()
  {
    parent::__construct();
    $this->load->helper('url');
    $this->load->helper('controller_macro');
    $this->load->helper('page');
    $this->load->model('village_information_model');
    $this->load->model('setting_model');

    $this->village = new Village_information_model();
    foreach(Setting_model::load_village_information(Village_information_model::ROOT_KEY) as $row) {
      $attr = $row->key;
      $this->village->$attr = $row->value;
    }

    $this->data['village'] = $this->village;
  }
}