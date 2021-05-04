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

if(!function_exists('page_title')) {
  function page_title($url_string)
  {
    return $url_string;
  }
}
