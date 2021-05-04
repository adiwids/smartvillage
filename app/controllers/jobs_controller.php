<?php defined('BASEPATH') OR exit('No direct script access allowed');

require_once 'admin_controller.php';

class Jobs_controller extends Admin_controller {
  public function index()
  {
    $this->data = array_merge($this->data, [
      'tab' => 'jobs'
    ]);
    return view('jobs/index', $this->data);
  }

  public function edit()
  {
    return view('jobs/edit', $this->data);
  }
}
