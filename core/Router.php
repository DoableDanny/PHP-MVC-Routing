<?php

class Router {
  protected $routes = [];

  // A static function is not an instance method. It's kinda like a global method that can be called at any time.
  public static function load($file) {
    // new static gives us a new instance of router (new Router). Can also say "new self".
    $router = new static;

    // Define our routes.
    require $file;
    
    // Return the instance. We can't just return "$this" cus static methods don't have access to "$this".
    return $router;
  }

  public function define($routes) {
    $this->routes = $routes;
  }

  public function direct($uri) {
    if(array_key_exists($uri, $this->routes)) {
      return $this->routes[$uri];
    }

    throw new Exception('No route defined for this URI');
  }
}