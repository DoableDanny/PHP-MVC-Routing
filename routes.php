<?php

$router->define([
  '' => 'controllers/index.php',
  'about' => 'controllers/about.php',
  'contact' => 'controllers/contact.php'
]);

// Or could take the form of below
// $router->define('', 'controllers/index.php');
// $router->define('about', 'controllers/index.php');
// $router->define('contact', 'controllers/index.php');