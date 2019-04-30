<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Residents extends CI_Controller {
  public function dashboard()
  {
    return view('residents/dashboard', []);
  }

  public function index()
  {
    return view('residents/index', []);
  }
}
