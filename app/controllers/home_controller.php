<?php defined('BASEPATH') OR exit('No direct script access allowed');

require_once 'admin_controller.php';

class Home_controller extends Admin_controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function index()
	{
		return view('home/index', $this->data);
	}

	public function about()
	{
		return view('home/about', $this->data);
	}

	public function help()
	{
		return view('home/help', $this->data);
	}
}
