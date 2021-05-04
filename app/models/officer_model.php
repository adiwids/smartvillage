<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 *   id: BIGINT(20) UNSIGNED AUTO INCREMENT PRIMARY KEY
 *   resident_id: BIGINT(20) UNSIGNED
 *   full_name: VARCHAR(191) NOT NULL
 *   phone: VARCHAR(191)
 *   email: VARCHAR(191)
 *   is_chairman: INT(1) DEFAULT 0
 *   created_at: VARCHAR(191)
 *   updated_at: VARCHAR(191)
 */

use Carbon\Carbon;

class Officer_model extends CI_Model {
  const TABLE_NAME = "officers";

  static $instance;
  static private $db;

  var $id;
  var $full_name, $phone, $email, $resident_id, $is_chairman;
  var $created_at, $updated_at;

  function __construct($attributes = array())
  {
    parent::__construct();
    self::$db = &get_instance()->db;

    foreach($attributes as $key => $value) {
      $this->$key = $value;
    }
  }

  static function find_chairman()
  {
    self::$instance = new Officer_model();
    $query = self::$db->where(sprintf("%s.is_chairman", self::TABLE_NAME), 1)
                      ->order_by(sprintf("%s.created_at ASC", self::TABLE_NAME))
                      ->limit(1);
    $row = $query->get(self::TABLE_NAME)->row();

    if(isset($row)) {
      self::$instance->id = $row->id;
      self::$instance->full_name = $row->full_name;
      self::$instance->email = $row->email;
      self::$instance->phone = $row->phone;
      self::$instance->is_chairman = intval($row->is_chairman);
      self::$instance->created_at = $row->created_at;
      self::$instance->updated_at = $row->updated_at;
      self::$instance->resident_id = is_numeric($row->resident_id) ? intval($row->resident_id) : NULL;
    }

    return self::$instance;
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

  function save()
  {
      $attrs = [
        'full_name' => $this->full_name,
        'email' => $this->email,
        'phone' => $this->phone,
        'is_chairman' => intval($this->is_chairman),
        'resident_id' => is_numeric($this->resident_id) ? intval($this->resident_id) : NULL
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
}