<?php

namespace App\Controller;

use App\Config\View;
use App\Config\Database;
use App\Model\SignupModel;
use App\Repository\UserRepository;
use App\Service\SignupService;
use App\Exception\ValidationException;

class SignupController
{
  static private SignupModel $signupModel;
  static private SignupService $signupService;

  public function __construct()
  {
    $connDB = Database::connect();
    $userRepository = new UserRepository($connDB);

    self::$signupModel = new SignupModel();
    self::$signupService = new SignupService($userRepository);
  }

  public function page(): void
  {
    View::render("signup", [
      "title" => "Sign Up - PHP Boilerplate",
      "styles" => ["form.css"]
    ]);
  }

  public function save(): void
  {
    try {
      self::$signupModel->name = $_POST["name"];
      self::$signupModel->username = $_POST["username"];
      self::$signupModel->password = $_POST["password"];

      self::$signupService->save(self::$signupModel);
      View::redirect("/login");
    } catch (ValidationException $e) {
      View::render("signup", [
        "title" => "Sign Up - PHP Boilerplate",
        "styles" => ["form.css"],
        "error_message" => $e->getMessage()
      ]);
    }
  }
}