<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_controller extends CI_Controller {
  protected $data = array();
  protected $village = NULL;

  public function __construct()
  {
    parent::__construct();
    $this->load->helper('url');
    $this->load->helper('controller_macro');
    $this->load->helper('page');
    $this->load->model('village_information_model');
    $this->load->model('setting_model');

    $this->data['village_is_set'] = $this->is_current_village_set();
    $this->data['village'] = $this->load_current_village();
  }

  protected function load_current_village()
  {
    $this->village = new Village_information_model();
    foreach($this->get_village_information() as $row) {
      $attr = $row->key;
      $this->village->$attr = $row->value;
    }

    return $this->village;
  }

  protected function is_current_village_set()
  {
    return count($this->get_village_information()) > 0;
  }

  private function get_village_information()
  {
    return Setting_model::load_village_information(Village_information_model::ROOT_KEY);
  }
}