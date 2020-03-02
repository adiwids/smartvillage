<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_create_addresses_table extends CI_Migration {
  public function up()
  {
    $fields = [
      "id" => [
        "type" => "BIGINT",
        "constraint" => "20",
        "unsigned" => TRUE,
        "auto_increment" => TRUE
      ],
      "addressable_id" => [
        "type" => "BIGINT",
        "constraint" => "20",
        "unsigned" => TRUE
      ],
      "addressable_type" => [
        "type" => "VARCHAR",
        "constraint" => "191",
        "null" => FALSE
      ],
      "line_1" => [
        "type" => "VARCHAR",
        "constraint" => "191",
        "null" => FALSE
      ],
      "line_2" => [
        "type" => "VARCHAR",
        "constraint" => "191",
        "null" => TRUE
      ],
      "number" => [
        "type" => "VARCHAR",
        "constraint" => "11",
        "null" => FALSE
      ],
      "village_name" => [
        "type" => "VARCHAR",
        "constraint" => "191",
        "null" => FALSE
      ],
      "neigborhood_rt" => [
        "type" => "VARCHAR",
        "constraint" => "3",
        "null" => TRUE
      ],
      "neigborhood_rw" => [
        "type" => "VARCHAR",
        "constraint" => "3",
        "null" => TRUE
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
      "ownership" => [
        "type" => "VARCHAR",
        "constraint" => "191",
        "null" => FALSE,
        "default" => "permanent"
      ],
      "phone" => [
        "type" => "VARCHAR",
        "constraint" => "191",
        "null" => TRUE
      ],
      "is_origin" => [
        "type" => "INT",
        "constraint" => "1",
        "default" => 1
      ],
      "is_current" => [
        "type" => "INT",
        "constraint" => "1",
        "default" => 1
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
    $this->dbforge->create_table('addresses');
  }

  public function down()
  {
    $this->dbforge->drop_table('addresses');
  }
}