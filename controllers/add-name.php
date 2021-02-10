<?php

$name = trim($_POST['name']);

if($name !== '') {
  $database = App::get('database');
  $database->name = $name;

  if($database->save()) {
    echo "$name successfully saved";
  }
} else {
  echo "Makesure to type something!";
}