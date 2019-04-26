<?php
use Jenssegers\Blade\Blade;

if(!function_exists('view')) {
  function view($name, $data = []) {
    $blade = new Blade(APPPATH.'views', APPPATH.'cache/views');
    echo $blade->make($name, $data);
  }
}

if(!function_exists('asset_path')) {
  function asset_path($name, $options = []) {
    $host = array_key_exists('host', $options) ? $options['host'] : '';
    return implode(DIRECTORY_SEPARATOR, [$host, 'assets', $name]);
  }
}
