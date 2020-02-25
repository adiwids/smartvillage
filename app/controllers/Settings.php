<?php defined('BASEPATH') OR exit('No direct script access allowed');

use Carbon\Carbon;

class Settings extends CI_Controller {
  public function __construct()
  {
    parent::__construct();
    $this->load->helper('url');
    $this->load->helper('controller_macro');
    $this->load->helper('page');

    $this->load->library('migration');
    $this->load->model('model_setting');
  }

  public function index()
  {
    $this->runMigration();

    return view('settings/index');
  }

  public function store()
  {
    var_dump($this->input->post());
    echo "2";
  }

  private function runMigration()
  {
    if( !$this->migration->current() ) {
      $this->logMigrationFailure($this->migration->error_string());
    } else {
      $this->logMigrationInfo();
    }

    return TRUE;
  }

  private function logMigrationInfo()
  {
    log_message('info', sprintf("Database migrated successfully to version %d at %s",
                                $this->migration->current(),
                                Carbon::now()->toDateTimeString()));
  }

  private function logMigrationFailure($error)
  {
    log_message('error', sprintf("Migration failed: %s", $error));
  }
}
