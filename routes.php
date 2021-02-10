<?php

// @ is just a convention
$router->get('', 'PagesController@home');

$router->get('about', 'PagesController@about');

$router->get('contact', 'PagesController@contact');


$router->get('users', 'UsersController@index');

$router->post('users', 'UsersController@store'); // common convention to call it store (store a new user)