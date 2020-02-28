<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 *   id: BIGINT(20) UNSIGNED AUTO INCREMENT PRIMARY KEY
 *   village_name: VARCHAR(191) NOT NULL
 *   chairman_name: VARCHAR(191) NOT NULL
 *   chairman_phone_number: VARCHAR(191)
 *   address_id: BIGINT(20) NOT NULL DEFAULT 0
 *   created_at: VARCHAR(191)
 *   updated_at: VARCHAR(191)
 */

class Model_administrative_office extends CI_Model {
  const TABLE_NAME = "administrative_offices";

  var $id;
  var $chairman_name, $chairman_phone_number;
  var $address_id;
  var $created_at, $updated_at;
}