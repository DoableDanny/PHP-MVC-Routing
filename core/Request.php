<?php

class Request {
  // Get our uri e.g. /about/
  public static function uri() {
    $uri = $_SERVER['REQUEST_URI'];

    // For development only
    if($_SERVER['HTTP_HOST'] === 'localhost') {
      $count = 1;
      $uri = str_replace('/del_this/' , '', $uri, $count);
    };

    $uri = trim($uri, '/');
    
    return $uri;
  }
}