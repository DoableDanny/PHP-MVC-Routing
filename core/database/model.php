<?php

class Model {
  // DB stuff
  private $conn;
  private $table = 'users';

  // User stuff
  public $name;

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

  // Create new record
  public function save() {
    $query = "INSERT INTO $this->table SET name = :name";

    // Prepare statement
    $stmt = $this->conn->prepare($query);

    // Clean data
    $this->name = htmlspecialchars(strip_tags($this->name));

    // Bind param
    $stmt->bindParam(':name', $this->name);

    // Execute statement
    if($stmt->execute()) {
      return true;
    }

    printf("Error: %s. \n", $stmt->error());

    return false;
  }
}