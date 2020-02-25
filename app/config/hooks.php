<?php defined('BASEPATH') OR exit('No direct script access allowed');

use Dotenv\Dotenv;

/*
| -------------------------------------------------------------------------
| Hooks
| -------------------------------------------------------------------------
| This file lets you define "hooks" to extend CI without hacking the core
| files.  Please see the user guide for info:
|
|	https://codeigniter.com/user_guide/general/hooks.html
|
*/
 $hook['pre_system'] = function() {
   $dotenv = Dotenv::create(ROOTPATH);
   $dotenv->load();

   $default_timezone = getenv('DEFAULT_TIMEZONE');
   if( trim(strlen($default_timezone)) == 0 ) {
     $default_timezone = 'Asia/Jakarta';
   }
   date_default_timezone_set($default_timezone);
 };
