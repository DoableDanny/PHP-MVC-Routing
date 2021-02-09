<?php

// Controller will ask the model to do something (e.g. get data), do whatever it needs then defers to a view.

$result = $app['database']->readAll();

$rowCount = $result->rowCount();

if($rowCount > 0) {
  $users_arr = [];
  $users_arr['data'] = $users_arr;

  while($row = $result->fetch(PDO::FETCH_ASSOC)) {
    extract($row);

    $user = [
      'name' => $name,
      'email' => $email
    ];

    array_push($users_arr['data'], $user);
  }
}

$title = 'Home';
require 'views/index.view.php';