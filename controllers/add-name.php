<?php

$name = trim($_POST['name']);

if($name !== '') {
  $app['database']->name = $name;

  if($app['database']->save()) {
    echo "$name successfully saved";
  }
} else {
  echo "Makesure to type something!";
}