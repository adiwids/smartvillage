<?php defined('BASEPATH') OR exit('No direct script access allowed');
if(!function_exists('is_page')) {
  function is_page($uri_string, $match)
  {
    $matches = [];
    $segments = explode('/', $uri_string);
    $segments_length = sizeof($segments);

    if(is_array($match)) {
      $matches = $match;
    } else if(is_string($match)) {
      $matches[0] = $match;
    }

    if($segments_length == 0) {
      return strcmp($matches[0], $uri_string) == 0;
    } else {
      $found = false;
      foreach($matches as $_match) {
        $found = is_numeric( array_search($_match, $segments) );
        if($found) { break; }
      }
      return $found;
    }
  }
}

if(!function_exists('navbar_title')) {
  function navbar_title($village)
  {
    if(!is_null($village)) {
      return sprintf("%s RT %s RW %s", $village->name, $village->neighborhood_rt, $village->neighborhood_rw);
    } else {
      return 'Smart Village';
    }
  }
}
