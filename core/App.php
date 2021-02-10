<?php
// Our Dependency Injection Container(we inject our useful dependencies in here e.g. config vars and database so they are accessible through app and can't be easily overwritten like if it was stored in an array)
class App {

  protected static $registry = [];
  
  public static function bind($key, $value) {
    static::$registry[$key] = $value;
  }

  public static function get($key) {
    if(! array_key_exists($key, static::$registry)) {
      throw new Exception("No {$key} is bound in the container.");
    }

    return static::$registry[$key];
  }
}