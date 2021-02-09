<?php

$name = $_POST['name'];

$app['database']->name = $name;

if($app['database']->save()) {
  echo "$name successfully saved";
}