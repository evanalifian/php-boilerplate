<?php

namespace App\PHPBoilerplate\Middleware;

use App\PHPBoilerplate\Config\View;

class AuthMiddleware
{
  public static function isAuth(): void
  {
    session_start();

    if (isset($_SESSION["username"])) {
      View::redirect("/");
    }
  }

  public static function isNotAuth(): void
  {
    session_start();

    if (!isset($_SESSION["username"])) {
      View::redirect("/login");
    }
  }
}