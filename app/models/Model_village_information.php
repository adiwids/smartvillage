<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Model_village_information {
    const ROOT_KEY = "village";
    const NAME_KEY = "name";
    const NEIGHBOR_RT_KEY = "neighborhood_rt";
    const NEIGHBOR_RW_KEY = "neighborhood_rw";
    const SUBDISTRICT_KEY = "subdistrict";
    const DISTRICT_KEY = "district";
    const PROVINCE_KEY = "province";
    const ZIPCODE_KEY  = "zipcode";
    const COUNTRY_KEY = "country";
    const CHAIRMAN_ID_KEY = "chairman_id";
    const CHAIRMAN_NAME_KEY = "chairman_name";
    const CHAIRMAN_PHONE_NUMBER = "chairman_phone_number";

    var $root;
    var $name, $neighborhood_rt, $neighborhood_rw, $subdistrict, $district,
        $province, $zipcode, $country;
    var $chairman_id, $chairman_name, $chairman_phone_number;

    function __construct($attributes = array(), $adjustable = TRUE)
    {
        $attrs = $adjustable ? self::adjust_attributes($attributes) : $attributes;

        foreach($attrs as $attr => $value) {
            $this->$attr = $value;
        }
    }

    static function adjust_attributes($params = array())
    {
        if( !array_key_exists(self::ROOT_KEY, $params) ) {
            return array();
        }

        $root = array_key_exists(self::ROOT_KEY, $params) ? $params[self::ROOT_KEY] : NULL;

        return [
            "root" => self::ROOT_KEY,
            self::NAME_KEY => !is_null($root) && array_key_exists(self::NAME_KEY, $root) ? $root[self::NAME_KEY] : NULL,
            self::NEIGHBOR_RT_KEY => !is_null($root) && array_key_exists('neighborhood', $root) ? $root['neighborhood'][0] : NULL,
            self::NEIGHBOR_RW_KEY => !is_null($root) && array_key_exists('neighborhood', $root) ? $root['neighborhood'][1] : NULL,
            self::SUBDISTRICT_KEY => !is_null($root) && array_key_exists(self::SUBDISTRICT_KEY, $root) ? $root[self::SUBDISTRICT_KEY] : NULL,
            self::DISTRICT_KEY => !is_null($root) && array_key_exists(self::DISTRICT_KEY, $root) ? $root[self::DISTRICT_KEY] : NULL,
            self::PROVINCE_KEY => !is_null($root) && array_key_exists(self::PROVINCE_KEY, $root) ? $root[self::PROVINCE_KEY] : NULL,
            self::ZIPCODE_KEY => !is_null($root) && array_key_exists(self::ZIPCODE_KEY, $root) ? $root[self::ZIPCODE_KEY] : NULL,
            self::COUNTRY_KEY => !is_null($root) && array_key_exists(self::COUNTRY_KEY, $root) ? $root[self::COUNTRY_KEY] : NULL,
            self::CHAIRMAN_ID_KEY => !is_null($root) && array_key_exists(self::CHAIRMAN_ID_KEY, $root) ? $root[self::CHAIRMAN_ID_KEY] : NULL,
            self::CHAIRMAN_NAME_KEY => !is_null($root) && array_key_exists(self::CHAIRMAN_NAME_KEY, $root) ? $root[self::CHAIRMAN_NAME_KEY] : NULL,
            self::CHAIRMAN_PHONE_NUMBER => !is_null($root) && array_key_exists(self::CHAIRMAN_PHONE_NUMBER, $root) ? $root[self::CHAIRMAN_PHONE_NUMBER] : NULL
        ];
    }
}