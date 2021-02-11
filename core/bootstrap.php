<?php

// This file sets up all of our core stuff. We can then include this in  our entry file (index.php)

// The below is not needed because we required autoloader in our entry file (index.php)
// require 'core/Router.php';
// require 'core/Request.php';
// require 'core/database/Connection.php';
// require 'core/database/Model.php';

use App\Core\App;

$database = new Database();

$db = $database->connect();

// App is our "Dependency Injection Container". Think of them as boxes. Apply a label, and throw your stuff into the box. When you need them back, simply look for the corresponding label (App::get('database'))
App::bind('database', new Model($db));


// A DI Container is better than the below cus a simple array could easily be accidentally overwritten in our program.
// $app['database'] = new Model($db);

// A helper function used in PagesController.
function view($name, $data = []) {
  extract($data);
  return require "app/views/{$name}.view.php";
}

function redirect($path) {
  header("Location: /{$path}");
}