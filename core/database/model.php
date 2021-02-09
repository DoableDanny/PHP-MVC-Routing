<?php

class Model {
  // DB stuff
  private $conn;
  private $table = 'users';

  // User stuff
  public $name;
  public $email;

  public function __construct($db) {
    $this->conn = $db;
  }

  public function readAll() {
    $query = "SELECT * FROM $this->table ORDER BY name";

    // Prepare statement
    $stmt = $this->conn->prepare($query);

    // Execute statement
    $stmt->execute();

    return $stmt;
  }
}