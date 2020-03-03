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
    $this->load->model('model_officer');
    $this->load->model('model_address');
    $this->load->model('model_regional');
  }

  public function index()
  {
    $this->run_migration();
    $village = new Model_village_information();
    $officer = Model_officer::find_chairman();

    foreach(Model_setting::load_village_information(Model_village_information::ROOT_KEY) as $row) {
      $attr = $row->key;
      $village->$attr = $row->value;
    }

    $new_address = Model_address::from_village($village);
    $new_address->addressable_type = "model_officer";

    $current_tab = $this->input->get('tab');
    if(is_null($current_tab) || strlen($current_tab) == 0) {
      $current_tab = "village_information";
    }
    $data = [
      "tab" => $current_tab,
      "village" => $village,
      "officer" => $officer,
      "new_address" => $new_address
    ];

    return view('settings/index', $data);
  }

  public function store()
  {
    $attrs = Model_village_information::adjust_attributes($this->input->post());
    Model_setting::insert_village_information_settings($attrs);
    Model_regional::insert_or_update([
      "subdistrict" => $attrs['subdistrict'],
      "district" => $attrs['district'],
      "province" => $attrs['province'],
      "country" => $attrs['country'],
      "zipcode" => $attrs['zipcode']
    ]);

    header('Location: /settings');
  }

  private function run_migration()
  {
    if( !$this->migration->current() ) {
      $this->log_migration_failure($this->migration->error_string());
    } else {
      $this->log_migration_info();
    }

    return TRUE;
  }

  private function log_migration_info()
  {
    log_message('info', sprintf("Database migrated successfully to version %d at %s",
                                $this->migration->current(),
                                Carbon::now()->toDateTimeString()));
  }

  private function log_migration_failure($error)
  {
    log_message('error', sprintf("Migration failed: %s", $error));
  }
}
