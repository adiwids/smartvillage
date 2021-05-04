<?php defined('BASEPATH') OR exit('No direct script access allowed');

require_once 'admin_controller.php';

class Residents_controller extends Admin_controller {
  public function __construct()
  {
    parent::__construct();
    if(!$this->is_current_village_set()) {
			header("Location: /settings");
		}
  }
  public function dashboard()
  {
    return view('residents/dashboard', $this->data);
  }

  public function index()
  {
    return view('residents/index', $this->data);
  }

  public function edit()
  {
    $this->data = array_merge($this->data, [
      'tab' => 'personal_information'
    ]);
    return view('residents/personal_information_form', $this->data);
  }
}
