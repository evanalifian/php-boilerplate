<?php

namespace App\Controller;

use App\Config\View;
use App\Config\Database;
use App\Model\AuthModel;
use App\Repository\UserRepository;
use App\Service\AuthService;
use App\Exception\ValidationException;

class AuthController
{
  private static AuthModel $authModel;
  private static AuthService $authService;

  public function __construct()
  {
    $connDB = Database::connect();
    $userRepository = new UserRepository($connDB);

    self::$authModel = new AuthModel();
    self::$authService = new AuthService($userRepository);
  }

  public function page(): void
  {
    View::render("login", [
      "title" => "Sign In - PHP Boilerplate",
      "styles" => ["form.css"]
    ]);
  }

  public function auth(): void
  {
    try {
      self::$authModel->username = $_POST["username"];
      self::$authModel->password = $_POST["password"];

      self::$authService->auth(self::$authModel);
      View::redirect("/account");
    } catch (ValidationException $e) {
      View::render("login", [
        "title" => "Sign In - PHP Boilerplate",
        "styles" => ["form.css"],
        "error_message" => $e->getMessage()
      ]);
    }
  }

  public function logout(): void
  {
    session_destroy();
    session_unset();
    View::redirect("/login");
  }
}