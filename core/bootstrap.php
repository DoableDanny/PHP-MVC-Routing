<?php

// Sets up all of our core stuff. We can then include this in  our entry file (index.php)

require 'core/Router.php';
require 'core/Request.php';
require 'core/database/Connection.php';
require 'core/database/Model.php';

$database = new Database();
$db = $database->connect();
$model = new Model($db);

return $model;