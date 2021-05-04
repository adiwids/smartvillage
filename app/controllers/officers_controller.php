<?php defined('BASEPATH') OR exit('No direct script access allowed');

require_once 'admin_controller.php';

class Officers_controller extends Admin_controller {
  public function __construct()
  {
    parent::__construct();
    $this->load->model('officer_model');
  }

  public function store()
  {
    $redirect_back_to = $this->input->post('back_to');
    if(is_null($redirect_back_to) || strlen($redirect_back_to) == 0) {
      $redirect_back_to = "/settings";
    }

    $officer = Officer_model::find_chairman();
    if(!$officer->is_persisted()) {
      $officer = new Officer_model($this->input->post('officer'));
      $officer->is_chairman = 1;
      $officer->save();
    } else {
      $officer->is_chairman = 1;
      $officer->update($this->input->post('officer'));
    }

    header(sprintf("Location: %s", $redirect_back_to));
  }
}