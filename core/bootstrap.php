<?php

// Sets up all of our core stuff. We can then include this in  our entry file (index.php)

$app = [];

// The below is not needed because we required autoloader in our entry file (index.php)
// require 'core/Router.php';
// require 'core/Request.php';
// require 'core/database/Connection.php';
// require 'core/database/Model.php';

$database = new Database();
$db = $database->connect();
$app['database'] = new Model($db);

return $app;