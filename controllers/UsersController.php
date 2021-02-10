<?php

class UsersController {
  
  public function index($successMsg = '') {
    $result = App::get('database')->readAll();

    $rowCount = $result->rowCount();

    if($rowCount > 0) {
      $users = [];
      $users['data'] = $users; // ['data' => []]

      while($row = $result->fetch(PDO::FETCH_ASSOC)) {
        extract($row);

        $user = [
          'name' => $name,
          'email' => $email
        ];

        array_push($users['data'], $user);
      }
    }

    $title = 'Users';
    return view('users', compact('title', 'users', 'successMsg'));
  }

  public function store() {
    // Insert user associated with request.
    // And then revert back to all users.
    $name = trim($_POST['name']);

    if($name !== '') {
      $database = App::get('database');
      $database->name = $name;

      if($database->save()) {
        return redirect('users');
      }
    } else {
      echo "Makesure to type something!";
    }
  }
  
}