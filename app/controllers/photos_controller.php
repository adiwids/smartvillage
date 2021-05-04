<?php defined('BASEPATH') OR exit('No direct script access allowed');

require_once 'admin_controller.php';

class Photos_controller extends Admin_controller {
  public function index()
  {
    $this->data = array_merge($this->data, [
      'tab' => 'photos',
      'current_tab' => 'list'
    ]);
    return view('photos/index', $this->data);
  }

  public function create()
  {
    $this->data = array_merge($this->data, [
      'tab' => 'photos',
      'current_tab' => 'form'
    ]);
    return view('photos/index', $this->data);
  }
}
