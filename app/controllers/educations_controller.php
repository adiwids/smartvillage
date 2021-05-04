<?php defined('BASEPATH') OR exit('No direct script access allowed');

require_once 'admin_controller.php';

class Educations_controller extends Admin_controller {
  public function index()
  {
    $this->data = array_merge($this->data, [
      'tab' => 'education'
    ]);
    return view('educations/index', $this->data);
  }

  public function edit()
  {
    return view('educations/edit', $this->data);
  }
}
