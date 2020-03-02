<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_create_officers_table extends CI_Migration {
  public function up()
  {
    $fields = [
      "id" => [
        "type" => "BIGINT",
        "constraint" => "20",
        "unsigned" => TRUE,
        "auto_increment" => TRUE
      ],
      "resident_id" => [
        "type" => "BIGINT",
        "constraint" => "20",
        "unsigned" => TRUE,
        "null" => TRUE
      ],
      "full_name" => [
        "type" => "VARCHAR",
        "constraint" => "191",
        "null" => FALSE
      ],
      "phone" => [
        "type" => "VARCHAR",
        "constraint" => "191",
        "null" => TRUE
      ],
      "email" => [
        "type" => "VARCHAR",
        "constraint" => "191",
        "null" => TRUE
      ],
      "is_chairman" => [
        "type" => "INT",
        "constraint" => "1",
        "default" => 0
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
    $this->dbforge->create_table('officers');
  }

  public function down()
  {
    $this->dbforge->drop_table('officers');
  }
}