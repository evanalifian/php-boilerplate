<?php

namespace App\PHPBoilerplate\Repository;

use App\PHPBoilerplate\Model\UserModel;

class UserRepository {
  private \PDO $db_conn;

  public function __construct(\PDO $db_conn) {
    $this->db_conn = $db_conn;
  }

  public function findByUsername(string $username): \PDOStatement {
    $statement = $this->db_conn->prepare("SELECT * FROM users WHERE username = ?");
    $statement->execute([$username]);
    return $statement;
  }

  public function save(UserModel $userModel): void {
    $statement = $this->db_conn->prepare("INSERT INTO users (username, name, password) VALUES (?, ?, ?)");
    $statement->execute([$userModel->username, $userModel->name, $userModel->password]);
  }
}