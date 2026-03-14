<?php

use App\PHPBoilerplate\Config\Router;
use App\PHPBoilerplate\Controller\AuthController;
use App\PHPBoilerplate\Controller\HomeController;
use App\PHPBoilerplate\Middleware\AuthMiddleware;

require_once __DIR__ . "/vendor/autoload.php";

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->safeLoad();

$home = new HomeController();
$auth = new AuthController();

Router::add("/", "GET", fn() => $home->index());
Router::add("/login", "GET", fn() => $auth->loginPage(), fn() => AuthMiddleware::isAuth());
Router::add("/login", "POST", fn() => $auth->login(), fn() => AuthMiddleware::isAuth());
Router::add("/signup", "GET", fn() => $auth->signupPage(), fn() => AuthMiddleware::isAuth());
Router::add("/signup", "POST", fn() => $auth->signup(), fn() => AuthMiddleware::isAuth());
Router::add("/logout", "GET", fn() => $auth->logout(), fn() => AuthMiddleware::isNotAuth());

Router::execute();