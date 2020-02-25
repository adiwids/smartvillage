<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Create_settings_table extends CI_Migration {
  public function up()
  {
    $fields = [
      "id" => [
        "type" => "BIGINT",
        "constraint" => "20",
        "unsigned" => TRUE,
        "auto_increment" => TRUE
      ],
      "parent_id" => [
        "type" => "BIGINT",
        "constraint" => "20",
        "unsigned" => TRUE,
        "null" => TRUE,
        "default" => 0
      ],
      "key" => [
        "type" => "VARCHAR",
        "constraint" => "191",
        "unique" => TRUE,
        "null" => FALSE
      ],
      "value" => [
        "type" => "VARCHAR",
        "constraint" => "191",
        "null" => TRUE,
        "default" => "N/A"
      ],
    ];
    $this->dbforge->add_field($fields);
    $this->dbforge->add_key('id', TRUE);
    $this->dbforge->create_table('settings');
  }

  public function down()
  {
    $this->dbforge->drop_table('settings');
  }
}