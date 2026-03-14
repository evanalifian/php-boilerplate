<?php

namespace App\PHPBoilerplate\Controller;

use App\PHPBoilerplate\Config\Database;
use App\PHPBoilerplate\Config\View;
use App\PHPBoilerplate\Exception\ValidationException;
use App\PHPBoilerplate\Repository\UserRepository;
use App\PHPBoilerplate\Service\UserService;

class AuthController
{
  private UserService $userService;

  public function __construct()
  {
    $dbConn = Database::connect();
    $userRepository = new UserRepository($dbConn);
    $this->userService = new UserService($userRepository);
  }

  public function loginPage(): void
  {
    View::render("auth/login");
  }

  public function login(): void
  {
    try {
      $this->userService->login($_POST);
      View::redirect("/");
    } catch (ValidationException $e) {
      View::render("auth/login", [
        "error_message" => $e->getMessage()
      ]);
    }
  }

  public function signupPage(): void
  {
    View::render("auth/signup");
  }

  public function signup(): void
  {
    try {
      $this->userService->signup($_POST);
      View::redirect("/login");
    } catch (ValidationException $e) {
      View::render("auth/signup", [
        "error_message" => $e->getMessage()
      ]);
    }
  }

  public function logout(): void {
    session_start();
    session_destroy();
    session_unset();
    View::redirect("/login");
  }
}