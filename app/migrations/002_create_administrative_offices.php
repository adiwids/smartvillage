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
      "address_id" => [
        "type" => "BIGINT",
        "constraint" => "20",
        "unsigned" => TRUE,
        "null" => TRUE,
        "default" => "0"
      ],
      "village_name" => [
        "type" => "VARCHAR",
        "constraint" => "191",
        "null" => FALSE
      ],
      "chairman_name" => [
        "type" => "VARCHAR",
        "constraint" => "191",
        "null" => FALSE
      ],
      "chairman_phone_number" => [
        "type" => "VARCHAR",
        "constraint" => "191",
        "null" => TRUE
      ],
      "created_at" => [
        "type" => "VARCHAR",
        "constraint" => "191",
        "null" => TRUE
      ],
      "updated_at" => [
        "type" => "VARCHAR",
        "constraint" => "191",
        "null" => TRUE
      ]
    ];
    $this->dbforge->add_field($fields);
    $this->dbforge->add_key('id', TRUE);
    $this->dbforge->create_table('administrative_offices');
  }

  public function down()
  {
    $this->dbforge->drop_table('administrative_offices');
  }
}