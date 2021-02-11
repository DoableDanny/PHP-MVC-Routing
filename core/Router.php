<?php

namespace App\Core;

class Router {
  protected $routes = [
    'GET' => [],
    'POST' => []
  ];

  // A static function is not an instance method. It's kinda like a global method that can be called at any time.
  public static function load($file) {
    // new static gives us a new instance of router (new Router). Can also say "new self".
    $router = new static;

    // Define our routes.
    require "{$file}";
    
    // Return the instance. We can't just return "$this" cus static methods don't have access to "$this".
    return $router;
  }

  // Defining get request routes
  public function get($uri, $controller) {
    $this->routes['GET'][$uri] = $controller;
  }

  // Defining post request routes
  public function post($uri, $controller) {
    $this->routes['POST'][$uri] = $controller;
  }

  public function direct($uri, $requestType) {
    
    if(array_key_exists($uri, $this->routes[$requestType])) {
     
      // ... = "splat operater", spreads the elements of the exploded array arguments. e.g. explode('@', 'PagesController@home') => ['PagesController', 'home'].
      return $this->callAction(
        ...explode('@', $this->routes[$requestType][$uri])
      );
    }

    throw new Exception('No route defined for this URI');
  }

  // Protected cus it want need to be called outside of this class or object. PagesController@home => $controller = PagesController, $action = home.
  protected function callAction($controller, $action) {

    // \\ = escape the backslash
    $controller = "App\\Controllers\\{$controller}";
    $controller = new $controller();

    if(!method_exists($controller, $action)) {
      throw new Exception("{$controller} does not respond to the {$action} action.");
    }

    return $controller->$action();
  }
}