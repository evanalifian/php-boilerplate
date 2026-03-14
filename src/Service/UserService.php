<?php

namespace App\PHPBoilerplate\Service;

use App\PHPBoilerplate\Exception\ValidationException;
use App\PHPBoilerplate\Model\UserModel;
use App\PHPBoilerplate\Repository\UserRepository;

class UserService
{
  private UserRepository $userRepository;
  private UserModel $userModel;

  public function __construct(UserRepository $userRepository)
  {
    $this->userRepository = $userRepository;
    $this->userModel = new UserModel();
  }

  public function signup(array $request): void
  {
    $this->signupValidation($request);

    foreach ($this->userRepository->findByUsername($request["username"]) as $res) {
      throw new ValidationException("User already exist");
    }

    $this->userModel->name = $request["name"];
    $this->userModel->username = $request["username"];
    $this->userModel->password = password_hash($request["password"], PASSWORD_BCRYPT);

    $this->userRepository->save($this->userModel);
  }

  public function signupValidation(array $request): void
  {
    if (strlen($request["name"]) === 0 || strlen($request["username"]) === 0 || strlen($request["password"]) === 0) {
      throw new ValidationException("Name, Username, and Password can no be empty");
    }
  }

  public function login(array $request): void
  {

    $this->loginValidation($request);

    $result = $this->userRepository->findByUsername($request["username"]);

    if ($result->rowCount() === 0) {
      throw new ValidationException("Username does not exist");
    }

    $user = $result->fetch();

    if (!password_verify($request["password"], $user["password"])) {
      throw new ValidationException("Password incorrect");
    }
    session_start();
    $_SESSION["username"] = $user["username"];
  }

  public function loginValidation(array $request): void
  {
    if (strlen($request["username"]) === 0 || strlen($request["password"]) === 0) {
      throw new ValidationException("Username and Password can no be empty");
    }
  }
}