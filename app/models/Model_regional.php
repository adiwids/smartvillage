<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 *   id: BIGINT(20) UNSIGNED AUTO INCREMENT PRIMARY KEY
 *   subdistrict: VARCHAR(191)
 *   district: VARCHAR(191) NOT NULL
 *   province: VARCHAR(191) NOT NULL
 *   zipcode: VARCHAR(191)
 *   country: VARCHAR(191) DEFAULT "Indonesia"
 *   created_at: VARCHAR(191)
 *   updated_at: VARCHAR(191)
 */

use Carbon\Carbon;

class Model_regional extends CI_Model {
  const TABLE_NAME = "regionals";

  static $instance;
  static private $db;

  var $id;
  var $subdistrict, $district, $province, $zipcode, $country;
  var $created_at, $updated_at;

  function __construct($attributes = array())
  {
    parent::__construct();
    self::$db = &get_instance()->db;

    foreach($attributes as $key => $value) {
      $this->$key = strtolower(trim($value));
    }
  }

  static function insert_or_update($attributes = array())
  {
    $conditions = array();
    foreach($attributes as $key => $value) {
      array_push($conditions, sprintf("%s.%s = '%s'", self::TABLE_NAME, $key, strtolower(trim($value))));
    }
    $query = self::$db->where($conditions)->limit(1)->get(self::TABLE_NAME);

    if($query->num_rows() > 0) {
      $row = $query->row();

      if(isset($row)) {
        self::$instance = new Model_regional([
          "id" => $row['id'],
          "subdistrict" => $row['subdistrict'],
          "district" => $row['district'],
          "province" => $row['province'],
          "country" => $row['country'],
          "zipcode" => $row['zipcode'],
          "created_at" => $row['created_at'],
          "updated_at" => $row['updated_at']
        ]);
      }
    } else {
      self::$instance = new Model_regional($attributes);
      self::$instance->save();
    }

    return self::$instance;
  }

  function save()
    {
        $attrs = [
          "subdistrict" => strtolower(trim($this->subdistrict)),
          "district" => strtolower(trim($this->district)),
          "province" => strtolower(trim($this->province)),
          "zipcode" => strtolower(trim($this->zipcode)),
          "country" => strtolower(trim($this->country))
        ];

        if($this->is_persisted()) {
            $this->update($attrs);
        } else {
            $creation_datetime = Carbon::now()->toDateTimeString();
            $attrs['created_at'] = $creation_datetime;
            $attrs['updated_at'] = $creation_datetime;

            $this->db->insert(self::TABLE_NAME, $attrs);
        }
    }

    function is_persisted()
    {
        return !is_null($this->id) ? is_numeric(intval($this->id)) : FALSE;
    }

    function update($new_attributes = array())
    {
        $new_attributes['updated_at'] = Carbon::now()->toDateTimeString();

        $this->db->where(sprintf("%s.id", self::TABLE_NAME), intval($this->id))
                 ->set($new_attributes)
                 ->update(self::TABLE_NAME);
    }
}