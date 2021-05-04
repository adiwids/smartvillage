<?php defined('BASEPATH') OR exit('No direct script access allowed');

use Carbon\Carbon;
require_once 'admin_controller.php';

class Settings_controller extends Admin_controller {
  public function __construct()
  {
    parent::__construct();
    $this->load->library('migration');
    $this->load->model('address_model');
    $this->load->model('officer_model');
    $this->load->model('regional_model');
  }

  public function index()
  {
    $this->run_migration();

    $officer = Officer_model::find_chairman();
    $new_address = Address_model::from_village($this->village);
    $new_address->addressable_type = "officer_model";

    $current_tab = $this->input->get('tab');
    if(is_null($current_tab) || strlen($current_tab) == 0) {
      $current_tab = "village_information";
    }
    $this->data = array_merge($this->data, [
      "tab" => $current_tab,
      "officer" => $officer,
      "new_address" => $new_address
    ]);

    return view('settings/index', $this->data);
  }

  public function store()
  {
    $attrs = Village_information_model::adjust_attributes($this->input->post());
    Setting_model::insert_village_information_settings($attrs);
    Regional_model::insert_or_update([
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
