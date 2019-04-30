<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Families extends CI_Controller {
  public function index()
  {
    return view('families/index', []);
  }
}
