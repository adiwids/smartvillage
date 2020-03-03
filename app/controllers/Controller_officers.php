<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Controller_officers extends CI_Controller {
  public function __construct()
  {
    parent::__construct();
    $this->load->model('model_officer');
  }

  public function store()
  {
    $redirect_back_to = $this->input->post('back_to');
    if(is_null($redirect_back_to) || strlen($redirect_back_to) == 0) {
      $redirect_back_to = "/settings";
    }

    $officer = Model_officer::find_chairman();
    if(!$officer->is_persisted()) {
      $officer = new Model_officer($this->input->post('officer'));
      $officer->is_chairman = 1;
      $officer->save();
    } else {
      $officer->is_chairman = 1;
      $officer->update($this->input->post('officer'));
    }

    header(sprintf("Location: %s", $redirect_back_to));
  }
}