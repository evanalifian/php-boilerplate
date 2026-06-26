<?php

namespace App\Repository;

use App\Model\UserModel;

class UserRepository
{
  private static \PDO $connDB;

  public function __construct(\PDO $connDB)
  {
    self::$connDB = $connDB;
  }

  public function findByID(int $userID): \PDOStatement
  {
    $statement = self::$connDB->prepare("SELECT * FROM users WHERE id = ?");
    $statement->execute([$userID]);
    return $statement;
  }

  public function findByUsername(string $username): \PDOStatement
  {
    $statement = self::$connDB->prepare("SELECT * FROM users WHERE username = ?");
    $statement->execute([$username]);
    return $statement;
  }

  public function save(UserModel $model): \PDOStatement
  {
    $statement = self::$connDB->prepare("INSERT INTO users (name, username, password) VALUES (?, ?, ?)");
    $statement->execute([$model->name, $model->username, $model->password]);
    return $statement;
  }

  public function update(UserModel $model, int $userID): \PDOStatement
  {
    $statement = self::$connDB->prepare("UPDATE users SET name = ?, username = ? WHERE id = ?");
    $statement->execute([$model->name, $model->username, $userID]);
    return $statement;
  }

  public function delete(int $userID): \PDOStatement
  {
    $statement = self::$connDB->prepare("DELETE FROM users WHERE id = ?");
    $statement->execute([$userID]);
    return $statement;
  }
}