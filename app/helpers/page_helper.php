<?php defined('BASEPATH') OR exit('No direct script access allowed');

if(!function_exists('is_page')) {
  function is_page($uri_string, $match)
  {
    $segments = explode('/', $match);
    return strpos($uri_string, $segments[0]) === 0 || $uri_string == $match;
  }
}
