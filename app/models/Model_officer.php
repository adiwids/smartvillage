<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 *   id: BIGINT(20) UNSIGNED AUTO INCREMENT PRIMARY KEY
 *   resident_id: BIGINT(20) UNSIGNED
 *   full_name: VARCHAR(191) NOT NULL
 *   phone: VARCHAR(191)
 *   email: VARCHAR(191)
 *   created_at: VARCHAR(191)
 *   updated_at: VARCHAR(191)
 */

class Model_officer extends CI_Model {
  const TABLE_NAME = "officers";

  var $id;
  var $full_name, $phone, $email, $resident_id;
  var $created_at, $updated_at;
}