<?php defined('BASEPATH') OR exit('No direct script access allowed');

require_once 'admin_controller.php';

class Users_controller extends Admin_controller {
  public function index()
  {
    return view('users/index', $this->data);
  }

  public function edit()
  {
    return view('users/edit', $this->data);
  }
}
