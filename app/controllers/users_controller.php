<?php defined('BASEPATH') OR exit('No direct script access allowed');

require_once 'admin_controller.php';

class Users_controller extends Admin_controller {
  public function __construct()
  {
    parent::__construct();
    if(!$this->is_current_village_set()) {
			header("Location: /settings");
		}
  }
  public function index()
  {
    return view('users/index', $this->data);
  }

  public function edit()
  {
    return view('users/edit', $this->data);
  }
}
