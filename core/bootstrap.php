<?php

// Sets up all of our core stuff. We can then include this in  our entry file (index.php)

$app = [];

require 'core/Router.php';
require 'core/Request.php';
require 'core/database/Connection.php';
require 'core/database/Model.php';

$database = new Database();
$db = $database->connect();
$app['database'] = new Model($db);

return $app;