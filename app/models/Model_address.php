<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 *   id: BIGINT(20) UNSIGNED AUTO INCREMENT PRIMARY KEY
 *   addressable_id: BIGINT(20) UNSIGNED
 *   addressable_type: VARCHAR(191) NOT NULL
 *   is_origin: INT(1) DEFAULT 1
 *   is_current: INT(1) DEFAULT 1
 *   neighborhood_rt: VARCHAR(3) NOT NULL
 *   neighborhood_rw: VARCHAR(3) NOT NULL
 *   created_at: VARCHAR(191)
 *   updated_at: VARCHAR(191)
 */

use Carbon\Carbon;

class Model_address extends CI_Model {
    const TABLE_NAME = "addresses";

    static $instance;
    static private $db;

    var $id, $addressable_id, $addressable_type, $is_origin, $is_current,
        $village_name, $number, $neighborhood_rt, $neighborhood_rw, $subdistrict,
        $district, $province, $zipcode, $country,
        $phone, $created_at, $updated_at;

    function __construct($attributes = array())
    {
        parent::__construct();
        self::$db = &get_instance()->db;

        foreach($attributes as $key => $value) {
            $this->$key = $value;
        }
    }

    static function from_village($village_information)
    {
        return new Model_address([
            "is_origin" => 1,
            "is_current" => 1,
            "village_name" => $village_information->name,
            "neighborhood_rt" => $village_information->neighborhood_rt,
            "neighborhood_rw" => $village_information->neighborhood_rw,
            "subdistrict" => $village_information->subdistrict,
            "district" => $village_information->district,
            "province" => $village_information->province,
            "zipcode" => $village_information->zipcode,
            "country" => $village_information->country
        ]);
    }

    function isOrigin()
    {
        intval($this->is_origin) == 1 ? TRUE : FALSE;
    }

    function isCurrent()
    {
        intval($this->is_current) == 1 ? TRUE : FALSE;
    }
}