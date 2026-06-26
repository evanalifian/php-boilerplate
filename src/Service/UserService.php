<?php

namespace App\Service;

use App\Exception\ValidationException;
use App\Model\UserModel;
use App\Repository\UserRepository;

class UserService
{
  private static UserRepository $userRepository;

  public function __construct(UserRepository $userRepository)
  {
    self::$userRepository = $userRepository;
  }

  public function save(UserModel $model): void
  {
    self::signupValidation($model);

    $result = self::$userRepository->findByUsername($model->username)->fetch();

    if ($result) {
      throw new ValidationException("User already exist");
    }

    $model->password = password_hash($model->password, PASSWORD_BCRYPT);
    self::$userRepository->save($model);
  }

  private static function signupValidation(UserModel $model): void
  {
    if (empty($model->name) || empty($model->username) || empty($model->password)) {
      throw new ValidationException("Name, Username, and Password can not be empty");
    }
  }

  public function auth(UserModel $model): void
  {
    self::authValidation($model);

    $result = self::$userRepository->findByUsername($model->username)->fetch();

    if (!$result) {
      throw new ValidationException("Username does not exist");
    }

    if (!password_verify($model->password, $result["password"])) {
      throw new ValidationException("Password incorrect");
    }

    $_SESSION["auth"] = $result;
  }

  private static function authValidation(UserModel $model): void
  {
    if (empty($model->username) || empty($model->password)) {
      throw new ValidationException("Username and Password can not be empty");
    }
  }

  public function update(UserModel $userModel, int $userID): void
  {
    $model = $userModel;

    self::updateValidation($model);

    $result = self::$userRepository->findByID($userID)->fetch();

    if (!$result) {
      throw new ValidationException("User does not match");
    }

    self::$userRepository->update($model, $userID);

    $_SESSION["auth"]["name"] = $model->name;
    $_SESSION["auth"]["username"] = $model->username;
  }

  private static function updateValidation(UserModel $userModel): void
  {
    if (empty($userModel->name) || empty($userModel->username)) {
      throw new ValidationException("Name and Username can not be empty");
    }
  }

  public function findByID(int $id_user): array
  {
    return self::$userRepository->findByID($id_user)->fetch();
  }

  public function delete(int $userID): void
  {
    self::$userRepository->delete($userID);
    session_destroy();
    session_unset();
  }
}