<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 *   id: BIGINT(20) UNSIGNED AUTO INCREMENT PRIMARY KEY
 *   parent_id: BIGINT(20) UNSIGNED
 *   key: VARCHAR(191) NOT NULL
 *   value: VARCHAR(191) DEFAULT 'N/A'
 *   created_at: VARCHAR(191)
 *   updated_at: VARCHAR(191)
 */

use Carbon\Carbon;

class Setting_model extends CI_Model {
    const TABLE_NAME = "settings";

    static $instance;
    static private $db;

    var $id, $parent_id, $key, $value, $created_at, $updated_at;

    function __construct() {
        parent::__construct();
        self::$db = &get_instance()->db;
    }

    static function find_by_key($key, $parent_key = NULL)
    {
        self::$instance = new Setting_model();
        self::$db = &get_instance()->db;

        $query = self::$db->select(sprintf("%s.*", self::TABLE_NAME))
                          ->where([sprintf("%s.key", self::TABLE_NAME) => $key])->limit(1);
        if( !is_null($parent_key) ) {
            $parent_table = sprintf("%s AS parent", self::TABLE_NAME);
            $join_on = sprintf("parent.id = %s.parent_id", self::TABLE_NAME);
            $query = self::$db->select(sprintf("%s.*", self::TABLE_NAME))
                              ->join($parent_table, $join_on)
                              ->where(["parent.key" => $parent_key, sprintf("%s.key", self::TABLE_NAME) => $key])
                              ->limit(1);
        }

        foreach($query->get(self::TABLE_NAME)->result() as $row) {
            self::$instance->id = intval($row->id);
            self::$instance->parent_id = !is_null($row->parent_id) ? intval($row->parent_id) : NULL;
            self::$instance->key = $row->key;
            self::$instance->value = $row->value;
            self::$instance->created_at = $row->created_at;
            self::$instance->updated_at = $row->updated_at;
        }

        return self::$instance->is_persisted() ? self::$instance : NULL;
    }

    static function insert_village_information_settings($village_information_attributes)
    {
        self::$instance = new Setting_model();
        $parent_setting = NULL;
        $parent_setting = self::find_by_key($village_information_attributes['root'], NULL);
        if(is_null($parent_setting)) {
            $parent_setting = new Setting_model();
            $parent_setting->key = $village_information_attributes['root'];
            $parent_setting->value = $village_information_attributes['root'];
            $parent_setting->save();
            $parent_setting = self::find_by_key($village_information_attributes['root'], NULL);
        }

        foreach($village_information_attributes as $key => $value) {
            if($key === "root") {
                continue;
            }
            self::$instance = self::find_by_key($key, $village_information_attributes['root']);
            if(is_null(self::$instance)) {
                self::$instance = new Model_setting();
            }
            self::$instance->key = $key;
            self::$instance->parent_id = !is_null($parent_setting) ? intval($parent_setting->id) : NULL;
            self::$instance->value = $value;
            self::$instance->save();
        }
    }

    static function load_village_information($village_information_root_key)
    {
        self::$db = &get_instance()->db;
        $parent_table = sprintf("%s AS parent", self::TABLE_NAME);
        $join_on = sprintf("parent.id = %s.parent_id", self::TABLE_NAME);
        $query = self::$db->select(sprintf("%s.*", self::TABLE_NAME))
                          ->join($parent_table, $join_on)
                          ->where(
                                [
                                    "parent.key" => $village_information_root_key
                                ]
                            );

        return $query->get(self::TABLE_NAME)->result();
    }

    function save()
    {
        if($this->is_persisted()) {
            $this->update(
                [
                    "key" => $this->key,
                    "parent_id" => !is_null($this->parent_id) ? intval($this->parent_id) : NULL,
                    "value" => $this->value
                ]
            );
        } else {
            $creation_datetime = Carbon::now()->toDateTimeString();
            $this->db->insert(self::TABLE_NAME, [
                "key" => $this->key,
                "parent_id" => !is_null($this->parent_id) ? intval($this->parent_id) : NULL,
                "value" => $this->value,
                "created_at" => $creation_datetime,
                "updated_at" => $creation_datetime
            ]);
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