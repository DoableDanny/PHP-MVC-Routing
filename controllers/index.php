<?php

// Controller will interact with the database, get whatever it needs then defers to a view.

$result = $model->readAll();

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

require 'views/index.view.php';