<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_create_regionals_table extends CI_Migration {
  public function up()
  {
    $fields = [
      "id" => [
        "type" => "BIGINT",
        "constraint" => "20",
        "unsigned" => TRUE,
        "auto_increment" => TRUE
      ],
      "subdistrict" => [
        "type" => "VARCHAR",
        "constraint" => "191",
        "null" => TRUE
      ],
      "district" => [
        "type" => "VARCHAR",
        "constraint" => "191",
        "null" => FALSE
      ],
      "province" => [
        "type" => "VARCHAR",
        "constraint" => "191",
        "null" => FALSE
      ],
      "zipcode" => [
        "type" => "VARCHAR",
        "constraint" => "6",
        "null" => TRUE
      ],
      "country" => [
        "type" => "VARCHAR",
        "constraint" => "191",
        "null" => TRUE,
        "default" => "Indonesia"
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
    $this->dbforge->create_table('regionals');
  }

  public function down()
  {
    $this->dbforge->drop_table('regionals');
  }
}