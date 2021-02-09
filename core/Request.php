<?php

class Request {
  // Get our uri e.g. /about/
  public static function uri() {
    $uri = $_SERVER['REQUEST_URI'];

    // For development only
    if($_SERVER['HTTP_HOST'] === 'localhost') {
      $count = 1;
      $uri = str_replace('/mvc_routing_proj/' , '', $uri, $count);
    };

    // php url path e.g. www.google.com/search?query=best+games => /search
    $uri = trim(parse_url($uri, PHP_URL_PATH), '/');

    return $uri;
  }

  // GET or POST?
  public static function method() {
    return $_SERVER['REQUEST_METHOD'];
  }
}