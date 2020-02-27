<?php defined('BASEPATH') OR exit('No direct script access allowed');

use Carbon\Carbon;

class Controller_settings extends CI_Controller {
  public function __construct()
  {
    parent::__construct();
    $this->load->helper('url');
    $this->load->helper('controller_macro');
    $this->load->helper('page');

    $this->load->library('migration');
    $this->load->model('model_village_information');
    $this->load->model('model_setting');
  }

  public function index()
  {
    $this->runMigration();
    $village = new Model_village_information();

    foreach(Model_setting::load_village_information(Model_village_information::ROOT_KEY) as $row) {
      $attr = $row->key;
      $village->$attr = $row->value;
    }

    return view('settings/index', ["village" => $village]);
  }

  public function store()
  {
    $attrs = Model_village_information::adjust_attributes($this->input->post());
    Model_setting::insert_village_information_settings($attrs);

    header('Location: /settings');
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
