<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Controller_officers extends CI_Controller {
  public function store()
  {
    var_dump($this->input->post());
  }
}