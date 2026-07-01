<?php

namespace App\Controller;

use App\Config\View;

class HomeController
{
  public function index(): void
  {
    View::render("landing", [
      "title" => "PHP Boilerplate - Clean & Structured Foundation"
    ]);
  }
}