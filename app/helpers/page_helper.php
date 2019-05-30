<?php defined('BASEPATH') OR exit('No direct script access allowed');
if(!function_exists('is_page')) {
  function is_page($uri_string, $match)
  {
    $segments = explode('/', $uri_string);
    $segments_length = sizeof($segments);
    switch($segments_length) {
      case 0;
        return $uri_string == $match;
      case 1:
        return $segments[0] == $match;
      case 2:
        return strpos($match, $segments[0]) === 0;
    }
  }
}
