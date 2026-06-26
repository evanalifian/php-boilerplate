<?php

use App\Config\Router;
use App\Controller\HomeController;
use App\Controller\UserController;
use App\Middleware\AuthMiddleware;

require_once __DIR__ . "/vendor/autoload.php";

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->safeLoad();

$home = new HomeController();
$user = new UserController();

Router::add("/", "GET", fn() => $home->index(), fn() => AuthMiddleware::isAuth());
Router::add("/account", "GET", fn() => $user->page(), fn() => AuthMiddleware::isNotAuth());
Router::add("/account/update", "POST", fn() => $user->update(), fn() => AuthMiddleware::isNotAuth());
Router::add("/account/delete", "GET", fn() => $user->delete(), fn() => AuthMiddleware::isNotAuth());

Router::add("/login", "GET", fn() => $user->authPage(), fn() => AuthMiddleware::isAuth());
Router::add("/login", "POST", fn() => $user->auth(), fn() => AuthMiddleware::isAuth());

Router::add("/signup", "GET", fn() => $user->signupPage(), fn() => AuthMiddleware::isAuth());
Router::add("/signup", "POST", fn() => $user->save(), fn() => AuthMiddleware::isAuth());

Router::add("/logout", "GET", fn() => $user->logout(), fn() => AuthMiddleware::isNotAuth());

Router::execute();